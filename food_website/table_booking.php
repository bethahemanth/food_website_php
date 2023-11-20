<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $people = $_POST['people'];

    // Validate form data (perform any necessary validation)
    $errors = [];
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    if (empty($phone)) {
        $errors[] = "Phone number is required";
    }
    if (empty($date)) {
        $errors[] = "Date is required";
    }
    if (empty($time)) {
        $errors[] = "Time is required";
    }
    if (empty($people)) {
        $errors[] = "Number of people is required";
    }

    // If there are errors, display them
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // Connect to the database (replace with your database credentials)
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "php";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and execute SQL statement to insert data into the database
        $sql = "INSERT INTO bookings (name, email, phone, date, time, people) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssi", $name, $email, $phone, $date, $time, $people);
        $stmt->execute();

        // Close the database connection
        $stmt->close();
        $conn->close();

        // Display a success message
        echo "Booking confirmed for $name. Thank you!";
    }
}
?>
