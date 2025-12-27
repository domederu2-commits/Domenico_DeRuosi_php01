<?php

// ESERCIZIO 1

// Definizione delle variabili
$numeroIntero = 50;          // Integer
$numeroDecimale = 2.35;      // Float
$testo = 'Ciao Domenico';         // Stringa
$veroFalso = true;           // Boolean

// Stampa dei valori
echo "Intero: " . $numeroIntero;
echo "Float: " . $numeroDecimale;
echo "Stringa: " . $testo;
echo "Boolean: " . $veroFalso;

//ESERCIZIO 2

//E' necessario utilizzare il simbolo del dollaro $ prima delle varialbili 
// le variabili non possono contenere (.),(-), spazi o iniziare con numeri; 
// possono invece contenere underscore _
// le stringhe vanno concatenate con il punto (.)

//Date le seguenti variabili: 

$text1 = "Marco";
$text2 = "Hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = "hai";
$text7 = "bevuto";
$text8 = "tutto";

echo $text1 . " Hai " . $text3 . $text4 . " " .
    $text5 . " " . $text6 . " " . $text7 . " " . $text8 . ".";


?>


//ESERCIZIO 3


<?php
$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    [
        'oscura',
        'era',
        89,
        [
            [
                'cammin',
                'Nel',
                [
                    'selva',
                    'la',
                    [
                        'via',
                        'una',
                        true,
                    ]
                ],
            ]
        ],
        'ritrovai',
        'per'
    ],
    'diritta'
];

$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
        'Virgilio',
        'smarrita',
        'ché'
    ]
];

//Costruzione della frase completa e corretta 

 <?php

$results = 
    $words1[6][3][0][1] . " " .          // "Nel"
    $words1[6][3][0][0] . " mezzo del " .// "mezzo del"
    &$words1[6][0][0]. " " .             //"cammin"
    $words2['elemento2'] . " " .         // "nostra"
    $words1[2] . " " .                   // "vita"
    $words1[4] . " " .                   // "mi"
    $words1[6][6] . " " .                // "ritrovai"
    $words1[6][7] . " " .                // "per"
    $words1[0] . " " .                   // "una"
    $words1[6][3][0][2][0] . " " .       // "selva"
    $words1[6][0] . ", " .               // "oscura,"
    $words2['elemento3'][2] . " " .     // "ché"
    $words1[6][3][0][2][1] . " " .       // "la"
    $words1[7] . " " .                   // "diritta"
    $words1[6][3][0][2][2][0] . " " .    // "via"
    $words1[6][1] . " " .                // "era"
    $words2['elemento3'][1];             // "smarrita"

echo $results;

?>

