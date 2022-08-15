<html>
  <?php
    session_start();

    //Incluir o cliente
    include_once('model/cliente.php');
    include_once('controller/crud-cliente.php');

    //Incluir o Testemunho
    include_once('model/testemunho.php');
    include_once('controller/crud-testemunho.php');
  ?>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

  <title>Hotel Hágata</title>
  <link rel="stylesheet" href="style/css/bootstrap.css">
<link rel="stylesheet" href="style/css/bootstrap.min.css">
<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/footers/">
<style>

    .sombra{
        box-shadow: 10px 5px 5px black;
    }
  
    .menu li:hover{
        background:lightgrey;
        color:white;
    }

 
    .msgajax{
       background: #57e057;
       color:#fff;
       margin:0px 15px 20px 15px;
       font-weight:500;
    }
    .msgajax2{
       background: red;
       color:#fff;
       margin:0px 15px 20px 15px;
       font-weight:500;
    }
</style>
</head>

<body>


<!-- Menu Principal do Site -->
<nav class="navbar navbar-expand-lg navbar-light  sombra" id="home" aria-label="Eighth navbar example ">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#hotel">HOTEL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#quarto">QUARTOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#servico">SERVIÇOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" id="" data-toggle="modal" data-target=".bd-example-modal-lg">RESERVA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#testemunho">TESTEMUNHOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#contacto">CONTACTOS</a>
          </li>
          
        </ul>
        <form class="d-flex">
        
          <?php 
          
          if(isset($_SESSION['cliente'])){
            echo '<ul class="navbar-nav me-auto mb-2 mb-lg-0 menu">
            <li class="nav-item">
              <a class="nav-link active text-danger" aria-current="page" href="#home">'.$_SESSION['cliente'].'</a>
            </li></ul>';
           
            echo ' <p style="color:white";>__</p><button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#sair">
            Sair
          </button>';

             }else{
               echo '
               <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
               Entrar
             </button>
               <p style="color:white";>__</p>
             <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#cliente">
               Criar Conta
             </button>
               
               ';
             }
             
             
             
             ?>
     
        </form>
        
      </div>
    </div>
  </nav>
  <!--Fim do Menu Principal do Site -->


  

  <!-- Show de slide ou carrossol de imagem-->
  <main>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
       
        <img class="d-block " width="100%" height="88%" src="img/central.jpg" alt="First slide">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Bem-vindo ao Hotel Seven</h1>
            <p>Hotel com qualidade única.</p>
            
          </div>
        </div>
      </div>



 <br>
  <br>
  <br>
  <br>
  <br> <br>
  <br>
  <br>
  <br>
 <br>
  <br>
  <br>
  <br>
  <br> <br>
  <br>
  <br>
  <br>
 <br>
  <br>
  <br>
  <br>
  <br>
 
  <br>
  <br>
  <br>
  <br>
 <br>
  <br>
  <br>
  <br>
  <br>
  <h1 class="text-center" id="hotel">HOTEL</h1>
  <br>
  <br>
  <br>
  <div class="container marketing">

<!-- Three columns of text below the carousel -->
<div class="row" >
  <div class="col-lg-4">
   
    <h5 class="text-center text-danger">O HOTEL SEVEN</h5>
    <p class="text-center">Hotel confortável, moderno, elegante e irreverente, que permite aos seus clientes e hóspedes apreciar a diversificada arte africana e em perfeita harmonia com a decoração arrojada, onde o design do mobiliário faz a</p>
    <p class="text-center"><a class="btn btn-danger" href="#">Ver mais &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
   

    <h5 class="text-center text-danger">QUARTOS E APARTAMENTOS</h5>
    <p class="text-center">O hotel dispõe de 59 quartos modernos e confortáveis, 5 Deluxe Suites com sala e quarto separados e apoiadas com mini frigorífico, micro-ondas e máquina de café. A nossa Penthouse de 80 m2, é um espaço singular, com</p>
    <p class="text-center"><a class="btn btn-danger" href="#">Ver mais &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    
    <h5 class="text-center text-danger">REUNIÕES E EVENTOS</h5>
    <p class="text-center">Centro de Negócios com 3 salas para reuniões, formação e cerimónias de casamento. Solicite o nosso kit de banquetes.</p>
    <p class="text-center"><a class="btn btn-danger" href="#">Ver mais &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->

