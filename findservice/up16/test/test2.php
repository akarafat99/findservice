<?php
    // if(isset($_POST["submit"])) {
        //echo '<script>alert("okay")</script>';
        echo $_FILES["my_file"]["name"];
        
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["my_file"]["name"]);
        move_uploaded_file($_FILES["my_file"]["tmp_name"], $target_file);
    // }
?>