<?php  

$server = "localhost";
$dbname = "ecom";
$dbuser = "root";
$dbpassword= "";

 $con =   mysqli_connect($server,$dbuser,$dbpassword,$dbname);
 
 if(!$con){
     die('Error '.mysqli_connect_error() );
 }
   

?>