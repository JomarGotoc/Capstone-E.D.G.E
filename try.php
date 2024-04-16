<?php
include('database.php');

// Define the school name
$school = "Bacayao Sur Elementary School";
$selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;

// Query to count LRNs from all tables for the selected quarter
$sql_all_lrns = "
WITH all_lrns AS (
    SELECT lrn FROM academic_english WHERE school = '$school' AND quarter = $selectedQuarter
    UNION
    SELECT lrn FROM academic_filipino WHERE school = '$school' AND quarter = $selectedQuarter
    UNION
    SELECT lrn FROM academic_numeracy WHERE school = '$school' AND quarter = $selectedQuarter
    UNION
    SELECT lrn FROM behavioral WHERE school = '$school' AND quarter = $selectedQuarter
)
SELECT COUNT(*) AS total_count FROM (
    SELECT DISTINCT lrn FROM all_lrns
) AS unique_lrns";
$result_all_lrns = $conn->query($sql_all_lrns);
$row_all_lrns = $result_all_lrns->fetch_assoc();
$bacayaototalpar = $row_all_lrns['total_count']; // Store the total count in $bacayaototalpar

// Close connection
$conn->close();
?>

<form id="quarterForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <select id="quarterSelect" name="quarter">
        <option value="1" <?php if(isset($_POST['quarter']) && $_POST['quarter'] == '1') echo 'selected'; ?>>Quarter 1</option>
        <option value="2" <?php if(isset($_POST['quarter']) && $_POST['quarter'] == '2') echo 'selected'; ?>>Quarter 2</option>
        <option value="3" <?php if(isset($_POST['quarter']) && $_POST['quarter'] == '3') echo 'selected'; ?>>Quarter 3</option>
        <option value="4" <?php if(isset($_POST['quarter']) && $_POST['quarter'] == '4') echo 'selected'; ?>>Quarter 4</option>
    </select>
</form>

<script>
    document.getElementById("quarterSelect").addEventListener("change", function() {
        var selectedValue = this.value;
        console.log("Selected value:", selectedValue);
        document.getElementById("quarterForm").submit();
    });
</script>
<?php echo $bacayaototalpar ?>