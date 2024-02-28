<?php
$currentFileName = basename($_SERVER["SCRIPT_FILENAME"], '.php');
$currentFileName1 = basename($_SERVER["SCRIPT_FILENAME"]);
include("../database.php");
$filenameWithoutExtension = pathinfo($currentFileName, PATHINFO_FILENAME);
$words = explode('_', $filenameWithoutExtension);

if (count($words) >= 4) {
    $secondWord = $words[1];
    $fourthWord = $words[3];
    $sql = "SELECT employment_number, fullname FROM adviser WHERE grade = '$secondWord' AND section = '$fourthWord'";
    $result1 = $conn->query($sql);
    $result2 = $conn->query($sql);
} 
?>
<?php
include('../database.php');
$filename = basename(__FILE__, '.php');
$words = explode('_', $filename);
$secondWord = $words[1];
$fourthWord = $words[3];
$tables = ['academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'];
$count = 0;
foreach ($tables as $table) {
    $sql = "SELECT COUNT(*) AS count FROM $table WHERE grade = '$secondWord' AND section = '$fourthWord'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $count += $row['count'];
        }
    }
}
$conn->close();
?>

<?php
    include('../database.php');

    // Get the current PHP filename without the extension
    $currentFile = pathinfo(__FILE__, PATHINFO_FILENAME);

    // Remove the ".php" extension
    $currentFileWithoutExtension = str_replace('.php', '', $currentFile);

    // Explode the filename into an array of words
    $words = explode('_', $currentFileWithoutExtension);

    // Initialize variables for grade and section
    $grade = "";
    $section = "";

    // Check if there are at least 4 words
    if (count($words) >= 4) {
        // Get the 2nd and 4th words
        $grade = $words[1];
        $section = $words[3];

        // Initialize an array to store the results
        $results = array();

        // Perform query on academic_english table
        $results[] = fetchTable($conn, "academic_english", $grade, $section);

        // Perform query on academic_filipino table
        $results[] = fetchTable($conn, "academic_filipino", $grade, $section);

        // Perform query on academic_numeracy table
        $results[] = fetchTable($conn, "academic_numeracy", $grade, $section);

        // Perform query on behavioral table
        $results[] = fetchTable($conn, "behavioral", $grade, $section);

        // Close the connection
        $conn->close();
    } else {
        echo "Not enough words in the filename.";
    }

    // Function to fetch data from a table
    function fetchTable($conn, $tableName, $grade, $section) {
        // Prepare and execute the SQL query
        $sql = "SELECT lrn, fullname, classification FROM $tableName WHERE grade = ? AND section = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $grade, $section);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if there are any results
        if ($result->num_rows > 0) {
            // Return an array containing the table name and the fetched data
            $tableData = array();
            while ($row = $result->fetch_assoc()) {
                $tableData[] = $row;
            }

            return array($tableName, $tableData);
        } else {
            return null;
        }

        // Close the statement
        $stmt->close();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Adviser</title>
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
            width: 100px;
            height: 100px;
            margin: 0 auto 20px;
            background-image: url('img/logo.png'); 
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

        .top-container {
            height: 42px; 
            background-color: #0C052F7A;
            position: fixed;
            top: 100px; 
            width: 97.4%;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .back-button {
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
        }

        .back-icon {
            font-size: 2rem;
            color: #fff;
            text-decoration: none;
            margin-right: 10px;
        }

        .school {
            border-radius: 5px;
            text-decoration: none;
            color: #fff;
            margin-right: auto;
        }

        .school h3{
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
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
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
            flex: 0 0 calc(38% - 7px);
            margin-bottom: 20px;
            margin-top: 10px;
        }

        .wide-column {
            flex: 0 0 calc(16% - 7px);
            margin-bottom: 20px;
            margin-top: 10px;
        }

        .wide-columns .containers, 
        .wide-column .containers{
            background-color: #190572;
            padding: .5px;
        }
        

        .column-right {
            flex: 0 0 calc(30%);
            margin-right: 0;
            margin-right: auto; 
        }

        .column-left {
            flex: 0 0 calc(15%);
            margin-left: 0;
            margin-left: auto; 
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
        }

        .containers {
            background-color: #3498db;
            padding: .5px;
        }

        .first{
            border-radius: 3px;
            border: 1px solid #190572;
            background: #FBFBFB;
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
            padding: 5px;
        }

        .search-input {
            border-radius: 5px;
            border: none;
            outline: none;
            width: 80%;
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

        tr:nth-child(odd){
            background-color: rgb(242, 242, 244);
        }

        tr:nth-child(even){
            background-color: #b7b7b7;
        }
        .containers h3{
            color: #FFF;
        }
        .act button {
        background-color: #008705;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        }

        .act button:hover {
            background-color: #CCFF00;
            color: #070000;
            font-weight: bold;
        }
        .sch h1 {
            color: #FFFFFF;
        }

        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #FFEEEE;
            border: 1px solid #FFCDCD;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 14px;
        }
        
        .popup h2 {
            font-size: larger;
            color: #190572;
            font-size: 22px;
            margin-bottom: 20px;
        }
        
        .popup .row {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }
        
        .popup .containerss {
            flex-basis: 45%;
            margin-top: 10px;
            padding: 15px;
            text-align: center;
            margin-right: 5px;
            margin-left: 5px;
            margin-bottom: 15px;
            width: 300px;
            height: 200px;
            position: relative;
            border-radius: 10px;
            border: 1px solid #190572;
            background: rgba(25, 5, 114, 0.33);
        }
        
        .close-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
      
          .containerss p {
            font-size: 100px;
            text-align: center;
            justify-content: center;
            margin-top: 20px;
            color: #190572;
            text-decoration: none;
          }

          .plus-button {
            position: absolute;
            bottom: 40px; 
            right: 30px; 
        }

        .plus-button i{
            font-size: 20px;
        }

        .add-button {
            background-color: #130550;
            color: #fff;
            border: none;
            border-radius: 50%;
            padding: 15px;
            cursor: pointer;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            transition: background-color 0.3s;
        }

        .add-button:hover {
            background-color: #ddd;
            color: #190572;
        }


        .main-containers {
            width: 100%;
            height: calc(100vh - 140px);
            margin: 20px;
            margin-top: 80px;
            bottom: 0;
            background-color: #E2DFEE;
            overflow: auto;
            padding: 20px;
            border-radius: 20px;
            z-index: 2;
        }

        .rows {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .columns input[type="text"],
        .columns,
        input[type="date"] {
            flex: 1;
            padding: 5px;
            border-radius: 3px;
            margin-right: 5px;
        }
        input[type="text"],
        input[type="date"],
        .columns input[type="text"],
        select{
            border: none;
        }

        select option[value="one"]{
            padding-left: 10px;
            padding-right: 10px;
        }

        .text-field {
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
        }

        .classification{
            padding: 5px;
        }

        .rows > :first-child,
        .rows > :nth-child(3) {
            flex: 0 0 11.5rem; 
            text-align: center;
            justify-content: center;
            background-color: #190572;
            color: #FFFFFF;
            font-weight: 900;
        }

        .rows > :nth-child(2) {
            flex: 0 0 35rem; 
            background-color: #F3F3F3;
            color: #190572;
            font-weight: 700;
            justify-content: center;
        }

        .rows > :nth-child(4) {
            flex: 0 0 10rem; 
            background-color: #F3F3F3;
            color: #190572;
            font-weight: 700;
            justify-content: center;
        }

        .rows:nth-child(3) > :nth-child(2),
        .rows:nth-child(3) > :nth-child(4) {
            flex: 0 0 15rem; 
            background-color: #F3F3F3;
            color: #190572;
            font-weight: 700;
            justify-content: center;
        }

        .rows:nth-child(2) > :nth-child(4){
            flex: 0 0 10.5rem; 
        }

        .rows:nth-child(3) > :nth-child(5){
            flex: 0 0 13.5rem;
            background-color: #F3F3F3;
            color: #190572;
            font-weight: 700;
            justify-content: center;
        }

        .text-container {
            position: relative;
            width: 73rem; 
        }

        .editable-text {
            width: calc(100% - 10px);
            height: 200px;
            padding: 10px;
            font-size: 13px;
            border: 1px solid #190572;
            border-radius: 7px;
            background: rgba(25, 5, 114, 0.19);
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset, 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            margin-bottom: 10px;
            margin: 0 auto;
        }

        .editable-text::before {
            content: attr(placeholder);
            position: absolute;
            top: 15px;
            left: 15px;
            color: #190572;
            font-weight: bold;
            letter-spacing: 2px;
            pointer-events: none;
            z-index: 1;
            border-radius: 7px;
            background: rgba(255, 255, 255, 0.90);
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            width: fit-content;
            padding: 5px;

        }

        .editable-text.content-entered::before {
            display: none;
        }

        .text-container div {
            margin: 0;
        }
    
        .ints{
            margin-top: 20px;
        }
    
        .formatting-buttons {
            position: absolute;
            bottom: 5px;
            right: 5px;
            display: flex;
        }
    
        .formatting-buttons button {
            background-color: #b3adcb;
            color:#190572;
            font-weight: bold;
            border: 1px solid #190572;
            padding: 5px 10px;
            margin-left: 2px;
            border-radius: 3px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
    
        .formatting-buttons button:hover {
            background-color: #190572;
            color: #ddd;
        }

        .add-buttons {
            width: 100%;
            background-color: #190572;
            color: #fff;
            font-weight: bold;
            border: none;
            padding: 10px 0;
            margin-top: 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .add-buttons:hover {
            background-color: #130550;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); 
            z-index: 1; 
            display: none;
        }

        .columns input[type="text"]{
            width: 90%;
        }

        .lrn-search{
            cursor: pointer;
            margin-left: 5px;
        }

        .lrn-search:hover{
            font-weight: bold;
            color:#2206A0;
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

    <div class="top-container">
        <div class="back-button">
            <a href="../login/Login.php" class="back-icon"><i class='bx bx-chevron-left'></i></a>
        </div>
        <div class="school">
            <h3>LASIP GRANDE ELEMENTARY SCHOOL</h3>
        </div>
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
            <div class="column">
                <div class="containers second">
                    <h3><i class='bx bx-printer' ></i>Print P.A.Rs List</h3>
                </div>
            </div>
            <div class="column full-width">
                <div class="column third-column">
                    <div class="search-box">
                        <input type="text" class="search-input" placeholder="Search Pupil's Name">
                        <i class='bx bx-search search-icon'></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="column" >
                <div class="containers" style="background-color: #190572">
                    <h3 style="margin-left:7px">Employee Number</h3>
                </div>
            </div>
            <?php
            if ($result1->num_rows > 0) {
                // Get the data of the first row
                $row = $result1->fetch_assoc();
                $employment_number = $row["employment_number"];
                echo "<div class=\"column column-right\">
                <div class=\"containers\" style=\"background-color: #F3F3F3;\">
                    <h3 style=\"color: #190572; margin-left:7px\">$employment_number</h3>
                </div>
            </div>";
            }
            ?>

            <div class="column column-left">
                <div class="containers" style="background-color: #190572;">
                    <h3 style="margin-left:7px">Grade and Section</h3>
                </div>
            </div>
            <div class="column half-width">
                <div class="containers" style="background-color: #F3F3F3;">
                    <?php 
                        $capitalizedSecondWord = ucfirst($secondWord);
                        echo '<h3 style="color: #190572; margin-left:7px">' . $capitalizedSecondWord . '&nbsp;&nbsp;&nbsp;' . $fourthWord . '</h3>';
                    ?>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="column">
                <div class="containers" style="background-color: #190572;">
                    <h3 style="margin-left:7px">Adviser</h3>
                </div>
            </div>
            <?php
            if ($result2->num_rows > 0) {
                $row = $result2->fetch_assoc();
                $fullname = $row["fullname"];
                echo "<div class=\"column column-right\">
                <div class=\"containers\" style=\"background-color: #F3F3F3;\">
                    <h3 style=\"color: #190572; margin-left:7px\">$fullname</h3>
                </div>
            </div>";
            }
            ?>


            <div class="column column-left">
                <div class="containers" style="background-color: #190572;">
                    <h3 style="margin-left:7px">Total Students</h3>
                </div>
            </div>
            <div class="column half-width">
                <div class="containers" style="background-color: #F3F3F3;">
                    <h3 style="color: #190572; margin-left:7px"><?php echo $count ?></h3>
                </div>
            </div>
        </div>


        <div class="wide-row">
            <div class="wide-column">
                <div class="containers">
                    <h3 style="padding: 7px;">LRN</h3>
                </div>
            </div>
            <div class="wide-columns">
                <div class="containers">
                    <h3 style="padding: 7px;">Pupil's Name </h3>
                </div>
            </div>
            <div class="wide-column">
                <div class="containers">
                    <h3 style="padding: 7px;">P.A.R. Identification<i class='bx bx-filter-alt'; id="star-filter-icon"></i></h3>
                </div>
            </div>

            </div> <div class="wide-column">
                <div class="containers">
                    <h3 style="padding: 7px;">Grade & Section</h3>
                </div>
            </div>

            <div class="wide-column">
                <div class="containers">
                    <h3 style="padding: 7px;">Status <i class='bx bx-filter-alt'></i></h3>
                </div>
            </div>
            <div class="wide-column">
                <div class="containers">
                    <h3 style="padding: 7px;">Action</h3>
                </div>
            </div>
        </div>

        <table border="0" >
        <?php
foreach ($results as $tableResult) {
    if ($tableResult) {
        list($tableName, $tableData) = $tableResult;
        foreach ($tableData as $row) {
            echo "<tr class='sheshable'>
                    <th style='width:15%'>{$row['lrn']}</th>
                    <th style='width:35%'>{$row['fullname']}</th>
                    <th style='width:15%'>{$row['classification']}</th>
                    <th style='width:15%'>NA</th>
                    <th style='width:15%' class='act'><button class='updateRecordButton'>UPDATE RECORD</button></th>
                  </tr>";
        }
    }
}
?>
        </table>


        <div class="plus-button">
            <a href="../add_student_form/<?php echo $currentFileName1?>"> <button id="addRecordButton" class="add-button"><i class='bx bx-plus'></i></button></a>
        </div>

    <div class="popup" id="popup" style="display: none;">
        <i class='bx bx-x-circle close-icon' onclick="closePopup()"></i>
        <h2>SELECT RECORD TO VIEW / UPDATE</h2>
      
        <div class="row">
        <a href="../intervention/adviser_intervention_firstperiod.php"> <div class="containerss" id="container1" >
          <p>Q1</p> 
          </div> </a>
      
        <a href="../intervention/adviser_intervention_secondperiod.php">  <div class="containerss" id="container2">
            <p>Q2</p>
          </div> </a>
        </div>
      
        <div class="row">
        <a href="../intervention/adviser_intervention_thirdperiod.php">  <div class="containerss" id="container3">
            <p>Q3</p> 
          </div></a>
      
        <a href="../intervention/adviser_intervention_fourthperiod.php"> <div class="containerss" id="container4">
         <p>Q4</p>
          </div></a>
        </div>
      
      </div>

    <script src="adviserdashboard.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        function showPopup() {
            var popup = document.getElementById('popup');
            popup.style.display = 'flex';
            popup.style.position = 'fixed';
            popup.style.top = '12%';
            popup.style.left = '50%';
            popup.style.transform = 'translateX(-50%)';
            popup.style.zIndex = '1';
        }

        function closePopup() {
            var popup = document.getElementById('popup');
            popup.style.display = 'none';
        }

        var updateRecordButtons = document.querySelectorAll('.updateRecordButton');

            updateRecordButtons.forEach(function(button) {
                button.addEventListener('click', showPopup);
            });

        var closeIcon = document.querySelector('.close-icon');
        closeIcon.addEventListener('click', closePopup);

    });

    </script>
 
</body>
</html>
