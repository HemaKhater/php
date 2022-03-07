<?php
/*
Write a PHP program to calculate electricity bill .
Conditions:
For first 50 units – 3.50/unit
For next 100 units – 4.00/unit
For units above 150 – 6.50/unit
You can use conditional statements.
*/
 $consum = 130; 
 $result = 0;

 if($consum <= 50 ){
   $result = $consum * 3.50; 
 }elseif($consum > 50 && $consum <= 150){
     $firstUnits = 50 * 3.50; 
     $secondUnits = ($consum-50) * 4; 

     $result = $firstUnits + $secondUnits; 
 }else{
     $firstUnits  = 50 * 3.50; 
     $secondUnits = 100 * 4; 
     $thirdUnits = ($consum-150) * 6.5; 
     $result = $firstUnits + $secondUnits + $thirdUnits;  
 }

 echo $result;
 ?>