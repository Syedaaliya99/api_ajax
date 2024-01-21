document.addEventListener("DOMContentLoaded", function () {
    var waterForm = document.getElementById('waterForm');
    waterForm.addEventListener('submit', function (event) {
        event.preventDefault();
        fetch('api_water_intake.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
   
            body: new URLSearchParams(new FormData(this)),
        })
        .then(response => response.json())
        .then(data => {
            console.log('API Response:', data);

            if (data.status === 'success') {

                alert('Water intake details saved successfully!');
            } else {
      
                alert('Error: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});