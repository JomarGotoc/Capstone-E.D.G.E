<?php
include('../database.php');
$tables = array(
    "academic_english",
    "academic_filipino",
    "academic_numeracy",
    "behavioral"
);

$totalpar = 0; 
$resolved = 0;

// Loop through each table
foreach ($tables as $table) {
    $sql = "SELECT COUNT(*) AS count, SUM(CASE WHEN status = 'resolved' THEN 1 ELSE 0 END) AS resolved_count FROM $table";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $totalpar += $row["count"];
            $resolved += $row["resolved_count"];
        }
    } else {
        echo "0 results for table $table";
    }
}

$conn->close();
?>
