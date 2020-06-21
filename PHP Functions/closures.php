<?php

// PHP Variable Functions Lesson. 

$func = 'hello'; 

$func(); // same as if we called hello(); 

$func = 'greet'; 
$func = ('Mike', 'evening'); // same as if we called greet('Mike', 'evening'); 



function answer(){
  return 42; 
}

function add_up($a, $b){
  return $a + $b; 
}
/*
// string variable
$func = 'answer'; 

// call a function called answer, we can use $func

// echo $func(); //returns 42 from the answer function

$num = $func(); 

echo $num; 
*/

// now set the string variable to the add_up function
$func = 'add_up'; 
$num = $func(5, 10); //you can pass through arguments right here
echo $num; 

// variable functions allow us to take inputs from somewhere and call any function that preexists based off of a string variable value. 

  
?>
