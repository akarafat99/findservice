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

    <link rel="stylesheet" href="../css/about-card.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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

            <?php
            session_start();
            echo
            '<div>
                <h1 style="text-align: center; padding:10px 0 10px 0; color: grey;">' . $_SESSION["service_type_1"] . '</h1>
            </div>';

            if (isset($_SESSION["logged_in_user"])) {
            } else {
                echo
                '<div>
                <h1 style="text-align: center; padding:10px 0 10px 0; color: grey; font-size:20px">| Log in to post review from that user you have taken service</h1>
            </div>';
            }
            ?>



            <div class="d1-card-section-4" style="text-align: center;">
                <!-- Single card start -->


                <?php
                // $_SESSION["view_profile_1"];
                // $_SESSION["review_for_user_1"];

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "user_db_1";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM tbl_pending_service_post WHERE service_type = '$_SESSION[service_type_1]' ";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // $sql = "SELECT * FROM tbl_pending_service_post INNER JOIN tbl_pending_signup on $row[email]=tbl_pending_signup.email WHERE tbl_pending_signup.email="arafatabdulkhaled@gmail.com";";
                        if ($row["approved_post"] == 1) {
                            $sql1 = "SELECT * FROM tbl_pending_signup WHERE email = '$row[email]' ";
                            $result1 = mysqli_query($conn, $sql1);
                            $row1 = mysqli_fetch_assoc($result1);

                            $form_0 = '<div class="d1-single-card">';
                            $form_1 = '<div class="d1-pic">
                        <img src="../uploads/' . $row1['image_source'] . '" alt="" class="d1-single-card-image">
                    </div>
                <div class="d1-single-card-content">
                    <p>Name: <b>' . $row1['fullName'] . ' </b></p>
                    <p style="color: green; font-weight: bold;">User rating: ' . $row1['rating_1'] . ' / 5 (' . $row1['total_rated_1'] . ')</p>
                    <p>Service type: ' . $row['service_type'] . ' </p>
                    <p>Short description: ' . $row['short_description'] . '</p>
                    <p>Prefer location 1: ' . $row['prefer_location_1_more'] . ', ' . $row['zilla1'] . ', ' . $row['division1'] . '</p>
                    <p>Prefer location 2: ' . $row['prefer_location_2_more'] . ' - ' . $row['zilla2'] . ' - ' . $row['division2'] . '</p>
                    <p>Posted on: ' . $row['timestamp1'] . '</p>
                    
                </div>';

                            $form_2 = '<div class="d1-single-card-info d1-single-card-info-v2">
                    <div>
                        <form method="POST">
                            <button class="d1-btn-review1" type="submit" name="email" value="' . $row['post_id'] . '">Details</button>
                        </form>
                    </div>
                    ';

                            $form_3 = '<div>
            </div>
            </div>';
                            if (isset($_SESSION['logged_in_user'])) {
                                $form_3 = '<div>
                        <form method="POST">
                            <button class="d1-btn-review1" type="submit" name="write_a_review" value="' . $row['post_id'] . '">Write a review</button>
                        </form>
                    </div>
                </div>';
                            }

                            $form_4 = '</div>';

                            echo $form_0 . $form_2 . $form_3 . $form_1 . $form_4;
                        }




                        // echo $row["email"] . " " . $row["password1"] . $row["short_description"] . " " .
                        // $row["prefer_location"] . " " . $row["timestamp"] . "<br>";
                    }
                } else {
                    // header("Location: http://localhost/up13/menu/post_a_service_relog.html");
                    echo "No post available";
                }

                // echo "Passed";


                if (isset($_POST['email'])) {
                    // echo '<script>alert("' . $_POST['email'] . '")</script>';
                    $sql3 = "SELECT * FROM tbl_pending_service_post WHERE post_id = '$_POST[email]' ";
                    $result3 = mysqli_query($conn, $sql3);
                    $row3 = mysqli_fetch_assoc($result3);

                    $_SESSION["view_profile_1"] = $row3['email']; //email is ; post of that user
                    $_SESSION["post_id_for_profile"] = $row3['post_id'];
                    // echo '<script>alert("' . $_SESSION["view_profile_1"] . '")</script>';
                    //header("Location: http://localhost/up16/menu2/profile_view_1.php");
                    echo '<script> window.location.href="http://localhost/up16/menu2/profile_view_1.php"; </script>';
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

                    // $_SESSION["review_of_post_id"] = $row['']


                }


                mysqli_close($conn);
                ?>


            </div>
            <!--cards section finished-->







            <!-- foooter -->
            <!-- <footer class="footer-1">
        <p>Copyright
            <script>
                document.write(new Date().getFullYear())
            </script> &copy; <a href="#">Find Service</a>
        </p>
            </footer> -->


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