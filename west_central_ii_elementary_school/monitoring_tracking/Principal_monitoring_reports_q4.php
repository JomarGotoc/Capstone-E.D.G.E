<?php
    include('../../database.php');

    $queryEnglish = "SELECT COUNT(*) AS q1english FROM academic_english WHERE quarter = 1 AND school = 'West Central II Elementary School'";
    $resultEnglish = $conn->query($queryEnglish);
    $rowEnglish = $resultEnglish->fetch_assoc();
    $q1english = $rowEnglish['q1english'];

    $queryFilipino = "SELECT COUNT(*) AS q1filipino FROM academic_filipino WHERE quarter = 1 AND school = 'West Central II Elementary School'";
    $resultFilipino = $conn->query($queryFilipino);
    $rowFilipino = $resultFilipino->fetch_assoc();
    $q1filipino = $rowFilipino['q1filipino'];

    $queryNumeracy = "SELECT COUNT(*) AS q1numeracy FROM academic_numeracy WHERE quarter = 1 AND school = 'West Central II Elementary School'";
    $resultNumeracy = $conn->query($queryNumeracy);
    $rowNumeracy = $resultNumeracy->fetch_assoc();
    $q1numeracy = $rowNumeracy['q1numeracy'];

    $queryBehavioral = "SELECT COUNT(*) AS q1behavioral FROM behavioral WHERE quarter = 1 AND school = 'West Central II Elementary School'";
    $resultBehavioral = $conn->query($queryBehavioral);
    $rowBehavioral = $resultBehavioral->fetch_assoc();
    $q1behavioral = $rowBehavioral['q1behavioral'];

    $queryEnglishResolved = "SELECT COUNT(*) AS q1englishresolved FROM academic_english WHERE quarter = 1 AND status = 'resolved' AND school = 'West Central II Elementary School'";
    $resultEnglishResolved = $conn->query($queryEnglishResolved);
    $rowEnglishResolved = $resultEnglishResolved->fetch_assoc();
    $q1englishresolved = $rowEnglishResolved['q1englishresolved'];

    $queryFilipinoResolved = "SELECT COUNT(*) AS q1filipinoresolved FROM academic_filipino WHERE quarter = 1 AND status = 'resolved' AND school = 'West Central II Elementary School'";
    $resultFilipinoResolved = $conn->query($queryFilipinoResolved);
    $rowFilipinoResolved = $resultFilipinoResolved->fetch_assoc();
    $q1filipinoresolved = $rowFilipinoResolved['q1filipinoresolved'];

    $queryNumeracyResolved = "SELECT COUNT(*) AS q1numeracyresolved FROM academic_numeracy WHERE quarter = 1 AND status = 'resolved' AND school = 'West Central II Elementary School'";
    $resultNumeracyResolved = $conn->query($queryNumeracyResolved);
    $rowNumeracyResolved = $resultNumeracyResolved->fetch_assoc();
    $q1numeracyresolved = $rowNumeracyResolved['q1numeracyresolved'];

    $queryBehavioralResolved = "SELECT COUNT(*) AS q1behavioralresolved FROM behavioral WHERE quarter = 1 AND status = 'resolved' AND school = 'West Central II Elementary School'";
    $resultBehavioralResolved = $conn->query($queryBehavioralResolved);
    $rowBehavioralResolved = $resultBehavioralResolved->fetch_assoc();
    $q1behavioralresolved = $rowBehavioralResolved['q1behavioralresolved'];
    $conn->close();
