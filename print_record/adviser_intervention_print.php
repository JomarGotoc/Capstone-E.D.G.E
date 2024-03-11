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
        <input class="response" type="text" value=" ">
        
        <p class="label">Pupil's Name</p>
        <input class="response" type="text" value=" ">
        
        <p class="label">Adviser</p>
        <input class="response" type="text" value=" ">

        <p class="label">Guardian Name</p>
        <input class="response" type="text" value=" ">

    </div>

    <div class="update-record2">
        <p class="label">Grade & Section</p>
        <input class="response" type="text" value=" ">

        <p class="label">Identification</p>
        <input class="response" type="text" value=" ">

        <p class="label">P.A.R. Status</p>
        <input class="response" type="text" value=" ">

        <p class="label">Contact Number</p>
        <input class="response" type="text" value=" ">
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
                <td><textarea>chowchowchowchowchowchowchowchowchowchow</textarea></td>
                <td><textarea>chowchowchowchowchowchowchowchowchowchow</textarea></td>
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
                <td><textarea>chowchowchowchowchowchowchowchowchowchow</textarea></td>
                <td><textarea>chowchowchowchowchowchowchowchowchowchow</textarea></td>
            </tr>
        </tbody>
    </table>

</body>
</html>
