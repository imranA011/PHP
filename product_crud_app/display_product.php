<?php

include 'db_connect.php';


?>

<!doctype html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

     <title>Product List</title>
</head>

<body>

     <div class="container pt-5">
          <div class="row justify-content-center text-center">
               <div class="col">
               <h2 class="text-secondary">Product List</h2>
               <h2 class="mt-2 mb-5"><a class="btn btn-primary" href="add_product.php">Upload Product</a></h2>
                    <table class="table table-bordered align-middle text-center">
                         <thead>
                              <tr>
                                   <th class="col-1">Sl</th>
                                   <th class="col-2">Product Code</th>
                                   <th class="col-4">Product Name</th>
                                   <th class="col-2">Product Price</th>
                                   <th class="col-3">Action</th>
                              </tr>
                         </thead>
                         <tbody>
                              <?php
                                   $sql = "SELECT * FROM products";
                                   $result = mysqli_query($conn, $sql);
                                   if ($result){ 
                                        while ($showProduct = mysqli_fetch_assoc($result)){
                                             $id= $showProduct['id'];
                                             $code = $showProduct['code'];
                                             $name = $showProduct['name'];
                                             $price =$showProduct['price'];

                              ?>                                     
                                        <tr>
                                             <td><?php echo $id; ?></td>
                                             <td><?php echo $code; ?></td>
                                             <td><?php echo $name; ?></td>
                                             <td><?php echo $price; ?></td>
                                             <td>
                                             <a class="btn btn-primary" href="edit_product.php?editid=<?php echo $id; ?>">Edit</a>
                                             <a class="btn btn-danger" href="delete_product.php?deleteid=<?php echo $id; ?>">Delete</a>
                                             </td>
                                        </tr>
                              <?php }} ?>                            
                         </tbody>
                    </table>
               </div>
          </div>
     </div>




     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>