?>
<?php
    include('../../database.php');

    $queryEnglish = "SELECT COUNT(*) AS q2english FROM academic_english WHERE quarter = 2 AND school = 'West Central II Elementary School'";
    $resultEnglish = $conn->query($queryEnglish);
    $rowEnglish = $resultEnglish->fetch_assoc();
    $q2english = $rowEnglish['q2english'];

    $queryFilipino = "SELECT COUNT(*) AS q2filipino FROM academic_filipino WHERE quarter = 2 AND school = 'West Central II Elementary School'";
    $resultFilipino = $conn->query($queryFilipino);
    $rowFilipino = $resultFilipino->fetch_assoc();
    $q2filipino = $rowFilipino['q2filipino'];

    $queryNumeracy = "SELECT COUNT(*) AS q2numeracy FROM academic_numeracy WHERE quarter = 2 AND school = 'West Central II Elementary School'";
    $resultNumeracy = $conn->query($queryNumeracy);
    $rowNumeracy = $resultNumeracy->fetch_assoc();
    $q2numeracy = $rowNumeracy['q2numeracy'];

    $queryBehavioral = "SELECT COUNT(*) AS q2behavioral FROM behavioral WHERE quarter = 2 AND school = 'West Central II Elementary School'";
    $resultBehavioral = $conn->query($queryBehavioral);
    $rowBehavioral = $resultBehavioral->fetch_assoc();
    $q2behavioral = $rowBehavioral['q2behavioral'];

    $queryEnglishResolved = "SELECT COUNT(*) AS q2englishresolved FROM academic_english WHERE quarter = 2 AND status = 'resolved' AND school = 'West Central II Elementary School'";
    $resultEnglishResolved = $conn->query($queryEnglishResolved);
    $rowEnglishResolved = $resultEnglishResolved->fetch_assoc();
    $q2englishresolved = $rowEnglishResolved['q2englishresolved'];

    $queryFilipinoResolved = "SELECT COUNT(*) AS q2filipinoresolved FROM academic_filipino WHERE quarter = 2 AND status = 'resolved' AND school = 'West Central II Elementary School'";
    $resultFilipinoResolved = $conn->query($queryFilipinoResolved);
    $rowFilipinoResolved = $resultFilipinoResolved->fetch_assoc();
    $q2filipinoresolved = $rowFilipinoResolved['q2filipinoresolved'];

    $queryNumeracyResolved = "SELECT COUNT(*) AS q2numeracyresolved FROM academic_numeracy WHERE quarter = 2 AND status = 'resolved' AND school = 'West Central II Elementary School'";
    $resultNumeracyResolved = $conn->query($queryNumeracyResolved);
    $rowNumeracyResolved = $resultNumeracyResolved->fetch_assoc();
    $q2numeracyresolved = $rowNumeracyResolved['q2numeracyresolved'];

    $queryBehavioralResolved = "SELECT COUNT(*) AS q2behavioralresolved FROM behavioral WHERE quarter = 2 AND status = 'resolved' AND school = 'West Central II Elementary School'";
    $resultBehavioralResolved = $conn->query($queryBehavioralResolved);
    $rowBehavioralResolved = $resultBehavioralResolved->fetch_assoc();
    $q2behavioralresolved = $rowBehavioralResolved['q2behavioralresolved'];

    $conn->close();
?>
<?php
    include('../../database.php');

    $queryEnglish = "SELECT COUNT(*) AS q3english FROM academic_english WHERE quarter = 3 AND school = 'West Central II Elementary School'";
    $resultEnglish = $conn->query($queryEnglish);
    $rowEnglish = $resultEnglish->fetch_assoc();
    $q3english = $rowEnglish['q3english'];

    $queryFilipino = "SELECT COUNT(*) AS q3filipino FROM academic_filipino WHERE quarter = 3 AND school = 'West Central II Elementary School'";
    $resultFilipino = $conn->query($queryFilipino);
    $rowFilipino = $resultFilipino->fetch_assoc();
    $q3filipino = $rowFilipino['q3filipino'];

    $queryNumeracy = "SELECT COUNT(*) AS q3numeracy FROM academic_numeracy WHERE quarter = 3 AND school = 'West Central II Elementary School'";
    $resultNumeracy = $conn->query($queryNumeracy);
    $rowNumeracy = $resultNumeracy->fetch_assoc();
    $q3numeracy = $rowNumeracy['q3numeracy'];

    $queryBehavioral = "SELECT COUNT(*) AS q3behavioral FROM behavioral WHERE quarter = 3 AND school = 'West Central II Elementary School'";
    $resultBehavioral = $conn->query($queryBehavioral);
    $rowBehavioral = $resultBehavioral->fetch_assoc();
    $q3behavioral = $rowBehavioral['q3behavioral'];

    $queryEnglishResolved = "SELECT COUNT(*) AS q3englishresolved FROM academic_english WHERE quarter = 3 AND status = 'resolved' AND school = 'West Central II Elementary School'";
    $resultEnglishResolved = $conn->query($queryEnglishResolved);
    $rowEnglishResolved = $resultEnglishResolved->fetch_assoc();
    $q3englishresolved = $rowEnglishResolved['q3englishresolved'];

    $queryFilipinoResolved = "SELECT COUNT(*) AS q3filipinoresolved FROM academic_filipino WHERE quarter = 3 AND status = 'resolved' AND school = 'West Central II Elementary School'";
    $resultFilipinoResolved = $conn->query($queryFilipinoResolved);
    $rowFilipinoResolved = $resultFilipinoResolved->fetch_assoc();
    $q3filipinoresolved = $rowFilipinoResolved['q3filipinoresolved'];

    $queryNumeracyResolved = "SELECT COUNT(*) AS q3numeracyresolved FROM academic_numeracy WHERE quarter = 3 AND status = 'resolved' AND school = 'West Central II Elementary School'";
    $resultNumeracyResolved = $conn->query($queryNumeracyResolved);
    $rowNumeracyResolved = $resultNumeracyResolved->fetch_assoc();
    $q3numeracyresolved = $rowNumeracyResolved['q3numeracyresolved'];

    $queryBehavioralResolved = "SELECT COUNT(*) AS q3behavioralresolved FROM behavioral WHERE quarter = 3 AND status = 'resolved' AND school = 'West Central II Elementary School'";
    $resultBehavioralResolved = $conn->query($queryBehavioralResolved);
    $rowBehavioralResolved = $resultBehavioralResolved->fetch_assoc();
    $q3behavioralresolved = $rowBehavioralResolved['q3behavioralresolved'];

    $conn->close();
