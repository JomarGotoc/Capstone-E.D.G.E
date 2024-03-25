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
            background-color: #B7B7B7;
            color: #190572;
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
            background-color: #F3F3F3;
            border: none;
            grid-column: 2;
            width: 300px;
            color: #190572;
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
            background-color: #B7B7B7;
            color: #190572;
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
        <p class="label">Division</p>
        <input class="response" type="text" value=" ">
        
        <p class="label">Quarter</p>
        <input class="response" type="text" value=" ">
    </div>
    <div class="update-record2">
        <p class="label">Total P.A.Rs</p>
        <input class="response" type="text" value=" ">
        <p class="label">Resolved Cases</p>
        <input class="response" type="text" value=" ">
    </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>Elementary School's Name</th>
                <th># of Students</th>
                <th># of P.A.R</th>
                <th>A - Literacy (E)</th>
                <th>A - Literacy (F)</th>
                <th>A - Numeracy</th>
                <th>Behavioral</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>chowchowchow</td>
                <td>11</td>
                <td>10</td>
                <td>4</td>
                <td>2</td>
                <td>3</td>
                <td>1</td>
            </tr>
            <tr>
                <td>chowchowchow</td>
                <td>11</td>
                <td>10</td>
                <td>4</td>
                <td>2</td>
                <td>3</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
</body>
</html>