</div><!-- /.container -->


  <div id="quarto">
  <br>
  <br>
  <h1 class="text-center">QUARTOS</h1>
<br>
  <br>
<div class="container">
  <!-- Gallery -->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="img/Quartos/p7.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
      src="img/Quartos/p1.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
   <img
      src="img/Quartos/p8.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
      src="img/Quartos/p9.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="img/Quartos/p4.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />

    <img
      src="img/Quartos/p6.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
  </div>
</div>
</div>
<!-- Gallery -->
</div>


  <br>
  <br>
  <br>
  <h1 class="text-center" id="servico">SERVIÇOS</h1>
  <br>
  <br>
  <br>
  <div class="container marketing">
  <div class="row">

  <div class="col-lg-4">
   
    <h5 class="text-center text-danger">RESTAURANTE MULEMBA</h5>
    <p class="text-center">O Restaurante Mulemba, no lobby do hotel, de ambiente sofisticado, apresenta uma gastronomia de origem mediterrânica e uma vertente de sabores do mar.</p>
    <p class="text-center"><a class="btn btn-danger" href="#">Ver mais &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">

    <h5 class="text-center text-danger">PISCINA</h5>
    <p class="text-center">Piscina infinitive edge, localizada no último piso do hotel. Vai poder apreciar a cidade e o mar, a ilha do Mussulo e, deslumbrar-se com a mais “bela magia de.</p>
    <p class="text-center"><a class="btn btn-danger" href="#">Ver mais &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    
    <h5 class="text-center text-danger">GINÁSIO</h5>
    <p class="text-center">Ginásio panorâmico, para se exercitar, manter saudável e em forma praticando exercícios de cárdio fitness ou musculação. Disponibilizamos balneários e serviço de.</p>
    <p class="text-center"><a class="btn btn-danger" href="#">Ver mais &raquo;</a></p>
  </div><!-- /.col-lg-4 -->

</div><!-- /.row -->
</div>


<br>
  <br>
  <br>
  <h1 class="text-center" id="testemunho">Testemunhos</h1>
  <p class="text-center">Saiba o que dizem sobre nós</p>
  
  
          
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
  

    <?php
$select = new CrudTestemunho();

    $dados=$select->read();
      $i=1;

      if(!empty($dados)){
    foreach ($dados as $key => $value) {
      if($i==1){
        echo '
        <div class="carousel-item active">
        <p class="text-center">'.$value->getTestemunho().'</p>
        <p class="text-center"><strong>'.$value->getIdCliente().'</strong>, Cliente</p>
</div>';
      }else{
        echo '
        <div class="carousel-item">
        <p class="text-center">'.$value->getTestemunho().'</p>
        <p class="text-center"><strong>'.$value->getIdCliente().'</strong> Cliente</p>
</div>';
      }
      $i++; 
   }
  }else{
          echo '<p class="text-center"><strong>Sem testemunho registrado</strong></p>';
  }
?>
  </div>
 
</div>
             






<!-- Footer -->

<br>
<br>


<div class="container">
  <footer class="py-5 ">
    <div class="row">
      <div class="col-2">
        <h5>Menu</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#home" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#hotel" class="nav-link p-0 text-muted">Hotel</a></li>
          <li class="nav-item mb-2"><a href="#quarto" class="nav-link p-0 text-muted">Quartos</a></li>
          <li class="nav-item mb-2"><a href="#servico" class="nav-link p-0 text-muted">Serviços</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted" data-toggle="modal" data-target=".bd-example-modal-lg">Reserva</a></li>
          <li class="nav-item mb-2"><a href="#testemunho" class="nav-link p-0 text-muted">Testemunhos</a></li>
          <li class="nav-item mb-2"><a href="#contacto" class="nav-link p-0 text-muted">Contactos</a></li>
        </ul>
      </div>

      <div class="col-2">
        <h5>Redes sociais</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Facebook</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Instagram</a></li>
   
        </ul>
      </div>

      <div class="col-2">
      </div>
