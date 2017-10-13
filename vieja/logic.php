 <?php
 	//var_dump($_POST);
	 for ($i=0; $i <3 ; $i++) { 
	 	for ($j=0; $j <3 ; $j++) { 
	 		echo isset($_POST['matriz'][$i][$j])?$_POST['matriz'][$i][$j]:'';
	 	}

	 }
 		echo $_POST['be'];
	 