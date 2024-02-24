<?php 
include "../database2.php";
$sql = "SELECT * FROM grade_three_section_3";
$result = $conn->query($sql);

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `grade_three_section_3` WHERE `id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        header("Location: ".$_SERVER['PHP_SELF']);

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

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
        
        .logo {
            width: 70px;
            height: 70px;
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

        .main-container {
            width: 100%;
            height: calc(90vh - 140px);
            margin: 20px;
            margin-top: 125px;
            bottom: 0;
            background-color: #E2DFEE;
            opacity: 80%;
            overflow: auto;
            padding: 20px;
            border-radius: 20px;
        }

        .inner-container {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .top-inner-container{
            height: 20px;
            background-color: #190572;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            border-top-right-radius: 10px;
            border-top-left-radius: 10px;
        }

        .middle-inner-container {
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40px;
            color: #190572;
        }
        
        .middle-inner-container h3 {
            color: #190572;
            font-size: 2rem;
            font-weight: bold;
    
        }
        
        .bottom-inner-container {
            height: 20px;
            background-color: #190572;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .bottom-inner-container2 {
            margin-top: 20px;
            background-color: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            height: fit-content;
            color: #190572;
            border-radius: 10px;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }
    
        ::-webkit-scrollbar-thumb {
            background-color: #190572;
            border-radius: 20px;
        }
    
        ::-webkit-scrollbar-track {
            background-color: #E2DFEE;
            border-radius: 20px;
        }

        .plus-container {
            position: fixed;
            bottom: 20px; 
            right: 20px; 
            z-index: 9999; 
        }

        .circle {
            width: 50px; 
            height: 50px; 
            background-color: rgba(34, 6, 160, 0.48); 
            border-radius: 50%; 
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); 
            margin-right: 30px;
            margin-bottom: 50px;
        }

        .circle i {
            font-size: 24px; 
            font-weight: bolder;
            color: #2206A0; 
        }

        .popup-container {
            display: none;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 100;
        }

        .popup {
            background-color: #FFEEEE;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 5px #F6B6B6;
            position: relative;
            max-width: 80%;
            color: #2206A0;
            text-align: center;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 24px;
        }

        .row {
            display: flex;
            margin-bottom: 10px;
        }

        .columns {
            flex: 1;
            padding: 10px;
        }

        .columns:nth-child(1) {
            flex: 2; 
        }

        .columns:nth-child(2) {
            flex: 2 
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
        }

        label {
            font-weight: bold;
            color: #0C052F;
            text-align: left;
            margin-bottom: 5px;
        }

        textarea,
        input[type="text"],
        select, #date-added {
            height: 40px;
            padding: 10px;
            border: 1px solid #FFEEEE;
            border-radius: 5px;
            background-color: #DDDAE7;
            color: #0C052F;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        #add-student-btn {
            background-color: #0C052F;
            color: #FFFFFF;
            border: none;
            padding: 10px 0;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            font-size: 20px;
            width: 100%;
            max-width: 100%;
        }
        
        .table {
            border-collapse: collapse;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .table th,
        .table td {
            text-align: center;
        }

        .table th .box,
        .table td {
            padding: 10px;
            text-align: center;
        }

        .box {
            padding: 10px;
            border: 1px solid #fff; 
            border-radius: 5px;
            background-color: #190572; 
            color: #fff;
            text-align: center;
        }
        

        .cons {
            padding: 10px;
            text-align: center;
            border: 1px solid #000;
            width: 25%;
            color: #000;
        }

        .shesh td {
            border: none;
        }

        .table tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .table td {
            padding: 10px;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .edit-button,
        .delete-button {
            color: #fff;
            border: none;
            padding: 5px 10px;
            margin: 5px;
            border-radius: 5px;
            cursor: pointer;
            width: 5rem;
        }

        .edit-button{
            background-color: #008705;
        }

        .delete-button{
            background-color: #771F1F;
        }

        .edit-button:hover,
        .delete-button:hover{
            background-color: #190572;
            color:#E2DFEE;
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
                <img src="../../img/logo.png" class="logs">
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

    <div class="main-container">
        <div class="inner-container">
            <div class="top-inner-container"></div>
            <div class="middle-inner-container"><h3>Grade <span>3</span></h3></div>
            <div class="bottom-inner-container"></div>

            <div class="bottom-inner-container2">

                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                <div class="box">LRN</div>
                            </th>
                            <th>
                                <div class="box">Full Name</div>
                            </th>
                            <th>
                                <div class="box">Section</div>
                            </th>
                            <th>
                                <div class="box">Contact Number</div>
                            </th>
                            <th>
                                <div class="box">Action</div>
                            </th>
                        </tr>
                    </thead>

                    <tbody>

                            <?php

                                if ($result->num_rows > 0) {

                                    while ($row = $result->fetch_assoc()) {

                            ?>

                        <tr>

                            <td><?php echo $row['lrn']; ?></td>
            
                            <td><?php echo $row['fullname']; ?></td>
            
                            <td><?php echo $row['section']; ?></td>
            
                            <td><?php echo $row['phone']; ?></td>
            
                            <td>
                                <div class="button-container">
                                    <a href="../student_edit.php?id=<?php echo $row['id']; ?>"><button class="edit-button">Edit</button></a>
                                    <a href="../view_studentlist/view_studentlist_one_two.php?id=<?php echo $row['id']; ?>"><button class="delete-button">Delete</button></a>
                                </div>
                            </tr>   
                                <?php       }

                                        }

                                    ?>         
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="plus-container">
        <div class="circle">
            <i class='bx bx-plus'></i>
        </div>
    </div>
    <div class="popup-container" id="popup">
        <div class="popup">
            <span class="close" id="close-popup">×</span>
            <form action="" id="student-form" method="post">
    
               
                <div class="form-group">
                    <label for="student-name">Full Name</label>
                    <input type="text" id="first-name" name="name" required>
                </div>
    
                
                <div class="row">
                    <div class="columns">
                        <div class="form-group">
                            <label for="student-id">LRN</label>
                            <input type="text" id="student-id" name="idnum" required>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="form-group">
                            <label for="number">Contact Number</label>
                            <input type="text" id="number" name="number" required>
                        </div>
                    </div>
                </div>
    
                
                <div class="row">
                    <div class="columns">
                        <div class="form-group">
                            <label for="date-added">Date Added</label>
                            <input type="date" id="date-added" name="date" required>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="form-group">
                            <label for="section">Section</label>
                            <select id="section" name="section" required>
                                <option value="Section 1">Section 1</option>
                                <option value="Section 2">Section 2</option>
                                <option value="Section 3">Section 3</option>
                                <option value="Section 4">Section 4</option>
                                <option value="Section 5">Section 5</option>
                                <option value="Section 6">Section 6</option>
                            </select>
                        </div>
                    </div>
                </div>
    
               
                <div class="button-container">
                    <button name="submit" id="add-student-btn">Add Student</button>
                </div>
    
            </form>
        </div>

        <script src="view_studentlist2.js"></script>

    
</body>
</html>
