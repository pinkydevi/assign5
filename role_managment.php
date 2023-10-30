<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['user']['role'] === 'admin') {
    // Only admins can access this page
    // Implement role management functionality here
} else {
    echo "You do not have permission to access this page.";
}
?>
