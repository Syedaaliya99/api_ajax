document.addEventListener("DOMContentLoaded", function () {
    function calculateDuration() {
        var startHours = parseInt(document.getElementsByName("StartHours")[0].value) || 0;
        var startMinutes = parseInt(document.getElementsByName("StartMinutes")[0].value) || 0;
        var endHours = parseInt(document.getElementsByName("EndHours")[0].value) || 0;
        var endMinutes = parseInt(document.getElementsByName("EndMinutes")[0].value) || 0;


        if (isNaN(startHours) || isNaN(startMinutes) || isNaN(endHours) || isNaN(endMinutes)) {
            startHours = startMinutes = endHours = endMinutes = 0;
        }

        var startTimestamp = startHours * 60 + startMinutes;
        var endTimestamp = endHours * 60 + endMinutes;

        var durationMinutes = (endTimestamp - startTimestamp + 1440) % 1440;

        var durationHours = Math.floor(durationMinutes / 60);
        var remainingMinutes = durationMinutes % 60;

        document.getElementsByName("DurationHours")[0].value = durationHours;
        document.getElementsByName("DurationMinutes")[0].value = remainingMinutes;
    }
    }

    function validateForm() { var requiredFields = ['StartHours', 'StartMinutes', 'EndHours', 'EndMinutes'];
    for (var i = 0; i < requiredFields.length; i++) {
        var field = requiredFields[i];
        if (!document.getElementsByName(field)[0].value) {
            alert("Please fill in all fields.");
            return false;
        }
    }
    return true;
}
    }

    document.querySelector('input[value="Save"]').addEventListener("click", function () {
        calculateDuration();
    });

    document.querySelector('input[value="Next"]').addEventListener("click", function (event) {
        if (!validateForm()) {
            event.preventDefault();
        }
    });

    var inputFields = document.querySelectorAll('input[type="number"]');
    for (var i = 0; i < inputFields.length; i++) {
        inputFields[i].addEventListener('input', calculateDuration);
    }

    document.querySelector('form').addEventListener('submit', function (event) {
        event.preventDefault();
        fetch('api_exercise.php', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            },
       
            body: new URLSearchParams(new FormData(this)),
        })
        .then(response => response.json())
        .then(data => {
            console.log('API Response:', data);

            if (data.status === 'success') {
             
                alert('Exercise details saved successfully!');
            } else {
      
                alert('Error: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});