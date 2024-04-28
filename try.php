<?php
    include('../../database.php');

    // SQL query to select only the year part of start and end dates from school_year table
    $sql = "SELECT YEAR(start) AS start_year, YEAR(end) AS end_year FROM school_year";

    // Execute query
    $result = $conn->query($sql);


    // Close connection
    $conn->close();
?>

<?php
if ($result->num_rows > 0) {
    // Start the dropdown menu
    echo '<div class="select-wrapper">';
    echo '<select id="topdown1" name="school-year" class="containers first">';
    
    // Fetch each row
    while($row = $result->fetch_assoc()) {
        // Output start and end years as options
        echo '<option value="S.Y ' . $row["start_year"] . '-' . $row["end_year"] . '"';
        
        // Set selected attribute for the first option
        if ($result->field_count == 0) {
            echo ' selected';
        }
        
        echo '>S.Y ' . $row["start_year"] . '-' . $row["end_year"] . '</option>';
    }
    
    // End the dropdown menu
    echo '</select>';
    echo '</div>';
}
?>

