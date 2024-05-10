<?php
    include('../../database.php');

    $classification = isset($_POST['classification']) ? $_POST['classification'] : 'academic_english';
    $school_year = isset($_POST['school-year']) ? $_POST['school-year'] : 2024;
    $sqlKinderEnglish = "SELECT COUNT(LRN) AS count_kinder_english FROM $classification WHERE grade = 'kinder' AND quarter = 4 AND school = 'Bacayao Sur Elementary School' AND year = $school_year";
    $resultKinderEnglish = mysqli_query($conn, $sqlKinderEnglish);
    $rowKinderEnglish = mysqli_fetch_assoc($resultKinderEnglish);
    $kinderenglishq4  = $rowKinderEnglish['count_kinder_english'];

    $sqlKinderFilipino = "SELECT COUNT(LRN) AS count_kinder_filipino FROM $classification WHERE grade = 'kinder' AND quarter = 4 AND school = 'Bacayao Sur Elementary School' AND year = $school_year";
    $resultKinderFilipino = mysqli_query($conn, $sqlKinderFilipino);
    $rowKinderFilipino = mysqli_fetch_assoc($resultKinderFilipino);
    $kinderfilipinoq4  = $rowKinderFilipino['count_kinder_filipino'];

    $sqlKinderNumeracy = "SELECT COUNT(LRN) AS count_kinder_numeracy FROM $classification WHERE grade = 'kinder' AND quarter = 4 AND school = 'Bacayao Sur Elementary School' AND year = $school_year";
    $resultKinderNumeracy = mysqli_query($conn, $sqlKinderNumeracy);
    $rowKinderNumeracy = mysqli_fetch_assoc($resultKinderNumeracy);
    $kindernumeracyq4  = $rowKinderNumeracy['count_kinder_numeracy'];

    $sqlKinderBehavioral = "SELECT COUNT(LRN) AS count_kinder_behavioral FROM $classification WHERE grade = 'kinder' AND quarter = 4 AND school = 'Bacayao Sur Elementary School' AND year = $school_year";
    $resultKinderBehavioral = mysqli_query($conn, $sqlKinderBehavioral);
    $rowKinderBehavioral = mysqli_fetch_assoc($resultKinderBehavioral);
    $kinderbehavioralq4  = $rowKinderBehavioral['count_kinder_behavioral'];

    // Query and variable names for Grade I and quarter 1
    $sqlGradeIEnglish = "SELECT COUNT(LRN) AS count_grade_i_english FROM $classification WHERE grade = 'I' AND quarter = 4 AND school = 'Bacayao Sur Elementary School' AND year = $school_year";
    $resultGradeIEnglish = mysqli_query($conn, $sqlGradeIEnglish);
    $rowGradeIEnglish = mysqli_fetch_assoc($resultGradeIEnglish);
    $oneenglishq4  = $rowGradeIEnglish['count_grade_i_english'];

    $sqlGradeIFilipino = "SELECT COUNT(LRN) AS count_grade_i_filipino FROM $classification WHERE grade = 'I' AND quarter = 4 AND school = 'Bacayao Sur Elementary School' AND year = $school_year";
    $resultGradeIFilipino = mysqli_query($conn, $sqlGradeIFilipino);
    $rowGradeIFilipino = mysqli_fetch_assoc($resultGradeIFilipino);
    $onefilipinoq4  = $rowGradeIFilipino['count_grade_i_filipino'];

    $sqlGradeINumeracy = "SELECT COUNT(LRN) AS count_grade_i_numeracy FROM $classification WHERE grade = 'I' AND quarter = 4 AND school = 'Bacayao Sur Elementary School' AND year = $school_year";
    $resultGradeINumeracy = mysqli_query($conn, $sqlGradeINumeracy);
    $rowGradeINumeracy = mysqli_fetch_assoc($resultGradeINumeracy);
    $onenumeracyq4  = $rowGradeINumeracy['count_grade_i_numeracy'];

    $sqlGradeIBehavioral = "SELECT COUNT(LRN) AS count_grade_i_behavioral FROM $classification WHERE grade = 'I' AND quarter = 4 AND school = 'Bacayao Sur Elementary School' AND year = $school_year";
    $resultGradeIBehavioral = mysqli_query($conn, $sqlGradeIBehavioral);
    $rowGradeIBehavioral = mysqli_fetch_assoc($resultGradeIBehavioral);
    $onebehavioralq4  = $rowGradeIBehavioral['count_grade_i_behavioral'];

    // Query and variable names for Grade II and quarter 1
    $sqlGradeIIEnglish = "SELECT COUNT(LRN) AS count_grade_ii_english FROM $classification WHERE grade = 'II' AND quarter = 4 AND school = 'Bacayao Sur Elementary School' AND year = $school_year";
    $resultGradeIIEnglish = mysqli_query($conn, $sqlGradeIIEnglish);
    $rowGradeIIEnglish = mysqli_fetch_assoc($resultGradeIIEnglish);
    $twoenglishq4  = $rowGradeIIEnglish['count_grade_ii_english'];

    $sqlGradeIIFilipino = "SELECT COUNT(LRN) AS count_grade_ii_filipino FROM $classification WHERE grade = 'II' AND quarter = 4 AND school = 'Bacayao Sur Elementary School' AND year = $school_year";
    $resultGradeIIFilipino = mysqli_query($conn, $sqlGradeIIFilipino);
    $rowGradeIIFilipino = mysqli_fetch_assoc($resultGradeIIFilipino);
    $twofilipinoq4  = $rowGradeIIFilipino['count_grade_ii_filipino'];

    $sqlGradeIINumeracy = "SELECT COUNT(LRN) AS count_grade_ii_numeracy FROM $classification WHERE grade = 'II' AND quarter = 4 AND school = 'Bacayao Sur Elementary School' AND year = $school_year";
    $resultGradeIINumeracy = mysqli_query($conn, $sqlGradeIINumeracy);
    $rowGradeIINumeracy = mysqli_fetch_assoc($resultGradeIINumeracy);
    $twonumeracyq4  = $rowGradeIINumeracy['count_grade_ii_numeracy'];

    $sqlGradeIIBehavioral = "SELECT COUNT(LRN) AS count_grade_ii_behavioral FROM $classification WHERE grade = 'II' AND quarter = 4 AND school = 'Bacayao Sur Elementary School' AND year = $school_year";
    $resultGradeIIBehavioral = mysqli_query($conn, $sqlGradeIIBehavioral);
    $rowGradeIIBehavioral = mysqli_fetch_assoc($resultGradeIIBehavioral);
    $twobehavioralq4  = $rowGradeIIBehavioral['count_grade_ii_behavioral'];

    // Query and variable names for Grade III and quarter 1
    $sqlGradeIIIEnglish = "SELECT COUNT(LRN) AS count_grade_iii_english FROM $classification WHERE grade = 'III' AND quarter = 4 AND school = 'Bacayao Sur Elementary School' AND year = $school_year";
    $resultGradeIIIEnglish = mysqli_query($conn, $sqlGradeIIIEnglish);
    $rowGradeIIIEnglish = mysqli_fetch_assoc($resultGradeIIIEnglish);
    $threeenglishq4  = $rowGradeIIIEnglish['count_grade_iii_english'];

    $sqlGradeIIIFilipino = "SELECT COUNT(LRN) AS count_grade_iii_filipino FROM $classification WHERE grade = 'III' AND quarter = 4 AND school = 'Bacayao Sur Elementary School' AND year = $school_year";
    $resultGradeIIIFilipino = mysqli_query($conn, $sqlGradeIIIFilipino);
    $rowGradeIIIFilipino = mysqli_fetch_assoc($resultGradeIIIFilipino);
    $threefilipinoq4  = $rowGradeIIIFilipino['count_grade_iii_filipino'];

    $sqlGradeIIINumeracy = "SELECT COUNT(LRN) AS count_grade_iii_numeracy FROM $classification WHERE grade = 'III' AND quarter = 4 AND school = 'Bacayao Sur Elementary School' AND year = $school_year";
    $resultGradeIIINumeracy = mysqli_query($conn, $sqlGradeIIINumeracy);
    $rowGradeIIINumeracy = mysqli_fetch_assoc($resultGradeIIINumeracy);
    $threenumeracyq4  = $rowGradeIIINumeracy['count_grade_iii_numeracy'];

    $sqlGradeIIIBehavioral = "SELECT COUNT(LRN) AS count_grade_iii_behavioral FROM $classification WHERE grade = 'III' AND quarter = 4 AND school = 'Bacayao Sur Elementary School' AND year = $school_year";
    $resultGradeIIIBehavioral = mysqli_query($conn, $sqlGradeIIIBehavioral);
    $rowGradeIIIBehavioral = mysqli_fetch_assoc($resultGradeIIIBehavioral);
    $threebehavioralq4  = $rowGradeIIIBehavioral['count_grade_iii_behavioral'];

    mysqli_close($conn);
?>