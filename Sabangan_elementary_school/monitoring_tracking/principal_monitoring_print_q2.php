<?php
    include('../../database.php');

    $queryEnglish = "SELECT COUNT(*) AS q1english FROM academic_english WHERE quarter = 1 AND school = 'Sabangan Elementary School'";
    $resultEnglish = $conn->query($queryEnglish);
    $rowEnglish = $resultEnglish->fetch_assoc();
    $q1english = $rowEnglish['q1english'];

    $queryFilipino = "SELECT COUNT(*) AS q1filipino FROM academic_filipino WHERE quarter = 1 AND school = 'Sabangan Elementary School'";
    $resultFilipino = $conn->query($queryFilipino);
    $rowFilipino = $resultFilipino->fetch_assoc();
    $q1filipino = $rowFilipino['q1filipino'];

    $queryNumeracy = "SELECT COUNT(*) AS q1numeracy FROM academic_numeracy WHERE quarter = 1 AND school = 'Sabangan Elementary School'";
    $resultNumeracy = $conn->query($queryNumeracy);
    $rowNumeracy = $resultNumeracy->fetch_assoc();
    $q1numeracy = $rowNumeracy['q1numeracy'];

    $queryBehavioral = "SELECT COUNT(*) AS q1behavioral FROM behavioral WHERE quarter = 1 AND school = 'Sabangan Elementary School'";
    $resultBehavioral = $conn->query($queryBehavioral);
    $rowBehavioral = $resultBehavioral->fetch_assoc();
    $q1behavioral = $rowBehavioral['q1behavioral'];

    $queryEnglishResolved = "SELECT COUNT(*) AS q1englishresolved FROM academic_english WHERE quarter = 1 AND status = 'resolved' AND school = 'Sabangan Elementary School'";
    $resultEnglishResolved = $conn->query($queryEnglishResolved);
    $rowEnglishResolved = $resultEnglishResolved->fetch_assoc();
    $q1englishresolved = $rowEnglishResolved['q1englishresolved'];

    $queryFilipinoResolved = "SELECT COUNT(*) AS q1filipinoresolved FROM academic_filipino WHERE quarter = 1 AND status = 'resolved' AND school = 'Sabangan Elementary School'";
    $resultFilipinoResolved = $conn->query($queryFilipinoResolved);
    $rowFilipinoResolved = $resultFilipinoResolved->fetch_assoc();
    $q1filipinoresolved = $rowFilipinoResolved['q1filipinoresolved'];

    $queryNumeracyResolved = "SELECT COUNT(*) AS q1numeracyresolved FROM academic_numeracy WHERE quarter = 1 AND status = 'resolved' AND school = 'Sabangan Elementary School'";
    $resultNumeracyResolved = $conn->query($queryNumeracyResolved);
    $rowNumeracyResolved = $resultNumeracyResolved->fetch_assoc();
    $q1numeracyresolved = $rowNumeracyResolved['q1numeracyresolved'];

    $queryBehavioralResolved = "SELECT COUNT(*) AS q1behavioralresolved FROM behavioral WHERE quarter = 1 AND status = 'resolved' AND school = 'Sabangan Elementary School'";
    $resultBehavioralResolved = $conn->query($queryBehavioralResolved);
    $rowBehavioralResolved = $resultBehavioralResolved->fetch_assoc();
    $q1behavioralresolved = $rowBehavioralResolved['q1behavioralresolved'];
    $conn->close();
