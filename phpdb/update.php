<?php 
extract($_POST);
$adresse=mysqli_connect("localhost", "root", "", "db2017") or die("Erreur de connexion à la bd ");
//preparer la requete
//$lettre="insert into produit(libelle,prix) values ('".$libelle."',".$prix.")"; 
$lettre=sprintf("update produit 
set libelle='%s',
prix=%f
where id=%d
	", $libelle,$prix,$id);
//execution de la requete sql 
$resultat=mysqli_query($adresse, $lettre) or die("Erreur d'ajout du produit ");
//redirection vers index.php
header("location:index.php");
?>
