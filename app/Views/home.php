<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sun Son Solar</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        .hero { background: #f4b41a; padding: 50px 20px; text-align: center; color: white; }
        .nav { background: #333; overflow: hidden; }
        .nav a { float: left; color: white; padding: 14px 20px; text-decoration: none; }
        .container { padding: 20px; max-width: 1200px; margin: auto; }
        .form-box { border: 1px solid #ccc; padding: 20px; margin-bottom: 20px; border-radius: 5px; }
    </style>
</head>
<body>

<div class="nav">
    <a href="/">Home</a>
    <a href="/#services">Services</a>
    <a href="/#login">Login</a>
    <a href="/register">Register</a>
</div>

<div class="hero">
    <h1>Power Your Future with Solar</h1>
    <p>Cost savings, sustainability, and energy independence.</p>
</div>

<div class="container">
    <section id="services">
        <h2>Our Services</h2>
        <p>Consultation, designing, permitting, installation, maintenance, repair, and monitoring.</p>
    </section>

    <div style="display: flex; justify-content: center; margin-top: 30px;">
        <div class="form-box" id="login" style="width: 100%; max-width: 400px;">
            <h2>Login</h2>
            <form action="/auth/login_process" method="post">
                <label>Username:</label><br>
                <input type="text" name="username" required><br><br>
                <label>Password:</label><br>
                <input type="password" name="password" required><br><br>
                <button type="submit">Log In</button>
            </form>
        </div>
    </div>
</div>

<footer style="background: #333; color: white; text-align: center; padding: 20px; margin-top: 40px;">
    <p>Sun Son Solar &copy; 2026. Pasig City.</p>
</footer>

</body>
</html>