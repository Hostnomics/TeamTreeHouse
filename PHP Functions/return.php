<?php


// Returning Values
// Function can return an array with multiple values

/*
function hello($name) {   //once it returns the clause it exits the function
  if ($name == 'Mike'){
    return "Hello, $name!"; 
  } else {
    return "Hello, stranger"; 
  }
}
    
$greeting = hello('Mike'); //variable greeting is equal to what the hello function returns

echo $greeting; 
*/

function add_up($a, $b){
  $arr = array(
    $a,
    $b, 
    $a + $b
  ); 
  return $arr;
}

$value = add_up(2, 4); 

// echo $value //returns "Array"; PHP Notice:  Array to string conversion in /home/treehouse/workspace/index.php on line 32 

// print_r($value); //returns the entire array
/*
Array                                                                                                          
(                                                                                                              
    [0] => 2                                                                                                   
    [1] => 4                                                                                                   
    [2] => 6                                                                                                   
)

*/

echo $value[2]; //returns $a + $b in this case 6.


?>
