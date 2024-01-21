<?php
header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $startHours = isset($_GET["StartHours"]) ? $_GET["StartHours"] : 0;
    $startMinutes = isset($_GET["StartMinutes"]) ? $_GET["StartMinutes"] : 0;
    $endHours = isset($_GET["EndHours"]) ? $_GET["EndHours"] : 0;
    $endMinutes = isset($_GET["EndMinutes"]) ? $_GET["EndMinutes"] : 0;
    

    $startTimestamp = $startHours * 60 + $startMinutes;
    $endTimestamp = $endHours * 60 + $endMinutes;
    $durationMinutes = ($endTimestamp - $startTimestamp + 1440) % 1440;

    $durationHours = floor($durationMinutes / 60);
    $remainingMinutes = $durationMinutes % 60;

    $apiResponse = [
        "status" => "success",
        "message" => "Exercise details saved successfully",
        "data" => [
            "startHours" => $startHours,
            "startMinutes" => $startMinutes,
            "endHours" => $endHours,
            "endMinutes" => $endMinutes,
            "durationHours" => $durationHours,
            "durationMinutes" => $remainingMinutes,
        ],
    ];

    echo json_encode($apiResponse);
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method"]);
}
?>
