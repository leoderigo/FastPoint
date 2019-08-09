<?php
	class EmpresaService{
		private $conexao;
		private $empresa;
		private $action;

		function __construct(Conexao $conexao, Empresa $empresa, $action){
			$this->conexao = $conexao->connect();
			$this->empresa = $empresa;
			$this->action = $action;
		}

		function read(){
			try{
				if($this->action=='logar'){
					$sql = "SELECT id, login, nome, propri, senha, cnpj FROM empresa WHERE login = :login AND senha = :senha";
					$stmt = $this->conexao->prepare($sql);
					$stmt->bindValue(':login', $this->empresa->__get('login'));
					$stmt->bindValue(':senha', $this->empresa->__get('senha'));
					$stmt->execute();
				}

				if ($this->action=='mostrar') {
					$sql = "SELECT id, login, nome, propri, senha, cpnj FROM empresa WHERE id = :id";
					$stmt = $this->conexao->prepare($sql);
					$stmt->bindValue(':id', $this->empresa->__get('id'));
					$stmt->execute();
				}
				//$sql = "SELECT id, login, nome, senha, cred FROM empresa WHERE login = ".$this->empresa->__get('id')." AND senha = ".$this->cliente->__get('senha')."";
				//$result = $this->conexao->query($sql);
				$result[0] = true;
				$result[1] = $stmt->fetchAll(PDO::FETCH_OBJ);

				return $result;
				
			} catch(PDOException $e) {

				return $e->getMessage();

			}
		}

		function create(){
			try{
				$sql = "INSERT INTO empresa(id, login, nome, propri, senha, cnpj) VALUES (:id, :login, :nome, :propri, :senha, :cnpj)";
				$stmt = $this->conexao->prepare($sql);
				$stmt->bindValue(':id', $this->empresa->__get('id'));
				$stmt->bindValue(':login', $this->empresa->__get('login'));
				$stmt->bindValue(':nome', $this->empresa->__get('nome'));
				$stmt->bindValue(':propri', $this->empresa->__get('propri'));
				$stmt->bindValue(':senha', $this->empresa->__get('senha'));
				$stmt->bindValue(':cnpj', $this->empresa->__get('cnpj'));
				$stmt->execute();

				return true;

			} catch(PDOException $e) {

				return $e->getMessage();

			}
		}

		function update(){
			try{
				$sql = 'UPDATE empresa SET login=:login, nome=:nome, senha=:senha, cnpj=:cnpj WHERE id=:id';
				$stmt = $this->conexao->prepare($sql);
				$stmt->bindValue(':login', $this->empresa->__get('login'));
				$stmt->bindValue(':nome', $this->empresa->__get('nome'));
				$stmt->bindValue(':senha', $this->empresa->__get('senha'));
				$stmt->bindValue(':cnpj', $this->empresa->__get('cnpj'));
				$stmt->bindValue(':id', $this->empresa->__get('id'));
				$stmt->execute();

				return true;

			} catch(PDOException $e) {

				return $e->getMessage();

			}
		}

		function delete(){
			try{
				$sql = 'DELETE FROM empresa WHERE id=:id';
				$stmt = $this->conexao->prepare($sql);
				$stmt->bindValue(':id', $this->empresa->__get('id'));
				$stmt->execute();

				return true;

			} catch(PDOException $e) {

				return $e->getMessage();

			}
		}
	}
?>