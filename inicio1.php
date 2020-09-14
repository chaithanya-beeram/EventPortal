<?php

$host="localhost";
$username="cpb9792_root";
$dbName="cpb9792_test";
$conn = new mysqli($host, $username, "chaithuB2316.", $dbName);

session_start();
    if (isset($SESSION["username"])&&$_SESSION["username"]=='chaybeeram')
        {
            echo"";
        }
        else if(isset($_SESSION["username"])&&$_SESSION["username"]!='chaybeeram')
        {
            header("Location:home.php");
        }
    else 
        {
            header("Location:login.html");
        }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="Stylesheet" type="text/css" href="ciudad.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="home">