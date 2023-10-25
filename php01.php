<?php
// 
//linguaggi a runtime = tempo di esecuzione
//feedback loop
//PHP - Hypertext PreProcessor
//creare sessioni -
//cookies tecnici
//HTTPS 
//cripta i dati e le validazioni - hashing 12345678 -23tri c23tricu3troc87123t4c 12t4c 81247t
//form 

//! VARIABILI

//!scope locale - utilizzabili SOLO dove sono state inizializzate
//let variabile = valore;
//!dichiarazione 
// $a oppure $_ iniziale minuscola
//alfanumerici o _
//no spazi vuoti
//CASE SENSITIVE $nome != $nOme
$nomeVariabile = 'valore';
// $nomevariabile;
$x = 5;

// $x + $y;

//! COSTANTI 

//! scope GLOBALE - valide sempre
//!dichiarazione
//tutto maiuscolo
const NAME = "Annalisa";

//! scope: il range di utilizzo

//! LINGUAGGIO DI PROGRAMMAZIONE A TIPIZZAZIONE DEBOLE
// un tipo di dato può cmabiare nel corso del codice
//TYPE JUGGLING
//"console.log" echo 
$y = 2;
// echo $y . "\n";
$y = 'Vincenzo';
// echo $y  . "\n";
$y = true;
// echo $y  . "\n";
$y = 5.3;
// echo $y  . "\n";

//!TIPI DI DATO  
//! PRIMITIVI (predefiniti o scalari) - echo
//! interi tutti i numeri positivi e negativi
$integer = 5;

//! float tutti i numeri a virgola mobile positivi e negativi
$float = 2.3;

//!booleani, true o false
$boolean = false;

//!stringhe - una sequenza di caratteri alfanumerici, speciali o stringa vuota

$stringa1 = "Gabriele";
$stringa2 = 'Alessia';
// concatenazione di stringhe: .
//mandare a capo "\n" - new line

//echo 'ciao mi chiamo $stringa2' . ", piacere di conoscervi! \n"; //trasformo tutto in stringa
//echo "ciao mi chiamo $stringa2 \n" . "ciao"; //! variable interpolation 
// echo 'buongiorno sono un\'insegnante';

//! vedere il tipo di dato: in js console.log(typeof variabile)
// var_dump($stringa1, $float, $integer);
// var_dump();

//! TYPE COERCION - conversione del tipo di dato

$num1 = 10; //integer
$num2 = "5ciao"; //stringa NUMERIC STRING

// echo $num1 + $num2;
//! COMPOSTI o USER-DEFINED- possono contenere più valori di tipi diversi
//oggetti 

//! ARRAY
//0 based = partono dallo 0 gli indici
$topolino = ['a', 'b', 'c', true, 0];
// $minnie = array(1,2,3);
// echo "riga 89: \n";
// var_dump($topolino);
// echo $topolino[2];
// echo "riga 92: \n";
// print_r($topolino);

$array = [1, 2, 3, ['a', 'ciao', true, ['che macello']]];
// var_dump( $array[3][3]) ;

//! ARRAY ASSOCIATIVO o CHIAVE-VALORE
$annalisa = [
    'name' => 'Annalisa',
    'cognome' => 'Caldarulo',
    'eta' => 25,
    'array' => ['ciao']
];
$gabriele = [
    'name' => 'Gabriele',
    'cognome' => 'Uras',
    'eta' => 18
];
// var_dump($annalisa);
// echo $annalisa['name'];
// echo $annalisa['cognome'];


//! OPERATORI
//fare operazioni sugli operandi

//!MATEMATICI
//restituiscono un valore numerico
//+, -, *, /, %, **

// echo 2 +3; //output = 5

//!DI CONFRONTO
//restituiscono un valore booleano (true o false)
$n1 = 6; //intero
$n2 = "6"; //stringa

//var_dump($n1 == $n2); // UGUAGLIANZA - true
//var_dump($n1 === $n2); //strettamente uguale, anche il tipo di dato è uguale, IDENTICI - false

//var_dump(1 != 'a'); //diverso
//var_dump(1 !== '1'); // strettamente diverso

//>, <, <=, >=

//! LOGICI
//restituiscono un valore booleano 

//* valore truthy -  se non è null ed è quantificabile (stringhe non vuote, array non vuoti, true)
//* valore falsy - contiene null o non è quantificabile (0, stringa vuota, un array vuoto, false)
// var_dump((bool) $n1) ;

//!&& and
//resituisce TRUE se entrambi gli operandi sono truthy

//  var_dump(10 && false);

//! || or
// restituisce true se almeno uno dei valori è true, se entrambi sono false restituisce false
// var_dump(10 || '');
// var_dump(false || false);

//! ! not, o bang operator
//restituisce l'inverso del booleano, da truthy a falsy e viceversa
// var_dump(!true);


//! ALGORITMI - CONTROLLO DI FLUSSO 
// algoritmo = insieme di comandi eseguito in un determinato ordine (=sequenza) per risolvere un problema

//!SEQUENZA

$n = 1;
$m = 2;
$sum = $n + $m;

//! SELEZIONE
//scelta tra due percorsi in base a una CONDIZIONE (vera o falsa)

// if(condizione){
//     istruzione
// }
// $vote = 30;
$v = 18;

// if ($vote == 30 && $v == 30) {
//     echo "Sei promosso con lode! \n";
// } elseif ($vote >= 18 && $v >= 18) {
//     echo "Sei promosso!";
// } else {
//     echo "Riprovi la prossima volta \n";
// }
// $vote = -5;
// switch ($vote) {
//     case $vote == 100: //casistiche con keywork case :
//         echo "lode";
//         break; //uscire

//     case $vote > 60 && $vote < 100:
//         echo "promosso!";
//         break;
//     case $vote == 60:
//         echo "promosso ma puoi fare meglio";
//         break;
//     case $vote > 0 && $vote < 60:
//         echo "é intelligente ma non si applica";
//         break;
//     default:
//         echo "valore non valido";
// }

//! CICLO
//blocco di istruzioni eseguite ripetutamente

//!FOR
//so già quante volte dovrà essere ripetuto
//contatore $i =0;
//condizione $i <= 10
//incremento $i++
// for ($i = 0; $i <= 10; $i++) {
//     echo "$i \n";
// }

//! FOREACH
$array = [1, 2, 3, 4, 5, 8, 9, 2, 4, 5, 6, 10];
// foreach($nomearray as $elemento){
//     istruzione;
// }

// foreach ($array as $elemento) {
//     echo $elemento +2 . "\n";
// }
// array.foreach(elemento => console.log(elemento))

//!ciclare anche sulla chiave dell'array
foreach ($array as $chiave => $elemento) {
    echo "l'elemento " . $elemento . " ha come chiave " . $chiave . "\n";
}


//! WHILE 

// while(condizione){
// istruzione
// }

$i = 0;
// while ($i <= 5) {
//     echo "$i \n";
//     $i++;
// }

//! DO WHILE
// do{
//     codice
// }while(condizione);

$p = 6;
do {
    echo "$p \n";
    $p++;
} while ($p <= 5);
