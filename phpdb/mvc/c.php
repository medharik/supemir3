<?php 
include_once 'm.php';
extract($_GET);//$a
extract($_POST);//$libelle,$prix
$m="";
switch ($a) {
	case 'cnx':
		check($login,$motdepasse);

		break;
	case 'add':
$chemin=uploader($_FILES['photo']);

if($chemin){
		ajouter_produit($libelle,$prix,$chemin);
}else{
	die("Erreur d'upload de la photo");
}
	$m="ajout effecté avec succès";
		break;
		case 'delete':
		supprimer("produit",$id);
		$m="suppression effectée avec succès";
		break;
		case 'show':
		header("location:v.php?id=$id&a=show");

die();
		break;
	case 'edit': 
header("location:v.php?id=$id&a=showforedit");
die();
	break;
	case 'update': 
modifier_produit($id,$libelle,$prix);
$m="modification du $libelle effectée avec succès";


	break;
	default:
		
		break;
}
header("location:v.php?m=$m");

 ?>