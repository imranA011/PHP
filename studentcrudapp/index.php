<?php

include 'function.php';

$stdCrudAdmin = new StdCrudApp();

if (isset($_POST['submit'])){
     $stdCrudAdmin->addData($_POST);

}

$stdList= $stdCrudAdmin->displayData();

if(isset($_GET['status'])){
     if($_GET['status']= 'delete'){
          $deleteId = $_GET['id'];
          $deleteMsg = $stdCrudAdmin->deleteData($deleteId);
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

     <title>Student CRUD App</title>
</head>

<body>

     <div class="container">
          <div class="row justify-content-center">
               <div class="col-6 mt-5 bg-secondary">
                    <h2 class="mb-2 ps-4 pt-3 text-warning">Student Form</h2>
                    <form class="p-4 shadow" action="index.php" method="POST">
                         <div class="mb-3">
                              <label for="roll" class="form-label">Roll No</label>
                              <input type="number" class="form-control" name="roll" id="roll">
                         </div>
                         <div class="mb-3">
                              <label for="name" class="form-label">Name</label>
                              <input type="text" class="form-control" name="name" id="name">
                         </div>
                         <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control" name="email" id="email">
                         </div>                                               
                         <input type="submit" class="btn btn-success" name="submit" value="Add Information"> </br>
                         <?php if (isset($deleteMsg)){echo $deleteMsg;} ?>                                
                    </form>
               </div>
          </div>
     </div>

     <div class="container mt-5 pt-5">
          <div class="row justify-content-center">
               <div class="col">
                    <table class="table table-bordered align-middle text-center">
                         <thead>
                              <tr>
                                   <th class="col-1">Sl</th>
                                   <th class="col-2">Roll</th>
                                   <th class="col-3">Name</th>
                                   <th class="col-3">Email</th>
                                   <th class="col-3">Action</th>
                              </tr>
                         </thead>
                         <tbody>

                         <?php while($stdInfo = mysqli_fetch_assoc($stdList)){ ?>
                              
                            <tr>
                                   <td><?php echo $stdInfo['id']; ?> </td>
                                   <td><?php echo $stdInfo['roll']; ?> </td>
                                   <td><?php echo $stdInfo['name']; ?> </td>
                                   <td><?php echo $stdInfo['email']; ?> </td>                                 
                                   <td>
                                   <a class="btn btn-primary" href="edit.php?status=edit&&id=<?php echo $stdInfo['id']; ?>">Edit</a>
                                   <a class="btn btn-danger" href="?status=delete&&id=<?php echo $stdInfo['id']; ?>">Delete</a>
                                   </td>
                              </tr>

                         <?php }?>  
                                                    
                         </tbody>
                    </table>

               </div>
          </div>
     </div>




     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>