?>
<?php
    include('../../database.php');

    $queryEnglish = "SELECT COUNT(*) AS q2english FROM academic_english WHERE quarter = 2  AND school = 'Sabangan Elementary School' AND school = 'Sabangan Elementary School'";
    $resultEnglish = $conn->query($queryEnglish);
    $rowEnglish = $resultEnglish->fetch_assoc();
    $q2english = $rowEnglish['q2english'];

    $queryFilipino = "SELECT COUNT(*) AS q2filipino FROM academic_filipino WHERE quarter = 2  AND school = 'Sabangan Elementary School' AND school = 'Sabangan Elementary School'";
    $resultFilipino = $conn->query($queryFilipino);
    $rowFilipino = $resultFilipino->fetch_assoc();
    $q2filipino = $rowFilipino['q2filipino'];

    $queryNumeracy = "SELECT COUNT(*) AS q2numeracy FROM academic_numeracy WHERE quarter = 2  AND school = 'Sabangan Elementary School' AND school = 'Sabangan Elementary School'";
    $resultNumeracy = $conn->query($queryNumeracy);
    $rowNumeracy = $resultNumeracy->fetch_assoc();
    $q2numeracy = $rowNumeracy['q2numeracy'];

    $queryBehavioral = "SELECT COUNT(*) AS q2behavioral FROM behavioral WHERE quarter = 2  AND school = 'Sabangan Elementary School' AND school = 'Sabangan Elementary School'";
    $resultBehavioral = $conn->query($queryBehavioral);
    $rowBehavioral = $resultBehavioral->fetch_assoc();
    $q2behavioral = $rowBehavioral['q2behavioral'];

    $queryEnglishResolved = "SELECT COUNT(*) AS q2englishresolved FROM academic_english WHERE quarter = 2  AND school = 'Sabangan Elementary School' AND status = 'resolved' AND school = 'Sabangan Elementary School'";
    $resultEnglishResolved = $conn->query($queryEnglishResolved);
    $rowEnglishResolved = $resultEnglishResolved->fetch_assoc();
    $q2englishresolved = $rowEnglishResolved['q2englishresolved'];

    $queryFilipinoResolved = "SELECT COUNT(*) AS q2filipinoresolved FROM academic_filipino WHERE quarter = 2  AND school = 'Sabangan Elementary School' AND status = 'resolved' AND school = 'Sabangan Elementary School'";
    $resultFilipinoResolved = $conn->query($queryFilipinoResolved);
    $rowFilipinoResolved = $resultFilipinoResolved->fetch_assoc();
    $q2filipinoresolved = $rowFilipinoResolved['q2filipinoresolved'];

    $queryNumeracyResolved = "SELECT COUNT(*) AS q2numeracyresolved FROM academic_numeracy WHERE quarter = 2  AND school = 'Sabangan Elementary School' AND status = 'resolved' AND school = 'Sabangan Elementary School'";
    $resultNumeracyResolved = $conn->query($queryNumeracyResolved);
    $rowNumeracyResolved = $resultNumeracyResolved->fetch_assoc();
    $q2numeracyresolved = $rowNumeracyResolved['q2numeracyresolved'];

    $queryBehavioralResolved = "SELECT COUNT(*) AS q2behavioralresolved FROM behavioral WHERE quarter = 2  AND school = 'Sabangan Elementary School' AND status = 'resolved' AND school = 'Sabangan Elementary School'";
    $resultBehavioralResolved = $conn->query($queryBehavioralResolved);
    $rowBehavioralResolved = $resultBehavioralResolved->fetch_assoc();
    $q2behavioralresolved = $rowBehavioralResolved['q2behavioralresolved'];

    $conn->close();
?>
<?php
    include('../../database.php');

    $queryEnglish = "SELECT COUNT(*) AS q3english FROM academic_english WHERE quarter = 3 AND school = 'Sabangan Elementary School'";
    $resultEnglish = $conn->query($queryEnglish);
    $rowEnglish = $resultEnglish->fetch_assoc();
    $q3english = $rowEnglish['q3english'];

    $queryFilipino = "SELECT COUNT(*) AS q3filipino FROM academic_filipino WHERE quarter = 3 AND school = 'Sabangan Elementary School'";
    $resultFilipino = $conn->query($queryFilipino);
    $rowFilipino = $resultFilipino->fetch_assoc();
    $q3filipino = $rowFilipino['q3filipino'];

    $queryNumeracy = "SELECT COUNT(*) AS q3numeracy FROM academic_numeracy WHERE quarter = 3 AND school = 'Sabangan Elementary School'";
    $resultNumeracy = $conn->query($queryNumeracy);
    $rowNumeracy = $resultNumeracy->fetch_assoc();
    $q3numeracy = $rowNumeracy['q3numeracy'];

    $queryBehavioral = "SELECT COUNT(*) AS q3behavioral FROM behavioral WHERE quarter = 3 AND school = 'Sabangan Elementary School'";
    $resultBehavioral = $conn->query($queryBehavioral);
    $rowBehavioral = $resultBehavioral->fetch_assoc();
    $q3behavioral = $rowBehavioral['q3behavioral'];

    $queryEnglishResolved = "SELECT COUNT(*) AS q3englishresolved FROM academic_english WHERE quarter = 3 AND status = 'resolved' AND school = 'Sabangan Elementary School'";
    $resultEnglishResolved = $conn->query($queryEnglishResolved);
    $rowEnglishResolved = $resultEnglishResolved->fetch_assoc();
    $q3englishresolved = $rowEnglishResolved['q3englishresolved'];

    $queryFilipinoResolved = "SELECT COUNT(*) AS q3filipinoresolved FROM academic_filipino WHERE quarter = 3 AND status = 'resolved' AND school = 'Sabangan Elementary School'";
    $resultFilipinoResolved = $conn->query($queryFilipinoResolved);
    $rowFilipinoResolved = $resultFilipinoResolved->fetch_assoc();
    $q3filipinoresolved = $rowFilipinoResolved['q3filipinoresolved'];

    $queryNumeracyResolved = "SELECT COUNT(*) AS q3numeracyresolved FROM academic_numeracy WHERE quarter = 3 AND status = 'resolved' AND school = 'Sabangan Elementary School'";
    $resultNumeracyResolved = $conn->query($queryNumeracyResolved);
    $rowNumeracyResolved = $resultNumeracyResolved->fetch_assoc();
    $q3numeracyresolved = $rowNumeracyResolved['q3numeracyresolved'];

    $queryBehavioralResolved = "SELECT COUNT(*) AS q3behavioralresolved FROM behavioral WHERE quarter = 3 AND status = 'resolved' AND school = 'Sabangan Elementary School'";
    $resultBehavioralResolved = $conn->query($queryBehavioralResolved);
    $rowBehavioralResolved = $resultBehavioralResolved->fetch_assoc();
    $q3behavioralresolved = $rowBehavioralResolved['q3behavioralresolved'];

    $conn->close();
