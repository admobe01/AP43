<?php

$array2=[];
$array=[];

$data = "Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, England";

$array0 = explode(";", $data);
$array1 = implode(",", $array0);
$array2 = explode(",", $array1);
$j=0;
$array=[];

for($i=0;$i<count($array2)/2;$i++){


        $array[$i] = [ 'country' => $array2[$j+1], 'city' => $array2[$j]];

        $j=$j+2;
        
}

var_dump($array);
?>