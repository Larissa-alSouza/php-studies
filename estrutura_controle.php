<?php 

// if e else

$idade = 18;

if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}

// switch

// usada quando há múltiplos casos possíveis para uma variável e pode ser uma alternativa ao uso de vários if/else

$cor = "vermelho";

switch ($cor) {
    case "azul":
        echo "A cor é azul.";
        break;
    case "vermelho":
        echo "A cor é vermelho.";
        break;
    case "verde":
        echo "A cor é verde.";
        break;
    default:
        echo "Cor desconhecida.";
        break;
}

?>
