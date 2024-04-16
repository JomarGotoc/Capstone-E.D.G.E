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
