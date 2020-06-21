<?php

//Quiz Question on aray_combine built-in function

$name = ['hampton', 'charley']; 
$fav_food = ['sushi', 'mac and cheese']; 
$result = array_combine($name, $fav_food); 

echo $result; 
// PHP Notice:  Array to string conversion in /home/treehouse/workspace/index.php on line 7  

print_r($result); 
/*

Array                                                                                                          
(                                                                                                              
    [hampton] => sushi                                                                                         
    [charley] => mac and cheese                                                                                
)                 


*/
?>