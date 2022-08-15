<?php

//Incluir o cliente
include_once('../../../model/cliente.php');
include_once('../../../controller/crud-cliente.php');



$select = new CrudCliente();
if(isset($_POST['nome'])){
  $dados=$select->readInativos($_POST['nome']);
}else{
  $dados=$select->readInativos('');
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
<td>'.$var.'</td>


<td>
<button data-toggle="modal" data-target="#verRecuperar'.$value->getId().'"  class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
<button data-toggle="modal" data-target="#ver'.$value->getId().'" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
</td>
</tr>';
}    
?>