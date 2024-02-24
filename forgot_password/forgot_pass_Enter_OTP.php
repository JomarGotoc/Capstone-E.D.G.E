<?php
require '../vendor/autoload.php'; // Include PHPMailer

// Database connection
include("../database.php");

// Function to verify OTP
function verifyOTP($conn, $otp) {
    $tables = ['adviser', 'principal', 'counselor', 'school_admin', 'sdo_admin', 'executive_committee'];

    foreach ($tables as $table) {
        $query = "SELECT * FROM $table WHERE otp = '$otp'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            return true;
        }
    }

    return false; // OTP is not valid
}

// Process user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $otp = $_POST["otp"];

    if (verifyOTP($conn, $otp)) {
        header("Location: ../Reset_Password/Forgot_pass_Reset_Pass.php");
    } else {
        echo "Invalid OTP. Please try again.";
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Forgot Password</title>
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
        
        input[type="text"],
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
        p {
            color: #fff;
        }
        
        .login-container {
          background-color: rgba(25, 5, 114, 0.80); 
          border-radius: 10px;
          box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
          padding: 20px;
          width: 300px;
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

      .cont {
            background-color: #0C052F;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 10px;
      }

      .cont:hover {
            background-color: #DDDAE7;
            color: #0C052F;
      }
      .otp-box {
            display: flex;
            justify-content: space-between;
        }

        .digit-input {
            width: 40px;
            height: 40px;
            text-align: center;
            font-size: 18px;
            border: 1px solid #000000;
            margin: 0 5px;
        }

        button[type="submit"]{
            background-color: #0C052F;
            width: 18.5rem;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 7px 30px;
            cursor: pointer;
            margin-top: 5px; 
        }

        button[type="submit"]:hover {
            background-color: #DDDAE7;
            color: #0C052F;
        }

        .shesh{
          text-align: center;
        }

        p{
          text-align: left;
          font-size: smaller;
        }
    </style>
</head>
<body>

  <header>
    <img src="../img/logo.png" class="logs">
    <div class="container">
        <h4>E.D.G.E | P.A.R Early Detection and Guidance for Education</h4>
    </div>
  </header>
  
  <form action="Forgot_pass_enter_otp.php" method="post">
    <div class="login-container">
    <a href="../forgot_password/Email_Forgot_Pass.php" class="back-icon"><i class='bx bxs-chevron-left'></i></a>
        <div class="logo"></div>
        <p>Enter the code that was sent to your email address to reset your password.</p>

          <input type="text" id="otp" name="otp"  placeholder="enter your otp " required >
            <button type="submit" name="verify_otp" class="cont">Continue</button>
            <p style="cursor:pointer" class="shesh">Didn't recieve a mail? Resend Mail</p>
        
        
    </div>
    </form>
</body>
</html>
