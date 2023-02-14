<h2>Operadores de atribuição</h2>
<p> 
    São utilizados para armazenar
    "atribuir valores e uma variável".
</p>

<ol>
    <li>=  | atribuição simples </li>
    <li>+= | acumula o novo valor </li>
    <li>-= | subtrai o valor da variável</li>
    <li>++ | incrementa 1 ao valor da variável</li>
    <li>-- | subtrai 1 do valor da variável</li>
    <li>.= | Concatena o texto ao valor da variável</li>
</ol>

<br><strong>Exemplos</strong></br>
<?php
    $nota = 5;//atribui o número 5 na variável nota
    echo $nota ."<br>"; //imprime o número 10 (5 de antes + 5 de agora)

    $nota += 5;//soma + 5 na variável nota - $nota = $nota + 5
    echo $nota ."<br>";//imprime o número 10 (5 de antes + 5 de agora)

    $nota -= 2;//equivalente a $nota = $nota -2
    echo $nota ."<br>";//imprime o valor 8

    $nota++;//soma 1 ao valor da variável = $nota = $nota + 1
    echo $nota ."<br>";//imprime o valor 9

    $nota--;//subtrai 1 ao valor da variável = $nota = $nota - 1
    echo $nota ."<br>";//imprime o valor 8
    
    $nota = "Breno";
    $nota .= "Vieira";// concatena o valor anterior Breno, com 
                     //o novo valor Vieira e armazena na 
                    //variável nome;
    echo $nota ."<br>";//imprime Breno Vieira;
?>