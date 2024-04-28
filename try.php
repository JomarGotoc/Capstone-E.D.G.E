<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Pupil At Risk</title>
</head>
<body>

<div class="login-container" id="login-container">
    <span class="close">&times;</span>
    <h4>Adding <span class="student-name"></span> <br>as Pupil At Risk</h4>

    <form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label for="lrn">Learner's Reference Number (LRN)</label>
            <input type="text" id="lrn1" name="lrn" value="">
        </div>
        <div class="row">
            <div class="columns-group">
                <div class="form-group">
                    <label>Identification</label>
                    <div class="checkbox-group">
                        <input type="checkbox" id="checkbox1" name="english" value="Academic - Literacy in English">
                        <label for="checkbox1">Academic - Literacy in English</label><br>
                        
                        <input type="checkbox" id="checkbox2" name="filipino" value="Academic - Literacy in Filipino">
                        <label for="checkbox2">Academic - Literacy in Filipino</label><br>
                        
                        <input type="checkbox" id="checkbox3" name="numeracy" value="Academic - Numeracy">
                        <label for="checkbox3">Academic - Numeracy</label><br>
                        
                        <input type="checkbox" id="checkbox4" name="behavioral1" value="Behavioral">
                        <label for="checkbox4">Behavioral</label><br>
                    </div>
                </div>
                <div class="form-group">
                    <label for="date-added">Date Added</label>
                    <input type="text" class="date" name="date" value="<?php echo date('Y-m-d'); ?>" readonly>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" name="addpupil" class="addPupilButton">ADD PUPIL AT RISK</button>
        </div>
    </form>
</div>

<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addpupil'])) {
    // Retrieve LRN and date from the form
    $lrn = $_POST['lrn'];
    $date = $_POST['date'];
    
 include('database.php');

    // Insert data into the appropriate table based on selected checkboxes
    if (isset($_POST['english'])) {
        $sql = "INSERT INTO academic_english (lrn, date) VALUES ('$lrn', '$date')";
        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_POST['filipino'])) {
        $sql = "INSERT INTO academic_filipino (lrn, date) VALUES ('$lrn', '$date')";
        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    if (isset($_POST['numeracy'])) {
        $sql = "INSERT INTO academic_numeracy (lrn, date) VALUES ('$lrn', '$date')";
        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    if (isset($_POST['behavioral1'])) {
        $sql = "INSERT INTO behavioral (lrn, date) VALUES ('$lrn', '$date')";
        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    $conn->close();
}
?>

</body>
</html>
