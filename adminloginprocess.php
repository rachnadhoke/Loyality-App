<?php

session_start ();
include("connection.php"); 


if(isset($_POST['login']))
{
$username = $_POST['username'];
$password = $_POST['password'];
///$User_type=$_POST['User_type'];

$res = mysqli_query($conn,"select * from admin where username='$username' AND password='$password'");
$result=mysqli_fetch_array($res);
 if($result)
{
	
      $_SESSION['user']=$username;
      //print_r($_SESSION);exit; 
      header("location:adminpage.php");
       
}
else{
    header('location:adminlogin.php');
}
}
?> 