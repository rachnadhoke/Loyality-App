
<?php include"Signup.php"  ?>

<?php session_start();?>

<html>
    <head>
        <style>
                        .column {
                            margin:10px;
  float: left;
   margin-right:150px;
  margin:10px;
  width: 25%;
  padding: 8px;
  margin-bottom:50px;
  margin-top:-100px;
}
            h1 { text-align:centre;}  
            body{ padding:40px;}
          a{ color:black;
             margin:20px;
          }
   .aligncentre{   margin: 100px;
                size:70px;
   }
   .cart{   }
  .header{ padding:10px; 
         border:2px;
  }
.indexsearch{margin:0;}
 .indexproduct{margin-top:-160px;
               margin-right:130px;
            margin-left:300px;
 } 
 .Hproduct{margin-top:10px;
               margin-right:130px;
            margin-left:360px;}
 .Fproduct{
        padding:10px;
     margin-top:-250;
     margin-right:-120px;
      margin-left:250px;
      margin-bottom:250px;
 }
 .giftlink{
     padding:8px;
     margin-top:-250;
     margin-right:-1px;
      margin-left:250px;
      margin-bottom:250px;
 }
 
 
        </style>
        <meta charset="UTF-8">
        <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container">
        
           <p class='header'> 
       <a  href="#">  <input type="text" placeholder="Search"> <i class="fa fa-search "></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         
         <a href="login.php" style="font-size:20px;">login</a>
        <?php 
       $count=0;
       if (isset($_SESSION['cart'])){
           
           $count=count($_SESSION['cart']);
       }
       
       
       
       ?> 
      <a class="cart" href="mycart.php">  <i class="fa fa-shopping-cart" aria-hidden="true" "style=margin-right:150px;">  mycart(<?php echo $count;?>)</i></a>
         
      </p>
        
        <h1>    <a href="loyaltyapp" >Loyalty App</a> </h1>
                 <a href="index.php" class="giftlink">Home</a>>Products<br><br>
            
            <a href="index.php">Home</a><br><br>
              <a href="catlog.php">Catalog</a><br><br>
                <a href="aboutus.php">About Us</a><br><br>
                  <a href="giftcards.php">Gift Cards</a><br><br>
            <a href="newproducts.php">New Products</a><br><br>
        
            <h1 class='Fproduct' >Products</h1><br><br>
        
             <div class="row">
  
      
  <div class="column">
  <form action="manage_cart.php" method="post">  
     <div class="card" >
  
  <div class="container">
    <h4><b>5 Panel Camp Cap</b></h4>
    <img src="cap.jpg" name='product' alt="cap" style="width:50%">
    <p> price:$5</p>
     
    
    <button type="submit" name="add_to_cart">add to cart</button> 
    <a href="buy.php">Buy it now</a>
    <input type="hidden" name="item_name" value="5 Panel Camp Cap">
     <input type="hidden" name="price" value="5">
   <input type="hidden" name="product"  value="cap.jpg " >
  </div>
</div>
            </form>
  </div>
  <div class="column">
      <form action="manage_cart.php" method="post">  
     <div class="card" >
  
  <div class="container">
    <h4><b>Gertrude Cardigan</b></h4>
    <img src="shirt.jpg" name='product' alt="shirt" style="width:50%">
    <p> price:$108</p>
     
    
    <button type="submit" name="add_to_cart">add to cart</button> 
    <a href="buy.php">Buy it now</a>
    <input type="hidden" name="item_name" value="Gertrude Cardigan">
     <input type="hidden" name="price" value="108">
   <input type="hidden" name="product"  value="shirt.jpg " >
  </div>
</div>
            </form>
  </div>
 
          <div class="column">
      <form action="manage_cart.php" method="post">  
     <div class="card" >
  
  <div class="container">
    <h4><b>Cydney Plaid</b></h4>
    <img src="longsleeve_shirt.jpg" name='product' alt="shirt" style="width:50%">
    <p> price:$98</p>
     
    
    <button type="submit" name="add_to_cart">add to cart</button> 
    <a href="buy.php">Buy it now</a>
    <input type="hidden" name="item_name" value="Cydney Plaid">
     <input type="hidden" name="price" value="98">
   <input type="hidden" name="product"  value="longsleeve_shirt.jpg" >
  </div>skinproduct
