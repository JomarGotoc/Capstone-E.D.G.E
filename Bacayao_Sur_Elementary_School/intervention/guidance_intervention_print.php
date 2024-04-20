<?php
// Get the LRN, classification, and employment_number from the URL using GET
$lrn = $_GET['lrn'] ?? '';
$classification = $_GET['classification'] ?? '';
$employment_number = $_GET['employment_number'] ?? '';
$quarter = $_GET['quarter'] ?? '';

// Check if LRN, classification, and employment_number are provided
if (!empty($lrn) && !empty($classification) && !empty($employment_number)) {
    // Establish a connection to your database
    include('../../database.php');

    // Escape inputs to prevent SQL injection
    $lrn = $conn->real_escape_string($lrn);
    $classification = $conn->real_escape_string($classification);
    $employment_number = $conn->real_escape_string($employment_number);

    // Define the tables to search in
    $tables = ['academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'];

    // Define the columns to fetch
    $columns = ['fullname', 'gname', 'grade', 'section', 'number', 'status', 'notes', 'advice', 'topic', 'intervention'];

    // Loop through each table and check if LRN exists for the given classification
    foreach ($tables as $table) {
        // Build the SQL query to select specific columns
        $columnsString = implode(', ', $columns);
        $sql = "SELECT $columnsString FROM $table WHERE lrn = '$lrn' AND classification = '$classification' AND quarter = '$quarter'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Assign fetched values to variables
                $fullname = $row['fullname'];
                $gname = $row['gname'];
                $grade = $row['grade'];
                $section = $row['section'];
                $number = $row['number'];
                $status = $row['status'];
                $notes = $row['notes'];
                $advice = $row['advice'];
                $topic = $row['topic'];
                $intervention = $row['intervention'];

                // Fetch adviser's fullname from adviser table
                $sqlAdviser = "SELECT fullname FROM counselor WHERE employment_number = '$employment_number'";
                $resultAdviser = $conn->query($sqlAdviser);
                if ($resultAdviser->num_rows > 0) {
                    $rowAdviser = $resultAdviser->fetch_assoc();
                    $adviser = $rowAdviser['fullname'];
                } 
            }
        }
    }

    // Close the database connection
    $conn->close();
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
        <p class="label">School Year</p>
        <input class="response" type="text" value=" ">
    </div>
    <div class="details">
    <div class="update-record">
        <p class="label">Learner's Reference Number (LRN)</p>
        <input class="response" type="text" value="<?php echo $lrn ?>">
        
        <p class="label">Pupil's Name</p>
        <input class="response" type="text" value="<?php echo $fullname ?>">
        
        <p class="label">Counselor</p>
        <input class="response" type="text" value="<?php echo $adviser ?>">
        <p class="label">Guardian Name</p>
        <input class="response" type="text" value="<?php echo $gname ?>">
    </div>
    <div class="update-record2">
        <p class="label">Grade & Section</p>
        <input class="response" type="text" value="<?php echo $grade .' - '. $section ?>">
        <p class="label">Identification</p>
        <input class="response" type="text" value="<?php echo $classification ?>">
        <p class="label">P.A.R. Status</p>
        <input class="response" type="text" value="<?php echo $status ?>">
        <p class="label">Contact Number</p>
        <input class="response" type="text" value="<?php echo $number ?>">
    </div>
    </div>
    <table>
        <thead>
            <tr>
                <th style="width: 25%">Counselor's Notes</th>
                <th style="width: 25%">Topic/Matter</th>
                <th style="width: 25%">Intervention</th>
                <th style="width: 25%">Advice</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $notes ?></td>
                <td><?php echo $topic ?></td>
                <td><?php echo $intervention ?></td>
                <td><?php echo $advice ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
