
<html>
    <head>
        <style>
     .modal-header{background-color:red;
                  text-align:centre;           
     } 
   .label{width:100%}  
      
     .button{width:20%;}
     .signupform{width:100%}
        </style>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <form action="welcome.php" method="post">
<!-- Button to Open the Modal -->
<button type="button" class="btn btn-danger pull-right width-40px" data-toggle="modal" data-target="#myModal" >
  Sign Up
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">register</h4>
        <button type="button" class="close"  data-dismiss="modal">&times;</button><br><br>
       
      </div>

      <!-- Modal body -->
      <div class="modal-body " >
<!--          
           <a href="register.php">Register</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <a href="Login.php">Login</a><br><br>
           -->
    
   
         
        <form action="insert.php" method="POST">
                <label>First Name</label><br>
            <input class='signupform' type="text" name="First_Name"required/> <br>
            
                 <label>Last Name</label><br>
            <input class="signupform" type="text" name="Last_Name"required /><br>
            
             <label>Email</label><br>
            <input class="signupform" type="email" name="Email"required /><br>
            
                 <label>Password</label><br>
            <input class="signupform" type="password" name="Password"required /><br>
            
             <label>Birthday</label><br>
            <input class="signupform" type="date" name="Birthday"required/> <br><br>
           
          <button class="button btn btn-primary" type="submit" name="submit"required >register </button><br><br>
        </form>
          </div>

<!--
      <! model-footer 
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>-->

    </div>
  </div>
</div>
</form>
</body>
</html>