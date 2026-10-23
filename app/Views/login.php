<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Sun Son Solar</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f8f9fa; color: #333; }
        .nav { background: #333; overflow: hidden; }
        .nav a { float: left; color: #fff; padding: 14px 20px; text-decoration: none; }
        .nav a:hover { background: #f4b41a; color: #333; }
        .container { max-width: 440px; margin: 60px auto; padding: 0 20px; }
        .form-box { background: #fff; border: 1px solid #ddd; border-top: 4px solid #f4b41a; border-radius: 8px; padding: 30px; box-shadow: 0 4px 15px rgba(0, 0, 0, .1); }
        input { display: block; width: 100%; padding: 12px; margin: 8px 0 20px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { width: 100%; padding: 12px 20px; border: 0; border-radius: 4px; background: #333; color: #fff; font-size: 16px; font-weight: bold; cursor: pointer; }
        button:hover { background: #555; }
        .message { padding: 10px; border-radius: 4px; }
        .error { background: #f8d7da; color: #842029; }
        .success { background: #d1e7dd; color: #0f5132; }
    </style>
</head>
<body>
<nav class="nav">
    <a href="<?= site_url('register') ?>">Register</a>
</nav>
<main class="container">
    <section class="form-box">
        <h1>Log in</h1>
        <p>Access your customer, admin, or technician account.</p>
        <?php if ($error = session()->getFlashdata('error')): ?>
            <p class="message error" role="alert"><?= esc($error) ?></p>
        <?php endif ?>
        <?php if ($success = session()->getFlashdata('success')): ?>
            <p class="message success" role="status"><?= esc($success) ?></p>
        <?php endif ?>
        <form action="<?= site_url('auth/login_process') ?>" method="post">
            <label for="username">Username</label>
            <input id="username" type="text" name="username" autocomplete="username" required>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" autocomplete="current-password" required>
            <button type="submit">Log In</button>
        </form>
        <p>New to Sun Son Solar? <a href="<?= site_url('register') ?>">Create an account</a></p>
    </section>
</main>
</body>
</html>
