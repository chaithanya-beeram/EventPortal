<?php
session_start();
session_destroy();
// Redirect to the login page:
header('Location: inicio1.html');
?>