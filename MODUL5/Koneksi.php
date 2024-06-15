<?php
function openConnection() {
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "perpustakaan";

    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
}

function closeConnection($conn) {
    $conn->close();
}

$conn = openConnection();
if ($conn) {
    echo "Connection successful!";
}
closeConnection($conn);
?>