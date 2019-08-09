<?php
	require_once('model/produto.model.php');
	require_once('service/produto.service.php');
	require_once('conexao/conexao.php');

	//$acao = isset($_POST['acao'])?$_POST['acao']:$acao;
	//$id = isset($_POST['id'])?$_POST['id']:$id;

	if ($acao[0]=='create') {

		$produto = new Produto();
		$produto->__set('id', $_POST['id']);
		$produto->__set('descr', $_POST['descr']);
		$produto->__set('precoCom', $_POST['precoCom']);
		$produto->__set('precoVen', $_POST['precoVen']);
		$produto->__set('tipo', $_POST['tipo']);
		$produto->__set('estoque', $_POST['estoque']);
		$produto->__set('idEmp', $_POST['idEmp']);

		$conexao = new Conexao();

		$prodService = new ProdService($conexao, $produto);
		$prodService->create();
		header('Location:index.php');

	} else if($acao[0]=='update') {

		$produto = new Produto();
		$produto->__set('id', $_POST['id']);
		$produto->__set('descr', $_POST['descr']);
		$produto->__set('precoCom', $_POST['precoCom']);
		$produto->__set('precoVen', $_POST['precoVen']);
		$produto->__set('tipo', $_POST['tipo']);
		$produto->__set('estoque', $_POST['estoque']);
		$produto->__set('idEmp', $_POST['idEmp']);

		$conexao = new Conexao();

		$prodService = new ProdService($conexao, $produto);
		$prodService->update();
		header('Location:index.php');

	} else if ($acao[0]=='delete') {

		$produto = new Produto();
		$produto->__set('id', $_POST['id']);
		$produto->__set('descr', $_POST['descr']);
		$produto->__set('precoCom', $_POST['precoCom']);
		$produto->__set('precoVen', $_POST['precoVen']);
		$produto->__set('tipo', $_POST['tipo']);
		$produto->__set('estoque', $_POST['estoque']);
		$produto->__set('idEmp', $_POST['idEmp']);

		$conexao = new Conexao();

		$prodService = new ProdService($conexao, $produto);
		$prodService->delete();
		header('Location:index.php');

	} else if($acao[0]=='show') {

		$produto = new Produto();
		$conexao = new Conexao();

		$prodService = new ProdService($conexao, $produto);
		$prod = $prodService->show($atributo, $valorAtr);

	}
?>