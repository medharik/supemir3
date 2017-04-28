<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>nouveau produit</title>
</head>
<body>
	<?php include 'menu.php'; ?>
	<form action="create.php" method="post">
		<table align="center">
			<tr>
				<td>Libellé : </td>
				<td><input type="text" name="libelle" ></td>
			</tr>
			<tr>
				<td>Prix : </td>
				<td><input type="text" name="prix"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Ajouter" ></td>
			</tr>
		</table>
	</form>
</body>
</html>