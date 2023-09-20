<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Service</title>


    <!--For navbar - header - prefooter - footer-->
    <link rel="stylesheet" href="../css/styles.css">
    <!--For awesome font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--For find services-->
    <link href="../css/card.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Service list card -->
    <link rel="stylesheet" href="../css/service_list_card.css">


</head>


<?php
session_start();
$_SESSION["service_type_1"];

if (isset($_POST['tutor'])) {
    // echo "<script>alert('wow')</script>";
    $_SESSION["service_type_1"] = "Tutor";
    header("Location: http://localhost/up15/test3/test4.php");
}

if (isset($_POST['electrician'])) {
    // echo "<script>alert('wow 1')</script>";
    $_SESSION["service_type_1"] = "Electrician";
    header("Location: http://localhost/up15/test3/test4.php");
}

if (isset($_POST['plumber'])) {
    // echo "<script>alert('wow 1')</script>";
    $_SESSION["service_type_1"] = "Plumber";
    header("Location: http://localhost/up15/test3/test4.php");
}


if (isset($_POST['computer_hardware_mechanic'])) {
    // echo "<script>alert('wow 1')</script>";
    $_SESSION["service_type_1"] = "Computer hardware technician";
    header("Location: http://localhost/up15/test3/test4.php");
}

if (isset($_POST['computer_software_developer'])) {
    // echo "<script>alert('wow 1')</script>";
    $_SESSION["service_type_1"] = "Computer software developer";
    header("Location: http://localhost/up15/test3/test4.php");
}

if (isset($_POST['home_wall_painter'])) {
    // echo "<script>alert('wow 1')</script>";
    $_SESSION["service_type_1"] = "Home wall painter";
    header("Location: http://localhost/up15/test3/test3.php");
}

if (isset($_POST['other'])) {
    // echo "<script>alert('wow 1')</script>";
    $_SESSION["service_type_1"] = "Other";
    header("Location: http://localhost/up15/test3/test3.php");
}


?>



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
        <h1 style="text-align: center; padding:10px 0 10px 0; color: grey;">Find services</h1>
    </div>

    <!-- Service type start -->
    <!--cards started-->
    <!-- src for cards = https://www.youtube.com/watch?v=rV67qQahXAc&ab_channel=dcode -->
    <div class="card-section-1">
        <div class="single-card">
            <img src="../img_gif_for_fs_page/tutor.gif" alt="image" class="single-card-image">
            <div class="single-card-content">
                <p>Tutor</p>
            </div>
            <div class="single-card-info">
                <form method="POST">
                    <button type="submit" class="service-explore_btn" name="tutor">Explore</button>
                </form>
            </div>
        </div>

        <!-- https://media.giphy.com/media/10SvWCbt1ytWCc/giphy.gif -->
        <div class="single-card">
            <img src="../img_gif_for_fs_page/electrician.png" alt="image" class="single-card-image">
            <div class="single-card-content">
                <p>Electrician</p>
            </div>
            <div class="single-card-info">
                <form method="POST">
                    <button type="submit" class="service-explore_btn" name="electrician">Explore</button>
                </form>
            </div>
        </div>

        <div class="single-card">
            <img src="../img_gif_for_fs_page/plumber.jpg" alt="image" class="single-card-image">
            <div class="single-card-content">
                <p>Plumber</p>
            </div>
            <div class="single-card-info">
                <form method="POST">
                    <button type="submit" class="service-explore_btn" name="plumber">Explore</button>
                </form>
            </div>
        </div>

        <div class="single-card">
            <img src="../img_gif_for_fs_page/comp_hardware_mechanic.jpg" alt="image" class="single-card-image">
            <div class="single-card-content">
                <p>Computer hardware mechanic</p>
            </div>
            <div class="single-card-info">
                <form method="POST">
                    <button type="submit" class="service-explore_btn" name="computer_hardware_mechanic">Explore</button>
                </form>
            </div>
        </div>

        <div class="single-card">
            <img src="../img_gif_for_fs_page/comp_software_developer.jpg" alt="image" class="single-card-image">
            <div class="single-card-content">
                <p>Computer software developer</p>
            </div>
            <div class="single-card-info">
                <form method="POST">
                    <button type="submit" class="service-explore_btn" name="computer_software_developer">Explore</button>
                </form>
            </div>
        </div>

        <div class="single-card">
            <img src="../img_gif_for_fs_page/home_wall_painter.jpg" alt="image" class="single-card-image">
            <div class="single-card-content">
                <p>Home wall painter</p>
            </div>
            <div class="single-card-info">
                <form method="POST">
                    <button type="submit" class="service-explore_btn" name="home_wall_painter">Explore</button>
                </form>
            </div>
        </div>

        <div class="single-card">
            <img src="../img_gif_for_fs_page/more.gif" alt="image" class="single-card-image">
            <div class="single-card-content">
                <p>More</p>
            </div>
            <div class="single-card-info">
                <form method="POST">
                    <button type="submit" class="service-explore_btn" name="Other">Explore</button>
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

