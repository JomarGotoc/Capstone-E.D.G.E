<?php
include('../../database.php');

$currentFileName = basename(__FILE__, '.php');

$tableExistsQuery = "SHOW TABLES LIKE '$currentFileName'";
$tableExistsResult = $conn->query($tableExistsQuery);

$result = null; // Initialize $result outside the if condition

if ($tableExistsResult->num_rows > 0) {
    $fetchQuery = "SELECT lrn, fullname, gender FROM $currentFileName";
    $result = $conn->query($fetchQuery);
}

?>
<?php
$currentFileName = basename(__FILE__, '.php');
$words = explode('_', $currentFileName);

if (count($words) >= 4) {
    $grade = $words[1];
    $section = $words[3];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>School Administrator</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
            width: 70px;
            height: 70px;
            margin: 0 auto 20px;
            background-image: url('../../img/logo.png'); 
            background-size: cover;
        }
        
        h3 {
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
            width: 400px;
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
            height: 50px;
            width: 100%;
            position: fixed;
            top: 57px; 
        }

        nav {
            display: flex;
            align-items: center;
        }

        nav a {
            display: inline-block;
            padding: 14px 40px;
            text-decoration: none;
            color: FFFFFF;
            opacity: 100%;
        }

        nav a:hover {
            background-color:#F3F3F3;
            color:#190572;
        }

        h3{
        color: #fff;
        text-align: center;
        }

        ::-webkit-scrollbar {
            width: 10px;
            visibility: hidden;
        }
    
        ::-webkit-scrollbar-thumb {
            background-color: #190572;
            border-radius: 20px;
            visibility: hidden;
        }
    
        ::-webkit-scrollbar-track {
            background-color: #E2DFEE;
            border-radius: 20px;
            visibility: hidden;
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

        .main-container {
            width: 100%;
            display: flex;
            margin-top: 115px;
            background-color: #fff;
        }

        .navbar-container {
            height: calc(100vh - 140px);
            width: 15%; 
            border-right: 1px solid #ddd; 
            padding-right: 10px; 
            background-color: #190572; 
            color: #fff; 
            padding: 5px;
        }

        .navbar-content {
            height: 100%;
            overflow-y: auto; 
            padding-right: 5px; 
        }

        .navbar-item {
            padding: 10px 0; 
            margin-bottom: 10px; 
            padding-left: 10px;
        }

        .navbar-item-text {
            margin-left: 10px;
        }

        .navbar-item a {
            display: block;
            color: inherit;
            text-decoration: none;
            cursor: pointer;
        }

        .navbar-item:hover {
            background-color:#F3F3F3;
            color:#130550;
        }

        .title a{
            font-weight: 600;
        }
        #gradeSectionSelection {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            margin-top: 20px;
            margin-left: 20px;
        }

        #gradeDropdown{
            margin-right: 20px;
        }

        .dropdown-container {
            display: flex;
            align-items: center;
        }

        label {
            margin-right: 5px;
            background-color: #190572;
            color:#ddd;
            padding: 5px;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }

        .dropdowns {
            background-color: #fff;
            color: #000;
            padding: 5px 10px;
            width: 150px;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            border: 1px solid #ccc;
            cursor: pointer;
        }


        .dropdowns:hover {
            background-color: #f3f3f3;
        }

        .dropdowns:focus {
            outline: none;
        }

        .main-container {
            width: 100%;
            display: flex;
            margin-top: 115px;
            background-color: #fff;
        }

        .main-content {
            flex: 1;
            background: #fff;
            overflow-y: auto;
            height: calc(100vh - 140px);
        }

        .main-content h3 {
            color: #130550;
            background-color: #D4D4D4; 
            padding: 10px;
            padding-left: 50px;
            margin: 0;
        }

        .main-content table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .main-content th,
        .main-content td {
            padding: 4px;
            text-align: left;
            padding-left: 15px;
        }

        .main-content th:first-child,
        .main-content td:first-child {
            padding-left: 0;
            text-align: center; 
        }

        .main-content th {
            border: 2px solid #ddd;
            background-color: #190572;
            color: #fff; 
        }

        .main-content tr:nth-child(even) {
            background-color: #E2DFEECC;
        }

        .main-content tr:nth-child(odd) {
            background-color: #B7B7B7CC; 
        }

        .main-content th:nth-child(1),
        .main-content td:nth-child(1) {
            width: 5%; 
        }

        .main-content th:nth-child(2),
        .main-content td:nth-child(2) {
            width: 32%; /
        }

        .main-content th:nth-child(3),
        .main-content td:nth-child(3) {
            width: 63%; 
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

        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); 
            z-index: 999; 
            display: none; 
        }
        .modal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #190572;
            opacity: 90%;
            z-index: 1000; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: none; 
            color: #ddd;
            width: 24rem;
        }

        .modal h2{
            top: 0;
            text-align: center;
            font-size: 25px;
            font-weight: 400;
        }

        .modal-logo {
            height: 75px;
            width: 75px;
            margin: 20px auto; 
            display: block;
        }

        #studentForm input,
        #studentForm select{
            height: 30px;
            border-radius: 5px;
            width: 100%;
        }

        #studentForm label{
            font-family: 'Darker Grotesque', sans-serif;
            font-weight: 500;
            font-size: 15px;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 20px;
        }

        button{
            width: 100%;
            background-color: #0C052F;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 7px 30px;
            cursor: pointer;
            margin-top: 20px; 
        }

        button:hover {
            background-color: #DDDAE7;
            color: #0C052F;
        }

         #gradeSectionSelection span{
            margin-left: 10px;
            padding: 5px;
            background-color: #190572;
            color: white;
            padding: 5px;
            border-radius: 5px;
            display: inline-block;
         }

        .grade, .section {
            color: #130550;
            background-color: transparent;
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
                        <a href="#">Log Out</a>
                        <a href="../change_password/change_password.php">Change Password</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="navbar">
        <nav>
            <a href="../school_admin_manage_account/Adviser_Account.php">Manage Accounts</a>
            <a href="School_Admin_Studentlist.php" style="background:#F3F3F3; color:#130550">Manage Students List</a>
        </nav>
    </div>

    <div class="main-container" >
        <div class="main-content">
            <div id="gradeSectionSelection">
            <div class="dropdown-container">
                <label for="gradeDropdown">Grade:</label>
                <select id="gradeDropdown" class="dropdowns" onchange="filterStudents()">
                    <option value=""></option>
                    <option value="kinder">Kinder</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="dropdown-container">
                <label for="sectionDropdown">Section:</label>
                <select id="sectionDropdown" class="dropdowns" onchange="filterStudents()">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
            <span class="grade"><?php echo "Grade " ?></span><span style="color: white; font-weight: bold; margin-right: 20px"><?php echo $grade ?></span>
            <span class="section"><?php echo "Section " ?></span><span style="color: white; font-weight: bold"><?php echo $section ?></span>
            <!--?php echo "Grade " . $grade . "  Section " . $section ?-->
        </div>

        <div id="section1Content">
            <h3>Male</h3>
            <table>
                <tr>
                    <th>#</th>
                    <th>Learner's Reference Number (LRN)</th>
                    <th>Student's Name</th>
                </tr>
                <?php
        if ($result && $result->num_rows > 0) {
            $counter = 1;

            while ($row = $result->fetch_assoc()) {
                $gender = strtolower($row['gender']);

                if ($gender === 'male') {
                    echo "<tr>";
                    echo "<td>{$counter}</td>";
                    echo "<td>{$row['lrn']}</td>";
                    echo "<td>{$row['fullname']}</td>";
                    echo "</tr>";

                    $counter++;
                }
            }
        } 
        ?>

            </table>
            
        </div>
        <div id="section2Content">
            <h3>Female</h3>
            <table>
                <tr>
                    <th>#</th>
                    <th>Learner's Reference Number (LRN)</th>
                    <th>Student's Name</th>
                </tr>
                <?php
        // Re-fetch the records since the pointer is at the end of the result set
        $result = $conn->query($fetchQuery);

        if ($result && $result->num_rows > 0) {
            $counter = 1;

            while ($row = $result->fetch_assoc()) {
                $gender = strtolower($row['gender']);

                if ($gender === 'female') {
                    echo "<tr>";
                    echo "<td>{$counter}</td>";
                    echo "<td>{$row['lrn']}</td>";
                    echo "<td>{$row['fullname']}</td>";
                    echo "</tr>";

                    $counter++;
                }
            }
        } else {
            echo "<tr><td colspan='3'>No female records found in the table.</td></tr>";
        }
        ?>

            </table>

        </div>
    </div>

    <div class="plus-button">
        <button id="addRecordButton" class="add-button" onclick="togglePopupForm()"><i class='bx bx-plus'></i></button>
    </div>
    </div>

    <div id="overlay"></div>


    <div id="popupForm" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <img src="../../img/logo.png" class="modal-logo" alt="Logo">
            <h2>Add Student</h2>
            <form id="studentForm" method="post" action="" enctype="multipart/form-data">
                <label for="name">Name:</label>
                <input type="text" id="name" name="fullname" ><br><br>
                <label for="lrn">LRN:</label>
                <input type="number" id="lrn" name="lrn"  ><br><br>
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" >
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>

                <button type="submit" name="submit">Add Student</button>
            </form>
        </div>
    </div>

    <script src="view_studentlist2.js"></script>
<script>
    // Function to handle dropdown change event
    function filterStudents() {
        // Get selected grade and section values
        var selectedGrade = document.getElementById("gradeDropdown").value;
        var selectedSection = document.getElementById("sectionDropdown").value;

        // Construct the PHP file URL
        var phpFileUrl = "grade_" + selectedGrade + "_section_" + selectedSection + ".php";

        // Check if the PHP file exists before navigating
        fetch(phpFileUrl)
            .then(response => {
                if (response.ok) {
                    // PHP file exists, navigate to the corresponding URL
                    window.location.href = phpFileUrl;
                } else {
                    // PHP file not found, handle accordingly (e.g., show an error message)
                    console.error("PHP file not found:", phpFileUrl);
                }
            })
            .catch(error => {
                console.error("Error checking PHP file:", error);
            });
    }

    // Function to parse URL parameters
    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return "";
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    // Get grade and section values from the URL
    var urlGrade = getParameterByName("grade");
    var urlSection = getParameterByName("section");

    // Set the dropdown values based on the URL parameters
    if (urlGrade && urlSection) {
        document.getElementById("gradeDropdown").value = urlGrade;
        document.getElementById("sectionDropdown").value = urlSection;
    }

    // Add event listeners to the dropdowns
    document.getElementById("gradeDropdown").addEventListener("change", filterStudents);
    document.getElementById("sectionDropdown").addEventListener("change", filterStudents);
</script>

    
</body>
</html>