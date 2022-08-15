

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
  


            <h1 class="text-center">Reservas Rejeitadas</h1>

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
                   <th>Recuperar</th>
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

 /*
$('.idFormaPagamento').change(function(e){
       e.preventDefault();

   var idFormaPagamento1=$('.idFormaPagamento').val();
     alert(idFormaPagamento1);
   });*/

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
 url:"Ajax/reserva_Rejeitada.php",
 method:"POST",
 success:function(data){
     $('#resultado').html(data);

 }
});

}

buscarNome();



</script>


