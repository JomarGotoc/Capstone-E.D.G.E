<?php
    // Assuming you have a database connection
    include("../database.php");

    $id = $_GET["id"];

    // Retrieve user information from the database based on ID
    $sql_select_user = "SELECT * FROM executive_committee WHERE id=$id";
    $result_user = $conn->query($sql_select_user);

    if ($result_user->num_rows > 0) {
        $row_user = $result_user->fetch_assoc();
        $fullname = $row_user["fullname"];
        $email = $row_user["email"];
        $employment_number = $row_user["employment_number"];
        $date = $row_user["date"];
    } else {
        echo "User not found";
        $conn->close();
        exit();
    }

    // Check if form is submitted for updating
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
        $new_full_name = $_POST["fullname"];
        $new_email = $_POST["email"];
        $new_employment_number = $_POST["employment_number"];
        $new_date = $_POST["date"];

        // Update user information in the database
        $sql_update = "UPDATE executive_committee SET fullname='$new_full_name', email ='$new_email', employment_number='$new_employment_number', date='$new_date' WHERE id=$id";

        if ($conn->query($sql_update) === TRUE) {
            header("Location: SDO_manageaccount2.php");
        } else {
            $error_message = "Error updating record: " . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
?>
<?php
    include('../database.php');
    if(isset($_GET['employment_number'])) {
        $employment_number = $_GET['employment_number'];
        $sql = "SELECT fullname FROM sdo_admin WHERE employment_number = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $employment_number);
        $stmt->execute();
        $stmt->bind_result($sdoname);
        if($stmt->fetch()) {
        }
        $stmt->close();
    } 
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>SDO Administrator</title>
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

            .logo {
            width: 75px;
            height: 75px;
            margin: 0 auto 20px;
            background-image: url('../img/logo.png'); 
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

        .header-content {
            display: flex;
            align-items: center;
            justify-content: start;
            width: 94%;
        }

        .vertical-line {
            margin-right: 10px;
            height: 40px;
            width: 1px;
            background-color: #130550;
            margin-left: auto;
        }

        .name {
            margin-right: 0;
            margin-left: auto;
            color: #fff;
            font-size: .8rem;
            cursor: pointer;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
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
            white-space: nowrap;
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


            .navbar {
            background-color: #190572;;
            opacity: 80%;
            display: flex;
            justify-content: center;
            height: 50px;
            width: 100%;
            position: fixed;
            top: 75px; 
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
            input[type="email"],
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

            .dropdown-content {
            display: none;
            position: absolute;
            background-color: #130550;
            min-width: 100px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            right: 0; 
            top: 100%;
            border-bottom-left-radius: 7px;
            border-bottom-right-radius: 7px;
        }

        .dropdown {
            position: relative; 
        }

        .dropdown-content a {
            color: rgb(255, 253, 253);
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: .8rem;
        }

        .dropdown-content a:hover {
            background-color: #F3F3F3;
            color: #190572;
            opacity: 80%;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        input[type="email"]{
            background-color:azure;
        }

        @media screen and (max-width: 800px) {
            header{
                height: 40px;
            }
            h4 {
                font-size: 0.6rem; 
            }

            h2{
                font-size: 1.2rem;
            }

            .logs {
                width: 2rem;
                height: 2rem;
            }

            .vertical-line{
                height: 30px;
            }

            .logout-icon {
                font-size: 1rem;
            }

            .dropdown-content a{
                font-size: .6rem;
                padding: 10px 10px;
            }

            .login-container {
                width: 90%; 
            }

            .login-container .forgot,
            .login-form button{
                width: 97%;
            }

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
                <div class='name' onclick="toggleDropdown()"><?php echo $sdoname ?></div>
                    <div class="dropdown-content" id="dropdownContent">
                        <a href="#">Log Out</a>
                        <a href="sdo_change_password.php?employment_number=<?php echo isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value'; ?>" style="border-top: 1px solid #ddd;">>Change Password</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

 
    <div class="login-container">
        <a href="SDO_manageaccount2.php?employment_number=<?php echo isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value'; ?>" class="back-icon"><i class='bx bxs-chevron-left'></i></a>
        <div class="logo"></div>
        <h2>Executive Committee</h2>

        <form class="login-form" action="" method="post">
            <div class="row">
                <div class="columns">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="full-name" name="fullname" value="<?php echo $fullname; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="idnum">Employee Number</label>
                        <input type="text" id="idnum" name="employment_number" value="<?php echo $employment_number; ?>" readonly>
                    </div>
                </div>

                <div class="columns">
                    <div class="form-group">
                        <label for="pass">Email</label>
                        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="date-added">Date Added</label>
                        <input type="date" id="date-added" name="date" value="<?php echo $date; ?>" readonly>
                    </div>
                </div>
            </div>
            <button type="submit" name="update" id="add-btn">Save Changes</button>
        </form>
    </div>

    <script src="SDO_manage_account.js"></script>

</body>
</html>
