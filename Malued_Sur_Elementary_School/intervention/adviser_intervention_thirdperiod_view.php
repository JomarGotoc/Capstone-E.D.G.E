<?php
include('../../database.php');

// Initialize variables to store data
$fullname = $grade = $section = $gname = $number = $status = $notes = $intervention = $topic = $advice = '';

// Check if lrn and classification parameters are set in the URL
if (isset($_GET['lrn']) && isset($_GET['classification'])) {
    // Retrieve lrn and classification values from the URL
    $lrn = $_GET['lrn'];
    $classification = $_GET['classification'];

    // Query to fetch data from academic_english table
    $english_query = "SELECT fullname, grade, section, gname, number, status, notes, intervention, topic, advice FROM academic_english WHERE lrn = '$lrn' AND classification = '$classification' AND quarter = '3' AND school = 'Malued Sur Elementary School'";

    // Query to fetch data from academic_filipino table
    $filipino_query = "SELECT fullname, grade, section, gname, number, status, notes, intervention, topic, advice FROM academic_filipino WHERE lrn = '$lrn' AND classification = '$classification' AND quarter = '3' AND school = 'Malued Sur Elementary School'";

    // Query to fetch data from academic_numeracy table
    $numeracy_query = "SELECT fullname, grade, section, gname, number, status, notes, intervention, topic, advice FROM academic_numeracy WHERE lrn = '$lrn' AND classification = '$classification' AND quarter = '3' AND school = 'Malued Sur Elementary School'";

    // Query to fetch data from behavioral table
    $behavioral_query = "SELECT fullname, grade, section, gname, number, status, notes, intervention, topic, advice FROM behavioral WHERE lrn = '$lrn' AND classification = '$classification' AND quarter = '3' AND school = 'Malued Sur Elementary School'";

    // Execute the queries
    $english_result = $conn->query($english_query);
    $filipino_result = $conn->query($filipino_query);
    $numeracy_result = $conn->query($numeracy_query);
    $behavioral_result = $conn->query($behavioral_query);

    // Check if any of the queries returned results
    if ($english_result->num_rows > 0) {
        // Store data for academic_english table
        $english_row = $english_result->fetch_assoc();
        $fullname = $english_row["fullname"];
        $grade = $english_row["grade"];
        $section = $english_row["section"];
        $gname = $english_row["gname"];
        $number = $english_row["number"];
        $status = $english_row["status"];
        $notes = $english_row["notes"];
        $intervention = $english_row["intervention"];
        $topic = $english_row["topic"];
        $advice = $english_row["advice"];
    } elseif ($filipino_result->num_rows > 0) {
        // Store data for academic_filipino table
        $filipino_row = $filipino_result->fetch_assoc();
        $fullname = $filipino_row["fullname"];
        $grade = $filipino_row["grade"];
        $section = $filipino_row["section"];
        $gname = $filipino_row["gname"];
        $number = $filipino_row["number"];
        $status = $filipino_row["status"];
        $notes = $filipino_row["notes"];
        $intervention = $filipino_row["intervention"];
        $topic = $filipino_row["topic"];
        $advice = $filipino_row["advice"];
    } elseif ($numeracy_result->num_rows > 0) {
        // Store data for academic_numeracy table
        $numeracy_row = $numeracy_result->fetch_assoc();
        $fullname = $numeracy_row["fullname"];
        $grade = $numeracy_row["grade"];
        $section = $numeracy_row["section"];
        $gname = $numeracy_row["gname"];
        $number = $numeracy_row["number"];
        $status = $numeracy_row["status"];
        $notes = $numeracy_row["notes"];
        $intervention = $numeracy_row["intervention"];
        $topic = $numeracy_row["topic"];
        $advice = $numeracy_row["advice"];
    } elseif ($behavioral_result->num_rows > 0) {
        // Store data for behavioral table
        $behavioral_row = $behavioral_result->fetch_assoc();
        $fullname = $behavioral_row["fullname"];
        $grade = $behavioral_row["grade"];
        $section = $behavioral_row["section"];
        $gname = $behavioral_row["gname"];
        $number = $behavioral_row["number"];
        $status = $behavioral_row["status"];
        $notes = $behavioral_row["notes"];
        $intervention = $behavioral_row["intervention"];
        $topic = $behavioral_row["topic"];
        $advice = $behavioral_row["advice"];
    }
}

$conn->close();
?>


<?php
    if (isset($_GET['grade']) && isset($_GET['section']) && isset($_GET['employment_number'])) {
        $grade = $_GET['grade'];
        $section = $_GET['section'];
        $employment_number = $_GET['employment_number'];

        // Convert lowercase Roman numerals to uppercase
        $romanNumerals = ['i' => 'I', 'ii' => 'II', 'iii' => 'III'];
        $grade = strtolower($grade); // Ensure consistency for comparison
        if (array_key_exists($grade, $romanNumerals)) {
            $grade = $romanNumerals[$grade];
        }

        $path = "grade_{$grade}_section_{$section}_q1.php?employment_number=$employment_number";
    }
