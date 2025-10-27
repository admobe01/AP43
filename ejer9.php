<?php

include "data.php";
$contNo=0;
$edadNo=0;

foreach($data as $datos){

    if($datos["Favorites"] == ""){

        $contNo++;
        $edadNo+=$datos["Age"];
        
    }
}

echo "Total people with no preferences: $contNo";
echo "<br> Average age for people with no preferences: " . round($edadNo/$contNo) . "<br><br>";

?>