<?php

//  bloco de código que pode ser reutilizado

// podem receber parâmetros (informações de entrada) e retornar um valor usando a palavra-chave return

// sintaxe básica de uma função:
function nomeDaFuncao($parametro1, $parametro2) {
    // Bloco de código
    return $resultado;
}

// exemplo:
function soma($a, $b) {
    return $a + $b;
}

echo soma(5, 10); // Saída: 15

// array é uma variável especial que pode armazenar múltiplos valores em uma única variável

// sintaxe básica de um array:
$array = array(1, 2, 3); // ou
$array = [1, 2, 3];

// exemplo de array indexado:
$numeros = [1, 2, 3, 4];
echo $numeros[0]; // Saída: 1

// exemplo de array associativo:
$pessoa = [
    "nome" => "João",
    "idade" => 25,
    "cidade" => "São Paulo"
];
echo $pessoa["nome"]; // Saída: João

// exemplo de array multidimensional:
$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
echo $matriz[1][2]; // Saída: 6

// funções com Arrays:

// count($array): Retorna o número de elementos no array

// array_merge($array1, $array2): Combina dois ou mais arrays

// in_array($valor, $array): Verifica se um valor existe no array

// array_keys($array): Retorna todas as chaves de um array associativo

// exemplo:
function somaArray($numeros) {
    return array_sum($numeros); // Soma todos os valores do array
}

$numeros = [10, 20, 30];
echo somaArray($numeros); // Saída: 60

?>
