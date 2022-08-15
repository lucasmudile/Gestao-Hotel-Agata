
<?php
 //Incluir o funcionario
 include_once('../../model/funcionario.php');
 include_once('../../controller/crud-funcionario.php');
?>
     <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
             <h1 class="text-center">Lista de Funcionários</h1>

            <header class="panel-heading">
                <h4 class="gen-case">
                  <button class="btn btn-theme" data-toggle="modal" data-target="#ver">Adicionar</button>
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
                    <th>BI</th>
                    <th>Data de Nascimento</th>
                    <th>Morada</th>
                    <th>Permissão</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th>Informação</th>
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









    <!-- MODAL PARA CADASTRAR FUNCIONÁRIO-->
        <div class="modal fade bd-example-modal-lg" id="ver" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastro de Funcionários</h5>
                   
                </div>
                <div class="modal-body">
                <form >
                <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <label class="text-gray-900" id="cliente"><strong>Nome Completo</strong></label>
                            <input type="text" class="form-control" id="nomeFuncionario" placeholder="" required/>
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                 <label class="text-gray-900"><strong>Email</strong></label>
                                 <input type="email" class="form-control" id="emailFuncionario" placeholder="" required/>
                            </div>
                           
                       </div>

                       <div class="form-group row">
                            <div class="col-sm-4 mb-3 mb-sm-0">
                            <label class="text-gray-900" id="cliente"><strong>Nº do BI</strong></label>
                            <input type="text" class="form-control" id="biFuncionario" placeholder="" required>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                 <label class="text-gray-900"><strong>Telefone</strong></label>
                                 <input type="number" class="form-control" id="telefone" placeholder="" required>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                            <label class="text-gray-900"><strong>Morada </strong></label>
                            <input type="text" class="form-control" id="morada" placeholder="" required>
                            </div>

                       </div>

                       <div class="form-group row">
                       <div class="col-sm-4 mb-3 mb-sm-0">
                            <label class="text-gray-900"><strong>Data de Nascimento </strong></label>
                            <input type="date" class="form-control" id="dataNascimento" placeholder="" required>
                            </div>

                            <div class="col-sm-4 mb-3 mb-sm-0">
                            <label class="text-gray-900" id="cliente"><strong>Senha</strong></label>
                            <input type="password" class="form-control" id="senha" placeholder="" required>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                 <label class="text-gray-900"><strong>Permissão</strong></label>
                                 <select class="form-control" id="idPermicao" >
                                  
                               <?php
                                    //Incluir a Permição
                                   include_once('../../model/permicao.php');
                                   include_once('../../controller/crud-permicao.php');
                                  $permicao = new CrudPermicao();
                                  $permicao->readPermicaoList();
                                 ?>
                               </select>
                            </div>

                       </div>



                       </div>
                    <div class="modal-footer">
                    <h4 class="text-center msg" style="display:none;"><span class="msgajax">Sucesso</span></h4>

                        <button type="submit" class="btn btn-theme" id="salvar"  name="salvar">Cadastrar</button>
                          <button type="button" class="btn btn-primary" data-dismiss="modal" name="ver">Fechar</button>
                    </div>
                </div>
                </form>
            </div>
        </div>             


        <?php

$select = new CrudFuncionario();
$dados1=$select->readFuncionario('');

