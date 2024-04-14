
<DOCTYPE html>
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
    <title>SDO Superintendent</title>
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
            background-color: white;
            background-size: cover;
            overflow-y: hidden;
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
            justify-content: start;
            width: 94%;
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
            font-size: 3rem;
        }

        .navbar a {
            display: inline-block;
            padding: 14px 20px;
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
            margin-top: 70px;
            height: 85%;
            background-color: white;
            opacity: 80%;
            overflow: hidden;
            padding: 20px;
        }

        .shesh {
            background-color: transparent;
            border-radius: 5px;
            border: 2px solid #919097;
            background: rgba(251, 251, 251, 0.25);
            box-shadow: 0px 7px 7px 0px rgba(0, 0, 0, 0.25) inset, 0px 7px 7px 0px rgba(0, 0, 0, 0.25);
            padding: 10px;
            padding-top: 15px;
            margin-bottom: 20px;  
        }

        .second-section{
            height: 320px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .wide-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between; 
        }

        .column {
            flex: 0 0 calc(16.6667%);
            margin-bottom: 5px;
        }

        .wide-columns {
            flex: 0 0 calc(30% - 10px);
            margin-bottom: 20px;
            margin-top: 10px;
        }

        .wide-column {
            flex: 0 0 calc(12% - 10px);
            margin-bottom: 20px;
            margin-top: 10px;
        }

        .wide-columns .containers, 
        .wide-column .containers{
            background-color: #919097;
            padding: .5px;
        }

        .column-right {
            white-space: nowrap;
            width: fit-content;
            margin-right: auto; 
            margin-left: 0;
        }

        .column-left {
            white-space: nowrap;
            flex: 0 0 calc(15%);
            margin-left: auto; 
            margin-right: 0;
        }

        .row .column:not(:last-child),
        .wide-row .column:not(:last-child) {
            margin-right: 0;
        }

        .row:first-child .column:last-child{
            margin-left: auto;
        }

        .full-width {
            flex: 0 0 calc(30%);
            margin-right: 0;
        }

        .half-width {
            flex: 0 0 calc(15%);
            margin-right: 0;
            margin-left: 0;
        }

        .containers {
            padding: .5px;
        }

        .first{
            border-radius: 3px;
            border: 1px solid #190572;
            background-color: #130550;
            color: #ddd;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset, 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            flex-shrink: 0;
            text-align: center;
            font-size: 15px;
            padding-left: 50px;
            padding-right: 50px;
        }

        .select-wrapper {
            position: relative;
            background: #FBFBFB;
            color: #190572;
        }

        
        #topdown{
            width: 100%;
            background: #FBFBFB;
            color: #190572;
            text-align: start;
            border: none;
            font-weight: bold;
            font-size: 17px;
            text-align: left;
        }
        #topdown1 {
            padding: 2px;
            width: 100%;
            background: #FBFBFB;
            color: #190572;
            text-align: center;
            border: 1px solid #190572;
            border-radius: 5px;
        }

        #report_type {
            box-shadow: none;
            background: #FBFBFB;
            width: 100%;
            color: #190572;
            padding: 2px;
            text-align: center;
        }

        .second{
            border-radius: 3px;
            text-align: center;
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

        .wide-column h3, 
        .wide-columns h3{
            color: #070000;
            text-align: center;
        }

        .third-column {
            flex: 0 0 calc(30%); 
            margin-right: 0;
            position: relative; 
        }

        .search-box {
            background-color: #F3F3F3;
            border-radius: 5px;
            display: flex;
            align-items: center;
            border: 1px solid #190572;
            padding: 3px;
            width: 400px;
        }

        .search-input {
            border-radius: 5px;
            border: none;
            outline: none;
            width: 100%;
            background-color: #F3F3F3; 
        }

        .search-icon {
            margin-left: auto;
            cursor: pointer;
            color: #190572; 
        }

        table{
            width:100%; 
            border-collapse: collapse
            
        }

        tbody th:first-child{
            text-align: left;
        }

        .school tr:nth-child(odd){
            background-color: #F3F3F3;
        }

        .school tr:nth-child(even){
            background-color: #F3F3F3;
        }

        tr, th{
            border-bottom: 1px solid #0C052F;
        }

        table tr, table th {
            border-bottom: 1px solid #0C052F;
        }

        .table-container {
            overflow-y: hidden; 
            max-height: 400px; 
        }

        .table-container::-webkit-scrollbar {
            display: none;
        }

        table{
            width:100%; 
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table-container {
            overflow-y: hidden; 
        }

        .table-header th {
            background-color: #190572;
            color: #fff;
            font-size: 15px;
            padding: 5px;
        }

        .table-body tr th:first-child{
            text-align: left;
            padding-left: 10px;
        }

        tr:nth-child(even){
            background-color: rgb(242, 242, 244);
        }

        tr:nth-child(odd){
            background-color: #b7b7b7;
        }

        .school:nth-child(even){
            background-color: rgb(242, 242, 244);
        }

        .school:nth-child(odd){
            background-color: rgb(242, 242, 244);
        }

        .school th{
            border-top: 1px solid #0C052F;
            border-bottom: 1px solid #0C052F;
        }

        .pagination {
            position: absolute;
            bottom: 10px;
            right: 20px;
        }

        .pagination button {
            padding: 8px 16px;
            background-color: #0C052F;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 5px;
        }

        .pagination button:hover {
            background-color: #190572;
        }

        thead tr th{
            background-color: #919097;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #130550;
            min-width: 100px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            right: 150px;
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

        @media only screen and (max-width: 800px){
            header{
                height: 40px;
            }
            h4{
                font-size: 0.6rem;
            }
            .logo{
                width: 50px;
                height: 50px;
                margin: 0 auto 10px;
            }
            h2{
                font-size: 0.6rem;
            }
            header {
                padding: .1rem 2%;
            }
            .navbar{
                font-size: 0.6rem;
                margin-top: -14px;
                height: 39px;
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
            .main-container{
                margin: 10px;
                margin-top: 80px;
                height: calc(100vh - 180px);
            }
            .table-header th {
                color: black;
                font-size: 0.6rem;
                padding: 5px;
            }
            tbody{
                font-size: 0.6rem;
            }
            .logs{
                width: 2rem;
                height: 2rem;
            }
            .containers{
                white-space: nowrap;
            }
            #topdown1 {
                padding: 1px;
                width: 150px;
                background-color:#130550;
                color:#ddd;
                text-align: center;
                border: 1px solid #190572;
                border-radius: 5px;
                font-size: 0.6rem;
            }
            .second{
                border-radius: 3px;
                background-color: #2206A0;
                text-align: center;
                width: 160px;
            }
            .second h3{
                color: #FFF;
                letter-spacing: 3px;
                font-size: 0.6rem;
            }
            .column {
                font-size: 0.6rem;
                margin-top: 5px;
            }
            #topdown {
                font-size: 0.6rem;
            }
            .search-box{
                font-size: 0.6rem;
                padding: 0.1px;
            }
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
                <div class='name' onclick="toggleDropdown()">Stephanie Mislang</div>
                    <div class="dropdown-content" id="dropdownContent">
                    <a href="../login/Login.php">Log Out</a>
                    <a href="executive_change_password.php?employment_number=<?php echo isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value'; ?>&filename=<?php echo $filename ?>" style="border-top: 1px solid #ddd;">Change Password</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    
    <div class="main-container">
        
        <div class="row">
            <div class="column">
                <div class="select-wrapper">
                    <select id="topdown1" name="school-year" class="containers first">
                        <option value="school-year">S.Y. 2023 - 2024</option>
                    </select>
                </div>
            </div>
            
            <div class="column">
                <div class="containers second">
                    <div class="search-box">
                        <input type="text" class="search-input" placeholder="Search School" oninput="filterTable()">
                        <i class='bx bx-search search-icon'></i>
                    </div>
                </div>
            </div>
            <div class="column full-width">
                <div class="column third-column">
                    <div class="select-wrapper">
                        <select id="report_type" name="report-type" class="containers first" style="text-align:left">
                            <option value="quarterly">View Quarterly Reports</option>
                            <option value="summary">View Report Summary</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

    <div id="quarterly_reports">
    <div class="row" style="display: none;">
            <div class="column" >
                <div class="containers" style="background-color: #B7B7B7">
                    <h3 style="margin-left: 7px">School Name</h3>
                </div>
            </div>
            <div class="column column-right">
                <div class="containers" style="background-color: #F3F3F3;">
                    <h3 style="margin-left: 7px">Bacayao Sur Elementary School</h3>
                </div>
            </div>
            <div class="column column-left">
                <div class="containers" style="background-color: #B7B7B7;">
                    <h3 style="margin-left: 7px">Total P.A.R.s</h3>
                </div>
            </div>
            <div class="column half-width">
                <div class="containers" style="background-color: #F3F3F3;">
                    <h3 style="margin-left: 7px"><?php echo $totalpars ?></h3>
                </div>
            </div>
        </div>
    <div class="row">
            <div class="column" >
                <div class="containers" style="background-color: #B7B7B7">
                    <h3 style="margin-left: 7px">School Name</h3>
                </div>
            </div>
            <div class="column column-right">
                <div class="containers" style="background-color: #F3F3F3;">
                    <h3 style="margin-left: 7px">Bacayao Sur Elementary School</h3>
                </div>
            </div>
            <div class="column column-left">
                <div class="containers" style="background-color: #B7B7B7;">
                    <h3 style="margin-left: 7px">Total P.A.R.s</h3>
                </div>
            </div>
            <div class="column half-width">
                <div class="containers" style="background-color: #F3F3F3;">
                    <h3 style="margin-left: 7px"><?php echo $totalpars ?></h3>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="column">
                <div class="containers" style="background-color: #B7B7B7;">
                    <h3 style="margin-left: 7px">Quarter</h3>
                </div>
            </div>
            <div class="column column-right">
            <div class="select-wrapper1">
                    <select id="topdown" name="quarter" class="containers second" onchange="redirectToQuarter()">
                        <option value="" disabled selected hidden>Quarter 2</option>
                        <option value="Q1">Quarter 1</option>
                        <option value="Q2">Quarter 2</option>
                        <option value="Q3">Quarter 3</option>
                        <option value="Q4">Quarter 4</option>
                    </select>
                </div>
</div>
            <div class="column column-left">
                <div class="containers" style="background-color: #B7B7B7;">
                    <h3 style="margin-left: 7px">Resolved Cases</h3>
                </div>
            </div>
            <div class="column half-width">
                <div class="containers" style="background-color: #F3F3F3;">
                    <h3 style="margin-left: 7px"><?php echo $totalresolved ?> <span>/<?php echo $totalpars ?></span></h3>
                </div>
            </div>
        </div>
        <table border="0" id="data-table">
            <thead class="table-header">
                <tr>
                    <th style="width:14.5%">Grade and Section</th>
                    <th style="width:14.5%">Section Adviser</th>
                    <th style="width:11.5%"># of Students</th>
                    <th style="width:11.5%"># of P.A.R</th>
                    <th style="width:11.5%">A - Literacy (E)</th>
                    <th style="width:11.5%">A - Literacy (F)</th>
                    <th style="width:11.5%">A - Numeracy</th>
                    <th style="width:11.5%">Behavioral</th>
                    <th style="width:11.5%">Progress%</th>
                    
                </tr>
            </thead>

        <tbody class="school">
            <tr>
                <?php foreach ($resultsArray as $result) { ?>
                    <tr <?php if ($result['percentage'] == 100) echo 'style="background-color: lightblue;"'; ?>>
                        <th style="width:14.5%"><?php echo ucfirst($result['grade']); ?> - <?php echo ucfirst($result['section']); ?></th>
                        <th style="width:14.5%"><?php echo $result['fullname']; ?></th>
                        <th style="width:11.5%"><?php echo $result['totalstud']; ?></th>
                        <th style="width:11.5%"><?php echo $result['totalstudentpar']; ?></th>
                        <th style="width:11.5%"><?php echo $result['english_count_non_distinct']; ?></th>
                        <th style="width:11.5%"><?php echo $result['filipino_count_non_distinct']; ?></th>
                        <th style="width:11.5%"><?php echo $result['numeracy_count_non_distinct']; ?></th>
                        <th style="width:11.5%"><?php echo $result['behavioral_count_non_distinct']; ?></th>
                        <th style="width:11.5%"><?php echo $result['percentage']; ?></th>
                    </tr>
                <?php } ?>
            </tr>
        </table>
        <div class="pagination">
            <button id="prevBtn" onclick="prevPage()">Previous</button>
            <button id="nextBtn" onclick="nextPage()">Next</button>
        </div>
    </div>

    <div style="display: none;" id="report_summary">
    <section class="shesh">
        <div class="row">
            <div class="column" >
                <div class="containers" style="background-color: #B7B7B7; ">
                    <h3 style="margin-left: 7px">Division</h3>
                </div>
            </div>
            <div class="column column-right">
                <div class="containers" style="background-color: #F3F3F3;">
                    <h3 style="margin-left: 7px">Dagupan City Division Elementary Schools</h3>
                </div>
            </div>
            <div class="column">
                <div>
                </div>
            </div>
        </div>

        <table border="0">
            <thead class="table-header">
                <tr>
                    <th style="width:15%">P.A.R. Identification</th>
                    <th style="width:4%">Q1</th>
                    <th style="width:7%">Resolved</th>
                    <th style="width:4%">Q2</th>
                    <th style="width:7%">Resolved</th>
                    <th style="width:4%">Q3</th>
                    <th style="width:7%">Resolved</th>
                    <th style="width:4%">Q4</th>
                    <th style="width:7%">Resolved</th>
                    <th style="width:8%">Total P.A.R.s</th>
                    <th style="width:8%">Total Resolved</th>
                </tr>
            </thead>
            <tbody class="table-body">
                <tr>
                    <tr>
                        <th style="width:15%">Academic - Literacy in English</th>
                        <th style="width:4%"><?php echo $q1english ?></th>
                        <th style="width:7%"><?php echo $q1englishresolved ?></th>
                        <th style="width:4%"><?php echo $q2english ?></th>
                        <th style="width:7%"><?php echo $q2englishresolved ?></th>
                        <th style="width:4%"><?php echo $q3english ?></th>
                        <th style="width:7%"><?php echo $q3englishresolved ?></th>
                        <th style="width:4%"><?php echo $q4english ?></th>
                        <th style="width:7%"><?php echo $q4englishresolved ?></th>
                        <th style="width:8%"><?php echo $totalEnglish ?></th>
                        <th style="width:8%"><?php echo $totalEnglishResolved ?></th>
                    </tr>
                    <tr>
                    <th style="width:15%">Academic - Literacy in Filipino</th>
                        <th style="width:4%"><?php echo $q1filipino ?></th>
                        <th style="width:7%"><?php echo $q1filipinoresolved ?></th>
                        <th style="width:4%"><?php echo $q2filipino ?></th>
                        <th style="width:7%"><?php echo $q2filipinoresolved ?></th>
                        <th style="width:4%"><?php echo $q3filipino ?></th>
                        <th style="width:7%"><?php echo $q3filipinoresolved ?></th>
                        <th style="width:4%"><?php echo $q4filipino ?></th>
                        <th style="width:7%"><?php echo $q4filipinoresolved ?></th>
                        <th style="width:8%"><?php echo $totalFilipino ?></th>
                        <th style="width:8%"><?php echo $totalFilipinoResolved ?></th>
                    </tr>
                    <tr>
                    <th style="width:15%">Academic - Numeracy</th>
                        <th style="width:4%"><?php echo $q1numeracy ?></th>
                        <th style="width:7%"><?php echo $q1numeracyresolved ?></th>
                        <th style="width:4%"><?php echo $q2numeracy ?></th>
                        <th style="width:7%"><?php echo $q2numeracyresolved ?></th>
                        <th style="width:4%"><?php echo $q3numeracy ?></th>
                        <th style="width:7%"><?php echo $q3numeracyresolved ?></th>
                        <th style="width:4%"><?php echo $q4numeracy ?></th>
                        <th style="width:7%"><?php echo $q4numeracyresolved ?></th>
                        <th style="width:8%"><?php echo $totalNumeracy ?></th>
                        <th style="width:8%"><?php echo $totalNumeracyResolved ?></th>
                    <tr>
                    <th style="width:15%">Behavioral</th>
                        <th style="width:4%"><?php echo $q1behavioral ?></th>
                        <th style="width:7%"><?php echo $q1behavioralresolved ?></th>
                        <th style="width:4%"><?php echo $q2behavioral ?></th>
                        <th style="width:7%"><?php echo $q2behavioralresolved ?></th>
                        <th style="width:4%"><?php echo $q3behavioral ?></th>
                        <th style="width:7%"><?php echo $q3behavioralresolved ?></th>
                        <th style="width:4%"><?php echo $q4behavioral ?></th>
                        <th style="width:7%"><?php echo $q4behavioralresolved ?></th>
                        <th style="width:8%"><?php echo $totalBehavioral ?></th>
                        <th style="width:8%"><?php echo $totalBehavioralResolved ?></th>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="shesh" style="margin-top: 40px;">

        <div class="row">
            <div class="column">
                <div class="containers" style="background-color: #B7B7B7;">
                    <h3 style="margin-left: 7px">Quarter</h3>
                </div>
            </div>
            <div class="select-wrapper1">
                    <select id="topdown" name="quarter" class="containers second" onchange="redirectToQuarter()">
                        <option value="" disabled selected hidden>Academic - Literacy in English</option>
                        <option value="q1">Academic - Literacy in English</option>
                        <option value="q2">Academic - Literacy in Filipino</option>
                        <option value="q3">Academic - Numeracy</option>
                        <option value="q4">Behavioral</option>
                    </select>
                </div>
        </div>

        <table border="0">
            <thead class="table-header">
                <tr>
                    <th style="width:40%">Grade Level</th>
                    <th style="width:13%">Q1</th>
                    <th style="width:13%">Q2</th>
                    <th style="width:13%">Q3</th>
                    <th style="width:13%">Q4</th>
                    <th style="width:25%">Total P.A.R.s</th>
                </tr>
            </thead>
            <tbody class="school">
                <tr>
                <tr class="school">
                        <th style="width:35%" >Kinder</th>
                        <th style="width:13%"></th>
                        <th style="width:13%"></th>
                        <th style="width:13%"></th>
                        <th style="width:13%"></th>
                        <th style="width:13%"></th>
                    </tr>
                    <tr class="school">
                        <th style="width:35%" >Grade 1</th>
                        <th style="width:13%"></th>
                        <th style="width:13%"></th>
                        <th style="width:13%"></th>
                        <th style="width:13%"></th>
                        <th style="width:13%"></th>
                    </tr>
                    <tr class="school">
                        <th style="width:35%">Grade 2</th>
                        <th style="width:13%"></th>
                        <th style="width:13%"></th>
                        <th style="width:13%"></th>
                        <th style="width:13%"></th>
                        <th style="width:13%"></th>
                    </tr>
                    <tr class="school">
                        <th style="width:35%" >Grade 3</th>
                        <th style="width:13%"></th>
                        <th style="width:13%"></th>
                        <th style="width:13%"></th>
                        <th style="width:13%"></th>
                        <th style="width:13%"></th>
                    </tr>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    </section>
    </div>

    <script src="monitoring_tracking.js"></script>

    <script>
        function printPARsList() {
            window.print();
        }
</script>
<script>
    // Define variables
var currentPage = 1;
var rowsPerPage = 9; 

// Function to show/hide rows based on current page
function showRows() {
    var rows = document.querySelectorAll('#data-table tbody tr');
    var startIndex = (currentPage - 1) * rowsPerPage;
    var endIndex = startIndex + rowsPerPage;

    rows.forEach(function(row, index) {
        if (index >= startIndex && index < endIndex) {
            row.style.display = 'table-row';
        } else {
            row.style.display = 'none';
        }
    });
}

// Function to go to the previous page
function prevPage() {
    if (currentPage > 1) {
        currentPage;
        showRows();
    }
}

// Function to go to the next page
function nextPage() {
    var rows = document.querySelectorAll('#data-table tbody tr');
    var totalRows = rows.length;
    var totalPages = Math.ceil(totalRows / rowsPerPage);
    
    if (currentPage < totalPages) {
        currentPage++;
        showRows();
    }
}

// Initial call to show rows on page load
showRows();

</script>
</body>
</html>
