<?php 
session_start();
session_destroy();
session_start();
$_SESSION['Joueur'] = 5;
$_SESSION['IA'] = 5;
$_SESSION['Tour'] = 1;
$Memoire[0]=['ActionJoueur','ActionIA'];
$_SESSION['Memoire'] = $Memoire;
?>
<!DOCTYPE html>
<html>
<head>
	<title>START</title>
</head>
<body>
	<h1>Regle du jeu</h1>
	<p>A chaque tour les joueurs choisie de soit garder la piece, soit de donner la piece. Si les deux joueur choisissent de joue leur piece chacun recupere 2 piece, si aucun ne joue de piece chacun repart avec la piece qu'il avait et personne ne gagne de piece, et si un joueur joue sa piece mais que l'adversaire garde la sienne, l'adversaire recupere  piece 3 piece l'autre joueur aucune. </br>Contre vous ce trouve differentes personalité, a vous de deviner comment elle joue pour gagner le plus de piece.</br>(astuce: toujours garder sa piece n'est pas toujours la meilleur solution.)</p>
	<form action='Partie.php' method="POST">
		<select name="Persona" id="Persona">
	    	<option name = "Egoiste" value="1">Persona 1</option>
	    	<option name = "Gentil" value="2">Persona 2</option>
	    	<option name = "Alterne" value="3">Persona 3</option>
	    	<option name = "Mefiant" value="4">Persona 4</option>
	    	<option name = "Rancunier" value="5">Persona 5</option>
    	</select>
		<input type='submit' value='START' name='START'/>
	</form>
</body>
</html>