<?php

require_once("conexao.php");

class CrudFormaPagamento {

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

//LISTAR DADOS NA TABELA FORMA DE PAGAMENTO
	public function readFormaPagamento() {

		$sql = 'SELECT * FROM forma_pagamento ';

		$stmt = Conexao::getConn()->prepare($sql);

		$stmt->execute();

			$result=array();
		
		    while($resultado = $stmt->fetch(\PDO::FETCH_ASSOC)){

			   $objecto   =  new FormaPagamento();
			   $objecto->  setId($resultado["idforma_pagamento"]);
			   $objecto->  setDesricao($resultado["forma_pagamento"]);
			   
			   $result[]=$objecto;
			}
			return $result;
	}


	//LISTAR DADOS NO SELECET FORMA DE PAGAMENTO
	public function readFormaPagamentoList($id=0) {

		$sql = 'SELECT * FROM forma_pagamento ';

		$stmt = Conexao::getConn()->prepare($sql);

		$stmt->execute();

			$result=array();
		
		    while($resultado = $stmt->fetch(\PDO::FETCH_ASSOC)){
				
			   $objecto   =  new FormaPagamento();
			   $objecto->  setId($resultado["idforma_pagamento"]);
			   $objecto->  setDescricao($resultado["forma_pagamento"]);

			   if($objecto->getId() == $id) {
                echo '<option  title="'.$objecto->getId().'"value="'.$objecto->getDescricao().'" selected>'.$objecto->getDescricao().'</option>';
            } else {
                echo '<option value="'.$objecto->getId().'">'.$objecto->getDescricao().'</option>';
            }

			}
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

	public function delete($id) {

		$sql = 'DELETE FROM produtos WHERE id = ?';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $id);
		$stmt->execute();

	}*/
	
}




