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
}
else {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tbl_pending_signup WHERE email = '$_POST[email]' AND password1 = '$_POST[password]'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) > 0) {
    if ($row["authenticated_user"] == 1) {
        $_SESSION["logged_in_user"] = $_POST['email'];
        echo '<script> window.location.href="http://localhost/up16/menu/my_account_3.php"; </script>';
    } else {
        $_SESSION["pending_signup_user"] = 1;
        echo '<script> window.location.href="http://localhost/up16/menu/my_account_1.php"; </script>';
    }
}
else {
    $_SESSION["wrong_pass_1"] = 1;
    echo '<script> window.location.href="http://localhost/up16/menu/my_account_1.php"; </script>';
}
mysqli_close($conn);
?>

