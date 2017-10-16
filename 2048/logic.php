<?php
	session_start();
	function verificar_movi($valor_mover,$i,$j,$combinado){
		if($i<0 || $j<0 || $i>3 ||  $j>3){
			return 0;
		}
		if($_POST["matriz"][$i][$j]==0){
			return 1;
		}
		if(($_POST["matriz"][$i][$j]==$valor_mover) && $_SESSION["combinado"][$i][$j]==0 && $combinado==0){
			return 2;
		}
		return 0;
	}
	
	if(!isset($_SESSION["puntaje"])){
		$_SESSION["puntaje"] = 0;
		echo "no existe";
	}
	if(isset($_POST["arriba"])){
		for ($i=0; $i <4 ; $i++) { 
			for ($j=0; $j <4 ; $j++) { 
				$_SESSION["combinado"][$i][$j] = 0;
			}
		}
		for ($k=0; $k <3 ; $k++) { 
			for ($i=0; $i <4 ; $i++) {
				for ($j=0; $j <4 ; $j++) { 
					if($_POST["matriz"][$i][$j]!=0){
						switch (verificar_movi($_POST["matriz"][$i][$j],$i-1,$j,$_SESSION["combinado"][$i][$j])) {
							case 1:
								$_POST["matriz"][$i-1][$j] = $_POST["matriz"][$i][$j];
								$_POST["matriz"][$i][$j] = 0;
								break;
							
							case 2:
								$_POST["matriz"][$i-1][$j] = $_POST["matriz"][$i][$j]*2;
								$_POST["matriz"][$i][$j] = 0;
								$_SESSION["combinado"][$i-1][$j] = 1;
								$_SESSION["puntaje"]+=$_POST["matriz"][$i-1][$j];
								$_POST["suma"] = $_POST["matriz"][$i-1][$j];
								break;
						}
					}
				}
			}
		}
		
	}
	if(isset($_POST["abajo"])){
		for ($i=0; $i <4 ; $i++) { 
			for ($j=0; $j <4 ; $j++) { 
				$_SESSION["combinado"][$i][$j] = 0;
			}
		}
		for ($k=0; $k <3 ; $k++) { 
			for ($i=3; $i >=0 ; $i--) {
				for ($j=0; $j <4 ; $j++) { 
					if($_POST["matriz"][$i][$j]!=0){
						switch (verificar_movi($_POST["matriz"][$i][$j],$i+1,$j,$_SESSION["combinado"][$i][$j])) {
							case 1:
								$_POST["matriz"][$i+1][$j] = $_POST["matriz"][$i][$j];
								$_POST["matriz"][$i][$j] = 0;
								break;
							
							case 2:
								$_POST["matriz"][$i+1][$j] = $_POST["matriz"][$i][$j]*2;
								$_POST["matriz"][$i][$j] = 0;
								$_SESSION["combinado"][$i+1][$j] = 1;
								$_SESSION["puntaje"]+=$_POST["matriz"][$i+1][$j];
								$_POST["suma"] = $_POST["matriz"][$i+1][$j];
								break;
						}
					}
				}
			}
		}
	}
	if(isset($_POST["derecha"])){
		for ($i=0; $i <4 ; $i++) { 
			for ($j=0; $j <4 ; $j++) { 
				$_SESSION["combinado"][$i][$j] = 0;
			}
		}
		for ($k=0; $k <3 ; $k++) { 
			for ($i=0; $i <4 ; $i++) {
				for ($j=3; $j >= 0 ; $j--) { 
					if($_POST["matriz"][$i][$j]!=0){
						switch (verificar_movi($_POST["matriz"][$i][$j],$i,$j+1,$_SESSION["combinado"][$i][$j])) {
							case 1:
								$_POST["matriz"][$i][$j+1] = $_POST["matriz"][$i][$j];
								$_POST["matriz"][$i][$j] = 0;
								break;
							
							case 2:
								$_POST["matriz"][$i][$j+1] = $_POST["matriz"][$i][$j]*2;
								$_POST["matriz"][$i][$j] = 0;
								$_SESSION["combinado"][$i][$j+1] = 1;
								$_SESSION["puntaje"]+=$_POST["matriz"][$i][$j+1];
								$_POST["suma"] = $_POST["matriz"][$i][$j+1];
								break;
						}
					}
				}
			}
		}
	}
	if(isset($_POST["izquierda"])){
		for ($i=0; $i <4 ; $i++) { 
			for ($j=0; $j <4 ; $j++) { 
				$_SESSION["combinado"][$i][$j] = 0;
			}
		}
		for ($k=0; $k <3 ; $k++) { 
			for ($i=0; $i <4 ; $i++) {
				for ($j=0; $j <4 ; $j++) { 
					if($_POST["matriz"][$i][$j]!=0){
						switch (verificar_movi($_POST["matriz"][$i][$j],$i,$j-1,$_SESSION["combinado"][$i][$j])) {
							case 1:
								$_POST["matriz"][$i][$j-1] = $_POST["matriz"][$i][$j];
								$_POST["matriz"][$i][$j] = 0;
								break;
							
							case 2:
								$_POST["matriz"][$i][$j-1] = $_POST["matriz"][$i][$j]*2;
								$_POST["matriz"][$i][$j] = 0;
								$_SESSION["combinado"][$i][$j-1] = 1;
								$_SESSION["puntaje"]+=$_POST["matriz"][$i][$j-1];
								$_POST["suma"] = $_POST["matriz"][$i][$j-1];
								break;
						}
					}
				}
			}
		}
	}
?>