  <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->

 
    <section id="main-content">
      <section class="wrapper">
      


             <h1 class="text-center">Lista de Clientes</h1>


           
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
                    <th>Nome</th>
                    <th> Email</th>
                    <th>Telefone</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th>Eliminar</th>
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
    
 //Incluir o cliente
include_once('../../model/cliente.php');
include_once('../../controller/crud-cliente.php');

$select = new CrudCliente();

$dados1=$select->read('');


foreach ($dados1 as $key => $value) {

    # MODAL PARA ELIMNINAR CLIENTE
    echo '
        <div class="modal fade bd-example-modal-lg" id="ver'.$value->getId().'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Elimina????o de clientes</h4>
                   
                </div>
                <div class="modal-body">
                   
                <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                            <h4 class="text-center"> Tem certeza que pretende eliminar o cliente '.$value->getNome().' ?</h4>
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



<script src="style/lib/jquery/jquery.js"></script>
<script>

      function buscarNome(nome){

        $.ajax({
          url:"Ajax/Clientes-activo.php",
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


  //Enviar os dados na bd via Ajax
  $('.excluir').click(function(e){
        e.preventDefault();

      var element=$(this);
      var id=element.attr("id");
      var info='id=' +id;

        $.ajax({
          type:"GET",
          url:'Ajax/cliente.php?id='+id,
          data:info,
        
          success:function(){
            $('.msg').show();
            $('.msgajax').html("Eliminado com sucesso!");
            $('html body').animate({scrollTop:0},500);
            $('.msg').fadeOut(5000);

            setTimeout(function(){
              window.location.reload(1)
            },3000);

          }

        });

    });
   


</script>

