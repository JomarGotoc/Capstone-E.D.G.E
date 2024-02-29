<?php
    include('../database.php');
    $english = 0;
    $filipino = 0;
    $numeracy = 0;
    $behavioral = 0;
    $resolvedEnglish = 0;
    $resolvedFilipino = 0;
    $resolvedNumeracy = 0;
    $resolvedBehavioral = 0;

    $query = "SELECT identification, status, COUNT(*) as count FROM adviser_intervention_first_period
            WHERE identification IN ('Academic - Literacy in English', 'Academic - Literacy in Filipino', 'Academic - Numeracy', 'Behavioral')
            GROUP BY identification, status";

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            switch ($row["identification"]) {
                case 'Academic - Literacy in English':
                    $english += $row["count"];
                    if ($row["status"] === 'Resolved') {
                        $resolvedEnglish += $row["count"];
                    }
                    break;
                case 'Academic - Literacy in Filipino':
                    $filipino += $row["count"];
                    if ($row["status"] === 'Resolved') {
                        $resolvedFilipino += $row["count"];
                    }
                    break;
                case 'Academic - Numeracy':
                    $numeracy += $row["count"];
                    if ($row["status"] === 'Resolved') {
                        $resolvedNumeracy += $row["count"];
                    }
                    break;
                case 'Behavioral':
                    $behavioral += $row["count"];
                    if ($row["status"] === 'Resolved') {
                        $resolvedBehavioral += $row["count"];
                    }
                    break;
            }
        }
    }
?>
<?php
    include('../database.php');
    $english2 = 0;
    $filipino2 = 0;
    $numeracy2 = 0;
    $behavioral2 = 0;
    $resolvedEnglish2 = 0;
    $resolvedFilipino2 = 0;
    $resolvedNumeracy2 = 0;
    $resolvedBehavioral2 = 0;

    $query = "SELECT identification, status, COUNT(*) as count FROM adviser_intervention_second_period
            WHERE identification IN ('Academic - Literacy in English', 'Academic - Literacy in Filipino', 'Academic - Numeracy', 'Behavioral')
            GROUP BY identification, status";

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            switch ($row["identification"]) {
                case 'Academic - Literacy in English':
                    $english2 += $row["count"];
                    if ($row["status"] === 'Resolved') {
                        $resolvedEnglish2 += $row["count"];
                    }
                    break;
                case 'Academic - Literacy in Filipino':
                    $filipino2 += $row["count"];
                    if ($row["status"] === 'Resolved') {
                        $resolvedFilipino2 += $row["count"];
                    }
                    break;
                case 'Academic - Numeracy':
                    $numeracy2 += $row["count"];
                    if ($row["status"] === 'Resolved') {
                        $resolvedNumeracy2 += $row["count"];
                    }
                    break;
                case 'Behavioral':
                    $behavioral2 += $row["count"];
                    if ($row["status"] === 'Resolved') {
                        $resolvedBehavioral2 += $row["count"];
                    }
                    break;
            }
        }
    }
?>
<?php
    include('../database.php');
    $english3 = 0;
    $filipino3 = 0;
    $numeracy3 = 0;
    $behavioral3 = 0;
    $resolvedEnglish3 = 0;
    $resolvedFilipino3 = 0;
    $resolvedNumeracy3 = 0;
    $resolvedBehavioral3 = 0;

    $query = "SELECT identification, status, COUNT(*) as count FROM adviser_intervention_third_period
            WHERE identification IN ('Academic - Literacy in English', 'Academic - Literacy in Filipino', 'Academic - Numeracy', 'Behavioral')
            GROUP BY identification, status";

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            switch ($row["identification"]) {
                case 'Academic - Literacy in English':
                    $english3 += $row["count"];
                    if ($row["status"] === 'Resolved') {
                        $resolvedEnglish3 += $row["count"];
                    }
                    break;
                case 'Academic - Literacy in Filipino':
                    $filipino3 += $row["count"];
                    if ($row["status"] === 'Resolved') {
                        $resolvedFilipino3 += $row["count"];
                    }
                    break;
                case 'Academic - Numeracy':
                    $numeracy3 += $row["count"];
                    if ($row["status"] === 'Resolved') {
                        $resolvedNumeracy3 += $row["count"];
                    }
                    break;
                case 'Behavioral':
                    $behavioral3 += $row["count"];
                    if ($row["status"] === 'Resolved') {
                        $resolvedBehavioral3 += $row["count"];
                    }
                    break;
            }
        }
    }
