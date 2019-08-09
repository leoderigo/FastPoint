<div class='row'>
	<div class='col s12 l7'>
		<br>
		<img class='responsive-img' src="img/cantina.png" style=''>
	</div>
	<div class="col s12 l5">
		<p class="grey-text text-lighten-2">
			Para adicionar créditos ou realizar algum pedido, faça login através do botão abaixo.
			<br>
			<br>
			Confira também o cardápio da cantina de sua escola.
		</p>
	
		<div class="row" style='display:none' id='loginBox'>
			<!--<ul class="tabs tabs-transparent green lighten-1">
				<li class="tab col s12"><a class='active white-text' href="#clienteLog">Cliente</a></li>
				<li class="tab col s12"><a class='white-text' href="#empresaLog">Empresa</a></li>
			</ul>-->
			<!--<div id='clienteLog' class="card-panel grey darken-2">-->
				<form action="index.php?link=3" method='POST'>
					<div class='row'>
						<center>
							<div class='input-field' style="width: 90%">
								<input class='validate white-text' type="text" id="login" name='login'>
								<label for='login'>Login</label>
							</div>
						</center>
					</div>
					<div class='row'>
						<center>
							<div class='input-field' style="width: 90%">
								<input class='validate white-text' type="password" id="senha" name='senha'>
								<label for='senha'>Senha</label>
							</div>
						</center>
					</div>
					<div class='row right-align'>
						<button type='submit' id='btnLogar' name='btnLogar' class='btn waves-effect waves-light green'>Logar</button>
					</div>
				</form>
			<!--</div>
			<div id='EmpresaLog' class="hide card-panel grey darken-2">-->
				<form action='index.php?link=7' method='POST'>
					<div class="row">
						<center>
							<div class="input-field" style="width: 90%">
								<input class='validate white-text' type="text" name="loginEmp">
								<label for='loginEmp'>Login sssss</label>
							</div>
						</center>
					</div>
					<div class="row">
						<center>
							<div class="input-field" style='width: 90%'>
								<input class='validate white-text' type="password" name="senhaEmp">
								<label for='senhaEmp'>Senha</label>
							</div>
						</center>
					</div>
					<div class="row right-align">
						<button type='submit' name='btnLogarEmp' class="btn waves-effect waves-light green">Logar</button>
					</div>
				</form>
			<!--</div>-->
		</div>
		<div class='row right-align'>
			<a href='#!' class='waves-effect btn green' id='btnLogin'>Logar</a>
		</div>
	</div>
</div>
<!-- Login -->

<!-- Fim do trecho do Login -->