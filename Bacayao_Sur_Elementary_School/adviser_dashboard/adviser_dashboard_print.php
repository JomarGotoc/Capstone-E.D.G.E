<?php
    include('../../database.php');
    // Check if the grade and section parameters are present in the URL
    if (isset($_GET['grade']) && isset($_GET['section'])) {
        // Retrieve the grade and section values from the URL
        $grade = ucfirst($_GET['grade']);
        $section = $_GET['section'];
        $quarter = $_GET['quarter'];

        // Prepare SQL statements for each table to fetch data
        $sql_english = "SELECT lrn, fullname, classification, grade, section, status FROM academic_english WHERE grade = ? AND section = ? AND quarter = ?";
        $sql_filipino = "SELECT lrn, fullname, classification, grade, section, status FROM academic_filipino WHERE grade = ? AND section = ? AND quarter = ?";
        $sql_numeracy = "SELECT lrn, fullname, classification, grade, section, status FROM academic_numeracy WHERE grade = ? AND section = ? AND quarter = ?";
        $sql_behavioral = "SELECT lrn, fullname, classification, grade, section, status FROM behavioral WHERE grade = ? AND section = ? AND quarter = ?";
        $sql_adviser = "SELECT fullname, employment_number FROM adviser WHERE grade = ? AND section = ?";

        // Prepare and bind parameters
        $stmt_english = $conn->prepare($sql_english);
        $stmt_english->bind_param("sss", $grade, $section, $quarter);
        $stmt_filipino = $conn->prepare($sql_filipino);
        $stmt_filipino->bind_param("sss", $grade, $section, $quarter);
        $stmt_numeracy = $conn->prepare($sql_numeracy);
        $stmt_numeracy->bind_param("sss", $grade, $section, $quarter);
        $stmt_behavioral = $conn->prepare($sql_behavioral);
        $stmt_behavioral->bind_param("sss", $grade, $section, $quarter);
        $stmt_adviser = $conn->prepare($sql_adviser);
        $stmt_adviser->bind_param("ss", $grade, $section);

        // Execute queries and fetch results
        $stmt_english->execute();
        $result_english = $stmt_english->get_result()->fetch_all(MYSQLI_ASSOC);

        $stmt_filipino->execute();
        $result_filipino = $stmt_filipino->get_result()->fetch_all(MYSQLI_ASSOC);

        $stmt_numeracy->execute();
        $result_numeracy = $stmt_numeracy->get_result()->fetch_all(MYSQLI_ASSOC);

        $stmt_behavioral->execute();
        $result_behavioral = $stmt_behavioral->get_result()->fetch_all(MYSQLI_ASSOC);

        // Fetch adviser details
        $stmt_adviser->execute();
        $result_adviser = $stmt_adviser->get_result()->fetch_assoc();
        $fullname = $result_adviser['fullname'];
        $employment_number = $result_adviser['employment_number'];

        // Combine results from all tables into one array
        $combined_results = array_merge($result_english, $result_filipino, $result_numeracy, $result_behavioral);

        // Add $combined_results to $totalstudents
        $totalstudents = array_merge($totalstudents ?? [], $combined_results);
        $total_students_count = count($totalstudents);
        // Close statements and connection
        $stmt_english->close();
        $stmt_filipino->close();
        $stmt_numeracy->close();
        $stmt_behavioral->close();
        $stmt_adviser->close();
        $conn->close();
    } 
?>
<?php
if(isset($_GET['filename'])) {
    $filename = $_GET['filename'];
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
        body {
            background-color: white;
            font-family: Arial, sans-serif;
            font-size: 15px;
        }
        header {
            padding: 5px;
            color: black;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }
        header img {
            margin-right: 15px;
        }

        header h2{
            font-size: 15px;
        }
        .update{
            margin-top: 20px;
            width: 550px;
            display: grid;
            grid-template-columns: auto auto;
            gap: 2px;
        }
        .details{
            display: grid;
            grid-template-columns: auto auto;
            gap: 5px;
            margin-top: -20px;
        }
        .update-record,
        .update-record2 {
            margin-top: 20px;
            margin-bottom: 20px;
            width: 550px;
            display: grid;
            grid-template-columns: auto auto;
            gap: 2px;
        }
        .label {
            color: black;
            padding: 5px 10px;
            margin: 5px 0;
            grid-column: 1;
            width: 200px;
            text-align: left;
            font-weight: bold;
            border: 1px solid #dddddd;

        }
        .response {
            margin: 5px 0;
            padding: 5px 10px;
            border: 1px solid #dddddd;
            grid-column: 2;
            width: 400px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th{
            text-align: center;
        }
        th {
            color: black;
        }
        tr:nth-child(even) {
            background-color: transparent;
        }
        tr:nth-child(odd) {
            background-color: transparent;
        }
        .print-button {
        background-color: white;
        color: black;
        padding: 8px 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 10px;
        transition: background-color 0.3s ease;
    }

    button{
            background-color: transparent;
            border: none;
        }


        .back-icon {
            left: 10px;
            font-size: 30px;
            color:black;
            text-decoration: none;
            cursor: pointer;
        }

        .back-icon i {
            margin-right: 5px;
        }

        .print-button {
            width: fit-content;
            background-color: white;
            letter-spacing: 1.2px;
            font-size: 15px;
            color: black;
            border: none;
            padding: 10px 35px;
            border-radius: 5px;
            cursor: pointer;
            margin-left: -180px;
}
    </style>
</head>
<body>
    <header>
        <h2>E.D.G.E | P.A.R. Education Detection and Guidance for Education</h2>
    </header>
    <div class="update">
    <a href="<?php echo $filename ?>?employment_number=<?php echo isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value'; ?>"> <button class="back-icon"><i class='bx bxs-chevron-left'></i></button></a>
    <button class="print-button" onclick="printContent()">Print Content</button>
        <p class="label">School Year</p>
        <input class="response" type="text" value=" ">
    </div>
    <div class="details">
    <div class="update-record">
        <p class="label">Employee Number</p>
        <input class="response" type="text" value="<?php echo $employment_number ?>" readonly>
        
        <p class="label">Adviser</p>
        <input class="response" type="text" value="<?php echo $fullname ?>" readonly>
    </div>
    <div class="update-record2">
        
        <p class="label">Grade & Section</p>
        <input class="response" type="text" value="<?php echo $grade .' - '. $section ?>" readonly>
        
        <p class="label">Total P.A.Rs</p>
        <input class="response" type="text" value="<?php echo $total_students_count ?>" readonly>
    </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>LRN</th>
                <th>Pupil's Name</th>
                <th>P.A.R. Identification</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
    foreach ($combined_results as $row) {
        echo "<tr>";
        echo "<td >" . htmlspecialchars($row['lrn']) . "</td>";
        echo "<td >" . htmlspecialchars($row['fullname']) . "</td>";
        echo "<td >" . htmlspecialchars($row['classification']) . "</td>";
        echo "<td >" . htmlspecialchars($row['status']) . "</td>";
        echo "</tr>";
    }
    ?>
        </tbody>
    </table>
</body>
<script>
    function printContent() {
        window.print();
    }
</script>
</html>