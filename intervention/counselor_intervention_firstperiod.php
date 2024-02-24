<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Guidance counselor</title>
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
            top: 100px; 
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

        .main-container {
            width: 100%;
            height: calc(90vh - 140px);
            margin: 130px 20px 20px; 
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
            flex: 0 0 calc(40% - 10px);
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
            flex: 0 0 calc(15%);
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

        h3 {
            color: #FFFFFFE5;
            margin-left: 10px;
            margin: 0;
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

        .editable-text {
            width: calc(100% - 20px);
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
    
        .wide-columns .text-container {
            width: 530px; 
            margin-left: auto;
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
        
    </style>
</head>
<body>

<header>
        <div class="container">
            <div class="header-content">
                <img src="../img/logo.png" class="logs">
                <h4>E.D.G.E | P.A.R. Early Detection and Guidance for Education</h4>
            </div>
        </div>
    </header>

    <div class="top-container">
        <div class="back-button">
            <a href=" " class="back-icon"><i class='bx bx-chevron-left'></i></a>
        </div>
        <div class="school">
            <h3>LASIP GRANDE ELEMENTARY SCHOOL</h3>
        </div>
        <a href="counselor_intervention_firstperiod_view.php"><button class="update" >Update Record</button></a>
    </div>
    <div class="main-container">
        <div class="row">
            <div class="column">
                <div class="containers first">
                    <h3>S.Y. 2023 - 2024</h3>
                </div>
            </div>
            <div class="column">
                <div class="containers second">
                    <h3><i class='bx bx-printer' ></i>Print Reports</h3>
                </div>
            </div>
            <div class="column column-left">
                <div class="containers third" style="background-color: #190572;">
                    <h3 style="margin-left:10px">Q1 P.A.R. Status</h3>
                </div>
            </div>
            <div class="column half-width">
                    <select id="topdown" name="school-year" class="containers first">
                        <option value="school-year">Pending</option>
                        <option value="school-year">On-going</option>
                        <option value="school-year">Resolved</option>
                        <option value="school-year">Unresolved</option>
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
                    <h3 style="margin-left:10px">09-8765-43211</h3>
                </div>
            </div>
            <div class="column column-left">
                <div class="containers" style="background-color: #190572;">
                    <h3 style="margin-left:10px">Grade & Section</h3>
                </div>
            </div>
            <div class="column half-width">
                <div class="containers" style="background-color: #F3F3F3; ">
                    <h3 style="margin-left:10px">3 <span>- Larang</span></h3>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="column">
                <div class="containers" style="background-color: #190572;">
                    <h3 style="margin-left:10px">Student's Name</h3>
                </div>
            </div>
            <div class="column column-right">
                <div class="containers" style="background-color: #F3F3F3;">
                    <h3 style="margin-left:10px">Vanessa Junio</h3>
                </div>
            </div>
            <div class="column column-left">
                <div class="containers" style="background-color: #190572;">
                    <h3 style="margin-left:10px">Identification</h3>
                </div>
            </div>
            <div class="column half-width">
                <div class="containers" style="background-color: #F3F3F3;">
                    <h3 style="margin-left:10px">Literacy</span></h3>
                </div>
            </div>
        </div>

        <div class="row ints">
            <div class="column">
                <div class="text-container">
                    <div contenteditable="true" placeholder="Adviser's Notes" class="editable-text" id="counselorNotes">
                    </div>
                    <div class="formatting-buttons">
                        <button onclick="document.execCommand('bold', false, null)">B</button>
                        <button onclick="document.execCommand('italic', false, null)">I</button>
                        <button onclick="document.execCommand('insertUnorderedList', false, null)">•</button>
                    </div>
                </div>
            </div>
            <div class="column wide-columns">
                <div class="text-container">
                    <div contenteditable="true" placeholder="Topic/Matter" class="editable-text" id="counselorTopic">
                    </div>
                    <div class="formatting-buttons">
                        <button onclick="document.execCommand('bold', false, null)">B</button>
                        <button onclick="document.execCommand('italic', false, null)">I</button>
                        <button onclick="document.execCommand('insertUnorderedList', false, null)">•</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="column">
                <div class="text-container">
                    <div contenteditable="true" placeholder="Intervention" class="editable-text" id="intervention">
                    </div>
                    <div class="formatting-buttons">
                        <button onclick="document.execCommand('bold', false, null)">B</button>
                        <button onclick="document.execCommand('italic', false, null)">I</button>
                        <button onclick="document.execCommand('insertUnorderedList', false, null)">•</button>
                    </div>
                </div>
            </div>
            <div class="column wide-columns">
                <div class="text-container">
                    <div contenteditable="true" placeholder="Advice" class="editable-text" id="advice">
                    </div>
                    <div class="formatting-buttons">
                        <button onclick="document.execCommand('bold', false, null)">B</button>
                        <button onclick="document.execCommand('italic', false, null)">I</button>
                        <button onclick="document.execCommand('insertUnorderedList', false, null)">•</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="adviser_intervention.js"></script>

 
</body>
</html>
