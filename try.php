<?php
include('database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalwest = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'West Central II Elementary School' AND quarter = '1'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalwest++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>