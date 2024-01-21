<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  
    $startHours = isset($_GET['StartHours']) ? $_GET['StartHours'] : '';
    $startMinutes = isset($_GET['StartMinutes']) ? $_GET['StartMinutes'] : '';
    $endHours = isset($_GET['EndHours']) ? $_GET['EndHours'] : '';
    $endMinutes = isset($_GET['EndMinutes']) ? $_GET['EndMinutes'] : '';
    $durationHours = isset($_GET['DurationHours']) ? $_GET['DurationHours'] : '';
    $durationMinutes = isset($_GET['DurationMinutes']) ? $_GET['DurationMinutes'] : '';
    echo "Start Time: $startHours:$startMinutes<br>";
    echo "End Time: $endHours:$endMinutes<br>";
    echo "Duration: $durationHours Hrs $durationMinutes Min<br>";
}
?>