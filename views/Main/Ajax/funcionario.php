<?php

	include('../../../model/funcionario.php');
	include('../../../controller/crud-funcionario.php');

	$id=$_GET['id'];
	if(isset($id)){
	$CrudFuncionario = new CrudFuncionario();
	$CrudFuncionario->updateInactivo($id);
	}

	$idDeletar=$_GET['idDel'];
	if(isset($idDeletar)){
	$CrudFuncionario = new CrudFuncionario();
	$CrudFuncionario->delete($id);
	}

	$idRecu=$_GET['idRec'];
	if(isset($idRecu)){
	$CrudFuncionario = new CrudFuncionario();
	$CrudFuncionario->updateActivo($id);
	}

?>


