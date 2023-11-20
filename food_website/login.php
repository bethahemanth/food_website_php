<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<script>
    function showAlert() {
        alert("Invalid credentials");
        window.location.href = "login.html";
    }
</script>

<?php
$jdbcUrl = "mysql:host=localhost;dbname=php";
$dbUser = "root";
$dbPassword = "root";

$connection = null;

try {
    $connection = new PDO($jdbcUrl, $dbUser, $dbPassword);
    echo "Connected successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Check if user and password are provided
if (isset($_REQUEST["user"]) && isset($_REQUEST["pass"])) {
    $user_name = $_REQUEST["user"];
    $pass = $_REQUEST["pass"];

    // Initialize a new PDO connection if not already done
    if (!$connection) {
        try {
            $connection = new PDO($jdbcUrl, $dbUser, $dbPassword);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    $query = "SELECT * FROM register WHERE user_name=? AND pass=?";
    try {
        $ps = $connection->prepare($query);
        $ps->bindParam(1, $user_name);
        $ps->bindParam(2, $pass);
        $ps->execute();
        $row = $ps->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            header("Location: home.html");
            exit(); // Make sure to exit after redirecting
        } else {
            echo "<script>showAlert();</script>";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>
