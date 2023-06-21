<?php

    // stampo valore di GET password
    // var_dump ($_GET["password"]);

    // trasformo il valore di GET password in un numero intero
    $valoreIntGet = intval($_GET["password"]);

    // funzione che genera stringa random 
    function randomString ($lunghezza){
        $randString = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, $lunghezza);

        return $randString;
    };
?>