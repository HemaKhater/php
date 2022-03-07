<!doctype html>
<html>
    <title>Calculate Electricity Bill</title>

<?php
 $unit1=50;
 $unit2=100;
 $unit3=150;
 $first_unit=3.50;
 $second_unit=4;
 $third_unit=6.50;

 if($unit1==500){
     $bill= $unit1*$first_unit;
     echo $bill;
 }

 elseif($unit2==1000){
     $bill=$unit2*$second_unit;
     echo $bill;
 }
 elseif($unit3==150){
     $bill=$unit3*$third_unit;
     echo $bill;
 }
 else{
     echo "the opartion is failed";
 }
 ?>