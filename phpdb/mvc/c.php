<?php 
include_once 'm.php';
extract($_GET);//$a
extract($_POST);//$libelle,$prix
$m="";
switch ($a) {
	case 'add':
		ajouter_produit($libelle,$prix);
	$m="ajout effecté avec succès";
		break;
		case 'delete':
		supprimer("produit",$id);
		$m="suppression effectée avec succès";
		break;
		case 'show':
		header("location:v.php?id=$id");
die();
		break;
	case 'edit': 

	break;
	default:
		
		break;
}
header("location:v.php?m=$m");
 ?>