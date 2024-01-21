<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process registration form submission
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";

    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Password: $password<br>";
    echo "Confirm Password: $confirmPassword<br>";
    echo "Gender: $gender<br>";
}
?>
