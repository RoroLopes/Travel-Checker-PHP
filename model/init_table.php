<?php
    //creation de la table si elle n'a pas été crée
    $sql = "CREATE TABLE if not exists Voyage ( 
                        type VARCHAR(30) NOT NULL,
                        number VARCHAR(30) NOT NULL UNIQUE,
                        departure VARCHAR(80) NOT NULL,
                        arrival VARCHAR(80) NOT NULL,
                        seat VARCHAR(30) NOT NULL,
                        gate VARCHAR(30) NOT NULL,
                        baggage_drop VARCHAR(30) NULL)";

    mysqli_query($conn, $sql);
?>