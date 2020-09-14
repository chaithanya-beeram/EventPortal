<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM Events WHERE id=$id"; 
$result = mysqli_query($con,$query);
header("Location: view.php"); 
?>