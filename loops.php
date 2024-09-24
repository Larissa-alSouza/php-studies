<?php 

// for, while, foreach

// for: usado quando sabemos previamente o número de iterações

// possui três partes: inicialização ($i = 0), condição ($i < 10), incremento ($i++)

for ($i = 0; $i < 10; $i++) {
    echo $i . " ";  // Saída: 0 1 2 3 4 5 6 7 8 9
}

// while: repete o código enquanto uma condição for verdadeira

// a condição é verificada antes de cada iteração

$i = 0;

while ($i < 5) {
    echo $i . " ";  // Saída: 0 1 2 3 4
    $i++;
}

// foreach: usado para percorrer arrays. Para cada elemento do array, o valor é atribuído a uma variável temporária

$nomes = ["João", "Maria", "Pedro"];

foreach ($nomes as $nome) {
    echo $nome . " ";  // Saída: João Maria Pedro
}

?>
