<?php

      //INCLUIR O MODEL E O CRUD DA RESERVA
      include_once('../../../model/reserva.php');
      include_once('../../../controller/crud-reserva.php');
      $select = new CrudReserva();

          $dados=$select->readReservasProcessadas();
          foreach ($dados as $key => $value) {
        echo '
        <tr>
        <td>'.$value->getIdCliente().'</td>
        <td>'.$value->getDataChegada().'</td>
        <td>'.$value->getDataSaida().'</td>
        <td>'.$value->getDataReserva().'</td>
        <td>'.$value->getIdQuarto().'</td>
        <td><span class="label label-info label-mini">Processando</span></td>
        <td>
        <button  onclick="Editar1('.$value->getId().');"   class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
          <button data-toggle="modal" data-target="#ver'.$value->getId().'" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
        </td>
      </tr>';
          }    
?>