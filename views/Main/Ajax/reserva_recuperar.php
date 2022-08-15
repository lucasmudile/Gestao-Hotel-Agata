
<?php
    if(isset($_POST['id'])){

        include_once('../../../model/reserva.php');
        include_once('../../../controller/crud-reserva.php');

        $CrudFuncionario = new CrudReserva();
        $obj=new Reserva();
        $CrudFuncionario->updateRecuperarReserva($_POST['id']);
       
    }
    
?>