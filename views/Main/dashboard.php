<?php

include_once('../../model/funcionario.php');
include_once('../../controller/crud-funcionario.php');

include_once('../../model/cliente.php');
include_once('../../controller/crud-cliente.php');


$select       = new CrudFuncionario();
$funcionario   = $select->readFuncionario('');

$select       = new CrudCliente();
$cliente   = $select->read('');

?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">



            
            <!--custom chart end-->

      
            <div class="row mt">
            
             <div class="col-md-4 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>Funcionários Activo</h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
                
                  <footer>
                    <div class="centered">
                      <h3>Total: <?php echo count($funcionario); ?></h3>
                    </div>
                  </footer> 
                </div>
                <!--  /darkblue panel -->
              </div>
              <!-- /col-md-4-->
                 <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <!-- WHITE PANEL - TOP USER -->
                <div class="white-panel pn">
                  <div class="white-header">
                    <h5>Clientes Activo</h5>
                  </div>
                  <p><img src="style/img/ui-zac.jpg" class="img-circle" width="50"></p>
                  <br>
                  <br>
                   <footer>
                    <div class="centered">
                      <h3>Total: <?php echo count($cliente); ?></h3>
                    </div>
                  </footer>
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <!-- REVENUE PANEL -->
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>Resevas de Hoje</h5>
                  </div>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                  <h3 class="mt">Total de reserva:30</h3>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>

          

            <br>

        
      <div class="row">




          <div class="col-lg-12 main-chart">
            <!--CUSTOM CHART START -->
            
            <div class="border-head">
              <h3>USER VISITS</h3>
            </div>
            
            <div class="custom-bar-chart">
              <ul class="y-axis">
                <li><span>10.000</span></li>
                <li><span>8.000</span></li>
                <li><span>6.000</span></li>
                <li><span>4.000</span></li>
                <li><span>2.000</span></li>
                <li><span>0</span></li>
              </ul>
              <div class="bar">
                <div class="title">JANEIRO</div>
                <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
              </div>
              <div class="bar ">
                <div class="title">FEVEREIRO</div>
                <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
              </div>
              <div class="bar ">
                <div class="title">MARÇO</div>
                <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
              </div>
              <div class="bar ">
                <div class="title">ABRIL</div>
                <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
              </div>
              <div class="bar">
                <div class="title">MAIO</div>
                <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
              </div>
             
              <div class="bar ">
                <div class="title">JUNHO</div>
                <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
              </div>
             
              <div class="bar">
                <div class="title">JULHO</div>
                <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
              </div>
              

            </div>



            </div>
            
            </div>
           
              
  



                     <!-- MODAL PARA TERMINAR SESSÃO-->
    
          <div class="modal fade bd-example-modal-lg" id="fechar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastro de Funcionários</h5>
                   
                </div>
                <div class="modal-body">
                <form >
                <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                            <h4 class="text-center text-danger"> Tem certeza que pretende  terminar a sua sessão?</h4>
                            </div>
                       </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-theme" id="sair"  name="sair">Sim</button>
                          <button type="button" class="btn btn-primary" data-dismiss="modal" name="ver">Fechar</button>
                    </div>
                </div>
                </form>
            </div>
        </div>   









      </section>
    </section>
    <!--main content end-->


<script src="../style/lib/jquery/jquery.js"></script>
<script>
/*Login via ajax */
      $('#sair').click(function(e){
        e.preventDefault();

        setTimeout(function(){
              location.href="../logAut.php";
            },1000);
      });

      </script>




    
  