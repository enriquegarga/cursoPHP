<?php

/*
strlen = String length
str_word_count = String Word Count
Strrev = String reversed
Str_replace = String replace
Strtolower = String to Lower
Strtoupper = String to upper
substr
*/

$texto = "Yo estudio en el Instituto Tecnologico de San Luis Potosi";

echo "El total de caracteres es: " . strlen($texto) . "<br>";
echo "El total de palabras es: " . str_word_count($texto) . "<br>";

echo "El texto al revés es: " . strrev($texto) . "<br>";

echo str_replace(",", ";-.", $texto) . "<br>";

echo strtoupper($texto);
