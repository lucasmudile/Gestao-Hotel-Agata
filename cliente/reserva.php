<?php
include_once('../model/reserva.php');
include_once('../controller/crud-reserva.php');

if(isset($_POST['idCliente'])){
  
    
    $cadastrar = new CrudReserva();
    $reserva = new Reserva();
    
    $reserva->setIdCliente($_POST['idCliente']);
    $reserva->setDataChegada($_POST['dataChegada']);
    $reserva->setDataSaida($_POST['dataPartida']);
    $reserva->setN_Crianca($_POST['n_criancas']);
    $reserva->setN_Adulto($_POST['n_adultos']);
    $reserva->setDesejo($_POST['clienteMensagem']);
    $reserva->setIdQuarto($_POST['idQuarto']);
    $reserva->setIdCliente($_POST['idCliente']);
    $cadastrar->create($reserva);
    
    
  /*  $user = $login->login($cliente);
    if($user->getId() == null) {
        echo "fail";
    } else {

        $_SESSION['idcliente'] = $user->getId();
        $_SESSION['cliente'] = $user->getEmail();
        $_SESSION['nome'] = $user->getNome();
        $_SESSION['telefone'] = $user->getTelefone();
        echo "success";

    }
  */
   

}

?>