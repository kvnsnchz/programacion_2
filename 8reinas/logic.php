<?php
	function compararReinas($k,$l){
		for ($i=0; $i < $_SESSION["n"]; $i++) { 
			for ($j=0; $j < $_SESSION["n"]; $j++) { 
				if($i!=$k || $j!=$l){
					if($_POST["matriz"][$i][$j]!=' '){
						if($i==$k || $j==$l || abs($i-$k) == abs($j-$l)){
							$_POST["matriz"][$i][$j] = 'y';
						}
					}
				}
			}
		}
	}
	if(isset($_POST["matriz"][0][0])){
		$_POST["reinas_corr"] = 0;
		for ($i=0; $i < $_SESSION["n"]; $i++) { 
			for ($j=0; $j < $_SESSION["n"]; $j++) { 
				if($_POST["matriz"][$i][$j]!=' '){
					$_POST["matriz"][$i][$j] = 'x';
				}
			}
		}
		for ($i=0; $i < $_SESSION["n"]; $i++) { 
			for ($j=0; $j < $_SESSION["n"]; $j++) { 
				if($_POST["matriz"][$i][$j]!=' '){
					compararReinas($i,$j);
				}
				
			}
		}
		for ($i=0; $i < $_SESSION["n"]; $i++) { 
			for ($j=0; $j < $_SESSION["n"]; $j++) { 
				if($_POST["matriz"][$i][$j]=='x'){
					$_POST["reinas_corr"] = $_POST["reinas_corr"]+1; 
				}
			}
		}
		if($_POST["reinas_corr"] == $_SESSION["n"]){
			echo "<script>alert('You Win')</script>";
		}
	}
