<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title Page-->
    <title>Post a service form</title>

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
        <h1 style="text-align: center; padding:10px 0 10px 0; color: grey;">Advance search</h1>
    </div>

    <!-- form start -->
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <!-- <h2 class="title">Sign up</h2> -->
                    <!-- <p><i>Field marked with red <b style="color: red;">*</b> sign must fillup</i></p><br><br> -->

                    <form action="h_search_2.php" method="POST">
                        <!-- <form action="test3.php" method="POST"> -->

                        <div class="input-group">
                            <label class="label"> Name</label>
                            <input class="input--style-4" type="text" name="name">
                        </div>

                        <div class="input-group">
                            <label class="label">Service type</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="service_type">
                                    <!-- <option disabled="disabled" selected="selected" value="None">Choose option</option> -->
                                    <option value="">All</option>
                                    <option>Tutor</option>
                                    <option>Electrician</option>
                                    <option>Plumber</option>
                                    <option>Computer hardware technician</option>
                                    <option>Computer software developer</option>
                                    <option>Home wall painter</option>
                                    <option>Other</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <label class="label">Division</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="division1" id="division_1" onchange="ChangeDivisionList()">
                                    <!-- <option disabled="disabled" selected="selected" value="None">Choose option</option> -->
                                    <option value="">All</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Chittagong">Chittagong</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Khulna">Khulna</option>
                                    <option value="Barishal">Barishal</option>
                                    <option value="Sylhet">Sylhet</option>
                                    <option value="Rangpur">Rangpur</option>
                                    <option value="Mymensingh">Mymensingh</option>
                                </select>
                                <div class="select-dropdown"></div>
                                <p class="label"><br>Zilla<br></p>
                                <select name="zilla1" id="zilla_1"></select>
                            </div>
                        </div>

                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Search</button>
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
            <script>
                document.write(new Date().getFullYear())
            </script> &copy; <a href="#">Find Service</a>
        </p>
    </footer>
    <!-- End of Footer-->


    <!-- address_for_post_a_service -->
    <script src="../js/address_for_post_a_service.js"></script>
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