?>
<?php
    include('../database.php');
    $english4 = 0;
    $filipino4 = 0;
    $numeracy4 = 0;
    $behavioral4 = 0;
    $resolvedEnglish4 = 0;
    $resolvedFilipino4 = 0;
    $resolvedNumeracy4 = 0;
    $resolvedBehavioral4 = 0;

    $query = "SELECT identification, status, COUNT(*) as count FROM adviser_intervention_fourth_period
            WHERE identification IN ('Academic - Literacy in English', 'Academic - Literacy in Filipino', 'Academic - Numeracy', 'Behavioral')
            GROUP BY identification, status";

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            switch ($row["identification"]) {
                case 'Academic - Literacy in English':
                    $english4 += $row["count"];
                    if ($row["status"] === 'Resolved') {
                        $resolvedEnglish4 += $row["count"];
                    }
                    break;
                case 'Academic - Literacy in Filipino':
                    $filipino4 += $row["count"];
                    if ($row["status"] === 'Resolved') {
                        $resolvedFilipino4 += $row["count"];
                    }
                    break;
                case 'Academic - Numeracy':
                    $numeracy4 += $row["count"];
                    if ($row["status"] === 'Resolved') {
                        $resolvedNumeracy4 += $row["count"];
                    }
                    break;
                case 'Behavioral':
                    $behavioral4 += $row["count"];
                    if ($row["status"] === 'Resolved') {
                        $resolvedBehavioral4 += $row["count"];
                    }
                    break;
            }
        }
    }
?>
<?php
include('../database.php');
$tables = array(
    'adviser_intervention_first_period',
    'adviser_intervention_second_period',
    'adviser_intervention_third_period',
    'adviser_intervention_fourth_period'
);

$totalEnglish = 0;
$totalFilipino = 0;
$totalNumeracy = 0;
$totalBehavioral = 0;

$totalResolvedEnglish = 0;
$totalResolvedFilipino = 0;
$totalResolvedNumeracy = 0;
$totalResolvedBehavioral = 0;

foreach ($tables as $table) {
    $sqlEnglish = "SELECT COUNT(*) as count FROM $table WHERE identification = 'academic - literacy in english'";
    $resultEnglish = $conn->query($sqlEnglish);
    if ($resultEnglish->num_rows > 0) {
        $rowEnglish = $resultEnglish->fetch_assoc();
        $totalEnglish += $rowEnglish['count'];
    }
    $sqlFilipino = "SELECT COUNT(*) as count FROM $table WHERE identification = 'academic - literacy in filipino'";
    $resultFilipino = $conn->query($sqlFilipino);
    if ($resultFilipino->num_rows > 0) {
        $rowFilipino = $resultFilipino->fetch_assoc();
        $totalFilipino += $rowFilipino['count'];
    }
    $sqlNumeracy = "SELECT COUNT(*) as count FROM $table WHERE identification = 'academic - numeracy'";
    $resultNumeracy = $conn->query($sqlNumeracy);
    if ($resultNumeracy->num_rows > 0) {
        $rowNumeracy = $resultNumeracy->fetch_assoc();
        $totalNumeracy += $rowNumeracy['count'];
    }
    $sqlBehavioral = "SELECT COUNT(*) as count FROM $table WHERE identification = 'behavioral'";
    $resultBehavioral = $conn->query($sqlBehavioral);
    if ($resultBehavioral->num_rows > 0) {
        $rowBehavioral = $resultBehavioral->fetch_assoc();
        $totalBehavioral += $rowBehavioral['count'];
    }
    $sqlResolvedEnglish = "SELECT COUNT(*) as count FROM $table WHERE identification = 'academic - literacy in english' AND status = 'resolved'";
    $resultResolvedEnglish = $conn->query($sqlResolvedEnglish);
    if ($resultResolvedEnglish->num_rows > 0) {
        $rowResolvedEnglish = $resultResolvedEnglish->fetch_assoc();
        $totalResolvedEnglish += $rowResolvedEnglish['count'];
    }
    $sqlResolvedFilipino = "SELECT COUNT(*) as count FROM $table WHERE identification = 'academic - literacy in filipino' AND status = 'resolved'";
    $resultResolvedFilipino = $conn->query($sqlResolvedFilipino);
    if ($resultResolvedFilipino->num_rows > 0) {
        $rowResolvedFilipino = $resultResolvedFilipino->fetch_assoc();
        $totalResolvedFilipino += $rowResolvedFilipino['count'];
    }
    $sqlResolvedNumeracy = "SELECT COUNT(*) as count FROM $table WHERE identification = 'academic - numeracy' AND status = 'resolved'";
    $resultResolvedNumeracy = $conn->query($sqlResolvedNumeracy);
    if ($resultResolvedNumeracy->num_rows > 0) {
        $rowResolvedNumeracy = $resultResolvedNumeracy->fetch_assoc();
        $totalResolvedNumeracy += $rowResolvedNumeracy['count'];
    }
    $sqlResolvedBehavioral = "SELECT COUNT(*) as count FROM $table WHERE identification = 'behavioral' AND status = 'resolved'";
    $resultResolvedBehavioral = $conn->query($sqlResolvedBehavioral);
    if ($resultResolvedBehavioral->num_rows > 0) {
        $rowResolvedBehavioral = $resultResolvedBehavioral->fetch_assoc();
        $totalResolvedBehavioral += $rowResolvedBehavioral['count'];
    }
}

