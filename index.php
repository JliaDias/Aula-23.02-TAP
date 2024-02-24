<?php
$nome ="Júlia";
$idade = '40';
$idade2 = 40;
$lista = ['banana', 'uva', 'maçã'];

echo $nome .'<br>';
echo $idade .'<br>';
echo $lista;
echo '<br>';
var_dump($nome);
echo '<br>';
var_dump($idade);
//comando var_dump mostra a estrutura do dado
var_dump($lista);

echo '<br>'; echo '<br>';

if($idade === $idade2){
    echo "São iguais";
}else{
    echo '<br> Dentro do Else <br>';
    var_dump($idade);
    echo '<br>';
    var_dump($idade2);
}