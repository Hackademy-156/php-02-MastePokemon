<?php

// DICHIARAZIONE della funzione

// parametri -> insieme di dati che la funzione si aspetta per eseguire il suo compito
// parametri formali e reali
// function sayHello($parametro){
//     // ESPLICARE LE ISTRUZIONI
//     echo "Ciao a tutti!";

// }

// INVOCAZIONE della funzione

// sayHello();
// sayHello();
// sayHello();
// sayHello();

// esempio parametri

// $x = 5;
// $y = 10;

// function sum($number1 , $number2){

//     echo $number1 / $number2;

// }

// sum($y, $x);


// le variabili in php hanno scope locale
// le costanti in php hanno scope globale

// che cos'è lo scope?
// l'esistenza e la possibilità di richiamare in un determinato punto del nostro algoritmo, una variabile

// $x = 5;
// $y = 10;

// function stamp(){
    // utilizzo della keyword global -> metto a disposizione le mie variabili nello scope globale
//     global $x, $y;
//     echo $x;
//     echo $y;
// }

// eventualmente posso farlo dichiarando due costanti

// const X = 5;
// const Y = 10;

// function stamp(){
 
//     echo X . "\n";
//     echo Y;
// }

// stamp();

// ALTRO ESEMPIO

// $x = 5;

// function increment($a){
//     $a++;
// }

// echo "Il valore di x prima dell'invocazione della funzione è $x \n";
//   increment($x);
// echo "Il valore di x dopo l'invocazione della funzione è $x \n";

// passaggio per valore -> la funzione manipola una copia del valore della variabile passata come argomento reale

// passaggio per riferimento -> noi diamo accesso alla funzione direttamente alla locazione di memoria della variabile, passata come argomento reale
// posso farlo con la sintassi della
// &commerciale

// $x = 5;

// function increment(&$a){
//     $a++;
// }

// echo "Il valore di x prima dell'invocazione della funzione è $x \n";
//   increment($x);
// echo "Il valore di x dopo l'invocazione della funzione è $x \n";

// Non sempre abbiamo bisogno di un return. difatti esistono delle funzioni che non ne hanno bisogno e solitamente vengono chiamate FUNZIONI VOID

// FUNZIONI ANONIME

// $sayHello = function(){
//     echo "ciao sono Valerio";
// };

// $sayHello();

// MAP
// faceva un ciclo su ogni elemento presente all'interno di un array, e mi restituiva un nuovo array, con tutti o alcuni elementi modificati

// in JS la map

// let array = [1, 2, 3];
// array.map((el)=> console.log(el * 2));

// in PHP la map

// $array = [1, 2, 3];

// $result = array_map(function($el){

//         return $el;

// }, $array);

// print_r($result);

// sinstassi con arrow function

// $result = array_map( (fn($el)=> $el) , $array );

// FILTER

// in js

// let array = [1, 2, 3];

// let pari = array.filter((el)=> (el % 2 == 0));

// console.log(pari);

// in php

// $array = [1, 2, 3];

// $pari = array_filter($array, function($el){

//     return $el % 2 == 0;

// });

// print_r($pari);

// REDUCE

// in js

//  let array = [1, 2, 3];

//  let accumulator = array.reduce(( acc , el) => acc+= el);

// in PHP

// $array = [1, 2, 3];

// $accumulator = array_reduce($array, function($acc, $el){

//     return $acc += $el;

// });

// print_r($accumulator);

// PARAMETRI DI DEFAULT
// è un parametro che scatta solo nel caso in cui non venisse passato il giusto numero di parametri reali.

// il parametro di default non posso mai darlo al primo parametro formale, senza darlo a tutti gli altri
// solo al secondo sì, posso dare un parametro di default

// $x = 5;
// $y = 10;

// function sum($a = 20, $b){
//     echo $a + $b;
// }

// sum(); 

// SPREAD OPERATOR - SPLAT OPERATOR

$x = 5;
$y = 10;
$z = 100;
$k = 20;


// function sommatoria(...$numbers){

//         $result = array_reduce($numbers, function($acc, $number){

//            return $acc += $number;

//         });

//         echo $result;

// }

// sommatoria($x, $y, $z, $k, 1000, 2000, 3000, 4000);


// sto dicendo:
// - con lo spread operator, creami un array $numbers, inizialmente vuoto
// - dove in fase di invocazione della funzione, sarà poi popolato dai dati che ti passo.
// - poi, prendi tutto l’array, $numbers
// - grazie ad array_reduce, creati un accumulatore, $acc, dove tu vai ogni volta a sommare i numeri (ogni singolo elemento dell'array $numbers)
// - ad ogni ciclo, l’accumulatore, $acc, che parte da 0, somma se stesso al numero.


// In origine quindi $acc sarà 0
// - Al primo giro diventa 5
// - Al secondo giro sarà 5 + 10, quindi 15
// - Al terzo giro sarà 15 + 100, quindi 115
// - Al quarto e ultimo giro sarà 115 + 20, quindi 135
// - Se inserisco altri numeri nell'invocazione, l'array $numbers si popolerà di nuovi valori e di conseguenza anche il risultato finale sarà diverso, dato che verranno addizionati anche quelli