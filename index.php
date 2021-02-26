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


for ($i=0; $i < count($matches); $i++) { 
    
    $homeTeam = $matches[$i]['homeSquad'];
    $awayTeam = $matches[$i]['awaySquad'];
    $homeScore = $matches[$i]['homePoints'];
    $awayScore = $matches[$i]['awayPoints'];
    
    echo $homeTeam . ' - ' . $awayTeam . ' | ' . strval($homeScore) . ' - ' . strval($awayScore) . '</br></br>' ;
    
}
