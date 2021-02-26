<?php

/* 
PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica 
tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60
*/


$matches=[

    [
        "homeSquad" => "Chicago Bulls",
        "awaySquad" => "Orlando Magic",
        "homePoints" => 85,
        "awayPoints" => 72
    ],
    [
        "homeSquad" => "Golden State",
        "awaySquad" => "Brooklyn Nets",
        "homePoints" => 90,
        "awayPoints" => 105
    ],
    [
        "homeSquad" => "New York Knicks",
        "awaySquad" => "Oklahoma City Thunder",
        "homePoints" => 60,
        "awayPoints" => 65
    ],
    [
        "homeSquad" => "San Antonio Spurs",
        "awaySquad" => "Atlatna Hawks",
        "homePoints" => 83,
        "awayPoints" => 50
    ],
    [
        "homeSquad" => "Cleveland Cavaliers",
        "awaySquad" => "Boston Celtic",
        "homePoints" => 95,
        "awayPoints" => 98
    ]
];


echo '<h1>Snack 1</h1><h2>Risultati di giornata:</h2>';

for ($i=0; $i < count($matches); $i++) { 
    
    $homeTeam = $matches[$i]['homeSquad'];
    $awayTeam = $matches[$i]['awaySquad'];
    $homeScore = $matches[$i]['homePoints'];
    $awayScore = $matches[$i]['awayPoints'];
    
    echo $homeTeam . ' - ' . $awayTeam . ' | ' . strval($homeScore) . ' - ' . strval($awayScore) . '</br></br>' ;
    
}
?>
<hr>
<hr>
<hr>
<?php 
/* 
PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/



$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
$at = '@';
$dot = '.';


echo '<h1>Snack 2</h1><h2>Ti Sei Autenticato?</h2></br>';

if (strlen($name)>3 && strpos($mail, $at) !== false && strpos($mail, $dot) !== false &&  is_numeric($age) ) {
    echo '<b>Accesso Riuscito</b>';

} else{
    echo '<b>Accesso Negato</b>';
}


?>