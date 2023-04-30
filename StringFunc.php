<?php
    $name = "Paul";
    $role = "Director, Organizer, CEO";
    echo "<br>";

    // the dot operator (.) is used to join two strings, similart to + op in python
    echo "The lenght of my string is " . strlen($name);
    echo "<br>";

    echo "He played total of ".str_word_count($role)." important roles in the Company";
    echo "<br>";
    echo strrev($name); // This funciton reverse the content of string
    echo "<br>";
    echo strpos($role, "CEO"); //Find first occurance of the substring inside string
    echo "<br>";
    echo strpos($role, "CTO"); // if it isn't there, doesn't print anything
    echo "<br>";
    echo str_replace("CEO", "Shareholder", $role);
    // replace content of string, str_replace(<to_be_replaced>, <new_content>, <variablename>)
    echo "<br>";
    echo str_repeat("---", 30); // repeat a string for specified amount of times
    echo str_repeat($name, 30);
    echo "<br>";
    echo "<pre>";
    echo rtrim("   that is a good person   "); //Trim spaces from right side
    echo "<br>";
    echo ltrim("   that is a good person   ");// Trim spaces from left side
    echo "</pre>";
    echo "<br>";
?>