<?php
      if(isset($_SESSION['cliente'])){
    echo'
      <div class="col-4 offset-1">
        <form>
          <h5>Deixe o seu testemunho</h5>
          
          <div class="d-flex w-100 gap-2">
            <textarea name="" id="testemunhoSalvar" cols="50" rows="10" style="border-radius: 25px;"></textarea>
          </div>
          <br>
          <div class="text-center msg2" style="display:none;"><p class="msgajax"></p></div>
          <button class="btn btn-outline-danger" id="SalvarTestemunho" type="submit">Salvar</button>
        </form>
      </div>';
      }
?>
    </div>
    <br>
    <br>
  </footer>
</div>


<div class="b-example-divider"></div>

<div class="bg-dark text-secondary px-4 py-5 text-center" id="contacto">
  <div class="py-5">
  <h1 class="display-6 fw-bold text-white">Contactos</h1>
    <div class="col-lg-6 mx-auto">
      <p class="text-center">Rua da Gamek s/n, Município da Samba</p>
    <p class="text-center">Província de Luanda, Angola</p>
    <p class="text-center">+244 938 992 431 I +244 949 021 000</p>
    <a href="" class="text-white nav-link active text-center">recepcao@seven.co.ao</a>
    <a href="" class="text-white nav-link active text-center">reservas@seven.co.ao</a>
    
    <a href="" class="text-white nav-link active text-center">geral@seven.co.ao</a>
   <a href="" class="text-white nav-link active text-center">www.seven.co.ao</a>

    <div class="my-4 border-top"></div>
      <p class="text-center">Todos os direitos reservados ao Hotel &copy; 2022.</p>
    </div>
  </div>
</div>

<div class="b-example-divider mb-0"></div>
  
  <!-- Modal de Login -->
  <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Entrar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <br>
        <div class="modal-body p-5 pt-0">

        <form class="" method="POST">
          <div class="form-floating mb-3">
            <input type="email"  name="email2" id="email2"class="form-control rounded-4" id="floatingInput" placeholder="Email">
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="senha2" class="form-control rounded-4" id="senha2" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <!--Mensagem do Logado com sucesso-->
          <div class="text-center msg1" style="display:none;"><p class="msgajax"></p></div>
          <button class="w-100 mb-2 btn btn-lg rounded-4 btn-outline-danger" name="logar1" id="logar1" type="submit">Entrar</button>
          

        </form>
      </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
<!-- Button trigger modal -->


<!-- Modal do cliente-->
<div class="modal fade" id="cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cliente">Criar Conta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="" >

      <!-- Mensagem que deve ser mostrada ao incluir dados no banco -->
        <div class="text-center msg" style="display:none;" ><p class="msgajax">Cadastro</p></div>
      <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4 nome" name="nome" id="nome" placeholder="Nome Completo">
            <label for="floatingPassword">Nome Completo</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control rounded-4" name="email1" id="email" placeholder="Email">
            <label for="floatingInput">Email</label>
          </div>

          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" id="telefone" name="telefone" placeholder="Telefone">
            <label for="floatingPassword">Telefone</label>
          </div>


          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-4" id="senha" name="senha" placeholder="Password">
            <label for="floatingPassword">Palavra passe</label>
          </div>

          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-4" id="senha3" name="senha3" placeholder="Password">
            <label for="floatingPassword">Palavra passe Novamente</label>
          </div>

          <button class="w-100 mb-2 btn btn-lg rounded-4 btn-danger" type="submit" id="salvar"  name="cadCliente">Cadastrar</button>
          
        </form>
      </div>
      <div class="modal-footer">     
        
      </div>
    </div>
  </div>
