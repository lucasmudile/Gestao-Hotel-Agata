
<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/Menu.php'; ?>

 

<?php include_once 'includes/footer.php'; ?>
  

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