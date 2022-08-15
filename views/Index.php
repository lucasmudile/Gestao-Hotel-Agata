
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="Main/style/img/favicon.png" rel="icon">
  <link href="Main/style/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="Main/style/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="Main/style/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="Main/style/css/style.css" rel="stylesheet">
  <link href="Main/style/css/style-responsive.css" rel="stylesheet">
  
  <style>
.mensagem{
   background: #57e057;
   color:#fff;
   margin:0px 15px 20px 15px;
   font-weight:500;
}

    </style>
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="index.html">
        <h2 class="form-login-heading">Tela de Login</h2>
        <div class="login-wrap">
          <input type="text" id="email" class="form-control" placeholder="Email ou Nº de telefone" autofocus>
          <br>
          <input type="password" id="senha" class="form-control" placeholder="Password">
          <label class="checkbox">
            
            <span class="pull-right">
            <a data-toggle="modal" href="#myModal"> Esqueceu Password?</a>
            </span>
            </label>
          <button class="btn btn-theme btn-block" id="login" type="submit"><i class="fa fa-lock"></i> LOGIN</button>
          <hr>
          <div class="text-center mensagem1" style="display:none;" ><p class="mensagem" >Cadastro</p></div>
          <div class="registration">
            Preenche correctamente os dados para ter acesso ao sistema<br/>
          </div>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Esqueceu Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Coloca o teu endereço de e-mail  abaixo para recuperar a tua password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Salvar</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="style/lib/jquery/jquery.min.js"></script>
  <script src="style/lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="style/lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("style/img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>



<script src="Main/style/lib/jquery/jquery.js"></script>
<script>
/*Login via ajax */
      $('#login').click(function(e){
        e.preventDefault();
 
        
        var email=$('#email').val();
        var senha=$('#senha').val();
        
        $.ajax({
          type:'POST',
          url:'login.php',
          data:{email:email,senha:senha},
         
           success:function(response){
          if (response=="success") {
            $('.mensagem1').show();
            $('.mensagem').html("Processando...");
            $('html body').animate({scrollTop:0},500);
            $('.mensagem').fadeOut(2000);

            setTimeout(function(){
              location.href="Main/";
            },2000);

          }else if(response=="fail"){
            $('.mensagem1').show();
            $('.mensagem').html("Email ou password errado!");
          }else{
            $('.mensagem').show();
            $('.mensagem').html("Preecnhe os campos");
          }
        }
        });
  
      
      });

      </script>