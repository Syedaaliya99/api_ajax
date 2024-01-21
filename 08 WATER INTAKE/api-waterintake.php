<?php
header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $quantityPerTime = isset($_POST["quantityPerTime"]) ? $_POST["quantityPerTime"] : 0;
    $frequencyOfIntake = isset($_POST["frequencyOfIntake"]) ? $_POST["frequencyOfIntake"] : 0;

    $totalWaterIntake = $quantityPerTime * $frequencyOfIntake;

    $apiResponse = [
        "status" => "success",
        "message" => "Water intake details saved successfully",
        "data" => [
            "quantityPerTime" => $quantityPerTime,
            "frequencyOfIntake" => $frequencyOfIntake,
            "totalWaterIntake" => $totalWaterIntake,
        ],
    ];

    echo json_encode($apiResponse);
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method"]);
}
?>

