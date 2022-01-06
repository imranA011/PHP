<?php

include 'db_connect.php';

if(isset($_GET['editid'])){
     $id = $_GET['editid'];
     $sql = "SELECT * FROM products WHERE id=$id";
     $result = mysqli_query($conn, $sql);
     if($result){         
          $rtnData = mysqli_fetch_assoc($result);
          
          $code = $rtnData['code'];
          $name = $rtnData['name'];
          // $price = $rtnData['price'];
     }

     if(isset($_POST['update_btn'])){
          $code = $_POST['p_code'];
          $name = $_POST['p_name'];
          $price = $_POST['p_price'];
      
          $sql = "UPDATE products SET  id=$id, code='$code', name='$name', price=$price WHERE id=$id";
          $result = mysqli_query($conn, $sql);
          if($result){
          header("Location: display_product.php");
         }
      }
}
     

?>

<!doctype html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

     <title>Update Product</title>
</head>

<body>

     <div class="container">
          <div class="row justify-content-center">
               <div class="col-6 mt-5 bg-secondary">
                    <h2 class="mb-2 ps-4 pt-3 text-warning">Product Details</h2>
                    <form class="p-4 shadow" action="" method="POST">
                         <div class="mb-3">
                              <label  class="form-label">Product Code </label>
                              <input type="text" class="form-control" name="p_code" value="<?php if(isset($code)) {echo $code;}?>">
                         </div>
                         <div class="mb-3">
                              <label  class="form-label"> Product Name</label>
                              <input type="text" class="form-control" name="p_name" value="<?php if(isset($name)) {echo $name;}?>">
                         </div>
                         <div class="mb-3">
                              <label class="form-label">Product Price</label>
                              <input type="number" class="form-control" name="p_price" value="<?php echo $rtnData['price'];?>">
                         </div>                                                 
                         <input type="submit" class="btn btn-success" name="update_btn" value="Update Product">
                   </form>
               </div>
          </div>
     </div>
     
 

     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>