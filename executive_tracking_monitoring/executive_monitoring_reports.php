<?php

    include('../database.php');

    // Initialize total students count
    $totalstudents = 0;

    // Get the name of the current database
    $dbnameQuery = "SELECT DATABASE() AS dbname";
    $dbnameResult = $conn->query($dbnameQuery);

    if ($dbnameResult) {
        $dbnameRow = $dbnameResult->fetch_assoc();
        $dbname = preg_replace('/\bIi\b/', 'II', str_replace('_', ' ', ucwords(strtolower($dbnameRow['dbname']), '_')));
        
        $searchTerm1 = 'grade';
        $searchTerm2 = 'section';

        $query = "SHOW TABLES LIKE '%$searchTerm1%$searchTerm2%'";
        $result = $conn->query($query);

        if ($result) {
            $tableCount = $result->num_rows;

            if ($tableCount > 0) {
                while ($row = $result->fetch_row()) {
                    $tableName = $row[0];

                    // Count records in 'lrn' field for each table
                    $countQuery = "SELECT COUNT(lrn) AS recordCount FROM $tableName";
                    $countResult = $conn->query($countQuery);

                    if ($countResult) {
                        $countRow = $countResult->fetch_assoc();
                        $recordCount = $countRow['recordCount'];
                        $totalstudents += $recordCount;
                    }
                }
            } 
        }
    }

    // Close connection
    $conn->close();

?>
<?php
    include('../database.php');

    $tables = ['academic_english', 'academic_filipino', 'behavioral', 'academic_numeracy'];

    $englishCount = 0;
    $filipinoCount = 0;
    $behavioralCount = 0;
    $numeracyCount = 0;
    $totalstar = 0;

    foreach ($tables as $table) {
        $query = "SELECT COUNT(*) AS count FROM $table";
        $result = $conn->query($query);

        if ($result) {
            $row = $result->fetch_assoc();
            $count = $row['count'];

            // Assign count to the appropriate variable based on the table
            switch ($table) {
                case 'academic_english':
                    $englishCount = $count;
                    break;
                case 'academic_filipino':
                    $filipinoCount = $count;
                    break;
                case 'behavioral':
                    $behavioralCount = $count;
                    break;
                case 'academic_numeracy':
                    $numeracyCount = $count;
                    break;
            }
            $totalstar += $count;
        } 
    }
    $conn->close();
?>
<?php
    include('../database.php');

    $queryEnglish = "SELECT COUNT(*) AS q1english FROM academic_english WHERE quarter = 1";
    $resultEnglish = $conn->query($queryEnglish);
    $rowEnglish = $resultEnglish->fetch_assoc();
    $q1english = $rowEnglish['q1english'];

    $queryFilipino = "SELECT COUNT(*) AS q1filipino FROM academic_filipino WHERE quarter = 1";
    $resultFilipino = $conn->query($queryFilipino);
    $rowFilipino = $resultFilipino->fetch_assoc();
    $q1filipino = $rowFilipino['q1filipino'];

    $queryNumeracy = "SELECT COUNT(*) AS q1numeracy FROM academic_numeracy WHERE quarter = 1";
    $resultNumeracy = $conn->query($queryNumeracy);
    $rowNumeracy = $resultNumeracy->fetch_assoc();
    $q1numeracy = $rowNumeracy['q1numeracy'];

    $queryBehavioral = "SELECT COUNT(*) AS q1behavioral FROM behavioral WHERE quarter = 1";
    $resultBehavioral = $conn->query($queryBehavioral);
    $rowBehavioral = $resultBehavioral->fetch_assoc();
    $q1behavioral = $rowBehavioral['q1behavioral'];

    $queryEnglishResolved = "SELECT COUNT(*) AS q1englishresolved FROM academic_english WHERE quarter = 1 AND status = 'resolved'";
    $resultEnglishResolved = $conn->query($queryEnglishResolved);
    $rowEnglishResolved = $resultEnglishResolved->fetch_assoc();
    $q1englishresolved = $rowEnglishResolved['q1englishresolved'];

    $queryFilipinoResolved = "SELECT COUNT(*) AS q1filipinoresolved FROM academic_filipino WHERE quarter = 1 AND status = 'resolved'";
    $resultFilipinoResolved = $conn->query($queryFilipinoResolved);
    $rowFilipinoResolved = $resultFilipinoResolved->fetch_assoc();
    $q1filipinoresolved = $rowFilipinoResolved['q1filipinoresolved'];

    $queryNumeracyResolved = "SELECT COUNT(*) AS q1numeracyresolved FROM academic_numeracy WHERE quarter = 1 AND status = 'resolved'";
    $resultNumeracyResolved = $conn->query($queryNumeracyResolved);
    $rowNumeracyResolved = $resultNumeracyResolved->fetch_assoc();
    $q1numeracyresolved = $rowNumeracyResolved['q1numeracyresolved'];

    $queryBehavioralResolved = "SELECT COUNT(*) AS q1behavioralresolved FROM behavioral WHERE quarter = 1 AND status = 'resolved'";
    $resultBehavioralResolved = $conn->query($queryBehavioralResolved);
    $rowBehavioralResolved = $resultBehavioralResolved->fetch_assoc();
    $q1behavioralresolved = $rowBehavioralResolved['q1behavioralresolved'];
    $conn->close();
