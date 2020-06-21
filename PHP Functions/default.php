<?php

//Set default value if none is passed into the function
function hello($name = 'friend'){
  echo "Hi, $name, how's it going?\n"; 
}

hello('Ian'); 

hello(); 

//create default arguments so we don't get errors when we forget to add an argument
//also look at creating default arguments. 
/*
function get_info($name, $title = 'friend'){

    echo "$name has arrived, they are with us as a $title";
}

get_info('Mike'); 
*/

//To prevent errors arising if the title argument is missing, set it to Null

function get_info($name, $title = Null){
  
  //Test if the title argument exists
  if ($title) {
    echo "$name has arrived, they are with us as a $title";
  } else {
    echo "$name has arrived, welcome!";
  }

    
}

get_info('Mike');


?>