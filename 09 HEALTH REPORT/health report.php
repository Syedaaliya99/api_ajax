<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $waterIntake = isset($_POST['waterIntake']) ? $_POST['waterIntake'] : '';
    $sleepHours = isset($_POST['sleepHours']) ? $_POST['sleepHours'] : '';
    $sleepMinutes = isset($_POST['sleepMinutes']) ? $_POST['sleepMinutes'] : '';
    $exerciseHours = isset($_POST['exerciseHours']) ? $_POST['exerciseHours'] : '';
    $exerciseMinutes = isset($_POST['exerciseMinutes']) ? $_POST['exerciseMinutes'] : '';
    $caloriesGained = isset($_POST['caloriesGained']) ? $_POST['caloriesGained'] : '';
    $caloriesBurned = isset($_POST['caloriesBurned']) ? $_POST['caloriesBurned'] : '';
    echo "Water Intake: $waterIntake Litres<br>";
    echo "Sleep: $sleepHours Hrs $sleepMinutes Mins<br>";
    echo "Exercise: $exerciseHours Hrs $exerciseMinutes Mins<br>";
    echo "Calories Gained: $caloriesGained kcal<br>";
    echo "Calories Burned: $caloriesBurned kcal<br>";
}
?>