<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "personal_site";
    $con = new mysqli($host, $username, $password, $db_name);

    if(!$con){
        die(mysqli_error($con));
    }
    
    if(!$con){
        die(mysqli_error($con));
    }

?>