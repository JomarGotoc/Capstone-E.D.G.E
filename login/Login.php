<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get a list of all databases
    $result = $conn->query("SHOW DATABASES");

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            $databaseName = $row["Database"];

            // Check if the database name contains the word "school"
            if (strpos($databaseName, 'school') !== false) {
                // Remove underscores and make ucwords
                $formattedName = ucwords(str_replace('_', ' ', $databaseName));

                // Example: Assuming you have tables in each database (adviser, principal, counselor, school_admin, sdo_admin, executive_committee)
                $databaseConn = new mysqli($servername, $username, $password, $databaseName);

                // Check connection to the specific database
                if ($databaseConn->connect_error) {
                    die("Connection failed: " . $databaseConn->connect_error);
                }

                // User input (replace with actual input method)
                $employmentNumber = $_POST['employment_number'];
                $inputPassword = $_POST['password'];

                // Build the SQL query
                $query = "SELECT employment_number, password, verified, grade, section, 'adviser' as table_name FROM adviser WHERE employment_number = '$employmentNumber'
                          UNION 
                          SELECT employment_number, password, verified, NULL as grade, NULL as section, 'principal' as table_name FROM principal WHERE employment_number = '$employmentNumber'
                          UNION 
                          SELECT employment_number, password, verified, NULL as grade, NULL as section, 'counselor' as table_name FROM counselor WHERE employment_number = '$employmentNumber'
                          UNION 
                          SELECT employment_number, password, verified, NULL as grade, NULL as section, 'school_admin' as table_name FROM school_admin WHERE employment_number = '$employmentNumber'
                          UNION 
                          SELECT employment_number, password, verified, NULL as grade, NULL as section, 'sdo_admin' as table_name FROM sdo_admin WHERE employment_number = '$employmentNumber'
                          UNION 
                          SELECT employment_number, password, verified, NULL as grade, NULL as section, 'executive_committee' as table_name FROM executive_committee WHERE employment_number = '$employmentNumber'";
                
                $userResult = $databaseConn->query($query);

                while ($row = $userResult->fetch_assoc()) {
                    // Check if the hashed password matches the input password and the user is verified
                    $hashedPassword = $row['password'];

                    // Use a secure password hashing function like password_verify
                    if (password_verify($inputPassword, $hashedPassword)) {
                        // User found in the current database
                        $table = $row['table_name'];

                        // Check if the user is verified
                        if ($row['verified'] == 'yes') {
                            // Redirect based on the found table
                            switch ($table) {
                                case 'adviser':
                                    $grade = $row['grade'];
                                    $section = $row['section'];
                                    header("Location: ../$databaseName/adviser_dashboard/grade_${grade}_section_${section}_q1.php");
                                    exit;
                                    break;
                                case 'principal':
                                    header("Location: ../$databaseName/monitoring_tracking/Principal_tracking_reports_q1.php?employment_number=$employmentNumber&table=$table");
                                    exit;
                                    break;
                                case 'counselor':
                                    header("Location: ../$databaseName/guidance_dashboard/guidance_dashboard_q1.php?employment_number=$employmentNumber&table=$table");
                                    exit;
                                    break;
                                case 'school_admin':
                                    header("Location: ../$databaseName/button_options/School_Admin_Create_Account.php?employment_number=$employmentNumber&table=$table");
                                    exit;
                                    break;
                                case 'sdo_admin':
                                    header("Location: ../$databaseName/SDO_manage_account/SDO_manageaccount.php?employment_number=$employmentNumber&table=$table");
                                    exit;
                                    break;
                                case 'executive_committee':
                                    header("Location: ../$databaseName/monitoring_tracking/executive_monitoring_reports.php?employment_number=$employmentNumber&table=$table");
                                    exit;
                                    break;
                            }
                        } else {
                            // User not verified, redirect to login/enter_email_logging_in.php
                            header("Location: ../$databaseName/enter_email/enter_email_logging_in.php?employment_number=$employmentNumber&table=$table");
                            exit;
                        }
                    }
                }

                $databaseConn->close();
            }
        }
    } else {
        echo "No databases found";
    }

    // Close connection to the main server
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>LogIn</title>
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

        .login-container {
            background-color: #190572;
            opacity: 1;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 18.5rem;
        }

        .logo {
            width: 75px;
            height: 75px;
            margin: 0 auto 20px;
            background-image: url('../img/logo.png');
            background-size: cover;   
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 92%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            align-items: center;
        }

        .login-form button {
            background-color: #0C052F;
            width: 98%;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 7px 30px;
            cursor: pointer;
            margin-top: 10px; 
            justify-content: center;
        }

        .login-form button:hover {
            background-color: #DDDAE7;
            color: #0C052F;
        }

        .login-form{
            align-items: center;
        }

        h2 {
            font-family: 'Darker Grotesque', sans-serif;
            font-weight: 500;
            align-items: start;
            color: #fff;
        }

        .login-container {
            background-color: rgba(25, 5, 114, 0.80);
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 18.5rem;
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

        .header.sticky {
            border-bottom: .2rem solid rgba(185, 169, 169, 0.2);
        }

        h4 {
            color: #fff;
            font-family: 'Darker Grotesque', sans-serif;
            font-weight: 300;
            font-size: 1.3rem;
            margin-left: 1rem;
            letter-spacing: 2px;
            white-space: nowrap; 
            overflow: hidden; 
            text-overflow: ellipsis;
        }

        .logs {
            width: 3.5rem;
            height: 3.5rem;
        }

        .login-container {
            position: relative;
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

        .login-container .forgot{
            background-color: #0C052F;
            width: 98%;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 7px 30px;
            cursor: pointer;
            margin-top: 5px; 
            justify-content: center;
        }

        .login-container .forgot:hover {
            background-color: #DDDAE7;
            color: #0C052F;
        }
        .error-message{
            color: red;
            font-weight:bold ;
            text-align: center;
          }

          @media screen and (max-width: 600px) {
            header{
                height: 40px;
            }
            h4 {
                font-size: 0.6rem; 
            }

            .logs {
                width: 2rem;
                height: 2rem;
            }

            .login-container {
                width: 90%; 
            }

            .login-container .forgot,
            .login-form button{
                width: 97%;
            }
        }

        @media screen and (min-width: 1200px) {
            h4 {
                font-size: 1.3rem; 
            }

            .login-container {
                max-width: 500px; 
            }
        }

    </style>
</head>
<body>

<header>
    <img src="../img/logo.png" class="logs">
    <div class="container">
        <h4>E.D.G.E | P.A.R. Early Detection and Guidance for Education</h4>
    </div>
</header>

<div class="login-container">
    <a href="../splash.php" class="back-icon"><i class='bx bxs-chevron-left'></i></a>
    <div class="logo"></div>
    <h2>Sign in to E.D.G.E.</h2>


    <form class="login-form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <input type="text" id="idnum" name="employment_number" placeholder="Enter Employee Number ">
        <input type="password" id="password" name="password" placeholder="Enter Password ">
        <button type="submit" name="submit" >Log In</button>
    </form>
    
    <a href="../forgot_password/employee_number_Forgot_Pass.php"> <button class="forgot" type="forgot">Forgot Password</button></a>

</div>
</body>
</html>