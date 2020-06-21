<?php

//PHP Array Functions Lesson

// array_keys Documentation Description
//array_keys - Return all the keys or a subset of the keys of an array

// array array_keys ( array $array [, mixed $search_value [, bool $strict = false]])
// array_keys() returns the keys, numeric and string, from the array

// create an array
/*
$names = array (   // Keys and Values so it is an associate array
  'Mike' => 'Frog', 
  'Chris' => 'Teacher', 
  'Hampton' => 'Teacher'
); 
*/

//var_dump(array_keys($names)); 
/*
array(3) {                                                                                                     
  [0]=>                                                                                                        
  string(4) "Mike"                                                                                             
  [1]=>                                                                                                        
  string(5) "Chris"                                                                                            
  [2]=>                                                                                                        
  string(7) "Hampton"                                                                                          
} 
*/


$names = array (   // Keys and Values so it is an associate array
  'Mike' => 'Frog', 
  'Chris' => 'Teacher', 
  'Hampton' => 'Teacher'
); 
// array_keys returns the keys of an associative array: 
/*
foreach (array_keys($names) as $name){
  //echo "Hello, $name\n"; 
  echo "Hello, $name</br>"
}
*/

// array_walk()
// Documentation Description
// array_walk - Apply a user supplied function to every member of an array
// bool array_walk (array &$array , callable $callback [, mixed $userdata = Null ] )
// Applies the user-defined callback function to each element of the array array.


function print_info($value, $key){
  echo "$key is a $value.\n"; //can youse </br> in browser. Not in cmd line. \n not work in browser.
}

array_walk($names, 'print_info'); 


?>