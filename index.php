<!DOCTYPE html>
<?php
	session_start();
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name='viewport' content='width=device-width, initial-scale=1.0'/>

	<title>Fast Point</title>
</head>
<body class="background grey darken-4">

	<!-- Navbar -->
	<nav>
		<div class="nav-wrapper green">
			<a href="#!" class="brand-logo"><img src="img/logo.png" style='width: 10vh; height: 10vh'></a>
			<a class="sidenav-trigger" href='' data-target='mobNav'><i class='material-icons'>menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href='index.php?link=1'>Home</a></li>
				<li><a href='index.php?link=4' id='btnCadPc'>Cadastre-se</a></li>
				<li><a href="index.php?link=5" id='btnSairPc' class='hide'>Sair</a></li>
			</ul>
		</div>
	</nav>
	<!-- Navbar Lateral para mobile -->
	<ul class='sidenav grey darken-4' id='mobNav'>
		<li><a href='index.php?link=1'><span class="white-text">Home</span></a></li>
		<li><a href="index.php?link=4" id='btnCadNav'><span class="white-text">Cadastre-se</span></a></li>
		<li><a href='index.php?link=5' id='btnSairNav' class='hide'><span class='white-text'>Sair</span></a></li>
	</ul>
	<!-- Fim da Navbar -->

	<div class='container'>
		<!-- Declaração de conteúdo -->
		<?php
			$link = @$_GET['link'];
			$url[1] = 'principal.php';
			$url[2] = 'produtos.php';
			$url[3] = 'login.php';
			$url[4] = 'cad.php';
			$url[5] = 'sair.php';
			$url[6] = 'principalLog.php';
			$url[7] = 'loginEmp.php';
			$url[8] = 'home.php';
			$url[9] = 'principalEmp.php';
			$url['test'] = 'teste.php';

			if(!empty($link)){
				if(file_exists($url[$link])){
					include $url[$link];
				}
			} else {
				trim(include 'home.php');
			}
		?>
		<!-- Fim da Declaração de conteúdo -->
	</div>

	<footer class='page-footer green'>
		<div class='container'>
			<div class='row'>
				<div class='col s12 m12 l6'>
					<h5 class='white-text'>FastPoint</h5>
					<p class='grey-text text-lighten-4'>Agilize seu refeitório. A fome não espera!</p>
				</div>
				<div class='col s12 l4 offset-12'>
					<h5 class='white-text'>Navegue</h5>
					<ul>
						<li><a href="" class='grey-text text-lighten-3'>Home</a></li>
						<li><a href="" class='grey-text text-lighten-3'>Produtos</a></li>
						<li><a href="" class='grey-text text-lighten-3'>Contato</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class='footer-copyright'>
			<div class='container'>
				©2019 Copyright - Desenvolvido por (a definir) <br>
				<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Licença Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png"/></a><br />Este obra está licenciado com uma Licença <a class='grey-text text-darken-2' rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Atribuição-NãoComercial-CompartilhaIgual 4.0 Internacional</a>.
			</div>
		</div>
	</footer>

	<script type="text/javascript" src='js/jquery-3.3.1.js'></script>
	<script type="text/javascript" src='js/materialize.js'></script>
	<script type="text/javascript" src='js/materialize.min.js'></script>
	<script type="text/javascript" src="js/index.js"></script>
<?php
	//Botão de Logout
	if((isset($_SESSION['idEmp']))||(isset($_SESSION['idCli']))){
		echo "<script>
				$('#btnSairPc').removeClass('hide');
				$('#btnSairNav').removeClass('hide');
				$('#btnLogin').addClass('hide');
				$('#btnCadNav').addClass('hide');
				$('#btnCadPc').addClass('hide');
			</script>";
	}
	
	//Página de produtos
	if(isset($url[$link])){
		if($url[$link]=='produtos.php'){
			//Botão de fazer pedidos
			if((isset($_SESSION['idEmp']))||(isset($_SESSION['idCli']))){
				echo "<script>
						$('#btnPedir').removeClass('hide');
					</script>";
			}
		}
	}
?>

</body>
</html>