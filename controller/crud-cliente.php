<?php

require_once("conexao.php");

class CrudCliente {

	//INSERIR DADOS NA TABELA CLIENTE
	public function create(Cliente $p) {	
		
		$sql = 'INSERT INTO cliente (`nome`, `email`, `telefone`, `senha`, `status`) VALUES (?,?,?,?,?)';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getNome());
		$stmt->bindValue(2, $p->getEmail());
		$stmt->bindValue(3, $p->getTelefone());
		$stmt->bindValue(4, $p->getSenha());
		$stmt->bindValue(5, '1');
		//$stmt->execute();
		if ($stmt->execute() > 0) {
		 	echo"1";
		 }else{
			 echo 2;
		 }

	}

//LISTAR DADOS NA TABELA CLIENTE ACTIVOS
	public function read($nome) {

		if(isset($nome)){
			$sql = "SELECT * FROM cliente where status=1 and nome like '%".$nome."%' ORDER BY nome";
		}else{
			$sql = "SELECT * FROM cliente where status=1 ORDER BY nome";
		}
	
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->execute();

			$result=array();
		
		    while($resultado = $stmt->fetch(\PDO::FETCH_ASSOC)){

			   $objecto   =  new Cliente();
			   $objecto->  setId($resultado["idcliente"]);
			   $objecto->  setNome($resultado["nome"]);
			   $objecto->  setEmail($resultado["email"]);
			   $objecto->  setTelefone($resultado["telefone"]);
			   $objecto->  setSenha($resultado["senha"]);
			   $objecto->  setStatus($resultado["status"]);
			   
			   $result[]=$objecto;
			}

			return $result;
	

	}




	//LISTAR DADOS NA TABELA CLIENTE INACTIVOS
	public function readInativos($nome) {


		if(isset($nome)){
			$sql = "SELECT * FROM cliente where status=0 and nome like '%".$nome."%' ORDER BY nome";
		}else{
			$sql = 'SELECT * FROM cliente where status=0 ';
		}
		$stmt = Conexao::getConn()->prepare($sql);

		$stmt->execute();

			$result=array();
		
		    while($resultado = $stmt->fetch(\PDO::FETCH_ASSOC)){

			   $objecto   =  new Cliente();
			   $objecto->  setId($resultado["idcliente"]);
			   $objecto->  setNome($resultado["nome"]);
			   $objecto->  setEmail($resultado["email"]);
			   $objecto->  setTelefone($resultado["telefone"]);
			   $objecto->  setSenha($resultado["senha"]);
			   $objecto->  setStatus($resultado["status"]);
			   
			   $result[]=$objecto;
			}

			return $result;
	

	}





	//LOGIN DO CLIENTE
	public function login(Cliente $p) {

        
		$sql = 'SELECT * FROM cliente where email=? and senha=? ';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getEmail());
		$stmt->bindValue(2, $p->getSenha());

		$stmt->execute();
		  $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);

			$objecto   =  new Cliente();
			$objecto->  setId($resultado["idcliente"]);
			$objecto->  setEmail($resultado["email"]);
			$objecto->  setNome($resultado["nome"]);
			$objecto->  setTelefone($resultado["telefone"]);
			$objecto->  setSenha($resultado["senha"]);

			return $objecto;
		  
	}


	
	//COLOCAR CLIENTE COMO INACTIVO
	public function updateInactivo($id) {
		$sql = 'UPDATE cliente set status=? WHERE idcliente = ?';
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, '0');
		$stmt->bindValue(2, $id);
		$stmt->execute();
	
	}


		//COLOCAR CLIENTE COMO ACTIVO
		public function updateActivo($id) {
			$sql = 'UPDATE cliente set status=? WHERE idcliente = ?';
			$stmt = Conexao::getConn()->prepare($sql);
			$stmt->bindValue(1, '1');
			$stmt->bindValue(2, $id);
			$stmt->execute();
		
		}

	//ELIMINAR CLIENTE PERMANENTEMENTE
	public function delete($id) {

		$sql = 'DELETE FROM cliente WHERE idcliente = ?';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $id);
		$stmt->execute();

	}

	/*
	public function update(Produto $p) {

		$sql = 'UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getNome());
		$stmt->bindValue(2, $p->getDescricao());
		$stmt->bindValue(3, $p->getId());

		$stmt->execute();


	}
	*/

	
}