</div>
            </form>
  </div>
          <div class="column">
      <form action="manage_cart.php" method="post">  
     <div class="card" >
  
  <div class="container">
    <h4><b>Duckworth Woolfill Jacket</b></h4>
    <img src="jacket.jpg" name='product' alt="jacket" style="width:50%">
    <p> price:$188</p>
     
    
    <button type="submit" name="add_to_cart">add to cart</button> <br>
    <a href="buy.php">Buy it now</a>
    <input type="hidden" name="item_name" value="Duckworth Woolfill Jacket">
     <input type="hidden" name="price" value="188">
   <input type="hidden" name="product"  value="jacket.jpg" >
  </div>
</div>
            </form>
  </div>
          
          <div class="column">
      <form action="manage_cart.php" method="post">  
     <div class="card" >
  
  <div class="container">
    <h4><b>Derby Tier Backpack</b></h4>
    <img src="bag.jpg" name='product' alt="bag" style="width:50%">
    <p> price:$148</p>
     
    
    <button type="submit" name="add_to_cart">add to cart</button> 
    <a href="buy.php">Buy it now</a>
    <input type="hidden" name="item_name" value="Derby Tier Backpack">
     <input type="hidden" name="price" value="148">
   <input type="hidden" name="product"  value="bag.jpg" >
  </div>
</div>
            </form>
  </div>
          <div class="column">
   <form action="manage_cart.php" method="post">  
     <div class="card" >
  
  <div class="container">
    <h4><b>Chevron</b></h4>
    <img src="shirt.jpg" name='product' alt="t-shirt" style="width:50%">
    <p> price:$36</p>
     
    
    <button type="submit" name="add_to_cart">add to cart</button> 
    <a href="buy.php">Buy it now</a>
    <input type="hidden" name="item_name" value="The Scout Skincare Kit">
     <input type="hidden" name="price" value="36">
   <input type="hidden" name="product"  value="chevron_cream_t-shirt.jpg" >
  </div>
</div>
            </form>
  </div>
                 
          <div class="column">
     <form action="manage_cart.php" method="post">  
     <div class="card" >
  
  <div class="container">
    <h4><b>Canvas Lunch Bag</b></h4>
    <img src="lunch_bag.jpg" name='product' alt="skin" style="width:50%">
    <p> price:$32</p>
     
    
    <button type="submit" name="add_to_cart">add to cart</button> 
    <a href="buy.php">Buy it now</a>
    <input type="hidden" name="item_name" value="Canvas Lunch Bag">
     <input type="hidden" name="price" value="32">
   <input type="hidden" name="product"  value="lunch_bag.jpg" >
  </div>
</div>
            </form>
  </div>
          <div class="column">
     <form action="manage_cart.php" method="post">  
     <div class="card" >
  
  <div class="container">
    <h4><b>Guaranteed</b></h4>
    <img src="t-shirt.jpg" name='product' alt="skin" style="width:50%">
    <p> price:$36</p>
     
    
    <button type="submit" name="add_to_cart">add to cart</button> 
    <a href="buy.php">Buy it now</a>
    <input type="hidden" name="item_name" value="Guaranteed">
     <input type="hidden" name="price" value="36">
   <input type="hidden" name="product"  value="t-shirt.jpg" >
  </div>
</div>
            </form>
  </div>
     
          <div class="column">
      <form action="manage_cart.php" method="post">  
     <div class="card" >
  
  <div class="container">
    <h4><b>Camp Stool</b></h4>
    <img src="stool.jpg" name='product' alt="stool" style="width:50%">
    <p> price:$78</p>
     
    
    <button type="submit" name="add_to_cart">add to cart</button> 
    <a href="buy.php">Buy it now</a>
    <input type="hidden" name="item_name" value="Camp Stool">
     <input type="hidden" name="price" value="78">
   <input type="hidden" name="product"  value="stool.jpg" >
  </div>
</div>
            </form>
  </div>     
          
</div>


       

            <h2>Links</h2>
            <a href="search">Search</a><br><br><br><br><br>
            <h5>Copyright © 2021,<a href="loyaltyapp" style="font-size:12px">LoyaltyApp1.</a>
            <a href="shopify" style="font-size:12px; margin:0;">Powered by Shopify</a>
            </h5>
        </div> 
    
    </body>
</html>
