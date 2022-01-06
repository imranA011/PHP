<?php

include 'function.php';

$stdCrudAdmin = new StdCrudApp();

$stdList= $stdCrudAdmin->displayData();

if(isset($_GET['status'])){
     if ($_GET['status']='edit'){
          $id = $_GET['id'];
          $editData = $stdCrudAdmin->displayDataById($id);
     }  
}

if (isset($_POST['u_submit'])){
     $updateMsg = $stdCrudAdmin->updateData($_POST);

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

     <title>Student CRUD App</title>
</head>

<body>

     <div class="container">
          <div class="row justify-content-center">
               <div class="col-6 mt-5 bg-secondary">
                    <h2 class="mb-2 ps-4 pt-3 text-warning">Student Form</h2>
                    <form class="p-4 shadow" action="" method="POST">
                         <div class="mb-3">
                              <label for="roll" class="form-label">Roll No</label>
                              <input type="number" class="form-control" name="u_roll" value="<?php echo $editData['roll']; ?>">
                         </div>
                         <div class="mb-3">
                              <label for="name" class="form-label">Name</label>
                              <input type="text" class="form-control" name="u_name" value="<?php echo $editData['name']; ?>">
                         </div>
                         <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control" name="u_email" value="<?php echo $editData['email']; ?>">
                         </div>  
                         <input type="hidden" name="u_id" value="<?php echo $editData['id']; ?>">                                            
                         <input type="submit" class="btn btn-success" name="u_submit" value="Update Information"> 
                          <?php if (isset($updateMsg)){echo $updateMsg;} ?>                       
                    </form>
               </div>
          </div>
     </div>

   




     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>