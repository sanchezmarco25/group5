<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $birthDate = $_POST["birthDate"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the password
    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users 
    (firstName, middleName, lastName, birthDate, gender, email, phone, address, username, password)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param(
        $stmt,
        "ssssssssss",
        $firstName,
        $middleName,
        $lastName,
        $birthDate,
        $gender,
        $email,
        $phone,
        $address,
        $username,
        $password
    );

    if (mysqli_stmt_execute($stmt)) {
        echo "Registration successful!";
        echo "<br><a href='fieldset.html'>Back to Registration</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

?>
