<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $time = isset($_POST['Time']) ? $_POST['Time'] : '';
    $carbohydrates = isset($_POST['Carbohydrates']) ? $_POST['Carbohydrates'] : '';
    $protein = isset($_POST['Protein']) ? $_POST['Protein'] : '';
    $calories = isset($_POST['Calories']) ? $_POST['Calories'] : '';
    echo "Time: $time<br>";
    echo "Carbohydrates: $carbohydrates grams<br>";
    echo "Protein: $protein grams<br>";
    echo "Calories: $calories Kcal<br>";
}
?>