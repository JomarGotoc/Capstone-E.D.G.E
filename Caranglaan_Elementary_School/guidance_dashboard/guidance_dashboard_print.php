<?php
include('../../database.php');

// Get the employment_number from the URL using GET
if (isset($_GET['employment_number'])) {
    $employment_number = $_GET['employment_number'];

    // Prepare and execute the SQL query to fetch counselor's fullname
    $sql_counselor = "SELECT fullname FROM counselor WHERE employment_number = '$employment_number'";
    $result_counselor = $conn->query($sql_counselor);

    if ($result_counselor->num_rows > 0) {
        // Fetch the fullname and store it as $fullname
        $row_counselor = $result_counselor->fetch_assoc();
        $fullname = $row_counselor['fullname'];

        // Prepare and execute the SQL query for behavioral data
        $quarter = $_GET['quarter'];
        $school = 'Caranglaan Elementary School';
        $sql_behavioral = "SELECT lrn, fullname, classification, grade, section, status FROM behavioral WHERE quarter = $quarter AND school = '$school'";
        $result = $conn->query($sql_behavioral);

        // Check if the query was successful
        if ($result) {
            // Count the number of LRNs
            $total = $result->num_rows;
        } 
    } 
} 

$conn->close();
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
        }
        header {
            background-color: #190572;
            padding: 10px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }
        header img {
            margin-right: 10px;
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
            background-color: #190572;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            margin: 5px 0;
            grid-column: 1;
            width: 200px;
            text-align: left;
            font-weight: bold;
        }
        .response {
            margin: 5px 0;
            padding: 5px 10px;
            border-radius: 5px;
            background-color: #19057230;
            border: none;
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
            background-color: #190572;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:nth-child(odd) {
            background-color: transparent;
        }
        button{
            background-color: transparent;
            border: none;
        }


        .back-icon {
            left: 10px;
            font-size: 30px;
            color:#190572;
            text-decoration: none;
            cursor: pointer;
        }

        .back-icon i {
            margin-right: 5px;
        }

        .print-button {
            width: fit-content;
            background-color: #190572;
            letter-spacing: 1.2px;
            font-size: 15px;
            color: white;
            border: none;
            padding: 10px 35px;
            border-radius: 5px;
            cursor: pointer;
            margin-left: -180px;
}
        .print-button:hover {
            background-color: #0c044c;
        }
    </style>
</head>
<body>
    <header>
        <img src="../../img/logo.png" alt="Logo" width="70" height="70">
        <h2>E.D.G.E | P.A.R. Early Detection and Guidance for Education</h2>
    </header>
    <div class="update">
        <a href="guidance_dashboard_q1.php?employment_number=<?php echo isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value'; ?>" > <button class="back-icon"><i class='bx bxs-chevron-left'></i></button></a>
        <button class="print-button" onclick="printContent()">Print Content</button>
        <p class="label">School Year</p>
        <input class="response" type="text" value="S.Y. 2023 - 2024" readonly>
    </div>
    <div class="details">
    <div class="update-record">
        <p class="label">Employee Number</p>
        <input class="response" type="text" value="<?php echo $employment_number ?>">
        
        <p class="label">Guidance Counselor</p>
        <input class="response" type="text" value="<?php echo $fullname ?>">
    </div>
    <div class="update-record2">
        
        <p class="label">Grade & Section</p>
        <input class="response" type="text" value=" ">
        
        <p class="label">Total Students</p>
        <input class="response" type="text" value="<?php echo $total ?>">
    </div>
    </div>
    <?php
if ($result->num_rows > 0) {
    // Display the results in a table with centered text
    echo "<table border='1'>
            <tr>
                <th style='text-align: center;'>LRN</th>
                <th style='text-align: center;'>Full Name</th>
                <th style='text-align: center;'>Classification</th>
                <th style='text-align: center;'>Grade</th>
                <th style='text-align: center;'>Section</th>
                <th style='text-align: center;'>Status</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td style='text-align: center;'>{$row['lrn']}</td>
                <td style='text-align: center;'>{$row['fullname']}</td>
                <td style='text-align: center;'>{$row['classification']}</td>
                <td style='text-align: center;'>{$row['grade']}</td>
                <td style='text-align: center;'>{$row['section']}</td>
                <td style='text-align: center;'>{$row['status']}</td>
            </tr>";
    }
    echo "</table>";
} 
?>

</body>
<script>
    function printContent() {
        window.print();
    }
</script>
</html>