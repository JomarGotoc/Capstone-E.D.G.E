<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include "../../database.php";

    $phpFileName = basename(__FILE__, '.php');
    $phpFileName1 = basename(__FILE__,'.php');
    $phpFileName1 = $phpFileName1.'_q1.php';
    $tableName1 = strtolower($phpFileName);

    $fullname1 = $lrn = $grade = $section = "";
    $errorMsg1 = ""; // Initialize the error message variable

    // Check database connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit1"])) {
        $result = $conn->query("SHOW TABLES LIKE '$tableName1'");
        $tableExists = $result->num_rows > 0;

        if (!$tableExists) {
            $errorMsg1 = "No Student Found";
        } else {
            $lrn = $_POST["lrn"];

            $sql = "SELECT fullname, lrn, grade, section FROM $tableName1 WHERE lrn = ? AND school = 'Victoria Q. Zarate Elementary School'";
            $stmt = $conn->prepare($sql);

            if (!$stmt) {
                $errorMsg1 = "Error in SQL statement: " . $conn->error;
            } else {
                $stmt->bind_param("s", $lrn);
                $stmt->execute();
                $stmt->bind_result($fullname1, $fetchedLRN, $grade, $section);

                if ($stmt->fetch()) {
                } else {
                    $errorMsg1 = "No data found for LRN: $lrn";
                }

                $stmt->close();
            }
        }
    }

    $conn->close();
?>
<?php
    $errorMsg ="";
    if(isset($_POST['submit2'])){
        $lrn = $_POST['lrn'];
        $fullname = $_POST['fullname'];
        $grade = $_POST['grade'];
        $section = $_POST['section'];
        $date = $_POST['date'];
        $quarter = $_POST['quarter'];
        $classification = $_POST['classification'];
        $school = "Victoria Q. Zarate Elementary School";

        include('../../database.php');
        $status = 'Pending'; // Set the default status

        switch ($classification) {
            case 'Academic - Literacy in English':
                $sql = "INSERT INTO academic_english (lrn, fullname, grade, section, date, quarter, classification, status, school)
                        VALUES ('$lrn', '$fullname', '$grade', '$section', '$date', '$quarter', '$classification', '$status','$school')";
                break;

            case 'Academic - Literacy in Filipino':
                $sql = "INSERT INTO academic_filipino (lrn, fullname, grade, section, date, quarter, classification, status, school)
                        VALUES ('$lrn', '$fullname', '$grade', '$section', '$date', '$quarter', '$classification', '$status','$school')";
                break;

            case 'Academic - Numeracy':
                $sql = "INSERT INTO academic_numeracy (lrn, fullname, grade, section, date, quarter, classification, status, school)
                        VALUES ('$lrn', '$fullname', '$grade', '$section', '$date', '$quarter', '$classification', '$status','$school')";
                break;

            case 'Behavioral':
                $sql = "INSERT INTO behavioral (lrn, fullname, grade, section, date, quarter, classification, status,school)
                        VALUES ('$lrn', '$fullname', '$grade', '$section', '$date', '$quarter', '$classification', '$status','$school')";
                break;

            default:
                echo "Invalid classification";
                break;
        }

        if ($conn->query($sql) === TRUE) {
            $errorMsg =" Recorded Successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
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
            background: url(../../img/bg.png);
            background-size: cover;
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

        .row:nth-child(3) > :last-child {
            flex-direction: column; 
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
            top: 245px; 
            width: 82.7%;
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

        .main-container {
            width: 80%;
            height: fit-content;
            margin: 20px;
            margin-top: 125px;
            bottom: 0;
            background-color: #E2DFEE;
            overflow: auto;
            padding: 20px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .column input[type="text"]{
            width: 90%;
        }

        .column,
        input[type="date"] {
            flex: 1;
            padding: 5px;
            border-radius: 3px;
            margin-right: 5px;
        }

        input[type="text"],
        input[type="date"],
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

        .row > :first-child,
        .row > :nth-child(3) {
            flex: 0 0 11.5rem; 
            text-align: center;
            justify-content: center;
            background-color: #190572;
            color: #FFFFFF;
            font-weight: 900;
        }

        .row > :nth-child(2) {
            flex: 0 0 35rem; 
            background-color: #F3F3F3;
            color: #190572;
            font-weight: 700;
            justify-content: center;
        }

        .row > :nth-child(4) {
            flex: 0 0 10rem; 
            background-color: #F3F3F3;
            color: #190572;
            font-weight: 700;
            justify-content: center;
        }

        .row:nth-child(3) > :nth-child(2),
        .row:nth-child(3) > :nth-child(4) {
            flex: 0 0 15rem; 
            background-color: #F3F3F3;
            color: #190572;
            font-weight: 700;
            justify-content: center;
        }

        .row:nth-child(2) > :nth-child(4){
            flex: 0 0 10.5rem; 
        }

        .row:nth-child(3) > :nth-child(5){
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

        .add-button {
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

        .add-button:hover {
            background-color: #130550;
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
        .error-message {
            color: white;
            font-weight: bold;
            text-align: center;
            margin: 0 auto;
        }
        .error-message1 {
            color: red;
            font-weight: bold;
            text-align: center;
            margin: 0 auto;
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
                        <a href="../change_password/change_password.php">Change Password</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="top-container">
        <div class="back-button">
            <a href="../adviser_dashboard/<?php echo $phpFileName1?>?employment_number=<?php echo isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value'; ?>" class="back-icon"><i class='bx bx-chevron-left'></i></a>
        </div>
        <div class="error-message">
            <?php echo $errorMsg; ?>
            <div class="error-message1"><?php echo $errorMsg1; ?></div>
            
        </div>
    </div>   

    <form class="main-container" action=" " method="post" id="searchForm" >
                <div class="row">
                    <div class="column">LRN</div>
                    <div class="column">
                    <input type="text" class="column" placeholder="Learner's Reference Number" style="background:none; font-weight:bold;" name="lrn" id="lrn" value="<?php echo $lrn; ?>" >
                        <button type="submit" name="submit1" class="search-button" style="border: none; background-color: transparent; cursor: pointer;">
                            <i class='bx bx-search lrn-search' style="border: none;"></i>
                        </button>

                    </div>
                    <div class="column">Date Added</div>
                    <input type="date" class="date" name="date">
                </div>

                <div class="row">
                    <div class="column">Name</div>
                    <input type="text" class="column" placeholder="Full Name" name="fullname" id="fullname" value="<?php echo $fullname1; ?>" readonly>
                    <div class="column">Quarter</div>
                    <select class="classification column" name="quarter" >
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                    </select>
                </div>

                <div class="row">
                    <div class="column">Grade</div>
                    <input type="text" class="column" placeholder="Grade" name="grade" id="grade" value="<?php echo ucfirst($grade); ?>" readonly>
                    <div class="column">Section </div>
                    <input type="text" class="column" placeholder="Section" name="section" id="section" value="<?php echo ucfirst($section); ?>" readonly>
                    <select class="classification" name="classification">
                            <option value="Academic - Literacy in English">Academic - Literacy in English</option>
                            <option value="Academic - Literacy in Filipino">Academic - Literacy in Filipino</option>
                            <option value="Academic - Numeracy">Academic - Numeracy</option>
                            <option value="Behavioral">Behavioral</option>
                    </select>
                </div>

                <button class="add-button" name="submit2">Add Pupil At-Risk</button>
      </form>

    <script src="add_par.js"></script>

</body>
</html>