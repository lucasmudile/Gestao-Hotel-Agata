<?php

      //INCLUIR O MODEL E O CRUD DA RESERVA
      include_once('../../../model/reserva.php');
      include_once('../../../controller/crud-reserva.php');
      $select = new CrudReserva();

          $dados=$select->readReservasFinalizada();
          foreach ($dados as $key => $value) {
        echo '
        <tr>
        <td>'.$value->getIdCliente().'</td>
        <td>'.$value->getDataChegada().'</td>
        <td>'.$value->getDataSaida().'</td>
        <td>'.$value->getDataReserva().'</td>
        <td>'.$value->getIdQuarto().'</td>
        <td><span class="label label-success label-mini">Concluída</span></td>
        <td>
     
        </td>
      </tr>';
          }   
          //   <button  onclick="Editar1('.$value->getId().');"   class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button> 
?>