<?php
header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $startHours = isset($_POST["sleepStartHours"]) ? $_POST["sleepStartHours"] : '';
    $startMinutes = isset($_POST["sleepStartMinutes"]) ? $_POST["sleepStartMinutes"] : '';
    $endHours = isset($_POST["sleepEndHours"]) ? $_POST["sleepEndHours"] : '';
    $endMinutes = isset($_POST["sleepEndMinutes"]) ? $_POST["sleepEndMinutes"] : '';
    $apiResponse = [
        "status" => "success",
        "message" => "Sleep details saved successfully",
        "data" => [
            "startHours" => $startHours,
            "startMinutes" => $startMinutes,
            "endHours" => $endHours,
            "endMinutes" => $endMinutes,
        ],
    ];

    echo json_encode($apiResponse);
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method"]);
}
?>