?>
<?php
    include('../database.php');

    $queryEnglish = "SELECT COUNT(*) AS q2english FROM academic_english WHERE quarter = 2";
    $resultEnglish = $conn->query($queryEnglish);
    $rowEnglish = $resultEnglish->fetch_assoc();
    $q2english = $rowEnglish['q2english'];

    $queryFilipino = "SELECT COUNT(*) AS q2filipino FROM academic_filipino WHERE quarter = 2";
    $resultFilipino = $conn->query($queryFilipino);
    $rowFilipino = $resultFilipino->fetch_assoc();
    $q2filipino = $rowFilipino['q2filipino'];

    $queryNumeracy = "SELECT COUNT(*) AS q2numeracy FROM academic_numeracy WHERE quarter = 2";
    $resultNumeracy = $conn->query($queryNumeracy);
    $rowNumeracy = $resultNumeracy->fetch_assoc();
    $q2numeracy = $rowNumeracy['q2numeracy'];

    $queryBehavioral = "SELECT COUNT(*) AS q2behavioral FROM behavioral WHERE quarter = 2";
    $resultBehavioral = $conn->query($queryBehavioral);
    $rowBehavioral = $resultBehavioral->fetch_assoc();
    $q2behavioral = $rowBehavioral['q2behavioral'];

    $queryEnglishResolved = "SELECT COUNT(*) AS q2englishresolved FROM academic_english WHERE quarter = 2 AND status = 'resolved'";
    $resultEnglishResolved = $conn->query($queryEnglishResolved);
    $rowEnglishResolved = $resultEnglishResolved->fetch_assoc();
    $q2englishresolved = $rowEnglishResolved['q2englishresolved'];

    $queryFilipinoResolved = "SELECT COUNT(*) AS q2filipinoresolved FROM academic_filipino WHERE quarter = 2 AND status = 'resolved'";
    $resultFilipinoResolved = $conn->query($queryFilipinoResolved);
    $rowFilipinoResolved = $resultFilipinoResolved->fetch_assoc();
    $q2filipinoresolved = $rowFilipinoResolved['q2filipinoresolved'];

    $queryNumeracyResolved = "SELECT COUNT(*) AS q2numeracyresolved FROM academic_numeracy WHERE quarter = 2 AND status = 'resolved'";
    $resultNumeracyResolved = $conn->query($queryNumeracyResolved);
    $rowNumeracyResolved = $resultNumeracyResolved->fetch_assoc();
    $q2numeracyresolved = $rowNumeracyResolved['q2numeracyresolved'];

    $queryBehavioralResolved = "SELECT COUNT(*) AS q2behavioralresolved FROM behavioral WHERE quarter = 2 AND status = 'resolved'";
    $resultBehavioralResolved = $conn->query($queryBehavioralResolved);
    $rowBehavioralResolved = $resultBehavioralResolved->fetch_assoc();
    $q2behavioralresolved = $rowBehavioralResolved['q2behavioralresolved'];

    $conn->close();
