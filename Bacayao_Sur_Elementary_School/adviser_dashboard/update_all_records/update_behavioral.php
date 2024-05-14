<?php
    $grade = $_GET['grade'] ?? '';
    $section = $_GET['section'] ?? '';

   include('../../../database.php');

    // SQL query to fetch LRN and full name from the academic_english table
    $sql = "SELECT lrn, fullname, gname, number, notes, topic, intervention, advice FROM behavioral WHERE grade = '$grade' AND section = '$section'";
    $result = $conn->query($sql);
    $conn->close();
?>
<?php
    if (isset($_POST['update'])) {
        // Include your database connection
        include('../../../database.php');

        // Get the current date
        $date = date('Y-m-d');

        // Loop through the submitted data
        for ($i = 0; $i < count($_POST['lrn']); $i++) {
            $lrn = htmlspecialchars($_POST['lrn'][$i]);
            $gname = htmlspecialchars($_POST['gname'][$i]);
            $contact = htmlspecialchars($_POST['number'][$i]);
            $notes = htmlspecialchars($_POST['notes'][$i]);
            $topic = htmlspecialchars($_POST['topic'][$i]);
            $intervention = htmlspecialchars($_POST['intervention'][$i]);
            $advice = htmlspecialchars($_POST['advice'][$i]);
            $status = htmlspecialchars($_POST['status'][$i]);

            // Prepare the SQL statement
            $stmt = $conn->prepare("UPDATE behavioral SET gname = ?, number = ?, notes = ?, topic = ?, intervention = ?, advice = ?, status = ?, date = ? WHERE lrn = ?");
            $stmt->bind_param("sssssssss", $gname, $contact, $notes, $topic, $intervention, $advice, $status, $date, $lrn);

            // Execute the statement
            $stmt->execute();
        }

        // Close the statement and connection
        $stmt->close();
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
            background: white;
            background-size: cover;
            overflow-y: hidden;
        }

        .logo {
            width: 100px;
            height: 100px;
            margin: 0 auto 20px;
            background-image: url('img/logo.png'); 
            background-size: cover;
        }
        
        h4,
        h2 {
            font-family: 'Darker Grotesque', sans-serif;
            color: #fff;
        }
        
        h2 p{
            margin-top: 5px;
            font-size: 18px;
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

        .header-content {
            display: flex;
            align-items: center;
            justify-content: start;
            width: 94%;
        }

        .vertical-line {
            margin-right: 10px;
            height: 40px;
            width: 1px;
            background-color: #130550;
            margin-left: auto;
        }


        .name {
            margin-right: 0;
            margin-left: auto;
            color: #fff;
            font-size: .8rem;
            cursor: pointer;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
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
            white-space: nowrap; 
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
            width: 8px;
        }
    
        ::-webkit-scrollbar-thumb {
            background-color: #0C052F;
            border-radius: 20px;
        }
    
        ::-webkit-scrollbar-track {
            background-color: #E2DFEE;
            border-radius: 20px;
        }

        .back-button {
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
        }

        .back-icon {
            font-size: 1.5rem;
            color: #fff;
            text-decoration: none;
            margin-right: 10px;
            position: absolute;
            left: 0;
            top: 50%; 
            transform: translateY(-50%);
        }

        .main-container {
            width: 100%;
            margin-top: 7%;
            height: 80%;
            background-color: white;
            overflow: hidden;
            padding: 20px;
            z-index: 1;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }
        
        .column {
            flex: 0 0 calc(16.6667%);
            margin-bottom: 5px;
        }

        .wide-columns {
            flex: 0 0 calc(26% - 7px);
            margin-bottom: 20px;
            margin-top: 10px;
        }

        .wide-column {
            flex: 0 0 calc(19% - 7px);
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
            padding: 1px;
            width: 200px;
            background: #FBFBFB;
            color: #190572;
            text-align: start;
            border: none;
            font-weight: bold;
            font-size: 16.5px;
        }

        .second{
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
        .containers h3{
            color: #FFF;
        }
        .act button {
        background-color:#130550;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        }

        .act button:hover {
            background-color: #0C052F;
        } 

        .sch h1 {
            color: #FFFFFF;
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




        .rows {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }

        .columns textarea,
        .columns-group,
        input[type="date"] {
            flex: 1;
            padding: 5px;
            border-radius: 3px;
            margin-right: 5px;
        }
        textarea,
        input[type="date"],
        .columns-group textarea{
            border: none;
            resize: none;
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

        .columns-group textarea{
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
            right: 0; 
            top: 100%;
            border-bottom-left-radius: 7px;
            border-bottom-right-radius: 7px;
        }

        .dropdown {
            position: relative; 
        }

        .dropdown-content a {
            color: rgb(255, 253, 253);
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: .8rem;
        }

        .dropdown-content a:hover {
            background-color: #F3F3F3;
            color: #190572;
            opacity: 80%;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

    

        .closes, .close {
                color: #aaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .closes{
                background-color: #130550;
                font-size: 26px;
                padding-right: 5px;
            }

        .close:hover,
        .closes:focus, 
        .closes:hover,
        .close:focus {
            color: white;
            text-decoration: none;
            cursor: pointer;
        }


        .form-group {
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
        }

        label {
        font-size: 15px;
        color: #FFFFFF; 
        text-align: left;
        }

        .form-group textarea {
        height: 20x;
        padding: 10px;
        border: 1px solid #0C052F; 
        border-radius: 5px;
        background-color: #DDDAE7;
        color: #0C052F; 
        }

        .form-group textarea{
            width: 95%;
        }            

        span{
            font-style: italic;
        }

        .bottom-buttons {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            z-index: 999;
        }


        .pagination {
            position: absolute;
            bottom: 10px;
            right: 20px;
            z-index: 999;
        }

        .pagination button {
            padding: 8px 16px;
            background-color: #0C052F;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 5px;
        }

        .pagination button:hover {
            background-color: #130550;
        }

        .save {
            text-align: center;
            position: fixed;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            font-weight: bold;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.75);   
            z-index: 999;         
        }

        .save button {            
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.75);            
            padding: 8px 16px;
            background-color: #0C052F;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .saveButton:hover,
        .save button:hover {
            background-color: #130550;
        }

         .form-container {
            justify-content: center;
            align-items: center;         
            height: 95%;
            width: 100%;
            overflow: hidden;
            border-radius: 7px;
            position: fixed;
            top: 55%; 
            left: 50%; 
            transform: translate(-50%, -50%);
            background-color: #E2DFEE;
        }

        .main-containers {
            height: 95%;
            padding: 10px;
            z-index: 999;
            position: relative;
        }

        .rows {
            display: flex;
            flex-wrap: wrap;
        }

        .wide-rows {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between; 
        }



        .column-rights {
            flex: 0 0 calc(15%);
            margin-right: 0;
            margin-right: auto; 
        }

        .column-lefts {
            flex: 0 0 calc(15%);
            margin-left: auto; 
        }

        .rows .columns:not(:last-child),
        .wide-rows .columns:not(:last-child) {
            margin-right: 0;
        }
        
        .full-widths {
            flex: 0 0 calc(30%);
            margin-right: 0;
        }

        .half-widths {
            flex: 0 0 calc(25%);
            margin-right: 0;
        }

        .containerss {
            background-color: #190572;
            height: 25px;
            width: fit-content;
        }
        
        .firsts{
            background: #FBFBFB;
            text-align: center;
            justify-content: center;
            padding-top: 4px;
            font-size: 15px;
            padding-left: 51px;
            white-space: nowrap;
            width: 370px;
        }

        .firsts h3{
            color: #190572;
        }

        .seconds{
            border-radius: 3px;
            text-align: right;
        }

        .seconds h3{
            font-size: 18px;
            color: #FFF;
            letter-spacing: 3px;
            padding-top: 1px;
        }

        .firsts h3:first-child{
            color: #130550;
        }

        .containerss h3{
            color: #ddd;
        }

        .rights{
            color:#130550;
            font-weight: 500;
            font-size: 15px;
            width: fit-content;
            border: none;
            background: none;
            margin-left: 10px;
        }

        .column-rights h3, 
        .half-widths h3{
            color: #190572;
        }

        .editable-containers {
            position: relative; 
            display: flex;
            align-items: center;
            height: 20px;
        }

        .editable-containers h3 {
            margin: 0;
        }

        .editable-icons {
            position: absolute; 
            right: 0; 
            margin: 0; 
            cursor: pointer;
        }

    .update-record {
        border-collapse: collapse;
        width: 100%;
        margin-top: 2rem;
    }
    .update-record th, 
    .update-record td {
        border: 1px solid black;
        position: relative;
        padding: 0;
        text-align: center;
        background-color: #fff;
    }
    .update-record th {
        background-color: #35A7FA; 
        color: white; 
    }
    .form-container .table_body td textarea {
        width: calc(100% - 10px); 
        height: 100px; 
        box-sizing: border-box;
        margin: 5px; 
        resize: none; 
        border: none;
    }

    .dates {
        position: absolute;
        bottom: 5px;
        right: 5px;
        font-size: 12px;
        color: gray;
    }
    #row1 th{
        background-color: #190572;
        padding-top: 8px;
        padding-bottom: 8px;
    }
    .saveButton {
        background-color: rgba(12, 5, 47, 1); 
        color: white;
        border: none;
        padding: 10px 20px;
        margin-top: 20px;
        cursor: pointer;
        width: 100%;
        margin-bottom: 20px;
    }

    .record_header{
        background-color: #130550;
        color: #ddd;
        padding: 3px;
        align-items: center;
        justify-content: center;
        margin-bottom: 5px;
        display: flex;
        padding-top: 4px;
        padding-bottom: 4px;
        width: 100%;
        position: relative;
    }

    .status-dropdown {
    color: black; 
    }


    .status-dropdown option[value="ongoing"] {
        background-color: green; 
        color: white; 
    }

    .status-dropdown option[value="resolved"] {
        background-color: #130550; 
        color: white; 
    }

    .status-dropdown option[value="unresolved"] {
        background-color: red; 
        color: white;
    }

    select{
        height: 30px;
        border-radius: 3px;
        background-color: #aaa;
        margin-left: 3px;
        margin-right: 3px;
    }

        .dropdowns {
        position: relative;
        display: inline-block;
        top: 0;
        height: 30px;
        }

        .dropdowns select{
            border: none;
            width: fit-content;
            margin-right: 0;
            height: 25px;
            background-color: transparent;
        }

        .quarter-dropdowns {
        padding: 5px 10px;
        background-color: #fff;
        cursor: pointer;
        color: #130550;
        font-size: 15px;
        font-weight: bold;
        }

        .quarter-dropdowns option {
        padding: 5px 10px;
        }

        .quarter-dropdowns option:hover {
        background-color: #f1f1f1;
        }

        h3 {
        display: inline-block;
        margin-right: 10px; 
        }

        .hidden {
            display: none;
        }


        
    </style>
</head>
<body>

    <header>
        <div class="container">
            <div class="header-content">
                <img src="../../../img/logo.png" class="logs">
                <h4>E.D.G.E | P.A.R. Early Detection and Guidance for Education</h4>
                <i class="vertical-line"></i>
                <div class="dropdown">
                <div class='name' onclick="toggleDropdown()">Stephanie Mislang</div>
                    <div class="dropdown-content" id="dropdownContent">
                    <a href="../../login/Login.php">Log Out</a>
                        <a href="" style="border-top: 1px solid #ddd;">Change Password</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

         <form action="" method="POST" class="form-container"  id="pupilRecord">
            <div class="main-containers">
            <h3 class="record_header"><a href="" class="back-icon"><i class='bx bxs-chevron-left'></i></a>BEHAVIORAL RECORD</h3>
                <div class="rows">
                    <div class="columns">
                        <div class="containerss firsts">
                            <h3>S.Y. 2023 - 2024:</h3>
                            <div class="dropdowns">
                                <select class="quarter-dropdowns">
                                    <option value="Q1">Quarter 1</option>
                                    <option value="Q2">Quarter 2</option>
                                    <option value="Q3">Quarter 3</option>
                                    <option value="Q4">Quarter 4</option>
                                </select>
                            </div>
                        </div>
                    </div>            
                        <!--div class="columns column-lefts" style="background:none">
                            <div class="containerss seconds" >
                                <button style="background:transparent; border: none"><h3><i class='bx bx-printer' ></i>Print Records</h3></button>
                            </div>
                        </div-->
                </div>


                <div class="rows">
                    <div class="columns">
                        <div class="containerss" style="background-color: #190572;">
                            <h3 style="margin-left:10px">Grade & Section</h3>
                        </div>
                    </div>
                    <div class="columns column-rights">
                        <div class="containerss" style="background-color: #F3F3F3;">
                        <input type="text" name="classification" id="classification" class="rights" readonly>
                        </div>
                    </div>
                </div>


                <table class="update-record" id="update-record">
                    <tr id="row1">
                        <th>LRN</th>
                        <th>Pupil's Name</th>
                        <th colspan="2">Guardian</th>
                        <th>Notes</th>
                        <th>Topic/Matter</th>
                        <th>Intervention</th>
                        <th>Advice</th>
                        <th>Recommended to</th>
                        <th>Status</th>
                    </tr>
                    <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                // Escaping output to prevent XSS attacks
                $lrn = htmlspecialchars($row["lrn"]);
                $fullname = htmlspecialchars($row["fullname"]);
                $gname = htmlspecialchars($row["gname"]);
                $number = htmlspecialchars($row["number"]);
                $notes = htmlspecialchars($row["notes"]);
                $topic = htmlspecialchars($row["topic"]);
                $intervention = htmlspecialchars($row["intervention"]);
                $advice = htmlspecialchars($row["advice"]);

                echo '<tr id="row2" class="table_body">';
                echo '<td><textarea name="lrn[]" placeholder="">' . $lrn . '</textarea><span class="dates"></span></td>';
                echo '<td><textarea name="fullname[]" placeholder="">' . $fullname . '</textarea><span class="dates"></span></td>';
                echo '<td colspan="1"><textarea name="gname[]" placeholder="Guardian\'s Name">' . $gname .'</textarea><span class="dates"></span></td>';
                echo '<td colspan="1"><textarea name="number[]" placeholder="Contact Number">' . $number .'</textarea><span class="dates"></span></td>';
                echo '<td><textarea name="notes[]" placeholder="Enter Notes">' . $notes .'</textarea><span class="dates"></span></td>';
                echo '<td><textarea name="topic[]" placeholder="Enter Topic/Matter">' . $topic .'</textarea><span class="dates"></span></td>';
                echo '<td><textarea name="intervention[]" placeholder="Enter Intervention">' . $intervention .'</textarea><span class="dates"></span></td>';
                echo '<td><textarea name="advice[]" placeholder="Enter Advice">' . $advice .'</textarea><span class="dates"></span></td>';
                echo '<td><textarea name="recommended[]" placeholder="Enter Recommended to"></textarea><span class="dates"></span></td>';
                echo '<td>';
                echo '<select name="status[]" class="status-dropdown">';
                echo '<option value="pending" disabled selected hidden>Pending</option>';
                echo '<option value="ongoing">Ongoing</option>';
                echo '<option value="resolved">Resolved</option>';
                echo '<option value="unresolved">Unresolved</option>';
                echo '</select>';
                echo '<span class="dates"></span>';
                echo '</td>';
                echo '</tr>';
            }
        }
        ?>
                </table>

                
                <div class="bottom-buttons">
                    <button id="saveButton" name="update" class="saveButton">Update Records</button>
                </div>

                <div class="pagination">
                    <button id="prevbutton" onclick="prevPageReportTable()">Previous</button>
                    <button id="nextbutton" onclick="nextPageReportTable()">Next</button>
                </div>
                
            </div>
        </form>


   

<script >

//next and prev button
var table = document.getElementById("update-record");
var rows = table.getElementsByClassName("table_body");

var currentPage = 0;
var itemsPerPage = 4;

function showPage(page) {
    var startIndex = page * itemsPerPage;
    var endIndex = Math.min(startIndex + itemsPerPage, rows.length);

    for (var i = 0; i < rows.length; i++) {
        rows[i].style.display = "none";
    }

    for (var j = startIndex; j < endIndex; j++) {
        rows[j].style.display = "table-row";
    }
}

showPage(currentPage);

function prevPageReportTable() {
    if (currentPage > 0) {
        currentPage--;
        showPage(currentPage);
    }
}

function nextPageReportTable() {
    var totalPages = Math.ceil(rows.length / itemsPerPage);
    if (currentPage < totalPages - 1) {
        currentPage++;
        showPage(currentPage);
    }
}



    //select change color 
var statusDropdowns = document.querySelectorAll('.status-dropdown');

// Loop through each status dropdown and add event listener
    statusDropdowns.forEach(function(select) {
        select.addEventListener('change', function() {
            var selectedOption = select.options[select.selectedIndex];
            var statusValue = selectedOption.value;

            if (statusValue === 'ongoing') {
                select.style.backgroundColor = 'green';
                select.style.color = 'white';
            } else if (statusValue === 'resolved') {
                select.style.backgroundColor = '#130550';
                select.style.color = 'white';
            } else if (statusValue === 'unresolved') {
                select.style.backgroundColor = 'red';
                select.style.color = 'white';
            } else {
                select.style.backgroundColor = '';
                select.style.color = '';
            }
        });
    });



</script>

</div>
</body>
</html>
