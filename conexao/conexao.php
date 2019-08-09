<?php
class Conexao{
	private $user = 'root';
	private $pass = '';
	private $dbname = 'cantinadojao';
	private $host = 'localhost';
	private $cod = 'mysql';
	
	function connect(){
		try{
			$db = new PDO('mysql:host=localhost;dbname=cantinadojao',$this->user,$this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $db;
		} catch(PDOException $e) {
			echo 'ERRO NA CONEXÃO COM BANCO DE DADOS: '.$e->getMessage().'<br>';
		}
	}
}
?>