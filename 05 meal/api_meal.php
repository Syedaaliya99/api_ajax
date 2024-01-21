<?php
header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $time = isset($_POST['Time']) ? $_POST['Time'] : '';
    $carbohydrates = isset($_POST['Carbohydrates']) ? $_POST['Carbohydrates'] : '';
    $protein = isset($_POST['Protein']) ? $_POST['Protein'] : '';
    $calories = isset($_POST['Calories']) ? $_POST['Calories'] : '';

    $apiResponse = [
        "status" => "success",
        "message" => "Meal details saved successfully",
        "data" => [
            "time" => $time,
            "carbohydrates" => $carbohydrates,
            "protein" => $protein,
            "calories" => $calories,
        ],
    ];

    echo json_encode($apiResponse);
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method"]);
}
?>
