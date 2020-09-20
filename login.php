<html>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/login.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <style>
body  {
    background-image: url("images/cibelecelular.jpg");
    background-size: 100%;

    background-color: #cccccc;
}

</style>

<body>
<div class="container">
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
        <li><a href="index.php/#home">HOME</a></li>
        <li><a href="index.php">CONSTRUÇÃO</a></li>
        <li><a href="index.php/">FOTOS</a></li>
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
	<div class="row">
<div class="pen-title">
  <h1>Congele conosco!</h1>
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form>
      <div class="input-container">
        <input type="text" id="email" required="required"/>
        <label for="email">E-mail:</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="senha" required="required"/>
        <label for="senha">Senha</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Congele</span></button>
      </div>
      <div class="footer"><a href="#">Esqueceu sua senha?</a></div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"> </div>
    <h1 class="title">Registrar
      <div class="close"></div>
    </h1>
    <form>
      <div class="input-container">
        <input type="text" id="nome" required="required"/>
        <label for="nome">E-mail:</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="senha" required="required"/>
        <label for="senha">Senha</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="senha repetida" required="required"/>
        <label for="Repeat Password">Repita a senha:</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Próximo</span></button>
      </div>
    </form>
  </div>
</div>

</div>

<script>
$(document).ready(function(){
$('.toggle').on('click', function() {
  $('.container').stop().addClass('active');
});

$('.close').on('click', function() {
  $('.container').stop().removeClass('active');
});

});


</script>
</body>    
    
</html>