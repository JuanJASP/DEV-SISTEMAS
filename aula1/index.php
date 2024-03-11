<?php

$variavel_em_php = "texto em php";
$outra_variavel=123;


echo ("Olá mundo!");

//TypeCast

$inteiro = (int) 10;
$float = (float) 10;
$texto = (string) 10;
$bool = (bool) 1;


//exibindo resultados

echo "<pre>";
var_dump($variavel_em_php);

var_dump($outra_variavel);

var_dump($inteiro);

var_dump($float);

var_dump($texto);

var_dump($bool);

echo "</pre>";

$print = print "Saida de Texto com Print<br>";

print $print;

$total = 4 + 4 * 2 - 2 / 2;

print_r($total);

$vetor = [1,2,3,4,5,6,7,8];

$array_associativo =[
    1=> "primeiro valor",
    1,5=> "Segundo valor",
    "1" => "Terceiro valor",
];

echo "<pre>";

print_r ($vetor);

echo "</pre>";

echo"<hr>";

$page;

if(isset($page)){
    print "Variavel vazia<br>";
}else if($page == "teste"){
    print "Variavel teste<br>";
}else{
    print "Nenhum dos casos";
};

$inteiro = 10;

//== compara valor e === compara valor e tipo

if($inteiro === "10"){
    var_dump($inteiro);
}else{
    print "Não é igual";
}

switch($page){
        case '10';
        echo "O valor é 10";
         case 'value':
        echo "o valor é value";
        break;
        case 'teste':
         echo "o valor é teste";
         break;
        default:
            echo "nenhum dos casos";
        break;

};

echo "<hr" , match($page){
    "10"=> "o valor é $page",
    "teste"=> "o valor é teste",
    default => "Nenhum dos casos",
};



$i = 0;

$j = 0;

for( ; $i<10; ){

    echo "i = $i | j = $j";
    $i++;
    $j++;
}




?>;