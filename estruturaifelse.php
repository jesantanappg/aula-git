<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If / Else</title>
</head>

<body>

    <?php

    // Estrutura de Decisão ou Controle de Fluxo: No PHP, as instruções if e else são estruturas de controle de fluxo que permitem executar diferentes seções de código com base em uma condição booleana.

    // if = A instrução if verifica uma condição e executa um bloco de código se a condição for verdadeira.

    // else = A instrução else é opcional e é usada para especificar um bloco de código a ser executado se a condição da instrução if for falsa.

    $numero = 41;
    $texto = "41";


    //comparação de mesmo valor
    if ($numero == $texto) {
        echo "A variável \$numero: $numero é igual a variável \$texto: $numero";
    } else {
        echo "Não são iguais";
    }

    // Comparação valor igual e do mesmo tipo
    echo "<br>";
    if ($numero === $texto) {
        echo "são iguais e do mesmo tipo";
    } else {
        echo "são diferentes no valor ou diferentes no tipo";
    }

    // Se o resto da divisão por 2 é igual a zero
    echo "<br>";
    if ($numero % 2 == 0) {
        echo "Número par";
    } else {
        echo "Número impar";
    }

    // encadeamento
    echo "<br>";
    if (10 > 12) {
        echo "Número é maior";
    } else if (10 == 12) {
        echo "Número Igual";
    } else {
        echo "10 não é maior que 12";
    }



    ?>

</body>

</html>