<?php 
extract($_POST);//$libelle, $prix
//se connecter à la base de données
$adresse=mysqli_connect("localhost", "root", "", "db2017") or die("Erreur de connexion à la bd ");
//preparer la requete
//$lettre="insert into produit(libelle,prix) values ('".$libelle."',".$prix.")"; 
$lettre=sprintf("insert into produit(libelle,prix) values ('%s',%f)", $libelle,$prix);
//execution de la requtee sql 
mysqli_query($adresse, $lettre) or die("Erreur d'ajout du produit ");

 ?>
 <p style="color: red"> produit <?php echo $libelle; ?> ajouté avec succès
 </p>