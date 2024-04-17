<?php
    include('database.php');
    $tables = array(
        "academic_english",
        "academic_filipino",
        "academic_numeracy",
        "behavioral"
    );
        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    // Bacayao Sur Elementary School
    foreach ($tables as $table) {
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Bacayao Sur Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Bacayao Sur Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $bacayaopar = $total_count;
        $bacayaoupdate = $total_count1;

        // Calculate the bacayaopercentage
        $bacayaopercentage = ($bacayaoupdate / $bacayaopar) * 100;
        $bacayaopercentage = round($bacayaopercentage);
    } else {
        $bacayaopercentage = 0;
    }

    // Bliss Elementary School
        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Bliss Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Bliss Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $blisspar = $total_count;
        $blissupdate = $total_count1;

        // Calculate the blisspercentage
        $blisspercentage = ($blissupdate / $blisspar) * 100;
        $blisspercentage = round($blisspercentage);
    } else {
        $blisspercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Bolosan Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Bolosan Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $bolosanpar = $total_count;
        $bolosanupdate = $total_count1;

        // Calculate the bolosanpercentage
        $bolosanpercentage = ($bolosanupdate / $bolosanpar) * 100;
        $bolosanpercentage = round($bolosanpercentage);
    } else {
        $bolosanpercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Bonuan Boquig Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Bonuan Boquig Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $bonuanpar = $total_count;
        $bonuanupdate = $total_count1;

        // Calculate the bonuanpercentage
        $bonuanpercentage = ($bonuanupdate / $bonuanpar) * 100;
        $bonuanpercentage = round($bonuanpercentage);
    } else {
        $bonuanpercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Calmay Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Calmay Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $calmaypar = $total_count;
        $calmayupdate = $total_count1;

        // Calculate the calmaypercentage
        $calmaypercentage = ($calmayupdate / $calmaypar) * 100;
        $calmaypercentage = round($calmaypercentage);
    } else {
        $calmaypercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Carael Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Carael Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $caraelpar = $total_count;
        $caraelupdate = $total_count1;

        // Calculate the caraelpercentage
        $caraelpercentage = ($caraelupdate / $caraelpar) * 100;
        $caraelpercentage = round($caraelpercentage);
    } else {
        $caraelpercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Caranglaan Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Caranglaan Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $caranglaanpar = $total_count;
        $caranglaanupdate = $total_count1;

        // Calculate the caranglaanpercentage
        $caranglaanpercentage = ($caranglaanupdate / $caranglaanpar) * 100;
        $caranglaanpercentage = round($caranglaanpercentage);
    } else {
        $caranglaanpercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'East Central Integrated School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'East Central Integrated School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $eastpar = $total_count;
        $eastupdate = $total_count1;

        // Calculate the eastpercentage
        $eastpercentage = ($eastupdate / $eastpar) * 100;
        $eastpercentage = round($eastpercentage);
    } else {
        $eastpercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Federico N. Ceralde School Integrated School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Federico N. Ceralde School Integrated School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $federicopar = $total_count;
        $federicoupdate = $total_count1;

        // Calculate the federicopercentage
        $federicopercentage = ($federicoupdate / $federicopar) * 100;
        $federicopercentage = round($federicopercentage);
    } else {
        $federicopercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Gen. Gregorio Del Pilar Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Gen. Gregorio Del Pilar Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $genpar = $total_count;
        $genupdate = $total_count1;

        // Calculate the genpercentage
        $genpercentage = ($genupdate / $genpar) * 100;
        $genpercentage = round($genpercentage);
    } else {
        $genpercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Juan L. Siapno Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Juan L. Siapno Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $juanlpar = $total_count;
        $juanlupdate = $total_count1;

        // Calculate the juanlpercentage
        $juanlpercentage = ($juanlupdate / $juanlpar) * 100;
        $juanlpercentage = round($juanlpercentage);
    } else {
        $juanlpercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Juan P. Guadiz Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Juan P. Guadiz Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $juanppar = $total_count;
        $juanpupdate = $total_count1;

        // Calculate the juanppercentage
        $juanppercentage = ($juanpupdate / $juanppar) * 100;
        $juanppercentage = round($juanppercentage);
    } else {
        $juanppercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Lasip Grande Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Lasip Grande Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $lasippar = $total_count;
        $lasipupdate = $total_count1;

        // Calculate the lasippercentage
        $lasippercentage = ($lasipupdate / $lasippar) * 100;
        $lasippercentage = round($lasippercentage);
    } else {
        $lasippercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Leon-Francisco Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Leon-Francisco Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $leonpar = $total_count;
        $leonupdate = $total_count1;

        // Calculate the leonpercentage
        $leonpercentage = ($leonupdate / $leonpar) * 100;
        $leonpercentage = round($leonpercentage);
    } else {
        $leonpercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Lomboy Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Lomboy Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $lomboypar = $total_count;
        $lomboyupdate = $total_count1;

        // Calculate the lomboypercentage
        $lomboypercentage = ($lomboyupdate / $lomboypar) * 100;
        $lomboypercentage = round($lomboypercentage);
    } else {
        $lomboypercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Lucao Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Lucao Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $lucaopar = $total_count;
        $lucaoupdate = $total_count1;

        // Calculate the lucaopercentage
        $lucaopercentage = ($lucaoupdate / $lucaopar) * 100;
        $lucaopercentage = round($lucaopercentage);
    } else {
        $lucaopercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Malued Sur Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Malued Sur Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $maluedpar = $total_count;
        $maluedupdate = $total_count1;

        // Calculate the maluedpercentage
        $maluedpercentage = ($maluedupdate / $maluedpar) * 100;
        $maluedpercentage = round($maluedpercentage);
    } else {
        $maluedpercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {
        $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Mamalingling Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Mamalingling Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $mamalinglingpar = $total_count;
        $mamalinglingupdate = $total_count1;

        // Calculate the mamalinglingpercentage
        $mamalinglingpercentage = ($mamalinglingupdate / $mamalinglingpar) * 100;
        $mamalinglingpercentage = round($mamalinglingpercentage);
    } else {
        $mamalinglingpercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) { $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Mangin-Tebeng Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Mangin-Tebeng Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $manginpar = $total_count;
        $manginupdate = $total_count1;

        // Calculate the manginpercentage
        $manginpercentage = ($manginupdate / $manginpar) * 100;
        $manginpercentage = round($manginpercentage);
    } else {
        $manginpercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) { $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'North Central Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'North Central Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $northpar = $total_count;
        $northupdate = $total_count1;

        // Calculate the northpercentage
        $northpercentage = ($northupdate / $northpar) * 100;
        $northpercentage = round($northpercentage);
    } else {
        $northpercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) { $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Pantal Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Pantal Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $pantalpar = $total_count;
        $pantalupdate = $total_count1;

        // Calculate the pantalpercentage
        $pantalpercentage = ($pantalupdate / $pantalpar) * 100;
        $pantalpercentage = round($pantalpercentage);
    } else {
        $pantalpercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) { $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Pascuala G. Villamil Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Pascuala G. Villamil Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $pascualapar = $total_count;
        $pascualaupdate = $total_count1;

        // Calculate the pascualapercentage
        $pascualapercentage = ($pascualaupdate / $pascualapar) * 100;
        $pascualapercentage = round($pascualapercentage);
    } else {
        $pascualapercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) { $selectedQuarter = isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Pogo-Lasip Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Pogo-Lasip Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $pogopar = $total_count;
        $pogoupdate = $total_count1;

        // Calculate the pogopercentage
        $pogopercentage = ($pogoupdate / $pogopar) * 100;
        $pogopercentage = round($pogopercentage);
    } else {
        $pogopercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {  isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Pugaro Integrated School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Pugaro Integrated School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $pugaropar = $total_count;
        $pugaroupdate = $total_count1;

        // Calculate the pugaropercentage
        $pugaropercentage = ($pugaroupdate / $pugaropar) * 100;
        $pugaropercentage = round($pugaropercentage);
    } else {
        $pugaropercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {  isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Sabangan Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Sabangan Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $sabanganpar = $total_count;
        $sabanganupdate = $total_count1;
    
        // Calculate the sabanganpercentage
        $sabanganpercentage = ($sabanganupdate / $sabanganpar) * 100;
        $sabanganpercentage = round($sabanganpercentage);
    } else {
        $sabanganpercentage = 0;
    }

    $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {  isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Salapingao Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Salapingao Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $salipangaopar = $total_count;
        $salipangaoupdate = $total_count1;

        // Calculate the salipangaopercentage
        $salipangaopercentage = ($salipangaoupdate / $salipangaopar) * 100;
        $salipangaopercentage = round($salipangaopercentage);
    } else {
        $salipangaopercentage = 0;
    }

    $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {  isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Salisay Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Salisay Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $salisaypar = $total_count;
        $salisayupdate = $total_count1;

        // Calculate the salisaypercentage
        $salisaypercentage = ($salisayupdate / $salisaypar) * 100;
        $salisaypercentage = round($salisaypercentage);
    } else {
        $salisaypercentage = 0;
    }

    $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {  isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Suit Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Suit Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $suitpar = $total_count;
        $suitupdate = $total_count1;

        // Calculate the suitpercentage
        $suitpercentage = ($suitupdate / $suitpar) * 100;
        $suitpercentage = round($suitpercentage);
    } else {
        $suitpercentage = 0;
    }

    $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {  isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'T. Ayson Rosario Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'T. Ayson Rosario Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $aysonpar = $total_count;
        $aysonupdate = $total_count1;

        // Calculate the aysonpercentage
        $aysonpercentage = ($aysonupdate / $aysonpar) * 100;
        $aysonpercentage = round($aysonpercentage);
    } else {
        $aysonpercentage = 0;
    }

    $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {  isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Tambac Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Tambac Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $tambacpar = $total_count;
        $tambacupdate = $total_count1;

        // Calculate the tambacpercentage
        $tambacpercentage = ($tambacupdate / $tambacpar) * 100;
        $tambacpercentage = round($tambacpercentage);
    } else {
        $tambacpercentage = 0;
    }

    $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {  isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Tebeng Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Tebeng Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $tebengpar = $total_count;
        $tebengupdate = $total_count1;

        // Calculate the tebengpercentage
        $tebengpercentage = ($tebengupdate / $tebengpar) * 100;
        $tebengpercentage = round($tebengpercentage);
    } else {
        $tebengpercentage = 0;
    }

    $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {  isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Victoria Q. Zarate Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'Victoria Q. Zarate Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $victoriapar = $total_count;
        $victoriaupdate = $total_count1;

        // Calculate the victoriapercentage
        $victoriapercentage = ($victoriaupdate / $victoriapar) * 100;
        $victoriapercentage = round($victoriapercentage);
    } else {
        $victoriapercentage = 0;
    }

    $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {  isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'West Central II Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'West Central II Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $westpar = $total_count;
        $westupdate = $total_count1;

        // Calculate the westpercentage
        $westpercentage = ($westupdate / $westpar) * 100;
        $westpercentage = round($westpercentage);
    } else {
        $westpercentage = 0;
    }

        $lrn_counted = array();
    $lrn_counted1 = array();
    $total_count = 0;
    $total_count1 = 0;

    foreach ($tables as $table) {  isset($_POST['quarter']) ? $_POST['quarter'] : 1;
        $sql = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'West Central I Elementary School'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted)) {
                    $total_count++;
                    $lrn_counted[] = $row['lrn'];
                }
            }
        }
        $sql1 = "SELECT DISTINCT lrn FROM $table WHERE quarter = $selectedQuarter AND school = 'West Central I Elementary School' AND gname <> ''";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                if (!in_array($row['lrn'], $lrn_counted1)) {
                    $total_count1++;
                    $lrn_counted1[] = $row['lrn'];
                }
            }
        }
    }
    if ($total_count > 0) {
        $westpar = $total_count;
        $west1update = $total_count1;

        // Calculate the west1percentage
        $west1percentage = ($west1update / $westpar) * 100;
        $west1percentage = round($west1percentage);
    } else {
        $west1percentage = 0;
    }
    // Close connection
    $conn->close();
