<?php


      if(isset($_POST['nome'])){

        include_once('../model/cliente.php');
        include_once('../controller/crud-cliente.php');

        $CrudCliente = new CrudCliente();
        $obj=new Cliente();

        $obj->setNome($_POST['nome']);
        $obj->setEmail($_POST['email']);
        $obj->setTelefone($_POST['telefone']);
        $obj->setSenha($_POST['senha']);
        $CrudCliente->create($obj); 

      }


      if(isset($_POST['testemunho'])){
        session_start();

        include_once('../model/testemunho.php');
        include_once('../controller/crud-testemunho.php');


        $CrudTestemunho = new CrudTestemunho();
        $obj=new Testemunho();
        
        $obj->setIdCliente($_SESSION['idcliente']);
        $obj->setTestemunho($_POST['testemunho']);
        $CrudTestemunho->create($obj);

      }

?>