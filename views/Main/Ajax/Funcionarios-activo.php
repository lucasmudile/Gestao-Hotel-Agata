


  <?php
    //Incluir o cliente
include_once('../../../model/funcionario.php');
include_once('../../../controller/crud-funcionario.php');

        $select = new CrudFuncionario();
        if(isset($_POST['nome'])){
          $dados=$select->readFuncionario($_POST['nome']);
        }else{
          $dados=$select->readFuncionario('');
        }
    
foreach ($dados as $key => $value) {

if($value->getStatus()==1){
$var='<span class="label label-info label-mini">Activo</span>';
}else{
$var='<span class="label label-danger label-mini">Inactivo</span>';
}
echo '
<tr>
<td>'.$value->getNome().'</td>
<td>'.$value->getEmail().'</td>
<td>'.$value->getTelefone().'</td>
<td>'.$value->getBi().'</td>
<td>'.$value->getDataNascimento().'</td>
<td>'.$value->getMorada().'</td>
<td>'.$value->getPermicao().'</td>
<td>'.$var.'</td>
<td>
<button  onclick="Editar('.$value->getId().');"   class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
<button data-toggle="modal" data-target="#ver'.$value->getId().'" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
</td>
</tr>';
}    

//data-toggle="modal" data-target="#editar'.$value->getId().'"
?>