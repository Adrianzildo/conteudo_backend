<h2>Operadores relacionais</h2>
<hr>
<p>
    São operadores utilizados para verificar
    a relação (maior, menor, diferente) entre
    valores.
</p>
<strong>Operadores</strong>
<ol>
    <li>> | Maior</li>
    <li>> | Menor</li>
    <li>>> = Maior Igual</li>
    <li>>< = | Menor Igual</li>
    <li>== | Igual</li>
    <li>!= | diferente</li>
    <li>=== | Idêntico - compara valor e tipo</li>
    <li>!== | Não Idêntico - compara valor e tipo</li>
</ol>

<br><strong>Exemplos</strong></br>
<pre>
    &lt;?php
        $resposta = 10 == 10;
        var_dump($resposta);
    ?&gt;
</pre>

<?php
    $resposta = 10 == 10;
    var_dump($resposta);
?>
<pre>
    &lt;?php
        $resposta = 10 === "10";
        var_dump($resposta);
    ?&gt;
</pre>

<?php
    $resposta = 10 === "10";
    var_dump($resposta);
?>