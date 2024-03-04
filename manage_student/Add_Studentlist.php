<?php
    $errorMsg = "";
    $errorMsg1= "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if file is uploaded successfully
        if (isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
            $grade = ($_POST["grade"]); // Ensure $grade is an integer
            $section = ($_POST["section"]); // Ensure $section is an integer

            // Combine grade and section to form the table name
            $tableName = strtolower("grade_".$grade."_section_" . $section);

            // Check if the table already exists
            include("../database.php");

            $checkTableQuery = "SHOW TABLES LIKE '$tableName'";
            $result = $conn->query($checkTableQuery);

            if ($result->num_rows > 0) {
                $errorMsg1 = "Record already exists.";
            } else {
                // If the table doesn't exist, create it
                $createTableQuery = "CREATE TABLE $tableName (
                                        id INT AUTO_INCREMENT PRIMARY KEY,
                                        lrn VARCHAR(255) NOT NULL,
                                        fullname VARCHAR(255) NOT NULL,
                                        section VARCHAR(255) NOT NULL,
                                        grade VARCHAR(255) NOT NULL
                                    )";

                if ($conn->query($createTableQuery) === FALSE) {
                    $errorMessage = "Error creating table: " . $conn->error;
                } else {
                    // Process CSV file and skip the first row (headers)
                    $file = $_FILES["file"]["tmp_name"];
                    $csvData = array_map("str_getcsv", file($file));

                    // Skip the first row (headers)
                    array_shift($csvData);

                    // Loop through the remaining rows
                    foreach ($csvData as $row) {
                        $lrn = $row[0]; // Assuming A contains LRN
                        $fullname = $row[1]; // Assuming B contains Fullname
                        $section = $row[2]; // Assuming C contains Section
                        $grade = $row[3]; // Assuming D contains Phone

                        // Insert data into the table
                        $insertQuery = "INSERT INTO $tableName (lrn, fullname, section, grade)
                                        VALUES ('$lrn', '$fullname', '$section', '$grade')";

                        if ($conn->query($insertQuery) === FALSE) {
                            $errorMsg1 = "Error inserting data: " . $conn->error;
                            break; // Exit the loop if an error occurs
                        }
                    }

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
            background: url(../img/bg.png);
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
            background-image: url('../img/logo.png'); 
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
            margin-left: 37rem;
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
            padding: 80px;
            text-align: center;
            color: #fff;
        }

        .file-upload-container:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .file-upload-container p{
            margin-bottom: 50px;
        }

        #file-input {
            display: none;
        }

        .import-button {
            background-color: #D9D9D9;
            color: #190572;
            padding: 10px 20px;
            margin-top: 30px;
            border: 1px solid #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .import-button:hover {
            background-color: #0C052F; 
            border: 1px solid #190572;
            color: #D9D9D9;
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
            right: 100px;
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
        
    </style>
</head>
<body>

    <header>
        <div class="container">
            <div class="header-content">
                <img src="../img/logo.png" class="logs">
                <h4>E.D.G.E | P.A.R. Early Detection and Guidance for Education</h4>
                <i class="vertical-line"></i>
                <div class="dropdown">
                <i class='bx log-out bx-lock-alt logout-icon' onclick="toggleDropdown()"></i>
                    <div class="dropdown-content" id="dropdownContent">
                        <a href="#">Log Out</a>
                        <a href="../change_password/change_password.php">Change Password</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="navbar">
        <nav>
            <a href="../button_options/School_Admin_Create_Account.php">Create Account</a>
            <a href="../school_admin_manage_account/Adviser_Account.php">Manage Accounts</a>
            <a href="../manage_student/School_Admin_Studentlist.php">Manage Students List</a>
        </nav>
    </div>

 
    <div class="login-container">
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
            
                <br>
                <input type="file" id="file" name="file" accept=".csv" required>
                <br>
                <div class="form-group">
                    <div class="form-group">
                        <label for="topdown">Grade Level</label>
                        <select id="topdown" name="grade" >
                            <option value="kinder">Kinder</option>
                            <option value="one">1</option>
                            <option value="two">2</option>
                            <option value="three">3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="topdown">Section</label>
                        <select id="topdown" name="section" >
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
            </div>
        <button type="submit" value="Upload" class="import-button">Import</button>
    </div>
    </form>
    </div>

    <script src="manage_student.js"></script>
</body>
</html>