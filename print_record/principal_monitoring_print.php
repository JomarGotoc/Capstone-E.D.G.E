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

        td:first-child {
            text-align: left;
            font-weight: bold;
        }

        th {
            background-color: #190572;
            color: #FFFFFF;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:nth-child(odd) {
            background-color: transparent;
        }

        .line {
            width: 100%;
            height: 2px;
            background-color: #190572;
            margin-top: 40px;
            margin-bottom: 40px;
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

        <p class="label">School Name</p>
        <input class="response" type="text" value=" ">

    </div>

    <div class="update-record2">

        <p class="label">Quarter</p>
        <input class="response" type="text" value=" ">

    </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>P.A.R. Identification</th>
                <th>Q1</th>
                <th>Resolved</th>
                <th>Q2</th>
                <th>Resolved</th>
                <th>Q3</th>
                <th>Resolved</th>
                <th>Q4</th>
                <th>Resolved</th>
                <th>Total P.A.R.s</th>
                <th>Total Resolved</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>Academic - Literacy in English</td>
                <td>11</td>
                <td>10</td>
                <td>4</td>
                <td>2</td>
                <td>3</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>

            <tr>
                <td>Academic - Literacy in Filipino</td>
                <td>11</td>
                <td>10</td>
                <td>4</td>
                <td>2</td>
                <td>3</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>

            <tr>
                <td>Academic - Numeracy</td>
                <td>11</td>
                <td>10</td>
                <td>4</td>
                <td>2</td>
                <td>3</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>

            <tr>
                <td>Behavioral</td>
                <td>11</td>
                <td>10</td>
                <td>4</td>
                <td>2</td>
                <td>3</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>

        </tbody>
    </table>

    <div class="line"></div>

    <div class="details" >
    <div class="update-record">

        <p class="label">No. of P.A.Rs</p>
        <input class="response" type="text" value="Highest to Lowest">

    </div>

    <div class="update-record2">

        <p class="label">Quarter</p>
        <input class="response" type="text" value=" ">

    </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>Grade level</th>
                <th>Academic - Literacy in English</th>
                <th>Academic - Literacy in Filipino</th>
                <th>Academic - Numeracy</th>
                <th>Behavioral</th>
                <th>Total P.A.R.s</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>Grade 1</td>
                <td>11</td>
                <td>10</td>
                <td>4</td>
                <td>2</td>
                <td>3</td>
            </tr>

            <tr>
                <td>Grade 2</td>
                <td>11</td>
                <td>10</td>
                <td>4</td>
                <td>2</td>
                <td>3</td>
            </tr>

            <tr>
                <td>Grade 3</td>
                <td>11</td>
                <td>10</td>
                <td>4</td>
                <td>2</td>
                <td>3</td>
            </tr>

            <tr>
                <td>Kinder ngay</td>
                <td>11</td>
                <td>10</td>
                <td>4</td>
                <td>2</td>
                <td>3</td>
            </tr>

        </tbody>
    </table>

</body>
</html>
