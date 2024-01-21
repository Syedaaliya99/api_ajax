<?php
header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $waterIntake = isset($_POST["waterIntake"]) ? $_POST["waterIntake"] : '';
    $sleepHours = isset($_POST["sleepHours"]) ? $_POST["sleepHours"] : '';
    $sleepMinutes = isset($_POST["sleepMinutes"]) ? $_POST["sleepMinutes"] : '';
    $exerciseHours = isset($_POST["exerciseHours"]) ? $_POST["exerciseHours"] : '';
    $exerciseMinutes = isset($_POST["exerciseMinutes"]) ? $_POST["exerciseMinutes"] : '';
    $caloriesGained = isset($_POST["caloriesGained"]) ? $_POST["caloriesGained"] : '';
    $caloriesBurned = isset($_POST["caloriesBurned"]) ? $_POST["caloriesBurned"] : '';
    $apiResponse = [
        "status" => "success",
        "message" => "Health report details saved successfully",
        "data" => [
            "waterIntake" => $waterIntake,
            "sleepHours" => $sleepHours,
            "sleepMinutes" => $sleepMinutes,
            "exerciseHours" => $exerciseHours,
            "exerciseMinutes" => $exerciseMinutes,
            "caloriesGained" => $caloriesGained,
            "caloriesBurned" => $caloriesBurned,
        ],
    ];

    echo json_encode($apiResponse);
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method"]);
}
?>
