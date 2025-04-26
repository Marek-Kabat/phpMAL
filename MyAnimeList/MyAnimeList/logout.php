<?php
include 'conn.php';
session_start();

if(isset($_SESSION['login'])) {
    $_SESSION['login'] = 0;
    session_destroy();
    header("Location: Index.php");

}
?>