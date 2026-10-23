<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Sun Son Solar</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .nav { background: #333; padding: 10px; color: white; margin-bottom: 20px; }
        .nav a { color: white; text-decoration: none; margin-right: 15px; }
        .card { border: 1px solid #ccc; padding: 15px; margin-bottom: 15px; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="nav">
        <strong>Sun Son Solar Admin</strong>
        <span style="float: right;">
            Welcome, <?= esc($username) ?> | <a href="/auth/logout">Logout</a>
        </span>
    </div>

    <h1>Administrator Dashboard</h1>

    <div class="card">
        <h3>Create Employee Account</h3>
        <p>Register new technicians or office staff here.</p>
        <form action="/admin/register_employee" method="post">
            <select name="role" required>
                <option value="employee">Office Employee</option>
                <option value="technician">Field Technician</option>
            </select>
            <select name="department" required>
                <option value="Administration">Administration</option>
                <option value="IT">IT</option>
                <option value="Dispatch">Dispatch</option>
                <option value="Accounting">Accounting</option>
                <option value="HR">HR</option>
                <option value="Marketing">Marketing</option>
                <option value="Sales">Sales</option>
                <option value="Customer Service">Customer Service</option>
            </select><br><br>
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="middle_name" placeholder="Middle Name">
            <input type="text" name="last_name" placeholder="Last Name" required><br><br>
            <input type="date" name="birthdate" required>
            <select name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br><br>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="phone_number" placeholder="Phone Number" required><br><br>
            <textarea name="address" placeholder="Address" required></textarea><br><br>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <button type="submit">Create Account</button>
        </form>
    </div>

    <div class="card">
        <h3>Schedule Overview & Dispatch</h3>
        <p>View customer bookings in a calendar view, assign technicians, and approve/decline requests.</p>
    </div>
</body>
</html>