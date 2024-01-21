<?php
header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    $response = [
        "status" => "success",
        "message" => "Preferences saved successfully",
        "data" => $data,
    ];

    echo json_encode($response);
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method"]);
}
?>
