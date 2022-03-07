<?php
function nextLetter($ch) {

    $ch='a';
    $newcharacter=$ch;
    
    if (strlen($newcharacter) > 1) 
{
 $next_cha = $newcharacter[0];
 }
echo $newcharacter."\n";
}
   
   for ($ch='a'; $ch <'z'; $ch++) { 
       # code...
       echo $ch ."<br>";
   }
      
   echo nextLetter('a');

 ?>