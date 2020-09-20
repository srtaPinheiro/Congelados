<?php


    $databasehost = 'localhost';
    $databasenome = 'congelados';
    $databaseusuario = 'root';
    $databasesenha = '';

    $conexao = mysqli_connect($databasehost, $databaseusuario, $databasesenha, $databasenome);

    $sql = "SELECT * FROM produto; ";
    $resultado = mysqli_query($conexao, $sql);
?>

<table border = 1 > 
    <tr>
        <th> ID </th>
        <th> Nome </th>
        <th> DESCRIÇÃO </th>
        <th> PREÇO </th>
        <th> QUANTIDADE </th>
        <th> AÇÕES </th>
    </tr>
    <?php
        while ($produto = mysqli_fetch_array($resultado)){
            echo "<tr>";
            echo "<td>".$produto['id']."</td>";
            echo "<td>".$produto['nome']."</td>";
            echo "<td>".$produto['descricao']."</td>" ;
            echo "<td>".$produto['preco']."</td>";
            echo "<td>".$produto['quantidade']."</td>" ;
            echo " ";
             echo "</tr>" ;
        }
    
    ?>

</table>
    