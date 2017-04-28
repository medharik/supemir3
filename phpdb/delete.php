<?php 
extract($_GET);//$id
$adresse=mysqli_connect("localhost", "root", "", "db2017") or die("Erreur de connexion à la bd ");
//preparer la requete
//$lettre="insert into produit(libelle,prix) values ('".$libelle."',".$prix.")"; 
$lettre=sprintf("delete from produit where id=%d",$id);
//execution de la requtee sql 
mysqli_query($adresse, $lettre) or die("Erreur d'ajout du produit ");
 ?>
<?php include('menu.php'); ?>
 suppression effectuée avec succès