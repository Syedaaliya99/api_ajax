<?php
header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Process API request and return JSON response
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $isValidLogin = validateLogin($email, $password);

    if ($isValidLogin) {
        $apiResponse = [
            "status" => "success",
            "message" => "Login successful",
            "data" => [
                "user_email" => $email,
            ],
        ];
    } else {
        $apiResponse = [
            "status" => "error",
            "message" => "Invalid email or password",
        ];
    }

    echo json_encode($apiResponse);
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method"]);
}

function validateLogin($email, $password) {
   return ($email === 'example@example.com' && $password === 'password');
}
?>
