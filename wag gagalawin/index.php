<?php
if (isset($_GET['update'])) {
    $lrn = $_GET['lrn'];
    $fullname = $_GET['fullname'];
    $classification = $_GET['classification'];
    $grade = $_GET['grade'];
    $section = $_GET['section'];
   
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["save"])) {
    // Assuming you have a database connection
    include('database1.php');

    // Get data from the form
    $lrn = isset($_POST['lrn']) ? $_POST['lrn'] : '';
    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    $grade = isset($_POST['grade']) ? $_POST['grade'] : '';
    $section = isset($_POST['section']) ? $_POST['section'] : '';
    $classification = isset($_POST['classification']) ? $_POST['classification'] : '';

    // Insert data into the table (Replace 'your_table' with your actual table name)
    $sql = "INSERT INTO try (lrn, fullname, grade, section, classification) VALUES ('$lrn', '$fullname', '$grade', '$section', '$classification')";

    if ($conn->query($sql) === TRUE) {
        echo "Record saved successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>


<form method="post" action="index.php">
 <div class="row">
            <div class="column" >
                <div class="containers" style="background-color: #190572">
                    <h3 style="margin-left:10px">LRN</h3>
                </div>
            </div>
            <div class="column column-right">
                <div class="containers" style="background-color: #F3F3F3;">
                    <label for="lrn">LRN:</label>
                    <input type="text" name="lrn" id="lrn" value="<?= isset($lrn) ? $lrn : ''; ?>" readonly>
                </div>
            </div>

            <div class="column column-left">
                <div class="containers" style="background-color: #190572;">
                    <h3 style="margin-left:10px">Grade & Section</h3>
                </div>
            </div>
            <div class="column column-right">
                <div class="containers" style="background-color: #F3F3F3;">
                    <h3 style="margin-left:10px"><?= isset($grade) && isset($section) ? "$grade - $section" : ''; ?></h3>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="column">
                <div class="containers" style="background-color: #190572;">
                    <h3 style="margin-left:10px">Student's Name</h3>
                </div>
            </div>
            <div class="column column-right">
                <div class="containers" style="background-color: #F3F3F3;">
                    <h3 style="margin-left:10px"><?= isset($fullname) ? $fullname : ''; ?></h3>
                </div>
            </div>
            <div class="column column-left">
                <div class="containers" style="background-color: #190572;">
                    <h3 style="margin-left:10px">Identification</h3>
                </div>
            </div>
            <div class="column column-right">
                <div class="containers" style="background-color: #F3F3F3;">
                    <h3 style="margin-left:10px"><?= isset($classification) ? $classification : ''; ?></h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="column">
                <div class="containers" style="background-color: #190572;">
                    <h3 style="margin-left:10px">Guardian Name</h3>
                </div>
            </div>
            <div class="column column-right">
                <div class="containers editable-container" style="background-color: #F3F3F3;">
                    <h3 style="margin-left:10px; " >Jenny A. Junio - Mother</h3>
                    <i class='bx bx bx-check editable-icon' style=" cursor: pointer"></i>
                </div>
            </div>
            <div class="column column-left">
                <div class="containers" style="background-color: #190572;">
                    <h3 style="margin-left:10px">Contact Number</h3>
                </div>
            </div>
            <div class="column half-width">
                <div class="containers editable-container" style="background-color: #F3F3F3;">
                    <h3 style="margin-left:10px">0923583892</h3>
                    <i class='bx bx bx-check editable-icon' style=" cursor: pointer"></i>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="column">
            <button type="submit" name="save">Save</button>
        </div>
    </div>
</form>