<h2>Estrutura de decisão</h2>
<p>
    As estruturas de condição permitem executar
    blocos distintos de código dado uma condição.

    <strong>Exemplo</strong>
    <pre>
        if(condicao){
            //instrutuções executadas 
            //caso a condição seja verdadeira 
        }else{
            //instrutuções executadas, caso 
            //a condição seja falsa.
        }
<?php
    $media = 7;
    if($media >= 6){
        echo "O aluno foi aprovado";
    }else{
        echo "O alunos foi reprovado"; 
    }
?>
<p>
------------------------
10 <= media >= 6 |aprovado
6 < meida >= 3   |exame 
media < 3        |reprovado
</p>

<?php
    $media = 4;
    if($media >= 6){
        echo "O aluno foi aprovado";
    }else if($media >= 3){
            echo "O aluno foi de recuperacao";
        }else{
            echo "O alunos foi reprovado"; 
    }
?>
----
<p>
    O PHP faz a conversão de alguns tipos 
    para verdadeiro ou falso.
    
    <strong>True</strong>
    <ul>
        <li>String com texto</li>
        <li>Número maior que 0</li>
        <li>Vetor com elementos</li>
    </ul>
    <strong>False</strong>
    <ul>
        <li>String vazia</li>
        <li>Número igual a 0</li>
        <li>Vetor vazio</li>
    </ul>
</p>
<?php 
    if ("o loco") {
        echo "Verdadeiro";
    }else{
        echo "Falso";
    }
?>

<?php
    $media = 4;
    if($media >= 6 && "Quero passar de ano"){
        echo "Huhuhu, sou esperto";
    }else{
        echo "Ihh, me dei mal";
    }
?>