<?php
    //fonction permettant de trouver les étapes du trajet
    function go_to($db_array, $dep) {
        $choice = [];
        foreach($db_array as $row) {
                if(strcmp($row["arrival"], $dep) == 0);
                if (strcmp($row["departure"], $dep) == 0) {
                    $choice = $row;
                    break;
                }
        }
        return $choice;
    }
    //fonction basique pour crée un tableau en HTML depuis php
    function create_table($table_data) {
        echo '
        <table class="table table-bordered">
        <tr>
            <th width="45%">type</th>
            <th width="10%">number</th>
            <th width="45%">departure</th>
            <th width="45%">arrival</th>
            <th width="45%">seat</th>
            <th width="45%">gate</th>
            <th width="45%">baggage_drop</th>

        </tr>';
        echo $table_data;
        echo '</table><br />';
        echo "<form action='../index.php' method='post'>
        <input type='submit' value='Main menu'> 
        </form>";

    }
?> 