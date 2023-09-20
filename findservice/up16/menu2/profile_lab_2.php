<!-- echo $_SESSION["review_page_1"]; -->



<!-- Issue: birthday range can be greater than current date -->






<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title Page-->
    <title>Sign up</title>

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
                <li class="nav_links_li"><a href="find_services.html">Find Services</a></li>
                <li class="nav_links_li"><a href="post_a_service.html">Post a service</a></li>
                <li class="nav_links_li"><a href="about.html">About</a></li>
                <li class="nav_links_li"><a href="contact_us.html">Contact us</a></li>
            </ul>
        </div>
        <div class="nav">
            <ul class="nav_links_ul my-account">
                <li class="nav_links_li"><a href="#">My account</a></li>
            </ul>
        </div>
    </div>
    <!-- Nav bar finished -->


    <div>
        <h1 style="text-align: center; padding:10px 0 10px 0; color: grey;">Review</h1>
    </div>



    <!-- form start -->
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <p><i style="color: red;">* must fillup</i></p><br><br>
                    <?php
                    session_start();
                    echo '<p>Giving review to ' . $_SESSION["review_for_user_1"] . '</p><br>
                        <p><i>Email: ' . $_SESSION["review_for_user_1"] . '</i></p><br><br>';

                    ?>

                    <!-- <form action="sign-up.php" method="POST"> -->
                    <form method="POST">
                        <div class="input-group">
                            <label class="label"><i style="color: red;">*</i> Review</label>
                            <input class="input--style-4" type="text" name="review" required>
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

    <!-- foooter -->
    <footer class="footer-1">
        <p>Copyright
            <script>
                document.write(new Date().getFullYear())
            </script> &copy; <a href="#">Find Service</a>
        </p>
    </footer>
    <!-- End of Footer-->

</body>

</html>

<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "user_db_1";

$conn = mysqli_connect($serverName, $username, $password, $dbName);
if ($conn) {
    // echo "Connection successful";
    // header("Location: http://localhost/registration2/test.php");
} else {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO tblreview(reviewtoemail, reviewbyemail, review1, timestampofreview)
            VALUES ('$_SESSION[review_for_user_1]', '$_SESSION[logged_in_user]', '$_POST[review]')";

if (mysqli_query($conn, $sql)) {
    echo '<script>alert("review submitted successfully")</script>';
    // header("Location: http://localhost/up13/index.html");
} else {
    echo "Error" . $sql . "<br>" . mysqli . error($conn);
}
mysqli_close($conn);

?>