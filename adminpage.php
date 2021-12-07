<?php 



?>



<html>
    <head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .addproduct{float:right;
    margin-right:10px;
    
    }
   
    .row{margin-top:60px;       
    }
    .filter{
        margin-top:20px;
              margin-right:120px;
             margin-left:220px;
    }
    .col-md-2{
        font-size:20px;
       
        
    }
    .product_image{
        width:100px;
        height:auto;
    }
    .table a{color:black;}
   .filter_image{
        height:30px;
        width:60px;
        }
  </style>
    </head>
<body>





<div class="header">
    
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LoyaltyApp1
        </a>
          <a href='adminlogout.php' >Logout</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">A</a>
          <a class="dropdown-item" href="#">B</a>
           <a class="dropdown-item" href="#">C</a>
          <a class="dropdown-item" href="#">D</a>
            <a class="dropdown-item" href="#">E</a>
          <a class="dropdown-item" href="#">F</a>
        </div>
      </li>
     
    </ul>
      <form action=''  method='post''>
<input type="text"  name="str"required value="<?php
  echo (isset($_POST['str']))?htmlspecialchars($_POST['str']) : ''; ?>"/>
<input type="submit" name="submit" value="search">


</form>
      
      
<?php
include 'connection.php';

if(isset($_POST['submit'])){
  $str=mysqli_real_escape_string($conn,$_POST['str']);
  
  $sql="select * from product where CONCAT(vendor,inventory) like '%".$_POST['str']."%' "  ;
  //var_dump($sql);exit;
  $result=mysqli_query($conn,$sql);
  
  if(mysqli_num_rows($result)>0){
      while($rows=mysqli_fetch_assoc($result)){
          
          echo $rows['vendor']."<br>";
           echo $rows['inventory']."<br>";
          
      }
  }else{
      echo "no data found";
  }
}

?>
<!--    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" >
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
  </div>
</nav>
 
</div>
       
    
    <div class="content"></div>
   
    <div class="addproduct">
             

<select name="ventor" id="ventor">
     <option value="LoyaltyApp1">Product ventor</option>
  <option value="LoyaltyApp1">LoyaltyApp1</option>
  <option value="Field notes">Field Notes</option>
  <option value="Snow peak">Snow peak</option>
  <option value="united by blue">United by value</option>
</select>

<select name="type" id="type">
     <option value="LoyaltyApp1">Product type</option>
  <option value="Womens">Womens</option>
  <option value="Bag ">Bag</option>
  <option value="Accessories">Accessories</option>
  <option value="mens">mens</option>
</select>
<select name="type" id="type">
     <option value="LoyaltyApp1">Product Status</option>
  <option value="active">Active</option>
  <option value="draft ">Draft</option>
  <option value="archieved">Archieved</option>
 
</select>

        <a href="addproduct.php">add to product</a>
   
    </div>
    <div class="filter">
<!--         <form class="form-inline my-2 my-lg-0" action="" method="Post">
      <input class="form-control mr-sm-2" type="search" placeholder="filter product" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
        <form action=''  method='post''>
<input type="text"  name="str"required value="<?php
  echo (isset($_POST['str']))?htmlspecialchars($_POST['str']) : ''; ?>"/>
<input type="submit" name="submit" value="filter">


</form>

      
<?php
include 'connection.php';

if(isset($_POST['submit'])){
  $str=mysqli_real_escape_string($conn,$_POST['str']);
  
  $sql="select * from product where CONCAT(product_url,type,vendor,inventory,status) like '%".$_POST['str']."%' "  ;
  //var_dump($sql);exit;
  $result=mysqli_query($conn,$sql);
  
  if(mysqli_num_rows($result)>0){
      while($rows=mysqli_fetch_assoc($result)){
          ?>
      
        <td> <img  class="filter_image" src="<?php echo $rows['product_url']." ";?>"></td>
        <td > <?php  echo $rows['vendor']." ";?><td>
         <td> <?php echo $rows['inventory']." ";?></td>
         <td><?php  echo $rows['status']." ";?></td>
        <td><?php   echo $rows['type']."<br>";?></td>
  <?php         
          
      }
  }else{
      echo "no data found";
  }
}

?>

    </div>
    
    <div class="row">
        <div class="col-md-2 pl-4">
        
          
         <a href="#" >Home</a><br>   
         <a href="#">Order</a><br>   
         <a href="#">Product</a><br>   
         <a href="#">Customer</a><br>   
             
        
        
        
    </div>
    <div class="col-md-10">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Product</th>
      <th scope="col">Status</th>
      <th scope="col">Inventory</th>
      <th scope="col">Type</th>
      <th scope="col">Vendor</th>
    
    </tr>
  </thead>
  <tbody>
       <?php

   include"Loyaltyclass.php";
     $obj= new Loyal();
$obj->selectdata('product',"*");
$result=$obj->sql;
   ?>   <?php
    while($rows=mysqli_fetch_array($result)){
        
        ?>
                       
    <tr>
      <th scope="row"><a href="productupdate.php"><?php echo $rows['id'];?></a></th>
      <td><a href="productupdate.php"><img class="product_image" src="<?php echo $rows['product_url'];?>"></a></td>
      <td> <a href="productupdate.php"><?php echo  $rows['status'];?></a></td>
      <td><a href="productupdate.php"><?php echo $rows['inventory'];?></a></td>
      <td><a href="productupdate.php"><?php echo  $rows['type'];?></a></td>
      <td><a href="productupdate.php"><?php echo  $rows['vendor'];?></a></td>
    </tr>
<?php 
    }
?>
    
  </tbody>
</table>
    </div>
    
    </div>
    
</div>
    </body>
    </html>  