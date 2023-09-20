<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>


    <!--For navbar - header - prefooter - footer-->
    <link rel="stylesheet" href="../css/styles.css">
    <!--For awesome font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--For awesome font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        
    <link rel="stylesheet" href="../css/about-card.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--For find services-->
    <link href="../css/card.css" rel="stylesheet">
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
        <h1 style="text-align: center; padding:10px 0 10px 0; color: grey;">Reviews</h1>
    </div>

    <div class="d1-card-section-1" style="text-align: center;">
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
}
else {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM tbl_review_1 WHERE from_post_id = '$_SESSION[t_post_id_1]' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $sql1 = "SELECT * FROM tbl_pending_signup WHERE email = '$row[review_by_email]' ";
        $result1 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_assoc($result1);

        // $sql2 = "SELECT * FROM tbl_pending_signup WHERE email = '$row[review_by_email]' ";
        // $result1 = mysqli_query($conn, $sql2);
        // $row2 = mysqli_fetch_assoc($result2);

        echo '<!-- Single card start -->
        <div class="d1-single-card">
            <div class="d1-single-card-content">
            <p>Reviewed by: ' . $row1['fullName'] . ' </p>
            <p>Review of service type: ' . $row['review_of_service_1'] . ' </p>
            <p>Review: ' . $row['review1'] . ' </p>
            <p>Time: ' . $row['timestamp_review'] . ' </p>
            </div>
        </div>';
    }
}
else {
    // header("Location: http://localhost/up13/menu/post_a_service_relog.html");
    echo "No reviews yet";
}

mysqli_close($conn);
?>
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