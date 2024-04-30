<?php

if (session_status() == PHP_SESSION_ACTIVE) {
    session_destroy();
    // Additional cleanup or logout logic can be added here
    header("Location: index.php"); // Redirect to your login page
    exit(); // Ensure that no further code is executed after the redirect
} else {
    // Redirect to the login page if the session is not active
    header("Location: index.php");
    exit();
}