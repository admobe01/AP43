<?php

$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires,Cairo,London";
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";

$array1 = explode(",",$city);
$array2 = explode(",", $country);
$array3=[];
/*var_dump($array1);
var_dump($array2);*/

if(count($array1)==count($array2)){


for($i=0;$i<count($array1);$i++){

    $array3[$i] = ['country' => $array2[$i], 'city'=> $array1[$i]]; 

}

}else{

    echo "Error en la longitud de Arrays";
}

var_dump($array3)
?>