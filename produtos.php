<?php
	$acao = 'show';
	$_POST['atributo'] = 'tipo';
	$i = 1;
?>

<div class='row'>
	<div class="green lighten-1" style="margin-top: 3vh">
		<ul class='tabs tabs-transparent tabs-fixed-width'>
			<li class='tab'><a href="#salgados">Salgados</a></li>
			<li class='tab'><a href="#bebidas">Bebidas</a></li>
			<li class='tab'><a href="#doces">Doces</a></li>
		</ul>
	</div>
	<div class='card-panel grey darken-3' style="margin-bottom: 2vh">
		<ul id='salgados' class='collapsible popout'>
			<?php 	$_POST['tipo'] = '"Salgado"'; ?>
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
						<i class='material-icons'><img src='img/sal.png' class='responsive-img'></i>
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
		<ul id='bebidas' class='collapsible popout'>
			<?php $valorAtr = '"Bebida"'; ?>
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
						<i class='material-icons'><img src='img/ref.png' class='responsive-img'></i>
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
		<ul id='doces' class='collapsible popout'>
			<?php $valorAtr = '"Doces"'; ?>
			<?php require('controller/produto.controller.php'); ?>
			<?php foreach ($prod as $value) { 
				$valorAtr = '"Doces"';
				
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
						<i class='material-icons'><img src='img/ot.png' class='responsive-img'></i>
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
	</div>
	<div class='row right-align hide' style='margin-right: 4vh' id='btnPedir'>
		<a href="#!" class='btn waves-effect green'>Pedir</a>
	</div>
</div>