<?php
$errorMsg = "";
$errorMsg1 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
        $grade = strtolower($_POST["grade"]); // Updated here
        $section = strtolower($_POST["section"]); // Updated here

        $tableName = "grade_" . $grade . "_section_" . $section;
        $fileName = "grade_" . $grade . "_section_" . $section . ".php";
        $filePath = "grade_sections/" . $fileName;

        include("../../database.php");

        $checkTableQuery = "SHOW TABLES LIKE '$tableName'";
        $result = $conn->query($checkTableQuery);

        if ($result->num_rows > 0) {
            // Table already exists, insert data into existing table
            $file = $_FILES["file"]["tmp_name"];
            $csvData = array_map("str_getcsv", file($file));
            array_shift($csvData);

            foreach ($csvData as $row) {
                $lrn = $row[0];
                $fullname = $row[1];
                $gender = $row[2];
                $grade = $grade;
                $section = $section;
                $school = "Malued Sur Elementary School";
                $insertQuery = "INSERT INTO $tableName (lrn, fullname, gender, grade, section, school)
                                VALUES ('$lrn', '$fullname', '$gender', '$grade', '$section', '$school')";

                if ($conn->query($insertQuery) === FALSE) {
                    $errorMsg1 = "Error inserting data: " . $conn->error;
                    break;
                }
            }

            // Create PHP file in grade_sections folder (if needed)
            if (!file_exists($filePath)) {
                $templateContent = file_get_contents("template.php");
                $templateContent = str_replace("{GRADE}", $grade, $templateContent);
                $templateContent = str_replace("{SECTION}", $section, $templateContent);

                file_put_contents($filePath, $templateContent);
            }

            $errorMsg = "Data inserted into existing table";
        } else {
            // Table does not exist, create a new table as before
            $createTableQuery = "CREATE TABLE $tableName (
                                    id INT AUTO_INCREMENT PRIMARY KEY,
                                    lrn VARCHAR(255) NOT NULL,
                                    fullname VARCHAR(255) NOT NULL,
                                    gender VARCHAR(255) NOT NULL,
                                    section VARCHAR(255) NOT NULL,
                                    grade VARCHAR(255) NOT NULL,
                                    school VARCHAR(255) NOT NULL
                                )";

            if ($conn->query($createTableQuery) === FALSE) {
                $errorMsg1 = "Error creating table: " . $conn->error;
            } else {
                // Insert data into the newly created table
                $file = $_FILES["file"]["tmp_name"];
                $csvData = array_map("str_getcsv", file($file));
                array_shift($csvData);

                foreach ($csvData as $row) {
                    $lrn = $row[0];
                    $fullname = $row[1];
                    $gender = $row[2];
                    $grade = $grade;
                    $section = $section;
                    $school = "West Central II Elementary SChool";
                    $insertQuery = "INSERT INTO $tableName (lrn, fullname, gender, grade, section, school)
                                    VALUES ('$lrn', '$fullname', '$gender', '$grade', '$section', '$school')";

                    if ($conn->query($insertQuery) === FALSE) {
                        $errorMsg1 = "Error inserting data: " . $conn->error;
                        break;
                    }
                }

                // Create PHP file in grade_sections folder
                $templateContent = file_get_contents("template.php");
                $templateContent = str_replace("{GRADE}", $grade, $templateContent);
                $templateContent = str_replace("{SECTION}", $section, $templateContent);

                file_put_contents($filePath, $templateContent);

                $errorMsg = "File Upload Successful";
            }
        }

        $conn->close();
    } else {
        $errorMsg1 = "Error uploading file.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script>
        function preventBack(){window.history.forward()};
        setTimeout("preventBack()",0);
        window.onunload=function(){null;}
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>School Administrator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url(../../img/bg.png);
            background-size: cover;
        }
        h3 {
            color: green;
            font-family: 'Darker Grotesque', sans-serif;
            font-size: 20px;
            font-weight: bold;
        }
        
        .logo {
            width: 75px;
            height: 75px;
            margin: 0 auto 20px;
            background-image: url('../../img/logo.png'); 
            background-size: cover;
        }
        
        h3 {
            font-family: 'Darker Grotesque', sans-serif;
            color: #fff;
        }
        
        h2 p{
            margin-top: 5px;
            font-size: 18px;
        }

        .login-container {
            margin-top: 120px;
            background-color: rgba(25, 5, 114, 0.80); 
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
            text-align: center;
            position: relative;
        }
        
        a {
            color: #fff;
            text-decoration: none;
        }
        
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: .1rem 5%;
            background: #130550;
            display: flex;
            align-items: center;
            z-index: 100;
            height: 55px;
        }

        .vertical-line {
            margin-left: 40rem;
            height: 40px;
            width: 1px;
            background-color: #fff;
        }

        .logout-icon {
            color: #fff; 
            font-size: 1.5rem;
            cursor: pointer; 
            margin-left: 15px;
        }

        .header.sticky {
            border-bottom: .2rem solid rgba(255, 255, 255, 0.2);
        }

        h4 {
            color: #fff;
            font-family: 'Darker Grotesque', sans-serif;
            font-weight: 300;
            font-size: 1.3rem;
            margin-left: 1rem;
            letter-spacing: 2px;
        }

        .logs {
            width: 3.5rem;
            height: 3.5rem;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: flex-start; 
            justify-content: center;
            width: 100%; 
        }

        .header-content {
            display: flex;
            align-items: center;
        }

        .navbar {
            background-color: #190572;;
            opacity: 80%;
            display: flex;
            justify-content: center;
            height: 50px;
            width: 100%;
            position: fixed;
            top: 57px; 
        }

        nav {
            display: flex;
            align-items: center;
        }

        nav a {
            display: inline-block;
            padding: 14px 40px;
            text-decoration: none;
            color: FFFFFF;
            opacity: 100%;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        h3{
        color: #fff;
        }
        
        .file-upload-container {
            margin-top: 20px;
            border: 2px dashed #fff;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            color: #fff;
        }

        .file-upload-container p {
            margin-bottom: 20px;
        }

        .file-upload-container .form-group {
            margin-bottom: 20px;
        }

        .file-upload-container label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }

        .file-upload-container select, 
        .file-upload-container option,
        .file-upload-container input[type="file"],
        .file-upload-container input[type="text"] {
            width: 80%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #130550;
            background-color: #ddd;
            opacity: 80%;
            color: #130550;
        }

        .file-upload-container select, 
        .file-upload-container option{
            width: 85%;
        }

        .file-upload-container button {
            background-color: #D9D9D9;
            color: #190572;
            padding: 10px 20px;
            border: 1px solid #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .file-upload-container button:hover {
            background-color: #0C052F; 
            border: 1px solid #190572;
            color:#D9D9D9;
        }

        .blue-text{
            color: green;
            font-family: 'Darker Grotesque', sans-serif;
            font-size: 200px;
            font-weight: bold;
        }
        .error-message{
            color: green;
            font-weight:bold ;
          }
          .error-message1{
            color: red;
            font-weight:bold ;
          }

          .dropdown-content {
            display: none;
            position: absolute;
            background-color: #130550;
            min-width: 100px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            right: 150px;
            border-bottom-left-radius: 7px;
            border-bottom-right-radius: 7px;
        }

        .dropdown-content a {
            color: rgb(255, 253, 253);
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #F3F3F3;
            color: #190572;
            opacity: 80%;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
        .back-icon {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 30px;
            color: #fff;
            text-decoration: none;
          }
                
          .back-icon i {
            margin-right: 5px;
          } 

        
    </style>
</head>
<body>

    <header>
        <div class="container">
            <div class="header-content">
                <img src="../../img/logo.png" class="logs">
                <h4>E.D.G.E | P.A.R. Early Detection and Guidance for Education</h4>
                <i class="vertical-line"></i>
                <div class="dropdown">
                <i class='bx log-out bx-lock-alt logout-icon' onclick="toggleDropdown()"></i>
                    <div class="dropdown-content" id="dropdownContent">
                    <a href="../../login/Login.php">Log Out</a>
                        <a href="../change_password/change_password.php">Change Password</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

 
    <div class="login-container">
        <a href="../manage_student/School_Admin_Studentlist.php" class="back-icon"><i class='bx bxs-chevron-left'></i></a>
        <div class="logo"></div>
        <h3>Import Data File</h3>

        <div class="error-message">
            <?php echo $errorMsg; ?>
        </div>
        <div class="error-message1">
            <?php echo $errorMsg1; ?>
        </div>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="file-upload-container">
        <p>Upload CSV file only</p>
        <div class="form-group">
            <label for="file">Choose File:</label>
            <input type="file" id="file" name="file" accept=".csv" required>
        </div>
        <div class="form-group">
            <label for="grade">Grade:</label>
            <select id="grade" name="grade">
                <option value="kinder">Kinder</option>
                <option value="I">1</option>
                <option value="II">2</option>
                <option value="III">3</option>
                <option value="IV">4</option>
                <option value="V">5</option>
                <option value="VI">6</option>
            </select>
        </div>
        <div class="form-group">
                <label for="section">Section:</label>
                <input type="text" id="section" name="section" value="" required>

        </div>
        <button type="submit" class="import-button">Import</button>
    </div>
    </form>
    </div>

    <script src="manage_student.js"></script>
</body>
</html>
