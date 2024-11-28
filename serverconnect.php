<?php
// Connect to MySQL
$servername = "localhost";
$username = "username"; // Replace with your MySQL username
$password = "password"; // Replace with your MySQL password
$dbname = "your_database"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query database
$sql = "SELECT * FROM hotels";
$result = $conn->query($sql);

// Fetch and output data
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="card">';
        echo '<img src="' . $row["image_path"] . '" alt="Hotel Image">';
        echo '<div class="card-info">';
        echo '<h3>' . $row["name"] . '</h3>';
        echo '<p>' . $row["location"] . '</p>';
        echo '<p>' . $row["price"] . '/24 hrs</p>';
        echo '<div class="rating">';
        // Output rating icon or stars
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
