<?php

    if(isset($_POST['id'])){

        include_once('../../../model/funcionario.php');
        include_once('../../../controller/crud-funcionario.php');

        $CrudFuncionario = new CrudFuncionario();
        $obj=new Funcionario();

        $obj->setId($_POST['id']);
        $obj->setNome($_POST['nome']);
        $obj->setBi($_POST['Bi']);
        $obj->setDataNascimento($_POST['dataNascimento']);
        $obj->setMorada($_POST['morada']);
        $obj->setTelefone($_POST['telefone']);
        $obj->setEmail($_POST['email']);
        $obj->setPermicao($_POST['p1']);
        $CrudFuncionario->update($obj);
       
    }

?>