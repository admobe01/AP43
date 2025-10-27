<?php

include "data.php";

foreach($data as $era){


    if($era["Age"]>=35 && $era["Age"]<=65){

    echo $era["User"] . " is " . $era["Age"] . " years old<br><br>";

}
}
?>