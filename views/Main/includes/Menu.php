
   
   <?php
      session_start();


      if(isset($_SESSION['email'])){
      }else{
        header('Location:../');
      }
   ?>
   <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->

    

    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>

     
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="" data-toggle="modal" data-target="#fechar">Sair</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
 
 
        <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><img src="style/img/ui-sam.jpg" class="img-circle" width="80"></p>
          <h5 class="centered"><?php  echo $_SESSION['email']; ?></h5>
          <li class="mt">
            <a class="active" href="./?menu=listar/dashboard/">
              <i class="fa fa-dashboard"></i>
              <span>Tela Principal</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Reservas</span>
              </a>
            <ul class="sub">
              <li><a href="./?menu=listar/reserva/">Reservas Efectudas</a></li>
              <li><a href="./?menu=listar/reservaProcessada/">Reservadas Processdas</a></li>
              <li><a href="./?menu=listar/reservaRejeitada/">Reservadas Rejeitas</a></li>
              <li><a href="./?menu=listar/reservaEliminada/">Reservadas Eliminadas</a></li>
              <li><a href="./?menu=listar/reservaFinalizada/">Reservas Finalizada</a></li>
            </ul> 
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-user"></i>
              <span>Clientes</span>
              </a>
            <ul class="sub">
              <li><a href="./?menu=listar/cliente/">Visualizar</a></li>
              <li><a href="./?menu=listar/clienteInativo/">Eliminados</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-users"></i>
              <span>Funcionários</span>
              </a>
            <ul class="sub">
            <li><a href="./?menu=listar/funcionario/">Visualizar</a></li>
              <li><a href="./?menu=listar/funcionarioInactivos/">Elimandos</a></li>
            </ul> 
          </li>
       
        
         
         
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->




    
       


    <?php include_once 'rotas.php';?>