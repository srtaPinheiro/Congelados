<?php
$nome = $_POST['nome'];
    $quant = $_POST['quant'];
    $desc = $_POST['desc'];
    $valor = $_POST['val'];

    $databasehost = 'localhost';
    $databasenome = 'congelados';
    $databaseusuario = 'root';
    $databasesenha = '';

    $conexao = mysqli_connect($databasehost, $databaseusuario, $databasesenha, $databasenome);
    
    $sql="SELECT *, PROD.nome as produto_nome FROM pedido AS P 
        INNER JOIN pedido_item as PI on P.id = PI.id_pedido
        INNER JOIN produto as PROD on PI on P.id_produto = PROD.id
        INNER JOIN usuarrio AS U on U.id = P.id_usuario
            Where U.id={$_SESSION['loginCliente'] ['id']}";
$resultado = mysqli_query($conexao,sql);
mysqli_close($conexao);
?>
<!DOCTYPE html>
<html>
<header>
    <meta charset="utf-8">
    <title> Carrinho de compras</title>
    <link rel="stylesheer" type="text/css" href="css/style.css">    
</header>
<body>
    <div class="container">
        <div id="cabecalho">
            <!-- Div para a primeira linha do cabeçalho-->
            <div id="cabecalhoL1">
                <div id="menu">&#9776;</div> <!-- faz o icone de 3 risquinhos -->
                <div id="logo"><a href="index.php"><img src="img/logo.png"></a></div>
                <?php
                if(isset($_SESSION['loginCliente']) && $_SESSION['loginCliente']){
                  echo '<div id="usuario"> <a href="login.php"><img src="img/user.png"></a></div>';  
                }
                ?>
            
            </div>
            
        </div>
    </div>
    
    
</body>








</html>