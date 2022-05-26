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
        <title>Travel Check</title>

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
            Already exist Travel
        </h3><br />
        <?php
            //require dela connexion à la DB
            require_once("../model/connect_db.php");
            //Initialisation de la table
            require_once("../model/init_table.php");
            // require des fonctions
            require ("../model/voyage_model.php");

            //Request SQL pour les informations dans la DB
            $select = "SELECT * FROM Voyage";
            if ($res = mysqli_query($conn, $select));

            echo ("<form action='' method= 'post'><br /><br />
            Departure <input type ='Text' name = 'departure'><br /><br />
            Arrival <input type ='Text' name = 'arrival'><br /><br />
            <input type ='submit' value='Schear'><br /><br />
            </form>");

            $departure = $_POST['departure'];
            $arrival = $_POST['arrival'];

            //Petit algorithme pour trouver le trajet dans la DB
            while ($departure != $arrival) {
                $choice = go_to($res, $departure);
                $departure = $choice["arrival"];
                if ($choice["departure"] == "") {
                    echo "<strong>Travel not found</strong>";
                    break;
                }else {
                        $table_data .= '
                        <tr>
                            <td>'.$choice["type"].'</td>
                            <td>'.$choice["number"].'</td>
                            <td>'.$choice["departure"].'</td>
                            <td>'.$choice["arrival"].'</td>
                            <td>'.$choice["seat"].'</td>
                            <td>'.$choice["gate"].'</td>
                            <td>'.$choice["baggage_drop"].'</td>
                        </tr>';
                }
            }
            if ($choice["departure"] == "") {
                echo "<form action='../index.php' method='post'>
                <input type='submit' value='Main menu'> 
                </form>";
            }else
                create_table($table_data);

        ?>
        </div>
    </body>
</html>