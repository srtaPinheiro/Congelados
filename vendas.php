<?php


    $databasehost = 'localhost';
    $databasenome = 'congelados';
    $databaseusuario = 'root';
    $databasesenha = '';

    $conexao = mysqli_connect($databasehost, $databaseusuario, $databasesenha, $databasenome);

    $sql = "SELECT * FROM produto; ";
    $resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/style_precos.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<!-- Container Preços -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>PREÇOS</h2>
    <h4>Escolha o tipo de book que mais se encaixa com você !</h4>
  </div>
  <div class="row slideanim">
     <?php
         while ($produto = mysqli_fetch_array($resultado)){
             
    ?>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1><?php echo $produto['nome'] ?></h1>
        </div>
        <div class="panel-body">
         <?php 
        echo $produto['descricao'] ?> 
       
        
        </div>
        <div class="panel-footer">
          <h3>R$<?php echo $produto['preco']?></h3>
          <h4>5X sem juros</h4>
          <button class="btn btn-lg"> <a href="index.php#contact"> VER DETALHES </a></button>
        </div>
      </div>      
    </div>     
      
    <?php } ?>
   
  </div>
</div>


<!-- RODAPÉ -->
    <div class="rodape">
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Subir</p>
</footer></div>
<!-- FIM RODAPÉ -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
