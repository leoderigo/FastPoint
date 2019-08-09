<?php
	$acao = 'show';
	$atributo = 'tipo';
	$i = 1;
?>
<div class='row'>
	<div style="margin-top: 5vh; margin-bottom: 2vh">
		<?php for ($j = 0; $j < 3; $j++) {
			switch ($j) {
				case 0:
					$idCol = 'salgados';
					$img = 'sal';
					$valorAtr = '"Salgado"';
				case 1:
					$idCol = 'bebidas';
					$img = 'ref';
					$valorAtr = '"Bebidas"';
				case 2:
					$idCol = 'doces';
					$img = 'ot';
					$valorAtr = '"Doces"';
				break;
			}
		?>
			<ul id="<?=$idCol?>" class='collapsible popout'>
				<?php require('controller/produto.controller.php'); ?>
				<?php foreach ($prod as $value) { 

					if ($i%2==0) {
						$c = 'darken-1';
						$i--;
					} else {
						$c = 'lighten-1';
						$i++;
					}
					?>
					<li>
						<div class= "<?='collapsible-header green '.$c.' white-text'?>" >
							<i class='material-icons'><img src="img/<=?img?>.png" class='responsive-img'></i>
							<?=$value->descr?>
						</div>
						<div class='collapsible-body grey darken-1'>
							<div class='row'>
								<div class='col s6 m6 l6'>
									<img src='img/logo.png' class='responsive-img' style='height: 15vh; width: 15vh'>
								</div>
								<div class='col s6 m6 l6'>
									<p class='white-text'>
										Preço: <?=$value->prVen?><br>
										Estoque: <?=$value->estoque?><br>
									</p>
								</div>
							</div>
						</div>
					</li>
				<?php } ?>
			</ul>
		<?php } ?>
	</div>
	<div class='row right-align hide' style='margin-right: 4vh' id='btnPedir'>
		<a href="#!" class='btn waves-effect green'>Pedir</a>
	</div>
</div>