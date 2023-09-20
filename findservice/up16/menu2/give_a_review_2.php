<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db_1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tbl_pending_signup WHERE email = '$_SESSION[review_for_user_1]' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title Page-->
    <title>Post a review form</title>

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
                        <li class="nav_links_li"><a href="../menu/find_services.php">Find Services</a></li>
                        <li class="nav_links_li"><a href="../menu/post_a_service.php">Post a service</a></li>
                        <li class="nav_links_li"><a href="../menu/about.php">About</a></li>
                        <li class="nav_links_li"><a href="../menu/contact_us.php">Contact us</a></li>
                    </ul>
                </div>
                <div class="nav">
                    <ul class="nav_links_ul my-account">
                        <li class="nav_links_li"><a href="../menu/my_account_1.php">My account</a></li>
                    </ul>
                </div>
            </div>
            <!-- Nav bar finished -->



            <div>
                <h1 style="text-align: center; padding:10px 0 10px 0; color: grey;">Post a review form</h1>
            </div>


            <!-- form start -->
            <div class="bg-whiteysmoke p-t-130 p-b-10 font-poppins">
                <div class="wrapper wrapper--w680">
                    <div class="card card-4">
                        <div class="card-body">
                            <p><i>Field marked with red <b style="color: red;">*</b> sign must fillup</i></p><br><br>
                            <?php

                            echo '<p>Giving review to ' . $row['fullName'] . '</p><br>
    <p><i>Email: ' . $_SESSION["review_for_user_1"] . '</i></p><br>
    <p>Reviewing by <i>Email: ' . $_SESSION["logged_in_user"] . '</i></p><br><br>';
                            mysqli_close($conn);
                            ?>

                            <!-- <form action="sign-up.php" method="POST"> -->
                            <form action="give_a_review_3.php" method="POST">
                                <div class="input-group">
                                    <label class="label"><i style="color: red;">*</i> Review</label>
                                    <input class="input--style-4" type="text" name="review" required>
                                </div>

                                <div class="input-group">
                                    <label class="label"><i style="color: red;">*</i> Rating</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="rating_1">
                                            <!-- <option disabled="disabled" selected="selected" value="None">Choose option</option> -->
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>


                                <div class="p-t-15">
                                    <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                                    <li class="nav_links_li"><a href="../index.html">Return to home</a></li>
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