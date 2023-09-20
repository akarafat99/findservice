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
        <h1 style="text-align: center; padding:10px 0 10px 0; color: grey;">My account</h1>
    </div>

    <!--cards section started-->
    <!-- src for cards = https://www.youtube.com/watch?v=rV67qQahXAc&ab_channel=dcode -->
    <!-- src for cards round animation + internal = https://www.youtube.com/watch?v=yECsm5B2_Hg&ab_channel=DarkCode -->
    <!-- d1-card-section-1 for single card in a row
    d1-card-section-2 for two or more card in a row -->
    <div class="d1-card-section-3" style="text-align: center;">
<?php
session_start();

// $_SESSION["logged_in_user"] = "190122.cse@student.just.edu.bd";

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

$sql = "SELECT * FROM tbl_pending_signup WHERE email = '$_SESSION[logged_in_user]' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="d1-single-card">
                    <div class="d1-pic">
                        <img src="../images/home-header-1.jpg" alt="" class="d1-single-card-image">
                    </div>
                    <div class="d1-single-card-content">
                        <p>Name: ' . $row["fullName"] . '</p>
                        <p>Email: ' . $row["email"] . '</p>
                        <p>Gender: ' . $row["gender"] . '</p>
                        <p>Profession: ' . $row["profession"] . '</p>
                        <p>Phone number: ' . $row["phone"] . '</p>
                        <p>About: ' . $row["aboutMe"] . '</p>
                    </div>
                </div>';
    }
}
else {
    // header("Location: http://localhost/up13/menu/post_a_service_relog.html");
    echo "No data. Try again later";
}

// mysqli_close($conn);
?>

    </div>

<!-- End of profile -->



<!-- Post by this user start -->
    <div>
        <h1 style="text-align: center; padding:10px 0 10px 0; color: grey;">Posts</h1>
    </div>

    <div class="d1-card-section-1" style="text-align: center;">
<?php
$sql1 = "SELECT * FROM tbl_pending_service_post WHERE email = '$_SESSION[logged_in_user]' ";
$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) > 0) {
    while ($row1 = mysqli_fetch_assoc($result1)) {

        echo '<!-- Single card start -->
        <div class="d1-single-card">
            <div class="d1-single-card-content">
            <p>Service type: ' . $row1['service_type'] . ' </p>
            <p>Short description: ' . $row1['short_description'] . '</p>
            <p>Prefer location 1: ' . $row1['prefer_location_1_more'] . ', ' . $row1['prefer_location_1_more'] . ', ' . $row1['prefer_location_1_thana'] . ', ' . $row1['prefer_location_1_upzila'] . ', ' . $row1['prefer_location_1_zilla'] . '</p>
            <p>Prefer location 2 (Optional): ' . $row1['prefer_location_2'] . '</p>
            <p>Posted on: ' . $row1['timestamp1'] . '</p>
            <p>Post ID: '.$row1['post_id'].'</p>
            </div>

            <div class="d1-single-card-info">
                <div class="d1-single-card-info d1-single-card-info-v2">
                    <div>
                        <form method="POST">
                            <button type="submit" class="service-explore_btn" name="review" value="'.$row1['post_id'].'">View review</button>
                        </form>
                    </div>
                </div>
                <div class="d1-single-card-info d1-single-card-info-v2">
                    <div>
                        <form method="POST">
                            <button type="submit" class="service-explore_btn" name="delete" value="'.$row1['post_id'].'">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>';
    }
}
else {
    // header("Location: http://localhost/up13/menu/post_a_service_relog.html");
    echo "No post yet.";
}


if(isset($_POST["review"])) {
    $_SESSION["t_post_id_1"] = $_POST['review'];
    // $_SESSION["logged_in_user"]
    echo '<script> window.location.href="http://localhost/up16/my_profile_lab/page2.php"; </script>';
}
if(isset($_POST["delete"])){

}

mysqli_close($conn);
?>
    </div>
    
        

        

    <!--cards section finished-->


    <!-- Post by this user end -->










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