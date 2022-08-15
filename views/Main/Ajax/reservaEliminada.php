

<?php

      //INCLUIR O MODEL E O CRUD DA RESERVA
      include_once('../../../model/reserva.php');
      include_once('../../../controller/crud-reserva.php');
      $select = new CrudReserva();

          $dados=$select->readReservasEliminadas();
          foreach ($dados as $key => $value) {
        echo '
        <tr>
        <td>'.$value->getIdCliente().'</td>
        <td>'.$value->getDataChegada().'</td>
        <td>'.$value->getDataSaida().'</td>
        <td>'.$value->getDataReserva().'</td>
        <td>'.$value->getIdQuarto().'</td>
        <td><span class="label label-danger label-mini">Eliminda</span></td>
        <td>
        <button  onclick="Editar1('.$value->getId().');"   class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
        </td>
      </tr>';
          }    
?>