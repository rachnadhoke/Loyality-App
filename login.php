
<?php //  include"signup.php"  ?>

<html>
    <head>
  
<!--       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">-->
              <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
        <style>
            .g-recaptcha{
                margin-right:-300px;
                margin-left:380px;
                margin-top:30px;
                size:10px;
            }
            .form{margin-top:-50px;}
            .button{margin-right:-230px;
                 margin-left:360px;
                 width:10%;
            margin-top:30px;}
            .login{margin-right:-230px;
                 margin-left:330px;
             margin-top:-40px;}
            .input{
                 margin-right:-230px;
                 margin-left:330px;
                 margin-top:30px;
                 margin-bottom:-10px;
                 width:30%;
                 
            }

            h1 { text-align:centre;}  
            body{ padding:40px;}
          a{ color:#2d2e2e;
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
       
      <a class="cart" href="#">  <i class="fa fa-shopping-cart" aria-hidden="true" "style=margin-right:150px;"></i></a>
         
      </p>
        
        <h1>    <a href="loyaltyapp" >Loyalty App</a> </h1>
                 <a href="index.php" class="giftlink">Home</a>>Account<br><br>
            
            <a href="index.php">Home</a><br><br>
              <a href="catlog.php">Catalog</a><br><br>
                <a href="aboutus.php">About Us</a><br><br>
                  <a href="giftcards.php">Gift Cards</a><br><br>
            <a href="newproducts.php">New Products</a><br><br>
        
            <form action="loginprocess.php" method="post" class="form">
        <div class="container">
             <label class="login" style="font-size:40px">Login</label> <br>
       <input type="email" name="Email"required placeholder="Email" class="input" /><br>
         <input type="password" name="Password"required placeholder="Password" class="input"/><br>
         <div class="g-recaptcha" data-sitekey="6LfT_pkcAAAAAMBI-4dVFeWkBjifak07uzp_JMKa"></div>
      <br/>
          <button type="submit" name="login" value="signin" style="font-size:20px" class="button" >signin</button><br>
          </div>
         </form>
            <h2>Links</h2>
            <a href="search">Search</a><br><br><br><br><br>
            <h5>Copyright © 2021,<a href="loyaltyapp" style="font-size:12px">LoyaltyApp1.</a>
            <a href="shopify" style="font-size:12px; margin:0;">Powered by Shopify</a>
            </h5>
        </div> 
    
    </body>
</html>
