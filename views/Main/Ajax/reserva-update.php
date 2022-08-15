<?php
    session_start();

    if(isset($_POST['idReserva'])){

        include_once('../../../model/reserva.php');
        include_once('../../../controller/crud-reserva.php');

        $CrudFuncionario = new CrudReserva();
        $obj=new Reserva();

        $obj->setId($_POST['idReserva']);
        $obj->setObs($_POST['obs']);
        $obj->setIdFuncionario($_SESSION['idfuncionario']);
        $CrudFuncionario->updateStatu($obj);
       
    }
    
?>