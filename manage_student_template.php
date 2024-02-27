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
            background-color:#F3F3F3;
            color:#190572;
        }

        h3{
        color: #fff;
        }

        ::-webkit-scrollbar {
            width: 10px;
            visibility: hidden;
        }
    
        ::-webkit-scrollbar-thumb {
            background-color: #190572;
            border-radius: 20px;
            visibility: hidden;
        }
    
        ::-webkit-scrollbar-track {
            background-color: #E2DFEE;
            border-radius: 20px;
            visibility: hidden;
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

        .main-container {
            width: 100%;
            display: flex;
            height: calc(100vh - 140px);
            margin-top: 115px;
            margin-bottom: 50;
            background-color: #E2DFEE;
            overflow: auto;
        }

        .navbar-container {
            height: 100%;
            width: 15%; 
            border-right: 1px solid #ddd; 
            padding-right: 10px; 
            background-color: #190572; 
            color: #fff; 
            padding: 5px;
        }

        .navbar-content {
            height: 100%;
            overflow-y: auto; 
            padding-right: 5px; 
    
        }

        .navbar-item {
            padding: 10px 0; 
            margin-bottom: 10px; 
            padding-left: 10px;
        }

        .navbar-item-text {
            margin-left: 10px;
        }

        .navbar-item a {
            display: block;
            color: inherit;
            text-decoration: none;
            cursor: pointer;
        }

        .navbar-item:hover {
            background-color:#F3F3F3;
            color:#130550;
        }

        .title a{
            font-weight: 600;
        }

        .main-content {
            flex: 1; 
            padding-left: 10px; 
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
            <a href="../school_admin_manage_account/Adviser_Account.php">Manage Accounts</a>
            <a href="" style="background:#F3F3F3; color:#130550">Manage Students List</a>
        </nav>
    </div>

    <div class="main-container">
        <div class="navbar-container">
                <div class="navbar-content">

                    <div class="navbar-item title"><i class='bx bx-book-open' style="margin-right: 10px; font-size: 20px"></i>Kindergarten</div>
                    <div class="navbar-item" style="background:#F3F3F3; color:#130550"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 1</a></div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 2</a></div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 3</a></div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 4</a></div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 5</a></div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 6</a></div>
                    
                    <hr color="#0d054c" size="5" >
                    <div class="navbar-item title"><i class='bx bx-book-open' style="margin-right: 10px; font-size: 20px"></i>Grade 1</div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 1</a></div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 2</a></div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 3</a></div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 4</a></div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 5</a></div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 6</a></div>

                    <hr color="#0d054c" size="5" >
                    <div class="navbar-item title"><i class='bx bx-book-open' style="margin-right: 10px; font-size: 20px"></i>Grade 2</div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 1</a></div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 2</a></div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 3</a></div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 4</a></div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 5</a></div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 6</a></div>

                    <hr color="#0d054c" size="5" >
                    <div class="navbar-item title"><i class='bx bx-book-open' style="margin-right: 10px; font-size: 20px"></i>Grade 3</div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 1</a></div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 2</a></div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 3</a></div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 4</a></div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 5</a></div>
                    <div class="navbar-item"><a href="#"><i class='bx bx-circle' style="margin-right: 10px" ></i>Section 6</a></div>
                    
                </div>
            </div>

        <div class="main-content">
            <div id="section1Content" style="display: none;">
                shesh
            </div>
            <div id="section2Content" style="display: none;">
                jgdasjgjged
            </div>
        </div>
        </div>
    
</body>
</html>
