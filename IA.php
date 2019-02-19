<?php 
class IA
{
	private $_CoupJ;//coup Joueur precedent
	private $_CoupP;//coup IA precedent
	private $_Personnalité;

	public function __construct($Perso)
	{

				$this->_Personnalite = $Perso;
	}
	 public function Choix($CoupJ,$CoupP,$Tour)
	{
		$this->_CoupJ = $CoupJ;
		$this->_CoupP = $CoupP;
		$this->_Tour = $Tour;
		switch ($this->_Personnalite) {
			case 1:
				return FALSE;
				break;
			case 2:
				return TRUE;
				break;
			case 3:
				if ($this->_Tour == 1 || $this->_CoupP == 'Donner') {
					echo "TRUE";
					return TRUE;
				}
				elseif ($this->_CoupP == 'Garder') {
					echo "FALSE";
					return FALSE;
				}
				else{
					echo "ERROR 4";
				}
				break;
			case 4:
				if ($this->_Tour == 1 || $this->_CoupJ == 'Donner') {
					echo "TRUE";
					return TRUE;
				}
				elseif ($this->_CoupJ == 'Garder') {
					echo "FALSE";
					return FALSE;
				}
				else{
					echo "ERROR 4";
				}
				break;
			case 5:
				if ($this->_Tour == 1 || $this->_CoupJ == 'Donner' && $Rancune == 0 ) {
					echo "TRUE";
					return TRUE;
				}
				elseif ($this->_CoupJ == 'Garder' || $Rancune == 1 ) {
					echo "FALSE";
					$Rancune=1;
					return FALSE;
				}
				else{
					echo "ERROR 4";
				}
				break;
			default:
				echo "ERROR SWTCH";
				break;
		}
	}
}
// class Egoiste
// {
	
// 	public function __construct()
// 	{	
// 	}

// 	public function jouer()
// 	{
// 		return FALSE;
// 	}

// }

// class Gentil
// {
	
// 	public function __construct()
// 	{
// 	}
// 		public function jouer($CoupJ,$CoupP,$Tour)
// 	{
// 		return TRUE;
// 	}
// }
// class Alterne
// {
// 	public function __construct()
// 	{
// 	}
// 	 public function jouer($CoupJ,$CoupP,$Tour)
// 	{
// 		$this->_CoupJ = $CoupJ;
// 		$this->_CoupP = $CoupP;
// 		$this->_Tour = $Tour;
// 		if ($this->_Tour == 1 || $this->_CoupP == 'Donner') {
// 			echo "TRUE";
// 			return TRUE;
// 		}
// 		elseif ($this->_CoupP == 'Garder') {
// 			echo "FALSE";
// 			return FALSE;
// 		}
// 		else{
// 			echo "ERROR 4";
// 		}
// 	}
// }

// class Mefiant
// {
// 	public function __construct()
// 	{
// 	}
// 	 public function jouer($CoupJ,$CoupP,$Tour)
// 	{
// 		$this->_CoupJ = $CoupJ;
// 		$this->_CoupP = $CoupP;
// 		$this->_Tour = $Tour;
// 		if ($this->_Tour == 1 || $this->_CoupJ == 'Donner') {
// 			echo "TRUE";
// 			return TRUE;
// 		}
// 		elseif ($this->_CoupJ == 'Garder') {
// 			echo "FALSE";
// 			return FALSE;
// 		}
// 		else{
// 			echo "ERROR 4";
// 		}
// 	}

// }

// class Rancunier
// {
	
// 	public function __construct()
// 	{
// 	}

// 	public function jouer($CoupJ,$CoupP,$Tour)
// 	{
// 		$this->_CoupJ = $CoupJ;
// 		$this->_CoupP = $CoupP;
// 		$this->_Tour = $Tour;
// 		if ($this->_Tour == 1 || $this->_CoupJ == 'Donner' && $Rancune == 0 ) {
// 			echo "TRUE";
// 			return TRUE;
// 		}
// 		elseif ($this->_CoupJ == 'Garder' || $Rancune == 1 ) {
// 			echo "FALSE";
// 			$Rancune=1;
// 			return FALSE;
// 		}
// 		else{
// 			echo "ERROR 4";
// 		}
// 	}
// }
//  ?>