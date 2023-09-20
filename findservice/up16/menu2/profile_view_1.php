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
                <h1 style="text-align: center; padding:10px 0 10px 0; color: grey;">Profile</h1>
            </div>

            <!--cards section started-->
            <!-- src for cards = https://www.youtube.com/watch?v=rV67qQahXAc&ab_channel=dcode -->
            <!-- src for cards round animation + internal = https://www.youtube.com/watch?v=yECsm5B2_Hg&ab_channel=DarkCode -->
            <!-- d1-card-section-1 for single card in a row
    d1-card-section-2 for two or more card in a row -->
            <div class="d1-card-section-3" style="text-align: center;">
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

                $sql = "SELECT * FROM tbl_pending_signup WHERE email = '$_SESSION[view_profile_1]' ";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
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
                        <p style="color: green; font-weight: bold;">User rating: ' . $row['rating_1'].' / 5 ('. $row['total_rated_1'] .')</p>
                    </div>
                </div>';
                    }
                } else {
                    // header("Location: http://localhost/up13/menu/post_a_service_relog.html");
                    echo "No data. Try again later";
                }
                ?>

            </div>





            <div>
                <h1 style="text-align: center; padding:10px 0 10px 0; color: grey;">Post information</h1>
            </div>



            <div class="d1-card-section-1" style="text-align: center;">
                <?php
                $sql1 = "SELECT * FROM tbl_pending_service_post WHERE post_id = '$_SESSION[post_id_for_profile]' ";
                $result1 = mysqli_query($conn, $sql1);

                if (mysqli_num_rows($result1) > 0) {
                    while ($row1 = mysqli_fetch_assoc($result1)) {
                        // $sql = "SELECT * FROM tbl_pending_service_post INNER JOIN tbl_pending_signup on $row[email]=tbl_pending_signup.email WHERE tbl_pending_signup.email="arafatabdulkhaled@gmail.com";";
                        if ($row1["approved_post"] == 1) {

                            $form_0 = '<div class="d1-single-card">';
                            $form_1 = '<div class="d1-single-card-info d1-single-card-info-v2">';
                            $form_2 = '<div></div>';
                            if (isset($_SESSION['logged_in_user'])) {
                                $form_2 = '<div>
                <form method="POST">
                    <button class="d1-btn-review1" type="submit" name="write_a_review" value="' . $row1['post_id'] . '">Write a review</button>
                </form>
                </div>';
                            }
                            $form_3 = '</div>';
                            $form_4 =   '<div class="d1-single-card-content">
                            <p>Service type: ' . $row1['service_type'] . ' </p>
                            <p>Short description: ' . $row1['short_description'] . '</p>
                            <p>Additional phone number: ' . $row1['additional_phone_1'] . '</p>
                            <p>Prefer location 1: ' . $row1['prefer_location_1_more'] . ', ' . $row1['zilla1'] . ', ' . $row1['division1'] . '</p>
                            <p>Prefer location 2: ' . $row1['prefer_location_2_more'] . ' - ' . $row1['zilla2'] . ' - ' . $row1['division2'] . '</p>
                            <p>Posted on: ' . $row1['timestamp1'] . '</p>
                            
                        </div>';
                            $form_5 = '</div>';


                            echo $form_0 . $form_1 . $form_2 . $form_3 . $form_4 . $form_5;
                        }




                        // echo $row["email"] . " " . $row["password1"] . $row["short_description"] . " " .
                        // $row["prefer_location"] . " " . $row["timestamp"] . "<br>";
                    }
                } else {
                    // header("Location: http://localhost/up13/menu/post_a_service_relog.html");
                    echo "No data available. Try again later.";
                }



                if (isset($_POST['write_a_review'])) {
                    // echo '<script>alert("' . $_POST['write_a_review'] . '")</script>';
                    $sql2 = "SELECT * FROM tbl_pending_service_post WHERE post_id = '$_POST[write_a_review]' ";
                    $result2 = mysqli_query($conn, $sql2);

                    if (mysqli_num_rows($result2) > 0) {
                        $row2 = mysqli_fetch_assoc($result2);
                        $_SESSION["review_for_user_1"] = $row2['email'];
                        $_SESSION["review_for_post_id_1"] = $_POST['write_a_review'];
                        echo '<script> window.location.href="http://localhost/up16/menu2/give_a_review_1.php"; </script>';
                    }
                }
                ?>
            </div>




            <div>
                <h1 style="text-align: center; padding:10px 0 10px 0; color: grey;">Previous reviews of all posts by this user</h1>
            </div>




            <div class="d1-card-section-3" style="text-align: center;">
                <?php
                // session_start();
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

                $sql = "SELECT * FROM tbl_review_1 WHERE review_to_email = '$_SESSION[view_profile_1]' ";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                        // $sql1 = "SELECT * FROM tbl_pending_signup WHERE email = '$row[review_by_email]' ";
                        // $result1 = mysqli_query($conn, $sql1);
                        // $row1 = mysqli_fetch_assoc($result1);

                        echo '<div class="d1-single-card">
                    <div class="d1-single-card-content">
                        <p>Reviewed by: ' . $row["review_by_name"] . '</p>
                        <p>Taken service type: ' . $row["review_of_service_1"] . '</p>
                        <p>Review: ' . $row["review1"] . '</p>
                        <p>Posted on: ' . $row["timestamp_review"] . '</p>
                    </div>
                </div>';
                    }
                } else {
                    // header("Location: http://localhost/up13/menu/post_a_service_relog.html");
                    echo "No reviews yet.";
                }

                mysqli_close($conn);
                ?>


            </div>
            <!--cards section finished-->






        </div>

        <p> <br> </p>
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