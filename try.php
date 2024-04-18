<?php
    include('database.php');
    // Schools array
    $schools = [
        'Bacayao Sur Elementary School',
        'Bliss Elementary School',
        'Bolosan Elementary School',
        'Bonuan Boquig Elementary School',
        'Calmay Elementary School',
        'Carael Elementary School',
        'Caranglaan Elementary School',
        'East Central Integrated School',
        'Federico N. Ceralde School Integrated School',
        'Gen. Gregorio Del Pilar Elementary School',
        'Juan L. Siapno Elementary School',
        'Juan P. Guadiz Elementary School',
        'Lasip Grande Elementary School',
        'Leon-Francisco Elementary School',
        'Lomboy Elementary School',
        'Lucao Elementary School',
        'Malued Sur Elementary School',
        'Mamalingling Elementary School',
        'Mangin-Tebeng Elementary School',
        'North Central Elementary School',
        'Pantal Elementary School',
        'Pascuala G. Villamil Elementary School',
        'Pogo-Lasip Elementary School',
        'Pugaro Integrated School',
        'Sabangan Elementary School',
        'Salapingao Elementary School',
        'Salisay Elementary School',
        'Suit Elementary School',
        'T. Ayson Rosario Elementary School',
        'Tambac Elementary School',
        'Tebeng Elementary School',
        'Victoria Q. Zarate Elementary School',
        'West Central I Elementary School',
        'West Central II Elementary School'
    ];

    // Associative array to store results
    $school_counts = [];

    $classification = isset($_POST['classification']) ? $_POST['classification'] : 'academic_english';
    foreach ($schools as $school) {
        $sql = "SELECT COUNT(DISTINCT lrn) AS distinct_lrns 
                FROM $classification 
                WHERE school = '$school'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Fetch the count and store it
            $row = $result->fetch_assoc();
            $school_counts[$school] = $row["distinct_lrns"];
        } else {
            // If no results, store 0
            $school_counts[$school] = 0;
        }
    }

    // Close connection
    $conn->close();
    $bacayaoCount = $school_counts['Bacayao Sur Elementary School'];
    $blissElementaryCount = $school_counts['Bliss Elementary School'];
    $bolosanElementaryCount = $school_counts['Bolosan Elementary School'];
    $bonuanBoquigElementaryCount = $school_counts['Bonuan Boquig Elementary School'];
    $calmayElementaryCount = $school_counts['Calmay Elementary School'];
    $caralElementaryCount = $school_counts['Carael Elementary School'];
    $caranglaanElementaryCount = $school_counts['Caranglaan Elementary School'];
    $eastCentralIntegratedCount = $school_counts['East Central Integrated School'];
    $federicoNCeraldeCount = $school_counts['Federico N. Ceralde School Integrated School'];
    $genGregorioDelPilarCount = $school_counts['Gen. Gregorio Del Pilar Elementary School'];
    $juanLSiapnoCount = $school_counts['Juan L. Siapno Elementary School'];
    $juanPGuadizCount = $school_counts['Juan P. Guadiz Elementary School'];
    $lasipGrandeCount = $school_counts['Lasip Grande Elementary School'];
    $leonFranciscoCount = $school_counts['Leon-Francisco Elementary School'];
    $lomboyCount = $school_counts['Lomboy Elementary School'];
    $lucaoCount = $school_counts['Lucao Elementary School'];
    $maluedSurCount = $school_counts['Malued Sur Elementary School'];
    $mamalinglingCount = $school_counts['Mamalingling Elementary School'];
    $manginTebengCount = $school_counts['Mangin-Tebeng Elementary School'];
    $northCentralCount = $school_counts['North Central Elementary School'];
    $pantalCount = $school_counts['Pantal Elementary School'];
    $pascualaGVillamilCount = $school_counts['Pascuala G. Villamil Elementary School'];
    $pogoLasipCount = $school_counts['Pogo-Lasip Elementary School'];
    $pugaroIntegratedCount = $school_counts['Pugaro Integrated School'];
    $sabanganCount = $school_counts['Sabangan Elementary School'];
    $salapingaoCount = $school_counts['Salapingao Elementary School'];
    $salisayCount = $school_counts['Salisay Elementary School'];
    $suitCount = $school_counts['Suit Elementary School'];
    $tAysonRosarioCount = $school_counts['T. Ayson Rosario Elementary School'];
    $tambacCount = $school_counts['Tambac Elementary School'];
    $tebengCount = $school_counts['Tebeng Elementary School'];
    $victoriaQZarateCount = $school_counts['Victoria Q. Zarate Elementary School'];
    $westCentralICount = $school_counts['West Central I Elementary School'];
    $westCentralIICount = $school_counts['West Central II Elementary School'];

?>
