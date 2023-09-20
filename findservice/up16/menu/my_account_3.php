<?php
session_start();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="../css/about-card.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--For find services-->
    <link href="../css/card.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- for top right button hover of nav bar -->
    <link rel="stylesheet" href="../css/my_account_hover.css">

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
                        <!-- <li class="nav_links_li"><a href="my_account_1.php">My account</a></li> -->
                        <li class="nav_links_li" style="padding: 0;">
                            <div class="dropdown">
                                <button class="dropbtn">My account</button>
                                <div class="dropdown-content">
                                    <div>
                                        <form method="POST">
                                            <button type="submit" class="dropbtn_2" name="edit_account">Edit account</button>
                                        </form>
                                    </div>
                                    <div>
                                        <form method="POST">
                                            <button type="submit" class="dropbtn_2" name="delete_account">Delete account</button>
                                        </form>
                                    </div>
                                    <div>
                                        <form method="POST">
                                            <button type="submit" class="dropbtn_2" name="logout">Logout</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Nav bar finished -->



            <?php
            if (isset($_SESSION["profile_update_1"]) and $_SESSION["profile_update_1"] == 1) {
                echo '<div>
            <h1 style="text-align: center; padding:10px 0 10px 0; color: grey;">My account | Profile updated</h1>
        </div>';
                $_SESSION["profile_update_1"] = 0;
            } else {
                echo '<div>
        <h1 style="text-align: center; padding:10px 0 10px 0; color: grey;">My account</h1>
    </div>';
            }
            ?>

            <!--cards section started-->
            <!-- src for cards = https://www.youtube.com/watch?v=rV67qQahXAc&ab_channel=dcode -->
            <!-- src for cards round animation + internal = https://www.youtube.com/watch?v=yECsm5B2_Hg&ab_channel=DarkCode -->
            <!-- d1-card-section-1 for single card in a row
    d1-card-section-2 for two or more card in a row -->
            <div class="d1-card-section-3" style="text-align: center;">
                <?php
                // session_start();

                // $_SESSION["logged_in_user"] = "190122.cse@student.just.edu.bd";

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

                $sql = "SELECT * FROM tbl_pending_signup WHERE email = '$_SESSION[logged_in_user]' ";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row["authenticated_user"] == 1) {
                            echo '<div class="d1-single-card">
                    <div class="d1-pic">
                        <img src="../uploads/' . $row['image_source'] . '" alt="" class="d1-single-card-image">
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
                } else {
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

            <div class="d1-card-section-4" style="text-align: center;">
                <?php
                $sql1 = "SELECT * FROM tbl_pending_service_post WHERE email = '$_SESSION[logged_in_user]' ";
                $result1 = mysqli_query($conn, $sql1);

                if (mysqli_num_rows($result1) > 0) {
                    while ($row1 = mysqli_fetch_assoc($result1)) {

                        if ($row1['approved_post'] == 1) {
                            echo '<!-- Single card start -->
        <div class="d1-single-card">
            <div class="d1-single-card-info">
                <div class="d1-single-card-info d1-single-card-info-v2">
                    <div>
                        <form method="POST">
                            <button type="submit" class="service-explore_btn" name="review" value="' . $row1['post_id'] . '">View review</button>
                        </form>
                    </div>
                </div>
                <div class="d1-single-card-info d1-single-card-info-v2">
                    <div>
                        <form method="POST">
                            <button type="submit" class="service-explore_btn" name="delete" value="' . $row1['post_id'] . '">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="d1-single-card-content">
                <p>Service type: ' . $row1['service_type'] . ' </p>
                <p>Short description: ' . $row1['short_description'] . '</p>
                <p>Additional phone number: ' . $row1['additional_phone_1'] . '</p>
                <p>Prefer location 1: ' . $row1['prefer_location_1_more'] . ', ' . $row1['zilla1'] . ', ' . $row1['division1'] . '</p>
                <p>Prefer location 2: ' . $row1['prefer_location_2_more'] . ' - ' . $row1['zilla2'] . ' - ' . $row1['division2'] . '</p>
                <p>Posted on: ' . $row1['timestamp1'] . '</p>
                <p>Post ID: ' . $row1['post_id'] . '</p>
            </div>
        </div>';
                        }
                    }
                } else {
                    // header("Location: http://localhost/up13/menu/post_a_service_relog.html");
                    echo "No post yet.";
                }


                if (isset($_POST["review"])) {
                    $_SESSION["t_post_id_1"] = $_POST['review'];
                    // $_SESSION["logged_in_user"]
                    echo '<script> window.location.href="http://localhost/up16/menu/my_account_3_review_page.php"; </script>';
                }
                if (isset($_POST["delete"])) {
                    $sql = "DELETE FROM tbl_pending_service_post WHERE post_id = '$_POST[delete]' ";
                    mysqli_query($conn, $sql);
                    echo '<script> window.location.href="http://localhost/up16/menu/my_account_3.php"; </script>';
                }

                mysqli_close($conn);
                ?>
            </div>





            <!--cards section finished-->


            <!-- Post by this user end -->




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




</body>

</html>


<?php
if (isset($_POST["edit_account"])) {
    echo '<script> window.location.href="http://localhost/up16/menu/my_account_4.php"; </script>';
}

if (isset($_POST["delete_account"])) {
    echo '<script> window.location.href="http://localhost/up16/menu/my_account_6.php"; </script>';
}

if (isset($_POST["logout"])) {
    session_destroy();
    echo '<script> window.location.href="http://localhost/up16/menu/my_account_1.php"; </script>';
}

?>