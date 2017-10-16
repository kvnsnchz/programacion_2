<?php
	session_start();
?>
<html>
<head>
	<title>ROTATE</title>
</head>
<body>
	<div>
		<h1>BIENVENIDO A ROTACION</h1>
		<h2>Por favor introduzca los valores de la matriz</h2>
	</div>
	<div>
		<form id="form_pedir_Dimen_Matriz" method="post" >
			<label for="dimension_m">Dimension Matriz</label>
			<input  type="text" name="dimension_m"/><br/>
			<label for="dimension_subm">Dimension sub-Matriz (n/2 + 1)</label>
			<input  type="text" name="dimension_subm"/>
			<input id="boton_listo" type="submit" name="boton_listo" value="Listo"/>			
		</form>
		<?php
			if(isset($_POST["boton_listo"])){
				if( is_numeric($_POST["dimension_m"]) && is_numeric($_POST["dimension_subm"])&& $_POST["dimension_m"] >= 3 && $_POST["dimension_m"] <= 20 && $_POST["dimension_subm"] <= ($_POST["dimension_m"]/2)+1){
					$_SESSION["n"] = $_POST["dimension_m"];
					$_SESSION["sub_n"] = $_POST["dimension_subm"];
					header("location: juego.php");
				}
				else{
					echo "<script>alert('valores invalidos')</script>";
				}
			}
		?>
	</div>
</body>
</html>