</div>

  <!-- Modal de Sair -->
  <div class="modal fade" id="sair" tabindex="-1" role="dialog" aria-labelledby="sair" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="sair">Terminar Sessão</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <br>
        <div class="modal-body pt-0">
        <form class="" method="POST" action="logAut.php">
          <p>Deseja sair da sua conta?</p>
          
          <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary">Sim</button>
         </div>

        </form>
      </div>
      </div>
    </div>
  </div>
  <!-- Modal -->


<!-- modal de reserva -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content bg-light rounded p-4 box-shadow">
    <div class="modal-header">
        <h5 class="modal-title text-center" id="sair"><?php if(isset($_SESSION['cliente'])){ echo'Formulário de Reservas';}?></h5>
        <div class="msg1"> <p class="msgajax"></p></div>
        
        <button type="button" class="btn-danger close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <?php

if(isset($_SESSION['cliente'])){
  echo '
  <div class="row">
  <div class="col-lg-4 ">
      <div class="form-group">
        <label for="clienteNome">Nome</label>
        <input type="hidden" class="form-control" id="clienteId_" value="'.$_SESSION['idcliente'].'" >
        <input type="text" class="form-control" id="clienteNome" value="'.$_SESSION["nome"].'" readonly>
      </div>

      <div class="form-group">
      <label for="clienteNome">Data-Chegada</label>
      <input type="date" class="form-control" id="data_chegada_">
      </div>
    
      <div class="form-group">
        <label for="clienteMensagem">Nº de Crianças</label>
        <input type="number" class="form-control" id="n_criancas_">
      </div>
  </div>

  <div class="col-lg-4">

  <div class="form-group">
    <label for="clienteNome">Email</label>
    <input type="email" class="form-control" id="clienteNome" value="'.$_SESSION["cliente"].'" readonly>
  </div>

  <div class="form-group">
    <label for="clienteNome">Data-Saida</label>
    <input type="date" class="form-control" id="data_saida_">
  </div>

  <div class="form-group">
  <label for="exampleFormControlSelect1">Quarto</label>
  <select class="form-control" id="quarto_id_">
      <option value="1">Quarto para 1 pessoas</option>
      <option value="2">Quarto para 2 pessoas</option>
      <option value="3">Quarto para 3 pessoas</option>
      <option value="4">Quarto para + de 3 pessoas</option>
    </select>
</div>


</div>
<div class="col-lg-4">

  <div class="form-group">
    <label for="clienteNome">Telefone</label>
    <input type="text" class="form-control" id="clienteNome" value="'.$_SESSION["telefone"].'" readonly>
  </div>

  <div class="form-group">
    <label for="clienteNome">Nº Adultos</label>
    <input type="number" class="form-control" id="n_adultos_">
  </div>


  <div class="form-group">
    <label for="clienteMensagem">Resuma o que deseja</label>
    <textarea id="clienteMensagem" class="form-control" rows="4"></textarea>
  </div>

</div>


  </div>
  <br> 

  <div class="modal-footer">
      <button type="submit" class="btn btn-outline-danger" id="reserva">Reservar</button>
   </div>';


}else{
  echo '  <h5 class="text-center text-danger">Efectua o Login para fazer reservas!</h5>';
}
     ?>
    </div>
  </div>
</div>

