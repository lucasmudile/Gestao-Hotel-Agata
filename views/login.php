<?php
session_start();
include_once('../model/funcionario.php');
include_once('../controller/crud-funcionario.php');

if(isset($_POST['email'])){
  
    $cliente = new Funcionario();
    
    
    $cliente->setEmail($_POST['email']);
    $cliente->setSenha($_POST['senha']);
  
    
    $login = new CrudFuncionario();
    $user = $login->login($cliente);
    if($user->getId() == null) {
        echo "fail";
    } else {

        $_SESSION['idfuncionario'] = $user->getId();
        $_SESSION['email'] = $user->getEmail();
        $_SESSION['nome'] = $user->getNome();
        $_SESSION['telefone'] = $user->getTelefone();
        echo "success";

    }
  
   

}

?>