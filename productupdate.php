
<html>
    <head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
/*      .button{
          width:20px;
          height:5px;
      }*/
.organization{
    font-size:30px;
    margin-top:100px;
}
.col-md-2{
   padding:0px;
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
         
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">A</a>
          <a class="dropdown-item" href="#">B</a>
           <a class="dropdown-item" href="#">C</a>
          <a class="dropdown-item" href="#">D</a>
            <a class="dropdown-item" href="#">E</a>
          <a class="dropdown-item" href="#">F</a>
        </div>
      </li> 
      <a href='adminlogout.php'>Log out</a>
    </ul>
      
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
 
</div>
    <?php
include 'Loyaltyclass.php';
$id=$_GET['id'];
$obj=new Loyal();

$obj->selectdata('product',"*","id='$id'");

$result=$obj->sql;

$data=mysqli_fetch_assoc($result);

?>
     <form action="" method="GET">  
    <div class="row">
        <div class="col-md-2 pl-4" >
        
        
         <a href="#" >Home</a><br>   
         <a href="#">Order</a><br>   
         <a href="#">Product</a><br>   
         <a href="#">Customer</a><br>   

    </div>
        
   <div class="col-md-6">
       <h3>   Add Product</h3><br>
       <div class='title'>
         <label>  Id</label> <br>
         <input type='number' name='id'required value="<?php echo$data['id'];   ?>">  
       </div>  <br>
       
        <div class='description'>
         <label>  Description</label> <br>
        
<textarea id="description" name="description"required rows="4" cols="50" value='<?php echo$data['description'];   ?>'>
  
  </textarea> 
       </div>  <br>
       <div class='Media'>
         
  <label>Media</label>
  <form action="#">
  <input type="file" id="myfile" name="product_url" required multiple value='<?php echo$data['product_url'];   ?>'><br><br>
 <button type="submit" name="upload" value="upload" >
 </form>
       </div><br>  
       <div>
 <label>Price</label><br>
 <input type="number" name="price"required value='<?php echo$data['price'];   ?>' >

       </div><br>
       <div>
           <label>Inventory</label><br>
 <input type="text" name="inventory"required  value='<?php echo $data['inventory'];   ?>'>
           
       </div><br>
        <div>
           <label>Weight</label><br>
 <input type="number" name="weight"required value='<?php echo$data['weight'];   ?>'>
           
       </div><br>
        <div>
 <label>Quantity</label><br>
 <input type="number" name="quantity"required min="0" max="10" value='<?php echo$data['quantity'];   ?>' >

       </div><br>
      </div>
      <div class="col-md-4">
          
     <div class="Organization">
         <label>Organization</label><br>
         <label style="font-size:20px" > Vendor</label><br>
         <select style="font-size:20px" name="vendor"required value='<?php echo$data['vendor'];   ?>'>
             <option>United by value</option>
              <option>Field notes</option>
               <option>Red wing</option>
                <option>Snow peak</option>
                 <option>LoyaltyApp1</option>
         </select>
      
     </div><br><br>
     <div class="status">
        
         <label style="font-size:20px" > Product Status</label><br>
         <select style="font-size:20px" name="status"required value='<?php echo$data['status'];   ?>'>
             <option>draft</option>
              <option>active</option>
               
         </select>
      
     </div><br><br>
      <div>
         <label style="font-size:30px" >Product type</label><br>
         <label style="font-size:20px" > Standard</label><br>
         <select style="font-size:20px" name="type"required value='<?php echo$data['type'];   ?>' >
             <option>Accesssories</option>
              <option>hardware</option> 
               <option>Mens </option>
                <option>Womens</option>
                 <option>Bag</option>
                 <option>Outdoor</option>
              <option>Electronics</option>
               <option>Mobiles </option>
                <option>Laptop</option>
                
         </select>
      
      </div><br>
     <div style="font-size:25px;">
         <button type="submit" name="submit" value="submit">update</button>
     </div>
      </div>
    
 </form>
    </body>
    </html>
 

    
    <?php
       if (isset($_POST['submit'])){
     $id=$_POST['id'];  
    // print_r($id);exit;
    $description=$_POST['description'];
    $product_url=$_POST['product_url'];
    $price=$_POST['price'];
    $inventory=$_POST['inventory'];
    $weight=$_POST['weight'];
    $quantity=$_POST['quantity'];
     $vendor=$_POST['vendor'];
    $status=$_POST['status'];
    $type=$_POST['type'];
    
    $obj=new Loyal();
    
    $obj->updatedata('product',['id'=>$id,'description'=>$description,'product_url'=>$product_url,'price'=>$price,'inventory'=>$inventory,'weight'=>$weight,'quantity'=>$quantity,'vendor'=>$vendor,'status'=>$status,'type'=>$type],"id=$id");
  print_r($obj);exit;
    if($obj==true){
    //$result=mysqli_query($conn,$sql);
    header('location:adminpage.php');
}
}
    ?>
    