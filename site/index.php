<?php
//$serveur = 'localhost';
//$db = 'id12823797_test';
//$user = 'id12823797_root';
//$password = 'databaseroot';
try{
$connexion = new PDO('mysql:host=localhost;dbname=test','id12823797_root','databaseroot');

}
catch(PDOException $e){
die('Attention Erreur:'.$e->getMessage());
}
if($connexion=true){
echo "connexion reussie";
}else{
echo "connexion non reussie";}
$connexion = null;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LES SESSIONS</title>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Acceuil HomeDeco</title>

<style type="text/css">
<!--
table {
  border-collapse: collapse;
  border-spacing:0;
}
td {
	border-spacing: 0;
	border-collapse: collapse;
}

.Style1 {   font-size: 30px;
   font-family: "Segoe Print";
   color: white;
    font-weight: bold;
}
.Style2 {   font-size: 24px;
   color: #0033FF;
}
.Style4 {
   color:#FFFFFF;
   font-family: "Segoe Print";
   font-size: 24px;
   font-weight: bold;
}
.Style5 {
	color: white;
   font-family: Calibri;
   font-weight: bold;
    font-size: 22px;
}
h2{
	 font-family: "Segoe Print";
	 font-size: 18px;
}
.Style3 {
	color:#FA8072;
   font-family: "Segoe Print";
   font-weight: bold;
    font-size: 26px;
}
-->
</style>
</head>


<body bgcolor="black">
<table width="100%" height="100%" border="0">
  <tr>
    <td width="100" height="50" bgcolor="9E0E40" colspan="3"><div align="center" class="Style1">HomeDeco</div></td>
  </tr>
  <tr>
      <!--<table width="200" height="197" border="0">-->
       <td width="180" height="330" bgcolor="606060" ><h2><b><FONT color="White">Tous les produits par cat&eacutegorie : </b><h2><div align="left">

<p class="Style5"><a href="cuisine.php" target="_parent" style="color :#000000">Rangement Cuisine</a></p>

<p class="Style5"><a href="formulaire.html" target="_parent" style="color :#000000">Vos Commentaires</a></p></div></td>

          <td width="300"><span class="Style3">HomeDeco</span><span class="Style4"><div align="center"> Le number 1 du mobilier et de la d&eacutecoration au Maroc!</div></span>
          	<div align="center"><img src="g.gif" width="300" height="120" border="4"/> </div>
          	<h1 align="center"><FONT color="White">Tout pour une maison parfaite !</h1><p class="Style5" ></p>
         </td>
         <td width="650" height="350"> <div align="right"><img src="p1.jpg" width="800" height="370" border="4"/> </div> </td>
        </tr>

</table>
</body>
</html>
