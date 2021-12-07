
 <?php // include "Loyaltyclass.php";?>
       <?php
   if (isset($_POST['submit'])){
          $First_Name= $_POST['First_Name'];
           $Last_Name= $_POST['Last_Name'];
           $Email= $_POST['Email'];
            $Password= $_POST['Password'];
             $Birthday= $_POST['Birthday'];
         

          
     include "Loyaltyclass.php";
    $obj= new Loyal(); 
 $obj->insertdata('signup',['First_Name'=>$First_Name,'Last_Name'=>$Last_Name,'Email'=>$Email,'Password'=>$Password,'Birthday'=>$Birthday]);
// echo"<pre>";
// var_dump($obj);exit;
//echo"</pre>";
   
    if($obj>0){
         header('location:index.php');
     }else{
         echo"something went wrong";
   }
// 
    } 
      ?> 
    
   