<!-- Small modal -->
</main>

    <script type="text/javascript" src="style/js/bootstrap.esm.js"></script>
    <script type="text/javascript" src="style/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="style/js/bootstrap.js"></script>

    <script type="text/javascript" src="style/js2/jquery.js"></script>
    <script type="text/javascript" src="style/js2/popper.js"></script>
    <script type="text/javascript" src="style/js2/bootstrap.js"></script>

     <!-- Javacript -->
    <script type="text/javascript">

      //Enviar os dados na bd via Ajax
      $('#salvar').click(function(e){
        e.preventDefault();
      
        var nome=$('#nome').val();
        var email=$('#email').val();
        var telefone=$('#telefone').val();
        var senha=$('#senha').val();
        var senha2=$('#senha3').val();

        if(nome==""||email==""||telefone==""||senha==""|senha2==""){
          alert("Verifca se todos campos estão preenchidos");
          return ;
        }
        
        if(senha!=senha2){
          alert("As palavras passe são diferentes.");
          return ;
        }

        $.ajax({
          url:'cliente/insert.php',
          method:'POST',
          data:{nome:nome,email:email,telefone:telefone,senha:senha},
          datatype:'html'
        }).done(function(result){
         
          if (result==1) {
            $('.msg').show();
            $('.msgajax').html("Dados Inseridos com sucesso!");
            $('html body').animate({scrollTop:0},500);
            $('.msg').fadeOut(5000);

            $('#nome').val("");
            $('#email').val("");
            $('#telefone').val("");
            $('#senha').val("");
            $('#senha3').val("");

          }
          else{
            alert('erro ao cadastrar');
          }
        });
    
      });


      //Salvar Testemunho
      $('#SalvarTestemunho').click(function(e){
        e.preventDefault();

        var testemunho=$('#testemunhoSalvar').val();

        if(testemunho==""){
          alert("Preecha o campo testemunho");
          return ;
        }

        $.ajax({
          url:'cliente/insert.php',
          method:'POST',
          data:{testemunho:testemunho},
          datatype:'html'
        }).done(function(result){
         
          if (result==1) {
            $('.msg2').show();
            $('.msgajax').html("Testemunho salvo com sucesso!");
            $('.msg2').fadeOut(3000);
            $('#testemunhoSalvar').val("");

            setTimeout(function(){
              location.href="index.php";
            },3000);
          }
          else{
            alert('Este testemunho não foi salvo');
          }
        });
    
      });




      /*$('form').on('submit',function(e){
        e.preventDefault();

       

      });*/




      /*Login via ajax */
      $('#logar1').click(function(e){
        e.preventDefault();
        
        var email=$('#email2').val();
        var senha=$('#senha2').val();
        
        $.ajax({
          type:'POST',
          url:'cliente/login.php',
          data:{email:email,senha:senha},
         
           success:function(response){
          if (response=="success") {
            $('.msg1').show();
            $('.msgajax').html("Processando...");
            $('html body').animate({scrollTop:0},500);
            $('.msg1').fadeOut(3000);

            setTimeout(function(){
              location.href="index.php";
            },3000);

          }else if(response=="fail"){
            $('.msg1').show();
            $('.msgajax').html("Verifica se os dados estão correctos!");
          }
        }
        });
  
      
      });

      
      $('#reserva').click(function(e){
        e.preventDefault();

        var idCliente=$('#clienteId_').val();
        var dataChegada=$('#data_chegada_').val();
        var dataPartida=$('#data_saida_').val();
        var n_criancas=$('#n_criancas_').val();
        var n_adultos=$('#n_adultos_').val();
        var clienteMensagem=$('#clienteMensagem').val();
        var idQuarto=$('#quarto_id_').val();

        $.ajax({
          url:'cliente/reserva.php',
          method:'POST',
          data:{idCliente:idCliente,dataChegada:dataChegada,dataPartida:dataPartida,n_criancas:n_criancas,n_adultos:n_adultos,clienteMensagem:clienteMensagem,idQuarto:idQuarto},
          datatype:'html'
        }).done(function(result){
            if (result==1) {
            $('.msg1').show();
            $('.msgajax').html("Reserva efectuada com sucessoo!");
            $('.msg1').fadeOut(6000);
            //$('#testemunhoSalvar').val("");

              //alert("Reserva efectuada com sucesso")
            setTimeout(function(){
              location.href="index.php";
            },6000);
          }
          else{
            alert('Este reserva não foi salvo');
          }

        });

        
      });


    </script>




</body>
</html>