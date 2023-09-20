<?php
session_start();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="../css/about-card.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--For find services-->
    <link href="../css/card.css" rel="stylesheet">
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

            <?php

            if ($_SESSION["option"] == 1) {
                echo '<div>
<h1 style="text-align: center; padding:10px 0 10px 0; color: grey;"> Pending signup</h1>
</div>';
            } else if ($_SESSION["option"] == 2) {
                echo '<div>
<h1 style="text-align: center; padding:10px 0 10px 0; color: grey;">Pending post</h1>
</div>';
            }





            // if (isset($_SESSION["operation_22"]) and $_SESSION["operation_22"] == 1) {
            //     echo '<div>
            // <h1 style="text-align: center; padding:10px 0 10px 0; color: grey; font-size: 18px">Post approved</h1>
            // </div>';
            //     $_SESSION["operation_22"] = 0;
            // }

            // if (isset($_SESSION["operation_49"]) and $_SESSION["operation_49"] == 1) {
            //     echo '<div>
            // <h1 style="text-align: center; padding:10px 0 10px 0; color: grey; font-size: 18px">User approved</h1>
            // </div>';
            //     $_SESSION["operation_49"] = 0;
            // }

            ?>


            <!-- Post by this user start -->

            <div class="d1-card-section-1" style="text-align: center;">
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


                if ($_SESSION["option"] == 1) {
                    $sql = "SELECT * FROM tbl_pending_signup WHERE authenticated_user = 0 ";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<!-- Single card start -->
        <div class="d1-single-card">
                <div class="d1-pic">
                    <img src="../uploads/' . $row['image_source'] . '" alt="" class="d1-single-card-image">
                </div>
            <div class="d1-single-card-content">
                        <p>Name: ' . $row["fullName"] . '</p>
                        <p>Email: ' . $row["email"] . '</p>
                        <p>Gender: ' . $row["gender"] . '</p>
                        <p>Date of birth: ' . $row["birthday"] . '</p>
                        <p>Profession: ' . $row["profession"] . '</p>
                        <p>Phone number: ' . $row["phone"] . '</p>
                        <p>About: ' . $row["aboutMe"] . '</p>
                        <p>Time: ' . $row["timestamp"] . '</p>
            </div>

            <div class="d1-single-card-info">
                <div class="d1-single-card-info d1-single-card-info-v2">
                    <div>
                        <form method="POST">
                            <button type="submit" class="service-explore_btn" name="approve" value="' . $row['id'] . '">Approve</button>
                        </form>
                    </div>
                </div>
                <div class="d1-single-card-info d1-single-card-info-v2">
                    <div>
                        <form method="POST">
                            <button type="submit" class="service-explore_btn" name="decline" value="' . $row['id'] . '">Decline</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>';
                        }
                    } else {
                        // header("Location: http://localhost/up13/menu/post_a_service_relog.html");
                        echo "No pending user";
                    }
                } else if ($_SESSION["option"] == 2) {
                    $sql = "SELECT * FROM tbl_pending_service_post WHERE approved_post = 0 ";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            // $sql = "SELECT * FROM tbl_pending_service_post INNER JOIN tbl_pending_signup on $row[email]=tbl_pending_signup.email WHERE tbl_pending_signup.email="arafatabdulkhaled@gmail.com";";
                            $sql1 = "SELECT * FROM tbl_pending_signup WHERE email = '$row[email]' ";
                            $result1 = mysqli_query($conn, $sql1);
                            $row1 = mysqli_fetch_assoc($result1);

                            echo '<div class="d1-single-card">
                    <div class="d1-pic">
                        <img src="../uploads/' . $row1['image_source'] . '" alt="" class="d1-single-card-image">
                    </div>
                    <div class="d1-single-card-content">
                        <p>Name: ' . $row1['fullName'] . '</p>
                        <p>Email: ' . $row['email'] . '</p>
                        <p>Profession: ' . $row1['profession'] . '</p>
                        <p>Phone number: ' . $row1['phone'] . '</p>
                        <p>Service type: ' . $row['service_type'] . ' </p>
                        <p>Short description: ' . $row['short_description'] . '</p>
                        <p>Prefer location 1: ' . $row['prefer_location_1_more'] . ', ' . $row['zilla1'] . ', ' . $row['division1'] . '</p>
                        <p>Prefer location 2: ' . $row['prefer_location_2_more'] . ', ' . $row['zilla2'] . ', ' . $row['division2'] . '</p>
                        <p>Posted on: ' . $row['timestamp1'] . '</p>
                        
                    </div>
        
                    <div class="d1-single-card-info d1-single-card-info-v2">
                        <div>
                            <form method="POST">
                                <button class="d1-btn-review1" type="submit" name="approve1" value="' . $row['post_id'] . '">Approve</button>
                            </form>
                        </div>
                        <div>
                            <form method="POST">
                                <button class="d1-btn-review1" type="submit" name="decline1" value="' . $row['post_id'] . '">Decline</button>
                            </form>
                        </div>
                    </div>
                </div>';


                            // echo $row["email"] . " " . $row["password1"] . $row["short_description"] . " " .
                            // $row["prefer_location"] . " " . $row["timestamp"] . "<br>";
                        }
                    } else {
                        // header("Location: http://localhost/up13/menu/post_a_service_relog.html");
                        echo "No pending post";
                    }
                } else if ($_SESSION["option"] == 3) {
                    $sql = "SELECT * FROM tbl_contact_us";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            // $sql = "SELECT * FROM tbl_pending_service_post INNER JOIN tbl_pending_signup on $row[email]=tbl_pending_signup.email WHERE tbl_pending_signup.email="arafatabdulkhaled@gmail.com";";
                            // $sql1 = "SELECT * FROM tbl_pending_signup WHERE email = '$row[email]' ";
                            // $result1 = mysqli_query($conn, $sql1);
                            // $row1 = mysqli_fetch_assoc($result1);

                            echo '<div class="d1-single-card">
                    
                    <div class="d1-single-card-content">
                        <p>Name: ' . $row['full_name'] . '</p>
                        <p>Email: ' . $row['email'] . '</p>
                        <p>Phone: ' . $row['phone'] . '</p>
                        <p>Type: ' . $row['contact_type'] . '</p>
                        <p>Timestamp: ' . $row['timestamp'] . '</p>
                        <p>Email: ' . $row['message1'] . '</p>
                    </div>
        
                    <div class="d1-single-card-info d1-single-card-info-v2">
                        <div>
                            <form method="POST">
                                <button class="d1-btn-review1" type="submit" name="delete" value="' . $row['id'] . '">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>';


                            // echo $row["email"] . " " . $row["password1"] . $row["short_description"] . " " .
                            // $row["prefer_location"] . " " . $row["timestamp"] . "<br>";
                        }
                    } else {
                        // header("Location: http://localhost/up13/menu/post_a_service_relog.html");
                        echo "No pending list available";
                    }
                }

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
if (isset($_POST['approve'])) {
    // $sql1 = "SELECT * FROM tbl_pending_signup WHERE email = '$_POST[approve]' ";
    $sql2 = "UPDATE tbl_pending_signup SET authenticated_user = 1 WHERE id = '$_POST[approve]' ";
    // $sql = "INSERT INTO tblusers(fullName, birthday, gender, email, phone, profession, aboutMe)
    //         VALUES ('$_POST[full_name]', '$_POST[birthday]', '$_POST[gender]', '$_POST[email]', 
    //         '$_POST[phone]', '$_POST[profession]', '$_POST[about_me]', )";

    if (mysqli_query($conn, $sql2)) {
        $_SESSION["operation_49"] = 1;
        // echo "New record inserted";
    } else {
        echo "Error" . $sql . "<br>" . mysqli . error($conn);
    } // $_SESSION["logged_in_user"]    
    echo '<script> window.location.href="http://localhost/up16/admin_panel/admin_4.php"; </script>';
} else if (isset($_POST['decline'])) {
    $sql = "DELETE FROM tbl_pending_signup WHERE id = '$_POST[decline]' ";
    mysqli_query($conn, $sql);
    echo '<script> window.location.href="http://localhost/up16/admin_panel/admin_4.php"; </script>';
} else if (isset($_POST['approve1'])) {
    // $sql1 = "SELECT * FROM tbl_pending_signup WHERE email = '$_POST[approve]' ";
    $sql2 = "UPDATE tbl_pending_service_post SET approved_post = 1 WHERE post_id = '$_POST[approve1]' ";
    // $sql = "INSERT INTO tblusers(fullName, birthday, gender, email, phone, profession, aboutMe)
    //         VALUES ('$_POST[full_name]', '$_POST[birthday]', '$_POST[gender]', '$_POST[email]', 
    //         '$_POST[phone]', '$_POST[profession]', '$_POST[about_me]', )";

    if (mysqli_query($conn, $sql2)) {
        $_SESSION["operation_22"] = 1;
        // echo "New record inserted";
    } else {
        echo "Error" . $sql . "<br>" . mysqli . error($conn);
    } // $_SESSION["logged_in_user"]    
    echo '<script> window.location.href="http://localhost/up16/admin_panel/admin_4.php"; </script>';
} else if (isset($_POST['decline1'])) {
    $sql = "DELETE FROM tbl_pending_service_post WHERE post_id = '$_POST[decline1]' ";
    mysqli_query($conn, $sql);
    echo '<script> window.location.href="http://localhost/up16/admin_panel/admin_4.php"; </script>';
} else if (isset($_POST['delete'])) {
    $sql = "DELETE FROM tbl_contact_us WHERE id = '$_POST[delete]' ";
    mysqli_query($conn, $sql);
    echo '<script> window.location.href="http://localhost/up16/admin_panel/admin_4.php"; </script>';
}

mysqli_close($conn);

?>