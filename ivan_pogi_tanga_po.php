<?php 
$filename = basename($_SERVER['SCRIPT_FILENAME']);

// Convert filename to lowercase and remove ".php" extension to get the table name
$studentTable = strtolower(str_replace('.php', '', $filename));

// Extract grade and section from the filename
$filenameParts = explode('_', $filename);
$grade = $filenameParts[1]; // Assuming the grade is the second word in the filename
$section = $filenameParts[3]; // Assuming the section is the fourth word in the filename

echo"2nd word:  $grade";
echo " 4th word: $section";
?>