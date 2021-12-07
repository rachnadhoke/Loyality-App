<?php

session_start ();
include("connection.php"); 

//
//if(isset($_POST['login']))
//{
//$Email = $_POST['Email'];
//$Password = $_POST['Password'];
//
//if(isset($_POST['g-recaptcha-response'])){
//    $recaptcha=$_POST['g-recaptcha-response'];
//    
//    if(!$recaptcha){
//        echo'<script>alert(please go back and check recapcha box )</script>';
//        exit;
//    }
//    else{
//        $secret="6LfT_pkcAAAAAAmHl52BTXAGz1vyV21ui6MXHdm5";
//        $url="https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$recaptcha";
//        $response=file_get_contents($url);
//        $responsekeys=json_decode($response,true);
//        
//        if($responsekeys['success']){
//           echo $Email;
//           echo $Password;
//            echo'<script>alert("your data is submitted successfully" )</script>';
//        }else{
//             echo'<script>alert("something went wrong" )</script>';
//        }
//        //print_r($responsekeys);exit;
//    }
//}
//
//  include"Loyaltyclass.php";
//    $obj= new Loyalty();
//$obj->selectdata('signup',"*");
//$result=$obj->sql;
//    while($rows=mysqli_fetch_array($result)){
//        
//      
// //var_dump($rows);exit;
//if($rows==true)
//{
//	
//   	$_SESSION['user']=$_POST['Email'];
//        $_SESSION['password']=$_POST['Password'];
//        
//       
// 
//header("location:index.php");
//}   
// 
//
//else{
//    echo"invalid Email and password"; 
//  //  header("location:loginprocess.php?err=1");
//}
//
//}
//}


session_start ();
include("connection.php"); 


if(isset($_POST['login']))
{
$Email = $_POST['Email'];
$Password = $_POST['Password'];
//$User_type=$_POST['User_type'];

$res = mysqli_query($conn,"select* from signup where Email='$Email'AND Password='$Password'");
$result=mysqli_fetch_array($res);

if($result)
{
	$session['error']=$_POST["invalid email and password"];
   	$_SESSION['user']=$_POST['Email'];
        $_SESSION['password']=$_POST['Password'];
       header("location:index.php");
      }
else	
{
  echo$session['error'];
	header("location:login.php?err=1");
	
}


}

?>

