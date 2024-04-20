<?php
include('database.php');

$database = "your_database_name";

$sql = "SHOW TABLES LIKE '%grade%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_row()) {
        $table_name = $row[0];
        $words = explode('_', $table_name);
        
        // Check if the table name contains at least 4 words
        if (count($words) >= 4) {
            $grade = $words[1];
            $section = $words[3];
            
            // Check if grade and section match the second and fourth words of the PHP filename
            if ($grade === $grade && $section === $section) {
                // SQL query to select lrn and fullname from the current table
                $query = "SELECT lrn, fullname FROM $table_name WHERE grade = '$grade' AND section = '$section' AND school = 'Bacayao Sur Elementary School'";
                $table_result = $conn->query($query);
                
                if ($table_result->num_rows > 0) {
                    // Output data of each row
                    while($data = $table_result->fetch_assoc()) {
                        echo "<div class='pupil-result' style='display: none;'>"; // Initially hide the result
                        echo "LRN: " . $data['lrn'] . ", Fullname: " . $data['fullname'];
                        echo "</div>";
                    }
                } else {
                    echo "No records found for grade $grade and section $section";
                }
            }
        }
    }
} else {
    echo "No tables found with 'grade' in their name";
}

$conn->close();

// Get the PHP filename
$php_filename = basename(__FILE__);

// Split the filename into words
$words = explode('_', $php_filename);

// Check if the filename contains at least 4 words
if (count($words) >= 4) {
    // Extract the second and fourth words
    $second_word = $words[1];
    $fourth_word = $words[3];
    
    echo "Second word of PHP filename: " . $second_word . "<br>";
    echo "Fourth word of PHP filename: " . $fourth_word . "<br>";
} else {
    echo "PHP filename does not contain enough words";
}
?>

<div class="checkbox-container">
    <input type="checkbox" id="legend-checkbox-at-risk" onchange="toggleResults()"> <!-- Checkbox for "Pupil at Risk" -->
    <label for="legend-checkbox-at-risk">Pupil At Risk</label>
</div>

<div class="checkbox-container non">
    <input type="checkbox" id="legend-checkbox-non-risk" onchange="toggleResults()"> <!-- Checkbox for "Non - Risk Pupil" -->
    <label for="legend-checkbox-non-risk">Non - Risk Pupil</label>
</div>

<script>
    function toggleResults() {
        var results = document.getElementsByClassName("pupil-result");
        var checkboxNonRisk = document.getElementById("legend-checkbox-non-risk");
        
        for (var i = 0; i < results.length; i++) {
            if (checkboxNonRisk.checked) { 
                results[i].style.display = "block";
            } else {
                results[i].style.display = "none";
            }
        }
    }
</script>

