<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Technician Dashboard - Sun Son Solar</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .nav { background: #0056b3; padding: 10px; color: white; margin-bottom: 20px; }
        .nav a { color: white; text-decoration: none; margin-right: 15px; }
        .card { border: 1px solid #ccc; padding: 15px; margin-bottom: 15px; border-radius: 5px; }
        .btn-checkin { background: #28a745; color: white; padding: 15px 30px; font-size: 18px; border: none; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="nav">
        <strong>Sun Son Field Portal</strong>
        <span style="float: right;">
            Welcome, <?= esc($username) ?> | <a href="<?= site_url('auth/logout') ?>">Logout</a>
        </span>
    </div>

    <h1>Technician Dashboard</h1>

    <div class="card" style="text-align: center; background: #f8f9fa;">
        <h3>Site Check-In</h3>
        <p>Click the button below upon arriving at the client site.</p>
        <button class="btn-checkin" onclick="getLocation()">Check-In Now</button>
        <p id="location-status" style="margin-top: 10px; font-weight: bold;"></p>
    </div>

    <div class="card">
        <h3>Report a Problem</h3>
        <form action="<?= site_url('technician/submit_report') ?>" method="post">
            <textarea name="report_text" style="width: 100%; height: 80px;" placeholder="Log equipment issues or customer concerns here..." required></textarea><br><br>
            <button type="submit">Submit Report to Admin</button>
        </form>
    </div>

    <script>
        function getLocation() {
            const status = document.getElementById("location-status");
            status.innerHTML = "Locating...";
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(sendPosition, showError);
            } else { 
                status.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function sendPosition(position) {
            const status = document.getElementById("location-status");
            let lat = position.coords.latitude;
            let lon = position.coords.longitude;

            fetch('<?= site_url('technician/save_checkin') ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: 'latitude=' + lat + '&longitude=' + lon
            })
            .then(response => response.json())
            .then(data => {
                let time = new Date().toLocaleString();
                status.innerHTML = "Checked in successfully at " + time + "<br>Lat: " + lat + " | Lon: " + lon;
                status.style.color = "green";
            })
            .catch(error => {
                status.innerHTML = "Error saving location to database.";
                status.style.color = "red";
            });
        }

        function showError(error) {
            const status = document.getElementById("location-status");
            status.innerHTML = "Error retrieving location. Please allow location permissions.";
            status.style.color = "red";
        }
    </script>
</body>
</html>