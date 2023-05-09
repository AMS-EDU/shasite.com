<?php
    $capitlas = array("USA"=>"Washington D.C.",
                      "Japan"=>"Kyoto",
                      "South Korea"=>"Seoul",
                      "Italy"=>"Rome",
                      "Bangladesh"=>"Dhaka",
                      "UAE"=>"Abu Dhabi");


    // $capitlas["USA"] = "Las Vegas"; //Modifiy existing element
    // $capitlas["China"] = "Beijing";  //Add new element in associative array
    // array_pop($capitlas);  //remove the last element of array capitals [https://youtu.be/zZ6vybT1HQs?t=6888

    foreach ($capitlas as $key => $value) {
        echo "{$key} = {$value} <br>";
    }
?>