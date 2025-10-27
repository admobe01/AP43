<?php

$data = "Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, England";

$array0 = explode(";", $data);
$array1 = implode(",", $array0);
$array2 = explode(",", $array1);

$array3=[];

for($i=0;$i<count($array2);$i=$i+2){


        $array[$i] = [ 'country' => $array2[$i+1], 'city' => $array2[$i]];

}

var_dump($array);
?>