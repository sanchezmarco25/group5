<?php
require_once '../config/Database.php';
require_once '../models/User.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $database = new Database();
    $db = $database->getConnection();
    $user = new User($db);
    
    $result = $user->registerCustomer($_POST);

    if ($result === true) {
        echo "Registration successful!";
        echo "<br><a href='../fieldset.html'>Back to Registration</a>";
    } else {
        echo "Error: " . $result;
        echo "<br><a href='../fieldset.html'>Try Again</a>";
    }
    
    mysqli_close($db);
}
?>