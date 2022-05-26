<!DOCTYPE html>
<html>

    <!-- header-->

    <head>
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
    </script>
  
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
    </script>
        <meta charset="utf-8" />
        <title>Travel Checker</title>

    <!-- Style-->

        <style>
        .box {
            width: 750px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 100px;
        }
        </style>
    </head>

    <body>
        <div class="container box">
        <h3 align="center">
            Travel Checker
        </h3><br />
        <?php
            //Require dela connexion à la DB
            require_once("../model/connect_db.php");
            //Initialisation de la table
            require_once("../model/init_table.php");
            //Require des fonctions
            require ("../model/voyage_model.php");
            
            //Creation de la request SQL pour l'insertion dans la table
            $insert .= "INSERT INTO Voyage
                       VALUES ('".$_POST["type"]."','".$_POST["number"]."','".$_POST["departure"]."','".$_POST["arrival"]."',
                      '".$_POST["seat"]."','".$_POST["gate"]."','".$_POST["baggage_drop"]."')";

            if ($_POST['type'] && mysqli_query($conn, $insert)) { 
                echo "Added with success";
            } else {
                echo "failed to load please retry";
            }

            //bouton de retour à la home page et de retour à la page de création de voyage
            echo "<form action='add_travel.php' method='post'>
            <input type='submit' value='Go back'> 
            </form>";

            echo "<form action='../index.php' method='post'>
            <input type='submit' value='Main menu'> 
            </form><br />";
        ?>
        </div>
    </body>
</html>