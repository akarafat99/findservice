<?php
    session_start();
    
    if(isset($_SESSION["logged_in_user"])){
        echo '<script> window.location.href="http://localhost/up16/menu/post_a_service_form.php"; </script>';
    }

    else{
        echo '<script> window.location.href="http://localhost/up16/menu/my_account_1.php"; </script>';
    }

?>