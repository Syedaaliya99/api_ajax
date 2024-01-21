document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    form.addEventListener("submit", function (event) {
        event.preventDefault();
        const sleepStartHours = document.getElementById("sleepStartHours").value;
        const sleepStartMinutes = document.getElementById("sleepStartMinutes").value;
        const sleepEndHours = document.getElementById("sleepEndHours").value;
        const sleepEndMinutes = document.getElementById("sleepEndMinutes").value;
        fetch('api_sleep.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams({
                sleepStartHours,
                sleepStartMinutes,
                sleepEndHours,
                sleepEndMinutes,
            }),
        })
        .then(response => response.json())
        .then(data => {
            console.log('API Response:', data);

            if (data.status === 'success') {
          
                alert('Sleep details saved successfully!');
            } else {
     
                alert('Error: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
</script>
