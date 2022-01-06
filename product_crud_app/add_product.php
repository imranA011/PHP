<?php

include 'db_connect.php';

if(isset($_POST['add_btn'])){
     $code = $_POST['p_code'];
     $name = $_POST['p_name'];
     $price = $_POST['p_price'];

     $sql = "INSERT INTO products (code, name, price) VALUES ('$code', '$name', $price)";
     $result = mysqli_query($conn, $sql);
     if($result){
          header("Location: display_product.php");
        
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

     <title>Add Product</title>
</head>

<body>

     <div class="container">
          <div class="row justify-content-center">
               <div class="col-6 mt-5 bg-secondary">
                    <h2 class="mb-2 ps-4 pt-3 text-warning">Product Details</h2>
                    <form class="p-4 shadow" action="" method="POST">
                         <div class="mb-3">
                              <label  class="form-label">Product Code </label>
                              <input type="text" class="form-control" name="p_code">
                         </div>
                         <div class="mb-3">
                              <label  class="form-label"> Product Name</label>
                              <input type="text" class="form-control" name="p_name">
                         </div>
                         <div class="mb-3">
                              <label class="form-label">Product Price</label>
                              <input type="number" class="form-control" name="p_price">
                         </div>                                                 
                         <input type="submit" class="btn btn-success" name="add_btn" value="Add Product"> 
                   </form>
               </div>
          </div>
     </div>
     
 

     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>