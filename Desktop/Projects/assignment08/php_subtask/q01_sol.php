<?php
/*
* INFO/CS 1300
* Fall 2016
*
* Assignment 8, question 1
*
*/

// variables
$i; // counter variable
$key; // holder variable for array
$value; // holder variable for array
$plain_array = array(1,2,3,"four");
$assoc_array = array("Brady"=>12, "Blount"=>29, "Garropolo"=>10);

// a for loop that iterates through $plain_array using the variable $1 and prints all of the array's values
echo "LOOP 1";
echo "<br>";
for ($i = 0; $i < sizeof($plain_array); $i++) {
    echo "i: $plain_array[$i]";
    echo "<br>";
}
echo "<br>";

// a for-each loop that iterates through $plain_array and prints all of the array's values
echo "LOOP 2";
echo "<br>";
foreach ($plain_array as $curr) {
	echo "value: $curr";
	echo "<br>";
}
echo "<br>";

// a loop (of your choice) that iterates through $plain_array, tests each value to determine if it is an integer (e.g. 2) or a string (e.g. "two") and prints only the integer-valued elements of the array
echo "LOOP 3";
echo "<br>";
foreach ($plain_array as $curr) {
	if (is_int($curr)) {
		echo "value: $curr";
		echo "<br>";
	}
}
echo "<br>";

// a loop that iterates through the associate array $assoc_array and prints all of its keys and values
echo "LOOP 4";
echo "<br>";
	foreach ($assoc_array as $key => $value) {
		echo "$key : $value";
		echo "<br>";
	}
echo "<br>";

?>