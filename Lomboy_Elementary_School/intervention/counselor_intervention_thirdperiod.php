<?php
include('../../database.php');
if (isset($_GET['classification']) && isset($_GET['lrn'])) {
    $classification = $_GET['classification'];
    $lrn = $_GET['lrn'];

    switch ($classification) {
        case 'Academic - Literacy in English':
            $table = 'academic_english';
            break;
        case 'Academic - Literacy in Filipino':
            $table = 'academic_filipino';
            break;
        case 'Academic - Numeracy':
            $table = 'academic_numeracy';
            break;
        case 'Behavioral':
            $table = 'behavioral';
            break;
        default:
            die("Invalid classification");
    }

    $sql = "SELECT gname, number FROM $table WHERE lrn = ? AND quarter = 1 AND school = 'Lomboy Elementary School'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $lrn);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $gname = $row['gname'];
        $number = $row['number'];
    }
    $stmt->close();
    $conn->close();
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $lrn = $_POST["lrn"];
    $fullname = $_POST["fullname"];
    $grade = $_POST["grade"];
    $classification = $_POST["classification"];
    $gname = $_POST["gname"];
    $number = $_POST["number"];
    $notes = $_POST["notes"];
    $intervention = $_POST["intervention"];
    $topic = $_POST["topic"];
    $advice = $_POST["advice"];
    $status = $_POST["status"];

    include('../../database.php');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "UPDATE behavioral SET 
            fullname = ?,
            gname = ?,
            number = ?,
            notes = ?,
            intervention = ?,
            topic = ?,
            advice = ?,
            status = ?
            WHERE lrn = ? AND quarter = '3' AND school = 'Lomboy Elementary School'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssss", $fullname,  $gname, $number, $notes, $intervention, $topic, $advice, $status, $lrn);
    
    if ($stmt->execute()) {
        if ($status == "Resolved") {
            $school = "Lomboy Elementary School";
            $sql_delete = "DELETE FROM behavioral WHERE lrn = ? AND quarter = '4' AND classification = ? AND school = ?";
            $stmt_delete = $conn->prepare($sql_delete);
            $stmt_delete->bind_param("sss", $lrn, $classification, $school);
            $stmt_delete->execute();
            $stmt_delete->close();
        }
        
        $sql_update = "UPDATE behavioral SET status = ? WHERE lrn = ? AND quarter IN ('4') AND school = 'Lomboy Elementary School'";
        $stmt_update = $conn->prepare($sql_update);
        $stmt_update->bind_param("ss", $status, $lrn);
        $stmt_update->execute();
        $stmt_update->close();
        $employment_number = $_GET['employment_number'];
        header('Location: counselor_intervention_thirdperiod_view.php?lrn=' . urlencode($lrn) . '&employment_number=' . urlencode($employment_number). '&classification=' . urlencode($classification));
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['lrn'])) {
        $lrn = $_GET['lrn'];

        include('../../database.php');
        $tables = ['academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'];
        $validQuarter = false;

        foreach ($tables as $table) {
            $sql = "SELECT COUNT(*) as count FROM $table WHERE lrn = '$lrn' AND quarter = '3' AND 
        gname IS NOT NULL AND gname <> '' AND 
        number IS NOT NULL AND number <> '' AND 
        notes IS NOT NULL AND notes <> '' AND 
        intervention IS NOT NULL AND intervention <> '' AND 
        topic IS NOT NULL AND topic <> '' AND 
        advice IS NOT NULL AND advice <> '' AND school = 'Lomboy Elementary School'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $count = $row["count"];

                if ($count > 0) {
                    $validQuarter = true;
                    break;
                }
            } else {
                echo "Error in query for table $table: " . $conn->error;
            }
        }

        if ($validQuarter) {
            $employment_number = $_GET['employment_number'];
            $classification = $_GET['classification'];
            header('Location: counselor_intervention_thirdperiod_view.php?lrn=' . urlencode($lrn) . '&employment_number=' . urlencode($employment_number). '&classification=' . urlencode($classification));
            exit();
        }

        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Counselor</title>
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
            width: 100px;
            height: 100px;
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
            top: 75px; 
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
            top: 75px;
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
            top: 94px; 
            width: 97.4%;
            z-index: 99; 
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

        .update {
            padding: 5px;
            border-radius: 10px;
            border: 2px solid #94FD99;
            background: #008705;
            color: #fff;
            margin-right: 15px;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25), 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        }

        .update:hover {
            background-color: #045c07;
            border: 2px solid #94FD99;
            color: #fff;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .main-container {
            width: 100%;
            height: calc(90vh - 140px);
            margin: 130px 27px 30px; 
            bottom: 0;
            background-color: #E2DFEE;
            opacity: 80%;
            overflow: auto;
            padding: 20px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            position: relative;
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
            flex: 0 0 calc(40% - 0px);
            margin-bottom: 20px;
        }

        .wide-column {
            flex: 0 0 calc(12% - 10px);
            margin-bottom: 20px;
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
        
        .full-width {
            flex: 0 0 calc(30%);
            margin-right: 0;
        }

        .half-width {
            flex: 0 0 calc(25%);
            margin-right: 0;
        }

        .containers {
            background-color: #190572;
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

        .first h3{
            color: #190572;
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
            text-align: left;
            border-radius: 5px;
        }

        select{
            border-radius: 2px;
            background: #F3F3F3;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
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

        h3{
            color: #FFFFFFE5;
            margin-left: 10px;
            margin: 0;
        }

        input{
            color:#130550;
            font-weight: 500;
            font-size: 15px;
            width: 400px;
            margin-left: 10px;
            border: none;
            background: none;
        }

        .right{
            color:#130550;
            font-weight: 500;
            font-size: 15px;
            width: 310px;
            border: none;
            background: none;
            margin-left: 10px;
        }

        .column-right h3, 
        .half-width h3{
            color: #190572;
        }

        .text-container {
            position: relative;
            width: 800px; 
            margin-left: 20px;
        }

        .text-container textarea {
            width: calc(100% - 5px);
            height: 200px;
            padding: 10px;
            font-size: 13px;
            border: 1px solid #190572;
            border-radius: 7px;
            background: rgba(25, 5, 114, 0.19);
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset, 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            margin-bottom: 10px;
            margin: 0 auto;
            line-height: 1.5; 
            resize: none;
        }

        .text-container textarea::placeholder {
            color: #190572;
            font-weight: 900;
            letter-spacing: 2px;
            font-family: 'Darker Grotesque', sans-serif;
            justify-content: center;
            background-color: rgba(255, 255, 255, 0.90); 
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            padding: 5px;
            width: fit-content;
            border-radius: 7px;
        }

        .text-container div {
            margin: 0;
        }
    
        .ints{
            margin-top: 20px;
        }
    
        .wide-columns .text-container {
            width: 530px; 
            margin-left: auto;
        }

        .editable-container {
            position: relative; 
            display: flex;
            align-items: center;
        }

        .editable-container h3 {
            margin: 0;
        }

        .editable-icon {
            position: absolute; 
            right: 0; 
            margin: 0; 
            cursor: pointer;
        }



        
    </style>
</head>
<body>

    <header>
        <div class="container">
            <div class="header-content">
                <img src="../../img/logo.png" class="logs">
                <h4>E.D.G.E | P.A.R. Early Detection and Guidance for Education</h4>
            </div>
        </div>
    </header>


    <form action="" method="POST" class="form-container">
    <div class="top-container">
        <div class="back-button">
        <a href="../guidance_dashboard/guidance_dashboard_q3.php?employment_number=<?php echo isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value'; ?>" class="back-icon"><i class='bx bx-chevron-left'></i></a>
        </div>
        <div class="school">
            <h3>Lomboy Elementary School</h3>
        </div>
        <button class="update" name="update">Update Record</button>
    </div>
    <div class="main-container">
        <div class="row">
            <div class="column">
                <div class="containers first">
                    <h3>S.Y. 2023 - 2024</h3>
                </div>
            </div>
            <div class="column">
                <div class="containers second" style="display: none;">
                <button style="background:transparent; border: none"><h3><i class='bx bx-printer' ></i>Print Reports</h3></button>
                </div>
            </div>
            <div class="column column-left">
                <div class="containers third" style="background-color: #190572;">
                    <h3 style="margin-left:10px">Q1 P.A.R. Status</h3>
                </div>
            </div>
            <div class="column half-width">
                    <select id="topdown" name="status" class="containers first">
                        <option value="Pending">Pending</option>
                        <option value="On-Going">On-going</option>
                        <option value="Resolved">Resolved</option>
                        <option value="Unresolved">Unresolved</option>
                    </select>
            </div>
        </div>


        <div class="row">
            <div class="column" >
                <div class="containers" style="background-color: #190572">
                    <h3 style="margin-left:10px">LRN</h3>
                </div>
            </div>
            <div class="column column-right">
                <div class="containers" style="background-color: #F3F3F3;">
                <input type="text" name="lrn" id="lrn" value="<?= isset($lrn) ? htmlspecialchars($lrn) : ''; ?>" readonly>
                </div>
            </div>
            <div class="column column-left">
                <div class="containers" style="background-color: #190572;">
                    <h3 style="margin-left:10px">Grade & Section</h3>
                </div>
            </div>
            <div class="column half-width">
                <div class="containers" style="background-color: #F3F3F3; ">
                <input type="text" name="grade" class="right" id="grade" value="<?= isset($grade) ? htmlspecialchars($grade . ' - ' . $section) : ''; ?>" readonly>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="column">
                <div class="containers" style="background-color: #190572;">
                    <h3 style="margin-left:10px">Pupil's Name</h3>
                </div>
            </div>
            <div class="column column-right">
                <div class="containers" style="background-color: #F3F3F3;">
                <input type="text" name="fullname" id="fullname" value="<?= isset($fullname) ? htmlspecialchars($fullname) : ''; ?>" readonly>

                </div>
            </div>
            <div class="column column-left">
                <div class="containers" style="background-color: #190572;">
                    <h3 style="margin-left:10px">Identification</h3>
                </div>
            </div>
            <div class="column half-width">
                <div class="containers" style="background-color: #F3F3F3;">
                <input type="text" name="classification" id="classification" class="right" value="<?= isset($classification) ? htmlspecialchars($classification) : ''; ?>" readonly>
                </div>
            </div>
        </div>

        
        <div class="row">
            <div class="column">
                <div class="containers" style="background-color: #190572;">
                    <h3 style="margin-left:10px">Guardian Name</h3>
                </div>
            </div>
            <div class="column column-right">
                <div class="containers editable-container" style="background-color: #F3F3F3;">
                    <input type="text" name="gname" id="identification" value="" placeholder=" ">
                </div>
            </div>
            <div class="column column-left">
                <div class="containers" style="background-color: #190572;">
                    <h3 style="margin-left:10px">Contact Number</h3>
                </div>
            </div>
            <div class="column half-width">
                <div class="containers editable-container" style="background-color: #F3F3F3;">
                    <input type="text" name="number" id="identification" value="" placeholder=" " class="right">
                </div>
            </div>
        </div>

        <div class="row ints">
            <div class="column">
                <div class="text-container">
                    <textarea class="editable-text" name="notes" id="notes" placeholder="Counselor's Notes"></textarea>                
                </div>
            </div>
            <div class="column wide-columns">
                <div class="text-container">
                    <textarea class="editable-text" name="topic" id="topic" placeholder="Topic/Matter"></textarea>                
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="column">
                <div class="text-container">
                    <textarea class="editable-text" name="intervention" id="intervention" placeholder="Intervention"></textarea>                
                </div>
            </div>
            <div class="column wide-columns">
                <div class="text-container">
                    <textarea class="editable-text" name="advice" id="advice" placeholder="Advice"></textarea>                
                </div>
            </div>
        </div>
    </div>
    </form>

    <script src="counselor_intervention.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Function to get URL parameter by name
        function getUrlParameter(name) {
            name = name.replace(/[[]/, '\\[').replace(/[\]]/, '\\]');
            var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
            var results = regex.exec(location.search);
            return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
        }

        // Fetch parameters from URL
        var lrnFromURL = getUrlParameter('lrn');
        var fullnameFromURL = getUrlParameter('fullname');
        var classificationFromURL = getUrlParameter('classification');
        var gradeFromURL = getUrlParameter('grade');
        var sectionFromURL = getUrlParameter('section');

        // Set values in their respective input fields
        if (lrnFromURL) {
            var lrnInput = document.getElementById('lrn');
            lrnInput.value = lrnFromURL;
        }

        if (fullnameFromURL) {
            var fullnameInput = document.getElementById('fullname');
            fullnameInput.value = fullnameFromURL;
        }

        if (classificationFromURL) {
            var classificationInput = document.getElementById('classification');
            classificationInput.value = classificationFromURL.trim(); // Remove leading and trailing spaces
        }

        if (gradeFromURL || sectionFromURL) {
            var gradeSectionInput = document.getElementById('grade');
            var combinedGradeSection = (gradeFromURL ? gradeFromURL : '') + (sectionFromURL ? ' - ' + sectionFromURL : '');
            gradeSectionInput.value = combinedGradeSection.trim(); // Remove leading and trailing spaces
        }
    });
</script>
 
</body>
</html>
