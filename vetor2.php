<h2>Vetor indexado por texto</h2>
<p>
    Os vetores podem usar textos para 
    indexar (identificar) os valores armazenados.
    exemplo: 
    <pre>
            +-------------+
    nome    |Breno        |
            +-------------+
    nota1   |9            |
            +-------------+
    nota2   |7            |
            +-------------+
    </pre>
</p>

<?php
    $alunos = [
        "nome"   => "Breno",
        "nota1"  => 9,
        "nota2"  => 7,
    ];

    $alunos ["notaTotal"] = ($alunos["nota1"] + $alunos ["nota2"]);
    var_dump($alunos);

    echo "<p>&nbsp;</p><pre>";
    //imprimir todos os valores de um vetor
    //utilizando o foreach
    foreach($alunos as $key => $value){
        printf("%23s\n", "+------------+\n");
        printf("%9s | %9s | \n", $key, $value);
    }
?>
</pre>