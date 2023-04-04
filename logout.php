<?php



// destroy the session
session_destroy();

// redirect to the login page or any other page you want
header("Location: loginPage.html");
exit;
?>