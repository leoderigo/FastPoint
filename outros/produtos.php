<?php	
	function showProd($tipo){
		include('conexao\conexao.php');

		$i = 1;
		$sql = 'SELECT descr, prVen, estoque FROM produtos WHERE tipo="'.$tipo.'" ORDER BY descr';

		if($tipo=='salgadinho'){
			$img = 'sal';
		} elseif($tipo=='bebida') {
			$img = 'ref';
		} else {
			$img = 'ot';
		}

		foreach ($db->query($sql) as $produto){
			if($i%2==0){
				$t = 'light';
				$i--;
			} else {
				$t = 'dark';
				$i++;
			}

			$collProd = "<li>
							<div class='collapsible-header green ".$t."en-1 white-text'>
								<i class='material-icons'><img src='img/".$img.".png' class='responsive-img'></i>
								".$produto[0]."
							</div>
							<div class='collapsible-body grey darken-1'>
								<div class='row'>
									<div class='col s6 m6 l6'>
										<img src='img/logo.png' class='responsive-img' style='height: 15vh; width: 15vh'>
									</div>
									<div class='col s6 m6 l6'>
										<p class='white-text'>
											Preço: ".$produto[1]."<br>
											Estoque: ".$produto[2]."<br>
										</p>
									</div>
								</div>
							</div>
						</li>";

			echo $collProd;
		}

		$db = null;
	}
?>
<div class='row'>
	<div style="margin-top: 5vh; margin-bottom: 2vh">
		<ul id='salgados' class='collapsible popout'>
			<?php showProd('salgadinho'); ?>
		</ul>
		<ul id='bebidas' class='collapsible popout'>
			<?php showProd('bebida'); ?>
		</ul>
		<ul id='doces' class='collapsible popout'>
			<?php showProd('doces'); ?>
		</ul>
	</div>
	<div class='row right-align hide' style='margin-right: 4vh' id='btnPedir'>
		<a href="#!" class='btn waves-effect green'>Pedir</a>
	</div>
</div>