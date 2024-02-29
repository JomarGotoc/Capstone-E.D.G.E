<?php

// Initialize variables
$english = 0;
$filipino = 0;
$numeracy = 0;
$behavioral = 0;

include('database.php');

// Query to count occurrences for each identification
$query = "SELECT identification, COUNT(*) as count FROM adviser_intervention_first_period
          WHERE identification IN ('Academic - Literacy in English', 'Academic - Literacy in Filipino', 'Academic - Numeracy', 'Behavioral')
          GROUP BY identification";

$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Process data of each row
    while ($row = $result->fetch_assoc()) {
        switch ($row["identification"]) {
            case 'Academic - Literacy in English':
                $english = $row["count"];
                break;
            case 'Academic - Literacy in Filipino':
                $filipino = $row["count"];
                break;
            case 'Academic - Numeracy':
                $numeracy = $row["count"];
                break;
            case 'Behavioral':
                $behavioral = $row["count"];
                break;
        }
    }
} else {
    echo "No results found";
}

// Close connection
$conn->close();
?>
