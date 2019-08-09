<?php
	class Empresa{
		private $id;
		private $login;
		private $nome;
		private $propri;
		private $senha;
		private $cnpj;

		function __get($atributo){
			return $this->$atributo;
		}

		function __set($atributo, $valor){
			$this->$atributo = $valor;
			return $this;
		}
	}
?>