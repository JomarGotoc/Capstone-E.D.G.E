<?php
include('database.php');

// Set the default quarter to 1 if it's not already set in $_POST
$selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;

// Define each school individually
$bacayaoSchool = "Bacayao Sur Elementary School";
$blissSchool = "Bliss Elementary School";
$bolosanSchool = "Bolosan Elementary School";
$bonuanBoquigSchool = "Bonuan Boquig Elementary School";
$calmaySchool = "Calmay Elementary School";
$caraelSchool = "Carael Elementary School";
$caranglaanSchool = "Caranglaan Elementary School";
$eastCentralSchool = "East Central Integrated School";
$federicoCeraldeSchool = "Federico N. Ceralde School Integrated School";
$gregorioPilarSchool = "Gen. Gregorio Del Pilar Elementary School";
$juanSiapnoSchool = "Juan L. Siapno Elementary School";
$juanGuadizSchool = "Juan P. Guadiz Elementary School";
$lasipGrandeSchool = "Lasip Grande Elementary School";
$leonFranciscoSchool = "Leon-Francisco Elementary School";
$lomboySchool = "Lomboy Elementary School";
$lucaoSchool = "Lucao Elementary School";
$maluedSurSchool = "Malued Sur Elementary School";
$mamalinglingSchool = "Mamalingling Elementary School";
$manginTebengSchool = "Mangin-Tebeng Elementary School";
$northCentralSchool = "North Central Elementary School";
$pantalSchool = "Pantal Elementary School";
$pascualaVillamilSchool = "Pascuala G. Villamil Elementary School";
$pogoLasipSchool = "Pogo-Lasip Elementary School";
$pugaroIntegratedSchool = "Pugaro Integrated School";
$sabanganSchool = "Sabangan Elementary School";
$salapingaoSchool = "Salapingao Elementary School";
$salisaySchool = "Salisay Elementary School";
$suitSchool = "Suit Elementary School";
$aysonRosarioSchool = "T. Ayson Rosario Elementary School";
$tambacSchool = "Tambac Elementary School";
$tebengSchool = "Tebeng Elementary School";
$zarateSchool = "Victoria Q. Zarate Elementary School";
$westCentral1School = "West Central I Elementary School";
$westCentral2School = "West Central II Elementary School";

// SQL queries to count LRN for each school and selected quarter
$sqlBacayaoBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$bacayaoSchool' AND quarter = $selectedQuarter";
$sqlBlissBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$blissSchool' AND quarter = $selectedQuarter";
$sqlBolosanBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$bolosanSchool' AND quarter = $selectedQuarter";
$sqlBonuanBoquigBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$bonuanBoquigSchool' AND quarter = $selectedQuarter";
$sqlCalmayBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$calmaySchool' AND quarter = $selectedQuarter";
$sqlCaraelBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$caraelSchool' AND quarter = $selectedQuarter";
$sqlCaranglaanBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$caranglaanSchool' AND quarter = $selectedQuarter";
$sqlEastCentralBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$eastCentralSchool' AND quarter = $selectedQuarter";
$sqlFedericoCeraldeBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$federicoCeraldeSchool' AND quarter = $selectedQuarter";
$sqlGregorioPilarBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$gregorioPilarSchool' AND quarter = $selectedQuarter";
$sqlJuanSiapnoBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$juanSiapnoSchool' AND quarter = $selectedQuarter";
$sqlJuanGuadizBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$juanGuadizSchool' AND quarter = $selectedQuarter";
$sqlLasipGrandeBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$lasipGrandeSchool' AND quarter = $selectedQuarter";
$sqlLeonFranciscoBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$leonFranciscoSchool' AND quarter = $selectedQuarter";
$sqlLomboyBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$lomboySchool' AND quarter = $selectedQuarter";
$sqlLucaoBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$lucaoSchool' AND quarter = $selectedQuarter";
$sqlMaluedSurBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$maluedSurSchool' AND quarter = $selectedQuarter";
$sqlMamalinglingBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$mamalinglingSchool' AND quarter = $selectedQuarter";
$sqlManginTebengBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$manginTebengSchool' AND quarter = $selectedQuarter";
$sqlNorthCentralBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$northCentralSchool' AND quarter = $selectedQuarter";
$sqlPantalBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$pantalSchool' AND quarter = $selectedQuarter";
$sqlPascualaVillamilBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$pascualaVillamilSchool' AND quarter = $selectedQuarter";
$sqlPogoLasipBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$pogoLasipSchool' AND quarter = $selectedQuarter";
$sqlPugaroIntegratedBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$pugaroIntegratedSchool' AND quarter = $selectedQuarter";
$sqlSabanganBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$sabanganSchool' AND quarter = $selectedQuarter";
$sqlSalapingaoBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$salapingaoSchool' AND quarter = $selectedQuarter";
$sqlSalisayBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$salisaySchool' AND quarter = $selectedQuarter";
$sqlSuitBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$suitSchool' AND quarter = $selectedQuarter";
$sqlAysonRosarioBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$aysonRosarioSchool' AND quarter = $selectedQuarter";
$sqlTambacBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$tambacSchool' AND quarter = $selectedQuarter";
$sqlTebengBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$tebengSchool' AND quarter = $selectedQuarter";
$sqlZarateBehavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$zarateSchool' AND quarter = $selectedQuarter";
$sqlWestCentral1Behavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$westCentral1School' AND quarter = $selectedQuarter";
$sqlWestCentral2Behavioral = "SELECT COUNT(lrn) AS lrn_count FROM behavioral WHERE school = '$westCentral2School' AND quarter = $selectedQuarter";

