<?php
    //Connexion à la DB
    $conn = mysqli_connect("localhost","root","loulou1965!","base2");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>