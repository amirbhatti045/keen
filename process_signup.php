<?php
// process_signup.php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];
    $how_heard = $_POST["how_heard"];

    // Process the data as needed (e.g., store in database, send confirmation email, etc.)
    // For demonstration purposes, let's just print the submitted data
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password . "<br>";
    echo "How Heard: " . $how_heard . "<br>";
}
?>
