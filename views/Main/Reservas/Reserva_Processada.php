

                <?php
               
               
                //INCLUIR O MODEL E O CRUD DA RESERVA
                include_once('../../model/reserva.php');
                include_once('../../controller/crud-reserva.php');
               
               //INCLUIR O MODEL E O CRUD DA FORMA DE PAGAMENTO
               include_once("../../model/forma_pagamento.php");
               include_once("../../controller/crud-forma-pagamento.php");

               ?>
     <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
   


             <h1 class="text-center">Reservas Processada</h1>

                <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th> Cliente</th>
                    <th> Data de Chegada</th>
                    <th> Data de Saida</th>
                    <th> Data de Reserva</th>
                    <th>Quarto</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th>Concluir Processo</th>
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
    
    //Incluir a reserva
   include_once('../../model/reserva.php');
   include_once('../../controller/crud-reserva.php');
   
   $select = new CrudReserva();
   
   $dados1=$select->readReservasProcessadas();
   
   
   foreach ($dados1 as $key => $value) {
   
       # MODAL PARA ELIMNINAR RESERVA
       echo '
           <div class="modal fade bd-example-modal-lg" id="ver'.$value->getId().'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
           aria-hidden="true">
           <div class="modal-dialog modal-lg" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h4 class="modal-title" id="exampleModalLabel">Eliminação de reserva</h4>
                       <input type="hidden" id="idEliminar" value="'.$value->getId().'">
                      
                   </div>
                   <div class="modal-body">
                      
                   <div class="form-group row">
                               <div class="col-sm-12 mb-3 mb-sm-0">
                               <h4 class="text-center"> Tem certeza que pretende eliminar essa reserva? </h4>
                                 
                               <h3 class="text-center msg" style="display:none;"><span class="msgajax">Sucesso</span></h3>
                               </div>
                              
                          </div>
                          </div>
   
                       <div class="modal-footer">
                               <a href="javascript:void(0)" class="btn btn-danger  excluir" id="'.$value->getId().'">Eliminar</a>
                               <button type="button" class="btn btn-primary" data-dismiss="modal" name="ver">Fechar</button>
              
                       </div>
                   </div>
               </div>
           </div>';               
   
   
         }
   ?>





<!-- MODAL PARA CONFIRMAR A RESERVA-->
<div id="modal" class="modal fade " role="dialog">
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


    function Editar1(id){

    
    $.ajax({
        url:'Ajax/modal_reserva_confirmar.php',
        type: 'POST',
        data: {id:id},
        beforeSend:function() {
            $('#modal').fadeTo("slow", 0.9).modal('show');
        },
        success:function(html) {
            $('#modal').find('.modal-body').html(html);
            $('#modal').find('.modal-body').find('form').on('submit', editar1);
            $('#modal').find('show');
        }
    });


  }




function editar1(e) {
  e.preventDefault();
    var id=$('#id').val();
    var valor=$('#valor1').val();
    //alert(valor);
    var idPagamento=$('#idPagamento').val();

          //Inserir os dados no via Ajax
          $.ajax({
          url:'Ajax/reserva_confirmar.php',
          method:'POST',
          data:{valor:valor,idPagamento:idPagamento,id:id},
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
            alert('Essa Reserva não foi confirmada');
          }
        });
}

function fechar() {
    $('#modal').fadeTo("slow", 0.9).modal('hide');
}
    



function buscarNome(){

$.ajax({
  url:"Ajax/reserva_process.php",
  method:"POST",
  success:function(data){
      $('#resultado').html(data);

  }
});

}

buscarNome();


    //Enviar os dados na bd via Ajax
    $('.excluir').click(function(e){
        e.preventDefault();


        var element=$(this);
        var id=element.attr("id");

             $.ajax({
          url:'Ajax/eliminarReserva.php',
          method:'POST',
          data:{id:id},
          datatype:'html'
        }).done(function(result){
         
          if (result==1){
            $('.msg').show();
            $('.msgajax').html("Reserva Eliminada com sucesso!");
            $('.msg').fadeOut(3000);

            setTimeout(function(){
              window.location.reload(1)
            },3000);

          }
          else{
            alert('Essa Reserva não foi Eliminada');
          }
        });


    });





</script>


