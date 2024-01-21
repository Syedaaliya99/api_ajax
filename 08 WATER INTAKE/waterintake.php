<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $quantityPerTime = isset($_POST['quantityPerTime']) ? $_POST['quantityPerTime'] : '';
    $frequencyOfIntake = isset($_POST['frequencyOfIntake']) ? $_POST['frequencyOfIntake'] : '';
    $totalWaterIntake = $quantityPerTime * $frequencyOfIntake;
    echo "Quantity Per Time: $quantityPerTime Litres<br>";
    echo "Frequency of Intake: $frequencyOfIntake Times<br>";
    echo "Total Water Intake: $totalWaterIntake Litres<br>";
}
?>