?>
<?php
    include('../../database.php');

    $queryEnglish = "SELECT COUNT(*) AS q4english FROM academic_english WHERE quarter = 4 AND school = 'Sabangan Elementary School'";
    $resultEnglish = $conn->query($queryEnglish);
    $rowEnglish = $resultEnglish->fetch_assoc();
    $q4english = $rowEnglish['q4english'];

    $queryFilipino = "SELECT COUNT(*) AS q4filipino FROM academic_filipino WHERE quarter = 4 AND school = 'Sabangan Elementary School'";
    $resultFilipino = $conn->query($queryFilipino);
    $rowFilipino = $resultFilipino->fetch_assoc();
    $q4filipino = $rowFilipino['q4filipino'];

    $queryNumeracy = "SELECT COUNT(*) AS q4numeracy FROM academic_numeracy WHERE quarter = 4 AND school = 'Sabangan Elementary School'";
    $resultNumeracy = $conn->query($queryNumeracy);
    $rowNumeracy = $resultNumeracy->fetch_assoc();
    $q4numeracy = $rowNumeracy['q4numeracy'];

    $queryBehavioral = "SELECT COUNT(*) AS q4behavioral FROM behavioral WHERE quarter = 4 AND school = 'Sabangan Elementary School'";
    $resultBehavioral = $conn->query($queryBehavioral);
    $rowBehavioral = $resultBehavioral->fetch_assoc();
    $q4behavioral = $rowBehavioral['q4behavioral'];

    $queryEnglishResolved = "SELECT COUNT(*) AS q4englishresolved FROM academic_english WHERE quarter = 4 AND status = 'resolved' AND school = 'Sabangan Elementary School'";
    $resultEnglishResolved = $conn->query($queryEnglishResolved);
    $rowEnglishResolved = $resultEnglishResolved->fetch_assoc();
    $q4englishresolved = $rowEnglishResolved['q4englishresolved'];

    $queryFilipinoResolved = "SELECT COUNT(*) AS q4filipinoresolved FROM academic_filipino WHERE quarter = 4 AND status = 'resolved' AND school = 'Sabangan Elementary School'";
    $resultFilipinoResolved = $conn->query($queryFilipinoResolved);
    $rowFilipinoResolved = $resultFilipinoResolved->fetch_assoc();
    $q4filipinoresolved = $rowFilipinoResolved['q4filipinoresolved'];

    $queryNumeracyResolved = "SELECT COUNT(*) AS q4numeracyresolved FROM academic_numeracy WHERE quarter = 4 AND status = 'resolved' AND school = 'Sabangan Elementary School'";
    $resultNumeracyResolved = $conn->query($queryNumeracyResolved);
    $rowNumeracyResolved = $resultNumeracyResolved->fetch_assoc();
    $q4numeracyresolved = $rowNumeracyResolved['q4numeracyresolved'];

    $queryBehavioralResolved = "SELECT COUNT(*) AS q4behavioralresolved FROM behavioral WHERE quarter = 4 AND status = 'resolved' AND school = 'Sabangan Elementary School'";
    $resultBehavioralResolved = $conn->query($queryBehavioralResolved);
    $rowBehavioralResolved = $resultBehavioralResolved->fetch_assoc();
    $q4behavioralresolved = $rowBehavioralResolved['q4behavioralresolved'];

    $conn->close();
