<?php

$excel = [
    ['nome'], ['Idade'],
    ['Lucas chanpao'], ['24'],
    ['Leticia '], ['18'],
    ['Matheus'], ['20'],
];

$txt = fopen('excel.csv', 'w');

foreach ($excel as $campos) {

    fputcsv($txt, $campos);
}

fclose($txt);

echo "<h1> ARQUIVO GERADO !! </h1>";
