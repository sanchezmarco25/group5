<?php
require_once '../config/Database.php';
require_once '../models/User.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $database = new Database();
    $db = $database->getConnection();
    $user = new User($db);
    
    $result = $user->registerCustomer($_POST);

    if ($result === true) {
        echo "<script>
            alert('Registration successful! Welcome to Sun Son Solar.');
            window.location.href = '../home.html'; 
        </script>";
    } else {
        echo "<script>
            alert('Error: " . addslashes($result) . "');
            window.location.href = '../index.html';
        </script>";
    }
    
    mysqli_close($db);
}
?>