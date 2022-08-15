<?php
session_start();
include_once('../model/cliente.php');
include_once('../controller/crud-cliente.php');

if(isset($_POST['email'])){
  
    $cliente = new Cliente();
    
    
    $cliente->setEmail($_POST['email']);
    $cliente->setSenha($_POST['senha']);
  
    
    $login = new CrudCliente();
    $user = $login->login($cliente);
    if($user->getId() == null) {
        echo "fail";
    } else {

        $_SESSION['idcliente'] = $user->getId();
        $_SESSION['cliente'] = $user->getEmail();
        $_SESSION['nome'] = $user->getNome();
        $_SESSION['telefone'] = $user->getTelefone();
        echo "success";

    }
  
   

}

?>