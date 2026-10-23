<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Sun Son Solar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            /* Add the background image here */
            background: url('/images/bg-photo.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .nav { background: #333; overflow: hidden; }
        .nav a { float: left; color: white; padding: 14px 20px; text-decoration: none; }
        .container { padding: 40px 20px; max-width: 600px; margin: auto; }
        .form-box {
            /* Make the white box slightly transparent (0.9 opacity) */
            background: rgba(255, 255, 255, 0.95);
            border: 1px solid #ccc;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        input, select, textarea { width: 100%; padding: 10px; margin: 8px 0 20px; box-sizing: border-box; }
        button { background: #f4b41a; border: none; padding: 12px 20px; color: #333; cursor: pointer; font-size: 16px; border-radius: 4px; width: 100%; font-weight: bold;}
        button:hover { background: #e0a315; }
    </style>
</head>
<body>

<div class="nav">
    <a href="<?= site_url('register') ?>">Register</a>
</div>

<div class="container">
    <div class="form-box">
        <h2>Customer Registration</h2>
        <?php if (session()->getFlashdata('error')): ?>
            <p role="alert"><?= esc(session()->getFlashdata('error')) ?></p>
        <?php endif ?>
        <form action="<?= site_url('auth/register') ?>" method="post">
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
        <p>Already have an account? <a href="<?= site_url('login') ?>">Log in</a></p>
    </div>
</div>

</body>
</html>