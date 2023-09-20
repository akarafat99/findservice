<?php
session_start();

$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "user_db_1";

// $serverName = "localhost";
// $username = "mydb";
// $password = "[9P\D8ldi!^descR";
// $dbName = "mydb1";


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
$row = mysqli_fetch_assoc($result);

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["my_file"]["name"]);
$_SESSION["image_name"] = $_FILES["my_file"]["name"];



if ($_SESSION["image_name"] == null OR $_SESSION["image_name"] == $row["image_source"]) {
    $sql = "UPDATE tbl_pending_signup 
            SET fullName='$_POST[full_name]', phone='$_POST[phone]', birthday='$_POST[birthday]',
                profession='$_POST[profession]', aboutMe='$_POST[about_me]',
                email='$_SESSION[logged_in_user]', password1='$_POST[password]'
            WHERE email = '$_SESSION[logged_in_user]'";
}
else {
    move_uploaded_file($_FILES["my_file"]["tmp_name"], $target_file);
    $sql = "UPDATE tbl_pending_signup 
            SET fullName='$_POST[full_name]', phone='$_POST[phone]', birthday='$_POST[birthday]',
                profession='$_POST[profession]', aboutMe='$_POST[about_me]',
                email='$_SESSION[logged_in_user]', password1='$_POST[password]', image_source='$_SESSION[image_name]'
            WHERE email = '$_SESSION[logged_in_user]'";
}

if (mysqli_query($conn, $sql)) {
// echo "New record inserted";
// header("Location: http://localhost/up13/index.html");
}
else {
    echo "Error" . $sql . "<br>" . mysqli . error($conn);
}
mysqli_close($conn);

$_SESSION["profile_update_1"] = 1;
echo '<script> window.location.href="http://localhost/up16/menu/my_account_3.php"; </script>';

?>