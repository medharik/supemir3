<?php 
include_once 'm.php';
demarrer_session();
//echo session_id();
// verifier si l'user est connecté(cad la variable $_session contient les infos correcte )
check($_SESSION['login'],$_SESSION['passe']);
extract($_GET);//$id, $a , $m
$table="produit";
$resultat=get_all($table);
$action="add";
$btn="Ajouter";
if (!empty($a)&& $a=="showforedit") {
$action="update";
$btn="Modifier";

}
if(!empty($id)){
	$produit=get($table,$id);
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body >
<div class="alert alert-success">Bienvenue : <?php echo $_SESSION['nomprenom'] ?></div>
<?php if (isset($m)): ?>
	<div class="alert">
	<?php echo $m; ?>

</div>
<?php endif ?>

<a href="deconnexion.php" class="btn btn-danger">
	déconnexion

</a>

	<form action="c.php?a=<?php  echo $action; ?>" method="post" enctype="multipart/form-data">
		<table align="center" class="table table-striped">
			<tr>
				<td>libelle : </td>
				<td> <input type="text" name="libelle" value="<?php if(isset($produit) && $a=="showforedit") echo $produit['libelle']; ?>">
<input type="hidden" name="id" value="<?php  echo $id; ?>">
				</td>
			</tr>
			<tr>
				<td>prix :</td>
				<td> <input type="text" name="prix" value="<?php if(isset($produit) && $a=='showforedit') echo $produit['prix']; ?>"></td>
			</tr>
			<tr>
				<td>Photo  : </td>
				<td><input type="file" name="photo"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"> <input type="submit" value="<?php  echo $btn; ?>"></td>
							</tr>
		</table>
	</form>
	<br> 
	<table align="center" border="1" width="90%">
		<tr>
			<th>Photo</th>
			<th>libelle</th>
			<th>prix</th>
			<th>action</th>
		</tr>
<?php while($ligne=mysqli_fetch_assoc($resultat)){ ?>
		<tr>
			<td><img src="<?=$ligne['chemin']; ?>" width="100"></td>
			<td><?=$ligne['libelle']; ?></td>
			<td><?=$ligne['prix']; ?></td>
			<td><a href="c.php?a=show&id=<?=$ligne['id']; ?>">consulter</a>
			<a href="c.php?a=delete&id=<?=$ligne['id']; ?>"
			onclick="return confirm('voulez vous vrm supprimer?')">supprimer</a>
			<a href="c.php?a=edit&id=<?=$ligne['id']; ?>">éditer</a></td>
		</tr>

<?php } ?>
	</table>
<hr>

<?php if (!empty($id) && !empty($a) && $a=="show"): ?>
	<ul>
		<li>Libellé : <?php echo $produit['libelle']; ?></li>
		<li>Prix : <?php echo $produit['prix']; ?></li>
		<li>id : <?php echo $produit['id']; ?></li>
	</ul>
<?php endif ?>
</body>
</html>