<?php

// Documentation for strlen 
// Description
// int strlen ( string $string ) 
// returns the length of the given string

//strlen
$phrase = "we only hit what we aim for"; 

$len = strlen($phrase); 

//echo $len //returns integer 27, the length of $phrase string
  
// substr (substring)
// Documentation Description
// string substr (string $string, int $start [, int $length ])
// returns string. exepcts string, [] means its optional, here an optional length

substr($phrase, 0); //returns whole string

substr($phrase, 5); //returns ly hit what we aim for

substr($phrase, 0, 5); // we just want the first five characters (we on)


// strpos - find the position of the first occurance of a substring inside of a string

// Documentation Description
// mixed strpos (string $haystack, mixed $needel [, int offset = 0])
// Find the numeric position of the first occurrence of needle in the haystack string. 

strpos($phrase, 'hit'); //returns integer value 8

//ar_dump(strpos($phrase, 'bob')); //returns bool(false) since bob is not in the string $phrase.

$start = strpos($phrase, 'hit'); // $start is an integer value so it can be used in substr()
echo substr($phrase, $start); // returns hit what we aim for as if we entered substr($phrase, 8); 
  
?>