<?php
$errorMsg ="";
function hashPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}

// Function to verify the hashed password
function verifyPassword($password, $hashedPassword) {
    return password_verify($password, $hashedPassword);
}

// Database connection (replace with your database credentials)
include('../database.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user inputs
    $employmentNumber = $_POST['employment_number'];
    $password = $_POST['password'];

    // Array of tables to check against
    $tables = ['adviser', 'counselor', 'principal', 'school_admin', 'sdo_admin', 'executive_committee'];

    // Loop through tables and check login
    foreach ($tables as $table) {
        $query = "SELECT * FROM $table WHERE employment_number = '$employmentNumber'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            // User found in this table, check the password
            $row = $result->fetch_assoc();
            $hashedPassword = $row['password']; // replace 'password' with the actual column name
            $verified = $row['verified']; // replace 'verified' with the actual column name

            if (verifyPassword($password, $hashedPassword)) {
                // Password is correct, user is authenticated
                if ($verified === 'yes') {
                    // User is verified, check user type and redirect accordingly
                    switch ($table) {
                        case 'adviser':
                            $grade = $row['grade'];
                            $section = $row['section'];
                            header("Location: ../adviser_dashboard/grade_" . $grade . "_section_" . $section . ".php");
                            break;
                        case 'counselor':
                            header("Location: counselor.php");
                            break;
                        case 'principal':
                            header("Location: ../monitoring_tracking/Principal_tracking_reports.php");
                            break;
                        case 'school_admin':
                            header("Location: ../button_options/school_admin.php");
                            break;
                        case 'sdo_admin':
                            header("Location: ../button_options/SDO_button.php");
                            break;
                        case 'executive_committee':
                            header("Location: ../monitoring_tracking/executive_monitoring_reports.php");
                            break;
                    }
                    exit();
                } else {
                    // User is not verified, redirect to enter_email_logging_in.php
                    header("Location: enter_email_logging_in.php?employment_number=$employmentNumber&table=$table");
                    exit();
                }
            } else {
                $errorMsg ="Invalid Account";
            }
        }
    }

    // If the loop completes and no matching user is found, redirect to enter_email_logging_in.php
    header("Location: enter_email_logging_in.php");
    exit();
}

// Close the database connection
$conn->close();
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
            width: 18.5rem;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 7px 30px;
            cursor: pointer;
            margin-top: 10px; 
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
            width: 18.5rem;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 7px 30px;
            cursor: pointer;
            margin-top: 5px; 
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

    <div class="error-message">
            <?php echo $errorMsg; ?>
    </div>


    <form class="login-form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <input type="text" id="idnum" name="employment_number" placeholder="Enter Employee Number ">
        <input type="password" id="password" name="password" placeholder="Enter Password ">
        <button type="submit" name="submit" value="Login">Log In</button>
    </form>
    
    <a href="../forgot_password/employee_number_Forgot_Pass.php"> <button class="forgot" type="forgot">Forgot Password</button></a>

</div>
</body>
</html>