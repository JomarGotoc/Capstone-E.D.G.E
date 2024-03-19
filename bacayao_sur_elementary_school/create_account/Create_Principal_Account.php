<?php
include ("../../database.php");
$errorMsg = "";
$errorMsg1 = "";
if (isset($_POST['submit'])) {
    $employment_number = $_POST['employment_number'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $extension = $_POST['extension'];
    $fullname = $firstname . ' ' . $middlename . ' '. $lastname.' ' . $extension;
    $firstThreeLetters = substr($firstname, 0, 3);
    $firstTwoLettersLastName = substr($lastname, 0, 2);
    $firstTwoNumbersEmploymentNumber = substr($employment_number, 0, 2);
    $password = $firstThreeLetters . $firstTwoLettersLastName . $firstTwoNumbersEmploymentNumber;
    $date = $_POST['date'];
    

    // Check if the fullname already exists
    $check_fullname_query = "SELECT * FROM principal WHERE fullname='$fullname'";
    $check_fullname_result = $conn->query($check_fullname_query);

    // Check if the employment_number already exists
    $check_employment_number_query = "SELECT * FROM principal WHERE employment_number='$employment_number'";
    $check_employment_number_result = $conn->query($check_employment_number_query);

    if ($check_fullname_result->num_rows > 0) {
        $errorMsg1 = "Account with the provided Full Name already exists.";
    } elseif ($check_employment_number_result->num_rows > 0) {
        $errorMsg1 = "Account with the provided Employment Number already exists.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $verified = "no";
        $school = "Bacayao Sur Elementary School"; 
        $insert_query = "INSERT INTO principal (fullname, employment_number, password, date, verified, school) 
                 VALUES ('$fullname', '$employment_number', '$hashed_password', '$date','$verified', '$school')";
        if ($conn->query($insert_query) === TRUE) {
            $errorMsg = "Account created successfully";
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
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
        
        .logo {
            width: 75px;
            height: 75px;
            margin: 0 auto 20px;
            background-image: url('../../img/logo.png'); 
            background-size: cover;
        }
        
        h2 {
            font-family: 'Darker Grotesque', sans-serif;
            color: #fff;
        
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
        
        .login-container {
            margin-top: 50px;
            background-color: rgba(25, 5, 114, 0.80); 
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 450px;
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
            color: #FFFFFF;
            opacity: 100%;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        h3{
        color: #fff;
        }
        
        button {
        margin-top: 10px;
        background-color: #0C052F;
        color: white;
        border: 1px solid #fff;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
        width: 97.5%;
        }

        button:hover {
            background-color: #ddd;
            border: 1px solid #0C052F;
            color: #190572;
        }

        .row {
        display: flex;
        }

        .columns {
        flex: 1;
        padding: 10px;
        }

        .columns:nth-child(1) {
        flex: 70;
        }

        .columns:nth-child(2) {
        flex: 50;
        }

        .form-group {
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
        }

        label {
        font-size: 10px;
        color: #FFFFFF; 
        text-align: left;
        }

        textarea,
        input[type="text"],
        input[type="number"],
        input[type="password"],
        select, #date-added {
        height: 20x;
        padding: 10px;
        border: 1px solid #0C052F; 
        border-radius: 5px;
        background-color: #DDDAE7;
        color: #0C052F; 
        }

        .button-container {
        display: flex;
        justify-content: center; 
        margin-top: 20px; 
        }

        #add-btn {
        background-color: #0C052F;
        color: #fff;
        padding: 10px 20px;
        margin: 0 10px;
        border: 1px solid #fff;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        }

        #add-btn:hover {
        background-color: #ddd;
        border: 1px solid #0C052F;
        color: #190572;
        }

        .addpopup {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        z-index: 1000;
        }

        #myPopup {
        display: none;
        }

        .popup-content {
        background-color: #FFEEEE;
        padding: 20px;
        border-radius: 5px;
        text-align: center;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        width: 20%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        }

        .popup-header img {
        max-width: 100px;
        }

        .popup-header h2 {
        margin-top: 10px;
        color: #0C052F;
        font-weight: bold;
        }

        .popup-footer button {
        background-color: #0C052F;
        color: white;
        border: 1px solid #fff;
        font-weight: bold;
        font-size: 16px;
        border: none;
        margin-top: 20px;
        padding: 10px 20px;
        border-radius: 20px;
        width: 100%;
        max-width: 100%;
        cursor: pointer;
        }

        .popup-footer button:hover {
        background-color: #ddd;
        border: 1px solid #0C052F;
        color: #190572;
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
          .error-message1{
            color: red;
            font-weight:bold ;
          }
          .error-message{
            color: green;
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
    <a href="../school_admin_manage_account/Principal_Account.php" class="back-icon"><i class='bx bxs-chevron-left'></i></a>
        <div class="logo"></div>
        <h2>Principal</h2>

        <div class="error-message">
            <?php echo $errorMsg; ?>
        </div>
        <div class="error-message1">
            <?php echo $errorMsg1; ?>
        </div>

        <form class="login-form" action=" " method="post">
        <div class="row">
                <div class="columns">
                <div class="form-group">
                        <label for="name">First Name</label>
                        <input type="text" id="full-name" name="firstname" required>
                    </div>
                    <div class="form-group">
                        <label for="idnum">Last Name</label>
                        <input type="text" id="idnum" name="lastname" required>
                    </div>
                    <div class="form-group">
                        <label for="topdown">Employee Number</label>
                        <input type="number"  name="employment_number" required>     
                    </div>
                </div>

                <div class="columns">
                    <div class="form-group">
                        <label for="date-added">Middle Name</label>
                        <input type="text" id="middle-name" name="middlename" required>
                    </div>
                    <div class="form-group">
                        <label for="topdown">Extension Name</label>
                        <input type="text"  name="extension">     
                    </div>
                    <div class="form-group">
                        <label for="date-added">Date Added</label>
                        <input type="date" id="date-added" name="date" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Create Account</button>
            </div>
        </form>
    </div>

    <script src="create_account.js"></script>

</body>
</html>
