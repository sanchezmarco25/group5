<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Sun Son Solar</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f8f9fa; }
        .nav { background: #333; overflow: hidden; }
        .nav a { float: left; color: white; padding: 14px 20px; text-decoration: none; }
        .container { padding: 40px 20px; max-width: 600px; margin: auto; }
        .form-box { background: white; border: 1px solid #ccc; padding: 30px; border-radius: 5px; }
        input, select, textarea { width: 100%; padding: 10px; margin: 8px 0 20px; box-sizing: border-box; }
        button { background: #f4b41a; border: none; padding: 12px 20px; color: white; cursor: pointer; font-size: 16px; border-radius: 4px; width: 100%;}
    </style>
</head>
<body>

<div class="nav">
    <a href="/">Home</a>
    <a href="/register">Register</a>
</div>

<div class="container">
    <div class="form-box">
        <h2>Customer Registration</h2>
        <form action="/auth/register" method="post">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="middle_name" placeholder="Middle Name">
            <input type="text" name="last_name" placeholder="Last Name" required>
            
            <label>Birthdate:</label>
            <input type="date" name="birthdate" required>
            
            <select name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="text" name="phone_number" placeholder="Phone Number" required>
            <textarea name="address" placeholder="Home Address" required></textarea>
            
            <hr style="margin: 20px 0; border: 0; border-top: 1px solid #eee;">
            
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            
            <button type="submit">Create Account</button>
        </form>
    </div>
</div>

</body>
</html>