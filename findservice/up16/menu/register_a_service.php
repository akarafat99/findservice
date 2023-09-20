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


$address1 = array(
    "Dhaka" => array("Dhaka", "Gazipur", "Kishoreganj", "Narayangonj"),
    "Chittagong" => array("Chittagong", "Comilla", "Feni","Chandpur","Brahmanbaria","Noakhali"),
    "Rajshahi" => array("Chapainawabganj", "Natore", "Pabna","Bogra"),
    "Khulna" => array("Jashore", "Khulna", "Chuadanga","Jinaidaha","Bagherhat"),
    "Barishal" => array("Barguna", "Barishal", "Bhola", "Jhalokathi", "Patuakhali", "Pirojpur"),
    "Sylhet" => array("Hobiganj", "Moulvibazar", "Sunamganj", "Sylhet"),
    "Rangpur" => array("Dinajpur", "Gaibandha", "Kurigram", "Lalmonirhat", "Nilphamari","Panchagarh","Rangpur","Thakurgaon"),
    // "Mymensingh" => array("m1", "m2", "m3")
);



// if ($_POST['division2'] == null) {
//     echo 'cool1 ';
// }
// echo $_POST['division1'] . ' ';
// echo $_POST['zilla1'] . ' ' . $_POST['zilla2'];
session_start();


$address1zilla = $address1["$_POST[division1]"]["$_POST[zilla1]"];
if ($_POST["division2"] == null) {
    $sql = "INSERT INTO tbl_pending_service_post(email, service_type, short_description,
            division1, zilla1, prefer_location_1_more, prefer_location_2_more,
            additional_phone_1)
            VALUES ('$_SESSION[logged_in_user]', '$_POST[service_type]', '$_POST[short_description]',
            '$_POST[division1]', '$address1zilla', '$_POST[prefer_location_1_more]',
            '$_POST[prefer_location_2_more]', 
            '$_POST[additional_phone_1]')";

    if (mysqli_query($conn, $sql)) {
    } else {
        echo "Error" . $sql . "<br>" . mysqli . error($conn);
    }
} else {
    $address2zilla = $address1["$_POST[division2]"]["$_POST[zilla2]"];
    $sql1 = "INSERT INTO tbl_pending_service_post(email, service_type, short_description,
            division1, zilla1, prefer_location_1_more, division2, zilla2, prefer_location_2_more,
            additional_phone_1)
            VALUES ('$_SESSION[logged_in_user]', '$_POST[service_type]', '$_POST[short_description]',
            '$_POST[division1]', '$address1zilla', '$_POST[prefer_location_1_more]',
            '$_POST[division2]', '$address2zilla', '$_POST[prefer_location_2_more]',
            '$_POST[additional_phone_1]')";
    if (mysqli_query($conn, $sql1)) {
    } else {
        echo "Error" . $sql1 . "<br>" . mysqli . error($conn);
    }
}



mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title Page-->
    <title>Register a service</title>

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


            <div>
                <h1 style="text-align: center; padding:10px 0 10px 0; color: grey;"><i>Post submission successful. Post will be approved as soon as possible.</i></h1>
            </div>





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