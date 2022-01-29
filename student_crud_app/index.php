<?php

include "classes/Student.php";

$student = new Student();

$search ='';
if(isset($_POST['search-btn'])){
    $search = $_POST['search'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Profile - Crud App</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>

    <h2 href='index.php' class="bg-primary text-center py-2"><a class="text-light text-decoration-none" href="index.php">Student Profile</a></h2>
    <div class="container">
        <!-- Search & Button -->
        <div class="row py-3 mb-2">
            <div class="col-10">
                <form action="" method="POST">
                    <div class="input-group">
                        <input type="submit" class="btn btn-primary px-4" name="search-btn" value="Search">
                        <input type="text" class="form-control" name="search" placeholder="Find result by name or gender or location">
                    </div>
                </form>
            </div>
            <div class="col-2 text-center">
                <a href="add-user.php" type="button" class="btn btn-primary px-5">Add New</a>
            </div>
        </div>
        <hr>

        <?php if (isset($deleteMsg)) {echo $deleteMsg;} ?>

        <table class="table table-bordered table-hover text-center align-middle">

            <?php $studentsData = $student->displayAllUser($search); ?>

            <thead class="table-dark text-light ">
                <tr>
                    <th>Sl No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Phone No</th>
                    <th>Location</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <!-- display all data in the table -->
                <?php

                    $x = 1;
                    foreach ($studentsData as $studentData) :

                ?>
                    <tr>
                        <td><?= $x; $x++ ?></td>
                        <td><?= $studentData['s_name']; ?></td>
                        <td><?= $studentData['s_email']; ?></td>
                        <td><?= $studentData['s_gender']; ?></td>
                        <td><?= $studentData['s_age']; ?></td>
                        <td><?= $studentData['s_phone']; ?></td>
                        <td><?= $studentData['s_location']; ?></td>
                        <td><img class="img-thumbnail" style="width:150px; height:100px"
                        src="assets/img/<?= $studentData['s_photo']; ?>" alt=""></td>
                        <td class="d-flex justify-content-evenly align-items-center" style="height:110px">
                            <a href="view.php?status=view&&id=<?= $studentData['s_id']; ?>"><i class="fas fa-eye text-primary"></i></a>
                            <a href="edit.php?status=edit&&id=<?= $studentData['s_id']; ?>"><i class="fas fa-edit text-warning px-3"></i></a>
                            <a href="delete.php?status=delete&&id=<?= $studentData['s_id']; ?>" onclick="return confirm('Are You Sure?')"><i class="fas fa-trash-alt text-danger"></i></a>
                        </td>
                    </tr>

                <?php endforeach; ?>

            </tbody>
        </table>

        <!-- Pagination -->
        <nav aria-label="Page navigation example" id="pagination" class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>

    <!-- JQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>


</body>

</html>
