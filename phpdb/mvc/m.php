<?php 
$lien=connecter_db();
function connecter_db()
{
	$lien=mysqli_connect("localhost", "root", "", "db2017") or die("Erreur de connexion à la bd ");
return $lien;
}

function supprimer($table,$id,
	$attr_id="id"){
	global  $lien;
	$sql=sprintf("delete from %s where %s=%d",$table,$attr_id,$id);
mysqli_query($lien, $sql) or die("erreur de suppression de $table");
}//supprimer("produit",3) ou supprimer("personne",4,"matricule");
function get_all($table)
{
global  $lien;
$sql=sprintf("select * from %s ",$table);
$resultat=mysqli_query($lien, $sql) or die("erreur de selection de $table");
return $resultat;
}

function get($table,$id)
{global  $lien;
	$sql=sprintf("select * from %s where id=%d",$table,$id);
$resultat=mysqli_query($lien, $sql) or die("erreur de selection de $table");

$ligne=mysqli_fetch_assoc($resultat);
return  $ligne;
}

//

function get_by($table,$critere)
{global  $lien;
	$sql=sprintf("select * from %s where %s ",$table,$critere);
$resultat=mysqli_query($lien, $sql) or die("erreur de selection de $table");
$ligne=mysqli_fetch_assoc($resultat);
return  $ligne;
}//get_by($table,"prix > 3000");
//ajouter
function ajouter_produit($libelle,$prix)
{
	global $lien;
$sql=sprintf("insert into produit(libelle,prix) values ('%s',%f)", $libelle,$prix);
mysqli_query($lien, $sql) or die("erreur d'ajout  du produit");}



//modifier
function modifier_produit($id,$libelle,$prix)
{global  $lien;
$sql=sprintf("update produit set libelle='%s' , prix =%f where id=%d", $libelle,$prix,$id);
$resultat=mysqli_query($lien, $sql) or die("erreur de modification  du produit");}


 ?>

