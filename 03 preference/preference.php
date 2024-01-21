<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Process form submission
    $age = isset($_GET["age"]) ? $_GET["age"] : "";
    $height = isset($_GET["height"]) ? $_GET["height"] : "";
    $weight = isset($_GET["weight"]) ? $_GET["weight"] : "";
    echo "Age: $age<br>";
    echo "Height: $height ft<br>";
    echo "Weight: $weight kg<br>";
}
?>
