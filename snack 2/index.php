<?php 

    $name = $_GET["name"];
    $email = $_GET["mail"];
    $age = $_GET["age"];

    if(empty($name) && empty($email) && empty($age)) {
        echo "Inserisci le query richieste: name, mail ed age";
    } else {
        if(strlen($name) > 3 && strpos($email, ".") !== false && strpos($email, "@") !== false && is_numeric($age)) {
            echo "Accesso Riuscito da :" . " " . $name . " " . $email . " " . $age . " " . "anni";
        } else {
            echo "Accesso Negato : Una o più query non sono corrette!!!";
        }
    };

?>

<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->