<?php
header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "GET") {
   
    $apiResponse = [
        "status" => "success",
        "caloriesBurnt1" => "50,000 Cal",
        "caloriesBurnt2" => "10,500 Cal",
        "exerciseTime" => "1022/1300",
        "sleepTime" => "122/130",
        "caloriesGained" => [
            "sources" => ["Breakfast", "Lunch", "Dinner", "Other"],
            "values" => ["10,000", "10,000", "10,000", "10,000"],
            "dates" => ["2022-02-12", "2022-02-12", "2022-02-13", "2022-02-13"],
            "times" => ["10:00 A.M", "10:00 A.M", "10:00 A.M", "10:00 A.M"],
        ],
    ];

    echo json_encode($apiResponse);
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method"]);
}
?>
