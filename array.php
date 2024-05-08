<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Array</title>
</head>

<body>

    <!--

Arrays em PHP

Arrays são estruturas de dados fundamentais em diversas linguagens de programação, incluindo o PHP. Eles permitem armazenar e organizar coleções de valores de forma eficiente, facilitando a manipulação e o acesso aos dados. No PHP, os arrays são versáteis e oferecem diversos recursos para gerenciar informações de maneira eficaz.

Um array no PHP é uma coleção ordenada de valores, podendo conter elementos de diversos tipos, como números, strings, objetos e até mesmo outros arrays.

Podemos declarar as Arrays de duas maneiras:

    Usando a função array(): A função array() permite criar um array vazio ou inicializá-lo com valores específicos.
    Usando colchetes: A sintaxe com colchetes é mais concisa e frequentemente utilizada para declarar arrays com valores iniciais.

-->

    <?php

    // Usando array()
    $meuArray = array(1, 5, 9, "Olá", "Mundo");

    // Usando colchetes
    $outroArray = [2, 4, 6, "PHP", "Developer"];

    echo "<pre>";
    print_r($outroArray);
    echo "</pre>";

    echo "<br>";

    echo "<pre>";
    print_r($meuArray);
    echo "</pre>";


    ?>

</body>

</html>