$conn->close();
?>


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
                        <th style="width:9%"><?php echo $english ?></th>
                        <th style="width:9%"><?php echo $resolvedEnglish ?></th>
                        <th style="width:9%"><?php echo $english2 ?></th>
                        <th style="width:9%"><?php echo $resolvedEnglish2 ?></th>
                        <th style="width:9%"><?php echo $english3 ?></th>
                        <th style="width:9%"><?php echo $resolvedEnglish3 ?></th>
                        <th style="width:9%"><?php echo $english4 ?></th>
                        <th style="width:9%"><?php echo $resolvedEnglish4 ?></th>
                        <th style="width:9%"><?php echo $totalEnglish ?></th>
                        <th style="width:9%"><?php echo $totalResolvedEnglish ?></th>
                    </tr>
                    <tr>
                        <th style="width:10%">Academic - Literacy in Filipino</th>
                        <th style="width:9%"><?php echo $filipino ?></th>
                        <th style="width:9%"><?php echo $resolvedFilipino ?></th>
                        <th style="width:9%"><?php echo $filipino2 ?></th>
                        <th style="width:9%"><?php echo $resolvedFilipino2 ?></th>
                        <th style="width:9%"><?php echo $filipino3 ?></th>
                        <th style="width:9%"><?php echo $resolvedFilipino3 ?></th>
                        <th style="width:9%"><?php echo $filipino4 ?></th>
                        <th style="width:9%"><?php echo $resolvedFilipino4 ?></th>
                        <th style="width:9%"><?php echo $totalFilipino ?></th>
                        <th style="width:9%"><?php echo $totalResolvedFilipino ?></th>
                    </tr>
                    <tr>
                        <th style="width:10%">Academic - Numeracy</th>
                        <th style="width:9%"><?php echo $numeracy ?></th>
                        <th style="width:9%"><?php echo $resolvedNumeracy ?></th>
                        <th style="width:9%"><?php echo $numeracy2 ?></th>
                        <th style="width:9%"><?php echo $resolvedNumeracy2 ?></th>
                        <th style="width:9%"><?php echo $numeracy3 ?></th>
                        <th style="width:9%"><?php echo $resolvedFilipino3 ?></th>
                        <th style="width:9%"><?php echo $numeracy4 ?></th>
                        <th style="width:9%"><?php echo $resolvedNumeracy4 ?></th>
                        <th style="width:9%"><?php echo $totalNumeracy ?></th>
                        <th style="width:9%"><?php echo $totalResolvedNumeracy ?></th>
                    </tr>
                    <tr>
                        <th style="width:10%">Behavioral</th>
                        <th style="width:9%"><?php echo $behavioral ?></th>
                        <th style="width:9%"><?php echo $resolvedBehavioral ?></th>
                        <th style="width:9%"><?php echo $behavioral2 ?></th>
                        <th style="width:9%"><?php echo $resolvedBehavioral2 ?></th>
                        <th style="width:9%"><?php echo $behavioral3 ?></th>
                        <th style="width:9%"><?php echo $resolvedFilipino3 ?></th>
                        <th style="width:9%"><?php echo $behavioral4 ?></th>
                        <th style="width:9%"><?php echo $resolvedBehavioral4 ?></th>
                        <th style="width:9%"><?php echo $totalBehavioral ?></th>
                        <th style="width:9%"><?php echo $totalResolvedBehavioral ?></th>
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
