<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
   
    $sleepStartHours = isset($_GET['sleepStartHours']) ? $_GET['sleepStartHours'] : '';
    $sleepStartMinutes = isset($_GET['sleepStartMinutes']) ? $_GET['sleepStartMinutes'] : '';
    $sleepEndHours = isset($_GET['sleepEndHours']) ? $_GET['sleepEndHours'] : '';
    $sleepEndMinutes = isset($_GET['sleepEndMinutes']) ? $_GET['sleepEndMinutes'] : '';
    $sleepDurationHours = isset($_GET['sleepDurationHours']) ? $_GET['sleepDurationHours'] : '';
    $sleepDurationMinutes = isset($_GET['sleepDurationMinutes']) ? $_GET['sleepDurationMinutes'] : '';
    echo "Sleep Start Time: $sleepStartHours:$sleepStartMinutes<br>";
    echo "Sleep End Time: $sleepEndHours:$sleepEndMinutes<br>";
    echo "Sleep Duration: $sleepDurationHours Hrs $sleepDurationMinutes Min<br>";
}
?>