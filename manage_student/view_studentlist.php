<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>School Administrator</title>
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
            background-color: #ddd;
            color: black;
        }

        h3{
        color: #fff;
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
            display: grid;
            grid-template-rows: repeat(2, 1fr);
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
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

        .column {
        flex: 1;
        padding: 20px;
        }

        .column:first-child{
            width: 30%;
        }
        .blue {
            background-color: #190572;
            border-radius: 5px;
            color: white;
            padding: 10px;
            margin-bottom: 10px;
        }

        .blue:hover{
            background-color: #190572ca;
            cursor: pointer;
        }

        .options {
            width: calc(100% - 50px);
            margin-top: 10px;
            margin-left: auto;
            border-bottom: 1px solid #E2DFEE ;
            border-top: 1px solid #E2DFEE ;
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
            <a href="../button_options/School_Admin_Create_Account.php">Create Account</a>
            <a href="../school_admin_manage_account/Adviser_Account.php">Manage Accounts</a>
            <a href="../manage_student/School_Admin_Studentlist.php">Manage Students List</a>
        </nav>
    </div>


    <div class="main-container">
        <div class="right-bar">
            <div class="column" id="first-column">
                <div class="blue" onclick="toggleOptions(this)">Kindergarten</div>
                <div class="options"></div>
                <div class="blue" onclick="toggleOptions(this)">Grade 1</div>
                <div class="options"></div>
                <div class="blue" onclick="toggleOptions(this)">Grade 2</div>
                <div class="options"></div>
                <div class="blue" onclick="toggleOptions(this)">Grade 3</div>
                <div class="options"></div>
            </div>
        </div>

        <div class="column" id="second-column">

        </div>
    </div>

    <script>
    function toggleOptions(element) {
        const options = element.nextElementSibling;
        if (options.style.display === "block") {
            options.style.display = "none";
        } else {
            document.querySelectorAll('.options').forEach(option => {
                option.style.display = "none";
            });
            options.innerHTML = ''; 
            const optionsList = ['Section 1', 'Section 2', 'Section 3', 'Section 4', 'Section 5', 'Section 6'];
            optionsList.forEach(optionText => {
                const div = document.createElement('div');
                div.textContent = optionText;
                div.classList.add('blue', 'option');
                options.appendChild(div);
            });

            options.style.display = "block";
 
            const rect = element.getBoundingClientRect();
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const elementTop = rect.top + scrollTop;

            window.scrollTo({
                top: elementTop,
                behavior: 'smooth'
            });
        }
    }
</script>

    
    <script src="manage_student.js"></script>

 
</body>
</html>
