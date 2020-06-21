<?php

//$a = 10; 
//$b = 5; 

/*if ($a == $b) {
 echo "values are equal.";  
} elseif ($a < $b) { 
  echo '$a is less than $b';
} elseif ($a > $b) {
  echo '$a is greater than $b';
// never reaches the else conditional
} else {
 echo "values are not equal.";  
} 
*/

/*
$score = 30; 

if ($score >= 60) {
  echo 'You won!'; 
} elseif ($score <= 30) {
  echo 'You should practice more'; 
} else {
  echo 'Please try again'; 
}
*/

/*
$a = "Alena";
if ($a = "Treehouse") {
echo "Hello Alena, ";
} else
echo "Welcome to Treehouse!";
*/


//$a = 10; 
//$b = 5; 
/*
if ($a == $b) {
  //echo 'values are equal'; 
} else {
  echo 'values are not equal'; 
}
if (($a == $b) == false) {
  echo 'values are NOT equal';
}
// Negation Operator: Check if something is less than OR greater than $a <> $b means a not equal to b. 
if ($a <> $b) {
  echo 'values are NOT equal';
}
*/


//$a = '5'; 
//$b = 5; 
/*
// Check for Not equal != works with any data type
if ($a != $b) {
  echo 'values are NOT equal';
}

// To compare types use !== like the === before. 
if ($a !== $b) {
  echo 'NOT identical';
}
*/

// PHP treats the integer zero as false
//$a = '5'; 
$a = 0; 
$b = 5; 

/*
// if $a is something (not false or zero)
if ($a) {
  echo 'true'; 
}
if (!$a) {
  echo 'false'; 
}

if ($a == false) {
  echo 'false'; 
}

if ($a != true) {
  echo 'false'; 
}
*/

//Nested Conditionals Statements Lesson
/*
$num = 1; 

if ($num >= 10) {
  if ($num <= 1000) {   
    echo 'your number is within the range'; //only prints if BOTH if statements are met
  } else {
    echo 'your number is greater than 1000, NOT within the range'; //catches 2nd if statement.
  }
} else {
  echo 'your number is less than 10, NOT within the range'; //catches less than 10
}
*/

// Is 5 less than or greater than 6 (also not equal) evaluates to true
//var_dump(5 <> 6);
/*
$num = 20; 
if ($num >= 5) {
    if ($num < 20) {
        echo 'Range Met';
    } else {
        echo 'TOO  MUCH!';
    }
    echo 'Keep Trying';
}
*/
// returns Too Much!KeepTrying


//To determine if two strings are NOT equal use != because they are both of type string (so don't use !== which compares data type. 

//Quiz question
/*
$username = "Treehouse"; 

if ($username) {
  if ($username != "Treehouse") {
    echo "Hello $username"; 
  }
} else {
  echo "You must be logged in"; //won't trigger. Nested.
} 
//Nothing is displayed 
*/


// Logical Operators Lesson
// The And operator &&
/*
$num = 10; 

if ($num >= 10 && $num <= 1000) {   // requires both conditons to be true.
    echo 'your number is within the range'; 
} else {
  echo 'your number is NOT within the range'; 
}
*/

// The OR operator
/*
$num = '20'; 

if ($num == 10 || is_string($num)) {   // num is 10 or of type string
    echo '10 or string'; 
} else {
  echo 'not 10 or string'; 
}
*/
// returns 10 or string because '20' is of type string.

// Highest importance && || instead of and or
/*
$var1 = true && false; // returns bool(false) b/c && has higher precedence than = sign
//evaluated as $var1 = (true && false) which is false
$var2 = true and false; // returns bool(true) b/c = has higher precedence than 'and'
//evaluated as ($var2 = true) and false so it ignores the 'and false'
var_dump($var1, $var2); 
*/

//PHP Arrays & Conditions: Logical Operators Lesson Quiz

// Without changing the variables, create a SINGLE conditional statement around the echo command that checks: 
// 1. That a $username is set. 
// 2. The users $role is NOT admin.

$username = 'sketchings';
//Available roles: author, editor, admin
$role = 'editor'; 

//add conditional statement

// To check if $username is set, simple use if ($username) 
if ($username && $role != 'admin'){
    echo "You do not have access to this page.  Please contact your administrator.";
}


?>