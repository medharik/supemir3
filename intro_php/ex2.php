<?php 
//1-boucle for
//foreach
//while
//do while
$annee_en_cours=(date('Y'));
//var_dump( $annee_en_cours);
$tableau_indexe=array();
$tableau_indexe[0]="jesse";
$tableau_indexe[1]=23;
$tableau_indexe[2]="brazza";
echo "<pre>";
var_dump($tableau_indexe);
echo "</pre>";
$tableau_assosciatif=array();
$tableau_assosciatif['nom']="jesse";
$tableau_assosciatif['age']=23;
$tableau_assosciatif['ville']="brazza";
var_dump($tableau_assosciatif);
//ou 
$ti=array("jesse",23,"brazza");
$ta=array("nom"=>"jesse","age"=>23,'ville'=>"brazza");
echo "<br>";
var_dump($ti);
echo "<br>";
var_dump($ta);
echo "<br>";
print_r( $ti);
//
$mois=array("janvier",'fevrier','mars','avril','mai');
$mois[]="juin";
$mois[]="juillet";


 ?>
 <?php foreach ($ta as $c => $v): ?>
 <li><?php echo "$c est $v"; ?></li>
 <?php endforeach ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>boucle</title>
 </head>
 <body>

 	<form action="">
 	<table align="center">
 		<tr>
 			<td><select name="jours">
 				
 <option selected value="" >
 Jours
 </option>
 <?php for($i=1;$i<=31;$i++){ ?>

 <option value="<?php echo $i; ?>"> 

 <?php echo $i; ?>
 	
 </option>
<?php } ?>
 			</select></td>
 			<td>
 			<select name="mois">
 	<option selected  value="">Mois</option>
 	<!-- <?php //for($i=12;$i>0  ;$i--){  ?>
 	<option value="<?php //echo $i; ?>"><?php //echo $i; ?></option>
 	<?php //} ?> -->
<?php foreach ($mois as $key=> $value): ?>
	<option value="<?php echo $key+1 ?>"> <?php echo $value; ?></option>
<?php endforeach ?>

 			</select></td>
 			<td><select name="annees">f
 				<option selected="">Années</option>

<?php

 for($n=(int)date('Y')-12;$n>(
 	intval(date('Y'))-100);$n--){ ?>
 		<option value="<?php echo $n;?>"><?php echo $n;?></option>
<?php } ?>
 			</select></td>
 		</tr>
 	</table>
 </form>
 <select>
 	<option value="homme">Homme</option>
<option value="femme">Femme</option>
 </select>
 </body>
 </html>