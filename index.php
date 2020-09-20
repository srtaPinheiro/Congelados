<!DOCTYPE html>
<html lang="br">
<head>
  <title>Congelando Momentos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">



<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#band">CONSTRUÇÃO</a></li>
        <li><a href="#tour">FOTOS</a></li>
        <li><a href="login.php">ENTRAR</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MAIS
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="vendas.php">Produtos</a></li>
              <li><a href="admin/produto-cadastro.php" data-toggle="modal" data-target="#myModal">Adimim</a></li>
          <li><a href="admin/produto-cadastro.php">Adimim</a></li> 
            <li><a href="#">Media</a></li> 
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

    



<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
     <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/fotos/cib.jpg" alt="" width="1200" height="700">
        <div class="carousel-caption">
            <h3>Cibele Bohn</h3>
        </div>      
      </div>

      <div class="item">
       <img src="images/fotos/cibe.jpg" alt="" width="1200" height="700">
        <div class="carousel-caption">
            <h3>Cibele Bohn</h3>
        </div>      
      </div>
    
          <div class="item">
        <img src="images/fotos/Nat2.jpg" alt="" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Nath</h3>
         </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div> 

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>CONGELANDO MOMENTOS</h3>
  <p><em> Amantes por fotografia!</em></p>
  <p> Tudo começou quando criamos um instagram de fotografia para
      expor nossa arte, singela porém muito bonita. A escolha do
      nome foi fácil, algo que simbolizava muito a fotografia e o
      amor que temos por ela, acreditamos que nada descreveria melhor isso se não o nome "Congelando Momentos" pois fotografia nada mais é do que isso, lindos momentos congelados, sejam eles tristes ou felizes sempre serão momentos vividos que alguém congelou em uma fotografia.
      Após algum tempo foram surgindo elogios e percebemos que sim, alguém adimirava o que fazíamos o que nos deixou extremamente contentes e motivados para fazer mais, criamos assim esse lindo site para compartilhar com você caro usuário, um pouco de nossa paixão. A fotografia .</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Cibele</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="images/cibelecerto.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Academica de Música</p>
        <p>Ama a natureza e os animais</p>
        <p>18 anos - Libriana</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Júlia</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="images/julia.png" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>PhD em Motion Graphics</p>
        <p>Ama desenhar e vive a vida intensamente</p>
        <p>19 anos - Taurina</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Nati</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="images/nati.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Academica em Ciencias da Computação</p>
        <p>Ama seus 7 gatos e adora ir para a baladinha</p>
        <p>19 anos - Leonina</p>
          <!-- OBSERVAÇÃO :
            PENSEI EM FAZERMOS ALGO QUE QUANDO CLIQUE NO ROSTINHO DAS PESSOAS ACIMA, VÁ PARA AS FOTOS DELAS E APAREÇA A MENSAGEM EM BAIXO-->
      </div>
    </div>
  </div>
</div>

<!-- Container (FOTOS)-->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">Um pouquinho do meu trabalho</h3> <!--TEM QUE COLOCAR ISSO PARA CIMA, NÃO CONSEGUI FAZER SORRY :) -->
      
       <div id="fotos">
       		
                    <img src="images/Cib1.jpg"  class="responsive" > 
                    
                    <img src="images/Cib2.jpg"  class="responsive">
                    
                    <img src="images/Cib3.jpg" class="responsive">
                    <img src="images/cibelecerto.jpg" class="responsive">
                   
                    <img src="images/cibele2.jpg" class="responsive">
                   
                    <img src="images/cibele.jpg" class="responsive">
                   
                    <img src="images/cibele3.jpg" class="responsive">
                 
                    <img src="images/cibelecelular.jpg" class="responsive">
             
       </div>
    </div>
  </div> 
        <!-- Add Google Maps -->
        <div id="map" style="height:400px;width:100%;"></div>
    <script>
        function initMap() {  
            var uluru = {lat: -29.6382407, lng: -52.1694201};
          
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 15, center: uluru});

            var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3yRB7-VikZIUah07QxCvapO9eF-uYEaw&callback=initMap">
    </script>
 
    <footer class="container-fluid text-center">
            <a href="#myPage" title="To Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
        </footer>
<script>
    
    
    
    
    
    
    
    
    
    
    
    
    
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
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
})
</script>






</body>
    


</html>