?>
<?php
    include('../../database.php');

    $queryEnglish = "SELECT COUNT(*) AS q4english FROM academic_english WHERE quarter = 4 AND school = 'West Central II Elementary School'";
    $resultEnglish = $conn->query($queryEnglish);
    $rowEnglish = $resultEnglish->fetch_assoc();
    $q4english = $rowEnglish['q4english'];

    $queryFilipino = "SELECT COUNT(*) AS q4filipino FROM academic_filipino WHERE quarter = 4 AND school = 'West Central II Elementary School'";
    $resultFilipino = $conn->query($queryFilipino);
    $rowFilipino = $resultFilipino->fetch_assoc();
    $q4filipino = $rowFilipino['q4filipino'];

    $queryNumeracy = "SELECT COUNT(*) AS q4numeracy FROM academic_numeracy WHERE quarter = 4 AND school = 'West Central II Elementary School'";
    $resultNumeracy = $conn->query($queryNumeracy);
    $rowNumeracy = $resultNumeracy->fetch_assoc();
    $q4numeracy = $rowNumeracy['q4numeracy'];

    $queryBehavioral = "SELECT COUNT(*) AS q4behavioral FROM behavioral WHERE quarter = 4 AND school = 'West Central II Elementary School'";
    $resultBehavioral = $conn->query($queryBehavioral);
    $rowBehavioral = $resultBehavioral->fetch_assoc();
    $q4behavioral = $rowBehavioral['q4behavioral'];

    $queryEnglishResolved = "SELECT COUNT(*) AS q4englishresolved FROM academic_english WHERE quarter = 4 AND status = 'resolved' AND school = 'West Central II Elementary School'";
    $resultEnglishResolved = $conn->query($queryEnglishResolved);
    $rowEnglishResolved = $resultEnglishResolved->fetch_assoc();
    $q4englishresolved = $rowEnglishResolved['q4englishresolved'];

    $queryFilipinoResolved = "SELECT COUNT(*) AS q4filipinoresolved FROM academic_filipino WHERE quarter = 4 AND status = 'resolved' AND school = 'West Central II Elementary School'";
    $resultFilipinoResolved = $conn->query($queryFilipinoResolved);
    $rowFilipinoResolved = $resultFilipinoResolved->fetch_assoc();
    $q4filipinoresolved = $rowFilipinoResolved['q4filipinoresolved'];

    $queryNumeracyResolved = "SELECT COUNT(*) AS q4numeracyresolved FROM academic_numeracy WHERE quarter = 4 AND status = 'resolved' AND school = 'West Central II Elementary School'";
    $resultNumeracyResolved = $conn->query($queryNumeracyResolved);
    $rowNumeracyResolved = $resultNumeracyResolved->fetch_assoc();
    $q4numeracyresolved = $rowNumeracyResolved['q4numeracyresolved'];

    $queryBehavioralResolved = "SELECT COUNT(*) AS q4behavioralresolved FROM behavioral WHERE quarter = 4 AND status = 'resolved' AND school = 'West Central II Elementary School'";
    $resultBehavioralResolved = $conn->query($queryBehavioralResolved);
    $rowBehavioralResolved = $resultBehavioralResolved->fetch_assoc();
    $q4behavioralresolved = $rowBehavioralResolved['q4behavioralresolved'];

    $conn->close();
