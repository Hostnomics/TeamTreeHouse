<?php

/*
function hello($name){
  echo "Hello, $name"; 
}


hello("Bob"); 
*/
/*
$current_user = 'Steve'; 

function is_mike(){
  global $current_user;
  if ($current_user == 'Mike'){
    echo 'It is Mike!'; 
  } else {
    echo 'It is NOT mike.';  
  }
}

is_mike(); 
*/

//$current_user = 'Steve'; 

function is_mike($current_user){
  //global $current_user;
  if ($current_user == 'Mike'){
    echo 'It is Mike!'; 
  } else {
    echo 'It is NOT mike.';  
  }
}

is_mike('Mike'); 

//Returns It is Mike!

?>