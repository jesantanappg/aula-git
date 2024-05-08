<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For / While</title>
</head>

<body>

    <!--

As estruturas de repetição são elementos essenciais em qualquer linguagem de programação, permitindo a execução de um bloco de código de forma iterativa até que uma condição específica seja satisfeita. No PHP, as três estruturas de repetição mais comuns são: do while, while e for. Cada uma possui características e aplicações distintas, sendo crucial entender suas diferenças para escolher a ferramenta adequada para cada problema.

DO WHILE

A estrutura do while executa um bloco de instruções pelo menos uma vez, antes de verificar a condição de repetição. A sintaxe geral é a seguinte:
PHP

do {
  // Bloco de instruções a serem repetidos
} while (condição);

O do while executa o bloco de instruções pelo menos uma vez, mesmo que a condição seja falsa na primeira verificação. Já o while verifica a condição antes de executar o bloco de instruções, o que pode resultar na não execução do bloco caso a condição seja falsa inicialmente.


WHILE

A estrutura while repete um bloco de instruções enquanto uma condição específica permanecer verdadeira. A sintaxe geral do while em diversas linguagens é similar à seguinte:

while (condição) {
  // Bloco de instruções a serem repetidos
}


FOR

A estrutura for é utilizada para realizar um número determinado de repetições, com base em um contador que assume valores sucessivos dentro de um intervalo predefinido. A sintaxe geral do for em diversas linguagens é similar à seguinte:

for (inicialização; condição; atualização) {
  // Bloco de instruções a serem repetidos
}

-->

    <?php
    echo "DO WHILE";
    //Estrutuas de Repetição
    //Loop

    //3 regras básicas
    //Variável de Controle
    //Verificação
    $controle = 0;
    $o = 0;

    //DO WHILE

    echo "<br>";
    do {
        print($o); // Imprime os números de 0 a 9
        $o++;
    } while ($o < 10);

    echo "<br>";
    do {
        echo "valor de controle é: $controle <br>";
        $controle++;
    } while ($controle < 10);
    echo "<br>";

    //WHILE

    echo "WHILE";
    echo "<br>";
    $contador = 1;

    while ($contador <= 10) {
        print($contador); // Imprime os números de 1 a 10
        $contador++;
    }

    echo "<br> While () <br>";
    while ($controle <= 20) {
        echo "Valor de Controle é: $controle <br>";
        $controle++;
    }
    echo "<br>";

    //FOR
    echo "FOR";
    echo "<br>";

    for ($i = 0; $i < 10; $i++) {
        echo "Valor de i é: $i <br>";
    }

    ?>

</body>

</html>