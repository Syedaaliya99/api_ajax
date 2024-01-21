document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    form.addEventListener("submit", function (event) {
        event.preventDefault();
        const waterIntake = document.getElementById("waterIntake").value;
        const sleepHours = document.getElementById("sleepHours").value;
        const sleepMinutes = document.getElementById("sleepMinutes").value;
        const exerciseHours = document.getElementById("exerciseHours").value;
        const exerciseMinutes = document.getElementById("exerciseMinutes").value;
        const caloriesGained = document.getElementById("caloriesGained").value;
        const caloriesBurned = document.getElementById("caloriesBurned").value;
        fetch('api_health_report.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            
            body: new URLSearchParams({
                waterIntake,
                sleepHours,
                sleepMinutes,
                exerciseHours,
                exerciseMinutes,
                caloriesGained,
                caloriesBurned,
            }),
        })
        .then(response => response.json())
        .then(data => {
            console.log('API Response:', data);

            if (data.status === 'success') {
       
                alert('Health report details saved successfully!');
            } else {
             
                alert('Error: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});