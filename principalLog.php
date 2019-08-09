<div class='row'>
	<!-- Fixed Action Button -->
	<div class="fixed-action-btn">
		<a class='btn-floating btn-large green lighten-1'>
			<i class='large material-icons'>chevron_left</i>
		</a>
		<ul>
			<li><a class="btn-floating red"><i class="material-icons">assignment</i></a></li>
		</ul>
	</div>

	<div class="col s12" style="margin-top: 3vh">
		<ul class='tabs tabs-transparent green lighten-1'>
			<li class="tab col s6"><a class='active white-text' href="#cadastros">Cadastros</a></li>
			<li class="tab col s6"><a class='white-text' href="#pedidos">Pedidos</a></li>
		</ul>
	</div>
	<div id='cadastros' class="col s12">
		<div class="card-panel grey darken-3">
			<?=$_SESSION['idCli']?>
		</div>
	</div>
	<div id='pedidos' class='col s12'>
		<div class='card-panel grey darken-3'>
			<?=$_SESSION['idEmp']?>
		</div>
	</div>
</div>