?>
<?php
    include('../database.php');

    $queryEnglish = "SELECT COUNT(*) AS q3english FROM academic_english WHERE quarter = 3";
    $resultEnglish = $conn->query($queryEnglish);
    $rowEnglish = $resultEnglish->fetch_assoc();
    $q3english = $rowEnglish['q3english'];

    $queryFilipino = "SELECT COUNT(*) AS q3filipino FROM academic_filipino WHERE quarter = 3";
    $resultFilipino = $conn->query($queryFilipino);
    $rowFilipino = $resultFilipino->fetch_assoc();
    $q3filipino = $rowFilipino['q3filipino'];

    $queryNumeracy = "SELECT COUNT(*) AS q3numeracy FROM academic_numeracy WHERE quarter = 3";
    $resultNumeracy = $conn->query($queryNumeracy);
    $rowNumeracy = $resultNumeracy->fetch_assoc();
    $q3numeracy = $rowNumeracy['q3numeracy'];

    $queryBehavioral = "SELECT COUNT(*) AS q3behavioral FROM behavioral WHERE quarter = 3";
    $resultBehavioral = $conn->query($queryBehavioral);
    $rowBehavioral = $resultBehavioral->fetch_assoc();
    $q3behavioral = $rowBehavioral['q3behavioral'];

    $queryEnglishResolved = "SELECT COUNT(*) AS q3englishresolved FROM academic_english WHERE quarter = 3 AND status = 'resolved'";
    $resultEnglishResolved = $conn->query($queryEnglishResolved);
    $rowEnglishResolved = $resultEnglishResolved->fetch_assoc();
    $q3englishresolved = $rowEnglishResolved['q3englishresolved'];

    $queryFilipinoResolved = "SELECT COUNT(*) AS q3filipinoresolved FROM academic_filipino WHERE quarter = 3 AND status = 'resolved'";
    $resultFilipinoResolved = $conn->query($queryFilipinoResolved);
    $rowFilipinoResolved = $resultFilipinoResolved->fetch_assoc();
    $q3filipinoresolved = $rowFilipinoResolved['q3filipinoresolved'];

    $queryNumeracyResolved = "SELECT COUNT(*) AS q3numeracyresolved FROM academic_numeracy WHERE quarter = 3 AND status = 'resolved'";
    $resultNumeracyResolved = $conn->query($queryNumeracyResolved);
    $rowNumeracyResolved = $resultNumeracyResolved->fetch_assoc();
    $q3numeracyresolved = $rowNumeracyResolved['q3numeracyresolved'];

    $queryBehavioralResolved = "SELECT COUNT(*) AS q3behavioralresolved FROM behavioral WHERE quarter = 3 AND status = 'resolved'";
    $resultBehavioralResolved = $conn->query($queryBehavioralResolved);
    $rowBehavioralResolved = $resultBehavioralResolved->fetch_assoc();
    $q3behavioralresolved = $rowBehavioralResolved['q3behavioralresolved'];

    $conn->close();
?>
<?php
    include('../database.php');

    $queryEnglish = "SELECT COUNT(*) AS q4english FROM academic_english WHERE quarter = 4";
    $resultEnglish = $conn->query($queryEnglish);
    $rowEnglish = $resultEnglish->fetch_assoc();
    $q4english = $rowEnglish['q4english'];

    $queryFilipino = "SELECT COUNT(*) AS q4filipino FROM academic_filipino WHERE quarter = 4";
    $resultFilipino = $conn->query($queryFilipino);
    $rowFilipino = $resultFilipino->fetch_assoc();
    $q4filipino = $rowFilipino['q4filipino'];

    $queryNumeracy = "SELECT COUNT(*) AS q4numeracy FROM academic_numeracy WHERE quarter = 4";
    $resultNumeracy = $conn->query($queryNumeracy);
    $rowNumeracy = $resultNumeracy->fetch_assoc();
    $q4numeracy = $rowNumeracy['q4numeracy'];

    $queryBehavioral = "SELECT COUNT(*) AS q4behavioral FROM behavioral WHERE quarter = 4";
    $resultBehavioral = $conn->query($queryBehavioral);
    $rowBehavioral = $resultBehavioral->fetch_assoc();
    $q4behavioral = $rowBehavioral['q4behavioral'];

    $queryEnglishResolved = "SELECT COUNT(*) AS q4englishresolved FROM academic_english WHERE quarter = 4 AND status = 'resolved'";
    $resultEnglishResolved = $conn->query($queryEnglishResolved);
    $rowEnglishResolved = $resultEnglishResolved->fetch_assoc();
    $q4englishresolved = $rowEnglishResolved['q4englishresolved'];

    $queryFilipinoResolved = "SELECT COUNT(*) AS q4filipinoresolved FROM academic_filipino WHERE quarter = 4 AND status = 'resolved'";
    $resultFilipinoResolved = $conn->query($queryFilipinoResolved);
    $rowFilipinoResolved = $resultFilipinoResolved->fetch_assoc();
    $q4filipinoresolved = $rowFilipinoResolved['q4filipinoresolved'];

    $queryNumeracyResolved = "SELECT COUNT(*) AS q4numeracyresolved FROM academic_numeracy WHERE quarter = 4 AND status = 'resolved'";
    $resultNumeracyResolved = $conn->query($queryNumeracyResolved);
    $rowNumeracyResolved = $resultNumeracyResolved->fetch_assoc();
    $q4numeracyresolved = $rowNumeracyResolved['q4numeracyresolved'];

    $queryBehavioralResolved = "SELECT COUNT(*) AS q4behavioralresolved FROM behavioral WHERE quarter = 4 AND status = 'resolved'";
    $resultBehavioralResolved = $conn->query($queryBehavioralResolved);
    $rowBehavioralResolved = $resultBehavioralResolved->fetch_assoc();
    $q4behavioralresolved = $rowBehavioralResolved['q4behavioralresolved'];

    $conn->close();
