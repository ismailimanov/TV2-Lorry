<?php
session_start();
if(!isset($_SESSION["first_time"])){
    $_SESSION["first_time"] = 0;
}



/* FADBAMSEVALG17 Config Fil */

    $link = mysqli_connect("localhost", "268e32dddf42", "ca61ed744019de59", "fadbamsevalg");;

    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();

    }

    $link->set_charset('utf8');

    include("funktioner.php");

    $sideLink = $_SERVER['REQUEST_URI'];
    if($_SESSION["first_time"] == 0){
        //header("Location: loading?side=$sideLink");
    }
?>