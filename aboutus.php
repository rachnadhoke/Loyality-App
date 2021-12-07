<?php include"Signup.php"  ?>

<?php session_start();

?>
<html>
    <head>
        <style>
              .column {
  float: right;
  margin:30px;
  width: 25%;
  padding: -10px;
  margin-top:240px;
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
       <a  href="">  <input type="text" placeholder="Search"> <i class="fa fa-search "> </i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         
         <a href="login.php" style="font-size:20px;">login</a>
       <?php 
       $count=0;
       if (isset($_SESSION['cart'])){
           
           $count=count($_SESSION['cart']);
       }
       
       
       
       ?>
      <a class="cart" href="mycart.php">  <i class="fa fa-shopping-cart" aria-hidden="true" "style=margin-right:150px;">mycart(<?php echo $count;?> )</i></a>
         
      </p>
               
  
      
  <div class="column">
    <img src="shirt.jpg" alt="Shirt" >
  </div>
  <div class="column">
    <img src="jacket.jpg" alt="jacket" >
  </div>
       
        
        <h1>    <a href="loyaltyapp" >Loyalty App</a> </h1>
                 <a href="index.php" class="giftlink">Home</a>>About Us<br><br>
            
            <a href="index.php">Home</a><br><br>
              <a href="catlog.php">Catalog</a><br><br>
                <a href="aboutus.php">About Us</a><br><br>
                                 <a href="giftcards.php">Gift Cards</a><br><br> 
                                 
                                 
            <a href="newproducts.php">New Products</a><br><br>
        
            <h1 class='Fproduct' >About Us</h1><br><br>
          
   

            <h2>Links</h2>
            <a href="search">Search</a><br><br><br><br><br>
            <h5>Copyright © 2021,<a href="loyaltyapp" style="font-size:12px">LoyaltyApp1.</a>
            <a href="shopify" style="font-size:12px; margin:0;">Powered by Shopify</a>
            </h5>
        </div> 
    
    </body>
</html>
