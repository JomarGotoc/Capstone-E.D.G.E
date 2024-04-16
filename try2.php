<?php
    include('database.php');

    // Define the quarters
    $quarters = array(1, 2, 3, 4);

    // Initialize total LRN counts for each school
    $bacayaototalpar = 0;
    $blisstotalpar = 0;
    $bolosantotalpar = 0;
    $bonuantotalpar = 0;
    $calmaytotalpar = 0;
    $caraeltotalpar = 0;
    $caranglaantotalpar = 0;
    $eastcentraltotalpar = 0;
    $federicototalpar = 0;
    $gregoriodelpilartotalpar = 0;
    $juanltotalpar = 0;
    $juanptotalpar = 0;
    $lasiptotalpar = 0;
    $leonfranciscototalpar = 0;
    $lomboytotalpar = 0;
    $lucaototalpar = 0;
    $maluedsurtotalpar = 0;
    $mamalinglingtotalpar = 0;
    $mangintebengtotalpar = 0;
    $northcentraltotalpar = 0;
    $pantaltotalpar = 0;
    $pascualatotalpar = 0;
    $pogolasiptotalpar = 0;
    $pugarototalpar = 0;
    $sabangantotalpar = 0;
    $salapingaototalpar = 0;
    $salisaytotalpar = 0;
    $suittotalpar = 0;
    $taysonrosariototalpar = 0;
    $tambactotalpar = 0;
    $tebengtotalpar = 0;
    $zaratetotalpar = 0;
    $westcentralItotalpar = 0;
    $westcentralIItotalpar = 0;

    // Loop through each quarter
    foreach ($quarters as $selectedQuarter) {
        // Query to count LRNs for Bacayao Sur Elementary School
        $sql_bacayao = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Bacayao Sur Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Bacayao Sur Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Bacayao Sur Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Bacayao Sur Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_bacayao = $conn->query($sql_bacayao);
        $row_bacayao = $result_bacayao->fetch_assoc();
        $bacayaototalpar += $row_bacayao['total_count']; // Update the total count for Bacayao Sur Elementary School

        // Query to count LRNs for Bliss Elementary School
        $sql_bliss = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Bliss Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Bliss Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Bliss Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Bliss Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_bliss = $conn->query($sql_bliss);
        $row_bliss = $result_bliss->fetch_assoc();
        $blisstotalpar += $row_bliss['total_count'];

        // Query to count LRNs for Bolosan Elementary School
        $sql_bolosan = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Bolosan Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Bolosan Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Bolosan Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Bolosan Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_bolosan = $conn->query($sql_bolosan);
        $row_bolosan = $result_bolosan->fetch_assoc();
        $bolosantotalpar += $row_bolosan['total_count'];

        // Query to count LRNs for Bonuan Boquig Elementary School
        $sql_bonuan = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Bonuan Boquig Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Bonuan Boquig Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Bonuan Boquig Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Bonuan Boquig Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_bonuan = $conn->query($sql_bonuan);
        $row_bonuan = $result_bonuan->fetch_assoc();
        $bonuantotalpar += $row_bonuan['total_count'];

        // Query to count LRNs for Calmay Elementary School
        $sql_calmay = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Calmay Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Calmay Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Calmay Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Calmay Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_calmay = $conn->query($sql_calmay);
        $row_calmay = $result_calmay->fetch_assoc();
        $calmaytotalpar += $row_calmay['total_count'];

        $sql_carael = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Carael Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Carael Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Carael Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Carael Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_carael = $conn->query($sql_carael);
        $row_carael = $result_carael->fetch_assoc();
        $caraeltotalpar += $row_carael['total_count'];

        $sql_carael = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Carael Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Carael Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Carael Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Carael Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_carael = $conn->query($sql_carael);
        $row_carael = $result_carael->fetch_assoc();
        $caraeltotalpar += $row_carael['total_count'];

        $sql_carael = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Carael Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Carael Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Carael Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Carael Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_carael = $conn->query($sql_carael);
        $row_carael = $result_carael->fetch_assoc();
        $caraeltotalpar += $row_carael['total_count'];

        $sql_eastcentral = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'East Central Integrated School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'East Central Integrated School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'East Central Integrated School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'East Central Integrated School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_eastcentral = $conn->query($sql_eastcentral);
        $row_eastcentral = $result_eastcentral->fetch_assoc();
        $eastcentraltotalpar += $row_eastcentral['total_count'];

        $sql_federicoceralde = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Federico N. Ceralde School Integrated School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Federico N. Ceralde School Integrated School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Federico N. Ceralde School Integrated School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Federico N. Ceralde School Integrated School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_federicoceralde = $conn->query($sql_federicoceralde);
        $row_federicoceralde = $result_federicoceralde->fetch_assoc();
        $federicototalpar += $row_federicoceralde['total_count'];

        $sql_gregoriodelpilar = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Gen. Gregorio Del Pilar Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Gen. Gregorio Del Pilar Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Gen. Gregorio Del Pilar Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Gen. Gregorio Del Pilar Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_gregoriodelpilar = $conn->query($sql_gregoriodelpilar);
        $row_gregoriodelpilar = $result_gregoriodelpilar->fetch_assoc();
        $gregoriodelpilartotalpar += $row_gregoriodelpilar['total_count'];

        $sql_juansiapno = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Juan L. Siapno Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Juan L. Siapno Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Juan L. Siapno Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Juan L. Siapno Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_juansiapno = $conn->query($sql_juansiapno);
        $row_juansiapno = $result_juansiapno->fetch_assoc();
        $juanltotalpar += $row_juansiapno['total_count'];

        $sql_juanguadiz = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Juan P. Guadiz Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Juan P. Guadiz Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Juan P. Guadiz Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Juan P. Guadiz Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_juanguadiz = $conn->query($sql_juanguadiz);
        $row_juanguadiz = $result_juanguadiz->fetch_assoc();
        $juanptotalpar += $row_juanguadiz['total_count'];

        $sql_lasipgrande = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Lasip Grande Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Lasip Grande Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Lasip Grande Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Lasip Grande Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_lasipgrande = $conn->query($sql_lasipgrande);
        $row_lasipgrande = $result_lasipgrande->fetch_assoc();
        $lasiptotalpar += $row_lasipgrande['total_count'];

        $sql_leon = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Leon-Francisco Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Leon-Francisco Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Leon-Francisco Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Leon-Francisco Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_leon = $conn->query($sql_leon);
        $row_leon = $result_leon->fetch_assoc();
        $leonfranciscototalpar += $row_leon['total_count'];

        $sql_lomboy = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Lomboy Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Lomboy Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Lomboy Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Lomboy Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_lomboy = $conn->query($sql_lomboy);
        $row_lomboy = $result_lomboy->fetch_assoc();
        $lomboytotalpar += $row_lomboy['total_count'];

        $sql_lucao = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Lucao Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Lucao Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Lucao Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Lucao Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_lucao = $conn->query($sql_lucao);
        $row_lucao = $result_lucao->fetch_assoc();
        $lucaototalpar += $row_lucao['total_count'];

        $sql_malued = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Malued Sur Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Malued Sur Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Malued Sur Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Malued Sur Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_malued = $conn->query($sql_malued);
        $row_malued = $result_malued->fetch_assoc();
        $maluedsurtotalpar += $row_malued['total_count'];

        $sql_mamalingling = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Mamalingling Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Mamalingling Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Mamalingling Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Mamalingling Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_mamalingling = $conn->query($sql_mamalingling);
        $row_mamalingling = $result_mamalingling->fetch_assoc();
        $mamalinglingtotalpar += $row_mamalingling['total_count'];

        $sql_mangin = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Mangin-Tebeng Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Mangin-Tebeng Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Mangin-Tebeng Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Mangin-Tebeng Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_mangin = $conn->query($sql_mangin);
        $row_mangin = $result_mangin->fetch_assoc();
        $mangintebengtotalpar += $row_mangin['total_count'];

        $sql_northcentral = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'North Central Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'North Central Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'North Central Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'North Central Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_northcentral = $conn->query($sql_northcentral);
        $row_northcentral = $result_northcentral->fetch_assoc();
        $northcentraltotalpar += $row_northcentral['total_count'];

        $sql_pantal = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Pantal Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Pantal Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Pantal Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Pantal Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_pantal = $conn->query($sql_pantal);
        $row_pantal = $result_pantal->fetch_assoc();
        $pantaltotalpar += $row_pantal['total_count'];

        $sql_pascuala = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Pascuala G. Villamil Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Pascuala G. Villamil Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Pascuala G. Villamil Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Pascuala G. Villamil Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_pascuala = $conn->query($sql_pascuala);
        $row_pascuala = $result_pascuala->fetch_assoc();
        $pascualatotalpar += $row_pascuala['total_count'];

        $sql_pogo = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Pogo-Lasip Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Pogo-Lasip Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Pogo-Lasip Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Pogo-Lasip Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_pogo = $conn->query($sql_pogo);
        $row_pogo = $result_pogo->fetch_assoc();
        $pogolasiptotalpar += $row_pogo['total_count'];

        $sql_pugaro = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Pugaro Integrated School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Pugaro Integrated School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Pugaro Integrated School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Pugaro Integrated School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_pugaro = $conn->query($sql_pugaro);
        $row_pugaro = $result_pugaro->fetch_assoc();
        $pugarototalpar += $row_pugaro['total_count'];

        $sql_sabangan = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Sabangan Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Sabangan Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Sabangan Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Sabangan Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_sabangan = $conn->query($sql_sabangan);
        $row_sabangan = $result_sabangan->fetch_assoc();
        $sabangantotalpar += $row_sabangan['total_count'];

        $sql_salapingao = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Salapingao Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Salapingao Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Salapingao Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Salapingao Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_salapingao = $conn->query($sql_salapingao);
        $row_salapingao = $result_salapingao->fetch_assoc();
        $salapingaototalpar += $row_salapingao['total_count'];

        $sql_salisay = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Salisay Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Salisay Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Salisay Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Salisay Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_salisay = $conn->query($sql_salisay);
        $row_salisay = $result_salisay->fetch_assoc();
        $salisaytotalpar += $row_salisay['total_count'];

        $sql_suit = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Suit Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Suit Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Suit Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Suit Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_suit = $conn->query($sql_suit);
        $row_suit = $result_suit->fetch_assoc();
        $suittotalpar += $row_suit['total_count'];

        $sql_ayson = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'T. Ayson Rosario Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'T. Ayson Rosario Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'T. Ayson Rosario Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'T. Ayson Rosario Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_ayson = $conn->query($sql_ayson);
        $row_ayson = $result_ayson->fetch_assoc();
        $taysonrosariototalpar += $row_ayson['total_count'];

        $sql_tambac = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Tambac Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Tambac Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Tambac Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Tambac Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_tambac = $conn->query($sql_tambac);
        $row_tambac = $result_tambac->fetch_assoc();
        $tambactotalpar += $row_tambac['total_count'];

        $sql_tebeng = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Tebeng Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Tebeng Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Tebeng Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Tebeng Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_tebeng = $conn->query($sql_tebeng);
        $row_tebeng = $result_tebeng->fetch_assoc();
        $tebengtotalpar += $row_tebeng['total_count'];

        $sql_zarate = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'Victoria Q. Zarate Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'Victoria Q. Zarate Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'Victoria Q. Zarate Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'Victoria Q. Zarate Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_zarate = $conn->query($sql_zarate);
        $row_zarate = $result_zarate->fetch_assoc();
        $zaratetotalpar += $row_zarate['total_count'];

        $sql_westI = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'West Central I Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'West Central I Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'West Central I Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'West Central I Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_westI = $conn->query($sql_westI);
        $row_westI = $result_westI->fetch_assoc();
        $westcentralItotalpar += $row_westI['total_count'];

        $sql_westII = "SELECT COUNT(DISTINCT lrn) AS total_count FROM (
            SELECT lrn FROM academic_english WHERE school = 'West Central II Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_filipino WHERE school = 'West Central II Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM academic_numeracy WHERE school = 'West Central II Elementary School' AND quarter = $selectedQuarter
            UNION
            SELECT lrn FROM behavioral WHERE school = 'West Central II Elementary School' AND quarter = $selectedQuarter
        ) AS all_lrns";
        $result_westII = $conn->query($sql_westII);
        $row_westII = $result_westII->fetch_assoc();
        $westcentralIItotalpar += $row_westII['total_count'];

    }

    // Close connection
    $conn->close();
?>