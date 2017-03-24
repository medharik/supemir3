<style type="text/css">
	.homme{
background: blue;
color: white;
	}

	.femme{
background: pink;
color: rouge;
	}

</style>
<?php

$nom="ali";
$sexe="femme"; 
$poli=($sexe=="homme")? "Mr":"Mme" 
;
if ($sexe=="homme") {
	$poli="Mr";
} else {
$poli="Mme";
}
switch ($couleur) {
	case 'white':
echo "blanc";
		break;

	case 'black':
echo "noir";
		break;
	case 'red':
echo "rouge";
		break;
	default:
		echo "autre";
		break;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body class="<?php echo $sexe; ?>">
Bonjour <?php echo $poli; ?> <?php echo $nom; ?>
 
</body>
</html>