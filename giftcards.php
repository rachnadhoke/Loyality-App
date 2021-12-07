<?php include"Signup.php"  ?>

<?php session_start();?>
<html>
    <head>
        <style>
            
            .column{
                
                margin-left:400px;
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
       
      <a class="cart" href="mycart">  <i class="fa fa-shopping-cart" aria-hidden="true" "style=margin-right:150px;">mycart(<?php echo $count;?> )</i></a>
         
      </p>
        
        <h1>    <a href="loyaltyapp" >Loyalty App</a> </h1>
                 <a href="index.php" class="giftlink">Home</a>>gift cards<br><br>
            
            <a href="index.php">Home</a><br><br>
              <a href="catlog.php">Catalog</a><br><br>
                <a href="aboutus.php">About Us</a><br><br>
                  <a href="giftcards.php">Gift Cards</a><br><br>
            <a href="newproducts.php">New Products</a><br><br>
        
            <h1 class='Fproduct' >Gift Cards</h1><br><br>
      
          <div class="column">
      <form action="manage_cart.php" method="post">  
     <div class="card" >
  
  <div class="container">
    <h4><b>Holiday Gift Card</b></h4>
    <img src="no_image.gif" name='product' alt="stool" style="width:50%">
    <p> price:$18</p>
     
    
    <button type="submit" name="add_to_cart">add to cart</button> 
    <a href="buy.php">Buy it now</a>
    <input type="hidden" name="item_name" value="Holiday Gift Card">
     <input type="hidden" name="price" value="$18">
   <input type="hidden" name="product"  value="" >
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