foreach ($dados1 as $key => $value) {

    # MODAL PARA ELIMINAR O FUNCIONÁRIO
    echo '
        <div class="modal fade bd-example-modal-lg" id="ver'.$value->getId().'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Eliminação de clientes</h4>
                   
                </div>
                <div class="modal-body">
                   
                <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                            <h4 class="text-center"> Tem certeza que pretende eliminar o funcionário '.$value->getNome().' ?</h4>
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


<!-- MODAL PARA EDITAR O FUNCIONÁRIO-->
<div id="modal" class="modal fade " role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Funcionários</h5> 
                    <h4 class="text-center msg" style="display:none;"><span class="msgajax">Sucesso</span></h4>  
                </div>
                <div class="modal-body">...</div>               

            </div>
        </div>
    </div>
</div>


 
<script src="style/lib/jquery/jquery.js"></script>
<script>

  function Editar(id){
    
    $.ajax({
        url:'Ajax/modal_funcionario.php',
        type: 'POST',
        data: {id:id},
        beforeSend:function() {
            $('#modal').fadeTo("slow", 0.9).modal('show');
        },
        success:function(html) {
            $('#modal').find('.modal-body').html(html);
            $('#modal').find('.modal-body').find('form').on('submit', editar);
            $('#modal').find('show');
        }
    });


  }


  
   function editar(e) {
    e.preventDefault();
    
    var nome=$('#nomeFuncionario1').val();
    var email=$('#emailFuncionario1').val();
    var Bi=$('#biFuncionario1').val();
    var telefone=$('#telefone1').val();
    var morada=$('#morada1').val();
    var dataNascimento=$('#dataNascimento1').val();
    var id=$('#idFuncionario').val();
    var p1 = $('#permicao').val();

          //  alert(id);
        if(nome==''){
          alert("Preeche o campo nome");
          return;
        }else if(email==''){
          alert("Preeche o campo email");
          return;
        }else if(Bi==''){
          alert("Preeche o campo BI");
          return;
        }else if(morada==''){
          alert("Preeche o campo morada");
          return;
        }else if(dataNascimento==''){
          alert("Preeche o campo Data de Nascimento");
          return;
        }else if(telefone==''){
          alert("Preeche o campo telefone");
          return;
        }else if(p1==''){
          alert("Preeche o campo permissão");
          return;
        }else{
          
          //Inserir os dados no via Ajax
          $.ajax({
          url:'Ajax/funcionario-update.php',
          method:'POST',
          data:{nome:nome,email:email,Bi:Bi,telefone:telefone,morada:morada,dataNascimento:dataNascimento,p1:p1,id:id},
          datatype:'html'
        }).done(function(result){
         
          if (result==1){
            $('.msg').show();
            $('.msgajax').html("Funcionário editado com sucesso!");
            $('.msg').fadeOut(3000);

            setTimeout(function(){
              window.location.reload(1)
            },3000);

          }
          else{
            alert('Este Funcionário não foi Editado');
          }
        });


        }
  
   
}

function fechar() {
    $('#modal').fadeTo("slow", 0.9).modal('hide');
}

      $('.editar').click(function(){

        var permi=$('.idPermicao').val();
        alert(permi);


      });

      function buscarNome(nome){

        $.ajax({
          url:"Ajax/Funcionarios-activo.php",
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
          url:'Ajax/funcionario.php?id='+id,
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



      //Inserir dados via ajax na base de dados
  $('#salvar').click(function(e){
        e.preventDefault();

        var nome=$('#nomeFuncionario').val();
        var email=$('#emailFuncionario').val();
        var bi=$('#biFuncionario').val();
        var telefone=$('#telefone').val();
        var morada=$('#morada').val();
        var dataNascimento=$('#dataNascimento').val();
        var senha=$('#senha').val();
        var permicao=$('#idPermicao').val();

        if(nome==''){
          alert("Preeche o campo nome");
          return;
        }else if(email==''){
          alert("Preeche o campo email");
          return;
        }else if(bi==''){
          alert("Preeche o campo BI");
          return;
        }else if(morada==''){
          alert("Preeche o campo morada");
          return;
        }else if(dataNascimento==''){
          alert("Preeche o campo Data de Nascimento");
          return;
        }else if(senha==''){
          alert("Preeche o campo senha");
          return;
        }else if(bi==''){
          alert("Preeche o campo permissão");
          return;
        }else{
          
          //Inserir os dados no via Ajax
          
          $.ajax({
          url:'Ajax/funcionario-insert.php',
          method:'POST',
          data:{nome:nome,email:email,bi:bi,telefone:telefone,morada:morada,dataNascimento:dataNascimento,senha:senha,permicao:permicao},
          datatype:'html'
        }).done(function(result){
         
          if (result==1){
            $('.msg').show();
            $('.msgajax').html("Funcionário salvo com sucesso!");
            $('.msg').fadeOut(3000);

            setTimeout(function(){
              window.location.reload(1)
            },3000);

          }
          else{
            alert('Este Funcionário não foi salvo');
          }
        });


        }

    });
   


</script>