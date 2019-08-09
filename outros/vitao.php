<?php
function  inicio(){
		$i = 0;		echo"<form action='#' method='GET'>Digite a tabuada: <input name='tabuada'><br><input type='submit'></form>";
	@$tabuada = $_GET['tabuada'];do{		


	echo "$tabuada x $i = ".$tabuada * $i. '<br>';
	$i++;		} while ($i<=10);
}
	do{

			inicio();

		echo '<br>';
		echo "<form action='#' method='GET'>Deseja continuar?<br>1- Sim<br>2-Não<input name='g'><br><input type='submit'></form>";
		@$g = $_GET['g'];
		//$g=1;
	} while ($g!=null);
?>