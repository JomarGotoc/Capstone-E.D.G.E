<?php
    include('../../database.php');
    $currentFileName2 = basename(__FILE__,'_Q2.php');
    // Fetch data from the adviser table
    $sql = "SELECT grade, section, fullname FROM adviser Where school = 'Bliss Elementary School'";
    $result = $conn->query($sql);

    // Store the fetched data in an array
    $dataArray = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            // Concatenate "grade_" and "section_" to the values and store in $newvalue
            $newvalue = 'grade_' . $row['grade'] . '_section_' . $row['section'];

            include('../../database.php');
            $checkTableSql = "SHOW TABLES LIKE '$newvalue'";
            $tableExists = $conn->query($checkTableSql);

            // Display the number of LRN data found in the 3rd <th>
            $lrnCount = 0; // Initialize the count
            if ($tableExists->num_rows > 0) {
                $countQuery = "SELECT COUNT(*) AS lrn_count FROM $newvalue WHERE school = 'Bliss Elementary School'";
                $lrnResult = $conn->query($countQuery);

                if ($lrnResult->num_rows > 0) {
                    $lrnCountRow = $lrnResult->fetch_assoc();
                    $lrnCount = $lrnCountRow['lrn_count'];
                }
            }

            // Check matches in classifications table (in the 'classification' database)
            include('../../database.php'); // Include the connection to the 'classification' database

            $academicEnglishQuery = "SELECT COUNT(*) AS academic_english_count FROM academic_english WHERE grade = '{$row['grade']}' AND section = '{$row['section']}' AND quarter = 2 AND school = 'Bliss Elementary School'";
            $academicFilipinoQuery = "SELECT COUNT(*) AS academic_filipino_count FROM academic_filipino WHERE grade = '{$row['grade']}' AND section = '{$row['section']}' AND quarter = 2 AND school = 'Bliss Elementary School'";
            $academicNumeracyQuery = "SELECT COUNT(*) AS academic_numeracy_count FROM academic_numeracy WHERE grade = '{$row['grade']}' AND section = '{$row['section']}' AND quarter = 2 AND school = 'Bliss Elementary School'";
            $behavioralQuery = "SELECT COUNT(*) AS behavioral_count FROM behavioral WHERE grade = '{$row['grade']}' AND section = '{$row['section']}' AND quarter = 2 AND school = 'Bliss Elementary School'";

            $academicEnglishResult = $conn->query($academicEnglishQuery);
            $academicFilipinoResult = $conn->query($academicFilipinoQuery);
            $academicNumeracyResult = $conn->query($academicNumeracyQuery);
            $behavioralResult = $conn->query($behavioralQuery);

            $academicEnglishCount = ($academicEnglishResult->num_rows > 0) ? $academicEnglishResult->fetch_assoc()['academic_english_count'] : 0;
            $academicFilipinoCount = ($academicFilipinoResult->num_rows > 0) ? $academicFilipinoResult->fetch_assoc()['academic_filipino_count'] : 0;
            $academicNumeracyCount = ($academicNumeracyResult->num_rows > 0) ? $academicNumeracyResult->fetch_assoc()['academic_numeracy_count'] : 0;
            $behavioralCount = ($behavioralResult->num_rows > 0) ? $behavioralResult->fetch_assoc()['behavioral_count'] : 0;

            // Add counts to the row
            $row['newvalue'] = $newvalue;
            $row['lrn_count'] = $lrnCount;
            $row['academic_english_count'] = $academicEnglishCount;
            $row['academic_filipino_count'] = $academicFilipinoCount;
            $row['academic_numeracy_count'] = $academicNumeracyCount;
            $row['behavioral_count'] = $behavioralCount;

            $dataArray[] = $row;
        }
    }
    $conn->close();
