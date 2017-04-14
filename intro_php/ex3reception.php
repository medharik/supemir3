<!-- les superglobales => des variables créer implicitement par php -->
<meta charset="utf-8">
<?php 
print_r($_POST);

 ?>
<br>
<h2>informations reçus : </h2>
<ul>
	<li>Mot clé : <?php echo $_POST['motcle']; ?></li>
	<li>Age :  <?=$_POST['age']; ?> ans </li>
</ul>

<h2>informations reçus : </h2>
<ul>
	<?php 

echo "<li>mot clé est : {$_POST['motcle']}</li>";
	 ?>
	 	<?php 

echo '<li>mot clé est : '.$_POST['motcle'].'</li>';
	 ?>
</ul>
<h2>avec foreach</h2>
<ul>
<?php 
foreach ($_POST as $key => $value) {
echo "<li>$key est $value</li>"	;
if(is_numeric($value)){
$value=doubleval($value);
	echo "<br>c'est un nombre";
	if(is_int($value)){
	$n=intval($value);
	echo "<br>sa valeur entiere $n";
}

if (is_double($value)) {
	$n=doubleval($value);
	echo "<br>sa valeur réelle $n";
}
	$n=doubleval($value);
	echo "sa valeur numerique est $n";

}else{
	echo "<br>ce n'est pas un nombre";
if (is_string($value)) {
	echo "<br>c'est une chaine de caracteres";
}
}


}
 ?>
 </ul>