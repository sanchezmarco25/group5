<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sun Son Solar - Pasig City</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f8f9fa; line-height: 1.6; }
        .hero { background: #f4b41a; padding: 60px 20px; text-align: center; color: #333; }
        .hero h1 { margin: 0; font-size: 2.5em; }
        .nav { background: #333; overflow: hidden; position: sticky; top: 0; z-index: 100; }
        .nav a { float: left; color: white; padding: 14px 20px; text-decoration: none; font-weight: bold; }
        .nav a:hover { background: #f4b41a; color: #333; }
        .container { padding: 20px; max-width: 1200px; margin: auto; }
        .section-title { border-bottom: 2px solid #f4b41a; padding-bottom: 10px; margin-top: 40px; color: #333; }
        .grid-3 { display: flex; gap: 20px; flex-wrap: wrap; }
        .card { background: white; border: 1px solid #ddd; padding: 20px; flex: 1; min-width: 300px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); }
        input, select, textarea { width: 100%; padding: 10px; margin: 8px 0 20px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { background: #333; border: none; padding: 12px 20px; color: white; cursor: pointer; font-size: 16px; border-radius: 4px; width: 100%; font-weight: bold; }
        button:hover { background: #555; }
        footer { background: #333; color: white; text-align: center; padding: 20px; margin-top: 40px; }
    </style>
</head>
<body>

<div class="nav">
    <a href="<?= site_url('home') ?>">Home</a>
    <a href="<?= site_url('home') ?>#about">About Us</a>
    <a href="<?= site_url('home') ?>#services">Services</a>
    <a href="<?= site_url('home') ?>#contact">Contact</a>
    <a href="<?= site_url('login') ?>" style="float: right;">Login</a>
    <a href="<?= site_url('register') ?>" style="float: right;">Register</a>
</div>

<div class="hero">
    <h1>Power Your Future with Sun Son Solar</h1>
    <p>Pasig City's premier provider of sustainable energy solutions.</p>
</div>

<div class="container">
    <?php if ($success = session()->getFlashdata('success')): ?>
        <p role="status"><?= esc($success) ?></p>
    <?php endif ?>

    <h2 class="section-title" id="about">About Sun Son Solar</h2>
    <p>Founded by Katherine Sinagaraw, Sun Son Solar is dedicated to bringing cost-effective and environmentally sustainable solar energy to residential and commercial properties across Pasig City and Metro Manila. We believe in energy independence, reducing carbon footprints, and providing top-tier technological solutions supported by our dedicated IT and field technician teams.</p>

    <h2 class="section-title" id="services">Our Core Services</h2>
    <div class="grid-3">
        <div class="card">
            <h3>Consultation & Design</h3>
            <p>Our experts assess your property's energy needs and structural layout to design a custom solar panel array that maximizes efficiency and cost savings.</p>
        </div>
        <div class="card">
            <h3>Professional Installation</h3>
            <p>Certified field technicians handle complete system deployment, from secure roof mounting and inverter setup to local grid integration and permitting.</p>
        </div>
        <div class="card">
            <h3>Maintenance & Monitoring</h3>
            <p>We provide ongoing equipment maintenance, fast-response repair dispatches, and active system monitoring to ensure your investment operates at peak capacity.</p>
        </div>
    </div>

    <h2 class="section-title" id="contact">Contact & Location</h2>
    <div class="grid-3">
        <div class="card">
            <h3>Visit Our Office</h3>
            <p><strong>Address:</strong> 123 Green Energy Blvd, Pasig City, Metro Manila</p>
            <p><strong>Operating Hours:</strong> Monday - Friday, 8:00 AM - 5:00 PM</p>
            <p><strong>Phone:</strong> (02) 8123-4567</p>
            <p><strong>Email:</strong> support@sunsonsolar.ph</p>
        </div>
        <div class="card" style="flex: 2;">
            <h3>General Inquiry</h3>
            <form action="#" method="post" onsubmit="alert('Inquiry sent! We will contact you soon.'); return false;">
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <textarea name="message" placeholder="How can we help you power your property?" rows="4" required></textarea>
                <button type="submit" style="background: #f4b41a; color: #333;">Send Message</button>
            </form>
        </div>
    </div>

<footer>
    <p>Sun Son Solar &copy; 2026. Empowering Pasig City.</p>
</footer>

</body>
</html>