<?php
	class Cliente {
		private $id;
		private $login;
		private $nome;
		private $senha;
		private $cred;
		
		function __get($atributo){
			return $this->$atributo;
		}

		function __set($atributo, $valor){
			$this->$atributo = $valor;
			return $this;
		}
	}
?>