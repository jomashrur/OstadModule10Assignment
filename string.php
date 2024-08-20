<?php

function Stringsoperation($arrayOfStrings) {
	// Define vowels
	$vowels = ['a', 'e', 'i', 'o', 'u'];


	foreach ($arrayOfStrings as $string) {

    	$vowelCount = 0;

    	foreach (str_split($string) as $char) {
        	if (in_array($char, $vowels)) {
            	$vowelCount++;
        	}
    	}


    	$reversedString = strrev($string);


    	echo "Original String: $string, ";
    	echo "Vowel Count: $vowelCount, ";
    	echo "Reversed String: $reversedString";
    	echo "\n";
	}
}


$arrayOfStrings = [
	"Hello",
	"World",
	"PHP",
	"Programming",
];

Stringsoperation($arrayOfStrings);

?>