?>
<?php

$currentFileName1 = basename(__FILE__,'_q2.php');
include('../../database.php');

// Count the total rows in each table
$sqlEnglish = "SELECT COUNT(DISTINCT lrn) AS total FROM academic_english WHERE school = 'Sabangan Elementary School'";
$resultEnglish = $conn->query($sqlEnglish);
$rowEnglish = $resultEnglish->fetch_assoc();
$totalEnglish = $rowEnglish['total'];


$sqlFilipino = "SELECT COUNT(DISTINCT lrn) AS total FROM academic_filipino WHERE  school = 'Sabangan Elementary School'";
$resultFilipino = $conn->query($sqlFilipino);
$rowFilipino = $resultFilipino->fetch_assoc();
$totalFilipino = $rowFilipino['total'];

$sqlNumeracy = "SELECT COUNT(DISTINCT lrn) AS total FROM academic_numeracy WHERE  school = 'Sabangan Elementary School'";
$resultNumeracy = $conn->query($sqlNumeracy);
$rowNumeracy = $resultNumeracy->fetch_assoc();
$totalNumeracy = $rowNumeracy['total'];

$sqlBehavioral = "SELECT COUNT(DISTINCT lrn) AS total FROM behavioral WHERE  school = 'Sabangan Elementary School'";
$resultBehavioral = $conn->query($sqlBehavioral);
$rowBehavioral = $resultBehavioral->fetch_assoc();
$totalBehavioral = $rowBehavioral['total'];

$sqlEnglishResolved = "SELECT COUNT(DISTINCT lrn) AS total FROM academic_english WHERE status = 'resolved' AND school = 'Sabangan Elementary School'";
$resultEnglishResolved = $conn->query($sqlEnglishResolved);
$rowEnglishResolved = $resultEnglishResolved->fetch_assoc();
$totalEnglishResolved = $rowEnglishResolved['total'];

$sqlFilipinoResolved = "SELECT COUNT(DISTINCT lrn) AS total FROM academic_filipino WHERE status = 'resolved'AND school = 'Sabangan Elementary School' ";
$resultFilipinoResolved = $conn->query($sqlFilipinoResolved);
$rowFilipinoResolved = $resultFilipinoResolved->fetch_assoc();
$totalFilipinoResolved = $rowFilipinoResolved['total'];

$sqlNumeracyResolved = "SELECT COUNT(DISTINCT lrn) AS total FROM academic_numeracy WHERE status = 'resolved' AND school = 'Sabangan Elementary School'";
$resultNumeracyResolved = $conn->query($sqlNumeracyResolved);
$rowNumeracyResolved = $resultNumeracyResolved->fetch_assoc();
$totalNumeracyResolved = $rowNumeracyResolved['total'];

$sqlBehavioralResolved = "SELECT COUNT(DISTINCT lrn) AS total FROM behavioral WHERE status = 'resolved' AND school = 'Sabangan Elementary School'";
$resultBehavioralResolved = $conn->query($sqlBehavioralResolved);
$rowBehavioralResolved = $resultBehavioralResolved->fetch_assoc();
$totalBehavioralResolved = $rowBehavioralResolved['total'];

