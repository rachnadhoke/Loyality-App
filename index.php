<?php include"Signup.php"  ?>
 

<?php session_start();

?>
   
<html>
  <head>
      
  </head>
    <style>
    h1 {
       text-align:centre;
      }
    body{ 
      padding:40px;
    }
    a{ 
      color:black;
      margin:20px;
    }
    .aligncentre{  
      margin: 100px;
      size:70px;
    }
    .cart{  

     }
    .header{ 
    padding:10px; 
    border:2px;
    }
    .indexsearch{
    margin:0;
    }
    .indexproduct{
      margin-top:-160px;
      margin-right:130px;
      margin-left:300px;
    } 
    .Hproduct{
      margin-top:10px;
      margin-right:130px;
      margin-left:360px;
    }
    .Fproduct{
    margin-top:-100;
    margin-right:-100px;
    margin-left:200px;
    margin-bottom:200px;
    }

    </style>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    </head>
    <body>
      <div class="wrapper">
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
         
        <h1><a href="loyaltyapp" >Loyalty App</a> </h1><br><br>
            
            <a href="index.php">Home</a><br><br>
              <a href="catlog.php">Catalog</a><br><br>
                <a href="aboutus.php">About Us</a><br><br>
                  <a href="giftcards.php">Gift Cards</a><br><br>
                   <a href="newproducts.php">New Products</a><br><br>
           
                  <h1 class='Fproduct' >Featured collection</h1>
          
           
                  
            <a href="skinproduct.php"><img class='indexproduct' src="skinproduct.jpg" alt="centred image" class="image" width="400" height="300" usemap="#product"></a>
              <h1 class='Hproduct' >Talk about your brand</h1>
            <p class='Pproduct'>Use this text to share information about your brand with your customers. Describe a product, share announcements, or welcome customers to your store.</p>


            <h2>Links</h2>
            <a href="search">Search</a><br><br><br><br><br>
            <h5>Copyright © 2021,<a href="loyaltyapp" style="font-size:12px">LoyaltyApp1.</a>
            <a href="shopify" style="font-size:12px; margin:0;">Powered by Shopify</a>
            </h5>
        </div> 
      </div>
    </body>
</html>
