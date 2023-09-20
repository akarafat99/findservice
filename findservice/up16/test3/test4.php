<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>


    <!--For navbar - header - prefooter - footer-->
    <link rel="stylesheet" href="../css/styles.css">
    <!--For awesome font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../css/about-card.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


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
        <h1 style="text-align: center; padding:10px 0 10px 0; color: grey;">List</h1>
    </div>


    <div class="d1-card-section-1" style="text-align: center;">
        <!-- Single card start -->
        
        
        <?php
        session_start();

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_register_a_service";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM tblpendingservicelist WHERE service_type = '$_SESSION[service_type_1]' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                echo '<div class="d1-single-card">
                <div class="d1-pic">
                    <img src="../images/home-header-1.jpg" alt="" class="d1-single-card-image">
                </div>
                <div class="d1-single-card-content">
                    <p>Name: '.$row['email'].'</p>
                    <p>Profession: '.$row['email'].'</p>
                    <p>Prefer location: '.$row['prefer_location'].'</p>
                    <p>Short description: '.$row['short_description'].'</p>
                    
                </div>
    
                <div class="d1-single-card-info d1-single-card-info-v2">
                    <div>
                        <form method="POST">
                            <button type="submit" class="service-explore_btn" name="'.$row['email'].'">View review</button>
                        </form>
                    </div>
                    <div>
                        <form method="POST">
                            <button type="submit" class="service-explore_btn" name="'.$row['email'].'">Write review</button>
                        </form>
                    </div>
                </div>
                </div>';



                // echo $row["email"] . " " . $row["password1"] . $row["short_description"] . " " .
                    // $row["prefer_location"] . " " . $row["timestamp"] . "<br>";
            }
        } else {
            // header("Location: http://localhost/up13/menu/post_a_service_relog.html");
            echo "No data";
        }

        // echo "Passed";
        mysqli_close($conn);
        ?>
        

    </div>
    <!--cards section finished-->

       





    <!-- foooter -->
    <footer class="footer-1">
        <p>Copyright
            <script>document.write(new Date().getFullYear())</script> &copy; <a href="#">Find Service</a>
        </p>
    </footer>
    <!-- End of Footer-->




</body>

</html>