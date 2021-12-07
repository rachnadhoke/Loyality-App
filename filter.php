
<?php
//include'connection.php';
  include'Loyaltyclass.php'; 
  $obj=new loyal();

$obj->selectdata('product',"*");
$result=$obj->sql;
//var_dump($result);exit;
if(isset($_POST['submit'])){
  echo $str=mysqli_real_escape_string($conn,$_POST['str']);
   
  $sql="select * from product where CONCAT(product_url,status,vendor,inventory,type,description) like '%".$_POST['str']."%' "  ;

//  $result=mysqli_query($conn,$sql);
//   print($result);exit;
//  if(mysqli_num_rows($result)>0){

      while($rows=mysqli_fetch_assoc($result)){
          
          echo $rows['product_url']."<br>";
           echo $rows['status']."<br>";
            echo $rows['vendor']."<br>";
             echo $rows['inventory']."<br>";
              echo $rows['type']."<br>";
               echo $rows['description']."<br>";
          
      }
  }else{
      echo "no data found";
  }
//}


  ?>

