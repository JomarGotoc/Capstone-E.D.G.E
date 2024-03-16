<?php
    $currentFileName = basename($_SERVER["SCRIPT_FILENAME"], '.php');

    $currentFileName1 = basename(__FILE__,'_q1.php');
    $currentFileName1 = $currentFileName1.'.php';

    $currentFileName2 = basename(__FILE__,'_q1.php');
    
    include("database.php");
    $filenameWithoutExtension = pathinfo($currentFileName, PATHINFO_FILENAME);
    $words = explode('_', $filenameWithoutExtension);

    if (count($words) >= 4) {
        $secondWord = $words[1];
        $fourthWord = $words[3];
        $sql = "SELECT employment_number, fullname FROM adviser WHERE grade = '$secondWord' AND section = '$fourthWord' AND school = 'West Central II Elementary School'";
        $result1 = $conn->query($sql);
        $result2 = $conn->query($sql);
    } 
?>
<?php
include('database.php');
$filename = basename(__FILE__, '.php');
$words = explode('_', $filename);
$secondWord = $words[1];
$fourthWord = $words[3];
$tables = ['academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'];
$count = 0;
foreach ($tables as $table) {
    $sql = "SELECT COUNT(*) AS count FROM $table WHERE grade = '$secondWord' AND section = '$fourthWord' AND school = 'West Central II Elementary School'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $count += $row['count'];
        }
    }
}
$conn->close();
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
    } 

    function fetchTable($conn, $tableName, $grade, $section) {
        // Prepare and execute the SQL query with the condition for quarter = 1
        $sql = "SELECT lrn, fullname, classification, grade, section, status FROM $tableName WHERE grade = ? AND section = ? AND quarter = 1 AND school = 'West Central II Elementary School'";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $grade, $section);
        $stmt->execute();
        $result = $stmt->get_result();
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>PRINT</title>
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>
    <!-- Your HTML structure here -->
    <div class="column">
        <div class="containers second">
            <button style="background: transparent; border: none" onclick="printTableData()"> <h3><i class='bx bx-printer'></i>Print P.A.Rs List</h3></button>
        </div>
    </div>

    <table border="0" id="pupilTable">
    <?php
    foreach ($results as $tableResult) {
        if ($tableResult) {
            list($tableName, $tableData) = $tableResult;
            foreach ($tableData as $row) {
                // Determine the row color based on classification
                $status = $row['status'];
                $rowColor = '';

                switch ($status) {
                    case 'Unresolved':
                        $rowColor = 'red';
                        break;
                    case 'Pending':
                        $rowColor = 'blue';
                        break;
                    case 'On Going':
                        $rowColor = 'yellow';
                        break;
                    case 'Resolved':
                        $rowColor = 'green';
                        break;
                    default:
                        $rowColor = '';
                        break;
                }

                $capitalizedGrade = ucfirst($row['grade']);
                $capitalizedSection = ucfirst($row['section']);

                echo "<tr class='sheshable'>
                        <th style='width:.5%; background-color: $rowColor;'></th>
                        <th style='width:13%'>{$row['lrn']}</th>
                        <th style='width:22%'>{$row['fullname']}</th>
                        <th style='width:15%'>{$row['classification']}</th>
                        <th style='width:15%'>{$capitalizedGrade} - {$capitalizedSection}</th>
                        <th style='width:15%'>{$status}</th>
                        <th style='width:15%' class='act'>
                            <a href='../intervention/adviser_intervention_firstperiod.php?lrn={$row['lrn']}&fullname={$row['fullname']}&classification={$row['classification']}&grade={$row['grade']}&section={$row['section']}&status={$status}' class='updateRecordButton'>UPDATE RECORD</a>
                        </th>
                      </tr>";
            }
        }
    }
    ?>
</table>

    <script>
        function printTableData() {
            let tableData = '';
            const tableRows = document.querySelectorAll('#pupilTable tbody tr');
            if (tableRows.length === 0) {
                console.error('No table rows found.');
                return;
            }

            tableRows.forEach(row => {
                const cells = row.querySelectorAll('td');
                const lrn = cells[0].textContent.trim();
                const fullname = cells[1].textContent.trim();
                const classification = cells[2].textContent.trim();
                const gradeSection = cells[3].textContent.trim();
                const status = cells[4].textContent.trim();

                tableData += `<tr>
                                <td>${lrn}</td>
                                <td>${fullname}</td>
                                <td>${classification}</td>
                                <td>${gradeSection}</td>
                                <td>${status}</td>
                             </tr>`;
            });

            const printWindow = window.open('', '_blank');
            if (!printWindow) {
                console.error('Popup blocked. Please allow popups for this site.');
                return;
            }

            printWindow.document.write(`<!DOCTYPE html>
                                        <html lang="en">
                                        <head>
                                            <meta charset="UTF-8">
                                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                            <title>PRINT</title>
                                            <style>
                                                /* Your CSS styles here */
                                            </style>
                                        </head>
                                        <body>
                                            <!-- Your HTML structure here -->
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>LRN</th>
                                                        <th>Pupil's Name</th>
                                                        <th>P.A.R. Identification</th>
                                                        <th>Grade & Section</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    ${tableData}
                                                </tbody>
                                            </table>
                                        </body>
                                        </html>`);
            printWindow.document.close();
            printWindow.print();
        }
    </script>
</body>
</html>
