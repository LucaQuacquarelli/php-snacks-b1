<?php 

    $matches = [

        [
            "home" => "Los Angeles Lakers",
            "visitors" => "San Antonio Spurs",
            "homeScores" => 84,
            "visitorsScores" => 68,
        ],
        [
            "home" => "Chicago Bulls",
            "visitors" => "Boston Celtic",
            "homeScores" => 55,
            "visitorsScores" => 48,
        ],
        [
            "home" => "New York Knicks",
            "visitors" => "Toronto Raptors",
            "homeScores" => 38,
            "visitorsScores" => 64,
        ],

    ];

    for($i = 0; $i < count($matches); $i ++) {
        var_dump($matches[$i]["home"] . " " .  "-" .  " " . $matches[$i]["visitors"] . " " .  "|" .  " " . $matches[$i]["homeScores"] . " " .  "-" .  " " . $matches[$i]["visitorsScores"]);
    }

    
?>


<!-- Creiamo un array contenente le partite di basket di un’ ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.  Olimpia Milano - Cantù | 55-60-->