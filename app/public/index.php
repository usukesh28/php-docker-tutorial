<?php
$servername = "mysql";
$username = "tutorial";
$password = "secret";

try {
    $conn = new PDO("mysql:host=$servername;dbname=tutorial", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $conn->query('SHOW VARIABLES like "version"');

    $row = $query->fetch();

    echo 'MySQL version:' . $row['Value'];
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
