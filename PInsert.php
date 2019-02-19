<?php 
session_start();
$Memoire = $_SESSION['Memoire'];
require_once("IA.php");
$IA=new IA($_SESSION['Persona']);
$Choix = $IA->Choix($Memoire[$_SESSION['Tour']-1][0],$Memoire[$_SESSION['Tour']-1][1],$_SESSION['Tour']);
if ($_POST['Donner'] == TRUE) {//Le joueur joue la piece
	if ($Choix == TRUE) { // Le CPU joue la piece
		$_SESSION['Joueur'] += 1;
		$_SESSION['IA'] += 1;
		$Memoire[$_SESSION['Tour']]=['Donner','Donner'];
	}
	elseif ($Choix == FALSE) {// Le CPU garde la piece
		$_SESSION['Joueur'] -= 1;
		$_SESSION['IA'] += 2;
		$Memoire[$_SESSION['Tour']]=['Donner','Garder'];
	}
	else{
		echo "ERROR 1";
	}
}
elseif ($_POST['Garder'] == TRUE) {//Le joueur garde la piece
	if ($Choix == TRUE) { // Le CPU joue la piece
		$_SESSION['Joueur'] += 2;
		$_SESSION['IA'] -= 1;
		$Memoire[$_SESSION['Tour']]=['Garder','Donner'];
	}
	elseif ($Choix == FALSE) {// Le CPU garde la piece
		$_SESSION['Joueur'] += 0;
		$_SESSION['IA'] += 0;
		$Memoire[$_SESSION['Tour']]=['Garder','Garder'];
	}
	else{
		echo "ERROR 2";
	}
}
else {
	echo "ERROR 3";
}
echo "<pre>".
		print_r($Memoire,true).
	"</pre>";
$_SESSION['Memoire'] = $Memoire;
$_SESSION['Tour'] += 1;
// header('Location:Partie.php');
echo '	<form action="Partie.php">
		<input type="submit" name="Continuer" value="Continuer">
	</form>';
 ?>
