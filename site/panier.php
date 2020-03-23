<?php 
include_once("fonctions-panier.php");
session_start();
if(! isset($_POST["envoi"])) $_POST["envoi"]=""; 
if(! isset($_SESSION['prixTotal'])) $_SESSION['prixTotal']=0; 
if(! isset($_SESSION['code'])) $_SESSION['code']=0;
if(! isset($_SESSION['article'])) $_SESSION['article']=""; 
if(! isset($_SESSION['prix'])) $_SESSION['prix']=0; 
if($_POST["envoi"]=="AJOUTER" && $_POST["code"]!="" && $_POST["article"]!="" && $_POST["prix"]!="") 
{
    $code=$_POST["code"];  
    $article= $_POST["article"]; 
    $prix= $_POST["prix"];
    $_SESSION['code']= $_SESSION['code']."//".$code;
    $_SESSION['article']= $_SESSION['article']."//".$article; 
    $_SESSION['prix']= $_SESSION['prix']."//".$prix; 
 } 
 if($_POST["envoi"]=="VERIFIER") 
{ 
  echo "<table border=\"1\">";
  echo "<tr><td colspan=\"3\"><b>Récapitulatif de votre commande</b></td>";
  echo "<tr><th>&nbsp;code&nbsp;</th><th>&nbsp;article&nbsp;</ th><th>&nbsp; ?prix&nbsp;</th>";
  $total=0; 
  $tab_code=explode("//",$_SESSION['code']);
  $tab_article=explode("//",$_SESSION['article']); 
  $tab_prix=explode("//",$_SESSION['prix']);
 for($i=1;$i<count($tab_code);$i++) 
 { echo "<tr><td>{$tab_code[$i]}</td><td>{$tab_article[$i]}</td><td> ?".sprintf("%01.2f", $tab_prix[$i])."</td>";
   $_SESSION['prixTotal']+=$tab_prix[$i];
 } 
  echo "<tr><td colspan=2> PRIX TOTAL </td><td>".sprintf("%01.2f", $_SESSION['prixTotal'])." ?</td>"; echo "</table>";
 }

if($_POST["envoi"]=="ENREGISTRER")
{
  $idfile=fopen("commande.txt",'w');
  $tab_code=explode("//",$_SESSION['code']);
  $tab_article=explode("//",$_SESSION['article']);
  $tab_prix=explode("//",$_SESSION['prix']); 
  for($i=0;$i<count($tab_code);$i++)
    fwrite($idfile, $tab_code[$i]." ; ".$tab_article[$i]." ; ".$tab_prix[$i].";\n");
  fclose($idfile); 
} 
 if($_POST["envoi"]=="LOGOUT") 
{ 
   session_unset(); 
   session_destroy(); 
   echo "<h3>La session est terminée</h3>";
}
 $_POST["envoi"]="";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Gestion de panier</title>
<style type="text/css">
	input {
		  width: 10%;
  padding: 12px 20px;
  margin:8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  position: relative;left:20px;
	}
	input[type=submit] {
  width: 10%;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
#panier {
	position: relative;left:400px;top:80px;
}
#saiser{
	position: relative;left:200px;
}
label {
	 	   font-variant: small-caps;
	 	   font-size: 120%;
}
legend {
	font-size: 120%;
}


footer{ 
background-color: #708090;
width: 1350PX;
height: 340px;
position:relative;
top: 250px;
color: white;
  	font-size: 20px;
  }
	#colum a{
color: white;
padding: 15px;
display: inline-block;
font-family: cursive;
position: relative;
left: 90px;
top: 30px;
 } 
  #contact{
color: white;
font-family: cursive;
position: relative;
left: 1000px;
bottom : 130px;
height: 10px;

 }#contact input ,textarea {
 border-radius: 14px; padding: 6px;
 	webkit-box-shadow: 0px 1px 3px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 1px 3px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 1px 3px 0px rgba(0, 0, 0, 0.2);	
 }
 #follow{height: 10px; position: relative;bottom: 100px; left: 600px; font-family: cursive;}
 #follow img{
 	width: 50px;
 	height: 50px;
position: relative;
top: 4px;
 
 }#email{
 	position: relative;
 	left: 5px;
 	width: 175px;
 	padding: 29px;
 }
 #send{
 	position: relative;
 	left: 260px;
 	border-radius: 1px;
 	width: 60px;
 }
</style>
</head>
<body>
	<div id="panier">
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" ?enctype="application/x-www-form-urlencoded">
<legend ><b>Saisies d'articles</b></legend>
 <div id="saiser">
   <label>code :</label><br>
     <input type="text" name="code" /><br><br>
   <label>article :</label><br> 
     <input type="text" name="article" /><br><br>
   <label>prix :</label><br>
    <input type="text" name="prix" /><br><br>
</div>
          <input type="submit" name="envoi" value="AJOUTER" />
          <input type="submit" name="envoi" value="VERIFIER" />
          <input type="submit" name="envoi" value="ENREGISTRER" />
          <input type="submit" name="envoi" value="LOGOUT" />

</form>
</div>



<footer>
	<div id="colum">
<a href="Home.html">Home</a><br>
<a href="produits.html">Produits</a><br>	
<a href="commentaire.html">Commentaires</a><br>
</div> <div id="follow">
	   Follow Me<br><br>
	<a href="www.facebook.com"><img src="facebook-logo-button.png" alt="facebook"></a>
	<a href="www.instagram.com"><img src="instagram-logo-button.png" alt="instagram"></a>
	<a href="www.twitter.com"><img src="twitter-logo-button.png" alt="twitter"></a><br><span style="font-size: 20px;">©2020 HOODIES</span>
</div>
      <div id="contact">
	Contact Me<br><br>
	Email:<input type="email" name="email" placeholder="xxxx@xxx.com" id="email" ><br><br>
	message:<textarea></textarea><br>
	<input type="submit" name="valder" value="Send" id="send">
</div>
</footer>
</body>
</html> 