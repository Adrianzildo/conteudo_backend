<h2>Matriz</h2>
<p>
    são estruturas de dados bidimencional,
    onde é necessário informar 2 índices para 
    realizar o acesso de um valor.
</p>
<p>
    Na prática consiste de um vetor que armazena 
    outros vetores.
</p>

<?php
    $produto1 = [
        "nome"  => "Câmera",
        "marca" => "LG",
        "preco" => 2500
    ];

    $produto2 = [
        "nome"  => "Notebook",
        "marca" => "Dell",
        "preco" => 7500
    ];

    $produto3 = [
        "nome"  => "Smartfhone",
        "marca" => "Samsung",
        "preco" => 3500
    ];

    $produtos = [
        $produto1, 
        $produto2, 
        $produto3
    ];

    //imprimir todos os valores da matriz, utilizando
    //duas estruturas de repetição, 1 para as linhas outra
    //para as colunas
    for($i= 0; $i<=2; $i++){
        foreach($produtos[$i] as $key => $value){
            echo $value. "<br>";
        }
    }

    echo "<table border=1>";
    //outra forma 
    foreach($produtos as $produto){
        echo "<tr>";
            echo "<td>" . $produto["nome"] . "</td>";
            echo "<td>" . $produto["marca"] . "</td>";
            echo "<td>" . $produto["preco"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";



?>