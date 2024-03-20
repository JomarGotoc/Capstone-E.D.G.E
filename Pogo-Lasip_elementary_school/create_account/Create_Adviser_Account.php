<?php
include("../../database.php");
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
    $grade = $_POST['grade'];
    $section = $_POST['section'];

    $check_fullname_query = "SELECT * FROM adviser WHERE fullname='$fullname'";
    $check_fullname_result = $conn->query($check_fullname_query);

    $check_employment_number_query = "SELECT * FROM adviser WHERE employment_number='$employment_number'";
    $check_employment_number_result = $conn->query($check_employment_number_query);


    if ($check_fullname_result->num_rows > 0) {
        $errorMsg1 = "Account with the provided Full Name already exists.";
    } elseif ($check_employment_number_result->num_rows > 0) {
        $errorMsg1 = "Account with the provided Employment Number already exists.";
    }else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $verified = "no";
        $school = "Pogo-Lasip Elementary School"; 

        $insert_query = "INSERT INTO adviser (fullname, employment_number, password, date, grade, section, verified, school) 
                 VALUES ('$fullname', '$employment_number', '$hashed_password', '$date', '$grade', '$section', '$verified', '$school')";
        if ($conn->query($insert_query) === TRUE) {
            $errorMsg = "Account created successfully";

            for ($quarter = 1; $quarter <= 4; $quarter++) {
                $template_number = ($quarter == 1) ? "" : $quarter;
                $adviser_file_content = file_get_contents("../adviser_dashboard/template{$template_number}.php");
                $adviser_file_content = str_replace("{grade}", $grade, $adviser_file_content);
                $adviser_file_content = str_replace("{section}", $section, $adviser_file_content);
                $adviser_file_name = "../adviser_dashboard/grade_{$grade}_section_{$section}_q{$quarter}.php";

                if (file_put_contents($adviser_file_name, $adviser_file_content) !== false) {
                } else {
                }
            }

            $add_student_file_content = file_get_contents("../add_student_form/template.php");
            $add_student_file_content = str_replace("{grade}", $grade, $add_student_file_content);
            $add_student_file_content = str_replace("{section}", $section, $add_student_file_content);
            $add_student_file_name = "../add_student_form/grade_{$grade}_section_{$section}.php";

            if (file_put_contents($add_student_file_name, $add_student_file_content) !== false) {
            } else {
            }
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    }
}

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
            .alert1-success{
                color: red;
                font-weight: bold;
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
            .alert-success {
                color: green;
                font-weight: bold;
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
    <a href="../school_admin_manage_account/Adviser_Account.php" class="back-icon"><i class='bx bxs-chevron-left'></i></a>
        <div class="logo"></div>
        <h2>Adviser</h2>

        <div class="error-message">
            <?php echo $errorMsg; ?>
        </div>
        <div class="error-message1">
            <?php echo $errorMsg1; ?>
        </div>


        <form class="login-form" action="Create_adviser_Account.php" method="post">
            <div class="row">
                <div class="columns">
                    <div class="form-group">
                        <label for="name">First Name</label>
                        <input type="text" id="full-name" name="firstname" required>
                    </div>
                    <div class="form-group">
                        <label for="idnum">Middle Name</label>
                        <input type="text" id="idnum" name="middlename" required>
                    </div>
                    <div class="form-group">
                        <label for="pass">Last Name</label>
                        <input type="text" id="pass" name="lastname" required>
                    </div>
                    <div class="form-group">
                        <label for="date-added">Extension Name </label>
                        <input type="text"  name="extension">
                    </div>
                </div>

                <div class="columns">
                <div class="form-group">
                        <label for="date-added">Date Added</label>
                        <input type="date" id="date-added" name="date" required >
                    </div>
                    <div class="form-group">
                        <label for="topdown">Employee Number</label>
                        <input type="number"  name="employment_number" required>
                    </div>
                    <div class="form-group">
                        <label for="topdown">Grade</label>
                        <select id="topdown" name="grade" >
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
                        <label for="pass">Section</label>
                        <input type="text" id="section" name="section" >
                    </div>
            </div>
            </div>
            <button type="submit" name="submit" id="add-btn">Create Account</button>
        </form>
    </div>

    <script src="create_account.js"></script>

</body>
</html>

