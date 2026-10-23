<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Dashboard - Sun Son Solar</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .nav { background: #f4b41a; padding: 10px; color: white; margin-bottom: 20px; }
        .nav a { color: white; text-decoration: none; margin-right: 15px; }
        .card { border: 1px solid #ccc; padding: 15px; margin-bottom: 15px; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="nav">
        <strong>Sun Son Solar</strong>
        <span style="float: right;">
            Welcome, <?= esc($username) ?> | <a href="/auth/logout">Logout</a>
        </span>
    </div>

    <h1>My Dashboard</h1>

    <div class="card">
        <h3>My Schedule</h3>
        <p>View and manage scheduled services (consultation, installation, maintenance).</p>
    </div>

    <div class="card">
        <h3>Notifications</h3>
        <p>No new reminders, updates, or promotions at this time.</p>
    </div>

    <div class="card">
        <h3>History & Profile</h3>
        <p>View completed services, update personal information, and manage preferences.</p>
    </div>

    <div class="card">
        <h3>Support & Help</h3>
        <p>Contact us directly if you encounter issues.</p>
        <button>Open Support Ticket</button>
    </div>
</body>
</html>