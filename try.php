<?php

    include('../database.php');

    $school_year = isset($_POST['school-year']) ? $_POST['school-year'] : 2024;
    // Count the total rows in each table
    $sqlEnglish = "SELECT COUNT(DISTINCT lrn) AS total FROM academic_english WHERE year = $school_year";
    $resultEnglish = $conn->query($sqlEnglish);
    $rowEnglish = $resultEnglish->fetch_assoc();
    $totalEnglish = $rowEnglish['total'];

    $sqlFilipino = "SELECT COUNT(DISTINCT lrn) AS total FROM academic_filipino WHERE year = $school_year";
    $resultFilipino = $conn->query($sqlFilipino);
    $rowFilipino = $resultFilipino->fetch_assoc();
    $totalFilipino = $rowFilipino['total'];

    $sqlNumeracy = "SELECT COUNT(DISTINCT lrn) AS total FROM academic_numeracy WHERE year = $school_year";
    $resultNumeracy = $conn->query($sqlNumeracy);
    $rowNumeracy = $resultNumeracy->fetch_assoc();
    $totalNumeracy = $rowNumeracy['total'];

    $sqlBehavioral = "SELECT COUNT(DISTINCT lrn) AS total FROM behavioral WHERE year = $school_year";
    $resultBehavioral = $conn->query($sqlBehavioral);
    $rowBehavioral = $resultBehavioral->fetch_assoc();
    $totalBehavioral = $rowBehavioral['total'];

    $sqlEnglishResolved = "SELECT COUNT(DISTINCT lrn) AS total FROM academic_english WHERE status = 'resolved' AND year = $school_year";
    $resultEnglishResolved = $conn->query($sqlEnglishResolved);
    $rowEnglishResolved = $resultEnglishResolved->fetch_assoc();
    $totalEnglishResolved = $rowEnglishResolved['total'];

    $sqlFilipinoResolved = "SELECT COUNT(DISTINCT lrn) AS total FROM academic_filipino WHERE status = 'resolved' AND year = $school_year";
    $resultFilipinoResolved = $conn->query($sqlFilipinoResolved);
    $rowFilipinoResolved = $resultFilipinoResolved->fetch_assoc();
    $totalFilipinoResolved = $rowFilipinoResolved['total'];

    $sqlNumeracyResolved = "SELECT COUNT(DISTINCT lrn) AS total FROM academic_numeracy WHERE status = 'resolved' AND year = $school_year";
    $resultNumeracyResolved = $conn->query($sqlNumeracyResolved);
    $rowNumeracyResolved = $resultNumeracyResolved->fetch_assoc();
    $totalNumeracyResolved = $rowNumeracyResolved['total'];

    $sqlBehavioralResolved = "SELECT COUNT(DISTINCT lrn) AS total FROM behavioral WHERE status = 'resolved' AND year = $school_year";
    $resultBehavioralResolved = $conn->query($sqlBehavioralResolved);
    $rowBehavioralResolved = $resultBehavioralResolved->fetch_assoc();
    $totalBehavioralResolved = $rowBehavioralResolved['total'];

    $conn->close();
?>