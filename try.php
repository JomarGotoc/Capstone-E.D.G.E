<?php
include('database.php');

// Search for tables with the specified conditions in the name
$tableNameKeyword = "grade";
$sectionKeyword = "section";

$sql = "SHOW TABLES LIKE '%$tableNameKeyword%$sectionKeyword%'";
$result1 = $conn->query($sql);
$sectionOptions = '';
$gradeOptions = [];
$uniqueGrades = [];

if ($result1->num_rows > 0) { 
    while ($row = $result1->fetch_assoc()) { 
        $tableName = reset($row);

        $tableWords = explode('_', $tableName); 
        if (count($tableWords) >= 4) {
            $fourthWord = ucfirst($tableWords[3]); // Capitalize the first letter
            $secondWord = ucfirst($tableWords[1]); // Capitalize the first letter

            // Check if the grade is not in the list of unique grades
            if (!in_array($secondWord, $uniqueGrades)) {
                // Append the option tag to the options string
                $gradeOptions[] = "<option value=\"$secondWord\">$secondWord</option>";

                // Add the grade to the list of unique grades
                $uniqueGrades[] = $secondWord;
            }

            // Append the option tag to the options string for section
            $sectionOptions .= "<option value=\"$fourthWord\">$fourthWord</option>";
        }
    }
}

?>
<div class="dropdown-container">
    <label for="sectionDropdown">Section:</label>
    <select id="sectionDropdown" class="dropdowns" onchange="filterStudents()">
        <option value="" disabled selected hidden>Section</option>
        <?php echo $sectionOptions; ?>
    </select>
</div>
<div class="dropdown-container">
    <label for="gradeDropdown">Grade:</label>
    <select id="gradeDropdown" class="dropdowns" onchange="filterStudents()">
        <option value="" disabled selected hidden>Grade</option>
        <?php echo implode('', $gradeOptions); ?>
    </select>
</div>

