<?php
// enter_email_login.php

// Database connection (replace with your database credentials)
include('../database.php');
$employmentNumber = ''; // Initialize employment number variable
$tableName = ''; // Initialize table name variable

// Check if the employment number and table name are provided in the URL
if (isset($_GET['employment_number'], $_GET['table'])) {
    $employmentNumber = $_GET['employment_number'];
    $tableName = $_GET['table'];
} else {
    // If not provided, redirect back to login.php
    header("Location: login.php");
    exit();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input
    $email = $_POST['email'];

    // Update the email and verified fields in the corresponding table
    $query = "UPDATE $tableName SET email = '$email', verified = 'yes' WHERE employment_number = '$employmentNumber'";

    if ($conn->query($query) === TRUE) {
        echo "Email updated successfully! User verified.";

        // Additional logic to check grade and section
        if ($tableName === 'adviser') {
            $selectQuery = "SELECT grade, section FROM $tableName WHERE employment_number = '$employmentNumber'";
            $result = $conn->query($selectQuery);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $grade = $row['grade'];
                $section = $row['section'];

                // Redirect to the corresponding grade and section page
                header("Location: ../adviser_dashboard/grade_" . $grade . "_section_" . $section . ".php");
                exit();
            } else {
                echo "Error fetching grade and section: " . $conn->error;
            }
        } elseif ($tableName === 'counselor') {
            // Redirect to counselor.php
            header("Location: counselor.php");
            exit();
        } elseif ($tableName === 'executive_committee') {
            // Redirect to executive_committee.php
            header("Location: ../monitoring_tracking/executive_monitoring_reports.php");
            exit();
        } elseif ($tableName === 'principal') {
            // Redirect to principal.php
            header("Location: ../school_admin_manage_account/Principal_Account.php");
            exit();
        } elseif ($tableName === 'school_admin') {
            // Redirect to school_admin.php
            header("Location: ../button_options/school_admin.php");
            exit();
        } elseif ($tableName === 'sdo_admin') {
            // Redirect to sdo_admin.php
            header("Location: sdo_admin.php");
            exit();
        } 
    }
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
    <title>Email</title>
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

          .alert1-success{
                color: red;
                font-weight: bold;
            }
          .login-container {
            background-color: #190572;
            opacity: 1;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
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
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
          }

          .login-form button {
            background-color: #0C052F;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
          }

          .login-form button:hover {
            background-color: #DDDAE7;
            color: #0C052F;
          }

          h2 {
            font-family: 'Goblin One', cursive;
            color: #fff;

          }

          .login-container {
            background-color: rgba(25, 5, 114, 0.80); 
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: left;
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

          .logs{
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

            .fpassword {
            background-color: #0C052F;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 10px;
            }

            .fpassword:hover {
                  background-color: #DDDAE7;
                  color: #0C052F;
            }
            .fpassword, .log {
        width: 10rem;
      }
      .ngi{
        color: #fff;
        font-size: 15px;
        text-align: left;
      }

      .login-form button[type="submit"]{
            background-color: #0C052F;
            width: 18.5rem;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 7px 30px;
            cursor: pointer;
            margin-top: 5px; 
        }

        .login-form button[type="submit"]:hover {
            background-color: #DDDAE7;
            color: #0C052F;
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
    <a href="../login/Login.php" class="back-icon"><i class='bx bxs-chevron-left'></i></a>
        <div class="logo"></div>
        <h2>Enter Your Email</h2>
        <p class="ngi">To ensure a seamless experience, please provide your email address below to access your account and unlock the full potential of E.D.G.E.</p>

          
        <form class="login-form" action="" method="post">
            <input type="text" name="employment_number" value="<?php echo $employmentNumber; ?>" readonly>
            <input type="text" id="email" name="email"  placeholder="enter your email " required>
            <button type="submit" name="" value="continue" class="log">Continue</button>
        </form>
    </div>
</body>
</html>