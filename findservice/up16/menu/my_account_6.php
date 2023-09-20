<?php
session_start();

if (isset($_SESSION["logged_in_user"])) {
} else {
    echo '<script> window.location.href="http://localhost/up16/menu/my_account_1.php"; </script>';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title Page-->
    <title>Find Service | Contact Us</title>

    <!-- Icons font CSS-->
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">


    <!--For navbar-->
    <link rel="stylesheet" href="../css/styles.css">
    <!--For awesome font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- regForm CSS-->
    <link href="../css/logInSignUp.css" rel="stylesheet" media="all">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- for always down footer -->
    <link rel="stylesheet" href="../css/footer_dev_2.css">
</head>

<body>
    <div id="page-container">
        <div id="content-wrap">

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
                <h1 style="text-align: center; padding:10px 0 10px 0; color: #454545;">Account delete</h1>
            </div>



            <!-- form start -->
            <div class="p-t-130 p-b-10 font-poppins" style="background-color: aliceblue;">
                <div class="wrapper wrapper--w680">
                    <div class="card card-4" style="background-color: #0f401d26;">
                        <div class="card-body">
                            <!-- <h2 class="title">Sign up</h2> -->
                            <p><i style="color: red;">* must fillup</i></p><br><br>
                            <form action="my_account_7.php" method="POST">

                                <div class="input-group">
                                    <label class="label"><i style="color: red;">*</i> Are you sure to delete your account permanently ?</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="delete_1" required>
                                            <!-- <option disabled="disabled" selected="selected" value="None">Choose option</option> -->
                                            <option>No</option>
                                            <option>Yes</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>

                                <div class="input-group">
                                    <label class="label">Enter your password</label>
                                    <input class="input--style-4" type="text" name="password" required>
                                </div>

                                <div class="p-t-15">
                                    <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                                    <li class="nav_links_li"><a href="../index.html">Return to home</a></li>
                                    <!-- <button class="btn btn--radius-2 btn--radius" type="submit">Return to home</button> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- form finish -->

        </div>

        <!-- start of footer -->
        <footer id="footer">
            <p>Copyright
                <script>
                    document.write(new Date().getFullYear())
                </script> &copy; <a href="#">Find Service</a>
            </p>
        </footer>
    </div>

    <!-- End of Footer-->




    <!-- Jquery JS-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../vendor/select2/select2.min.js"></script>
    <script src="../vendor/datepicker/moment.min.js"></script>
    <script src="../vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../js/global.js"></script>


</body>

</html>
<!-- end document-->