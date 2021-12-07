<?php
include"Loyaltyclass.php";
if (isset($_POST['submit'])){
    
$status=$_POST['status'];   
$description=$_POST['description'];  
$product_url=$_POST['product_url'];  
$price=$_POST['price'];  
$inventory=$_POST['inventory'];  
$quantity=$_POST['quantity'];  
$weight=$_POST['weight'];  
$vendor=$_POST['vendor'];  
$type=$_POST['type'];  
    
    
  $obj= new Loyal(); 
 $obj->insertdata('product',['status'=>$status,'description'=>$description,'product_url'=>$product_url,'price'=>$price,'inventory'=>$inventory,'quantity'=>$quantity,'weight'=>$weight,'vendor'=>$vendor,'type'=>$type]);
// echo"<pre>";
// print_r($obj);exit;
//echo"</pre>";
//   
    if($obj>0){
         header('location:adminpage.php');
     }else{
         echo"something went wrong";
   }
// 
    }   
    
    





?>