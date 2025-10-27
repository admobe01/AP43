<?php

$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";

$array1 = explode(",",$city);
$array2 = explode(",", $country);
var_dump($array1);
var_dump($array2);
?>