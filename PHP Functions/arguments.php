<?php

function hello($arr){
    //Check if it is receiving an array
    if (is_array($arr)){
      foreach($arr as $name){
        echo "Hello, $name, how's it going?\n";
      }
    } else {
      echo "Hello, friends"; 
    } 
  }
  
  $names = array (
    "Hampton",
    "Mike",
    "Charley"
  );
  hello($names); 
  
  ?>
  

