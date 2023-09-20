<?php
session_start();

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

// echo $_POST['rating_1'] + 1;

$sql1 = "SELECT * FROM tbl_pending_signup WHERE email = '$_SESSION[logged_in_user]'";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);

$sql = "INSERT INTO tbl_review_1(review_to_email, review_by_email, review_by_name, review1, review_of_service_1, from_post_id, rating_1)
            VALUES ('$_SESSION[review_for_user_1]', '$_SESSION[logged_in_user]', '$row1[fullName]', '$_POST[review]', '$_SESSION[service_type_1]', '$_SESSION[review_for_post_id_1]', '$_POST[rating_1]')";

if (mysqli_query($conn, $sql)) {
    // echo "Success";
    // echo '<script>alert("review submitted successfully")</script>';
    // header("Location: http://localhost/up13/index.html");
} else {
    echo "Error" . $sql . "<br>" . mysqli . error($conn);
}


$sql1 = "SELECT * FROM tbl_pending_signup WHERE email = '$_SESSION[review_for_user_1]'";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);

$num = ((($row1['rating_1'] * $row1['total_rated_1']) + $_POST['rating_1']) / ($row1['total_rated_1'] + 1));
// echo $num;
$num = round($num, 2);
$num_1 = $row1['total_rated_1'] + 1;

$sql = "UPDATE tbl_pending_signup SET rating_1 = '$num', total_rated_1 = '$num_1' WHERE email = '$_SESSION[review_for_user_1]'";
mysqli_query($conn, $sql);
mysqli_close($conn);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title Page-->
    <title>Find Service</title>

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
        <h1 style="text-align: center; padding:10px 0 10px 0; color: grey;"><i>Review sumitted successfully</i></h1>
    </div>





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