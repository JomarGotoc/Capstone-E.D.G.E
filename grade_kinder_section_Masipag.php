<?php
include('database.php');

// Get the current filename
$filename = basename($_SERVER['SCRIPT_FILENAME']);

// Remove the ".php" extension
$filenameWithoutExtension = str_replace('.php', '', $filename);

// Convert filename to lowercase and remove ".php" extension to get the table name
$studentTable = strtolower($filenameWithoutExtension);

// Extract grade and section from the filename
$filenameParts = explode('_', $filenameWithoutExtension);
$grade = $filenameParts[1]; // Assuming the grade is the second word in the filename
$section = $filenameParts[3]; // Assuming the section is the fourth word in the filename

// Query to select lrn and fullname from the dynamically determined table $studentTable where grade, section, and school match
$sql = "SELECT lrn, fullname FROM $studentTable WHERE grade = '$grade' AND section = '$section' AND school = 'Bacayao Sur Elementary School'";

$resultss = $conn->query($sql);

if ($resultss->num_rows > 0) {
    // Output data of each row
    while($row = $resultss->fetch_assoc()) {
        echo "LRN: " . $row["lrn"]. " - Fullname: " . $row["fullname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
