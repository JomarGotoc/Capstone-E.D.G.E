<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Principal</title>
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
        
        h2 p{
            margin-top: 5px;
            font-size: 18px;
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
            align-items: center;
            height: 50px;
            width: 100%;
            position: fixed;
            top: 57px; 
        }

        .back-icon {
            margin-right: auto;
            font-size: 3rem;
        }
        
        .navbar a {
            display: inline-block;
            padding: 14px 20px;
            text-decoration: none;
            color: #FFFFFF;
            opacity: 100%;
        }
        
        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar {
            background-color: #190572;
            opacity: 80%;
            display: flex;
            justify-content: space-between; 
            align-items: center;
            height: 50px;
            width: 100%;
            position: fixed;
            top: 57px;
        }

        .back-icon {
            font-size: 3rem;
        }

        .navbar a {
            display: inline-block;
            text-decoration: none;
            color: #FFFFFF;
            opacity: 100%;
        }

        nav {
            flex: 1; 
            text-align: center;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        .back-icon:hover::after {
            content: "Back";
            position: absolute;
            left: 30px;
            top: 80%;
            transform: translateY(-50%);
            color: #fff;
            font-size: 14px;
        }

        h3{
        color: #fff;
        }
        
        .buttons {
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 10px;
        }
        
        a .button {
        background-color: #0C052F;
        color: #fff;
        padding: 10px 20px;
        margin: 0 10px;
        border: 1px solid #fff;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        width: 90%;
        }
        
        .button:hover {
        background-color: #ddd;
        border: 1px solid #0C052F;
        color: #190572;
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

        .shesh {
            background-color: transparent;
            border-radius: 3px;
            border: 1px solid #919097;
            background: rgba(251, 251, 251, 0.25);
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset, 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            padding: 10px;
            padding-top: 15px;
            margin-bottom: 20px;  
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .column {
            flex: 0 0 calc(16.6667%);
            margin-bottom: 5px;
        }

        .column-right {
            flex: 0 0 calc(30%);
            margin-right: auto; 
        }

        .column-left {
            flex: 0 0 calc(15%);
            margin-left: 0;
            margin-right: auto; 
        }

        .row .column:not(:last-child),
        .wide-row .column:not(:last-child) {
            margin-right: 0;
        }

        .row:first-child .column:last-child{
            margin-left: auto;
        }

        .containers {
            background-color: #3498db;
            padding: .5px;
        }

        .select-wrapper {
            background: #FBFBFB;
            color: #190572;
        }

        #topdown {
            padding: 2px;
            width: 100%;
            background: #FBFBFB;
            color: #190572;
            text-align: center;
            border: 1px solid #190572;
            border-radius: 5px;
        }

        .second{
            border-radius: 3px;
            background-color: #2206A0;
            text-align: center;
            font-family: "Darker Grotesque";
        }

        .second h3{
            color: #FFF;
            letter-spacing: 3px;
        }

        h3 {
            color: #190572;
            margin-left: 10px;
            margin: 0;
        }

        table{
            width:100%; 
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table-header th {
            background-color: #190572;
            color: #fff;
            font-size: 15px;
            padding: 5px;
        }

        tr:nth-child(even){
            background-color: rgb(242, 242, 244);
        }

        tr:nth-child(odd){
            background-color: #b7b7b7;
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
            <a href="Principal_tracking_reports.php">Quarterly Reports</a>
            <a href="Principal_monitoring_reports.php" style="background:#F3F3F3; color:#130550">Report Summary</a>
        </nav>
    </div>

    
    <div class="main-container">
        <div class="row">
            <div class="column">
                <div class="select-wrapper">
                    <select id="topdown" name="school-year" class="containers first">
                        <option value="school-year">S.Y. 2023 - 2024</option>
                    </select>
                </div>
        </div>
            <div class="column column-left">
                <div class="containers second">
                    <h3><i class='bx bx-printer' ></i>Print Reports</h3>
                </div>
            </div>
            <div class="column full-width">
                <div class="column third-column">
                    <div class="search-box">
                    </div>
                </div>
            </div>
        </div>

        <section class="shesh">
        <div class="row">
            <div class="column" >
                <div class="containers" style="background-color: #B7B7B7">
                    <h3>Division</h3>
                </div>
            </div>
            <div class="column column-right">
                <div class="containers" style="background-color: #F3F3F3;">
                    <h3>Dagupan City Division Elementary Schools</h3>
                </div>
            </div>
            <div class="column">
                <div>
                </div>
            </div>
        </div>

        
      <!--  <div class="row">
            <div class="column">
                <div class="containers" style="background-color: #B7B7B7;">
                    <h3>Quarter</h3>
                </div>
            </div>
            <div class="column column-right">
                <div class="containers" style="background-color: #F3F3F3;">
                    <h3>I</h3>
                </div>
            </div>
        </div> -->

        <table border="0">
            <thead class="table-header">
                <tr>
                    <th style="width:10%">P.A.R. Identification</th>
                    <th style="width:9%">Q1</th>
                    <th style="width:9%">Resolved</th>
                    <th style="width:9%">Q2</th>
                    <th style="width:9%">Resolved</th>
                    <th style="width:9%">Q3</th>
                    <th style="width:9%">Resolved</th>
                    <th style="width:9%">Q4</th>
                    <th style="width:9%">Resolved</th>
                    <th style="width:9%">Total P.A.R.s</th>
                    <th style="width:9%">Total Resolved</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <tr>
                        <th style="width:10%">Academic - Literacy in English</th>
                        <th style="width:9%">435</th>
                        <th style="width:9%">57</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                    </tr>
                    <tr>
                        <th style="width:10%">Academic - Literacy in Filipino</th>
                        <th style="width:9%">435</th>
                        <th style="width:9%">57</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                    </tr>
                    <tr>
                        <th style="width:10%">Academic - Numeracy</th>
                        <th style="width:9%">435</th>
                        <th style="width:9%">57</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                    </tr>
                    <tr>
                        <th style="width:10%">Behavioral</th>
                        <th style="width:9%">435</th>
                        <th style="width:9%">57</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                        <th style="width:9%">452</th>
                    </tr>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="shesh">
        <div class="row">
            <div class="column" >
                <div class="containers" style="background-color: #B7B7B7">
                    <h3>No. of P.A.Rs</h3>
                </div>
            </div>
            <div class="column column-right">
                <div class="containers" style="background-color: #F3F3F3;">
                    <h3>Highest to Lowest</h3>
                </div>
            </div>
            <div class="column">
                <div>
                </div>
            </div>
        </div>

        
        <div class="row">
            <div class="column">
                <div class="containers" style="background-color: #B7B7B7;">
                    <h3>Quarter</h3>
                </div>
            </div>
            <div class="column column-right">
                <div class="containers" style="background-color: #F3F3F3;">
                    <select class="containers"style="border:none; background-color: #F3F3F3;">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </div>
        </div>

        <table border="0">
            <thead class="table-header">
                <tr>
                    <th style="width:40%">Grade Level</th>
                    <th style="width:15%">Academic - Literacy in English</th>
                    <th style="width:15%">Academic - Literacy in Filipino</th>
                    <th style="width:15%">Academic - Numeracy</th>
                    <th style="width:15%">Behavioral</th>
                    <th style="width:15%">Total P.A.R.s</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <tr>
                        <th style="width:40%">Grade 1</th>
                        <th style="width:15%">435</th>
                        <th style="width:15%">57</th>
                        <th style="width:15%">452</th>
                        <th style="width:15%">452</th>
                        <th style="width:15%">452</th>
                    </tr>
                    <tr>
                        <th style="width:40%">Grade 1</th>
                        <th style="width:15%">435</th>
                        <th style="width:15%">57</th>
                        <th style="width:15%">452</th>
                        <th style="width:15%">452</th>
                        <th style="width:15%">452</th>
                    </tr>
                    <tr>
                        <th style="width:40%">Grade 1</th>
                        <th style="width:15%">435</th>
                        <th style="width:15%">57</th>
                        <th style="width:15%">452</th>
                        <th style="width:15%">452</th>
                        <th style="width:15%">452</th>
                    </tr>
                    <tr>
                        <th style="width:40%">Grade 1</th>
                        <th style="width:15%">435</th>
                        <th style="width:15%">57</th>
                        <th style="width:15%">452</th>
                        <th style="width:15%">452</th>
                        <th style="width:15%">452</th>
                    </tr>
                    <tr>
                        <th style="width:40%">Grade 1</th>
                        <th style="width:15%">435</th>
                        <th style="width:15%">57</th>
                        <th style="width:15%">452</th>
                        <th style="width:15%">452</th>
                        <th style="width:15%">452</th>
                    </tr>
                </tr>
            </tbody>
        </table>
    </section>
    </div>

    <script src="monitoring_tracking.js"></script>
</body>
</html>
