<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Life Dashboard</title>
    <link rel="stylesheet" href="style/styles.css">
    <script src="javascript/script.js" defer></script>
</head>
<body>
    <nav>
        <ul> <li><span>Smart life</span></li>
            <li><a href="#" data-target="general">General</a></li>
            <li><a href="#" data-target="living-room">Living Room</a></li>
            <li><a href="#" data-target="office-room">Office Room</a></li>
            <li><a href="#" data-target="appliances">Appliances</a></li>
            <li><a href="#" data-target="security">Security</a></li>
            <li><a href="#" data-target="water-metering">Water Metering</a></li>
            <li><a href="#" data-target="electricity-metering">Electricity Metering</a></li>
            <li><a href="#" data-target="System-info">System info </a></li>
        </ul>
    </nav>
    <div id="content">
        <section id="general" class="tab-content active">
            <div class="top-bar">
                <div class="time-location" id="time-location">
                    <div id="analog-clock">
                        <div class="hour-hand"></div>
                        <div class="minute-hand"></div>
                        <div class="second-hand"></div>
                        <div class="center-circle"></div>
                    </div>
                    <!-- <div id="time">Loading...</div>
                    <div id="date">Loading...</div>
                    <div id="location">Location: Home</div> -->
                </div>
                <button class="power-button" onclick="togglePower()">Start</button>
            </div>
            <div class="center-div">
                <div class="big-glass">
                    <div class="glass-row">
                        <div class="glass">
                            <h2>Temperature</h2>
                            <img src="../Assets/icons/thermometer.png" alt="Temperature Icon" class="icon">
                            <div class="chart" id="temp-chart"></div>
                            <div class="indicator"><span id="temperature">Loading...</span> </div>
                            <div class="alert" id="temp-alert">Loading...</div>
                        </div>
                        <div class="glass">
                            <h2>Humidity</h2>
                            <img src="../Assets/icons/humidity.png" alt="Humidity Icon" class="icon">
                            <div class="chart" id="humidity-chart"></div>
                            <div class="indicator"><span id="humidity">Loading...</span></div>
                            <div class="alert" id="humidity-alert">Loading...</div>
                        </div>
                        <div class="glass">
                            <h2>Rain Status</h2>
                            <img src="../Assets/icons/rain.png" alt="Rain Icon" class="icon">
                            <div class="chart" id="rain-chart"></div>
                            <!-- <div class="indicator" id="rainstatus">Loading...</div> -->
                            <div class="alert" id="rainstatus">Loading...</div>
                        </div>
                    </div>
                    <div class="glass-row">
                        <div class="glass">
                            <h2>Smoke Detection</h2>
                            <img src="../Assets/icons/smoke.png" alt="Smoke Icon" class="icon">
                            <div class="chart" id="smoke-chart"></div>
                            <div class="indicator"><span id="sensor">Loading...</span> </div>
                            <div class="alert" id="sensor_data">Loading...</div>
                        </div>
                        <div class="glass">
                            <h2>Gas Detection</h2>
                            <img src="../Assets/icons/smoke.png" alt="Rain Icon" class="icon">
                            <div class="chart" id="rain-chart"></div>
                            <!-- <div class="indicator"><span id="sens">Loading...</span> </div> -->
                            <div class="alert" id="sens">Loading...</div>
                        </div>
                        <div class="glass">
                            <h2>UV detection</h2>
                            <img src="../Assets/icons/rain.png" alt="Rain Icon" class="icon">
                            <div class="chart" id="rain-chart"></div>
                            <div class="indicator" id="rain-status">Loading...</div>
                            <div class="alert" id="rain-alert">Loading...</div>
                        </div>
                    </div>
                    <div class="glass-row">
                        <div class="glass clock-div">
                            <h2>Clock & Location</h2>
                            <img src="../Assets/icons/clock.gif" alt="Clock Icon" class="icon">
                            <div id="time-location">
                                <div id="time">Loading...</div>
                                <div id="date">Loading...</div>
                                <div id="location">Location: Home</div>
                            </div>
                        </div>
                        <div class="glass status-div">
                            <h2>Status</h2>
                            <img src="../Assets/icons/info.png" alt="Rain Icon" class="icon">
                            <div class="indicator" id="alarm-status"></div>
                            <div class="indicator" id="smoke-status"></div>
                            <div class="indicator" id="gas-status"></div>
                            <div class="indicator" id="absorber-status"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="living-room" class="tab-content">
            <h1>Living Room Control</h1>
            <div class="glass">
                <h2>Fan</h2>
                <button class="glow-button" onclick="toggleFan()">Toggle Fan</button>
            </div>
            <!-- Add more divs for Living Room specific features -->
        </section>
        <section id="System-info" class="tab-content">
            <h1>System info</h1>
            <div class="glass">
            </div>
            <div class="center-div">
                <div class="big-glass">
                    <div class="glass-row">
                        <div class="glass">
                            <h2>Os type</h2>
                            <!-- <img src="../Assets/icons/thermometer.png" alt="Temperature Icon" class="icon"> -->
                            <div class="chart" id="temp-chart"></div>
                            <div class="indicator"><span id="temperature">Loading...</span> </div>
                            <div class="alert" id="temp-alert">Loading...</div>
                        </div>
                        <div class="glass">
                            <h2>Humidity</h2>
                            <img src="../Assets/icons/humidity.png" alt="Humidity Icon" class="icon">
                            <div class="chart" id="humidity-chart"></div>
                            <div class="indicator"><span id="humidity">Loading...</span></div>
                            <div class="alert" id="humidity-alert">Loading...</div>
                        </div>
                        <div class="glass">
                            <h2>Rain Status</h2>
                            <img src="../Assets/icons/rain.png" alt="Rain Icon" class="icon">
                            <div class="chart" id="rain-chart"></div>
                            <!-- <div class="indicator" id="rainstatus">Loading...</div> -->
                            <div class="alert" id="rainstatus">Loading...</div>
                        </div>
                    </div>
                    <div class="glass-row">
                        <div class="glass">
                            <h2>Smoke Detection</h2>
                            <img src="../Assets/icons/smoke.png" alt="Smoke Icon" class="icon">
                            <div class="chart" id="smoke-chart"></div>
                            <div class="indicator"><span id="sensor">Loading...</span> </div>
                            <div class="alert" id="sensor_data">Loading...</div>
                        </div>
                        <div class="glass">
                            <h2>Gas Detection</h2>
                            <img src="../Assets/icons/smoke.png" alt="Rain Icon" class="icon">
                            <div class="chart" id="rain-chart"></div>
                            <!-- <div class="indicator"><span id="sens">Loading...</span> </div> -->
                            <div class="alert" id="sens">Loading...</div>
                        </div>
                        <div class="glass">
                            <h2>UV detection</h2>
                            <img src="../Assets/icons/rain.png" alt="Rain Icon" class="icon">
                            <div class="chart" id="rain-chart"></div>
                            <div class="indicator" id="rain-status">Loading...</div>
                            <div class="alert" id="rain-alert">Loading...</div>
                        </div>
                    </div>
                    <div class="glass-row">
                        <div class="glass clock-div">
                            <h2>Clock & Location</h2>
                            <img src="../Assets/icons/clock.gif" alt="Clock Icon" class="icon">
                            <div id="time-location">
                                <div id="time">Loading...</div>
                                <div id="date">Loading...</div>
                                <div id="location">Location: Home</div>
                            </div>
                        </div>
                        <div class="glass status-div">
                            <h2>Status</h2>
                            <img src="../Assets/icons/info.png" alt="Rain Icon" class="icon">
                            <div class="indicator" id="alarm-status"></div>
                            <div class="indicator" id="smoke-status"></div>
                            <div class="indicator" id="gas-status"></div>
                            <div class="indicator" id="absorber-status"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add more divs for Living Room specific features -->
        </section>
        <!-- Add other sections for Office Room, Appliances, Security, etc. -->
    </div>
    <!-- <script>
        function fetchData() {
            fetch('get_data.php')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('humidity').textContent = data.humidity;
                    document.getElementById('temperature').textContent = data.temperature;
                    document.getElementById('sensor').textContent = data.Sensor;
                })
                .catch(error => console.error('Error fetching data:', error));
                if(data.Sensor >= 200 && data.Sensor < 270){
                document.getElementById('sensor_data').textContent = "Warning smoke detected (it seems someone is smoking or there is  ";
            }
        }

        // Fetch data every 5 seconds
        setInterval(fetchData, 0);

        // Initial fetc
        fetchData();
        
    </script> -->
</body>
</html>
