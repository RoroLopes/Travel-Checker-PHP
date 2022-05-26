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
            All Travel
        </h3><br />
        <?php
            //require dela connexion à la DB
            require_once("../model/connect_db.php");
            //Initialisation de la table
            require_once("../model/init_table.php");
            // require des fonctions
            require ("../model/voyage_model.php");

            //Request à la DB pour les informations dans la DB

            $select = "SELECT * FROM Voyage";
            if ($res = mysqli_query($conn, $select));
                    foreach($res as $row){
                        $table_data .= '
                        <tr>
                            <td>'.$row["type"].'</td>
                            <td>'.$row["number"].'</td>
                            <td>'.$row["departure"].'</td>
                            <td>'.$row["arrival"].'</td>
                            <td>'.$row["seat"].'</td>
                            <td>'.$row["gate"].'</td>
                            <td>'.$row["baggage_drop"].'</td>
                        </tr>';
                }

            //affichage du tableau
            create_table($table_data);
        ?>
        </div>
    </body>
</html>