<form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="myForm">
    <div class="checkbox-group">
        <input type="checkbox" id="checkbox1" name="academic_english" value="Academic - Literacy in English" class="checkbox">
        <label for="checkbox1">Academic - Literacy in English</label><br>
                        
        <input type="checkbox" id="checkbox2" name="academic_filipino" value="Academic - Literacy in Filipino" class="checkbox">
        <label for="checkbox2">Academic - Literacy in Filipino</label><br>
                        
        <input type="checkbox" id="checkbox3" name="academic_numeracy" value="Academic - Numeracy" class="checkbox">
        <label for="checkbox3">Academic - Numeracy</label><br>
                        
        <input type="checkbox" id="checkbox4" name="academic_behavioral" value="Behavioral" class="checkbox">
        <label for="checkbox4">Behavioral</label><br>
    </div>
    <!-- Hidden input to track form submission -->
    <input type="hidden" name="form_submitted" value="1">
    <input type="hidden" name="checkedCheckboxes" id="checkedCheckboxes" value="1">
</form>

<!-- Combined script -->
<script>
    // Get all checkboxes
    const checkboxes = document.querySelectorAll('input[type="checkbox"].checkbox');

    // Add event listener to each checkbox
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            // Uncheck other checkboxes when one is checked
            checkboxes.forEach(cb => {
                if (cb !== this) {
                    cb.checked = false;
                }
            });

            // Set the value of the hidden input to the name of the checkbox being checked
            document.getElementById('checkedCheckboxes').value = this.name;

            // Submit the form when a checkbox is checked
            if (this.checked) {
                document.getElementById('myForm').submit();
            }
        });
    });
</script>

<?php
include('database.php');

// Define mapping of checkbox names to table names
$tableMapping = [
    'academic_english' => 'academic_english',
    'academic_filipino' => 'academic_filipino',
    'academic_numeracy' => 'academic_numeracy',
    'academic_behavioral' => 'behavioral'
];

// Initialize an empty array to store selected tables
$selectedTables = [];

// Check if checkboxes are selected and add corresponding tables to the selectedTables array
foreach ($_POST as $checkboxName => $value) {
    if (isset($tableMapping[$checkboxName])) {
        $selectedTables[] = $tableMapping[$checkboxName];
    }
}

// If no checkboxes were selected, set a default value for $selectedTables
if (empty($selectedTables)) {
    // Set the default table name to one of the tables you know exists in your database
    $selectedTables = ['academic_english']; // Replace 'academic_english' with an existing table name
}

// Construct the SQL query to select from the selected tables
$sql = "SELECT lrn, fullname FROM " . implode(" UNION ALL SELECT lrn, fullname FROM ", $selectedTables);

// Execute the query
$result = $conn->query($sql);

// Output the results
if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "LRN: " . $row['lrn'] . ", Fullname: " . $row['fullname'] . "<br>";
        }
    } else {
        echo "0 results";
    }
} else {
    echo "Query failed: " . $conn->error;
}

// Close connection
$conn->close();
?>
