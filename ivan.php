<?php
// Include the database connection file
include('database.php');

// Initialize an empty array to store unique LRNs
$uniqueLRNs = array();

// Tables to count LRNs from
$tables = array('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral');

// Iterate through each table to fetch unique LRNs
foreach ($tables as $table) {
    $sql = "SELECT DISTINCT lrn FROM $table WHERE school = 'Sabangan Elementary School' AND quarter = 1";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        // Fetch each row and add LRN to the uniqueLRNs array
        while ($row = mysqli_fetch_assoc($result)) {
            $uniqueLRNs[$row['lrn']] = true; // Using LRN as key to ensure uniqueness
        }
        // Free result set
        mysqli_free_result($result);
    } else {
        echo "Error executing query: " . mysqli_error($conn);
    }
}

// Count the number of unique LRNs
$totalstudentpar = count($uniqueLRNs);

// Output the total number of unique students
echo "Total unique students across all tables: $totalstudentpar<br>";

// Query to retrieve data from the adviser table
$sql_adviser = "SELECT grade, section, fullname FROM adviser WHERE school = 'Sabangan Elementary School'";
$result_adviser = mysqli_query($conn, $sql_adviser);

if (mysqli_num_rows($result_adviser) > 0) {
    // Output data of each adviser row
    while ($row_adviser = mysqli_fetch_assoc($result_adviser)) {
        echo "Grade: " . $row_adviser["grade"] . ", Section: " . $row_adviser["section"] . ", Fullname: " . $row_adviser["fullname"] . "<br>";

        // Count LRNs in each table for the current grade and section
        $sql_english_non_distinct = "SELECT COUNT(lrn) AS english_count_non_distinct FROM academic_english WHERE grade = '{$row_adviser['grade']}' AND section = '{$row_adviser['section']}' AND school = 'Sabangan Elementary School' AND quarter = 1";
        $result_english_non_distinct = mysqli_query($conn, $sql_english_non_distinct);
        $row_english_non_distinct = mysqli_fetch_assoc($result_english_non_distinct);
        $english_count_non_distinct = $row_english_non_distinct['english_count_non_distinct'];

        $sql_filipino_non_distinct = "SELECT COUNT(lrn) AS filipino_count_non_distinct FROM academic_filipino WHERE grade = '{$row_adviser['grade']}' AND section = '{$row_adviser['section']}' AND school = 'Sabangan Elementary School' AND quarter = 1";
        $result_filipino_non_distinct = mysqli_query($conn, $sql_filipino_non_distinct);
        $row_filipino_non_distinct = mysqli_fetch_assoc($result_filipino_non_distinct);
        $filipino_count_non_distinct = $row_filipino_non_distinct['filipino_count_non_distinct'];

        $sql_numeracy_non_distinct = "SELECT COUNT(lrn) AS numeracy_count_non_distinct FROM academic_numeracy WHERE grade = '{$row_adviser['grade']}' AND section = '{$row_adviser['section']}' AND school = 'Sabangan Elementary School' AND quarter = 1";
        $result_numeracy_non_distinct = mysqli_query($conn, $sql_numeracy_non_distinct);
        $row_numeracy_non_distinct = mysqli_fetch_assoc($result_numeracy_non_distinct);
        $numeracy_count_non_distinct = $row_numeracy_non_distinct['numeracy_count_non_distinct'];

        $sql_behavioral_non_distinct = "SELECT COUNT(lrn) AS behavioral_count_non_distinct FROM behavioral WHERE grade = '{$row_adviser['grade']}' AND section = '{$row_adviser['section']}' AND school = 'Sabangan Elementary School' AND quarter = 1";
        $result_behavioral_non_distinct = mysqli_query($conn, $sql_behavioral_non_distinct);
        $row_behavioral_non_distinct = mysqli_fetch_assoc($result_behavioral_non_distinct);
        $behavioral_count_non_distinct = $row_behavioral_non_distinct['behavioral_count_non_distinct'];

        

        // Store total count of LRNs in academic_english table
        $totalenglish = $english_count_non_distinct;
        $totalfilipino = $filipino_count_non_distinct;
        $totalnumeracy = $numeracy_count_non_distinct;
        $totalbehavioral = $behavioral_count_non_distinct;

        echo "Total English Participants: " . $totalenglish . "<br>";
        echo "Total Filipino Participants: " . $totalfilipino . "<br>";
        echo "Total Numeracy Participants: " . $totalnumeracy . "<br>";
        echo "Total Behavioral Participants: " . $totalbehavioral . "<br>";
    }
} else {
    echo "0 results";
}

// Close the connection
mysqli_close($conn);
?>
