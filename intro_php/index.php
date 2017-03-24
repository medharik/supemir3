<?php  $nom="abdo"; 
$age=23;
//var_dump($nom);
//var_dump($age);	
$a=20;
$b=30;
$c=$a;
$a=40;
$d=&$b;//par reference
$b=51;

?>
<ul>
<li>a est : <?php echo $a; ?>
</li>
<li>b est : <?php echo $b; ?>
</li>
<li>c est : <?php echo $c; ?>
</li>
<li>d est : <?php echo $d; ?>
</li>
</ul>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Bienvenue <?php echo $nom; ?></h2>
<p>
	tu as <?=$age;?> ans
</p>
<?php 
echo '<h2>je suis $nom, j\'ai $age</h2>';

echo "<h2>je suis $nom, j'ai $age</h2>";
echo "<h2>je suis ".$nom." j'ai ".$age." ans</h2>";
echo '<h2>je suis '.$nom.' j\'ai '.$age.' ans</h2>';
 ?>
<h2 class="">je suis <?php echo $nom; ?> j'ai <?php echo $age ; ?> ans</h2>

<h2>les conditions : </h2>
<?php
$majorité=""; 
if ($age>21) {
	$majorité="majeur";
}else{
	$majorité="mineur";
}

 ?>
<h3>tu es <?php echo $majorité; ?></h3>
<h4>
<?php $majorité= ($age>21) ? "majeur":"mineur" ; ?>
tu es <?php echo $majorité;  ?>	

</h4>
<h4>autre if</h4>
<!-- if pour integrer du code html
 -->
 <?php if ($age>21): ?>
	<h3>majeur</h3>
<?php else: ?>
	<h3>mineur</h3>
<?php endif ?>

</body>
</html>