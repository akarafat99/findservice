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

        </div>

        <?php
        session_start();

        $serverName = "localhost";
        $username = "root";
        $password = "";
        $dbName = "user_db_1";

        $conn = mysqli_connect($serverName, $username, $password, $dbName);
        if ($conn) {
        } else {
            die("Connection failed: " . mysqli_connect_error());
        }

        if ($_POST["delete_1"] == "Yes") {
            $sql = "SELECT * FROM tbl_pending_signup WHERE email = '$_SESSION[logged_in_user]' AND password1 = '$_POST[password]'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // $row = mysqli_fetch_assoc($result);
                $sql = "DELETE FROM tbl_pending_signup WHERE email = '$_SESSION[logged_in_user]' ";
                mysqli_query($conn, $sql);

                $sql = "SELECT * FROM tbl_pending_service_post WHERE email = '$_SESSION[logged_in_user]'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $sql1 = "DELETE FROM tbl_pending_service_post WHERE email = '$_SESSION[logged_in_user]' ";
                        mysqli_query($conn, $sql1);
                    }
                }
                echo '<div>
        <h1 style="text-align: center; padding:10px 0 10px 0; color: #454545;">Account delete completed</h1>
    </div>';
                session_destroy();
            } else {
                session_destroy();
                echo '<script> window.location.href="http://localhost/up16/menu/my_account_1.php"; </script>';
            }
        } else {
            session_destroy();
            echo '<script> window.location.href="http://localhost/up16/menu/my_account_1.php"; </script>';
        }


        ?>



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

</body>

</html>
<!-- end document-->