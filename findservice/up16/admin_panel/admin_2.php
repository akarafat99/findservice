<?php
session_start();
$_SESSION["access"] = 0;
if ($_POST["id"] == "admin123" and $_POST["password"] == "admin123") {
    $_SESSION["access"] = 1;
    echo '<script> window.location.href="http://localhost/up16/admin_panel/admin_3.php"; </script>';
}
else {
    echo '<script> window.location.href="http://localhost/up16/admin_panel/admin.php"; </script>';
}
?>