// Execute queries
$resultBacayaoBehavioral = $conn->query($sqlBacayaoBehavioral);
$resultBlissBehavioral = $conn->query($sqlBlissBehavioral);
$resultBolosanBehavioral = $conn->query($sqlBolosanBehavioral);
$resultBonuanBoquigBehavioral = $conn->query($sqlBonuanBoquigBehavioral);
$resultCalmayBehavioral = $conn->query($sqlCalmayBehavioral);
$resultCaraelBehavioral = $conn->query($sqlCaraelBehavioral);
$resultCaranglaanBehavioral = $conn->query($sqlCaranglaanBehavioral);
$resultEastCentralBehavioral = $conn->query($sqlEastCentralBehavioral);
$resultFedericoCeraldeBehavioral = $conn->query($sqlFedericoCeraldeBehavioral);
$resultGregorioPilarBehavioral = $conn->query($sqlGregorioPilarBehavioral);
$resultJuanSiapnoBehavioral = $conn->query($sqlJuanSiapnoBehavioral);
$resultJuanGuadizBehavioral = $conn->query($sqlJuanGuadizBehavioral);
$resultLasipGrandeBehavioral = $conn->query($sqlLasipGrandeBehavioral);
$resultLeonFranciscoBehavioral = $conn->query($sqlLeonFranciscoBehavioral);
$resultLomboyBehavioral = $conn->query($sqlLomboyBehavioral);
$resultLucaoBehavioral = $conn->query($sqlLucaoBehavioral);
$resultMaluedSurBehavioral = $conn->query($sqlMaluedSurBehavioral);
$resultMamalinglingBehavioral = $conn->query($sqlMamalinglingBehavioral);
$resultManginTebengBehavioral = $conn->query($sqlManginTebengBehavioral);
$resultNorthCentralBehavioral = $conn->query($sqlNorthCentralBehavioral);
$resultPantalBehavioral = $conn->query($sqlPantalBehavioral);
$resultPascualaVillamilBehavioral = $conn->query($sqlPascualaVillamilBehavioral);
$resultPogoLasipBehavioral = $conn->query($sqlPogoLasipBehavioral);
$resultPugaroIntegratedBehavioral = $conn->query($sqlPugaroIntegratedBehavioral);
$resultSabanganBehavioral = $conn->query($sqlSabanganBehavioral);
$resultSalapingaoBehavioral = $conn->query($sqlSalapingaoBehavioral);
$resultSalisayBehavioral = $conn->query($sqlSalisayBehavioral);
$resultSuitBehavioral = $conn->query($sqlSuitBehavioral);
$resultAysonRosarioBehavioral = $conn->query($sqlAysonRosarioBehavioral);
$resultTambacBehavioral = $conn->query($sqlTambacBehavioral);
$resultTebengBehavioral = $conn->query($sqlTebengBehavioral);
$resultZarateBehavioral = $conn->query($sqlZarateBehavioral);
$resultWestCentral1Behavioral = $conn->query($sqlWestCentral1Behavioral);
$resultWestCentral2Behavioral = $conn->query($sqlWestCentral2Behavioral);

