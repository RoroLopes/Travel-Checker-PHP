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

        <!--Affichage des boutons -->
        <form action='views/voyage_list.php' method= 'post'>
            <input type ='submit' value='choose your travel'>
        </form><br />

        <form action='views/all_list.php' method= 'post'>
            <input type ='submit' value='All travel'>
        </form><br />

        <form action='views/add_travel.php' method= 'post'>
            <input type ='submit' value='Add a travel'>
        </form><br />

        </div>
    </body>
</html>