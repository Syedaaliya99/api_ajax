document.addEventListener("DOMContentLoaded", function () {
    var mealForm = document.getElementById('mealForm');
    mealForm.addEventListener('submit', function (event) {
        event.preventDefault();
        handleFormSubmission();
    });

    function handleFormSubmission() {
        var timeValue = document.getElementById('Time').value;
        var carbohydratesValue = document.getElementById('Carbohydrates').value;
        var proteinValue = document.getElementById('Protein').value;
        var caloriesValue = document.getElementById('Calories').value;
        if (timeValue.trim() === '' || isNaN(carbohydratesValue) || isNaN(proteinValue) || isNaN(caloriesValue)) {
            alert('Please fill in all the fields with valid numeric values.');
            return;
        }
        if (carbohydratesValue <= 0 || proteinValue <= 0 || caloriesValue <= 0) {
            alert('Please enter values greater than zero for Carbohydrates, Protein, and Calories.');
            return;
        }

        var mealDetails = {
            Time: timeValue,
            Carbohydrates: carbohydratesValue,
            Protein: proteinValue,
            Calories: caloriesValue
        };
        fetch('api_meal.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(mealDetails),
        })
        .then(response => response.json())
        .then(data => {

            alert('Meal Details Saved!');

        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
});