?>
<?php

    $currentFileName1 = basename(__FILE__,'_q4.php');
    include('../../database.php');

    // Count the total rows in each table
    $sqlEnglish = "SELECT COUNT(*) AS total FROM academic_english WHERE  school = 'West Central II Elementary School'";
    $resultEnglish = $conn->query($sqlEnglish);
    $rowEnglish = $resultEnglish->fetch_assoc();
    $totalEnglish = $rowEnglish['total'];

    $sqlFilipino = "SELECT COUNT(*) AS total FROM academic_filipino WHERE  school = 'West Central II Elementary School'";
    $resultFilipino = $conn->query($sqlFilipino);
    $rowFilipino = $resultFilipino->fetch_assoc();
    $totalFilipino = $rowFilipino['total'];

    $sqlNumeracy = "SELECT COUNT(*) AS total FROM academic_numeracy WHERE  school = 'West Central II Elementary School'";
    $resultNumeracy = $conn->query($sqlNumeracy);
    $rowNumeracy = $resultNumeracy->fetch_assoc();
    $totalNumeracy = $rowNumeracy['total'];

    $sqlBehavioral = "SELECT COUNT(*) AS total FROM behavioral WHERE  school = 'West Central II Elementary School'";
    $resultBehavioral = $conn->query($sqlBehavioral);
    $rowBehavioral = $resultBehavioral->fetch_assoc();
    $totalBehavioral = $rowBehavioral['total'];

    $sqlEnglishResolved = "SELECT COUNT(*) AS total FROM academic_english WHERE status = 'resolved' AND school = 'West Central II Elementary School'";
    $resultEnglishResolved = $conn->query($sqlEnglishResolved);
    $rowEnglishResolved = $resultEnglishResolved->fetch_assoc();
    $totalEnglishResolved = $rowEnglishResolved['total'];

    $sqlFilipinoResolved = "SELECT COUNT(*) AS total FROM academic_filipino WHERE status = 'resolved'AND school = 'West Central II Elementary School' ";
    $resultFilipinoResolved = $conn->query($sqlFilipinoResolved);
    $rowFilipinoResolved = $resultFilipinoResolved->fetch_assoc();
    $totalFilipinoResolved = $rowFilipinoResolved['total'];

    $sqlNumeracyResolved = "SELECT COUNT(*) AS total FROM academic_numeracy WHERE status = 'resolved' AND school = 'West Central II Elementary School'";
    $resultNumeracyResolved = $conn->query($sqlNumeracyResolved);
    $rowNumeracyResolved = $resultNumeracyResolved->fetch_assoc();
    $totalNumeracyResolved = $rowNumeracyResolved['total'];

    $sqlBehavioralResolved = "SELECT COUNT(*) AS total FROM behavioral WHERE status = 'resolved' AND school = 'West Central II Elementary School'";
    $resultBehavioralResolved = $conn->query($sqlBehavioralResolved);
    $rowBehavioralResolved = $resultBehavioralResolved->fetch_assoc();
    $totalBehavioralResolved = $rowBehavioralResolved['total'];

    $conn->close();
