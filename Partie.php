<?php 
session_start();
$_SESSION['Persona'] = $_POST['Persona'];
$Memoire = $_SESSION['Memoire'];
$TourP = $_SESSION['Tour']-1;
echo "Vous ait au tour ".$_SESSION['Tour']." avez ".$_SESSION['Joueur']." pieces et votre adversaire a ".$_SESSION['IA']." pieces.</br>";
if ($_SESSION['Tour']>1) {
	echo "Au tour ".$TourP.", Vous avez ".$Memoire[$TourP][0]." et votre adversaire à ".$Memoire[$TourP][1];
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Partie</title>
</head>
<body>
	<form method='POST' action='Pinsert.php'>
		<input type='submit' value='Donner' name='Donner'/>
		<input type='submit' value='Garder' name='Garder'/>
	</form>
	<form action="index.php">
		<input type="submit" name="Quitter" value="Quitter">
	</form>
</body>
</html>
<?php 
echo "<pre>".
		print_r($Memoire,true).
	"</pre>";
 ?>