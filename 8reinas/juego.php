<?php
	session_start();
	if(isset($_POST["new_game"])){
		header("location: index.php");
	}
	include "logic.php"
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<div id="div_com">
		<h1>Reinas</h1>
		<?php echo "<h3>".$_SESSION["name"]."</h3>"?>
		<?php 
			$corr = isset($_POST["reinas_corr"])?$_POST["reinas_corr"]:'0';
			$falta = isset($_POST["reinas_corr"])?$_SESSION["n"]-$_POST["reinas_corr"]:$_SESSION["n"];
			echo "<h3>Reinas Correctas: ".$corr." Reinas Faltan: ".$falta."</h3>"
		?>
	</div>
	<div id="div_matriz">
		<form id="form_game" method="post">
			<?php
				for ($i=0; $i <$_SESSION["n"] ; $i++) { 
					for ($j=0; $j < $_SESSION["n"]; $j++) { 
						$id = "matriz".$i."-".$j;
						$value = isset($_POST["matriz"][$i][$j])?$_POST["matriz"][$i][$j]:" ";
						$color = 'blue';
						$image ="vacio.png";
						if($value!=' '){
							$image ="corona.png";
						}
						
						
						if($value=='y'){
							$value = 'x';
							$color = 'red';
						}
						echo "<input  id='".$id."' type='hidden' name='matriz[".$i."][".$j."]' value='".$value."'/>";
						echo "<input class='button' type='button'  onclick='presiono(this)' data-hidden='".$id."' data-colocado='false' style='background-image:url(".$image.");background-color:".$color."'/>";
					}
					echo "<br/>";
				}
				echo "<input type='submit' name='new_game' value='New Game'/>";

			?>
		</form>
	</div>
		
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="code.js"></script>
</body>
</html>