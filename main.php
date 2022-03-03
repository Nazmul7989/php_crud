<?php

include ('connection.php');

$message = '';

if (isset($_GET['message'])) {
    $message = $_GET['message'];
}

$selectSQL = "SELECT * FROM `students`";
$runSelectSQL = mysqli_query($connection, $selectSQL);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/all.min.css">
    <link rel="stylesheet" href="asset/css/fontawesome.min.css">
    <title>Create Student</title>
</head>
<body>

<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-10">
            <div class="card px-4 py-4">

                <?php if ($message != false) { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><?php echo $message ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php }?>

                <table class="table table-bordered mt-3">
                    <h4 class="text-center">Student Info</h4>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php while ($student = mysqli_fetch_assoc($runSelectSQL)){?>
                        <tr>
                            <td><?php echo $student['name']?></td>
                            <td><?php echo $student['phone']?></td>
                            <td><?php echo $student['email']?></td>
                            <td>
                                <a href="" class="btn btn-success btn-sm"><i class="fa fa-pen"></i></a>
                                <form action="" class="d-inline ml-1">
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>

                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>

<script src="asset/js/jquery-3.5.1.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
<script src="asset/js/popper.min.js"></script>
<script src="asset/js/all.min.js"></script>
<script src="asset/js/fontawesome.min.js"></script>

</body>
</html>
