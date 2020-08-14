<?php
if (isset($_GET['register_msg']) && $_GET['register_msg'] == 1) {
    echo "<script>alert('Username already assigned!!!')</script>";
    echo "<script>window.location.assign('register.php')</script>";
}
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>OCS - Sign Up</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    </style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form id="form" class="splash-container" data-parsley-validate="" method="post" action="insert_users.php">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Registrations Form</h3>
                <p>Please enter your user information.</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="users_username" data-parsley-trigger="change" required="" placeholder="Username" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="users_email" data-parsley-trigger="change" required="" placeholder="E-mail" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1" type="password" required="" placeholder="Password" name="users_password">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" data-parsley-equalto="#pass1" type="password" required="" placeholder="Confirm password">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="tel" name="users_mobile" data-parsley-trigger="change" required="" placeholder="Mobile no." pattern="[0-9]{10}" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="users_address" data-parsley-trigger="change" required="" placeholder="Address" autocomplete="off">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">Register</button>
                </div>
            </div>
            <div class="card-footer bg-white">
                <p>Already member? <a href="login_users.php" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </form>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/parsley.js"></script>
    <script src="js/main-js.js"></script>
    <script>
    $('#form').parsley();
    </script>
</body>

 
</html>