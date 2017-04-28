<?php 
$adresse=mysqli_connect("localhost", "root", "", "db2017") or die("Erreur de connexion à la bd ");
$lettre=sprintf("select * from produit order by id ");
//execution de la requtee sql 
$resultat=mysqli_query($adresse, $lettre) or die("Erreur de selection des produits ");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>liste des produits</title>
</head>
<body>
<div><?php 
include_once 'menu.php';
 ?></div>

<table align="center" border="1">
	<tr>
		<td>id</td>
		<td>libellé</td>
		<td>prix</td>
		<td>actions</td>
	</tr>
<?php while($ligne=mysqli_fetch_array($resultat)){ ?>
	<tr>
		<td><?php echo $ligne['id']; ?></td>
		<td><?php echo $ligne['libelle']; ?></td>
		<td><?php echo $ligne['prix']; ?></td>
		<td><a href="delete.php?id=<?php echo $ligne['id']; ?>">Supprimer</a>
		<a href="edit.php?id=<?php echo $ligne['id']; ?>">Editer</a>
		<a href="show.php?id=<?php echo $ligne['id']; ?>">consulter</a></td>
	</tr>
<?php  }?>

</table>
	
</body>
</html>