<?php
session_start();
// $_SESSION["logged_in_user"] = "190122.cse@student.just.edu.bd";
// echo "SESSION CREATED named " . $_SESSION["logged_in_user"];

if (isset($_SESSION["logged_in_user"])) {
    echo '<script> window.location.href="http://localhost/up16/menu/my_account_3.php"; </script>';
}
else {
    session_destroy();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

    <!--For navbar - header - prefooter - footer-->
    <link rel="stylesheet" href="../css/styles.css">
    <!--For awesome font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- For log in form -->
    <link rel="stylesheet" href="../css/logInSignUp.css">


</head>

<body>
    <!-- Nav bar started -->
    <div class="container">
        <div class="nav_logo">
            <img class="logo" src="../images/logo.png" alt="logo">
        </div>
        <div class="nav">
            <ul class="nav_links_ul">
                <li class="nav_links_li"><a href="../index.html">Home</a></li>
                <li class="nav_links_li"><a href="find_services.php">Find Services</a></li>
                <li class="nav_links_li"><a href="post_a_service.php">Post a service</a></li>
                <li class="nav_links_li"><a href="about.php">About</a></li>
                <li class="nav_links_li"><a href="contact_us.php">Contact us</a></li>
            </ul>
        </div>
        <div class="nav">
            <ul class="nav_links_ul my-account">
                <li class="nav_links_li"><a href="my_account_1.php">My account</a></li>
            </ul>
        </div>
    </div>
    <!-- Nav bar finished -->


    <div>
        <h1 style="text-align: center; padding:10px 0 10px 0; color: grey;">Log in</h1>
    </div>

<?php
if (isset($_SESSION["wrong_pass_1"])) {
    if ($_SESSION["wrong_pass_1"] == 1) {
        echo '<div>
        <h1 style="text-align: center; padding:10px 0 10px 0; color: red; font-size: 20px">Wrong login information. Try again</h1>
    </div>';
        $_SESSION["wrong_pass_1"] = 0;
    }
}

else if (isset($_SESSION["pending_signup_user"])) {
    if ($_SESSION["pending_signup_user"] == 1) {
        echo '<div>
        <h1 style="text-align: center; padding:10px 0 10px 0; color: red; font-size: 20px">Account is still in pending list. Try again later.</h1>
    </div>';
        $_SESSION["pending_signup_user"] = 0;
    }
}

?>
    

    <!-- form start -->
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Log in</h2>

                    <form action="my_account_2.php" method="POST">
                        <div class="input-group">
                            <label class="label">Email</label>
                            <input class="input--style-4" type="email" name="email" required>
                        </div>
                        <div class="input-group">
                            <label class="label">Password</label>
                            <input class="input--style-4" type="password" name="password" required>
                        </div>
                        <div class="input-group">
                            <p> <a href="contact_us.php">Forgot password?</a></p>
                        </div>

                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Log in</button>
                            <li class="nav_links_li"><a href="sign-up.php">Sign up</a></li>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- form finish -->


    <!-- foooter -->
    <footer class="footer-1">
        <p>Copyright
            <script>document.write(new Date().getFullYear())</script> &copy; <a href="#">Find Service</a>
        </p>
    </footer>
    <!-- End of Footer-->




    <!-- script for log in form start -->
    <!-- Jquery JS-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../vendor/select2/select2.min.js"></script>
    <script src="../vendor/datepicker/moment.min.js"></script>
    <script src="../vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../js/global.js"></script>

    <!-- script for log in form finish -->

</body>

</html>