// Check if queries executed successfully
if ($resultBacayaoBehavioral && $resultBlissBehavioral && $resultBolosanBehavioral && $resultBonuanBoquigBehavioral && $resultCalmayBehavioral && $resultCaraelBehavioral && $resultCaranglaanBehavioral && $resultEastCentralBehavioral && $resultFedericoCeraldeBehavioral && $resultGregorioPilarBehavioral && $resultJuanSiapnoBehavioral && $resultJuanGuadizBehavioral && $resultLasipGrandeBehavioral && $resultLeonFranciscoBehavioral && $resultLomboyBehavioral && $resultLucaoBehavioral && $resultMaluedSurBehavioral && $resultMamalinglingBehavioral && $resultManginTebengBehavioral && $resultNorthCentralBehavioral && $resultPantalBehavioral && $resultPascualaVillamilBehavioral && $resultPogoLasipBehavioral && $resultPugaroIntegratedBehavioral && $resultSabanganBehavioral && $resultSalapingaoBehavioral && $resultSalisayBehavioral && $resultSuitBehavioral && $resultAysonRosarioBehavioral && $resultTambacBehavioral && $resultTebengBehavioral && $resultZarateBehavioral && $resultWestCentral1Behavioral && $resultWestCentral2Behavioral) {
    // Fetch counts
    $rowBacayaoBehavioral = $resultBacayaoBehavioral->fetch_assoc();
    $rowBlissBehavioral = $resultBlissBehavioral->fetch_assoc();
    $rowBolosanBehavioral = $resultBolosanBehavioral->fetch_assoc();
    $rowBonuanBoquigBehavioral = $resultBonuanBoquigBehavioral->fetch_assoc();
    $rowCalmayBehavioral = $resultCalmayBehavioral->fetch_assoc();
    $rowCaraelBehavioral = $resultCaraelBehavioral->fetch_assoc();
    $rowCaranglaanBehavioral = $resultCaranglaanBehavioral->fetch_assoc();
    $rowEastCentralBehavioral = $resultEastCentralBehavioral->fetch_assoc();
    $rowFedericoCeraldeBehavioral = $resultFedericoCeraldeBehavioral->fetch_assoc();
    $rowGregorioPilarBehavioral = $resultGregorioPilarBehavioral->fetch_assoc();
    $rowJuanSiapnoBehavioral = $resultJuanSiapnoBehavioral->fetch_assoc();
    $rowJuanGuadizBehavioral = $resultJuanGuadizBehavioral->fetch_assoc();
    $rowLasipGrandeBehavioral = $resultLasipGrandeBehavioral->fetch_assoc();
    $rowLeonFranciscoBehavioral = $resultLeonFranciscoBehavioral->fetch_assoc();
    $rowLomboyBehavioral = $resultLomboyBehavioral->fetch_assoc();
    $rowLucaoBehavioral = $resultLucaoBehavioral->fetch_assoc();
    $rowMaluedSurBehavioral = $resultMaluedSurBehavioral->fetch_assoc();
    $rowMamalinglingBehavioral = $resultMamalinglingBehavioral->fetch_assoc();
    $rowManginTebengBehavioral = $resultManginTebengBehavioral->fetch_assoc();
    $rowNorthCentralBehavioral = $resultNorthCentralBehavioral->fetch_assoc();
    $rowPantalBehavioral = $resultPantalBehavioral->fetch_assoc();
    $rowPascualaVillamilBehavioral = $resultPascualaVillamilBehavioral->fetch_assoc();
    $rowPogoLasipBehavioral = $resultPogoLasipBehavioral->fetch_assoc();
    $rowPugaroIntegratedBehavioral = $resultPugaroIntegratedBehavioral->fetch_assoc();
    $rowSabanganBehavioral = $resultSabanganBehavioral->fetch_assoc();
    $rowSalapingaoBehavioral = $resultSalapingaoBehavioral->fetch_assoc();
    $rowSalisayBehavioral = $resultSalisayBehavioral->fetch_assoc();
    $rowSuitBehavioral = $resultSuitBehavioral->fetch_assoc();
    $rowAysonRosarioBehavioral = $resultAysonRosarioBehavioral->fetch_assoc();
    $rowTambacBehavioral = $resultTambacBehavioral->fetch_assoc();
    $rowTebengBehavioral = $resultTebengBehavioral->fetch_assoc();
    $rowZarateBehavioral = $resultZarateBehavioral->fetch_assoc();
    $rowWestCentral1Behavioral = $resultWestCentral1Behavioral->fetch_assoc();
    $rowWestCentral2Behavioral = $resultWestCentral2Behavioral->fetch_assoc();

    // Store counts in variables
    $bacayaoBehavioral = $rowBacayaoBehavioral['lrn_count'];
    $blissBehavioral = $rowBlissBehavioral['lrn_count'];
    $bolosanBehavioral = $rowBolosanBehavioral['lrn_count'];
    $bonuanBoquigBehavioral = $rowBonuanBoquigBehavioral['lrn_count'];
    $calmayBehavioral = $rowCalmayBehavioral['lrn_count'];
    $caraelBehavioral = $rowCaraelBehavioral['lrn_count'];
    $caranglaanBehavioral = $rowCaranglaanBehavioral['lrn_count'];
    $eastCentralBehavioral = $rowEastCentralBehavioral['lrn_count'];
    $federicoCeraldeBehavioral = $rowFedericoCeraldeBehavioral['lrn_count'];
    $gregorioPilarBehavioral = $rowGregorioPilarBehavioral['lrn_count'];
    $juanSiapnoBehavioral = $rowJuanSiapnoBehavioral['lrn_count'];
    $juanGuadizBehavioral = $rowJuanGuadizBehavioral['lrn_count'];
    $lasipGrandeBehavioral = $rowLasipGrandeBehavioral['lrn_count'];
    $leonFranciscoBehavioral = $rowLeonFranciscoBehavioral['lrn_count'];
    $lomboyBehavioral = $rowLomboyBehavioral['lrn_count'];
    $lucaoBehavioral = $rowLucaoBehavioral['lrn_count'];
    $maluedSurBehavioral = $rowMaluedSurBehavioral['lrn_count'];
    $mamalinglingBehavioral = $rowMamalinglingBehavioral['lrn_count'];
    $manginTebengBehavioral = $rowManginTebengBehavioral['lrn_count'];
    $northCentralBehavioral = $rowNorthCentralBehavioral['lrn_count'];
    $pantalBehavioral = $rowPantalBehavioral['lrn_count'];
    $pascualaVillamilBehavioral = $rowPascualaVillamilBehavioral['lrn_count'];
    $pogoLasipBehavioral = $rowPogoLasipBehavioral['lrn_count'];
    $pugaroIntegratedBehavioral = $rowPugaroIntegratedBehavioral['lrn_count'];
    $sabanganBehavioral = $rowSabanganBehavioral['lrn_count'];
    $salapingaoBehavioral = $rowSalapingaoBehavioral['lrn_count'];
    $salisayBehavioral = $rowSalisayBehavioral['lrn_count'];
    $suitBehavioral = $rowSuitBehavioral['lrn_count'];
    $aysonRosarioBehavioral = $rowAysonRosarioBehavioral['lrn_count'];
    $tambacBehavioral = $rowTambacBehavioral['lrn_count'];
    $tebengBehavioral = $rowTebengBehavioral['lrn_count'];
    $zarateBehavioral = $rowZarateBehavioral['lrn_count'];
    $westCentral1Behavioral = $rowWestCentral1Behavioral['lrn_count'];
    $westCentral2Behavioral = $rowWestCentral2Behavioral['lrn_count'];

    // Output counts
    echo "Count of LRN in Bacayao Sur Elementary School Behavioral: $bacayaoBehavioral<br>";
    echo "Count of LRN in Bliss Elementary School Behavioral: $blissBehavioral<br>";
    echo "Count of LRN in Bolosan Elementary School Behavioral: $bolosanBehavioral<br>";
    echo "Count of LRN in Bonuan Boquig Elementary School Behavioral: $bonuanBoquigBehavioral<br>";
    echo "Count of LRN in Calmay Elementary School Behavioral: $calmayBehavioral<br>";
    echo "Count of LRN in Carael Elementary School Behavioral: $caraelBehavioral<br>";
    echo "Count of LRN in Caranglaan Elementary School Behavioral: $caranglaanBehavioral<br>";
    echo "Count of LRN in East Central Integrated School Behavioral: $eastCentralBehavioral<br>";
    echo "Count of LRN in Federico N. Ceralde School Integrated School Behavioral: $federicoCeraldeBehavioral<br>";
    echo "Count of LRN in Gen. Gregorio Del Pilar Elementary School Behavioral: $gregorioPilarBehavioral<br>";
    echo "Count of LRN in Juan L. Siapno Elementary School Behavioral: $juanSiapnoBehavioral<br>";
    echo "Count of LRN in Juan P. Guadiz Elementary School Behavioral: $juanGuadizBehavioral<br>";
    echo "Count of LRN in Lasip Grande Elementary School Behavioral: $lasipGrandeBehavioral<br>";
    echo "Count of LRN in Leon-Francisco Elementary School Behavioral: $leonFranciscoBehavioral<br>";
    echo "Count of LRN in Lomboy Elementary School Behavioral: $lomboyBehavioral<br>";
    echo "Count of LRN in Lucao Elementary School Behavioral: $lucaoBehavioral<br>";
    echo "Count of LRN in Malued Sur Elementary School Behavioral: $maluedSurBehavioral<br>";
    echo "Count of LRN in Mamalingling Elementary School Behavioral: $mamalinglingBehavioral<br>";
    echo "Count of LRN in Mangin-Tebeng Elementary School Behavioral: $manginTebengBehavioral<br>";
    echo "Count of LRN in North Central Elementary School Behavioral: $northCentralBehavioral<br>";
    echo "Count of LRN in Pantal Elementary School Behavioral: $pantalBehavioral<br>";
    echo "Count of LRN in Pascuala G. Villamil Elementary School Behavioral: $pascualaVillamilBehavioral<br>";
    echo "Count of LRN in Pogo-Lasip Elementary School Behavioral: $pogoLasipBehavioral<br>";
    echo "Count of LRN in Pugaro Integrated School Behavioral: $pugaroIntegratedBehavioral<br>";
    echo "Count of LRN in Sabangan Elementary School Behavioral: $sabanganBehavioral<br>";
    echo "Count of LRN in Salapingao Elementary School Behavioral: $salapingaoBehavioral<br>";
    echo "Count of LRN in Salisay Elementary School Behavioral: $salisayBehavioral<br>";
    echo "Count of LRN in Suit Elementary School Behavioral: $suitBehavioral<br>";
    echo "Count of LRN in T. Ayson Rosario Elementary School Behavioral: $aysonRosarioBehavioral<br>";
    echo "Count of LRN in Tambac Elementary School Behavioral: $tambacBehavioral<br>";
    echo "Count of LRN in Tebeng Elementary School Behavioral: $tebengBehavioral<br>";
    echo "Count of LRN in Victoria Q. Zarate Elementary School Behavioral: $zarateBehavioral<br>";
    echo "Count of LRN in West Central I Elementary School Behavioral: $westCentral1Behavioral<br>";
    echo "Count of LRN in West Central II Elementary School Behavioral: $westCentral2Behavioral<br>";
} else {
    echo "Error: " . $conn->error;
}

// Close database connection
$conn->close();
?>