?>

<?php echo $bacayaopercentage ?>
<?php echo $blisspercentage ?>
<?php echo $bolosanpercentage ?>
<?php echo $bonuanpercentage ?>
<?php echo $calmaypercentage ?>
<?php echo $caraelpercentage ?>
<?php echo $caranglaanpercentage ?>
<?php echo $eastpercentage ?>
<?php echo $federicopercentage ?>
<?php echo $genpercentage ?>
<?php echo $juanlpercentage ?>
<?php echo $juanppercentage ?>
<?php echo $lasippercentage ?>
<?php echo $leonpercentage ?>
<?php echo $lomboypercentage ?>
<?php echo $lucaopercentage ?>
<?php echo $maluedpercentage ?>
<?php echo $mamalinglingpercentage ?>
<?php echo $manginpercentage ?>
<?php echo $northpercentage ?>
<?php echo $pantalpercentage ?>
<?php echo $pascualapercentage ?>
<?php echo $pogopercentage ?>
<?php echo $pugaropercentage ?>
<?php echo $sabanganpercentage ?>
<?php echo $salipangaopercentage ?>
<?php echo $salisaypercentage ?>
<?php echo $suitpercentage ?>
<?php echo $aysonpercentage ?>
<?php echo $tambacpercentage ?>
<?php echo $tebengpercentage ?>
<?php echo $victoriapercentage ?>
<?php echo $westpercentage ?>
<?php echo $west1percentage ?>




<form id="quarterForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <select id="quarterSelect" name="quarter">
                    <option value="1" <?php if(isset($_POST['quarter']) && $_POST['quarter'] == '1') echo 'selected'; ?>>Quarter 1</option>
                    <option value="2" <?php if(isset($_POST['quarter']) && $_POST['quarter'] == '2') echo 'selected'; ?>>Quarter 2</option>
                    <option value="3" <?php if(isset($_POST['quarter']) && $_POST['quarter'] == '3') echo 'selected'; ?>>Quarter 3</option>
                    <option value="4" <?php if(isset($_POST['quarter']) && $_POST['quarter'] == '4') echo 'selected'; ?>>Quarter 4</option>
                </select>
            </form>

            <script>
    document.getElementById("quarterSelect").addEventListener("change", function() {
        var selectedValue = this.value;
        console.log("Selected value:", selectedValue);
        document.getElementById("quarterForm").submit();
    });
</script>