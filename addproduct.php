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
     <form action="insertproduct.php" method="post">  
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
         <label>  Title</label> <br>
         <input type='text' name='title'required value=''>  
       </div>  <br>
       
        <div class='description'>
         <label>  Description</label> <br>
        
<textarea id="description" name="description"required rows="4" cols="50" value=''>
  
  </textarea> 
       </div>  <br>
       <div class='Media'>
         
  <label>Media</label>
  <form action="#">
  <input type="file" id="myfile" name="product_url" required multiple value=''><br><br>
 <button type="submit" name="upload" value="upload" >
 </form>
       </div><br>  
       <div>
 <label>Price</label><br>
 <input type="number" name="price"required value='' >

       </div><br>
       <div>
           <label>Inventory</label><br>
 <input type="text" name="inventory"required  value=''>
           
       </div><br>
        <div>
           <label>Weight</label><br>
 <input type="number" name="weight"required value='weight'>
           
       </div><br>
        <div>
 <label>Quantity</label><br>
 <input type="number" name="quantity"required min="0" max="10" value='' >

       </div><br>
      </div>
      <div class="col-md-4">
          
     <div class="Organization">
         <label>Organization</label><br>
         <label style="font-size:20px" > Vendor</label><br>
         <select style="font-size:20px" name="vendor"required value=''>
             <option>United by value</option>
              <option>Field notes</option>
               <option>Red wing</option>
                <option>Snow peak</option>
                 <option>LoyaltyApp1</option>
         </select>
      
     </div><br><br>
     <div class="status">
        
         <label style="font-size:20px" > Product Status</label><br>
         <select style="font-size:20px" name="status"required value=''>
             <option>draft</option>
              <option>active</option>
               
         </select>
      
     </div><br><br>
      <div>
         <label style="font-size:30px" >Product type</label><br>
         <label style="font-size:20px" > Standard</label><br>
         <select style="font-size:20px" name="type"required value='' >
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
         <button type="submit" name="submit" value="submit">save</button>
     </div>
      </div>
    
 </form>
    </body>
    </html>