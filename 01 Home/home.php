<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form submission
    $email = $_POST["email"];
    $password = $_POST["password"];

    echo "Email: $email<br>";
    echo "Password: $password<br>";
}
?>
