<?php
include_once('../../../model/reserva.php');
include_once('../../../controller/crud-reserva.php');

$select = new CrudReserva();


$id = filter_input(INPUT_POST, 'id');
if($id) {
    
    $dados=$select->findByIdReservaProcessada($id);

}
?>


<div class="container">
<form method="POST" class="form-label">
 <div class="form-group row">
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                 <label class="text-gray-900"><strong>Cliente:</strong><?php echo $dados->getIdCliente(); ?></label>
                            </div>
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                 <label class="text-gray-900"><strong>Email:</strong><?php echo $dados->getEmailCliente(); ?></label>
                            </div>
                            <div class="col-sm-3 mb-3 mb-sm-0">
                            <label class="text-gray-900"><strong>Data de Resrva: <?php echo $dados->getDataReserva(); ?> </strong></label>
                       </div>

                       </div>


                       <div class="form-group row">
                       <div class="col-sm-3 mb-3 mb-sm-0">
                            <label class="text-gray-900"><strong>Quarto:</strong><?php echo $dados->getIdQuarto(); ?></label>
                       </div>
                            
                       <div class="col-sm-3 mb-3 mb-sm-0">
                       <label class="text-gray-900"><strong>Nº de crianças: </strong><?php echo $dados->getN_Crianca(); ?> </label>
                  </div>

                   <div class="col-sm-3 mb-3 mb-sm-0">
                       <label class="text-gray-900"><strong>Nº de adultos:</strong> <?php echo $dados->getN_Adulto(); ?></label>
                  </div>
                  </div>

                  <div class="form-group row">
                            <div class="col-sm-3 mb-3 mb-sm-0">
                            <label class="text-gray-900"><strong>Data de Chegada:</strong><?php echo $dados->getDataChegada(); ?></label>
                       </div>

                        <div class="col-sm-3 mb-3 mb-sm-0">
                            <label class="text-gray-900"><strong>Data de Saida:</strong><?php echo $dados->getDataSaida(); ?></label>
                       </div>

                    
                       <div class="col-sm-3 mb-3 mb-sm-0">
                      <label class="text-gray-900"> <strong>Observação</strong></label>
                       <textarea id="obs" class="form-control" rows="4"></textarea>

                       </div>

                       </div>

                   </div>

               <input type="hidden" value="<?php echo $id;?>" id="idReserva" name="id">

               <hr>
               <button  onclick="Salvar();"class="btn btn-outline-primary btn-theme">Confirmar</button>
               <button  onclick="Rejeitar();"class="btn btn-outline-danger btn-danger">Rejeitar</button>
               <button type="button" onclick="fechar();" class="btn btn-primary ">Cancelar</button>
</form>

</div>




