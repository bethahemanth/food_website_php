<?php
// Establish database connection
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your database username
$password = "root"; // Replace with your database password
$dbname = "php"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data sent from client-side
$data = json_decode(file_get_contents('php://input'), true);

$productName = $data['name'];
$price = $data['price'];

// Insert data into database
$sql = "INSERT INTO products (product_name, price) VALUES ('$productName', '$price')";

if ($conn->query($sql) === TRUE) {
    echo "Data stored successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
