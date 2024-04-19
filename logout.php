<!-- logout.php -->

<?php
session_start(); // Start the session
session_destroy(); // Destroy all session data

// Redirect to login page after logout
header("Location: login.php");
exit(); // Make sure no further code is executed after redirection
?>
