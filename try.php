<?php
    include('../../database.php');

    // SQL query to count unique occurrences of "lrn" in the specified tables for kinder, I, II, and III grades
    $sql = "SELECT
                (SELECT COUNT(DISTINCT lrn) FROM (
                    SELECT lrn FROM academic_english WHERE grade = 'kinder' AND quarter = 4
                    UNION
                    SELECT lrn FROM academic_filipino WHERE grade = 'kinder' AND quarter = 4
                    UNION
                    SELECT lrn FROM academic_numeracy WHERE grade = 'kinder' AND quarter = 4
                    UNION
                    SELECT lrn FROM behavioral WHERE grade = 'kinder' AND quarter = 4
                ) AS kinder_lrns) AS totalkinder,
                (SELECT COUNT(DISTINCT lrn) FROM (
                    SELECT lrn FROM academic_english WHERE grade = 'I' AND quarter = 4
                    UNION
                    SELECT lrn FROM academic_filipino WHERE grade = 'I' AND quarter = 4
                    UNION
                    SELECT lrn FROM academic_numeracy WHERE grade = 'I' AND quarter = 4
                    UNION
                    SELECT lrn FROM behavioral WHERE grade = 'I' AND quarter = 4
                ) AS gradeone_lrns) AS totalone,
                (SELECT COUNT(DISTINCT lrn) FROM (
                    SELECT lrn FROM academic_english WHERE grade = 'II' AND quarter = 4
                    UNION
                    SELECT lrn FROM academic_filipino WHERE grade = 'II' AND quarter = 4
                    UNION
                    SELECT lrn FROM academic_numeracy WHERE grade = 'II' AND quarter = 4
                    UNION
                    SELECT lrn FROM behavioral WHERE grade = 'II' AND quarter = 4
                ) AS gradetwo_lrns) AS totaltwo,
                (SELECT COUNT(DISTINCT lrn) FROM (
                    SELECT lrn FROM academic_english WHERE grade = 'III' AND quarter = 4
                    UNION
                    SELECT lrn FROM academic_filipino WHERE grade = 'III' AND quarter = 4
                    UNION
                    SELECT lrn FROM academic_numeracy WHERE grade = 'III' AND quarter = 4
                    UNION
                    SELECT lrn FROM behavioral WHERE grade = 'III' AND quarter = 4
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
    $sqlKinderEnglish = "SELECT COUNT(LRN) AS count_kinder_english FROM academic_english WHERE grade = 'kinder' AND quarter = 4";
    $resultKinderEnglish = mysqli_query($conn, $sqlKinderEnglish);
    $rowKinderEnglish = mysqli_fetch_assoc($resultKinderEnglish);
    $kinderenglish = $rowKinderEnglish['count_kinder_english'];

    $sqlKinderFilipino = "SELECT COUNT(LRN) AS count_kinder_filipino FROM academic_filipino WHERE grade = 'kinder' AND quarter = 4";
    $resultKinderFilipino = mysqli_query($conn, $sqlKinderFilipino);
    $rowKinderFilipino = mysqli_fetch_assoc($resultKinderFilipino);
    $kinderfilipino = $rowKinderFilipino['count_kinder_filipino'];

    $sqlKinderNumeracy = "SELECT COUNT(LRN) AS count_kinder_numeracy FROM academic_numeracy WHERE grade = 'kinder' AND quarter = 4";
    $resultKinderNumeracy = mysqli_query($conn, $sqlKinderNumeracy);
    $rowKinderNumeracy = mysqli_fetch_assoc($resultKinderNumeracy);
    $kindernumeracy = $rowKinderNumeracy['count_kinder_numeracy'];

    $sqlKinderBehavioral = "SELECT COUNT(LRN) AS count_kinder_behavioral FROM behavioral WHERE grade = 'kinder' AND quarter = 4";
    $resultKinderBehavioral = mysqli_query($conn, $sqlKinderBehavioral);
    $rowKinderBehavioral = mysqli_fetch_assoc($resultKinderBehavioral);
    $kinderbehavioral = $rowKinderBehavioral['count_kinder_behavioral'];

    // Query and variable names for Grade I and quarter 1
    $sqlGradeIEnglish = "SELECT COUNT(LRN) AS count_grade_i_english FROM academic_english WHERE grade = 'I' AND quarter = 4";
    $resultGradeIEnglish = mysqli_query($conn, $sqlGradeIEnglish);
    $rowGradeIEnglish = mysqli_fetch_assoc($resultGradeIEnglish);
    $oneenglish = $rowGradeIEnglish['count_grade_i_english'];

    $sqlGradeIFilipino = "SELECT COUNT(LRN) AS count_grade_i_filipino FROM academic_filipino WHERE grade = 'I' AND quarter = 4";
    $resultGradeIFilipino = mysqli_query($conn, $sqlGradeIFilipino);
    $rowGradeIFilipino = mysqli_fetch_assoc($resultGradeIFilipino);
    $onefilipino = $rowGradeIFilipino['count_grade_i_filipino'];

    $sqlGradeINumeracy = "SELECT COUNT(LRN) AS count_grade_i_numeracy FROM academic_numeracy WHERE grade = 'I' AND quarter = 4";
    $resultGradeINumeracy = mysqli_query($conn, $sqlGradeINumeracy);
    $rowGradeINumeracy = mysqli_fetch_assoc($resultGradeINumeracy);
    $onenumeracy = $rowGradeINumeracy['count_grade_i_numeracy'];

    $sqlGradeIBehavioral = "SELECT COUNT(LRN) AS count_grade_i_behavioral FROM behavioral WHERE grade = 'I' AND quarter = 4";
    $resultGradeIBehavioral = mysqli_query($conn, $sqlGradeIBehavioral);
    $rowGradeIBehavioral = mysqli_fetch_assoc($resultGradeIBehavioral);
    $onebehavioral = $rowGradeIBehavioral['count_grade_i_behavioral'];

    // Query and variable names for Grade II and quarter 1
    $sqlGradeIIEnglish = "SELECT COUNT(LRN) AS count_grade_ii_english FROM academic_english WHERE grade = 'II' AND quarter = 4";
    $resultGradeIIEnglish = mysqli_query($conn, $sqlGradeIIEnglish);
    $rowGradeIIEnglish = mysqli_fetch_assoc($resultGradeIIEnglish);
    $twoenglish = $rowGradeIIEnglish['count_grade_ii_english'];

    $sqlGradeIIFilipino = "SELECT COUNT(LRN) AS count_grade_ii_filipino FROM academic_filipino WHERE grade = 'II' AND quarter = 4";
    $resultGradeIIFilipino = mysqli_query($conn, $sqlGradeIIFilipino);
    $rowGradeIIFilipino = mysqli_fetch_assoc($resultGradeIIFilipino);
    $twofilipino = $rowGradeIIFilipino['count_grade_ii_filipino'];

    $sqlGradeIINumeracy = "SELECT COUNT(LRN) AS count_grade_ii_numeracy FROM academic_numeracy WHERE grade = 'II' AND quarter = 4";
    $resultGradeIINumeracy = mysqli_query($conn, $sqlGradeIINumeracy);
    $rowGradeIINumeracy = mysqli_fetch_assoc($resultGradeIINumeracy);
    $twonumeracy = $rowGradeIINumeracy['count_grade_ii_numeracy'];

    $sqlGradeIIBehavioral = "SELECT COUNT(LRN) AS count_grade_ii_behavioral FROM behavioral WHERE grade = 'II' AND quarter = 4";
    $resultGradeIIBehavioral = mysqli_query($conn, $sqlGradeIIBehavioral);
    $rowGradeIIBehavioral = mysqli_fetch_assoc($resultGradeIIBehavioral);
    $twobehavioral = $rowGradeIIBehavioral['count_grade_ii_behavioral'];

    // Query and variable names for Grade III and quarter 1
    $sqlGradeIIIEnglish = "SELECT COUNT(LRN) AS count_grade_iii_english FROM academic_english WHERE grade = 'III' AND quarter = 4";
    $resultGradeIIIEnglish = mysqli_query($conn, $sqlGradeIIIEnglish);
    $rowGradeIIIEnglish = mysqli_fetch_assoc($resultGradeIIIEnglish);
    $threeenglish = $rowGradeIIIEnglish['count_grade_iii_english'];

    $sqlGradeIIIFilipino = "SELECT COUNT(LRN) AS count_grade_iii_filipino FROM academic_filipino WHERE grade = 'III' AND quarter = 4";
    $resultGradeIIIFilipino = mysqli_query($conn, $sqlGradeIIIFilipino);
    $rowGradeIIIFilipino = mysqli_fetch_assoc($resultGradeIIIFilipino);
    $threefilipino = $rowGradeIIIFilipino['count_grade_iii_filipino'];

    $sqlGradeIIINumeracy = "SELECT COUNT(LRN) AS count_grade_iii_numeracy FROM academic_numeracy WHERE grade = 'III' AND quarter = 4";
    $resultGradeIIINumeracy = mysqli_query($conn, $sqlGradeIIINumeracy);
    $rowGradeIIINumeracy = mysqli_fetch_assoc($resultGradeIIINumeracy);
    $threenumeracy = $rowGradeIIINumeracy['count_grade_iii_numeracy'];

    $sqlGradeIIIBehavioral = "SELECT COUNT(LRN) AS count_grade_iii_behavioral FROM behavioral WHERE grade = 'III' AND quarter = 4";
    $resultGradeIIIBehavioral = mysqli_query($conn, $sqlGradeIIIBehavioral);
    $rowGradeIIIBehavioral = mysqli_fetch_assoc($resultGradeIIIBehavioral);
    $threebehavioral = $rowGradeIIIBehavioral['count_grade_iii_behavioral'];

    mysqli_close($conn);
?>