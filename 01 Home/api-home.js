document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.form');
    if (form) {
        form.addEventListener('submit', function (event) {
            event.preventDefault(); 
            const email = document.querySelector('input[type="email"]').value;
            const password = document.querySelector('input[type="password"]').value;
            fetch('file:///C:/Users/Hp/Desktop/New%20folder%20(2)/Home/home.html', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    email: email,
                    password: password
                }),
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log('API data:', data);
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });
        });
    }
});