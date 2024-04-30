<?php
// Start a session
session_start();
require '../Core/databaseconnection.php'; // Include the database connection code


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get profile form data
    $gender = $_POST['gender'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $age = $_POST['age'];
    $bodyFat = $_POST['bodyfat'];
    $bmi = $_POST['bmi'];
}

// Retrieve the user's email from the session
if (isset($_SESSION['user_email'])) {
$userEmail = $_SESSION['user_email'];

    //Dump the Variables section
    //var_dump($userEmail);
    //Result for the variable dump
    //string(30) "salahari@northislandcollege.ca"

    //Stack Trace section
    //Since my PHP files doesn't have classes and functions, using debug_backtrace() and debug_print_backtrace()
    //might not be as straightforward because these functions are typically used within functions or methods
    // to inspect the call stack.

    //echo '<pre>';
    //print_r($userEmail);
    //echo '</pre>';
    //Result
    //salahari@northislandcollege.ca
    //array(0) { }

    //Log the variable result in debug.log file
    //error_log($userEmail, 3, 'debug.log');

    // Add manual breakpoint to know the $user_Email variable content
    //die();
//Update name in profile table based on the email in users table using subquery
$queryNameUpdate = $pdo->prepare("UPDATE profile
        JOIN users ON profile.email = users.email
        SET profile.name = IFNULL(users.name, 'Default Name')
        WHERE profile.email = :email");

$queryNameUpdate->bindParam(':email', $userEmail);

// Execute the name update query
$nameUpdated = $queryNameUpdate->execute();


//Update data in profile table
$query = $pdo->prepare("UPDATE profile
    SET gender = :gender, height = :height, weight = :weight, age = :age, body_fat_percent = :body_fat_percent, bmi = :bmi
    WHERE email = :email");

// Bind the values for the profile update
$query->bindParam(':gender', $gender);
$query->bindParam(':height', $height);
$query->bindParam(':weight', $weight);
$query->bindParam(':age', $age);
$query->bindParam(':body_fat_percent', $bodyFat);
$query->bindParam(':bmi', $bmi);
$query->bindParam(':email', $userEmail);

//Execute the profile update query
$profileUpdated = $query->execute();



if ($profileUpdated ) {
        //var_dump(debug_backtrace());
        //debug_print_backtrace();
        echo '<script type="text/javascript">';
        echo 'alert("Profile updated succesfully, Click OK to go to next page.");';
        echo 'window.location.href = "../Controllers/progresstracking.php";';
        echo '</script>';
} else {
    echo "<h2>Error updating profile or name.<h2>";
}

} else{
    echo "<h2>User email not found<h2>";
}