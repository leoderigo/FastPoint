<?php
	class Produto{
		private $id;
		private $descr;
		private $prCom;
		private $prVen;
		private $tipo;
		private $estoque;
		private $empresa;

		function __get($atributo){
			return $this->$atributo;
		}

		function __set($atributo, $valor){
			$this->$atributo = $valor;
			return $this;
		}
	}
?>