      document.addEventListener('DOMContentLoaded', function () {
        fetch('api.php', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            },
        })
        .then(response => response.json())
        .then(data => {
            console.log('API Response:', data);
            document.getElementById('caloriesBurnt1').textContent = data.caloriesBurnt1;
            document.getElementById('caloriesBurnt2').textContent = data.caloriesBurnt2;
            document.getElementById('exerciseTime').textContent = data.exerciseTime;
            document.getElementById('sleepTime').textContent = data.sleepTime;
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });