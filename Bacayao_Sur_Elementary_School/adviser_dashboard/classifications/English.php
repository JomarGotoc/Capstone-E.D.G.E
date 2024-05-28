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
            width: 10px;
            display: none;
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
            position: fixed;
            top: 70px; 
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1;
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
            color: #070000;
            margin-right: auto;
        }

        .school h3{
            color: #070000;
            margin-left: 15px;
        }

        .main-container {
            width: 100%;
            margin-top: 7%;
            height: 80%;
            background-color: white;
            opacity: 80%;
            overflow: hidden;
            padding: 20px;
            z-index: 1;
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
            width: 437px;
            background: #FBFBFB;
            color: #190572;
            text-align: start;
            border: none;
            font-weight: bold;
            font-size: 16.5px;
        }

        #topdown2 {
            padding: 1px;
            width: 369px;
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
            text-align: center;
            justify-content: center;
            background-color: rgb(242, 242, 244);
        }

        tr:nth-child(even){
            text-align: center;
            justify-content: center;
            background-color: #b7b7b7;
        }
        .containers h3{
            color: #FFF;
        }
        .act button {
        background-color:#130550;
        color: #fff;
        width: 16rem;
        padding: 5px 24px;
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

        .columns input[type="text"],
        .columns-group,
        input[type="date"] {
            flex: 1;
            padding: 5px;
            border-radius: 3px;
            margin-right: 5px;
        }
        input[type="text"],
        input[type="date"],
        .columns-group input[type="text"],
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

        .columns-group input[type="text"]{
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

        .container {
            display: flex;
            justify-content: space-between;
        }

        .legend-container {
            flex: 1; 
        }

        .left-container{
            display: flex;
            justify-content: left;
            left: 0;
        }
        .legend-item {
            display: flex;
            align-items: center;
            margin: 0 10px; 
            margin-top: 15px;
        }

        .legend-containers:first-child{
            margin-top: -50px;
        }

        .legend-containers {
            margin-top: -20px;
            display: flex;
            justify-content:right;
        }

        .legend-containers .icon{
            margin-right: 5px;
            color: #130550;
            font-weight: bold;
            margin-left: 5px;
        }
        .legend-containers .legend-item{
            color: #130550;
            font-weight: bold;
        }

        .legend-containers .checkbox-container{
            margin-top: 10px;
            margin-right: 30px;
            margin-left: 30px;
        }

        .legend-containers .non{
            margin-right: auto;
        }

        .checkbox-container input[type="checkbox"] {
            margin-right: 5px;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            width: 15px;
            height: 10px;
            background-color: #fff;
            border: 2px solid #190572;
            position: relative;
        }

        .checkbox-container input[type="checkbox"]::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 15px;
            height: 10px;
            background-color: #190572;
            opacity: 0;
        }

        .checkbox-container input[type="checkbox"]:checked::before {
            opacity: 1;
        }

        .checkbox-container label {
            font-size: 15px;
            font-weight: bold;
            color: #0C052F;
        }

        .icon-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .icon-containers{
            font-size: 20px;
            color: #0C052F;
        }

        .vertical-lines {
            height: 40px;
            width: .5px;
            background-color: #0C052F;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); 
            z-index: 999; 
        }

        .login-container {
            background-color: rgba(25, 5, 114, 0.80); 
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
            text-align: center;
            z-index: 1;
            position: fixed;
            top: 50%; 
            left: 50%; 
            transform: translate(-50%, -50%); 
            z-index: 1000; 
            border-radius: 10px;
            display: none;
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

        .login-container button {
        margin-top: 10px;
        background-color: #0C052F;
        color: white;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
        width: 97.5%;
        }

        .login-container button:hover {
            background-color: #ddd;
            border: 1px solid #0C052F;
            color: #130550;
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

        select, .form-group input[type="text"] {
        height: 20x;
        padding: 10px;
        border: 1px solid #0C052F; 
        border-radius: 5px;
        background-color: #DDDAE7;
        color: #0C052F; 
        }

        .form-group input[type="text"]{
            width: 95%;
        }            

        span{
            font-style: italic;
            font-weight: bold;
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
            background:white;            
            height: 100%;
            width: 97%;
            overflow:auto;
            border-radius: 7px;
            position: fixed;
            top: 50%; 
            left: 50%; 
            transform: translate(-50%, -50%);
            z-index: 1000;
        }

        .main-containers {
            height: 100%;
            background-color: #E2DFEE;
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

        .columns {
            flex: 0 0 calc(16.6667%);
        }

        .column-rights {
            flex: 0 0 calc(30%);
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
        }
        
        .firsts{
            background: #FBFBFB;
            text-align: center;
            justify-content: center;
            padding-top: 4px;
            font-size: 15px;
            padding-left: 51px;
            padding-right: 51px;
            white-space: nowrap;
        }

        .firsts h3{
            color: #190572;
        }

        .seconds{
            border-radius: 3px;
            text-align: center;
            font-family: "Darker Grotesque";

        }

        .seconds h3{
            font-size: 18px;
            color: #FFF;
            letter-spacing: 3px;
            padding-top: 1px;
        }

        .containerss input{
            color:#130550;
            font-weight: 500;
            font-size: 15px;
            width: 300px;
            margin-left: 10px;
            border: none;
            background: none;
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
            width: 310px;
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
        .columns{
            width: 23rem;
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

    form .form-container{
        background-color: white;
    }
    .form-container .table_body td input {
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
    }
    </style>
</head>
<body>
    <form action="" method="" class="form-container english" id="englishForm">
            <div class="main-containers">
            <h3 class="record_header">ACADEMIC - LITERACY IN ENGLISH RECORD</h3>
                <div class="rows">
                <div class="column">
                <div class="containers" style="background-color: #190572;">
                    <h3 style="margin-left: 7px">S.Y:2023-2024</h3>
                </div>
            </div>
            <div class="column column-right">
                <div class="select-wrapper1">
                    <select id="topdown" name="quarter" class="containerss second" style="background-color: #F3F3F3;">
                        <option value="" disabled selected hidden>Quarter 1</option>
                        <option value="q1">Quarter 1</option>
                        <option value="q2">Quarter 2</option>
                        <option value="q3">Quarter 3</option>
                        <option value="q4">Quarter 4</option>
                    </select>
                </div>
            </div>
                    <div class="columns" style="background:none; margin-left: 538px">
                        <div class="containerss seconds" >
                            <button style="background:transparent; border: none"><h3><i class='bx bx-printer' ></i>Print Records</h3></button>
                        </div>
                    </div>
                </div>


                <div class="rows">
                    <div class="columns" >
                        <div class="containerss" style="background-color: #190572">
                            <h3 style="margin-left:10px">LRN</h3>
                        </div>
                    </div>
                    <div class="columns column-rights">
                        <div class="containerss" style="background-color: #F3F3F3;">
                        <input type="text" name="lrn" id="lrn"  readonly>
                        </div>
                    </div>
                    <div class="columns column-lefts">
                        <div class="containerss" style="background-color: #190572;">
                            <h3 style="margin-left:10px">Status</h3>
                        </div>
                    </div>
                    <div class="columns half-widths">
                        <div class="select-wrapper">
                            <select id="topdown2" name="quarter" class="containers second" onchange="redirectToQuarter()" style="background-color: #F3F3F3;">
                                <option value="" disabled selected hidden>Pending</option>
                                <option value="On-Going">On-Going</option>
                                <option value="Resolved">Resolved</option>
                                <option value="Unresolved">Unresolved</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="rows">
                    <div class="columns">
                        <div class="containerss" style="background-color: #190572;">
                            <h3 style="margin-left:10px">Pupil's Name</h3>
                        </div>
                    </div>
                    <div class="columns column-rights">
                        <div class="containerss" style="background-color: #F3F3F3;">
                        <input type="text" name="fullname" id="fullname"  readonly>
                        </div>
                    </div>
                    <div class="columns column-lefts">
                        <div class="containerss" style="background-color: #190572;">
                            <h3 style="margin-left:10px">Grade & Section</h3>
                        </div>
                    </div>
                    <div class="columns half-widths">
                        <div class="containerss" style="background-color: #F3F3F3;">
                        <input type="text" name="classification" id="classification" class="rights" readonly>
                        </div>
                    </div>
                </div>


                <div class="rows">
                    <div class="columns">
                        <div class="containerss" style="background-color: #190572;">
                            <h3 style="margin-left:10px">Guardian Name</h3>
                        </div>
                    </div>
                    <div class="columns column-rights">
                        <div class="containerss editable-containers" style="background-color: #F3F3F3;">
                            <input type="text" name="gname" id="gname" value="" placeholder=" " required>
                        </div>
                    </div>
                    <div class="columns column-lefts">
                        <div class="containerss" style="background-color: #190572;">
                            <h3 style="margin-left:10px">Contact Number</h3>
                        </div>
                    </div>
                    <div class="columns half-widths">
                        <div class="containerss editable-containers" style="background-color: #F3F3F3;">
                            <input type="text" name="number" id="cnumber" value="" placeholder=" " required class="rights">
                        </div>
                    </div>
                </div>

                <table class="update-record">
                <tr id="row1">
                    <th>Notes</th>
                    <th>Topic/Matter</th>
                    <th>Intervention</th>
                    <th>Advice</th>
                    <th>Recommended to</th>
                </tr>
                <tr id="row2" class="table_body">
                    <td><input class="put" type="text" placeholder="Enter Notes"><span class="dates"></span></td>
                    <td><input type="text" placeholder="Enter Topic/Matter"><span class="dates"></span></td>
                    <td><input type="text" placeholder="Enter Intervention"><span class="dates"></span></td>
                    <td><input type="text" placeholder="Enter Advice"><span class="dates"></span></td>
                    <td><input type="text" placeholder="Enter Recommended to"><span class="dates"></span></td>
                </tr>
                <tr id="row3" class="table_body">
                    <td><input type="text" placeholder="Enter Notes"><span class="dates"></span></td>
                    <td><input type="text" placeholder="Enter Topic/Matter"><span class="dates"></span></td>
                    <td><input type="text" placeholder="Enter Intervention"><span class="dates"></span></td>
                    <td><input type="text" placeholder="Enter Advice"><span class="dates"></span></td>
                    <td><input type="text" placeholder="Enter Recommended to"><span class="dates"></span></td>
                </tr>
                <tr id="row4" class="table_body">
                    <td><input type="text" placeholder="Enter Notes"><span class="dates"></span></td>
                    <td><input type="text" placeholder="Enter Topic/Matter"><span class="dates"></span></td>
                    <td><input type="text" placeholder="Enter Intervention"><span class="dates"></span></td>
                    <td><input type="text" placeholder="Enter Advice"><span class="dates"></span></td>
                    <td><input type="text" placeholder="Enter Recommended to"><span class="dates"></span></td>
                </tr>
                <tr id="row5" class="table_body">
                    <td><input type="text" placeholder="Enter Notes"><span class="dates"></span></td>
                    <td><input type="text" placeholder="Enter Topic/Matter"><span class="dates"></span></td>
                    <td><input type="text" placeholder="Enter Intervention"><span class="dates"></span></td>
                    <td><input type="text" placeholder="Enter Advice"><span class="dates"></span></td>
                    <td><input type="text" placeholder="Enter Recommended to"><span class="dates"></span></td>
                </tr>
                </table>
                
                <button id="saveButton" class="saveButton">Save Changes</button>
            </form>
                
            </div>

<script >

    document.getElementById('saveButton').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent form submission
    
    var currentDate = new Date();
    var formattedDate = currentDate.toLocaleDateString() + ' ' + currentDate.toLocaleTimeString();
    
   // Update date only for the input boxes with data entered
    document.getElementById('saveButton').addEventListener('click', function() {
    var inputFields = document.querySelectorAll('input[type="text"]');
    inputFields.forEach(function(inputField) {
        if (inputField.value.trim() !== '' && !inputField.dataset.dateSaved) {
            var dateElement = inputField.nextElementSibling; // Get the date span next to the input field
            var currentTime = new Date().toLocaleTimeString(); // Get the current time
            dateElement.textContent = currentTime; // Display the current time
            inputField.disabled = true; // Disable input field for the saved row
            inputField.dataset.dateSaved = true; // Mark that date is saved for this input field
        }
    });
});
});
</script>
<script>
    function submitForm() {
        document.getElementById('quarterForm1').submit();
    }
</script>
</body>
</html>