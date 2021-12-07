<?php
$server="localhost";
$username="root";
$password="";
  
$db="loyalty";

$conn= mysqli_connect($server,$username,$password,$db);
if(!$conn){
    
    echo"no connection";
}
        
?>