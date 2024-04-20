<?php
// Get the filename
$filename = basename($_SERVER['PHP_SELF']);

// Split the filename into words
$words = explode('_', $filename);

// Retrieve the 2nd and 4th word
$second_word = isset($words[1]) ? $words[1] : '';
$fourth_word = isset($words[3]) ? $words[3] : '';

include('database.php');

// Prepare SQL statement
$sql = "SELECT fullname, lrn FROM (
            SELECT fullname, lrn FROM academic_english WHERE grade = ? AND section = ? AND school = 'Bacayao Sur Elementary School'
            UNION ALL
            SELECT fullname, lrn FROM academic_filipino WHERE grade = ? AND section = ? AND school = 'Bacayao Sur Elementary School'
            UNION ALL
            SELECT fullname, lrn FROM academic_numeracy WHERE grade = ? AND section = ? AND school = 'Bacayao Sur Elementary School'
            UNION ALL
            SELECT fullname, lrn FROM behavioral WHERE grade = ? AND section = ? AND school = 'Bacayao Sur Elementary School'
        ) AS combined_table";

// Prepare and bind parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssss", $second_word, $fourth_word, $second_word, $fourth_word, $second_word, $fourth_word, $second_word, $fourth_word);

// Execute the statement
$stmt->execute();

// Bind result variables
$stmt->bind_result($fullname, $lrn);

// Initialize an array to store the results
$results = array();

// Fetch the rows and store them in the results array
while ($stmt->fetch()) {
    $results[] = array("fullname" => $fullname, "lrn" => $lrn);
}

// Close statement and database connection
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Results</title>
    <script>
        function toggleResults() {
            var checkbox = document.getElementById("legend-checkbox-at-risk");
            var resultsContainer = document.getElementById("results-container");
            resultsContainer.style.display = checkbox.checked ? "block" : "none";
        }
    </script>
</head>
<body>

<div class="checkbox-container">
    <input type="checkbox" id="legend-checkbox-at-risk" onchange="toggleResults()"> <!-- Checkbox for "Pupil at Risk" -->
    <label for="legend-checkbox-at-risk">Pupil At Risk</label>
</div>

<div id="results-container" style="display: none;">
    <?php
    foreach ($results as $result) {
        echo "<p>{$result['fullname']} - LRN: {$result['lrn']}</p>";
    }
    ?>
</div>

</body>
</html>
