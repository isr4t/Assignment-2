<?php
// Array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count vowels in a string
function countVowels($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach ($vowels as $vowel) {
        $count += substr_count(strtolower($str), $vowel);
    }
    return $count;
}

// Function to reverse a string
function reverseString($str) {
    return strrev($str);
}

// Iterate over each string, count vowels, reverse the string, and print the result
foreach ($strings as $str) {
    $vowelCount = countVowels($str);
    $reversedStr = reverseString($str);
    echo "Original String: $str, Vowel Count: $vowelCount, Reversed String: $reversedStr\n";
}


