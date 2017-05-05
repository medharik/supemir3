<?php 
include_once 'm.php';
extract($_GET);//$id : id=90
$table="produit";
$resultat=get_all($table);
if(!empty($id)){
	$produit=get($table,$id);
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php if (isset($_GET['m'])): ?>
	<div class="alert">
	<?php echo $_GET['m']; ?>

</div>
<?php endif ?>



	<form action="c.php?a=add" method="post">
		<table align="center">
			<tr>
				<td>libelle : </td>
				<td> <input type="text" name="libelle"></td>
			</tr>
			<tr>
				<td>prix :</td>
				<td> <input type="text" name="prix"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"> <input type="submit" value="valider"></td>
							</tr>
		</table>
	</form>
	<br> 
	<table align="center" border="1" width="90%">
		<tr>
			<th>id</th>
			<th>libelle</th>
			<th>prix</th>
			<th>action</th>
		</tr>
<?php while($ligne=mysqli_fetch_assoc($resultat)){ ?>
		<tr>
			<td><?=$ligne['id']; ?></td>
			<td><?=$ligne['libelle']; ?></td>
			<td><?=$ligne['prix']; ?></td>
			<td><a href="c.php?a=show&id=<?=$ligne['id']; ?>">consulter</a>
			<a href="c.php?a=delete&id=<?=$ligne['id']; ?>">supprimer</a>
			<a href="c.php?a=edit&id=<?=$ligne['id']; ?>">éditer</a></td>
		</tr>

<?php } ?>
	</table>
<hr>

<?php if (!empty($id)): ?>
	<ul>
		<li>Libellé : <?php echo $produit['libelle']; ?></li>
		<li>Prix : <?php echo $produit['prix']; ?></li>
		<li>id : <?php echo $produit['id']; ?></li>
	</ul>
<?php endif ?>
</body>
</html>