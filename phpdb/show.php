<?php 
extract($_GET);//$id
$adresse=mysqli_connect("localhost", "root", "", "db2017") or die("Erreur de connexion à la bd ");
//preparer la requete
//$lettre="insert into produit(libelle,prix) values ('".$libelle."',".$prix.")"; 
$lettre=sprintf("select * from produit where id=%d",$id);
//execution de la requete sql 
$resultat=mysqli_query($adresse, $lettre) or die("Erreur d'ajout du produit ");
 $ligne=mysqli_fetch_array($resultat);
 ?>
<?php include('menu.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h2>Les informations du produit  :
<?php echo $ligne['libelle']; ?>
</h2>
<p>Prix : <?php echo $ligne['prix'] ?></p>
</body>
</html>