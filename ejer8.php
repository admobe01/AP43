<?php

include "data.php";

$request = $_GET['Country'];
$datos=[];
echo "People from $request:<br><br><br>";
$y=false;

foreach($data as $datos){



if($datos["Country"] == $request){

        $y=true;

        if($datos["Favorites"] == ""){

            echo $datos["User"] . " loves nothing <br><br>";

        }else{

        echo $datos["User"] . " likes " . $datos["Favorites"] . "<br><br>";
    }
}
}

if($y==false){

    echo "Error: No hay ninguna correlación con el pais indicado";
}





?>