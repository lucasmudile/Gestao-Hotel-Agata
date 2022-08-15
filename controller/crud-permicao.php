<?php

require_once("conexao.php");

class CrudPermicao {

	


	//LISTAR DADOS NO SELECET FORMA DE PAGAMENTO
	public function readPermicaoList($id=0) {

		$sql = 'SELECT * FROM permicao ';

		$stmt = Conexao::getConn()->prepare($sql);

		$stmt->execute();

			$result=array();
		
		    while($resultado = $stmt->fetch(\PDO::FETCH_ASSOC)){
				
			   $objecto   =  new Permicao();
			   $objecto->  setId($resultado["idpermicao"]);
			   $objecto->  setDescricao($resultado["descricao"]);

			   if($objecto->getId() == $id) {
                echo '<option  title="'.$objecto->getId().'"value="'.$objecto->getId().'" selected>'.$objecto->getDescricao().'</option>';
            } else {
                echo '<option value="'.$objecto->getId().'">'.$objecto->getDescricao().'</option>';
            }

			}
	}

	

	
}




