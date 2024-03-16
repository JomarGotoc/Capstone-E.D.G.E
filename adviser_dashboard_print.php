<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .record-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .record-info {
            flex-grow: 1;
        }

        .record-info h3 {
            margin: 0 0 5px;
        }

        .record-info p {
            margin: 0;
        }

        .print-btn {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .print-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Print Record</h1>
        <div class="record-container">
            <div class="record-info">
                <h3>Student Name: John Doe</h3>
                <p>Student ID: 123456</p>
                <p>Program: Computer Science</p>
            </div>
            <button class="print-btn" onclick="window.print()">Print</button>
        </div>
        <!-- Additional record details can be added here -->
    </div>
</body>
</html>
