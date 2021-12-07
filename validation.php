
    <?php
       if (isset($_POST['submit'])){
     $id=$_POST['id'];  
    // print_r($id);exit;
    $description=$_POST['description'];
    $product_url=$_POST['product_url'];
    $price=$_POST['price'];
    $inventory=$_POST['inventory'];
    $weight=$_POST['weight'];
    $quantity=$_POST['quantity'];
     $vendor=$_POST['vendor'];
    $status=$_POST['status'];
    $type=$_POST['type'];
    
    $obj=new Loyal();
    
    $obj->updatedata('product',['id'=>$id,'description'=>$description,'product_url'=>$product_url,'price'=>$price,'inventory'=>$inventory,'weight'=>$weight,'quantity'=>$quantity,'vendor'=>$vendor,'status'=>$status,'type'=>$type],"id=$id");
  
    if($obj==true){
    //$result=mysqli_query($conn,$sql);
    header('location:adminpage.php');
}
}
    ?>
    