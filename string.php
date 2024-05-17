<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Count vowels
    $vowelCount = count_vowels($string);

    // Reverse string
    $reversedString = strrev($string);

    // Output with new line
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}

function count_vowels($str)
{
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach (str_split(strtolower($str)) as $char) {
        if (in_array($char, $vowels)) {
            $count++;
        }
    }
    return $count;
}