?>
<?php
    include('../../database.php');

    // Define the tables
    $tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");

    // Initialize total count
    $totalpars = 0;
    $totalresolved = 0;

    // Iterate through tables and count rows with 'lrn' field and 'status' field
    foreach ($tables as $table) {
        // Count rows with 'lrn' field
        $sqlPars = "SELECT COUNT(*) as count FROM $table WHERE lrn IS NOT NULL AND quarter = 2 AND school = 'Bliss Elementary School'";
        $resultPars = $conn->query($sqlPars);

        if ($resultPars->num_rows > 0) {
            $rowPars = $resultPars->fetch_assoc();
            $totalpars += $rowPars['count'];
        }
        $sqlResolved = "SELECT COUNT(*) as count FROM $table WHERE status = 'resolved' AND quarter = 2 AND school = 'Bliss Elementary School'";
        $resultResolved = $conn->query($sqlResolved);

        if ($resultResolved->num_rows > 0) {
            $rowResolved = $resultResolved->fetch_assoc();
            $totalresolved += $rowResolved['count'];
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

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .wide-row {
            margin-top: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between; 
        }

        .column {
            flex: 0 0 calc(16.6667%);
            margin-bottom: 5px;
        }

        .wide-columns {
            flex: 0 0 calc(15% - 5px);
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
            border: none;
            font-weight: bold;
            font-size: 16px;
            text-align: left;
            letter-spacing: 1px;
        }

        
        #topdowns {
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
                        <a href="../change_password/change_password.php?employment_number=<?php echo isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value'; ?>">Change Password</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="navbar">
        <nav>
        <a href="Principal_tracking_reports_q1.php?employment_number=<?php echo isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value'; ?>" style="background:#F3F3F3; color:#130550" >Quarterly Reports</a>
        <a href="Principal_monitoring_reports_q1.php?employment_number=<?php echo isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value'; ?>">Report Summary</a>
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
            <div class="column">
            <div class="containers second">
    <button style="background: transparent; border: none;" onclick="printPARsList()">
        <h3><i class='bx bx-printer'></i>Print P.A.Rs List</h3>
    </button>
</div>
            </div>
            <div class="column full-width">
    <div class="column third-column" style="display:none">
    <div class="containers">
        <select id="topdown1" name="topdown" class="first" onchange="filterTable()">
            <option value="all">View All Grade Levels</option>
            <option value="Kinder">Kinder</option>
            <option value="Grade 1">Grade 1</option>
            <option value="Grade 2">Grade 2</option>
            <option value="Grade 3">Grade 3</option>
            <option value="Grade 4">Grade 4</option>
            <option value="Grade 5">Grade 5</option>
            <option value="Grade 6">Grade 6</option>
        </select>
    </div>
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
                    <h3 style="margin-left: 7px">Dagupan City Division Elementary Schools</h3>
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
                        <option value="q1">Quarter 1</option>
                        <option value="q2">Quarter 2</option>
                        <option value="q3">Quarter 3</option>
                        <option value="q4">Quarter 4</option>
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
        <div class="wide-row" style="margin-top:0">
            <div class="wide-columns">
                <div class="containers">
                    <h3>Grade & Section</h3>
                </div>
            </div>
            <div class="wide-columns">
                <div class="containers">
                    <h3>Section Adviser</h3>
                </div>
            </div>
            <div class="wide-column">
                <div class="containers">
                    <h3># of Students</h3>
                </div>
            </div>
            <div class="wide-column">
                <div class="containers">
                    <h3># of P.A.R</h3>
                </div>
            </div>
            <div class="wide-column">
                <div class="containers">
                    <h3>A - Literacy (E)</h3>
                </div>
            </div>
            <div class="wide-column">
                <div class="containers">
                    <h3>A - Literacy (F)</h3>
                </div>
            </div>
            <div class="wide-column">
                <div class="containers">
                    <h3>A - Numeracy</h3>
                </div>
            </div>
            <div class="wide-column">
                <div class="containers">
                    <h3>Behavioral</h3>
                </div>
            </div>
        </div>

        <table border="0" id="data-table">
        <?php foreach ($dataArray as $data) : ?>
        <tr>
            <th style="width:14.5%"><?php echo ucfirst($data['grade']). '&nbsp;&nbsp;' . ucfirst($data['section']); ?></th>
            <th style="width:14.5%"><?php echo ucwords($data['fullname']); ?></th>
            <th style="width:11.5%"><?php echo $data['lrn_count']; ?></th>
            <th style="width:11.5%"><?php echo $data['academic_english_count'] + $data['academic_filipino_count'] + $data['academic_numeracy_count'] + $data['behavioral_count']; ?></th>
            <th style="width:11.5%"><?php echo $data['academic_english_count']; ?></th>
            <th style="width:11.5%"><?php echo $data['academic_filipino_count']; ?></th>
            <th style="width:11.5%"><?php echo $data['academic_numeracy_count']; ?></th>
            <th style="width:11.5%"><?php echo $data['behavioral_count']; ?></th>
        </tr>
    <?php endforeach; ?>

            
        </table>
    </div>

    <script src="monitoring_tracking.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    function redirectToQuarter() {
        // Get the selected value from the dropdown
        var selectedQuarter = document.getElementById("topdown").value;

        // Check if a quarter is selected
        if (selectedQuarter !== "") {
            // Construct the URL for redirection
            var redirectURL = "<?php echo $currentFileName2.'_'?>" + selectedQuarter + ".php?employment_number=<?php echo isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value'; ?>";

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
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var table = document.getElementById("data-table");
        var tbody = table.querySelector("tbody");
        var rows = [].slice.call(tbody.querySelectorAll("tr"));

        rows.sort(function (a, b) {
            var gradeA = a.cells[0].textContent.trim().toLowerCase();
            var gradeB = b.cells[0].textContent.trim().toLowerCase();
            return gradeB.localeCompare(gradeA);
        });

        rows.forEach(function (row) {
            tbody.appendChild(row);
        });
    });
</script>
</body>
</html>
