<?php include "logic.php"
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>vieja</title>
</head>
<body>
	<div>
		<form id= "formulario" method="post">
			<?php 
				for ($i=0; $i <3 ; $i++) { 
					for ($j=0; $j < 3; $j++) { 
						$value = isset($_POST['matriz'][$i][$j])?$_POST['matriz'][$i][$j]:' ';
						$id = "matriz[".$i."][".$j."]";
						echo "<input id= '".$id."'type='hidden' name='matriz[".$i."][".$j."]' value='".$value."' />";
						echo "<input id= 'matriz'type='button'  value='".$value."' style= 'background-color:rgb(0,".($i*$j).",".((($i*$j)+1+$i+$j)*60).")' onclick = 'presiono(this,".$i.",".$j.")'; />";
						
					}
					echo "<br/>";
				}
			?>
			<input type="button" name="be"value="ja" />
			<input type="submit" name="bu"value="enviar" />

		</form >
		
	</div>
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="code.js"></script>
</body>
</html>