<?php
class User {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function registerCustomer($data) {
        $sql = "INSERT INTO users 
        (firstName, middleName, lastName, birthDate, gender, email, phone, address, username, password, role)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'customer')";

        $stmt = mysqli_prepare($this->conn, $sql);
        $hashed_password = password_hash($data['password'], PASSWORD_DEFAULT);

        mysqli_stmt_bind_param(
            $stmt,
            "ssssssssss",
            $data['firstName'],
            $data['middleName'],
            $data['lastName'],
            $data['birthDate'],
            $data['gender'],
            $data['email'],
            $data['phone'],
            $data['address'],
            $data['username'],
            $hashed_password
        );

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            return true;
        } else {
            $error = mysqli_error($this->conn);
            mysqli_stmt_close($stmt);
            return $error;
        }
    }
}
?>