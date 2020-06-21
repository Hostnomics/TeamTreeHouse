<?php


//Multiple argument function

/*function greet($name, $time_of_day){
  echo "Hi, $name, good $time_of_day";
}*/

//greet("Ian", "night"); 


//Setting Default Multiple arguments function

/*
function greet($name = 'friend', $time_of_day = 'morning'){
  echo "Hi, $name, good $time_of_day";
}

greet(); // Hi, friend, good morning"
*/


// Setting default time of day to Null can allow us to make that argument optional: 

function greet($name = 'friend', $time_of_day = Null){
  if ($time_of_day){
    echo "Hi, $name, good $time_of_day";
  } else {
    echo "Hello, $name"; 
  }
  
}

//greet(); // Hello, friend, good morning"
//greet('mike'); //"Hello, Mike.

function greet2($timeofday, $name){
  echo "Hello $name, it is $timeofday"; 
}

greet2('morning');

/*
PHP Warning:  Missing argument 2 for greet2(), called in /home/treehouse/workspace/multiple.php on line 42 and 
defined in /home/treehouse/workspace/multiple.php on line 35                                                   
PHP Notice:  Undefined variable: name in /home/treehouse/workspace/multiple.php on line 36 
*/

?>


