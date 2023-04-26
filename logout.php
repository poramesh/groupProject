<?php
/* This page destroys the session and logouts from the system*/


// destroy the session
session_destroy();

// redirect to the login page or any other page you want
header("Location: loginPage.html");
exit;
?>