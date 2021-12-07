<?php
//
SESSION_START();
//
////if ($_SERVER['REQUEST_METHOD']=="POST"){
//   
//if(isset($_POST['Remove_item'])){
//          
//            foreach($_SESSION['cart'] as $key=>$value)
//          
// 
////     print_r($_POST);
//            {
//               
//                if($value['item_name']==$_POST['item_name']){
////                       print_r($value['item_name']);exit;
//                    unset($_SESSION['cart'][$key]);
//                   
//                 $_SESSION['cart']=array_values($_SESSION['cart']);  
//                     echo"<script>alert('item deleted');   
//           window.location.href='mycart.php';
//                    </script>";
//                }
//                
//            }
//             
//        }
////}
if(isset($_POST['Remove_item']))
  {
    foreach($_SESSION['cart'] as $key => $value)
        
    {
      if($value['item_name']==$value['item_name'])
         
      {
        unset($_SESSION['cart'][$key]);
        
        $_SESSION['cart']=array_values($_SESSION['cart']);
        //rearange 1-1 print
        echo"<script>
          alert('Item Removed');
          window.location.href='mycart.php';
        </script>";
      }
    }
  }
 
        ?>