<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Validate form data (basic example)
    if (!empty($name) && !empty($email)) {
        // Process form data
        echo "Hello, $name! Your email is: $email";
    } else {
        echo "Please fill out all fields.";
    }
} else {
    // Redirect to the form page if accessed directly
    header("Location: form.html");
    exit();
}
?>

    
</body>
</html>