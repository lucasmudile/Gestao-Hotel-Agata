<?php

	include('../../../model/reserva.php');
	include('../../../controller/crud-reserva.php');
	
	$id=$_POST['id'];
	if(isset($id)){
	$CrudCliente = new CrudReserva();
	$CrudCliente->updateReservaEliminada($id);
	}

    ?>