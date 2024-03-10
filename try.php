<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University of Pangasinan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        #logo {
            max-width: 100px;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        #list-container {
            max-width: 600px;
            height: 500px; /* Set a fixed height */
            overflow-y: auto; /* Add a vertical scrollbar if needed */
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin-bottom: 10px;
            padding: 10px;
            background-color: #ecf0f1;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        li:hover {
            background-color: #bdc3c7;
        }

        #export-btn {
            background-color: #2ecc71;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const exportBtn = document.getElementById("export-btn");

            exportBtn.addEventListener("click", function () {
                exportToPDF();
            });

            function exportToPDF() {
                const listContainer = document.getElementById("list-container");

                html2pdf(listContainer, {
                    margin: 0,
                });
            }
        });
    </script>
</head>
<body>

    <header>
        <h1>University of Pangasinan</h1>
        <img id="logo" src="img/logo.png" alt="University of Pangasinan Logo">
    </header>

    <div id="list-container">
        <ul>
            <!-- Add more <li> elements as needed -->
            <li>Program 1</li>
            <li>Program 2</li>
            <li>Program 3</li>
            <li>Program 1</li>
            <li>Program 2</li>
            <li>Program 3</li>
            <li>Program 1</li>
            <li>Program 2</li>
            <li>Program 3</li>
            <!-- Example of more <li> elements -->
            <li>Program 4</li>
            <li>Program 5</li>
            <li>Program 6</li>
            <li>Program 7</li>
            <li>Program 8</li>
            <li>Program 9</li>
        </ul>
    </div>

    <button id="export-btn">Export</button>

</body>
</html>
