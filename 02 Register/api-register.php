<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
    $response = array(
        "success" => true,
        "message" => "Registration successful!",
        "data" => array(
            "name" => $name,
            "email" => $email,
            "gender" => $gender
        )
    );

    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    http_response_code(400);
    echo json_encode(array("error" => "Invalid request method"));
}
?>
