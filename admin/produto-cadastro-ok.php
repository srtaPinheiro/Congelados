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

    $sql = "INSERT INTO produto(nome, preco, descricao,quantidade) VALUES('$nome', '$valor' ,'$desc', '$quant');";

    $retornoinsert = mysqli_query($conexao, $sql);
    if($retornoinsert){
        echo "TOP !";
    }else {
        echo "NÃO TOP !" ;
    }
?>