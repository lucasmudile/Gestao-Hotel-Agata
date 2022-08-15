<?php

	include('../../../model/cliente.php');
	include('../../../controller/crud-cliente.php');

	$id=$_GET['id'];
	if(isset($id)){
	$CrudCliente = new CrudCliente();
	$CrudCliente->updateInactivo($id);
	}

	$idDeletar=$_GET['idDel'];
	if(isset($idDeletar)){
	$CrudCliente = new CrudCliente();
	$CrudCliente->delete($id);
	}

	$idRecu=$_GET['idRec'];
	if(isset($idRecu)){
	$CrudCliente = new CrudCliente();
	$CrudCliente->updateActivo($id);
	}

	

?>


