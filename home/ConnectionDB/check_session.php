<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("location:../templates/LogIn.php");
    exit;
}
?>