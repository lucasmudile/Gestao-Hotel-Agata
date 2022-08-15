<?php

require_once("conexao.php");

class CrudFuncionario{

	//INSERIR DADOS NA TABELA FUNCIONÁRIO
	public function create(Funcionario $p) {	
		
	
		$sql = 'INSERT INTO funcionario (`nome`, `bi`, `data_nascimento`, `morada`, `telefone`, `email`, `senha`, `status`, `id_permicao`)
		 VALUES (?,?,?,?,?,?,?,?,?)';	
		
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getNome());
		$stmt->bindValue(2, $p->getBi());
		$stmt->bindValue(3, $p->getDataNascimento());
		$stmt->bindValue(4, $p->getMorada());
		$stmt->bindValue(5, $p->getTelefone());
		$stmt->bindValue(6, $p->getEmail());
		$stmt->bindValue(7, $p->getSenha());
		$stmt->bindValue(8, '1');
		$stmt->bindValue(9, $p->getPermicao());
		//$stmt->bindValue(10, $p->getId());
		//$stmt->execute();
		if ($stmt->execute() > 0) {
		 	echo"1";
		 }else{
			 echo"2";
		 }

	}

//LISTAR DADOS NA TABELA CLIENTE ACTIVOS
	public function readFuncionario($nome) {

		if(isset($nome)){
			$sql = "SELECT * FROM view_funcionario where status=1 and nome like '%".$nome."%' ORDER BY nome";
		}else{
			$sql = "SELECT * FROM view_funcionario where status=1 ORDER BY nome";
		}

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->execute();

			$result=array();

		    while($resultado = $stmt->fetch(\PDO::FETCH_ASSOC)){

			   $objecto   =  new Funcionario();
			   $objecto->  setId($resultado["idfuncionario"]);
			   $objecto->  setNome($resultado["nome"]);
               $objecto->  setBi($resultado["bi"]);
               $objecto->  setDataNascimento($resultado["data_nascimento"]);
               $objecto->  setMorada($resultado["morada"]);
			   $objecto->  setEmail($resultado["email"]);
			   $objecto->  setTelefone($resultado["telefone"]);
			   $objecto->  setSenha($resultado["senha"]);
			   $objecto->  setStatus($resultado["status"]);
               $objecto->  setPermicao($resultado["permicao"]);
			   
			   $result[]=$objecto;
			}

			return $result;
	

	}




	//LISTAR DADOS NA TABELA CLIENTE INACTIVOS
	public function readInativos($nome) {


        if(isset($nome)){
			$sql = "SELECT * FROM view_funcionario where status=0 and nome like '%".$nome."%' ORDER BY nome";
		}else{
			$sql = "SELECT * FROM view_funcionario where status=0 ORDER BY nome";
		}
		$stmt = Conexao::getConn()->prepare($sql);

		$stmt->execute();

			$result=array();
		
		    while($resultado = $stmt->fetch(\PDO::FETCH_ASSOC)){

			   $objecto   =  new Funcionario();
			   $objecto->  setId($resultado["idfuncionario"]);
			   $objecto->  setNome($resultado["nome"]);
               $objecto->  setBi($resultado["bi"]);
               $objecto->  setDataNascimento($resultado["data_nascimento"]);
               $objecto->  setMorada($resultado["morada"]);
			   $objecto->  setEmail($resultado["email"]);
			   $objecto->  setTelefone($resultado["telefone"]);
			   $objecto->  setSenha($resultado["senha"]);
			   $objecto->  setStatus($resultado["status"]);
               $objecto->  setPermicao($resultado["permicao"]);
			   
			   $result[]=$objecto;
			}

			return $result;
	

	}





	//LOGIN DO FUNCIONARIO
	public function login(Funcionario $p) {

        
		$sql = 'SELECT * FROM funcionario where email=? and senha=? and status=1 ';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getEmail());
		//$stmt->bindValue(1, $p->getTelefone());
		$stmt->bindValue(2, $p->getSenha());

		$stmt->execute();
		  $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);

			$objecto   =  new Funcionario();
			$objecto->  setId($resultado["idfuncionario"]);
			$objecto->  setEmail($resultado["email"]);
			$objecto->  setNome($resultado["nome"]);
			$objecto->  setTelefone($resultado["telefone"]);
			$objecto->  setSenha($resultado["senha"]);

			return $objecto;
		  
	}


	
	//COLOCAR CLIENTE COMO INACTIVO
	public function updateInactivo($id) {
		$sql = 'UPDATE funcionario set status=? WHERE idfuncionario = ?';
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, '0');
		$stmt->bindValue(2, $id);
		$stmt->execute();
	
	}


		//COLOCAR CLIENTE COMO ACTIVO
		public function updateActivo($id) {
			$sql = 'UPDATE funcionario set status=? WHERE idfuncionario = ?';
			$stmt = Conexao::getConn()->prepare($sql);
			$stmt->bindValue(1, '1');
			$stmt->bindValue(2, $id);
			$stmt->execute();
		
		}

	//ELIMINAR CLIENTE PERMANENTEMENTE
	public function delete($id) {

		$sql = 'DELETE FROM funcionario WHERE idfuncionario = ?';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $id);
		$stmt->execute();

	}




	//LOGIN DO FUNCIONARIO
	public function findById($id) {

        
		$sql = 'SELECT * FROM funcionario where idfuncionario=?  ';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $id);
		
		$stmt->execute();
		  $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);

			$objecto   =  new Funcionario();
			$objecto->  setId($resultado["idfuncionario"]);
			$objecto->  setEmail($resultado["email"]);
			$objecto->  setNome($resultado["nome"]);
			$objecto->  setTelefone($resultado["telefone"]);
			$objecto->  setBi($resultado["bi"]);
			$objecto->  setDataNascimento($resultado["data_nascimento"]);
			$objecto->  setMorada($resultado["morada"]);
			$objecto->  setPermicao($resultado["id_permicao"]);
			//$objecto->  setSenha($resultado["senha"]);

			return $objecto;
		  
	}



	public function update(Funcionario $p) {

		$sql="UPDATE `funcionario` SET `nome`=?,`bi`=?,`data_nascimento`=?,`morada`=?,`telefone`=?,`email`=?,`status`=?,`id_permicao`=? WHERE `idfuncionario`=?";

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getNome());
		$stmt->bindValue(2, $p->getBi());
		$stmt->bindValue(3, $p->getDataNascimento());
		$stmt->bindValue(4, $p->getMorada());
		$stmt->bindValue(5, $p->getTelefone());
		$stmt->bindValue(6, $p->getEmail());
		$stmt->bindValue(7, '1');
		$stmt->bindValue(8, $p->getPermicao());
		$stmt->bindValue(9, $p->getId());

		if ($stmt->execute() > 0) {
			echo"1";
		}else{
			echo"2";
		}


	}

	
	
}




