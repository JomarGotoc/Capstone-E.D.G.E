<?php
// Assuming you have a database connection
include('database2.php');

// Variables to hold fetched data
$autoFilledData = array('fullname' => '', 'lrn' => '', 'phone' => '', 'section' => '');

// Extract the base name of the PHP file (excluding the extension)
$fileBaseName = basename(__FILE__, '.php');

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming $lrn contains the LRN you want to search for
    $lrn = $_POST['lrn']; // You should validate and sanitize user input

    // Perform the SQL query using the dynamically determined table name
    $sql = "SELECT fullname, lrn, phone, section FROM $fileBaseName WHERE lrn = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $lrn);
    $stmt->execute();
    $stmt->bind_result($fullname, $lrn_result, $phone, $section);

    // Check if a matching record is found
    if ($stmt->fetch()) {
        // Auto-fill the fields
        $autoFilledData = array(
            'fullname' => $fullname,
            'lrn' => $lrn_result,
            'phone' => $phone,
            'section' => $section
        );
    } else {
        echo "LRN not found in the database.";
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LRN Search</title>
</head>
<body>
    <h2>LRN Search</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="lrn">Enter LRN:</label>
        <input type="text" id="lrn" name="lrn" value="<?php echo $autoFilledData['lrn']; ?>" required>
        <button type="submit">Search</button>
    </form>

    <h3>Fetched Data:</h3>
    <form>
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" value="<?php echo $autoFilledData['fullname']; ?>" readonly>

        <label for="lrn_fetched">LRN:</label>
        <input type="text" id="lrn_fetched" name="lrn_fetched" value="<?php echo $autoFilledData['lrn']; ?>" readonly>

        <label for="phone">phone:</label>
        <input type="text" id="phone" name="phone" value="<?php echo $autoFilledData['phone']; ?>" readonly>

        <label for="section">Section:</label>
        <input type="text" id="section" name="section" value="<?php echo $autoFilledData['section']; ?>" readonly>
    </form>
</body>
</html>
