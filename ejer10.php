<?php
include "data.php";

$request = $_GET['plato'];
$datos=[];
$pais=[];
$j=0;

foreach($data as $datos){

    if(str_contains($datos["Favorites"],$request)){
        $j++;
        $existe=false;

foreach($pais as $y){

    if($y == $datos["Country"]){

        $existe=true;
        }
}

    if($existe == false){

        $pais[]=$datos["Country"];
        }
    }
}

$z = implode(",", $pais);

echo "Total people who like $request: $j";
echo "<br><br><br> People's contries who like $request: $z";

?>