<?php

require_once("conexao.php");

class CrudTestemunho{

	public function create(Testemunho $p) {	
		
		$sql = 'INSERT INTO testemunho (`testemunho`, `id_cliente`) VALUES (?,?)';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getTestemunho());
		$stmt->bindValue(2, $p->getIdCliente());
		if ($stmt->execute() > 0) {
		 	echo"1";
		 }else{
			 echo "2";
		 }

	}


	public function read() {

		$sql = 'SELECT * FROM view_testemunho';

		$stmt = Conexao::getConn()->prepare($sql);

		$stmt->execute();

			$result=array();
		
		    while($resultado = $stmt->fetch(\PDO::FETCH_ASSOC)){

			   $objecto   =  new Testemunho();
			   $objecto->  setId($resultado["idtestemunho"]);
			   $objecto->  setTestemunho($resultado["testemunho"]);
			   $objecto->  setIdCliente($resultado["cliente"]);

			   $result[]=$objecto;
			}

			return $result;
	}



	public function update(Testemunho $p) {

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

	}
	
}




