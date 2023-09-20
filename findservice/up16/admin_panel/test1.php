<?php
session_start();
$_SESSION["access"] = 1;
if ($_SESSION["access"] == 0) {
    echo '<script> window.location.href="http://localhost/up16/admin_panel/admin.php"; </script>';
}
?>


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
                <!-- <li class="nav_links_li" style="border: 1px solid black;"><a href="admin_3.php">Admin home</a></li> -->
                <!-- <li class="nav_links_li"><a href="find_services.php">Find Services</a></li>
                <li class="nav_links_li"><a href="post_a_service.php">Post a service</a></li>
                <li class="nav_links_li"><a href="about.php">About</a></li>
                <li class="nav_links_li"><a href="contact_us.php">Contact us</a></li> -->
            </ul>
        </div>
        <div class="nav">
            <ul class="nav_links_ul my-account">
                <li class="nav_links_li"><a href="admin_3.php">Admin panel</a></li>
                <li class="nav_links_li">|</li>
                <li class="nav_links_li"><a href="admin.php">Log out</a></li>
                <!-- <li class="nav_links_li">
                    <form method="POST">
                            <button type="submit" class="service-explore_btn" name="logout">Log out</button>
                    </form>
                </li> -->
            </ul>
        </div>
    </div>
    <!-- Nav bar finished -->

    <div>
        <h1 style="text-align: center; padding:10px 0 10px 0; color: grey;">Admin home</h1>
    </div>



    <!-- Service type start -->
    <!--cards started-->
    <!-- src for cards = https://www.youtube.com/watch?v=rV67qQahXAc&ab_channel=dcode -->
    <div class="card-section-1">
        <div class="single-card">
            <img src="image/registration_review.jpg" alt="image" class="single-card-image">
            <div class="single-card-content">
                <p>Pending signup</p>
            </div>
            <div class="single-card-info">
                <form method="POST">
                    <button type="submit" class="service-explore_btn" name="pending_signup">Go</button>
                </form>
            </div>
        </div>

        <div class="single-card">
            <img src="image/post_review.jpg" alt="image" class="single-card-image">
            <div class="single-card-content">
                <p>Pending post</p>
            </div>
            <div class="single-card-info">
                <form method="POST">
                    <button type="submit" class="service-explore_btn" name="pending_post">Go</button>
                </form>
            </div>
        </div>

        <div class="single-card">
            <img src="image/post_review.jpg" alt="image" class="single-card-image">
            <div class="single-card-content">
                <p>Pending post</p>
            </div>
            <div class="single-card-info">
                <form method="POST">
                    <button type="submit" class="service-explore_btn" name="pending_post1">Go</button>
                </form>
            </div>
        </div>
        
    </div>
    <!--cards finished-->
    <!-- Service type end -->



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
if (isset($_POST["pending_signup"])) {
    $_SESSION["option"] = 1;
    echo '<script> window.location.href="http://localhost/up16/admin_panel/admin_4.php"; </script>';
}
if (isset($_POST["pending_post1"])) {
    $_SESSION["option"] = 2;
    echo '<script> window.location.href="http://localhost/up16/admin_panel/admin_4.php"; </script>';
}
if (isset($_POST["contact_us_page"])) {
    $_SESSION["option"] = 3;
    echo '<script> window.location.href="http://localhost/up16/admin_panel/admin_5.php"; </script>';
}
?>