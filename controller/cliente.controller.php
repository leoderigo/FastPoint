<?php
	require_once('model/cliente.model.php');
	require_once('service/cliente.service.php');
	require_once('conexao/conexao.php');

	//$action[0] = isset($_POST['action'])?$_POST['action']:$action;

	if ($action[0]=='create') {

		$cliente = new Cliente();
		$cliente->__set('id', $_POST['id']);
		$cliente->__set('login', $_POST['login']);
		$cliente->__set('nome', $_POST['nome']);
		$cliente->__set('senha', $_POST['senha']);
		$cliente->__set('cred', $_POST['cred']);

		$conexao = new Conexao();

		$clienteService = new ClienteService($conexao, $cliente, $action[1]);
		$result = $clienteService->create();
		
		if($result==true){
			header('Location:index.php');
		} else {
			echo "NÃO FOI POSSÍVEL CRIAR REGISTRO DE CLIENTE! <br> Anote o Erro: $result";
		}

	} else if($action[0]=='update') {

		$cliente = new Cliente();
		$cliente->__set('id', $_POST['id']);
		$cliente->__set('login', $_POST['login']);
		$cliente->__set('nome', $_POST['nome']);
		$cliente->__set('senha', $_POST['senha']);
		$cliente->__set('cred', $_POST['cred']);

		$conexao = new Conexao();

		$clienteService = new ClienteService($conexao, $cliente, $action[1]);
		$result = $clienteService->update();
		
		if($result==true){
			header('Location:index.php');
		} else {
			echo "NÃO FOI POSSÍVEL CRIAR REGISTRO DE CLIENTE! <br> Anote o Erro: $result";
		}

	} else if ($action[0]=='delete') {

		$cliente = new Cliente();
		$cliente->__set('id', $_POST['id']);
		$cliente->__set('login', $_POST['login']);
		$cliente->__set('nome', $_POST['nome']);
		$cliente->__set('senha', $_POST['senha']);
		$cliente->__set('cred', $_POST['cred']);

		$conexao = new Conexao();

		$clienteService = new ClienteService($conexao, $cliente, $action[1]);
		$result = $clienteService->delete();
		
		if($result==true){
			header('Location:index.php');
		} else {
			echo "NÃO FOI POSSÍVEL CRIAR REGISTRO DE CLIENTE! <br> Anote o Erro: $result";
		}

	} else if($action[0]=='read') {

		$cliente = new Cliente();
		$conexao = new Conexao();

		$cliente->__set('login', $_POST['login']);
		$cliente->__set('senha', $_POST['senha']);

		$cli = new ClienteService($conexao, $cliente, $action[1]);
		$cliente = $cli->read();
		//var_dump($cliente);

		if($cliente[0]==true){
			if ($action[1]=='logar') {

				$_SESSION['idCli'] = $cliente[1][0]->id;
				$_SESSION['loginCli'] = $cliente[1][0]->login;
				$_SESSION['senhaCli'] = $cliente[1][0]->senha;
				$_SESSION['nomeCli'] = $cliente[1][0]->nome;
				$_SESSION['credCli'] = $cliente[1][0]->cred;

				header('Location:index.php?link=8');
			}
		} else {
			echo "NÃO FOI POSSÍVEL BUSCAR REGISTRO DE CLIENTE! <br> Anote o Erro: $cliente";
		}
	}
?>