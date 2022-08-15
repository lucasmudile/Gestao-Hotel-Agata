         <?php

                    //Incluir o cliente
    include_once('../../../model/reserva.php');
    include_once('../../../controller/crud-reserva.php');

          $select = new CrudReserva();
          if(isset($_POST['nome'])){
          $dados=$select->readReservasEfectuadas($_POST['nome']);
        }else{
          $dados=$select->readReservasEfectuadas('');
        }

          foreach ($dados as $key => $value) {
        echo '
        <tr>
        <td>'.$value->getIdCliente().'</td>
        <td>'.$value->getDataReserva().'</td>
        <td>'.$value->getIdQuarto().'</td>
        <td><span class="badge bg-success label-mini">Em Espera</span></td>
        <td>
        
          <button  onclick="EditarReserva('.$value->getId().');"   class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>

        </td>
      </tr>';
          }    
?> 