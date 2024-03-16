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

        <p class="label">Employee Number</p>
        <input class="response" type="text" value=" ">
        
        <p class="label">Adviser</p>
        <input class="response" type="text" value=" ">

    </div>
    <div class="update-record2">
    <button id="printButton">Print</button>
        <p class="label">Grade & Section</p>
        <input class="response" type="text" value=" ">
        <p class="label">Total Students</p>
        <input class="response" type="text" value=" ">
    </div>
    </div>
    <?php
if (isset($_GET['data'])) {
    $jsonData = json_decode($_GET['data'], true);
    echo "<table border='1'>
            <tr>
                <th>LRN</th>
                <th>Full Name</th>
                <th>Grade - Section</th>
                <th>Classification</th>
                <th>Status</th>
            </tr>";

    foreach ($jsonData as $row) {
        echo "<tr>
                <td>{$row['lrn']}</td>
                <td>{$row['fullname']}</td>
                <td>{$row['grade_section']}</td>
                <td>{$row['classification']}</td>
                <td>{$row['status']}</td>
              </tr>";
    }

    echo "</table>";
}
?>
<script>
document.getElementById('printButton').addEventListener('click', function() {
    window.print();
});
</script>
</body>
</html>
