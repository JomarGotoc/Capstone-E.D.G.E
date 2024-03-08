<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the value of "lrn" from the form data
    $lrn = isset($_POST['lrn']) ? $_POST['lrn'] : '';

    // Echo the value of "lrn"
    echo "LRN: " . htmlspecialchars($lrn);
}
?>