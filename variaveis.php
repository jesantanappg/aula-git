<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--

Variáveis e Constantes em PHP

No PHP, variáveis e constantes são elementos fundamentais para armazenar e gerenciar dados em seus programas. Compreendê-las é crucial para escrever código eficiente e organizado.


o que é variável? 
Uma variável é um contêiner nomeado que armazena um valor que pode ser alterado durante a execução do script. Imagine-a como uma caixa com um rótulo, onde você pode guardar e recuperar dados.

Para declarar uma variável em PHP, utilize o símbolo $ seguido do nome da variável. O nome deve seguir regras:

    - Começar com letra ou underline
    - Conter apenas letras, números e underlines
    - Ser diferente de palavras-chave do PHP

o que é uma constante? 
Uma constante, em contraste com uma variável, possui um valor fixo que não pode ser alterado durante a execução do script. É como uma caixa lacrada com um rótulo, onde o conteúdo é permanente.

Declaração de Constantes:

Para declarar uma constante em PHP, utilize a função define(). O nome da constante deve seguir as mesmas regras das variáveis, mas em maiúsculas por convenção.

Uma outra forma é const NOME DA CONSTANTE = "valor";

 -->

    <?php

    $nome = "Jefferson"; //string - cadeia de caracteres - sequências de letras, números e símbolos, sempre representadas entre aspas
    $sobrenome = "Santana"; // string
    $idade = 40; //int ou integer - um valor numérico inteiro, aquele que vem sem a parte decimal
    $peso = 99.9; //float / double / real - um valor numérico real, que vem com a parte decimal, depois do ponto flutuante
    $casado = true; //bool / boolean - um valor lógico, que aceita apenas os valores verdadeiro ou falso
    // 0x = hexadecimal 0b = binário 0 = Octal
    const PAIS = "Brasil";

    $_1 = "RJ"; //string
    $_2 = 3.145; //float
    $_3 = 17; //int
    $_4 = true; //bool
    $_5 = " "; //string
    $_6 = -19; //int
    $_7 = "false"; //string
    $_8 = 0x1a; //int
    $_9 = 3e2; //float
    $_10 = "1024"; //string

    //$v = ;
    //var_dump($v);

    /*
    Identificadores
    - Variável sempre começam com o símbolo $
    - O segundo item depois do $ pode ser letra ou o símbolo
    - Aceita caracteres [a-z], [A-Z], [0-9] e [_]
    - Aceita caracteres da tabela ASCII a partir de 128
    - A linguagem é case sensitive em relação aos nomes
    - Nomes especiais como $this não podem ser usados

    */

    echo "Muito prazer,  $nome $sobrenome!";

    date_default_timezone_set("America/Sao_Paulo"); //GMT-3
    echo "hoje é dia " . date("d/M/Y");
    echo " e a hora atual é " . date("G:i:s");
    phpinfo();

    echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS;
    ?>

</body>

</html>