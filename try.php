<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get all databases
$query = "SHOW DATABASES";
$result = $conn->query($query);

// Check if the query was successful
if ($result) {
    // Fetch each row from the result set
    while ($row = $result->fetch_assoc()) {
        $databaseName = $row['Database'];

        // Exclude default databases and databases that cannot be deleted
        if (!in_array($databaseName, ['information_schema', 'mysql', 'performance_schema', 'sys', 'other_excluded_db'])) {
            // Output the database name
            echo $databaseName . "<br>";
        }
    }
} else {
    echo "Error: " . $conn->error;
}

// Close the connection
$conn->close();
?>
