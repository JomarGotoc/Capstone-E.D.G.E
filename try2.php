<?php
include('database.php');

$classification = isset($_POST['classification']) ? $_POST['classification'] : 'academic_english';

// School names
$schools = array(
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
);

$quarters = array(1, 2, 3, 4);

// Array to store counts for each school
$school_counts = array();

foreach ($schools as $school) {
    $school_counts[$school] = array();
    foreach ($quarters as $quarter) {
        $sql = "SELECT COUNT(DISTINCT lrn) AS lrn_count FROM `$classification` WHERE school = '$school' AND quarter = $quarter";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $school_counts[$school]["q$quarter"] = $row['lrn_count'];
            mysqli_free_result($result);
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);

// Assigning variables manually for each school and quarter
$bacayaoq1 = $school_counts['Bacayao Sur Elementary School']['q1'];
$bacayaoq2 = $school_counts['Bacayao Sur Elementary School']['q2'];
$bacayaoq3 = $school_counts['Bacayao Sur Elementary School']['q3'];
$bacayaoq4 = $school_counts['Bacayao Sur Elementary School']['q4'];

$blissq1 = $school_counts['Bliss Elementary School']['q1'];
$blissq2 = $school_counts['Bliss Elementary School']['q2'];
$blissq3 = $school_counts['Bliss Elementary School']['q3'];
$blissq4 = $school_counts['Bliss Elementary School']['q4'];

$bolosanq1 = $school_counts['Bolosan Elementary School']['q1'];
$bolosanq2 = $school_counts['Bolosan Elementary School']['q2'];
$bolosanq3 = $school_counts['Bolosan Elementary School']['q3'];
$bolosanq4 = $school_counts['Bolosan Elementary School']['q4'];

$bonuanq1 = $school_counts['Bonuan Boquig Elementary School']['q1'];
$bonuanq2 = $school_counts['Bonuan Boquig Elementary School']['q2'];
$bonuanq3 = $school_counts['Bonuan Boquig Elementary School']['q3'];
$bonuanq4 = $school_counts['Bonuan Boquig Elementary School']['q4'];

$calmayq1 = $school_counts['Calmay Elementary School']['q1'];
$calmayq2 = $school_counts['Calmay Elementary School']['q2'];
$calmayq3 = $school_counts['Calmay Elementary School']['q3'];
$calmayq4 = $school_counts['Calmay Elementary School']['q4'];

$caraelq1 = $school_counts['Carael Elementary School']['q1'];
$caraelq2 = $school_counts['Carael Elementary School']['q2'];
$caraelq3 = $school_counts['Carael Elementary School']['q3'];
$caraelq4 = $school_counts['Carael Elementary School']['q4'];

$caranglaanq1 = $school_counts['Caranglaan Elementary School']['q1'];
$caranglaanq2 = $school_counts['Caranglaan Elementary School']['q2'];
$caranglaanq3 = $school_counts['Caranglaan Elementary School']['q3'];
$caranglaanq4 = $school_counts['Caranglaan Elementary School']['q4'];

$eastq1 = $school_counts['East Central Integrated School']['q1'];
$eastq2 = $school_counts['East Central Integrated School']['q2'];
$eastq3 = $school_counts['East Central Integrated School']['q3'];
$eastq4 = $school_counts['East Central Integrated School']['q4'];

$federicoq1 = $school_counts['Federico N. Ceralde School Integrated School']['q1'];
$federicoq2 = $school_counts['Federico N. Ceralde School Integrated School']['q2'];
$federicoq3 = $school_counts['Federico N. Ceralde School Integrated School']['q3'];
$federicoq4 = $school_counts['Federico N. Ceralde School Integrated School']['q4'];

$gregorioq1 = $school_counts['Gen. Gregorio Del Pilar Elementary School']['q1'];
$gregorioq2 = $school_counts['Gen. Gregorio Del Pilar Elementary School']['q2'];
$gregorioq3 = $school_counts['Gen. Gregorio Del Pilar Elementary School']['q3'];
$gregorioq4 = $school_counts['Gen. Gregorio Del Pilar Elementary School']['q4'];

$juanlq1 = $school_counts['Juan L. Siapno Elementary School']['q1'];
$juanlq2 = $school_counts['Juan L. Siapno Elementary School']['q2'];
$juanlq3 = $school_counts['Juan L. Siapno Elementary School']['q3'];
$juanlq4 = $school_counts['Juan L. Siapno Elementary School']['q4'];

$juanpgq1 = $school_counts['Juan P. Guadiz Elementary School']['q1'];
$juanpgq2 = $school_counts['Juan P. Guadiz Elementary School']['q2'];
$juanpgq3 = $school_counts['Juan P. Guadiz Elementary School']['q3'];
$juanpgq4 = $school_counts['Juan P. Guadiz Elementary School']['q4'];

$lasipq1 = $school_counts['Lasip Grande Elementary School']['q1'];
$lasipq2 = $school_counts['Lasip Grande Elementary School']['q2'];
$lasipq3 = $school_counts['Lasip Grande Elementary School']['q3'];
$lasipq4 = $school_counts['Lasip Grande Elementary School']['q4'];

$leonfq1 = $school_counts['Leon-Francisco Elementary School']['q1'];
$leonfq2 = $school_counts['Leon-Francisco Elementary School']['q2'];
$leonfq3 = $school_counts['Leon-Francisco Elementary School']['q3'];
$leonfq4 = $school_counts['Leon-Francisco Elementary School']['q4'];

$lomboyq1 = $school_counts['Lomboy Elementary School']['q1'];
$lomboyq2 = $school_counts['Lomboy Elementary School']['q2'];
$lomboyq3 = $school_counts['Lomboy Elementary School']['q3'];
$lomboyq4 = $school_counts['Lomboy Elementary School']['q4'];

$lucaoq1 = $school_counts['Lucao Elementary School']['q1'];
$lucaoq2 = $school_counts['Lucao Elementary School']['q2'];
$lucaoq3 = $school_counts['Lucao Elementary School']['q3'];
$lucaoq4 = $school_counts['Lucao Elementary School']['q4'];

$maluedq1 = $school_counts['Malued Sur Elementary School']['q1'];
$maluedq2 = $school_counts['Malued Sur Elementary School']['q2'];
$maluedq3 = $school_counts['Malued Sur Elementary School']['q3'];
$maluedq4 = $school_counts['Malued Sur Elementary School']['q4'];

$mamalinglingq1 = $school_counts['Mamalingling Elementary School']['q1'];
$mamalinglingq2 = $school_counts['Mamalingling Elementary School']['q2'];
$mamalinglingq3 = $school_counts['Mamalingling Elementary School']['q3'];
$mamalinglingq4 = $school_counts['Mamalingling Elementary School']['q4'];

$mangintebengq1 = $school_counts['Mangin-Tebeng Elementary School']['q1'];
$mangintebengq2 = $school_counts['Mangin-Tebeng Elementary School']['q2'];
$mangintebengq3 = $school_counts['Mangin-Tebeng Elementary School']['q3'];
$mangintebengq4 = $school_counts['Mangin-Tebeng Elementary School']['q4'];

$northq1 = $school_counts['North Central Elementary School']['q1'];
$northq2 = $school_counts['North Central Elementary School']['q2'];
$northq3 = $school_counts['North Central Elementary School']['q3'];
$northq4 = $school_counts['North Central Elementary School']['q4'];

$pantalq1 = $school_counts['Pantal Elementary School']['q1'];
$pantalq2 = $school_counts['Pantal Elementary School']['q2'];
$pantalq3 = $school_counts['Pantal Elementary School']['q3'];
$pantalq4 = $school_counts['Pantal Elementary School']['q4'];

$pascualaq1 = $school_counts['Pascuala G. Villamil Elementary School']['q1'];
$pascualaq2 = $school_counts['Pascuala G. Villamil Elementary School']['q2'];
$pascualaq3 = $school_counts['Pascuala G. Villamil Elementary School']['q3'];
$pascualaq4 = $school_counts['Pascuala G. Villamil Elementary School']['q4'];

$pogolasipq1 = $school_counts['Pogo-Lasip Elementary School']['q1'];
$pogolasipq2 = $school_counts['Pogo-Lasip Elementary School']['q2'];
$pogolasipq3 = $school_counts['Pogo-Lasip Elementary School']['q3'];
$pogolasipq4 = $school_counts['Pogo-Lasip Elementary School']['q4'];

$pugaroq1 = $school_counts['Pugaro Integrated School']['q1'];
$pugaroq2 = $school_counts['Pugaro Integrated School']['q2'];
$pugaroq3 = $school_counts['Pugaro Integrated School']['q3'];
$pugaroq4 = $school_counts['Pugaro Integrated School']['q4'];

$sabanganq1 = $school_counts['Sabangan Elementary School']['q1'];
$sabanganq2 = $school_counts['Sabangan Elementary School']['q2'];
$sabanganq3 = $school_counts['Sabangan Elementary School']['q3'];
$sabanganq4 = $school_counts['Sabangan Elementary School']['q4'];

$salapingaoq1 = $school_counts['Salapingao Elementary School']['q1'];
$salapingaoq2 = $school_counts['Salapingao Elementary School']['q2'];
$salapingaoq3 = $school_counts['Salapingao Elementary School']['q3'];
$salapingaoq4 = $school_counts['Salapingao Elementary School']['q4'];

$salisayq1 = $school_counts['Salisay Elementary School']['q1'];
$salisayq2 = $school_counts['Salisay Elementary School']['q2'];
$salisayq3 = $school_counts['Salisay Elementary School']['q3'];
$salisayq4 = $school_counts['Salisay Elementary School']['q4'];

$suitq1 = $school_counts['Suit Elementary School']['q1'];
$suitq2 = $school_counts['Suit Elementary School']['q2'];
$suitq3 = $school_counts['Suit Elementary School']['q3'];
$suitq4 = $school_counts['Suit Elementary School']['q4'];

$taysonq1 = $school_counts['T. Ayson Rosario Elementary School']['q1'];
$taysonq2 = $school_counts['T. Ayson Rosario Elementary School']['q2'];
$taysonq3 = $school_counts['T. Ayson Rosario Elementary School']['q3'];
$taysonq4 = $school_counts['T. Ayson Rosario Elementary School']['q4'];

$tambacq1 = $school_counts['Tambac Elementary School']['q1'];
$tambacq2 = $school_counts['Tambac Elementary School']['q2'];
$tambacq3 = $school_counts['Tambac Elementary School']['q3'];
$tambacq4 = $school_counts['Tambac Elementary School']['q4'];

$tebengq1 = $school_counts['Tebeng Elementary School']['q1'];
$tebengq2 = $school_counts['Tebeng Elementary School']['q2'];
$tebengq3 = $school_counts['Tebeng Elementary School']['q3'];
$tebengq4 = $school_counts['Tebeng Elementary School']['q4'];

$zarateq1 = $school_counts['Victoria Q. Zarate Elementary School']['q1'];
$zarateq2 = $school_counts['Victoria Q. Zarate Elementary School']['q2'];
$zarateq3 = $school_counts['Victoria Q. Zarate Elementary School']['q3'];
$zarateq4 = $school_counts['Victoria Q. Zarate Elementary School']['q4'];

$west1q1 = $school_counts['West Central I Elementary School']['q1'];
$west1q2 = $school_counts['West Central I Elementary School']['q2'];
$west1q3 = $school_counts['West Central I Elementary School']['q3'];
$west1q4 = $school_counts['West Central I Elementary School']['q4'];

$west2q1 = $school_counts['West Central II Elementary School']['q1'];
$west2q2 = $school_counts['West Central II Elementary School']['q2'];
$west2q3 = $school_counts['West Central II Elementary School']['q3'];
$west2q4 = $school_counts['West Central II Elementary School']['q4'];

?>