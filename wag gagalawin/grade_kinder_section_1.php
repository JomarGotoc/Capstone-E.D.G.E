<?php
$currentFileName = basename($_SERVER["SCRIPT_FILENAME"], '.php');
include("database.php");
$filenameWithoutExtension = pathinfo($currentFileName, PATHINFO_FILENAME);
$words = explode('_', $filenameWithoutExtension);

if (count($words) >= 4) {
    $secondWord = $words[1];
    $fourthWord = $words[3];
    $sql = "SELECT employment_number, fullname FROM adviser WHERE grade = '$secondWord' AND section = '$fourthWord'";
    $result1 = $conn->query($sql);
    $result2 = $conn->query($sql);
} 
?>
<?php
include('database.php');
$phpFileName = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
$tableName = $phpFileName ;
$lrnCount = 0;
$sql = "SHOW TABLES LIKE '$tableName'";
$result3 = $conn->query($sql);

if ($result3->num_rows > 0) {
    $countQuery = "SELECT COUNT(lrn) AS lrnCount FROM $tableName";
    $countResult = $conn->query($countQuery);

    if ($countResult) {
        $row = $countResult->fetch_assoc();
        $lrnCount = $row['lrnCount'];
    } 
} 
?>
<?php
    include('database.php');

    // Get the current PHP filename without the extension
    $currentFile = pathinfo(__FILE__, PATHINFO_FILENAME);

    // Remove the ".php" extension
    $currentFileWithoutExtension = str_replace('.php', '', $currentFile);

    // Explode the filename into an array of words
    $words = explode('_', $currentFileWithoutExtension);

    // Initialize variables for grade and section
    $grade = "";
    $section = "";

    // Check if there are at least 4 words
    if (count($words) >= 4) {
        // Get the 2nd and 4th words
        $grade = $words[1];
        $section = $words[3];

        // Initialize an array to store the results
        $results = array();

        // Perform query on academic_english table
        $results[] = fetchTable($conn, "academic_english", $grade, $section);

        // Perform query on academic_filipino table
        $results[] = fetchTable($conn, "academic_filipino", $grade, $section);

        // Perform query on academic_numeracy table
        $results[] = fetchTable($conn, "academic_numeracy", $grade, $section);

        // Perform query on behavioral table
        $results[] = fetchTable($conn, "behavioral", $grade, $section);

        // Close the connection
        $conn->close();
    } else {
        echo "Not enough words in the filename.";
    }

    // Function to fetch data from a table
    function fetchTable($conn, $tableName, $grade, $section) {
        // Prepare and execute the SQL query
        $sql = "SELECT lrn, fullname, classification FROM $tableName WHERE grade = ? AND section = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $grade, $section);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if there are any results
        if ($result->num_rows > 0) {
            // Return an array containing the table name and the fetched data
            $tableData = array();
            while ($row = $result->fetch_assoc()) {
                $tableData[] = $row;
            }

            return array($tableName, $tableData);
        } else {
            return null;
        }

        // Close the statement
        $stmt->close();
    }
?>


<?php
foreach ($results as $tableResult) {
    if ($tableResult) {
        list($tableName, $tableData) = $tableResult;
        foreach ($tableData as $row) {
            echo "<tr class='sheshable'>
                    <th style='width:15%'>{$row['lrn']}</th>
                    <th style='width:35%'>{$row['fullname']}</th>
                    <th style='width:15%'>{$row['classification']}</th>
                    <th style='width:15%'>NA</th>
                    <th style='width:15%' class='act'>
                    <a href='index.php?update&lrn={$row['lrn']}&fullname={$row['fullname']}&classification={$row['classification']}&grade={$grade}&section={$section}'>
                    <button name='update'>UPDATE RECORD</button>
                     </a>
                
                    </th>
                  </tr>";
        }
    }
}
?>