?>
<?php
if(isset($_POST['print'])) {
    $filename = basename($_SERVER['PHP_SELF']);
    $words = explode('_', $filename);
        
        $employment_number = isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value';
        $lrn = isset($_GET['lrn']) ? $_GET['lrn'] : 'default_value';
        $classification = isset($_GET['classification']) ? $_GET['classification'] : 'default_value';
        $filename1 = basename($_SERVER['PHP_SELF']);
        
        $redirect_url = "adviser_intervention_print.php?classification=$classification&lrn=$lrn&employment_number=$employment_number&filename=$filename1&quarter=3";
        
        header("Location: $redirect_url");
        exit();
    
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

        .lock {
            padding: 5px;
            color: #fff;
            letter-spacing: 2px;
            margin-right: 15px;
            padding: 3px;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25), 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
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
            margin-left: 4px;
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
            <a href="../adviser_dashboard/<?php echo $path ?>" class="back-icon"><i class='bx bx-chevron-left'></i></a>
        </div>
        <div class="school">
            <h3>Malued Sur Elementary School</h3>
        </div>
        <div class="lock"><i class='bx bx-lock-alt' ></i>View Only</div>
    </div>
    <div class="main-container">
        <div class="row">
            <div class="column">
                <div class="containers first">
                    <h3>S.Y. 2023 - 2024</h3>
                </div>
            </div>
            <div class="column">
            <form method="post">
        <div class="containers second">
            <button style="background: transparent; border: none;" name="print">
                <h3><i class='bx bx-printer'></i>Print P.A.Rs List</h3>
            </button>
        </div>
        </form>
            </div>
            <div class="column column-left">
                <div class="containers third" style="background-color: #190572;">
                    <h3 style="margin-left:10px">Q1 P.A.R. Status</h3>
                </div>
            </div>
            <div class="column half-width">
                <div class="containers" style="background-color: #F3F3F3;">
                    <input type="text" name="identification" id="identification" value="<?php echo $status ?>" placeholder=" " class="right" readonly>
                </div>
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
                    <input type="text" name="lrn" id="lrn" value="<?php echo $lrn ?>" placeholder=" " readonly>
                </div>
            </div>
            <div class="column column-left">
                <div class="containers" style="background-color: #190572;">
                    <h3 style="margin-left:10px">Grade & Section</h3>
                </div>
            </div>
            <div class="column half-width">
                <div class="containers" style="background-color: #F3F3F3; ">
                    <input type="text" name="grade&section" id="grade&section" value="<?php echo $grade.' - '. $section ?>" placeholder="" class="right" readonly>
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
                    <input type="text" name="name" id="name" value="<?php echo $fullname ?>" placeholder=" " readonly>
                </div>
            </div>
            <div class="column column-left">
                <div class="containers" style="background-color: #190572;">
                    <h3 style="margin-left:10px">Identification</h3>
                </div>
            </div>
            <div class="column half-width">
                <div class="containers" style="background-color: #F3F3F3;">
                    <input type="text" name="identification" id="identification" value="<?php echo $classification ?>" placeholder=" " class="right" readonly>
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
                    <input type="text" name="gname" id="gname" value="<?php echo $gname ?>" placeholder=" "readonly>
                    <i class='bx bx bx-check editable-icon' style=" cursor: pointer"></i>                
                </div>
            </div>
            <div class="column column-left">
                <div class="containers" style="background-color: #190572;">
                    <h3 style="margin-left:10px">Contact Number</h3>
                </div>
            </div>
            <div class="column half-width">
                <div class="containers editable-container" style="background-color: #F3F3F3;">
                    <input type="text" name="cnumber" id="cnumber" value="<?php echo $number ?>" placeholder=" " class="right" readonly>
                    <i class='bx bx bx-check editable-icon' style=" cursor: pointer"></i></div>
            </div>
        </div>

        <div class="row ints">
            <div class="column">
                <div class="text-container">
                    <textarea class="editable-text" id="notes" placeholder="Adviser's Notes" readonly><?php echo $notes ?></textarea >                
                </div>
            </div>
            <div class="column wide-columns">
                <div class="text-container">
                    <textarea class="editable-text" id="topic" placeholder="Topic/Matter" readonly><?php echo $topic ?></textarea >                
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="column">
                <div class="text-container">
                    <textarea class="editable-text" id="intervention" placeholder="Intervention" readonly><?php echo $intervention ?></textarea>                
                </div>
            </div>
            <div class="column wide-columns">
                <div class="text-container">
                    <textarea class="editable-text" id="advice" placeholder="Advice" readonly><?php echo $advice ?></textarea >                
                </div>
            </div>
        </div>
    </div>
    </form>
    <script>
    function printPARsList() {
        window.print();
    }
</script>
</body>
</html>
