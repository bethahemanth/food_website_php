<?php
$host = 'localhost';
$dbname = 'php';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully!"; // Output to the webpage

    $requiredFields = ['user_name', 'gender', 'email', 'phone_number', 'pass', 'reenter', 'dob', 'nationality', 'preferences', 'favourite_food', 'cuisine', 'news_letter', 'gluten_free'];

    // Check if all required fields are present in $_REQUEST
    foreach ($requiredFields as $field) {
        if (!isset($_REQUEST[$field])) {
            throw new Exception("Required field '$field' is missing.");
        }
    }

    // Extracting validated and sanitized values from $_REQUEST
    $user_name = $_REQUEST['user_name'];
    $gender = $_REQUEST['gender'];
    $email = $_REQUEST['email'];
    $phone_number = $_REQUEST['phone_number'];
    $pass = $_REQUEST['pass'];
    $reenter = $_REQUEST['reenter'];
    $dob = $_REQUEST['dob'];
    $nationality = $_REQUEST['nationality'];
    $preferences = $_REQUEST['preferences'];
    $favourite_food = $_REQUEST['favourite_food'];
    $cuisine = $_REQUEST['cuisine'];
    $news_letter = $_REQUEST['news_letter'];
    $gluten_free = $_REQUEST['gluten_free'];

    // Your SQL INSERT query
    $insertQuery = "INSERT INTO register VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($insertQuery);
    $data = [
        $user_name, $gender, $email, $phone_number, $pass, $reenter,
        $dob, $nationality, $preferences, $favourite_food, $cuisine, $news_letter, $gluten_free
    ];
    $stmt->execute($data);

    $rowsAffected = $stmt->rowCount();

    if ($rowsAffected > 0) {
        header("Location: login.html");
        exit();
    } else {
        echo "<p>Error Message</p>";
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$pdo = null;
?>
