<?php  
session_start();

if ($_SERVER['REQUEST_METHOD']=="POST"){
    
    if(isset($_POST['add_to_cart'])){
        
        if(isset($_POST['Remove_item'])){
           
            foreach($_SESSION['cart'] as $key=>$value)
          
            {
                if( $value[item_name]==$_GET['item_name']){
                 unset($_SESSION['cart'][$key]);

                    //$_SESSION['cart']=array_values($_SESSION['cart']);
                 
                }
                
            }
             
        }
        
        if(isset($_SESSION['cart'])){
            
       $myitems= array_column($_SESSION['cart'],'item_name');
       if(in_array($_POST['item_name'],$myitems)){
           echo"<script>alert('item already added');   
           window.location.href='index.php';
                    </script>";
       }else{
            
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'product'=>$_POST['product']) ;
             echo"<script>alert('item added');   
             window.location.href='index.php';
                    </script>";
            // print_r($_SESSION['cart']);exit;
       }
        }else{
           $_SESSION['cart'][0]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'product'=>$_POST['product']) ;
           echo"<script>alert('item added');   
             window.location.href='index.php';
                    </script>";
        //   print_r($_SESSION['cart']);exit;
            
            
        }
        
        
    }
    
    
    
}






?>