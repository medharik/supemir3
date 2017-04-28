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
	<title>Modification du produit</title>
</head>
<body>
	<form action="update.php" method="post">
		<table align="center">
			<tr>
				<td>Libellé : </td>
				<td>
<input type="hidden" name="id" value="<?php echo $ligne['id']; ?>">
				<input type="text" name="libelle" value="<?php echo $ligne['libelle'] ?>" ></td>
			</tr>
			<tr>
				<td>Prix : </td>
				<td><input type="text" name="prix" value="<?php echo $ligne['prix'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Modifier" ></td>
			</tr>
		</table>
	</form>
</body>
</html>