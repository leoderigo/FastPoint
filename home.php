<?php
	if(isset($_SESSION['idCli'])){
		header('Location:index.php?link=6');
	} else if(isset($_SESSION['idEmp'])){
		header('Location:index.php?link=9');
	} else {
		header('Location:index.php?link=1');
	}
?>