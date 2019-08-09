<?php
class ClienteService {
	private $conexao;
	private $cliente;
	private $action;

	function __construct(Conexao $conexao, Cliente $cliente, $action){
		$this->conexao = $conexao->connect();
		$this->cliente = $cliente;
		$this->action = $action;
	}

	function read(){
		try{
			if($this->action=='logar'){
				$sql = "SELECT id, login, nome, senha, cred FROM cliente WHERE login = :login AND senha = :senha";
				$stmt = $this->conexao->prepare($sql);
				$stmt->bindValue(':login', $this->cliente->__get('login'));
				$stmt->bindValue(':senha', $this->cliente->__get('senha'));
				$stmt->execute();
			}

			if ($this->action=='mostrar') {
				$sql = "SELECT id, login, nome, senha, cred FROM cliente WHERE id = :id";
				$stmt = $this->conexao->prepare($sql);
				$stmt->bindValue(':id', $this->cliente->__get('id'));
				$stmt->execute();
			}
			//$sql = "SELECT id, login, nome, senha, cred FROM cliente WHERE login = ".$this->cliente->__get('id')." AND senha = ".$this->cliente->__get('senha')."";
			//$result = $this->conexao->query($sql);
			$result[0] = true;
			$result[1] = $stmt->fetchAll(PDO::FETCH_OBJ);

			return $result;
			
		} catch(PDOException $e) {
			
			$result[0] = $e->getMessage();

			return $result;

		}
	}

	function create(){
		try{
			$sql = "INSERT INTO cliente(id, login, nome, senha, cred) VALUES (:id, :login, :nome, :senha, :cred)";
			$stmt = $this->conexao->prepare($sql);
			$stmt->bindValue(':id', $this->cliente->__get('id'));
			$stmt->bindValue(':login', $this->cliente->__get('login'));
			$stmt->bindValue(':nome', $this->cliente->__get('nome'));
			$stmt->bindValue(':senha', $this->cliente->__get('senha'));
			$stmt->bindValue(':cred', $this->cliente->__get('cred'));
			$stmt->execute();

			return true;

		} catch(PDOException $e) {

			return $e->getMessage();

		}
	}

	function update(){
		try{
			$sql = 'UPDATE cliente SET login=:login, nome=:nome, senha=:senha, cred=:cred WHERE id=:id';
			$stmt = $this->conexao->prepare($sql);
			$stmt->bindValue(':login', $this->cliente->__get('login'));
			$stmt->bindValue(':nome', $this->cliente->__get('nome'));
			$stmt->bindValue(':senha', $this->cliente->__get('senha'));
			$stmt->bindValue(':cred', $this->cliente->__get('cred'));
			$stmt->bindValue(':id', $this->cliente->__get('id'));
			$stmt->execute();

			return true;

		} catch(PDOException $e) {

			return $e->getMessage();

		}
	}

	function delete(){
		try{
			$sql = 'DELETE FROM cliente WHERE id=:id';
			$stmt = $this->conexao->prepare($sql);
			$stmt->bindValue(':id', $this->cliente->__get('id'));
			$stmt->execute();

			return true;

		} catch(PDOException $e) {

			return $e->getMessage();

		}
	}
}
?>