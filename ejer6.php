<?php

include "data.php";

foreach($data as $rep){
    echo $rep["User"] . " is " . $rep["Age"] . " years old<br><br>";
}


?>