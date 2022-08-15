


  <style>
    .msgajax{
   background: #57e057;
   color:#fff;
   margin:0px 15px 20px 15px;
   font-weight:500;
}
  </style>



     <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
   


             <h1 class="text-center">Confirmação de Reservas</h1>

              <header class="panel-heading">
                <h4 class="gen-case">
                  .
                    <form action="#" class="pull-right mail-src-position">
                      <div class="input-append">
                        <input type="text" class="form-control " id="buscar" name="buscar" placeholder="Pesquisar...">
                      </div>
                    </form>
                  </h4>
              </header>

                <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th> Cliente</th>
                    <th> Data de Reserva</th>
                    <th>Quarto</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th>Processar</th>
                  </tr>
                </thead>
                <tbody id="resultado">
       
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
    
      </section>
    </section>
    <!--main content end-->



    <?php
    /*
include_once('../../model/reserva.php');
    include_once('../../controller/crud-reserva.php');
$select1 = new CrudReserva();
$dados1=$select1->readReservasEfectuadas('');

foreach ($dados1 as $key => $value) {

    # MODAL PARA ELIMINAR O CURSO
    echo '
        <div class="modal fade bd-example-modal-lg" id="ver'.$value->getId().'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmação da Reserva</h5>
                   
                </div>
                <div class="modal-body">
                   
                <div class="form-group row">
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                 <label class="text-gray-900"><strong>Cliente:</strong> '.$value->getIdCliente().'</label>
                            </div>
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                 <label class="text-gray-900"><strong>Email:</strong> '.$value->getEmailCliente().'</label>
                            </div>
                            <div class="col-sm-3 mb-3 mb-sm-0">
                            <label class="text-gray-900"><strong>Data de Resrva: '.$value->getDataReserva().' </strong></label>
                       </div>

                        <div class="col-sm-3 mb-3 mb-sm-0">
                            <label class="text-gray-900"><strong>Quarto:</strong>'.$value->getIdQuarto().' </label>
                       </div>

                       </div>


                       <div class="form-group row">
                            
                       <div class="col-sm-3 mb-3 mb-sm-0">
                       <label class="text-gray-900"><strong>Nº de crianças: </strong> '.$value->getN_Crianca().' </label>
                  </div>

                   <div class="col-sm-3 mb-3 mb-sm-0">
                       <label class="text-gray-900"><strong>Nº de adultos:</strong> '.$value->getN_Adulto().' </label>
                  </div>


                            <div class="col-sm-3 mb-3 mb-sm-0">
                            <label class="text-gray-900"><strong>Data de Chegada:</strong> '.$value->getDataChegada().' </label>
                       </div>

                        <div class="col-sm-3 mb-3 mb-sm-0">
                            <label class="text-gray-900"><strong>Data de Saida:</strong> '.$value->getDataSaida().' </label>
                       </div>

                        <br>
                       <div class="col-sm-4 mb-3 mb-sm-0">
                      <label class="text-gray-900"> <strong>Observação</strong></label>
                       <textarea id="clienteMensagem" class="form-control" rows="4"></textarea>

                       </div>

                       </div>

                   </div>

                <div class="modal-footer">
                    <form action="" method="post">
                    
                        <a class="btn btn-theme" id="ReservaAlterar" href="#">Confirmar</a>
                        <input type="hidden" name="id" id="idRreserva" value="'.$value->getId().'">
                        <a class="btn btn-danger" href="imprimir.php?id='.$value->getId().'">Negar</a>
                        <button type="button" class="btn btn-primary" data-dismiss="modal" name="ver">Fechar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>';
}
*/
?>




<!-- MODAL PARA CONFIRMAR A RESERVA-->
<div id="modal1" class="modal fade " role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmação de Reserva</h5> 
                    <h4 class="text-center msg" style="display:none;"><span class="msgajax">Sucesso</span></h4>  
                </div>
                <div class="modal-body">...</div>               

            </div>
        </div>
    </div>
</div>



<script src="style/lib/jquery/jquery.js"></script>
<script>


     function EditarReserva(id){
    
    $.ajax({
        url:'Ajax/modal_reserva.php',
        type: 'POST',
        data: {id:id},
        beforeSend:function() {
            $('#modal1').fadeTo("slow", 0.9).modal('show');
        },
        success:function(html) {
            $('#modal1').find('.modal-body').html(html);
            $('#modal1').find('.modal-body').find('form').on('submit', Salvar);
            $('#modal1').find('show');
        }
    });


  }

  function Salvar() {
    var idReserva=$('#idReserva').val();
    var obs=$('#obs').val();

          //Inserir os dados no via Ajax
          $.ajax({
          url:'Ajax/reserva-update.php',
          method:'POST',
          data:{obs:obs,idReserva:idReserva},
          datatype:'html'
        }).done(function(result){
         
          if (result==1){
            $('.msg').show();
            $('.msgajax').html("Reserva confirmada com sucesso!");
            $('.msg').fadeOut(3000);

            setTimeout(function(){
              window.location.reload(1)
            },3000);

          }
          else{
            alert('Este Reserva não foi confirmada');
          }
        });
}

function Rejeitar(){


  var idReserva=$('#idReserva').val();
  var obs=$('#obs').val();
 
    //Inserir os dados no via Ajax
    $.ajax({
          url:'Ajax/reserva-rejeitar.php',
          method:'POST',
          data:{obs:obs,idReserva:idReserva},
          datatype:'html'
        }).done(function(result){
         
          if (result==1){
            $('.msg').show();
            $('.msgajax').html("Reserva Rejeitada!");
            $('.msg').fadeOut(3000);

            setTimeout(function(){
              window.location.reload(1)
            },3000);

          }
          else{
            alert('Este Reserva não foi Rejeitada');
          }
        });


}

 

  function fechar() {
    $('#modal1').fadeTo("slow", 0.9).modal('hide');
}


        function buscarNome(nome){

        $.ajax({
          url:"Ajax/Reserva_Processadas.php",
          method:"POST",
          data:{nome:nome},
          success:function(data){
              $('#resultado').html(data);

          }

        });
      }

      $(document).ready(function(){

        buscarNome();

        $('#buscar').keyup(function(){

          var nome=$(this).val();
          if(nome!=''){
            buscarNome(nome);
          }else{
            buscarNome();
          }

        });

      });
   

</script>