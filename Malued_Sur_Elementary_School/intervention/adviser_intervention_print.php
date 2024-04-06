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
                $sqlAdviser = "SELECT fullname FROM adviser WHERE employment_number = '$employment_number'";
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
            width: 650px;
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
            width: 300px;
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
            width: 300px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #190572;
            color: white;
        }
        
        td textarea {
            width: 70%;
            min-width: 95%;
            max-width: 95%;
            min-height: 95px;
            resize:none;
            height: fit-content;
            padding: 5px;
            border: none;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <img src="../img/logo.png" alt="Logo" width="70" height="70">
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
        
        <p class="label">Adviser</p>
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
                <th style="width: 50%">Adviser's Notes</th>
                <th style="width: 50%">Topic/Matter</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><textarea><?php echo $notes ?></textarea></td>
                <td><textarea><?php echo $topic ?></textarea></td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th style="width: 50%">Intervention</th>
                <th style="width: 50%">Advice</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><textarea><?php echo $intervention ?></textarea></td>
                <td><textarea><?php echo $advice ?></textarea></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
