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
function ajouter_produit($libelle,$prix,
	$chemin="images/icon.png")
{
	global $lien;
$sql=sprintf("insert into produit(libelle,prix,chemin) values ('%s',%f,'%s')", $libelle,$prix,$chemin);
mysqli_query($lien, $sql) or die("erreur d'ajout  du produit".mysqli_error($lien));}



//modifier
function modifier_produit($id,$libelle,$prix,$chemin)
{global  $lien;
$sql=sprintf("update produit set libelle='%s' , prix =%f, chemin='%s' where id=%d", $libelle,$prix,$chemin,$id);
$resultat=mysqli_query($lien, $sql) or die("erreur de modification  du produit");}


//upload
function uploader($infos, $dossier="images/")
{
$nom=$infos['name'];
$tmp=$infos['tmp_name'];

$i=pathinfo($nom);
$extension=$i['extension'];
$autorise=array('png','jpg','gif','jpeg');
$new_name=md5(date('Ymdhis').$nom);
$new_chemin=$dossier.$new_name.".".$extension;

if(!in_array($extension,$autorise)){
die("ce n'est pas une image");

}
$taille=filesize($tmp);
if ($taille>2*1024*1024) {
	die("ce fichier est volumineux , taille max est 8Mo");
}
if (move_uploaded_file($tmp, $new_chemin)) {


	return $new_chemin;

}else{

	return false;

}
}

//fin upload  
 ?>

