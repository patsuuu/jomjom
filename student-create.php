<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Kabsu</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Employee Add 
                            <a href="indexxx.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>First Name</label>
                                <input type="text" name="fname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Middle Name</label>
                                <input type="text" name="mname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Last Name</label>
                                <input type="text" name="lname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Remarks</label>
                                <input type="text" name="remarks" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Status</label>
                                <input type="text" name="status" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
