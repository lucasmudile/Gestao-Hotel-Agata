<?php

require_once("conexao.php");

class CrudReserva {
	

	//INSERIR DADOS NA TABELA CLIENTE
	public function create(Reserva $p) {	
		
		$sql = 'INSERT INTO reserva (`data_chegada`,`data_partida`, `data_reserva`,`n_adulta`, `n_crianca`, `desejo`, `id_quarto`, `id_cliente`,`statu`) 
        VALUES (?,?,?,?,?,?,?,?,?)';
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getDataChegada());
		$stmt->bindValue(2, $p->getDataSaida());
		$stmt->bindValue(3, date('Y/m/d'));
		$stmt->bindValue(4, $p->getN_Adulto());
        $stmt->bindValue(5, $p->getN_Crianca());
		$stmt->bindValue(6, $p->getDesejo());
		$stmt->bindValue(7, $p->getIdQuarto());
		$stmt->bindValue(8, $p->getIdCliente());
		$stmt->bindValue(9, "0");
		if ($stmt->execute() > 0) {
		 	echo"1";
		 }else{
			 echo"2";
		 }

	}

//LISTAR DADOS NA TABELA RESERVAS EFECTUADAS
	public function readReservasEfectuadas($nome){

		if(isset($nome)){
	$sql = "SELECT * FROM view_reserva_efectuadas where nome LIKE '%".$nome."%' ORDER BY nome";
		}else{
			$sql = 'SELECT * FROM view_reserva_efectuadas';
		}
		
		$stmt = Conexao::getConn()->prepare($sql);

		$stmt->execute();

			$result=array();
		
		    while($resultado = $stmt->fetch(\PDO::FETCH_ASSOC)){

			   $objecto   =  new Reserva();
			   $objecto->  setId($resultado["idreserva"]);
			   $objecto->  setIdCliente($resultado["nome"]);
			   $objecto->  setIdQuarto($resultado["descricao"]);
			   $objecto->  setDataReserva($resultado["data_reserva"]);  
			   $objecto->  setN_Adulto($resultado["n_adulta"]); 
			   $objecto->  setN_Crianca($resultado["n_crianca"]); 
			   $objecto->  setDataChegada($resultado["data_chegada"]); 
			   $objecto->  setDataSaida($resultado["data_partida"]); 
			   $objecto->  setEmailCliente($resultado["email"]); 
			   $result[]=$objecto;
			}
			return $result;
	}


	//LISTAR DADOS NA TABELA RESERVAS PROCESSADAS
	public function readReservasProcessadas() {

		$sql = 'SELECT * FROM view_reserva_processada';

		$stmt = Conexao::getConn()->prepare($sql);

		$stmt->execute();

			$result=array();
		
		    while($resultado = $stmt->fetch(\PDO::FETCH_ASSOC)){

			   $objecto   =  new Reserva();
			   $objecto->  setId($resultado["idreserva"]);
			   $objecto->  setIdCliente($resultado["nome"]);
			   $objecto->  setIdQuarto($resultado["descricao"]);
			   $objecto->  setDataReserva($resultado["data_reserva"]);  
			   $objecto->  setN_Adulto($resultado["n_adulta"]); 
			   $objecto->  setN_Crianca($resultado["n_crianca"]); 
			   $objecto->  setDataChegada($resultado["data_chegada"]); 
			   $objecto->  setDataSaida($resultado["data_partida"]); 
			   $objecto->  setEmailCliente($resultado["email"]); 
			   $result[]=$objecto;
			}
			return $result;
	}


		//LISTAR DADOS NA TABELA RESERVAS REJEITADAS
		public function readReservasRejeitadas() {

			$sql = 'SELECT * FROM view_reserva_rejeitadas';
	
			$stmt = Conexao::getConn()->prepare($sql);
	
			$stmt->execute();
	
				$result=array();
			
				while($resultado = $stmt->fetch(\PDO::FETCH_ASSOC)){
	
				   $objecto   =  new Reserva();
				   $objecto->  setId($resultado["idreserva"]);
				   $objecto->  setIdCliente($resultado["nome"]);
				   $objecto->  setIdQuarto($resultado["descricao"]);
				   $objecto->  setDataReserva($resultado["data_reserva"]);  
				   $objecto->  setN_Adulto($resultado["n_adulta"]); 
				   $objecto->  setN_Crianca($resultado["n_crianca"]); 
				   $objecto->  setDataChegada($resultado["data_chegada"]); 
				   $objecto->  setDataSaida($resultado["data_partida"]); 
				   $objecto->  setEmailCliente($resultado["email"]); 
				   $result[]=$objecto;
				}
				return $result;
		}


			//LISTAR DADOS NA TABELA RESERVAS PROCESSADAS
			public function readReservasEliminadas() {

				$sql = 'SELECT * FROM view_reserva_eliminada';
		
				$stmt = Conexao::getConn()->prepare($sql);
		
				$stmt->execute();
		
					$result=array();
				
					while($resultado = $stmt->fetch(\PDO::FETCH_ASSOC)){
		
					   $objecto   =  new Reserva();
					   $objecto->  setId($resultado["idreserva"]);
					   $objecto->  setIdCliente($resultado["nome"]);
					   $objecto->  setIdQuarto($resultado["descricao"]);
					   $objecto->  setDataReserva($resultado["data_reserva"]);  
					   $objecto->  setN_Adulto($resultado["n_adulta"]); 
					   $objecto->  setN_Crianca($resultado["n_crianca"]); 
					   $objecto->  setDataChegada($resultado["data_chegada"]); 
					   $objecto->  setDataSaida($resultado["data_partida"]); 
					   $objecto->  setEmailCliente($resultado["email"]); 
					   $result[]=$objecto;
					}
					return $result;
			}


			
			//LISTAR DADOS NA TABELA RESERVAS PROCESSADAS
			public function readReservasFinalizada() {

				$sql = 'SELECT * FROM view_reserva_finalizada';
		
				$stmt = Conexao::getConn()->prepare($sql);
		
				$stmt->execute();
		
					$result=array();
				
					while($resultado = $stmt->fetch(\PDO::FETCH_ASSOC)){
		
					   $objecto   =  new Reserva();
					   $objecto->  setId($resultado["idreserva"]);
					   $objecto->  setIdCliente($resultado["nome"]);
					   $objecto->  setIdQuarto($resultado["descricao"]);
					   $objecto->  setDataReserva($resultado["data_reserva"]);  
					   $objecto->  setN_Adulto($resultado["n_adulta"]); 
					   $objecto->  setN_Crianca($resultado["n_crianca"]); 
					   $objecto->  setDataChegada($resultado["data_chegada"]); 
					   $objecto->  setDataSaida($resultado["data_partida"]); 
					   $objecto->  setEmailCliente($resultado["email"]); 
					   $result[]=$objecto;
					}
					return $result;
			}

	

	//Actualizar a reserva para finalizar a mesma
	public function updateReserva(Reserva $p) {

		$sql = 'UPDATE reserva SET id_forma_pagamento = ?, valor = ?,id_funcionario WHERE idreserva = ?';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getIdFormaPagamento());
		$stmt->bindValue(2, $p->getValor());
		$stmt->bindValue(3, '1');
		$stmt->bindValue(2, $p->getId());

		if($stmt->execute()>0){
			echo 1;
		}else{
			echo 2;
		}


	}


		//Actualizar a reserva para processar a mesma
		public function updateStatu(Reserva $p) {

			$sql = 'UPDATE reserva SET obs = ?, statu=?,id_funcionario=? WHERE idreserva = ?';
			$stmt = Conexao::getConn()->prepare($sql);
			$stmt->bindValue(1, $p->getObs());
			$stmt->bindValue(2, '1');
			$stmt->bindValue(3, $p->getIdFuncionario());
			$stmt->bindValue(4, $p->getId());
	
			if($stmt->execute()>0){
				echo 1;
			}else{
				echo 2;
			}
	
	
		}


		


	public function findByIdReservaProcessada($id) {

        
		$sql = 'SELECT * FROM view_reserva_efectuadas where idreserva=?  ';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $id);
		
		$stmt->execute();
		  $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);

			$objecto   =  new Reserva();
		       
		       $objecto->  setId($resultado["idreserva"]);
			   $objecto->  setIdCliente($resultado["nome"]);
			   $objecto->  setIdQuarto($resultado["descricao"]);
			   $objecto->  setDataReserva($resultado["data_reserva"]);  
			   $objecto->  setN_Adulto($resultado["n_adulta"]); 
			   $objecto->  setN_Crianca($resultado["n_crianca"]); 
			   $objecto->  setDataChegada($resultado["data_chegada"]); 
			   $objecto->  setDataSaida($resultado["data_partida"]); 
			   $objecto->  setEmailCliente($resultado["email"]); 

			return $objecto;
		  
	}



	public function findByIdReservaProcessada1($id) {

        
		$sql = 'SELECT * FROM view_reserva_processada where idreserva=?  ';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $id);
		
		$stmt->execute();
		  $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);

			$objecto   =  new Reserva();
		       
		       $objecto->  setId($resultado["idreserva"]);
			   $objecto->  setIdCliente($resultado["nome"]);
			   $objecto->  setIdQuarto($resultado["descricao"]);
			   $objecto->  setDataReserva($resultado["data_reserva"]);  
			   $objecto->  setN_Adulto($resultado["n_adulta"]); 
			   $objecto->  setN_Crianca($resultado["n_crianca"]); 
			   $objecto->  setDataChegada($resultado["data_chegada"]); 
			   $objecto->  setDataSaida($resultado["data_partida"]); 
			   $objecto->  setEmailCliente($resultado["email"]); 

			return $objecto;
		  
	}


		//Actualizar a reserva para finalizar a mesma
		public function updateFinaliza(Reserva $p) {

			$sql = 'UPDATE reserva SET id_forma_pagamento = ?, valor_pago=?,id_funcionario=?,statu=?,data_pagamento=? WHERE idreserva = ?';
			$stmt = Conexao::getConn()->prepare($sql);
			$stmt->bindValue(1, $p->getIdFormaPagamento());
			$stmt->bindValue(2, $p->getValor());
			$stmt->bindValue(3, $p->getIdFuncionario());
			$stmt->bindValue(4, '4');
			$stmt->bindValue(5, date('Y/m/d H:i:s'));
			$stmt->bindValue(6, $p->getId());
	
			if($stmt->execute()>0){
				echo 1;
			}else{
				echo 2;
			}
	
	
		}


		//Actualizar a reserva para finalizar a mesma
		public function updateRejeitar(Reserva $p) {

			$sql = 'UPDATE reserva SET statu=?,obs=?,id_funcionario=? WHERE idreserva = ?';
			$stmt = Conexao::getConn()->prepare($sql);
			$stmt->bindValue(1, '2');
			$stmt->bindValue(2, $p->getObs());
			$stmt->bindValue(3, $p->getIdFuncionario());
			$stmt->bindValue(4, $p->getId());
	
			if($stmt->execute()>0){
				echo 1;
			}else{
				echo 2;
			}

		}

		//Eliminar reserva
		public function updateReservaEliminada($id) {

			$sql = 'UPDATE reserva SET statu=? WHERE idreserva = ?';
			$stmt = Conexao::getConn()->prepare($sql);
			$stmt->bindValue(1, '3');
			$stmt->bindValue(2, $id);
	
			if($stmt->execute()>0){
				echo 1;
			}else{
				echo 2;
			}

		}



		public function findByIdReservaEliminada($id) {

        
			$sql = 'SELECT * FROM view_reserva_eliminada where idreserva=?  ';
	
			$stmt = Conexao::getConn()->prepare($sql);
			$stmt->bindValue(1, $id);
			
			$stmt->execute();
			  $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
	
				$objecto   =  new Reserva();
				   
				   $objecto->  setId($resultado["idreserva"]);
				   $objecto->  setIdCliente($resultado["nome"]);
				   $objecto->  setIdQuarto($resultado["descricao"]);
				   $objecto->  setDataReserva($resultado["data_reserva"]);  
				   $objecto->  setN_Adulto($resultado["n_adulta"]); 
				   $objecto->  setN_Crianca($resultado["n_crianca"]); 
				   $objecto->  setDataChegada($resultado["data_chegada"]); 
				   $objecto->  setDataSaida($resultado["data_partida"]); 
				   $objecto->  setEmailCliente($resultado["email"]); 
	
				return $objecto;
			  
		}


			//Eliminar reserva
			public function updateRecuperarReserva($id) {

				$sql = 'UPDATE reserva SET statu=? WHERE idreserva = ?';
				$stmt = Conexao::getConn()->prepare($sql);
				$stmt->bindValue(1, '1');
				$stmt->bindValue(2, $id);
		
				if($stmt->execute()>0){
					echo 1;
				}else{
					echo 2;
				}
	
			}

		
	/*
	public function delete($id) {

		$sql = 'DELETE FROM produtos WHERE id = ?';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $id);
		$stmt->execute();

	}*/
	
}




