<?php
    session_start();
    if(isset($_SESSION['username']))
    {
        session_unset();
        session_destroy();
        setcookie("successMsg", "Logout Successful!", time() + 5);
    }
    header("Location: login.php");
?>