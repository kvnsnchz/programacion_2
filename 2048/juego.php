<?php
	include "logic.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>2048</title>
</head>
<body>
	<div id="div_puntaje">
		<h1>2048</h1>
		<?php echo "<h3>puntaje: ".$_SESSION["puntaje"]."</h3>";?>
	</div>
	<div>
		<div id="div_tabl">
		<form method="post">
			<?php 
				do {
					$pos_i = random_int(0, 3);
					$pos_j = random_int(0, 3);
					$val_ale = isset($_POST["matriz"][$pos_i][$pos_j])?$_POST["matriz"][$pos_i][$pos_j]:(int)("0");
				} while ( $val_ale!=0);
				$_POST["matriz"][$pos_i][$pos_j] = random_int(1,2)*2;
					
				echo "<table>";
				for ($i=0; $i < 4; $i++) { 
					echo "<tr>";
					for ($j=0; $j < 4; $j++) { 
						$value = isset($_POST["matriz"][$i][$j])?$_POST["matriz"][$i][$j]:(int)("0");
						$mostrar = $value;
						if($value == 0){
							$mostrar = ' ';
						}
						echo "<input type='hidden' name='matriz[".$i."][".$j."]' value='".$value."'/>";
						echo "<td style='background-color:rgb(130,".(($value*5)+120).",".(($value*6)+120).")'>".$mostrar."</td>";
					}
					echo "</tr>";
				}
				echo "</table><br/>";

				echo "<input type='submit' name='arriba' value='arriba'/>";
				echo "<input type='submit' name='abajo' value='abajo'/>";
				echo "<input type='submit' name='izquierda' value='izquierda'/>";
				echo "<input type='submit' name='derecha' value='derecha'/>";
			?>
			<?php
				if(isset($_POST["suma"])){
					if($_POST["suma"]==2048){
						$_SESSION["puntaje"] = 0;
						echo "<script>alert('gano men'); window.location.href = 'juego.php'</script>";
					}
				}

			?>
		</form>
	</div>	
	</div>
	
</body>
</html>