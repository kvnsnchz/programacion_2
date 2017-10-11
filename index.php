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
		<form method="post">
			<?php 
				for ($i=0; $i <3 ; $i++) { 
					for ($j=0; $j < 3; $j++) { 

						echo "<input id= 'matriz'type='button' name='matriz[".$i."][".$j."]' value='' style= 'background-color:rgb(0,".($i*$j).",".((($i*$j)+1+$i+$j)*60).") onclick='presiono(this)''/>";
					}
					echo "<br/>";
				}
			?>
			<input type="submit" name="bu"value="enviar" onclick="presiono(this)" />
		</form >
		
	</div>
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="code.js"></script>
</body>
</html>