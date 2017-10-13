<html>
<head>
	<title>ROTATE</title>
</head>
<body>
	<div>
		<h1>WELCOME TO ROTATE</h1>
		<h2>please choose the dimensions of the matrix</h2>
	</div>
	<div>
		<form id="form_pedir_Dimen_Matriz" method="post" action="dimensiones_sub_matriz.php">
			<label for="dimensiones">dimensiones</label><br/>
			<label for="3x3">3x3</label>
			<input  type="radio" name="dimensiones" value="3x3"/>
			<label for="6x6">6x6</label>
			<input  type="radio" name="dimensiones" value="6x6"/>
			<label for="9x9">9x9</label>
			<input  type="radio" name="dimensiones" value="9x9"/><br/>
			<input id="boton_listo" type="button" value="Listo"/>			
		</form>
	</div>
</body>
</html>