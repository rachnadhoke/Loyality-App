<?php include"Signup.php"  ?>

<?php session_start();?>
<html>
    <head>
        <style>
            .card{width:50%;
            margin-left:350px;
            margin-top:-120;
            }
            
            
            
            .search{margin-top:50px;
    margin-bottom:-100px;
    margin-left:100px;
     margin-right:10px;
     float:left
                
            }                    
h2{margin-top:10px;
    margin-bottom:-100px;
    margin-left:100px;
     margin-right:10px;
     float:left;
}

            h1 { text-align:centre;}
            body{ padding:40px;}
          a{ color:black;
             margin:0px;
          }
   .aligncentre{   margin: 100px;
                size:70px;
   }
   .cart{   }
  .header{ padding:10px; 
         border:2px;       
  }
.indexsearch{margin-top:10px;}
 

 .Fproduct{
        padding:10px;
     margin-top:-220;
     margin-right:-120px;
      margin-left:250px;
      margin-bottom:300px;
 }
  .giftlink{
      margin:10px;
     padding:8px;
     margin-top:100;
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
       
      <a class="cart" href="mycart.php">  <i class="fa fa-shopping-cart" aria-hidden="true" "style=margin-right:150px;"> mycart(<?php echo $count;?> )</i></a>
         
      </p>
        
      
      
        <h1>    <a href="loyaltyapp" >Loyalty App</a> </h1>
                 
            
       
            <a href="index.php" class="giftlink">Home</a>>New Products<br><br>
                 <a href="index.php">Home</a><br><br>
              <a href="catlog.php">Catalog</a><br><br>
                <a href="aboutus.php">About Us</a><br><br>
                  <a href="giftcards.php">Gift Cards</a><br><br>
        <a href="newproducts.php">New Products</a><br><br>
        
            <h1 class='Fproduct' >New Products</h1><br><br>
           <div class="column" >
     <form action="manage_cart.php" method="post">  
     <div class="card" >
  
  <div class="container">
    <h4><b>Guaranteed</b></h4>
    <img src="t-shirt.jpg" name='product' alt="skin" style="width:50%">
    <p> price:$36</p>
     
    
    <button type="submit" name="add_to_cart">add to cart</button> 
    <a href="buy.php">Buy it now</a>
    <input type="hidden" name="item_name" value="Guaranteed">
     <input type="hidden" name="price" value="$36">
   <input type="hidden" name="product"  value="t-shirt.jpg" >
  </div>
</div>
            </form>
  </div>
     
    
            
            
          
            <h2 >Links</h2>
            <a href="search"  class="search">Search</a><br><br><br><br><br><br><br>
       
             

            <h5>Copyright © 2021,<a href="loyaltyapp" style="font-size:12px">LoyaltyApp1.</a>
            <a href="shopify" style="font-size:12px; margin:0;">Powered by Shopify</a>
            
            </h5>
 
        </div> 
    
    </body>
</html>