?>
<?php
    include('../../database.php');

    function countOccurrences($conn, $table, $grade) {
        $sql = "SELECT COUNT(*) AS count FROM $table WHERE grade = '$grade' AND quarter = '4' AND school = 'West Central II Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['count'];
        } else {
            return 0;
        }
    }

    $kinderenglish = countOccurrences($conn, 'academic_english', 'kinder');
    $kinderfilipino = countOccurrences($conn, 'academic_filipino', 'kinder');
    $kindernumeracy = countOccurrences($conn, 'academic_numeracy', 'kinder');
    $kinderbehavioral = countOccurrences($conn, 'behavioral', 'kinder');
    $totalkinder = $kinderenglish + $kinderfilipino + $kindernumeracy + $kinderbehavioral;


    $oneenglish = countOccurrences($conn, 'academic_english', 'I');
    $onefilipino = countOccurrences($conn, 'academic_filipino', 'I');
    $onenumeracy = countOccurrences($conn, 'academic_numeracy', 'I');
    $onebehavioral = countOccurrences($conn, 'behavioral', 'I');
    $totalone = $oneenglish + $onefilipino + $onenumeracy + $onebehavioral;


    $twoenglish = countOccurrences($conn, 'academic_english', 'II');
    $twofilipino = countOccurrences($conn, 'academic_filipino', 'II');
    $twonumeracy = countOccurrences($conn, 'academic_numeracy', 'II');
    $twobehavioral = countOccurrences($conn, 'behavioral', 'II');
    $totaltwo = $twoenglish + $twofilipino + $twonumeracy + $twobehavioral;

    $threeenglish = countOccurrences($conn, 'academic_english', 'III');
    $threefilipino = countOccurrences($conn, 'academic_filipino', 'III');
    $threenumeracy = countOccurrences($conn, 'academic_numeracy', 'III');
    $threebehavioral = countOccurrences($conn, 'behavioral', 'III');
    $totalthree = $threeenglish + $threefilipino + $threenumeracy + $threebehavioral;

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
            background: url(../../img/bg.png);
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
            border: 3px solid #919097;
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
        #topdown1 {
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
                <img src="../../img/logo.png" class="logs">
                <h4>E.D.G.E | P.A.R. Early Detection and Guidance for Education</h4>
                <i class="vertical-line"></i>
                <div class="dropdown">
                <i class='bx log-out bx-lock-alt logout-icon' onclick="toggleDropdown()"></i>
                    <div class="dropdown-content" id="dropdownContent">
                    <a href="../../login/Login.php">Log Out</a>
                        <a href="../../change_password/change_password.php?employment_number=<?php echo isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value'; ?>">Change Password</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="navbar">
        <nav>
            <a href="Principal_tracking_reports_q1.php?employment_number=<?php echo isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value'; ?>">Quarterly Reports</a>
            <a href="Principal_monitoring_reports_q1.php?employment_number=<?php echo isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value'; ?>" style="background:#F3F3F3; color:#130550">Report Summary</a>
        </nav>
    </div>

    
    <div class="main-container">
        <div class="row">
            <div class="column">
                <div class="select-wrapper">
                    <select id="topdown1" name="school-year" class="containers first">
                        <option value="school-year">S.Y. 2023 - 2024</option>
                    </select>
                </div>
        </div>
            <div class="column column-left">
            <div class="containers second">
    <button style="background: transparent; border: none;" onclick="printPARsList()">
        <h3><i class='bx bx-printer'></i>Print P.A.Rs List</h3>
    </button>
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
            </tbody>
        </table>
    </section>

    <section class="shesh" style="margin-top: 40px;">
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
            <div class="select-wrapper1">
                    <select id="topdown" name="quarter" class="containers second" onchange="redirectToQuarter()">
                        <option value="" disabled selected hidden>Quarter 4</option>
                        <option value="q1">Quarter 1</option>
                        <option value="q2">Quarter 2</option>
                        <option value="q3">Quarter 3</option>
                        <option value="q4">Quarter 4</option>
                    </select>
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
                        <th style="width:40%">Kinder</th>
                        <th style="width:15%"><?php echo $kinderenglish?></th>
                        <th style="width:15%"><?php echo $kinderfilipino?></th>
                        <th style="width:15%"><?php echo $kindernumeracy?></th>
                        <th style="width:15%"><?php echo $kinderbehavioral?></th>
                        <th style="width:15%"><?php echo $totalkinder?></th>
                    </tr>
                    <tr>
                        <th style="width:40%">Grade 1</th>
                        <th style="width:15%"><?php echo $oneenglish?></th>
                        <th style="width:15%"><?php echo $onefilipino?></th>
                        <th style="width:15%"><?php echo $onenumeracy?></th>
                        <th style="width:15%"><?php echo $onebehavioral?></th>
                        <th style="width:15%"><?php echo $totalone?></th>
                    </tr>
                    <tr>
                        <th style="width:40%">Grade 2</th>
                        <th style="width:15%"><?php echo $twoenglish?></th>
                        <th style="width:15%"><?php echo $twofilipino?></th>
                        <th style="width:15%"><?php echo $twonumeracy?></th>
                        <th style="width:15%"><?php echo $twobehavioral?></th>
                        <th style="width:15%"><?php echo $totaltwo?></th>
                    </tr>
                    <tr>
                        <th style="width:40%">Grade 3</th>
                        <th style="width:15%"><?php echo $threeenglish?></th>
                        <th style="width:15%"><?php echo $threefilipino?></th>
                        <th style="width:15%"><?php echo $threenumeracy?></th>
                        <th style="width:15%"><?php echo $threebehavioral?></th>
                        <th style="width:15%"><?php echo $totalthree?></th>
                    </tr>
                </tr>
            </tbody>
        </table>
    </section>
    </div>

    <script src="monitoring_tracking.js"></script>
    <script>
    function redirectToQuarter() {
        // Get the selected value from the dropdown
        var selectedQuarter = document.getElementById("topdown").value;

        // Check if a quarter is selected
        if (selectedQuarter !== "") {
            // Construct the URL for redirection
            var redirectURL = "<?php echo $currentFileName1.'_'?>" + selectedQuarter + ".php?employment_number=<?php echo isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value'; ?>";

            // Redirect to the selected quarter's PHP file
            window.location.href = redirectURL;
        }
    }
</script>
<script>
    function printPARsList() {
        window.print();
    }
</script>
</body>
</html>
