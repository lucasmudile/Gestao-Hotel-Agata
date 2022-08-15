<?php


    if(isset($_POST['nome'])){

        include_once('../../../model/funcionario.php');
        include_once('../../../controller/crud-funcionario.php');


        $CrudFuncionario = new CrudFuncionario();
        $obj=new Funcionario();

       $obj->setNome($_POST['nome']);
        $obj->setBi($_POST['bi']);
        $obj->setDataNascimento($_POST['dataNascimento']);
        $obj->setMorada($_POST['morada']);
        $obj->setTelefone($_POST['telefone']);
        $obj->setEmail($_POST['email']);
        $obj->setSenha($_POST['senha']);
        $obj->setPermicao($_POST['permicao']);
        $CrudFuncionario->create($obj);
       
    }

?>