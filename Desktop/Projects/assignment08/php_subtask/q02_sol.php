<?php
/*
* INFO/CS 1300
* Fall 2016
*
* Assignment 8, question 2
*
*/

// variables
$i; // counter variable
$j; // counter variable
$k; // counter variable
$temp_num; // holder for random value
$number_array = []; // array of random integers 1-5
$high_array = []; // integers from $number_array greater than 3

// A function called make_randoms whose argument is an empty array that sets $temp_num to be a random number between 1 and 5 (inclusive) and appends $temp_num to the end of the array ten times to produce an array of ten random numbers.

function make_randoms($number_array = array()) {
	for ($i = 0; $i < 10; $i++) {
		$temp_num = rand(1,5);
		array_push($number_array, $temp_num);
	}

	for ($j = 0; $j < 10; $j++) {
		echo "$j: $number_array[$j]";
		// DON'T FORGET THE "[$j]" !!!!!!!!!!!!!!!!!!!
		echo "<br>";
	}

	return $number_array;
	// echo "$i: $number_array";
}
	// call function
	// $number_array = make_randoms();

echo "<br>";

// A function called get_and_sort whose argument is an empty array that calls your previous function, make_randoms with the empty array. Then, this function should iterate through each of the random numbers in this array using counter $k and printing out only the values of that array which are greater than 3. Finally, the function should return the array of ten random numbers

function get_and_sort($high_array = array()) {
	$new_array = make_randoms($high_array);

		echo "<br>";

	for ($k = 0; $k < 10; $k++) {
		if ($new_array[$k] > 3) {
			echo "$k: $new_array[$k]";
			echo "<br>";
		}
	}
}

	// call function
	get_and_sort(array());

?>