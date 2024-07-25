document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('nav ul li a');
    const tabContents = document.querySelectorAll('.tab-content');

    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const target = this.dataset.target;

            tabContents.forEach(content => {
                content.classList.remove('active');
            });

            document.getElementById(target).classList.add('active');
        });
    });

    function fetchData() {
        fetch('../Php_files/get_data.php')
            .then(response => response.json())
            .then(data => {
                document.getElementById('temperature').textContent = data.temperature + ' °C';
                document.getElementById('humidity').textContent = data.humidity + ' %';
                document.getElementById('sensor').textContent = data.sensor;

                if (data.temperature > 30) {
                    document.getElementById('temp-alert').innerText = 'Temperature is too high!';
                    document.getElementById('temp-alert').style.color = 'red';
                } else {
                    document.getElementById('temp-alert').innerText = 'Temperature is normal';
                    document.getElementById('temp-alert').style.color = 'green';
                }

                if (data.humidity > 70) {
                    document.getElementById('humidity-alert').innerText = 'Humidity is too high!';
                    document.getElementById('humidity-alert').style.color = 'red';
                } else {
                    document.getElementById('humidity-alert').innerText = 'Humidity is normal';
                    document.getElementById('humidity-alert').style.color = 'green';
                }

                if (data.sensor >= 200 && data.sensor < 300) {
                    document.getElementById('sensor_data').innerText = 'Smoke level is critical!';
                    document.getElementById('sensor_data').style.color = 'red';
                } else {
                    document.getElementById('sensor_data').innerText = 'Smoke level is normal';
                    document.getElementById('sensor_data').style.color = 'green';
                }

                if (data.sensor >= 300) {
                    document.getElementById('sens').innerText = 'Gas is leaking';
                    document.getElementById('sens').style.color = 'red';
                } else {
                    document.getElementById('sens').innerText = 'No presence of gas leakage';
                    document.getElementById('sens').style.color = 'green';
                }

                document.getElementById('alarm-alert').innerText = data.alarm ? 'Alarm triggered!' : 'No alarms';

                // Call predictRainfall after fetching data
                predictRainfall(data.temperature, data.humidity);
            })
            .catch(error => console.error('Error fetching data:', error));
    }

    function predictRainfall(temperature, humidity) {
        if (temperature < 20 && humidity > 80) {
            document.getElementById('rainstatus').innerText = 'High chance of rain';
            document.getElementById('rainstatus').style.color = 'red';
        } else if (temperature < 25 && humidity > 70) {
            document.getElementById('rainstatus').innerText = 'Moderate chance of rain';
            document.getElementById('rainstatus').style.color = 'yellow';
        } else if (temperature < 30 && humidity > 60) {
            document.getElementById('rainstatus').innerText = 'Low chance of rain';
            document.getElementById('rainstatus').style.color = 'green';
        } else {
            document.getElementById('rainstatus').innerText = 'No chance of rain';
            document.getElementById('rainstatus').style.color = 'blue';
        }
    }

    function updateTimeAndLocation() {
        document.getElementById('time').innerText = `Time: ${new Date().toLocaleTimeString()}`;
        document.getElementById('date').innerText = `Date: ${new Date().toLocaleDateString()}`;
        document.getElementById('location').innerText = `Location: Home`; // Placeholder
    }

    setInterval(fetchData, 0); // Fetch data every 10 seconds
    setInterval(updateTimeAndLocation, 0); // Update time and location every second

    fetchData();
    updateTimeAndLocation();
});

function togglePower() {
    const button = document.querySelector('.power-button');
    if (button.classList.contains('on')) {
        button.classList.remove('on');
        button.style.background = '#ff0000';
        button.textContent = 'Start';
    } else {
        button.classList.add('on');
        button.style.background = '#00ff00';
        button.textContent = 'On';
        // Make a request to execute main.py
        fetch('../Python_file/main.py', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ action: 'start' })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to execute main.py');
            }
            return response.json();
        })
        .then(data => {
            console.log(data);
        })
        .catch(error => {
            console.error('Error executing main.py:', error);
        });
    }
}
