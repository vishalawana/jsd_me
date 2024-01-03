<?php

include 'Validations.php';
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password);

$tableName = "users";
$secondTable = "users_details";

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the database exists
$checkDatabaseQuery = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$databaseName'";
$result = $conn->query($checkDatabaseQuery);

if ($result->num_rows == 0) {
    // Database doesn't exist, so create it
    $createDatabaseQuery = "CREATE DATABASE $databaseName";
    if ($conn->query($createDatabaseQuery) === TRUE) {
        echo "Database created successfully.<br>";
    } else {
        die("Error creating database: " . $conn->error);
    }
} else {
    // Connect to the specified database
    $conn = new mysqli($servername, $username, $password, $databaseName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}
// Check if the tables exist
$checkTableQuery = "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '$databaseName' AND TABLE_NAME IN ('$tableName', '$secondTable')";
$result = $conn->query($checkTableQuery);

if ($result->num_rows == 0) {
    // Tables don't exist, so create them
    $createTable = "CREATE TABLE $tableName (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL,
        password VARCHAR(100) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        UNIQUE KEY (email)
    )";

    $createSecondTable = "CREATE TABLE $secondTable (
        user_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        mobile BIGINT NOT NULL,
        dob DATE NOT NULL,
        gender ENUM('Male', 'Female'),
        city VARCHAR(50),
        courses VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (id) REFERENCES $tableName(id)
    )";

    if ($conn->query($createTable) === TRUE && $conn->query($createSecondTable) === TRUE) {
        echo "Tables created successfully.<br>";
    } else {
        die("Error creating tables: " . $conn->error);
    }
} else {
    echo "Tables already exist.<br>";
}
$insertUserData = "INSERT INTO $tableName ( name, email, password) VALUES ('$name', '$email', '$password')"; 
$insertUserDetails ="INSERT INTO $secondTable(mobile, dob, gender, city, courses) VALUES ('$phone','$dob','$gender','delhi','$courses')";

// Close the connection
$conn->close();
    

