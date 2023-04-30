<?php
$name = "Foo";
$income = 200;

/**
 * PHP data types:
 * 1. String
 * 2. Integer
 * 3. Float
 * 4. Boolean
 * 5. Object
 * 6. Array
 * 7. NULL
 */

//String - sequence of character
$first = "Foo";
$second = 'Bar';
echo "$first $second <br>";

// Integer - Non decimal number
$temp = 30;
$cost = 100;
echo " $temp  $cost <br>";

// Float - decimal point number
$cost = 344.5;
$temp = 27.5;
echo " $temp  $cost <br>";

// Boolean - Can be either true or false
$x = true;
$is_present = false;
echo $x; // If state is true, php return nothing, not even Null, But..
echo "<br>";
echo $is_present; // if state is false, it'll return 1. 

echo "<br>";// We can use var_dump after echo to see the variable type and the value inside it
$x = true;
$is_present = false;
echo var_dump($x);
echo "<br>";
echo var_dump($is_present);
echo "<br>";

// Object - Instances of classes

// Array - Used to store multiple values in a single variable
$cities = array("Napoli", "Rome", "Amsterdam", "Delhi", "Ankara");
echo var_dump($cities);

for ($i=0; $i < count($cities); $i++) {  // Funciton count calculates the number of elements inside the array
    echo " $cities[$i] <br>";
}
echo "<br>---------------another way to do------------------------<br>";
        //Another way
foreach($cities as $cities){
    echo $cities . "<br>";
}

// NULL - Special data type, means nothing in it
$foobar = NULL;
echo $foobar;
echo var_dump($foobar);
?>