$conn->close();
?>
<?php
    include('../../database.php');

    // SQL query to count unique occurrences of "lrn" in the specified tables for kinder, I, II, and III grades
    $sql = "SELECT
                (SELECT COUNT(DISTINCT lrn) FROM (
                    SELECT lrn FROM academic_english WHERE grade = 'kinder' AND quarter = 2  AND school = 'Sabangan Elementary School'
                    UNION
                    SELECT lrn FROM academic_filipino WHERE grade = 'kinder' AND quarter = 2  AND school = 'Sabangan Elementary School'
                    UNION
                    SELECT lrn FROM academic_numeracy WHERE grade = 'kinder' AND quarter = 2  AND school = 'Sabangan Elementary School'
                    UNION
                    SELECT lrn FROM behavioral WHERE grade = 'kinder' AND quarter = 2  AND school = 'Sabangan Elementary School'
                ) AS kinder_lrns) AS totalkinder,
                (SELECT COUNT(DISTINCT lrn) FROM (
                    SELECT lrn FROM academic_english WHERE grade = 'I' AND quarter = 2  AND school = 'Sabangan Elementary School'
                    UNION
                    SELECT lrn FROM academic_filipino WHERE grade = 'I' AND quarter = 2  AND school = 'Sabangan Elementary School'
                    UNION
                    SELECT lrn FROM academic_numeracy WHERE grade = 'I' AND quarter = 2  AND school = 'Sabangan Elementary School'
                    UNION
                    SELECT lrn FROM behavioral WHERE grade = 'I' AND quarter = 2  AND school = 'Sabangan Elementary School'
                ) AS gradeone_lrns) AS totalone,
                (SELECT COUNT(DISTINCT lrn) FROM (
                    SELECT lrn FROM academic_english WHERE grade = 'II' AND quarter = 2  AND school = 'Sabangan Elementary School'
                    UNION
                    SELECT lrn FROM academic_filipino WHERE grade = 'II' AND quarter = 2  AND school = 'Sabangan Elementary School'
                    UNION
                    SELECT lrn FROM academic_numeracy WHERE grade = 'II' AND quarter = 2  AND school = 'Sabangan Elementary School'
                    UNION
                    SELECT lrn FROM behavioral WHERE grade = 'II' AND quarter = 2  AND school = 'Sabangan Elementary School'
                ) AS gradetwo_lrns) AS totaltwo,
                (SELECT COUNT(DISTINCT lrn) FROM (
                    SELECT lrn FROM academic_english WHERE grade = 'III' AND quarter = 2  AND school = 'Sabangan Elementary School'
                    UNION
                    SELECT lrn FROM academic_filipino WHERE grade = 'III' AND quarter = 2  AND school = 'Sabangan Elementary School'
                    UNION
                    SELECT lrn FROM academic_numeracy WHERE grade = 'III' AND quarter = 2  AND school = 'Sabangan Elementary School'
                    UNION
                    SELECT lrn FROM behavioral WHERE grade = 'III' AND quarter = 2  AND school = 'Sabangan Elementary School'
                ) AS gradethree_lrns) AS totalthree";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the total counts and store them in variables
        $row = $result->fetch_assoc();
        $totalkinder = $row['totalkinder'];
        $totalone = $row['totalone'];
        $totaltwo = $row['totaltwo'];
        $totalthree = $row['totalthree'];
    }

    // Close connection
    $conn->close();
