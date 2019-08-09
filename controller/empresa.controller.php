<?php
	require_once('model/empresa.model.php');
	require_once('service/empresa.service.php');
	require_once('conexao/conexao.php');

	//$action[0] = isset($_POST['action'])?$_POST['action']:$action;

	if ($action[0]=='create') {

		$empresa = new Empresa();
		$empresa->__set('id', $_POST['idEmp']);
		$empresa->__set('login', $_POST['loginEmp']);
		$empresa->__set('nome', $_POST['nomeEmp']);
		$empresa->__set('propri', $_POST['propriEmp']);
		$empresa->__set('senha', $_POST['senhaEmp']);
		$empresa->__set('cnpj', $_POST['cnpjEmp']);

		$conexao = new Conexao();

		$empresaService = new EmpresaService($conexao, $empresa, $action[1]);
		$result = $empresaService->create();

		if($result==true){
			header('Location:index.php');
		} else {
			echo "NÃO FOI POSSÍVEL CRIAR REGISTRO DE EMPRESA! <br> Anote o Erro: $result";
		}

	} else if($action[0]=='update') {

		$empresa = new Empresa();
		$empresa->__set('id', $_POST['idEmp']);
		$empresa->__set('login', $_POST['loginEmp']);
		$empresa->__set('nome', $_POST['nomeEmp']);
		$empresa->__set('propri', $_POST['propriEmp']);
		$empresa->__set('senha', $_POST['senhaEmp']);
		$empresa->__set('cnpj', $_POST['cnpjEmp']);

		$conexao = new Conexao();

		$EmpresaService = new EmpresaService($conexao, $empresa, $action[1]);
		$result = $EmpresaService->update();

		if($result==true){
			header('Location:index.php');
		} else {
			echo "NÃO FOI POSSÍVEL ATUALIZAR REGISTRO DE EMPRESA! <br> Anote o Erro: $result";
		}

	} else if ($action[0]=='delete') {

		$empresa = new Empresa();
		$empresa->__set('id', $_POST['idEmp']);
		$empresa->__set('login', $_POST['loginEmp']);
		$empresa->__set('nome', $_POST['nomeEmp']);
		$empresa->__set('propri', $_POST['propriEmp']);
		$empresa->__set('senha', $_POST['senhaEmp']);
		$empresa->__set('cnpj', $_POST['cnpjEmp']);

		$conexao = new Conexao();

		$EmpresaService = new EmpresaService($conexao, $empresa, $action[1]);
		$result = $EmpresaService->delete();

		if($result==true){
			header('Location:index.php');
		} else {
			echo "NÃO FOI POSSÍVEL DELETAR REGISTRO DE EMPRESA! <br> Anote o Erro: $result";
		}

	} else if($action[0]=='read') {

		$empresa = new Empresa();
		$conexao = new Conexao();

		$empresa->__set('login', $_POST['loginEmp']);
		$empresa->__set('senha', $_POST['senhaEmp']);

		$emp = new EmpresaService($conexao, $empresa, $action[1]);
		$empresa = $emp->read();
		//var_dump($empresa);

		if($empresa[0]==true){
			if ($action[1]=='logar') {

				$_SESSION['idEmp'] = $empresa[1][0]->id;
				$_SESSION['loginEmp'] = $empresa[1][0]->login;
				$_SESSION['nomeEmp'] = $empresa[1][0]->nome;
				$_SESSION['propriEmp'] = $empresa[1][0]->propri;
				$_SESSION['senhaEmp'] = $empresa[1][0]->senha;
				$_SESSION['cnpjEmp'] = $empresa[1][0]->cnpj;

				header('Location:index.php?link=8');
			}
		}
	}
?>