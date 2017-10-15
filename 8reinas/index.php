<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>8 REINAS</title>
</head>
<body>
	<div>
		<form method="post" action="">
			<label for="name">Name</label>
			<input type="text" name="name"/><br/>
			<label for="n">Dimension n</label>
			<input type="text" name="n"/>
			<input type="submit" name="submit" value="submit"/>
		</form>
		<?php
			if(isset($_POST["submit"])){
				$name_white = true;
				for ($i=0; $i <strlen($_POST["name"]) && $name_white; $i++) { 
					if($_POST["name"][$i]!=' '){
						$name_white = false;
					}
				}
				if(!$name_white && is_numeric($_POST["n"]) && $_POST["n"] >= 5 && $_POST["n"] <= 20){
					$_SESSION["name"] = $_POST["name"];
					$_SESSION["n"] = $_POST["n"];
					header("location: juego.php");
				}
				else{
					echo "<script>alert('incorrect values')</script>";
				}
			}
		?>
	</div>
</body>
</html>