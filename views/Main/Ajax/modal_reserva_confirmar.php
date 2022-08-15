<?php
include_once('../../../model/reserva.php');
include_once('../../../controller/crud-reserva.php');



$select = new CrudReserva();


$id = filter_input(INPUT_POST, 'id');
if($id) {
    $dados=$select->findByIdReservaProcessada1($id);
}
?>


<div class="container">
    <form method="POST" class="form-label">

         
                   
                <div class="form-group row">
                            <div class="col-sm-3 mb-3 mb-sm-0">
                            <label class="text-gray-900" id="cliente"><strong>Cliente: </strong><?php echo  $dados->getIdCliente() ?></label>
                            </div>
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                 <label class="text-gray-900"><strong>Email: </strong><?php echo $dados->getEmailCliente()?></label>
                            </div>
                            <div class="col-sm-3 mb-3 mb-sm-0">
                            <label class="text-gray-900"><strong>Data de Resrva: </strong><?php echo $dados->getDataReserva()?></label>
                       </div>

                 </div>


                       <div class="form-group row">
                       <div class="col-sm-3 mb-3 mb-sm-0">
                            <label class="text-gray-900"><strong>Quarto: </strong><?php echo $dados->getIdQuarto()?></label>
                       </div>
                            
                       <div class="col-sm-3 mb-3 mb-sm-0">
                       <label class="text-gray-900"><strong>Nº de crianças: </strong><?php echo $dados->getN_Crianca()?> </label>
                  </div>

                   <div class="col-sm-3 mb-3 mb-sm-0">
                       <label class="text-gray-900"><strong>Nº de adultos:</strong><?php echo $dados->getN_Adulto()?></label>
                  </div>
                       </div>



                       <div class="form-group row">
                       <div class="col-sm-3 mb-3 mb-sm-0">
                            <label class="text-gray-900"><strong>Data de Chegada:</strong><?php echo $dados->getDataChegada()?></label>
                       </div>
                        <div class="col-sm-3 mb-3 mb-sm-0">
                            <label class="text-gray-900"><strong>Data de Saida:</strong><?php echo $dados->getDataSaida()?> </label>
                       </div>
                       </div>

                       <div class="form-group row">
                       <div class="col-sm-4 mb-3 mb-sm-0">
                       <label class="text-gray-900"> <strong>Valor a Pagar</strong></label>
                       <input type="number" class="form-control" id="valor1" placeholder="" required>
                       </div>

                       <div class="col-sm-4 mb-3 mb-sm-0">
                        <label class="text-gray-900"> <strong>Forma de Pagamento</strong></label>
                        <select class="form-control" id="idPagamento" >
                        <?php

                            include_once("../../../model/forma_pagamento.php");
                            include_once("../../../controller/crud-forma-pagamento.php");
                            $FormaPagamento = new CrudFormaPagamento();
                            $FormaPagamento->readFormaPagamentoList();
                        ?>
                            </select>
                         </div> 

                       </div>

                <hr>
                <input type="hidden" id="id" value="<?php echo $dados->getId(); ?>">
                
                <button  class="btn btn-outline-primary btn-theme">Processar</button>
               <button type="button" onclick="fechar();" class="btn btn-primary ">Cancelar</button>


                           
    </form>
</div>