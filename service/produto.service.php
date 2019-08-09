<?php
class ProdService{
	private $conexao;
	private $produto;

	function __construct(Conexao $conexao, Produto $produto){
		$this->conexao = $conexao->connect();
		$this->produto = $produto;
	}

	function create(){
		try{
			$sql = 'INSERT INTO produto(id, descr, prCom, prVen, tipo, estoque, idEmp) VALUES (:id, :descr, :prCom, :prVen, :tipo, :estoque, :idEmp)';
			$stmt = $this->conexao->prepare($sql);
			$stmt->bindValue(':id', $this->produto->__get('id'));
			$stmt->bindValue('descr', $this->produto->__get('descr'));
			$stmt->bindValue('prCom', $this->produto->__get('prCom'));
			$stmt->bindValue('prVen', $this->produto->__get('prVen'));
			$stmt->bindValue('tipo', $this->produto->__get('tipo'));
			$stmt->bindValue('estoque', $this->produto->__get('estoque'));
			$stmt->bindValue('idEmp', $this->produto->__get('idEmp'));
			$stmt->execute();
		} catch(PDOException $e) {
			echo "FALHA AO CADASTRAR PRODUTO: $e->getMessage()";
		}
	}

	function show($atributo, $valorAtr){
		try{
			/*$sql = 'SELECT id, descr, prCom, prVen, tipo, estoque FROM produtos WHERE :atributo = :valorAtr ORDER BY descr';
			$stmt = $this->conexao->prepare($sql);
			$stmt->bindValue(':atributo', $atributo);
			$stmt->bindValue(':valorAtr', $valorAtr);
			$stmt->execute();*/
			if ($acao[1]=='mostrar') {
				$sql = 'SELECT id, descr, prCom, prVen, tipo, estoque, idEmp FROM produto WHERE id = :id ORDER BY id';
				$stmt = $this->conexao->prepare($sql);
				$stmt->bindValue(':id', $this->produto->__get('id'));
				$stmt->execute();
			}

			if($acao[1]=='listar'){
				$sql = 'SELECT id, descr, prCom, prVen, tipo, estoque, idEmp FROM produto WHERE :atributo = :valorAtr ORDER BY descr';
				$stmt = $this->conexao->prepare($sql);
				$stmt->bindValue(':atributo', $_POST['atributo']);
				$stmt->bindValue(':valorAtr', $this->produto->__get($_POST['atributo']));
				$stmt->execute();
			}

			//$result = $this->conexao->query('SELECT id, descr, prCom, prVen, tipo, estoque, idEmp FROM produtos WHERE '.$atributo.' = '.$valorAtr.' ORDER BY descr');

			return $result->fetchAll(PDO::FETCH_OBJ);
		} catch (PDOException $e) {
			echo "ERRO NA BUSCA POR CLIENTE: ".$e->getMessage()."";
		}
	}

	function update(){
		try {
			$sql =	'UPDATE produto SET descr = :descr, prCom = :prCom, prVen = :prVen, tipo = :tipo, estoque = :estoque, idEmp = :idEmp WHERE id = :id';
			$stmt = $this->conexao->prepare($sql);

			$stmt->bindValue('descr', $this->produto->__get('descr'));
			$stmt->bindValue('prCom', $this->produto->__get('prCom'));
			$stmt->bindValue('prVen', $this->produto->__get('prVen'));
			$stmt->bindValue('tipo', $this->produto->__get('tipo'));
			$stmt->bindValue('estoque', $this->produto->__get('estoque'));
			$stmt->bindValue('idEmp', $this->produto->__get('idEmp'));
			$stmt->bindValue('id', $this->produto->__get('id'));

			$stmt->execute();
		} catch (PDOException $e) {
			echo "FALHA AO ATUALIZAR PRODUTO: $e.getMessage()";
		}
	}

	function delete(){
		try{
			$sql = 'DELETE FROM produto WHERE id = :id';
			$stmt = $this->conexao->prepare($sql);

			$stmt->bindValue('id', $this->produtos->__get('id'));

			$stmt->execute();
		} catch(PDOException $e) {
			echo "FALHA AO DELETAR PRODUTO: $e.getMessage()";
		}
	}
}
?>