?>
<?php
    include('../../database.php');

    // Query and variable names for Kinder grade and quarter 1
    $sqlKinderEnglish = "SELECT COUNT(LRN) AS count_kinder_english FROM academic_english WHERE grade = 'kinder' AND quarter =2  AND school = 'Sabangan Elementary School'";
    $resultKinderEnglish = mysqli_query($conn, $sqlKinderEnglish);
    $rowKinderEnglish = mysqli_fetch_assoc($resultKinderEnglish);
    $kinderenglish = $rowKinderEnglish['count_kinder_english'];

    $sqlKinderFilipino = "SELECT COUNT(LRN) AS count_kinder_filipino FROM academic_filipino WHERE grade = 'kinder' AND quarter =2  AND school = 'Sabangan Elementary School'";
    $resultKinderFilipino = mysqli_query($conn, $sqlKinderFilipino);
    $rowKinderFilipino = mysqli_fetch_assoc($resultKinderFilipino);
    $kinderfilipino = $rowKinderFilipino['count_kinder_filipino'];

    $sqlKinderNumeracy = "SELECT COUNT(LRN) AS count_kinder_numeracy FROM academic_numeracy WHERE grade = 'kinder' AND quarter =2  AND school = 'Sabangan Elementary School'";
    $resultKinderNumeracy = mysqli_query($conn, $sqlKinderNumeracy);
    $rowKinderNumeracy = mysqli_fetch_assoc($resultKinderNumeracy);
    $kindernumeracy = $rowKinderNumeracy['count_kinder_numeracy'];

    $sqlKinderBehavioral = "SELECT COUNT(LRN) AS count_kinder_behavioral FROM behavioral WHERE grade = 'kinder' AND quarter =2  AND school = 'Sabangan Elementary School'";
    $resultKinderBehavioral = mysqli_query($conn, $sqlKinderBehavioral);
    $rowKinderBehavioral = mysqli_fetch_assoc($resultKinderBehavioral);
    $kinderbehavioral = $rowKinderBehavioral['count_kinder_behavioral'];

    // Query and variable names for Grade I and quarter 1
    $sqlGradeIEnglish = "SELECT COUNT(LRN) AS count_grade_i_english FROM academic_english WHERE grade = 'I' AND quarter =2  AND school = 'Sabangan Elementary School'";
    $resultGradeIEnglish = mysqli_query($conn, $sqlGradeIEnglish);
    $rowGradeIEnglish = mysqli_fetch_assoc($resultGradeIEnglish);
    $oneenglish = $rowGradeIEnglish['count_grade_i_english'];

    $sqlGradeIFilipino = "SELECT COUNT(LRN) AS count_grade_i_filipino FROM academic_filipino WHERE grade = 'I' AND quarter =2  AND school = 'Sabangan Elementary School'";
    $resultGradeIFilipino = mysqli_query($conn, $sqlGradeIFilipino);
    $rowGradeIFilipino = mysqli_fetch_assoc($resultGradeIFilipino);
    $onefilipino = $rowGradeIFilipino['count_grade_i_filipino'];

    $sqlGradeINumeracy = "SELECT COUNT(LRN) AS count_grade_i_numeracy FROM academic_numeracy WHERE grade = 'I' AND quarter =2  AND school = 'Sabangan Elementary School'";
    $resultGradeINumeracy = mysqli_query($conn, $sqlGradeINumeracy);
    $rowGradeINumeracy = mysqli_fetch_assoc($resultGradeINumeracy);
    $onenumeracy = $rowGradeINumeracy['count_grade_i_numeracy'];

    $sqlGradeIBehavioral = "SELECT COUNT(LRN) AS count_grade_i_behavioral FROM behavioral WHERE grade = 'I' AND quarter =2  AND school = 'Sabangan Elementary School'";
    $resultGradeIBehavioral = mysqli_query($conn, $sqlGradeIBehavioral);
    $rowGradeIBehavioral = mysqli_fetch_assoc($resultGradeIBehavioral);
    $onebehavioral = $rowGradeIBehavioral['count_grade_i_behavioral'];

    // Query and variable names for Grade II and quarter 1
    $sqlGradeIIEnglish = "SELECT COUNT(LRN) AS count_grade_ii_english FROM academic_english WHERE grade = 'II' AND quarter =2  AND school = 'Sabangan Elementary School'";
    $resultGradeIIEnglish = mysqli_query($conn, $sqlGradeIIEnglish);
    $rowGradeIIEnglish = mysqli_fetch_assoc($resultGradeIIEnglish);
    $twoenglish = $rowGradeIIEnglish['count_grade_ii_english'];

    $sqlGradeIIFilipino = "SELECT COUNT(LRN) AS count_grade_ii_filipino FROM academic_filipino WHERE grade = 'II' AND quarter =2  AND school = 'Sabangan Elementary School'";
    $resultGradeIIFilipino = mysqli_query($conn, $sqlGradeIIFilipino);
    $rowGradeIIFilipino = mysqli_fetch_assoc($resultGradeIIFilipino);
    $twofilipino = $rowGradeIIFilipino['count_grade_ii_filipino'];

    $sqlGradeIINumeracy = "SELECT COUNT(LRN) AS count_grade_ii_numeracy FROM academic_numeracy WHERE grade = 'II' AND quarter =2  AND school = 'Sabangan Elementary School'";
    $resultGradeIINumeracy = mysqli_query($conn, $sqlGradeIINumeracy);
    $rowGradeIINumeracy = mysqli_fetch_assoc($resultGradeIINumeracy);
    $twonumeracy = $rowGradeIINumeracy['count_grade_ii_numeracy'];

    $sqlGradeIIBehavioral = "SELECT COUNT(LRN) AS count_grade_ii_behavioral FROM behavioral WHERE grade = 'II' AND quarter =2  AND school = 'Sabangan Elementary School'";
    $resultGradeIIBehavioral = mysqli_query($conn, $sqlGradeIIBehavioral);
    $rowGradeIIBehavioral = mysqli_fetch_assoc($resultGradeIIBehavioral);
    $twobehavioral = $rowGradeIIBehavioral['count_grade_ii_behavioral'];

    // Query and variable names for Grade III and quarter 1
    $sqlGradeIIIEnglish = "SELECT COUNT(LRN) AS count_grade_iii_english FROM academic_english WHERE grade = 'III' AND quarter =2  AND school = 'Sabangan Elementary School'";
    $resultGradeIIIEnglish = mysqli_query($conn, $sqlGradeIIIEnglish);
    $rowGradeIIIEnglish = mysqli_fetch_assoc($resultGradeIIIEnglish);
    $threeenglish = $rowGradeIIIEnglish['count_grade_iii_english'];

    $sqlGradeIIIFilipino = "SELECT COUNT(LRN) AS count_grade_iii_filipino FROM academic_filipino WHERE grade = 'III' AND quarter =2  AND school = 'Sabangan Elementary School'";
    $resultGradeIIIFilipino = mysqli_query($conn, $sqlGradeIIIFilipino);
    $rowGradeIIIFilipino = mysqli_fetch_assoc($resultGradeIIIFilipino);
    $threefilipino = $rowGradeIIIFilipino['count_grade_iii_filipino'];

    $sqlGradeIIINumeracy = "SELECT COUNT(LRN) AS count_grade_iii_numeracy FROM academic_numeracy WHERE grade = 'III' AND quarter =2  AND school = 'Sabangan Elementary School'";
    $resultGradeIIINumeracy = mysqli_query($conn, $sqlGradeIIINumeracy);
    $rowGradeIIINumeracy = mysqli_fetch_assoc($resultGradeIIINumeracy);
    $threenumeracy = $rowGradeIIINumeracy['count_grade_iii_numeracy'];

    $sqlGradeIIIBehavioral = "SELECT COUNT(LRN) AS count_grade_iii_behavioral FROM behavioral WHERE grade = 'III' AND quarter =2  AND school = 'Sabangan Elementary School'";
    $resultGradeIIIBehavioral = mysqli_query($conn, $sqlGradeIIIBehavioral);
    $rowGradeIIIBehavioral = mysqli_fetch_assoc($resultGradeIIIBehavioral);
    $threebehavioral = $rowGradeIIIBehavioral['count_grade_iii_behavioral'];

    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>PRINT</title>
    <style>
        body {
            background-color: white;
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #190572;
            padding: 10px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }
        header img {
            margin-right: 10px;
        }
        .update{
            margin-top: 20px;
            width: 550px;
            display: grid;
            grid-template-columns: auto auto;
            gap: 2px;
        }
        .details{
            display: grid;
            grid-template-columns: auto auto;
            gap: 5px;
            margin-top: -20px;
        }
        .update-record,
        .update-record2 {
            margin-top: 20px;
            margin-bottom: 20px;
            width: 550px;
            display: grid;
            grid-template-columns: auto auto;
            gap: 2px;
        }
        .label {
            background-color: #B7B7B7;
            color: #190572;
            padding: 5px 10px;
            border-radius: 5px;
            margin: 5px 0;
            grid-column: 1;
            width: 200px;
            text-align: left;
            font-weight: bold;
        }
        .response {
            margin: 5px 0;
            padding: 5px 10px;
            border-radius: 5px;
            background-color: #F3F3F3;
            border: none;
            grid-column: 2;
            width: 300px;
            color: #190572;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }
        td:first-child {
            text-align: left;
            font-weight: bold;
        }
        th {
            background-color: #190572;
            color: #FFFFFF;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:nth-child(odd) {
            background-color: transparent;
        }
        .line {
            width: 100%;
            height: 2px;
            background-color: #190572;
            margin-top: 40px;
            margin-bottom: 40px;
        }
        button{
            background-color: transparent;
            border: none;
        }


        .back-icon {
            left: 10px;
            font-size: 30px;
            color:#190572;
            text-decoration: none;
            cursor: pointer;
        }

        .back-icon i {
            margin-right: 5px;
        }

        .print-button {
            width: fit-content;
            background-color: #190572;
            letter-spacing: 1.2px;
            font-size: 15px;
            color: white;
            border: none;
            padding: 10px 35px;
            border-radius: 5px;
            cursor: pointer;
            margin-left: -180px;
}
        .print-button:hover {
            background-color: #0c044c;
        }
    </style>
</head>
<body>
    <header>
        <img src="../../img/logo.png" alt="Logo" width="70" height="70">
        <h2>E.D.G.E | P.A.R. Early Detection and Guidance for Education</h2>
    </header>
    <div class="update">
    <a href="principal_monitoring_reports_q2.php?employment_number=<?php echo isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value'; ?>" > <button class="back-icon"><i class='bx bxs-chevron-left'></i></button></a>
    <button class="print-button" onclick="printContent()">Print Content</button>
        <p class="label">School Year</p>
        <input class="response" type="text" value=" ">
    </div>
    <div class="details">
    <div class="update-record">
        <p class="label">School Name</p>
        <input class="response" type="text" value="Sabangan Elementary School">
    </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>P.A.R. Identification</th>
                <th>Q1</th>
                <th>Resolved</th>
                <th>Q2</th>
                <th>Resolved</th>
                <th>Q3</th>
                <th>Resolved</th>
                <th>Q4</th>
                <th>Resolved</th>
                <th>Total P.A.R.s</th>
                <th>Total Resolved</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                        <td>Academic - Literacy in English</td>
                        <td><?php echo $q1english ?></td>
                        <td><?php echo $q1englishresolved ?></td>
                        <td><?php echo $q2english ?></td>
                        <td><?php echo $q2englishresolved ?></td>
                        <td><?php echo $q3english ?></td>
                        <td><?php echo $q3englishresolved ?></td>
                        <td><?php echo $q4english ?></td>
                        <td><?php echo $q4englishresolved ?></td>
                        <td><?php echo $totalEnglish ?></td>
                        <td><?php echo $totalEnglishResolved ?></td>
                    </tr>
                    <tr>
                        <td>Academic - Literacy in Filipino</td>
                        <td><?php echo $q1filipino ?></td>
                        <td><?php echo $q1filipinoresolved ?></td>
                        <td><?php echo $q2filipino ?></td>
                        <td><?php echo $q2filipinoresolved ?></td>
                        <td><?php echo $q3filipino ?></td>
                        <td><?php echo $q3filipinoresolved ?></td>
                        <td><?php echo $q4filipino ?></td>
                        <td><?php echo $q4filipinoresolved ?></td>
                        <td><?php echo $totalFilipino ?></td>
                        <td><?php echo $totalFilipinoResolved ?></td>
                    </tr>
                    <tr>
                        <td>Academic - Numeracy</td>
                        <td><?php echo $q1numeracy ?></td>
                        <td><?php echo $q1numeracyresolved ?></td>
                        <td><?php echo $q2numeracy ?></td>
                        <td><?php echo $q2numeracyresolved ?></td>
                        <td><?php echo $q3numeracy ?></td>
                        <td><?php echo $q3numeracyresolved ?></td>
                        <td><?php echo $q4numeracy ?></td>
                        <td><?php echo $q4numeracyresolved ?></td>
                        <td><?php echo $totalNumeracy ?></td>
                        <td><?php echo $totalNumeracyResolved ?></td>
                    <tr>
                        <td>Behavioral</td>
                        <td><?php echo $q1behavioral ?></td>
                        <td><?php echo $q1behavioralresolved ?></td>
                        <td><?php echo $q2behavioral ?></td>
                        <td><?php echo $q2behavioralresolved ?></td>
                        <td><?php echo $q3behavioral ?></td>
                        <td><?php echo $q3behavioralresolved ?></td>
                        <td><?php echo $q4behavioral ?></td>
                        <td><?php echo $q4behavioralresolved ?></td>
                        <td><?php echo $totalBehavioral ?></td>
                        <td><?php echo $totalBehavioralResolved ?></td>
                </tr>
        </tbody>
    </table>
    <div class="line"></div>
    <div class="details" >
    <div class="update-record2">
        <p class="label">Quarter</p>
        <input class="response" type="text" value="2">
    </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>Grade level</th>
                <th>Academic - Literacy in English</th>
                <th>Academic - Literacy in Filipino</th>
                <th>Academic - Numeracy</th>
                <th>Behavioral</th>
                <th>Total P.A.R.s</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                        <td>Kinder</td>
                        <td><?php echo $kinderenglish?></td>
                        <td><?php echo $kinderfilipino?></td>
                        <td><?php echo $kindernumeracy?></td>
                        <td><?php echo $kinderbehavioral?></td>
                        <td><?php echo $totalkinder?></td>
                    </tr>
                    <tr>
                        <td>Grade 1</td>
                        <td><?php echo $oneenglish?></td>
                        <td><?php echo $onefilipino?></td>
                        <td><?php echo $onenumeracy?></td>
                        <td><?php echo $onebehavioral?></td>
                        <td><?php echo $totalone?></td>
                    </tr>
                    <tr>
                        <td>Grade 2</td>
                        <td><?php echo $twoenglish?></td>
                        <td><?php echo $twofilipino?></td>
                        <td><?php echo $twonumeracy?></td>
                        <td><?php echo $twobehavioral?></td>
                        <td><?php echo $totaltwo?></td>
                    </tr>
                    <tr>
                        <td>Grade 3</td>
                        <td><?php echo $threeenglish?></td>
                        <td><?php echo $threefilipino?></td>
                        <td><?php echo $threenumeracy?></td>
                        <td><?php echo $threebehavioral?></td>
                        <td><?php echo $totalthree?></td>
                    </tr>
        </tbody>
    </table>
    <script>
    function printContent() {
        window.print();
    }
</script>
</body>
</html>