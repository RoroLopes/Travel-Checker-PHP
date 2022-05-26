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
            Add a new travel
        </h3><br />

        <?php
            //require dela connexion à la DB
            require_once("../model/connect_db.php");
            //Initialisation de la table
            require_once("../model/init_table.php");
            // require des fonctions
            require ("../model/voyage_model.php");

            //Affichage des boutons pour la créations des voyages
            echo "<form action='added_travel.php' method='post'>  
            type: <input type='text' name='type'> <br /><br />  
            number: <input type='text' name='number'><br /><br />  
            departure: <input type='text' name='departure'><br /><br />  
            arrival: <input type='text' name='arrival'><br /><br />  
            seat: <input type='text' name='seat'><br /><br /> 
            gate: <input type='text' name='gate'><br /><br /> 
            baggage_drop: <input type='text' name='baggage_drop'><br /><br />   
            <input type='submit' value='Add step'>  
            </form>";
        ?>

        </div>
    </body>
</html>