
<?php
    session_start();

    if(isset($_POST['id'])){

        include_once('../../../model/reserva.php');
        include_once('../../../controller/crud-reserva.php');

        $CrudFuncionario = new CrudReserva();
        $obj=new Reserva();

        $obj->setId($_POST['id']);
        $obj->setValor($_POST['valor']);
        $obj->setIdFormaPagamento($_POST['idPagamento']);
        $obj->setIdFuncionario($_SESSION['idfuncionario']);
        $CrudFuncionario->updateFinaliza($obj);
       
    }
    
?>