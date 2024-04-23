<?php
    include('database.php');

    // Get the grade and section from the PHP file name
    $filename = basename($_SERVER['PHP_SELF'], ".php");
    $parts = explode("_", $filename);
    $grade = $parts[1]; // Assuming grade is the second word
    $section = $parts[3]; // Assuming section is the fourth word

    // School name
    $school = "Bacayao Sur Elementary School";

    // Tables array
    $tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");

    // Initialize arrays to store LRNs and corresponding tables
    $lrnsTables = array();

    // Iterate through each table
    foreach ($tables as $table) {
        // Prepare the SQL query
        $sql = "SELECT lrn, fullname, status FROM $table 
                WHERE grade = '$grade' AND section = '$section' AND school = '$school'";
        
        // Execute the query
        $result = $conn->query($sql);
        
        // Fetch the results
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $lrn = $row['lrn'];
                // Check if LRN already exists in the lrnsTables array
                if (!isset($lrnsTables[$lrn])) {
                    // If LRN doesn't exist, initialize an empty array for it
                    $lrnsTables[$lrn] = array();
                }
                $lrnsTables[$lrn][] = $table;
            }
        }
    }

    // Close connection
    $conn->close();

    // Display LRNs and corresponding tables
    foreach ($lrnsTables as $lrn => $tables) {
        echo "LRN: $lrn | Tables: " . implode(", ", $tables) . "<br>";
    }
?>