?>
<?php

    include('../database.php');

    // Count the total rows in each table
    $sqlEnglish = "SELECT COUNT(*) AS total FROM academic_english";
    $resultEnglish = $conn->query($sqlEnglish);
    $rowEnglish = $resultEnglish->fetch_assoc();
    $totalEnglish = $rowEnglish['total'];

    $sqlFilipino = "SELECT COUNT(*) AS total FROM academic_filipino";
    $resultFilipino = $conn->query($sqlFilipino);
    $rowFilipino = $resultFilipino->fetch_assoc();
    $totalFilipino = $rowFilipino['total'];

    $sqlNumeracy = "SELECT COUNT(*) AS total FROM academic_numeracy";
    $resultNumeracy = $conn->query($sqlNumeracy);
    $rowNumeracy = $resultNumeracy->fetch_assoc();
    $totalNumeracy = $rowNumeracy['total'];

    $sqlBehavioral = "SELECT COUNT(*) AS total FROM behavioral";
    $resultBehavioral = $conn->query($sqlBehavioral);
    $rowBehavioral = $resultBehavioral->fetch_assoc();
    $totalBehavioral = $rowBehavioral['total'];

    $sqlEnglishResolved = "SELECT COUNT(*) AS total FROM academic_english WHERE status = 'resolved'";
    $resultEnglishResolved = $conn->query($sqlEnglishResolved);
    $rowEnglishResolved = $resultEnglishResolved->fetch_assoc();
    $totalEnglishResolved = $rowEnglishResolved['total'];

    $sqlFilipinoResolved = "SELECT COUNT(*) AS total FROM academic_filipino WHERE status = 'resolved'";
    $resultFilipinoResolved = $conn->query($sqlFilipinoResolved);
    $rowFilipinoResolved = $resultFilipinoResolved->fetch_assoc();
    $totalFilipinoResolved = $rowFilipinoResolved['total'];

    $sqlNumeracyResolved = "SELECT COUNT(*) AS total FROM academic_numeracy WHERE status = 'resolved'";
    $resultNumeracyResolved = $conn->query($sqlNumeracyResolved);
    $rowNumeracyResolved = $resultNumeracyResolved->fetch_assoc();
    $totalNumeracyResolved = $rowNumeracyResolved['total'];

    $sqlBehavioralResolved = "SELECT COUNT(*) AS total FROM behavioral WHERE status = 'resolved'";
    $resultBehavioralResolved = $conn->query($sqlBehavioralResolved);
    $rowBehavioralResolved = $resultBehavioralResolved->fetch_assoc();
    $totalBehavioralResolved = $rowBehavioralResolved['total'];

    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Executive Committee</title>
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
            border-radius: 5px;
            border: 2px solid #919097;
            background: rgba(251, 251, 251, 0.25);
            box-shadow: 0px 7px 7px 0px rgba(0, 0, 0, 0.25) inset, 0px 7px 7px 0px rgba(0, 0, 0, 0.25);
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
            width: 400px;
            background: #FBFBFB;
            color: #190572;
            text-align: start;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 17px;
        }

        .second{
            border-radius: 3px;
            background-color: #2206A0;
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
            <a href="executive_tracking_reports.php">Quarterly Reports</a>
            <a href="executive_monitoring_reports.php" style="background:#F3F3F3; color:#130550">Report Summary</a>
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
                <button style="background:transparent; border: none"><h3><i class='bx bx-printer' ></i>Print Reports</h3></button>
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

        
     <!--   <div class="row">
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
                        <th style="width:9%"><?php echo $q1english ?></th>
                        <th style="width:9%"><?php echo $q1englishresolved ?></th>
                        <th style="width:9%"><?php echo $q2english ?></th>
                        <th style="width:9%"><?php echo $q2englishresolved ?></th>
                        <th style="width:9%"><?php echo $q3english ?></th>
                        <th style="width:9%"><?php echo $q3englishresolved ?></th>
                        <th style="width:9%"><?php echo $q4english ?></th>
                        <th style="width:9%"><?php echo $q4englishresolved ?></th>
                        <th style="width:9%"><?php echo $totalEnglish ?></th>
                        <th style="width:9%"><?php echo $totalEnglishResolved ?></th>
                    </tr>
                    <tr>
                        <th style="width:10%">Academic - Literacy in Filipino</th>
                        <th style="width:9%"><?php echo $q1filipino ?></th>
                        <th style="width:9%"><?php echo $q1filipinoresolved ?></th>
                        <th style="width:9%"><?php echo $q2filipino ?></th>
                        <th style="width:9%"><?php echo $q2filipinoresolved ?></th>
                        <th style="width:9%"><?php echo $q3filipino ?></th>
                        <th style="width:9%"><?php echo $q3filipinoresolved ?></th>
                        <th style="width:9%"><?php echo $q4filipino ?></th>
                        <th style="width:9%"><?php echo $q4filipinoresolved ?></th>
                        <th style="width:9%"><?php echo $totalFilipino ?></th>
                        <th style="width:9%"><?php echo $totalFilipinoResolved ?></th>
                    </tr>
                    <tr>
                        <th style="width:10%">Academic - Numeracy</th>
                        <th style="width:9%"><?php echo $q1numeracy ?></th>
                        <th style="width:9%"><?php echo $q1numeracyresolved ?></th>
                        <th style="width:9%"><?php echo $q2numeracy ?></th>
                        <th style="width:9%"><?php echo $q2numeracyresolved ?></th>
                        <th style="width:9%"><?php echo $q3numeracy ?></th>
                        <th style="width:9%"><?php echo $q3numeracyresolved ?></th>
                        <th style="width:9%"><?php echo $q4numeracy ?></th>
                        <th style="width:9%"><?php echo $q4numeracyresolved ?></th>
                        <th style="width:9%"><?php echo $totalNumeracy ?></th>
                        <th style="width:9%"><?php echo $totalNumeracyResolved ?></th>
                    </tr>
                    <tr>
                        <th style="width:10%">Behavioral</th>
                        <th style="width:9%"><?php echo $q1behavioral ?></th>
                        <th style="width:9%"><?php echo $q1behavioralresolved ?></th>
                        <th style="width:9%"><?php echo $q2behavioral ?></th>
                        <th style="width:9%"><?php echo $q2behavioralresolved ?></th>
                        <th style="width:9%"><?php echo $q3behavioral ?></th>
                        <th style="width:9%"><?php echo $q3behavioralresolved ?></th>
                        <th style="width:9%"><?php echo $q4behavioral ?></th>
                        <th style="width:9%"><?php echo $q4behavioralresolved ?></th>
                        <th style="width:9%"><?php echo $totalBehavioral ?></th>
                        <th style="width:9%"><?php echo $totalBehavioralResolved ?></th>
                    </tr>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="shesh">
        <div class="row">
            <div class="column" >
                <div class="containers" style="background-color: #B7B7B7">
                    <h3 style="margin-left: 7px">No. of P.A.Rs</h3>
                </div>
            </div>
            <div class="column column-right">
                <div class="containers" style="background-color: #F3F3F3;">
                    <h3 style="margin-left: 7px">Highest to Lowest</h3>
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
                    <h3 style="margin-left: 7px">Quarter</h3>
                </div>
            </div>
            <div class="column column-right">
                <div class="containers" style="background-color: #F3F3F3;">
                    <select class="containers"style="border:none; background-color: #F3F3F3; margin-left: 7px">
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
                    <th style="width:40%">School Name</th>
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
                        <th style="width:40%; text-align: left; padding-left: 10px">Bacayao Sur Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Bliss Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Bolosan Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Bonuan Boquig Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Calmay Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Carael Elementary School<</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Caranglaan Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">East Central Integrated School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Federico N. Ceralde School Integrated School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Gen. Gregorio Del Pilar Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Juan L. Siapno Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Juan P. Guadiz Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Lasip Grande Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Leon-Francisco Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Lomboy Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Lucao Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Malued Sur Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Mamalingling Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Mangin-Tebeng Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">North Central Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Pantal Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Pascuala G. Villamil Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Pogo-Lasip Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Pugaro Integrated School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Sabangan Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Salapingao Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Salisay Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Suit Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">T. Ayson Rosario Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Tambac Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Tebeng Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Victoria Q. Zarate Elementary School</th>
                        <th style="width:15%"><?php echo $englishCount ?></th>
                        <th style="width:15%"><?php echo $filipinoCount ?></th>
                        <th style="width:15%"><?php echo $numeracyCount ?></th>
                        <th style="width:15%"><?php echo $behavioralCount ?></th>
                        <th style="width:15%"><?php echo $totalstar ?></th>
                    </tr>

                </tr>
            </tbody>
        </table>
    </section>
    </div>

    <script src="monitoring_tracking.js"></script>
</body>
</html>
