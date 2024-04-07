<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalSabangan = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Sabangan Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalSabangan++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $wes1centralstudents = 0;
    $wes1centralfilipino = 0;
    $wes1centralnumeracy = 0;
    $wes1centralbehavioral = 0;
    $wes1centralenglish = 0;
    $wes1centraltotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'West Central II Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'West Central II Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'West Central II Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'West Central II Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'West Central II Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $wes1centralenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $wes1centralfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $wes1centralnumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $wes1centralbehavioral += $count_row['total'];
                    break;
                default:
                    $wes1centralstudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $wes1centraltotalpar = $wes1centralenglish + $wes1centralfilipino + $wes1centralnumeracy + $wes1centralbehavioral;

    $conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalwes1 = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'West Central II Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalwes1++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalbliss = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Bliss Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalbliss++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalbolosan = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Bolosan Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalbolosan++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalbonuan = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Bonuan Boquig Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalbonuan++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalcalmay = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Calmay Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalcalmay++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalcarael = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Carael Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalcarael++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalcaranglaan = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Caranglaan Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalcaranglaan++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totaleast = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'East Central Integrated School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totaleast++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalfederico = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Federico N. Ceralde School Integrated School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalfederico++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalgen = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Gen. Gregorio Del Pilar Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalgen++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totaljuanl = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Juan L. Siapno Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totaljuanl++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totallasip = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Lasip Grande Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totallasip++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalleon = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Leon-Francisco Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalleon++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totallomboy = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Lomboy Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totallomboy++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totallucao = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Lucao Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totallucao++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalmalued = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Malued Sur Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalmalued++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalmamalingling = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Mamalingling Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalmamalingling++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalmangin = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Mangin-Tebeng Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalmangin++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalnorth = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'North Central Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalnorth++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalpantal = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Pantal Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalpantal++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalpaascuala = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Pascuala G. Villamil Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalpaascuala++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalpogo = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Pogo-Lasip Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalpogo++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totaljuanp = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Juan P. Guadiz Elementary School	' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totaljuanp++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalpugaro = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Pugaro-Lasip Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalpugaro++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalsalipangao = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Salapingao Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalsalipangao++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalsalisay = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Salisay Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalsalisay++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalsuit = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Suit Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalsuit++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalayson = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'T. Ayson Rosario Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalayson++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totaltambac = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Tambac Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totaltambac++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totaltebeng = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Tebeng Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totaltebeng++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalvictoria = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Victoria Q. Zarate Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalvictoria++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalwest = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'West Central II Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalwest++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalbacayao = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Bacayao Sur Elementary School' AND quarter = '4'";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $lrn = $row['lrn'];
            if (!in_array($lrn, $lrn_counted)) { // Check if LRN already counted
                $totalbacayao++;
                $lrn_counted[] = $lrn; // Add LRN to counted list
            }
        }
        $result->free();
    } else {
        echo "Error: " . $conn->error;
    }
    
}
$conn->close();
?>
<?php
    include('../database.php');

    $queryEnglish = "SELECT COUNT(*) AS q1english FROM academic_english WHERE quarter = 1";
    $resultEnglish = $conn->query($queryEnglish);
    $rowEnglish = $resultEnglish->fetch_assoc();
    $q1english = $rowEnglish['q1english'];

    $queryFilipino = "SELECT COUNT(*) AS q1filipino FROM academic_filipino WHERE quarter = 1";
    $resultFilipino = $conn->query($queryFilipino);
    $rowFilipino = $resultFilipino->fetch_assoc();
    $q1filipino = $rowFilipino['q1filipino'];

    $queryNumeracy = "SELECT COUNT(*) AS q1numeracy FROM academic_numeracy WHERE quarter = 1";
    $resultNumeracy = $conn->query($queryNumeracy);
    $rowNumeracy = $resultNumeracy->fetch_assoc();
    $q1numeracy = $rowNumeracy['q1numeracy'];

    $queryBehavioral = "SELECT COUNT(*) AS q1behavioral FROM behavioral WHERE quarter = 1";
    $resultBehavioral = $conn->query($queryBehavioral);
    $rowBehavioral = $resultBehavioral->fetch_assoc();
    $q1behavioral = $rowBehavioral['q1behavioral'];

    $queryEnglishResolved = "SELECT COUNT(*) AS q1englishresolved FROM academic_english WHERE quarter = 1 AND status = 'resolved'";
    $resultEnglishResolved = $conn->query($queryEnglishResolved);
    $rowEnglishResolved = $resultEnglishResolved->fetch_assoc();
    $q1englishresolved = $rowEnglishResolved['q1englishresolved'];

    $queryFilipinoResolved = "SELECT COUNT(*) AS q1filipinoresolved FROM academic_filipino WHERE quarter = 1 AND status = 'resolved'";
    $resultFilipinoResolved = $conn->query($queryFilipinoResolved);
    $rowFilipinoResolved = $resultFilipinoResolved->fetch_assoc();
    $q1filipinoresolved = $rowFilipinoResolved['q1filipinoresolved'];

    $queryNumeracyResolved = "SELECT COUNT(*) AS q1numeracyresolved FROM academic_numeracy WHERE quarter = 1 AND status = 'resolved'";
    $resultNumeracyResolved = $conn->query($queryNumeracyResolved);
    $rowNumeracyResolved = $resultNumeracyResolved->fetch_assoc();
    $q1numeracyresolved = $rowNumeracyResolved['q1numeracyresolved'];

    $queryBehavioralResolved = "SELECT COUNT(*) AS q1behavioralresolved FROM behavioral WHERE quarter = 1 AND status = 'resolved'";
    $resultBehavioralResolved = $conn->query($queryBehavioralResolved);
    $rowBehavioralResolved = $resultBehavioralResolved->fetch_assoc();
    $q1behavioralresolved = $rowBehavioralResolved['q1behavioralresolved'];
    $conn->close();
?>
<?php
    include('../database.php');

    $queryEnglish = "SELECT COUNT(*) AS q2english FROM academic_english WHERE quarter = 2";
    $resultEnglish = $conn->query($queryEnglish);
    $rowEnglish = $resultEnglish->fetch_assoc();
    $q2english = $rowEnglish['q2english'];

    $queryFilipino = "SELECT COUNT(*) AS q2filipino FROM academic_filipino WHERE quarter = 2";
    $resultFilipino = $conn->query($queryFilipino);
    $rowFilipino = $resultFilipino->fetch_assoc();
    $q2filipino = $rowFilipino['q2filipino'];

    $queryNumeracy = "SELECT COUNT(*) AS q2numeracy FROM academic_numeracy WHERE quarter = 2";
    $resultNumeracy = $conn->query($queryNumeracy);
    $rowNumeracy = $resultNumeracy->fetch_assoc();
    $q2numeracy = $rowNumeracy['q2numeracy'];

    $queryBehavioral = "SELECT COUNT(*) AS q2behavioral FROM behavioral WHERE quarter = 2";
    $resultBehavioral = $conn->query($queryBehavioral);
    $rowBehavioral = $resultBehavioral->fetch_assoc();
    $q2behavioral = $rowBehavioral['q2behavioral'];

    $queryEnglishResolved = "SELECT COUNT(*) AS q2englishresolved FROM academic_english WHERE quarter = 2 AND status = 'resolved'";
    $resultEnglishResolved = $conn->query($queryEnglishResolved);
    $rowEnglishResolved = $resultEnglishResolved->fetch_assoc();
    $q2englishresolved = $rowEnglishResolved['q2englishresolved'];

    $queryFilipinoResolved = "SELECT COUNT(*) AS q2filipinoresolved FROM academic_filipino WHERE quarter = 2 AND status = 'resolved'";
    $resultFilipinoResolved = $conn->query($queryFilipinoResolved);
    $rowFilipinoResolved = $resultFilipinoResolved->fetch_assoc();
    $q2filipinoresolved = $rowFilipinoResolved['q2filipinoresolved'];

    $queryNumeracyResolved = "SELECT COUNT(*) AS q2numeracyresolved FROM academic_numeracy WHERE quarter = 2 AND status = 'resolved'";
    $resultNumeracyResolved = $conn->query($queryNumeracyResolved);
    $rowNumeracyResolved = $resultNumeracyResolved->fetch_assoc();
    $q2numeracyresolved = $rowNumeracyResolved['q2numeracyresolved'];

    $queryBehavioralResolved = "SELECT COUNT(*) AS q2behavioralresolved FROM behavioral WHERE quarter = 2 AND status = 'resolved'";
    $resultBehavioralResolved = $conn->query($queryBehavioralResolved);
    $rowBehavioralResolved = $resultBehavioralResolved->fetch_assoc();
    $q2behavioralresolved = $rowBehavioralResolved['q2behavioralresolved'];

    $conn->close();
?>
<?php
    include('../database.php');

    $queryEnglish = "SELECT COUNT(*) AS q3english FROM academic_english WHERE quarter = 3";
    $resultEnglish = $conn->query($queryEnglish);
    $rowEnglish = $resultEnglish->fetch_assoc();
    $q3english = $rowEnglish['q3english'];

    $queryFilipino = "SELECT COUNT(*) AS q3filipino FROM academic_filipino WHERE quarter = 3";
    $resultFilipino = $conn->query($queryFilipino);
    $rowFilipino = $resultFilipino->fetch_assoc();
    $q3filipino = $rowFilipino['q3filipino'];

    $queryNumeracy = "SELECT COUNT(*) AS q3numeracy FROM academic_numeracy WHERE quarter = 3";
    $resultNumeracy = $conn->query($queryNumeracy);
    $rowNumeracy = $resultNumeracy->fetch_assoc();
    $q3numeracy = $rowNumeracy['q3numeracy'];

    $queryBehavioral = "SELECT COUNT(*) AS q3behavioral FROM behavioral WHERE quarter = 3";
    $resultBehavioral = $conn->query($queryBehavioral);
    $rowBehavioral = $resultBehavioral->fetch_assoc();
    $q3behavioral = $rowBehavioral['q3behavioral'];

    $queryEnglishResolved = "SELECT COUNT(*) AS q3englishresolved FROM academic_english WHERE quarter = 3 AND status = 'resolved'";
    $resultEnglishResolved = $conn->query($queryEnglishResolved);
    $rowEnglishResolved = $resultEnglishResolved->fetch_assoc();
    $q3englishresolved = $rowEnglishResolved['q3englishresolved'];

    $queryFilipinoResolved = "SELECT COUNT(*) AS q3filipinoresolved FROM academic_filipino WHERE quarter = 3 AND status = 'resolved'";
    $resultFilipinoResolved = $conn->query($queryFilipinoResolved);
    $rowFilipinoResolved = $resultFilipinoResolved->fetch_assoc();
    $q3filipinoresolved = $rowFilipinoResolved['q3filipinoresolved'];

    $queryNumeracyResolved = "SELECT COUNT(*) AS q3numeracyresolved FROM academic_numeracy WHERE quarter = 3 AND status = 'resolved'";
    $resultNumeracyResolved = $conn->query($queryNumeracyResolved);
    $rowNumeracyResolved = $resultNumeracyResolved->fetch_assoc();
    $q3numeracyresolved = $rowNumeracyResolved['q3numeracyresolved'];

    $queryBehavioralResolved = "SELECT COUNT(*) AS q3behavioralresolved FROM behavioral WHERE quarter = 3 AND status = 'resolved'";
    $resultBehavioralResolved = $conn->query($queryBehavioralResolved);
    $rowBehavioralResolved = $resultBehavioralResolved->fetch_assoc();
    $q3behavioralresolved = $rowBehavioralResolved['q3behavioralresolved'];

    $conn->close();
?>
<?php
    include('../database.php');

    $queryEnglish = "SELECT COUNT(*) AS q4english FROM academic_english WHERE quarter = 4";
    $resultEnglish = $conn->query($queryEnglish);
    $rowEnglish = $resultEnglish->fetch_assoc();
    $q4english = $rowEnglish['q4english'];

    $queryFilipino = "SELECT COUNT(*) AS q4filipino FROM academic_filipino WHERE quarter = 4";
    $resultFilipino = $conn->query($queryFilipino);
    $rowFilipino = $resultFilipino->fetch_assoc();
    $q4filipino = $rowFilipino['q4filipino'];

    $queryNumeracy = "SELECT COUNT(*) AS q4numeracy FROM academic_numeracy WHERE quarter = 4";
    $resultNumeracy = $conn->query($queryNumeracy);
    $rowNumeracy = $resultNumeracy->fetch_assoc();
    $q4numeracy = $rowNumeracy['q4numeracy'];

    $queryBehavioral = "SELECT COUNT(*) AS q4behavioral FROM behavioral WHERE quarter = 4";
    $resultBehavioral = $conn->query($queryBehavioral);
    $rowBehavioral = $resultBehavioral->fetch_assoc();
    $q4behavioral = $rowBehavioral['q4behavioral'];

    $queryEnglishResolved = "SELECT COUNT(*) AS q4englishresolved FROM academic_english WHERE quarter = 4 AND status = 'resolved'";
    $resultEnglishResolved = $conn->query($queryEnglishResolved);
    $rowEnglishResolved = $resultEnglishResolved->fetch_assoc();
    $q4englishresolved = $rowEnglishResolved['q4englishresolved'];

    $queryFilipinoResolved = "SELECT COUNT(*) AS q4filipinoresolved FROM academic_filipino WHERE quarter = 4 AND status = 'resolved'";
    $resultFilipinoResolved = $conn->query($queryFilipinoResolved);
    $rowFilipinoResolved = $resultFilipinoResolved->fetch_assoc();
    $q4filipinoresolved = $rowFilipinoResolved['q4filipinoresolved'];

    $queryNumeracyResolved = "SELECT COUNT(*) AS q4numeracyresolved FROM academic_numeracy WHERE quarter = 4 AND status = 'resolved'";
    $resultNumeracyResolved = $conn->query($queryNumeracyResolved);
    $rowNumeracyResolved = $resultNumeracyResolved->fetch_assoc();
    $q4numeracyresolved = $rowNumeracyResolved['q4numeracyresolved'];

    $queryBehavioralResolved = "SELECT COUNT(*) AS q4behavioralresolved FROM behavioral WHERE quarter = 4 AND status = 'resolved'";
    $resultBehavioralResolved = $conn->query($queryBehavioralResolved);
    $rowBehavioralResolved = $resultBehavioralResolved->fetch_assoc();
    $q4behavioralresolved = $rowBehavioralResolved['q4behavioralresolved'];

    $conn->close();
?>
<?php

include('../database.php');

// Count the total rows in each table
$sqlEnglish = "SELECT COUNT(DISTINCT lrn) AS total FROM academic_english";
$resultEnglish = $conn->query($sqlEnglish);
$rowEnglish = $resultEnglish->fetch_assoc();
$totalEnglish = $rowEnglish['total'];

$sqlFilipino = "SELECT COUNT(DISTINCT lrn) AS total FROM academic_filipino";
$resultFilipino = $conn->query($sqlFilipino);
$rowFilipino = $resultFilipino->fetch_assoc();
$totalFilipino = $rowFilipino['total'];

$sqlNumeracy = "SELECT COUNT(DISTINCT lrn) AS total FROM academic_numeracy";
$resultNumeracy = $conn->query($sqlNumeracy);
$rowNumeracy = $resultNumeracy->fetch_assoc();
$totalNumeracy = $rowNumeracy['total'];

$sqlBehavioral = "SELECT COUNT(DISTINCT lrn) AS total FROM behavioral";
$resultBehavioral = $conn->query($sqlBehavioral);
$rowBehavioral = $resultBehavioral->fetch_assoc();
$totalBehavioral = $rowBehavioral['total'];

$sqlEnglishResolved = "SELECT COUNT(DISTINCT lrn) AS total FROM academic_english WHERE status = 'resolved'";
$resultEnglishResolved = $conn->query($sqlEnglishResolved);
$rowEnglishResolved = $resultEnglishResolved->fetch_assoc();
$totalEnglishResolved = $rowEnglishResolved['total'];

$sqlFilipinoResolved = "SELECT COUNT(DISTINCT lrn) AS total FROM academic_filipino WHERE status = 'resolved'";
$resultFilipinoResolved = $conn->query($sqlFilipinoResolved);
$rowFilipinoResolved = $resultFilipinoResolved->fetch_assoc();
$totalFilipinoResolved = $rowFilipinoResolved['total'];

$sqlNumeracyResolved = "SELECT COUNT(DISTINCT lrn) AS total FROM academic_numeracy WHERE status = 'resolved'";
$resultNumeracyResolved = $conn->query($sqlNumeracyResolved);
$rowNumeracyResolved = $resultNumeracyResolved->fetch_assoc();
$totalNumeracyResolved = $rowNumeracyResolved['total'];

$sqlBehavioralResolved = "SELECT COUNT(DISTINCT lrn) AS total FROM behavioral WHERE status = 'resolved'";
$resultBehavioralResolved = $conn->query($sqlBehavioralResolved);
$rowBehavioralResolved = $resultBehavioralResolved->fetch_assoc();
$totalBehavioralResolved = $rowBehavioralResolved['total'];

$conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $westcentralstudents = 0;
    $westcentralfilipino = 0;
    $westcentralnumeracy = 0;
    $westcentralbehavioral = 0;
    $westcentralenglish = 0;
    $westcentraltotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'West Central II Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'West Central II Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'West Central II Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'West Central II Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'West Central II Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $westcentralenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $westcentralfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $westcentralnumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $westcentralbehavioral += $count_row['total'];
                    break;
                default:
                    $westcentralstudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $westcentraltotalpar = $westcentralenglish + $westcentralfilipino + $westcentralnumeracy + $westcentralbehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $bucayaostudents = 0;
    $bucayaofilipino = 0;
    $bucayaonumeracy = 0;
    $bucayaobehavioral = 0;
    $bucayaoenglish = 0;
    $bucayaototalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Bacayao Sur Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Bacayao Sur Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Bacayao Sur Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Bacayao Sur Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Bacayao Sur Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $bucayaoenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $bucayaofilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $bucayaonumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $bucayaobehavioral += $count_row['total'];
                    break;
                default:
                    $bucayaostudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $bucayaoltotalpar = $bucayaoenglish + $bucayaofilipino + $bucayaonumeracy + $bucayaobehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $blissstudents = 0;
    $blissfilipino = 0;
    $blissnumeracy = 0;
    $blissbehavioral = 0;
    $blissenglish = 0;
    $blisstotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Bliss Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Bliss Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Bliss Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Bliss Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Bliss Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $blissenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $blissfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $blissnumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $blissbehavioral += $count_row['total'];
                    break;
                default:
                    $blissstudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $blisstotalpar = $blissenglish + $blissfilipino + $blissnumeracy + $blissbehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $bolosanstudents = 0;
    $bolosanfilipino = 0;
    $bolosannumeracy = 0;
    $bolosanbehavioral = 0;
    $bolosanenglish = 0;
    $bolosantotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Bolosan Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Bolosan Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Bolosan Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Bolosan Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Bolosan Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $bolosanenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $bolosanfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $bolosannumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $bolosanbehavioral += $count_row['total'];
                    break;
                default:
                    $bolosanstudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $bolosantotalpar = $bolosanenglish + $bolosanfilipino + $bolosannumeracy + $bolosanbehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $bonuanstudents = 0;
    $bonuanfilipino = 0;
    $bonuannumeracy = 0;
    $bonuanbehavioral = 0;
    $bonuanenglish = 0;
    $bonuantotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Bonuan Boquig Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Bonuan Boquig Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Bonuan Boquig Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Bonuan Boquig Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Bonuan Boquig Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $bonuanenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $bonuanfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $bonuannumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $bonuanbehavioral += $count_row['total'];
                    break;
                default:
                    $bonuanstudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $bonuantotalpar = $bonuanenglish + $bonuanfilipino + $bonuannumeracy + $bonuanbehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $calmaystudents = 0;
    $calmayfilipino = 0;
    $calmaynumeracy = 0;
    $calmaybehavioral = 0;
    $calmayenglish = 0;
    $calmaytotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Calmay Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Calmay Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Calmay Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Calmay Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Calmay Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $calmayenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $calmayfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $calmaynumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $calmaybehavioral += $count_row['total'];
                    break;
                default:
                    $calmaystudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $calmaytotalpar = $calmayenglish + $calmayfilipino + $calmaynumeracy + $calmaybehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $caraelstudents = 0;
    $caraelfilipino = 0;
    $caraelnumeracy = 0;
    $caraelbehavioral = 0;
    $caraelenglish = 0;
    $caraeltotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Carael Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Carael Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Carael Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Carael Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Carael Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $caraelenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $caraelfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $caraelnumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $caraelbehavioral += $count_row['total'];
                    break;
                default:
                    $caraelstudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $caraeltotalpar = $caraelenglish + $caraelfilipino + $caraelnumeracy + $caraelbehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $caranglaanstudents = 0;
    $caranglaanfilipino = 0;
    $caranglaannumeracy = 0;
    $caranglaanbehavioral = 0;
    $caranglaanenglish = 0;
    $caranglaantotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Carael Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Caranglaan Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Caranglaan Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Caranglaan Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Caranglaan Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $caranglaanenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $caranglaanfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $caranglaannumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $caranglaanbehavioral += $count_row['total'];
                    break;
                default:
                    $caranglaanstudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $caranglaantotalpar = $caranglaanenglish + $caranglaanfilipino + $caranglaannumeracy + $caranglaanbehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $eaststudents = 0;
    $eastfilipino = 0;
    $eastnumeracy = 0;
    $eastbehavioral = 0;
    $eastenglish = 0;
    $easttotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'East Central Integrated School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'East Central Integrated School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'East Central Integrated School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'East Central Integrated School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'East Central Integrated School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $eastenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $eastfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $eastnumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $eastbehavioral += $count_row['total'];
                    break;
                default:
                    $eaststudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $easttotalpar = $eastenglish + $eastfilipino + $eastnumeracy + $eastbehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $federicostudents = 0;
    $federicofilipino = 0;
    $federiconumeracy = 0;
    $federicobehavioral = 0;
    $federicoenglish = 0;
    $federicototalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Federico N. Ceralde School Integrated School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Federico N. Ceralde School Integrated School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Federico N. Ceralde School Integrated School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Federico N. Ceralde School Integrated School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Federico N. Ceralde School Integrated School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $federicoenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $federicofilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $federiconumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $federicobehavioral += $count_row['total'];
                    break;
                default:
                    $federicostudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $federicototalpar = $federicoenglish + $federicofilipino + $federiconumeracy + $federicobehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $genstudents = 0;
    $genfilipino = 0;
    $gennumeracy = 0;
    $genbehavioral = 0;
    $genenglish = 0;
    $gentotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Gen. Gregorio Del Pilar Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Gen. Gregorio Del Pilar Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Gen. Gregorio Del Pilar Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Gen. Gregorio Del Pilar Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Gen. Gregorio Del Pilar Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $genenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $genfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $gennumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $genbehavioral += $count_row['total'];
                    break;
                default:
                    $genstudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $gentotalpar = $genenglish + $genfilipino + $gennumeracy + $genbehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $juanlstudents = 0;
    $juanlfilipino = 0;
    $juanlnumeracy = 0;
    $juanlbehavioral = 0;
    $juanlenglish = 0;
    $juanltotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Juan L. Siapno Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Juan L. Siapno Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Juan L. Siapno Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Juan L. Siapno Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Juan L. Siapno Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $juanlenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $juanlfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $juanlnumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $juanlbehavioral += $count_row['total'];
                    break;
                default:
                    $juanlstudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $juanltotalpar = $juanlenglish + $juanlfilipino + $juanlnumeracy + $juanlbehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $juanpstudents = 0;
    $juanpfilipino = 0;
    $juanpnumeracy = 0;
    $juanpbehavioral = 0;
    $juanpenglish = 0;
    $juanptotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Juan P. Guadiz Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Juan P. Guadiz Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Juan P. Guadiz Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Juan P. Guadiz Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Juan P. Guadiz Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $juanpenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $juanpfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $juanpnumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $juanpbehavioral += $count_row['total'];
                    break;
                default:
                    $juanpstudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $juanptotalpar = $juanpenglish + $juanpfilipino + $juanpnumeracy + $juanpbehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $lasipstudents = 0;
    $lasipfilipino = 0;
    $lasipnumeracy = 0;
    $lasipbehavioral = 0;
    $lasipenglish = 0;
    $lasiptotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Lasip Grande Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Lasip Grande Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Lasip Grande Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Lasip Grande Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Lasip Grande Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $lasipenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $lasipfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $lasipnumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $lasipbehavioral += $count_row['total'];
                    break;
                default:
                    $lasipstudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $lasiptotalpar = $lasipenglish + $lasipfilipino + $lasipnumeracy + $lasipbehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $leonstudents = 0;
    $leonfilipino = 0;
    $leonnumeracy = 0;
    $leonbehavioral = 0;
    $leonenglish = 0;
    $leontotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Leon-Francisco Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Leon-Francisco Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Leon-Francisco Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Leon-Francisco Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Leon-Francisco Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $leonenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $leonfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $leonnumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $leonbehavioral += $count_row['total'];
                    break;
                default:
                    $leonstudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $leontotalpar = $leonenglish + $leonfilipino + $leonnumeracy + $leonbehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $lomboystudents = 0;
    $lomboyfilipino = 0;
    $lomboynumeracy = 0;
    $lomboybehavioral = 0;
    $lomboyenglish = 0;
    $lomboytotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Lomboy Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Lomboy Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Lomboy Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Lomboy Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Lomboy Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $lomboyenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $lomboyfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $lomboynumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $lomboybehavioral += $count_row['total'];
                    break;
                default:
                    $lomboystudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $lomboytotalpar = $lomboyenglish + $lomboyfilipino + $lomboynumeracy + $lomboybehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $lucaostudents = 0;
    $lucaofilipino = 0;
    $lucaonumeracy = 0;
    $lucaobehavioral = 0;
    $lucaoenglish = 0;
    $lucaototalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Lucao Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Lucao Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Lucao Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Lucao Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Lucao Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $lucaoenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $lucaofilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $lucaonumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $lucaobehavioral += $count_row['total'];
                    break;
                default:
                    $lucaostudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $lucaototalpar = $lucaoenglish + $lucaofilipino + $lucaonumeracy + $lucaobehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $maluedstudents = 0;
    $maluedfilipino = 0;
    $maluednumeracy = 0;
    $maluedbehavioral = 0;
    $maluedenglish = 0;
    $maluedtotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Malued Sur Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Malued Sur Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Malued Sur Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Malued Sur Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Malued Sur Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $maluedenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $maluedfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $maluednumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $maluedbehavioral += $count_row['total'];
                    break;
                default:
                    $maluedstudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $maluedtotalpar = $maluedenglish + $maluedfilipino + $maluednumeracy + $maluedbehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $mamalinglingstudents = 0;
    $mamalinglingfilipino = 0;
    $mamalinglingnumeracy = 0;
    $mamalinglingbehavioral = 0;
    $mamalinglingenglish = 0;
    $mamalinglingtotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Mamalingling Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Mamalingling Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Mamalingling Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Mamalingling Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Mamalingling Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $mamalinglingenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $mamalinglingfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $mamalinglingnumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $mamalinglingbehavioral += $count_row['total'];
                    break;
                default:
                    $mamalinglingstudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $mamalinglingtotalpar = $mamalinglingenglish + $mamalinglingfilipino + $mamalinglingnumeracy + $mamalinglingbehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $manginstudents = 0;
    $manginfilipino = 0;
    $manginnumeracy = 0;
    $manginbehavioral = 0;
    $manginenglish = 0;
    $mangintotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Mangin-Tebeng Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Mangin-Tebeng Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Mangin-Tebeng Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Mangin-Tebeng Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Mangin-Tebeng Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $manginenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $manginfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $manginnumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $manginbehavioral += $count_row['total'];
                    break;
                default:
                    $manginstudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $mangintotalpar = $manginenglish + $manginfilipino + $manginnumeracy + $manginbehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $northstudents = 0;
    $northfilipino = 0;
    $northnumeracy = 0;
    $northbehavioral = 0;
    $northenglish = 0;
    $northtotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'North Central Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'North Central Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'North Central Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'North Central Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'North Central Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $northenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $northfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $northnumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $northbehavioral += $count_row['total'];
                    break;
                default:
                    $northstudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $northtotalpar = $northenglish + $northfilipino + $northnumeracy + $northbehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $pantalstudents = 0;
    $pantalfilipino = 0;
    $pantalnumeracy = 0;
    $pantalbehavioral = 0;
    $pantalenglish = 0;
    $pantaltotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Pantal Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Pantal Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Pantal Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Pantal Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Pantal Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $pantalenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $pantalfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $pantalnumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $pantalbehavioral += $count_row['total'];
                    break;
                default:
                    $pantalstudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $pantaltotalpar = $pantalenglish + $pantalfilipino + $pantalnumeracy + $pantalbehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $pascualastudents = 0;
    $pascualafilipino = 0;
    $pascualanumeracy = 0;
    $pascualabehavioral = 0;
    $pascualaenglish = 0;
    $pascualatotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Pascuala G. Villamil Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Pascuala G. Villamil Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Pascuala G. Villamil Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Pascuala G. Villamil Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Pascuala G. Villamil Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $pascualaenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $pascualafilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $pascualanumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $pascualabehavioral += $count_row['total'];
                    break;
                default:
                    $pascualastudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $pascualatotalpar = $pascualaenglish + $pascualafilipino + $pascualanumeracy + $pascualabehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $pogostudents = 0;
    $pogofilipino = 0;
    $pogonumeracy = 0;
    $pogobehavioral = 0;
    $pogoenglish = 0;
    $pogototalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Pogo-Lasip Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Pogo-Lasip Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Pogo-Lasip Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Pogo-Lasip Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Pogo-Lasip Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $pogoenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $pogofilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $pogonumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $pogobehavioral += $count_row['total'];
                    break;
                default:
                    $pogostudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $pogototalpar = $pogoenglish + $pogofilipino + $pogonumeracy + $pogobehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $pugarostudents = 0;
    $pugarofilipino = 0;
    $pugaronumeracy = 0;
    $pugarobehavioral = 0;
    $pugaroenglish = 0;
    $pugarototalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Pugaro Integrated School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Pugaro Integrated School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Pugaro Integrated School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Pugaro Integrated School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Pugaro Integrated School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $pugaroenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $pugarofilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $pugaronumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $pugarobehavioral += $count_row['total'];
                    break;
                default:
                    $pugarostudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $pugarototalpar = $pugaroenglish + $pugarofilipino + $pugaronumeracy + $pugarobehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $sabanganstudents = 0;
    $sabanganfilipino = 0;
    $sabangannumeracy = 0;
    $sabanganbehavioral = 0;
    $sabanganenglish = 0;
    $sabangantotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Sabangan Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Sabangan Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Sabangan Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Sabangan Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Sabangan Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $sabanganenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $sabanganfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $sabangannumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $sabanganbehavioral += $count_row['total'];
                    break;
                default:
                    $sabanganstudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $sabangantotalpar = $sabanganenglish + $sabanganfilipino + $sabangannumeracy + $sabanganbehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $salapingaostudents = 0;
    $salapingaofilipino = 0;
    $salapingaonumeracy = 0;
    $salapingaobehavioral = 0;
    $salapingaoenglish = 0;
    $salapingaototalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Salapingao Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Salapingao Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Salapingao Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Salapingao Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Salapingao Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $salapingaoenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $salapingaofilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $salapingaonumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $salapingaobehavioral += $count_row['total'];
                    break;
                default:
                    $salapingaostudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $salapingaototalpar = $salapingaoenglish + $salapingaofilipino + $salapingaonumeracy + $salapingaobehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $salisaystudents = 0;
    $salisayfilipino = 0;
    $salisaynumeracy = 0;
    $salisaybehavioral = 0;
    $salisayenglish = 0;
    $salisaytotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Salisay Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Salisay Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Salisay Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Salisay Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Salisay Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $salisayenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $salisayfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $salisaynumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $salisaybehavioral += $count_row['total'];
                    break;
                default:
                    $salisaystudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $salisaytotalpar = $salisayenglish + $salisayfilipino + $salisaynumeracy + $salisaybehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $suitstudents = 0;
    $suitfilipino = 0;
    $suitnumeracy = 0;
    $suitbehavioral = 0;
    $suitenglish = 0;
    $suittotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Suit Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Suit Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Suit Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Suit Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Suit Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $suitenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $suitfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $suitnumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $suitbehavioral += $count_row['total'];
                    break;
                default:
                    $suitstudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $suittotalpar = $suitenglish + $suitfilipino + $suitnumeracy + $suitbehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $aysonstudents = 0;
    $aysonfilipino = 0;
    $aysonnumeracy = 0;
    $aysonbehavioral = 0;
    $aysonenglish = 0;
    $aysontotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'T. Ayson Rosario Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'T. Ayson Rosario Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'T. Ayson Rosario Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'T. Ayson Rosario Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'T. Ayson Rosario Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $aysonenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $aysonfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $aysonnumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $aysonbehavioral += $count_row['total'];
                    break;
                default:
                    $aysonstudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $aysontotalpar = $aysonenglish + $aysonfilipino + $aysonnumeracy + $aysonbehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $tambacstudents = 0;
    $tambacfilipino = 0;
    $tambacnumeracy = 0;
    $tambacbehavioral = 0;
    $tambacenglish = 0;
    $tambactotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Tambac Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Tambac Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Tambac Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Tambac Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Tambac Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $tambacenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $tambacfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $tambacnumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $tambacbehavioral += $count_row['total'];
                    break;
                default:
                    $tambacstudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $tambactotalpar = $tambacenglish + $tambacfilipino + $tambacnumeracy + $tambacbehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $tebengstudents = 0;
    $tebengfilipino = 0;
    $tebengnumeracy = 0;
    $tebengbehavioral = 0;
    $tebengenglish = 0;
    $tebengtotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Tebeng Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Tebeng Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Tebeng Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Tebeng Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Tebeng Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $tebengenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $tebengfilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $tebengnumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $tebengbehavioral += $count_row['total'];
                    break;
                default:
                    $tebengstudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $tebengtotalpar = $tebengenglish + $tebengfilipino + $tebengnumeracy + $tebengbehavioral;

    $conn->close();
?>
<?php
    include('../database.php');
    $tables = array();

    $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database' AND (table_name LIKE '%GRADE%' OR table_name LIKE '%SECTION%' OR table_name IN ('academic_english', 'academic_filipino', 'academic_numeracy', 'behavioral'))";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tables[] = $row["table_name"];
        }
    }

    $victoriastudents = 0;
    $victoriafilipino = 0;
    $victorianumeracy = 0;
    $victoriabehavioral = 0;
    $victoriaenglish = 0;
    $victoriatotalpar = 0;

    foreach ($tables as $table) {
        $count_sql = "SELECT COUNT(*) AS total FROM $table WHERE school = 'Victoria Q. Zarate Elementary School'";
        
        // Add conditions for specific tables
        switch ($table) {
            case 'academic_english':
                $count_sql .= " AND school = 'Victoria Q. Zarate Elementary School' AND quarter = '4'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Victoria Q. Zarate Elementary School' AND quarter = '4'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Victoria Q. Zarate Elementary School' AND quarter = '4'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Victoria Q. Zarate Elementary School' AND quarter = '4'";
                break;
            default:
                // Do nothing
                break;
        }
        
        // Execute the count query
        $count_result = $conn->query($count_sql);

        if ($count_result->num_rows > 0) {
            // Fetch the count result
            $count_row = $count_result->fetch_assoc();
            
            // Update counts based on table name
            switch ($table) {
                case 'academic_english':
                    $victoriaenglish += $count_row['total'];
                    break;
                case 'academic_filipino':
                    $victoriafilipino += $count_row['total'];
                    break;
                case 'academic_numeracy':
                    $victorianumeracy += $count_row['total'];
                    break;
                case 'behavioral':
                    $victoriabehavioral += $count_row['total'];
                    break;
                default:
                    $victoriastudents += $count_row['total'];
                    break;
            }
        }
    }

    // Calculate total count
    $victoriatotalpar = $victoriaenglish + $victoriafilipino + $victorianumeracy + $victoriabehavioral;

    $conn->close();
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
            background-color: #190572;
            color: #FFFFFF;
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
        <img src="../img/logo.png" alt="Logo" width="70" height="70">
        <h2>E.D.G.E | P.A.R. Early Detection and Guidance for Education</h2>
    </header>
    <div class="update">
    <a href="executive_monitoring_reports_q4.php?employment_number=<?php echo isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value'; ?>" > <button class="back-icon"><i class='bx bxs-chevron-left'></i></button></a>
    <button class="print-button" onclick="printContent()">Print Content</button>
        <p class="label">School Year</p>
        <input class="response" type="text" value="S.Y. 2023 - 2024" readonly>
    </div>
    <div class="details">
    <div class="update-record">
        <p class="label">Division</p>
        <input class="response" type="text" value="Dagupan City Division Elementary Schools" readonly>
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
                    </tr>
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
        <input class="response" type="text" value="4" readonly>
    </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>School Name</th>
                <th>Academic - Literacy in English</th>
                <th>Academic - Literacy in Filipino</th>
                <th>Academic - Numeracy</th>
                <th>Behavioral</th>
                <th>Total P.A.R.s</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                        <td>Bacayao Sur Elementary School</td>  
                        <td><?php echo $bucayaoenglish ?></td>
                        <td><?php echo $bucayaofilipino ?></td>
                        <td><?php echo $bucayaonumeracy ?></td>
                        <td><?php echo $bucayaobehavioral ?></td>
                        <td><?php echo $totalbacayao ?></td>
                    </tr>

                    <tr>
                        <td>Bliss Elementary School</td>
                        <td><?php echo $blissenglish ?></td>
                        <td><?php echo $blissfilipino ?></td>
                        <td><?php echo $blissnumeracy ?></td>
                        <td><?php echo $blissbehavioral ?></td>
                        <td><?php echo $totalbliss ?></td>
                    </tr>

                    <tr>
                        <td>Bolosan Elementary School</td>
                        <td><?php echo $bolosanenglish ?></td>
                        <td><?php echo $bolosanfilipino ?></td>
                        <td><?php echo $bolosannumeracy ?></td>
                        <td><?php echo $bolosanbehavioral ?></td>
                        <td><?php echo $totalbolosan ?></td>
                    </tr>

                    <tr>
                        <td>Bonuan Boquig Elementary School</td>
                        <td><?php echo $bonuanenglish ?></td>
                        <td><?php echo $bonuanfilipino ?></td>
                        <td><?php echo $bonuannumeracy ?></td>
                        <td><?php echo $bonuanbehavioral ?></td>
                        <td><?php echo $totalbonuan ?></td>
                    </tr>

                    <tr>
                        <td>Calmay Elementary School</td>
                        <td><?php echo $calmayenglish ?></td>
                        <td><?php echo $calmayfilipino ?></td>
                        <td><?php echo $calmaynumeracy ?></td>
                        <td><?php echo $calmaybehavioral ?></td>
                        <td><?php echo $totalcalmay ?></td>
                    </tr>

                    <tr>
                        <td>Carael Elementary School<</td>
                        <td><?php echo $caraelenglish ?></td>
                        <td><?php echo $caraelfilipino ?></td>
                        <td><?php echo $caraelnumeracy ?></td>
                        <td><?php echo $caraelbehavioral ?></td>
                        <td><?php echo $totalcarael ?></td>
                    </tr>

                    <tr>
                        <td>Caranglaan Elementary School</td>
                        <td><?php echo $caranglaanenglish ?></td>
                        <td><?php echo $caranglaanfilipino ?></td>
                        <td><?php echo $caranglaannumeracy ?></td>
                        <td><?php echo $caranglaanbehavioral ?></td>
                        <td><?php echo $totalcaranglaan ?></td>
                    </tr>

                    <tr>
                        <td>East Central Integrated School</td>
                        <td><?php echo $eastenglish ?></td>
                        <td><?php echo $eastfilipino ?></td>
                        <td><?php echo $eastnumeracy ?></td>
                        <td><?php echo $eastbehavioral ?></td>
                        <td><?php echo $totaleast ?></td>
                    </tr>

                    <tr>
                        <td>Federico N. Ceralde School Integrated School</td>
                        <td><?php echo $federicoenglish ?></td>
                        <td><?php echo $federicofilipino ?></td>
                        <td><?php echo $federiconumeracy ?></td>
                        <td><?php echo $federicobehavioral ?></td>
                        <td><?php echo $totalfederico ?></td>
                    </tr>

                    <tr>
                        <td>Gen. Gregorio Del Pilar Elementary School</td>
                        <td><?php echo $genenglish ?></td>
                        <td><?php echo $genfilipino ?></td>
                        <td><?php echo $gennumeracy ?></td>
                        <td><?php echo $genbehavioral ?></td>
                        <td><?php echo $totalgen ?></td>
                    </tr>

                    <tr>
                        <td>Juan L. Siapno Elementary School</td>
                        <td><?php echo $juanlenglish ?></td>
                        <td><?php echo $juanlfilipino ?></td>
                        <td><?php echo $juanlnumeracy ?></td>
                        <td><?php echo $juanlbehavioral ?></td>
                        <td><?php echo $totaljuanl ?></td>
                    </tr>

                    <tr>
                        <td>Juan P. Guadiz Elementary School</td>
                        <td><?php echo $juanpenglish ?></td>
                        <td><?php echo $juanpfilipino ?></td>
                        <td><?php echo $juanpnumeracy ?></td>
                        <td><?php echo $juanpbehavioral ?></td>
                        <td><?php echo $totaljuanp ?></td>
                    </tr>

                    <tr>
                        <td>Lasip Grande Elementary School</td>
                        <td><?php echo $lasipenglish ?></td>
                        <td><?php echo $lasipfilipino ?></td>
                        <td><?php echo $lasipnumeracy ?></td>
                        <td><?php echo $lasipbehavioral ?></td>
                        <td><?php echo $totallasip ?></td>
                    </tr>

                    <tr>
                        <td>Leon-Francisco Elementary School</td>
                        <td><?php echo $leonenglish ?></td>
                        <td><?php echo $leonfilipino ?></td>
                        <td><?php echo $leonnumeracy ?></td>
                        <td><?php echo $leonbehavioral ?></td>
                        <td><?php echo $totalleon?></td>
                    </tr>
                    <tr>
                        <td>Lomboy Elementary School</td>
                        <td><?php echo $lomboyenglish ?></td>
                        <td><?php echo $lomboyfilipino ?></td>
                        <td><?php echo $lomboynumeracy ?></td>
                        <td><?php echo $lomboybehavioral ?></td>
                        <td><?php echo $totallomboy ?></td>
                    </tr>
                    <tr>
                        <td>Lucao Elementary School</td>
                        <td><?php echo $lucaoenglish ?></td>
                        <td><?php echo $lucaofilipino ?></td>
                        <td><?php echo $lucaonumeracy ?></td>
                        <td><?php echo $lucaobehavioral ?></td>
                        <td><?php echo $totallucao ?></td>
                    </tr>
                    <tr>
                        <td>Malued Sur Elementary School</td>
                        <td><?php echo $maluedenglish ?></td>
                        <td><?php echo $maluedfilipino ?></td>
                        <td><?php echo $maluednumeracy ?></td>
                        <td><?php echo $maluedbehavioral ?></td>
                        <td><?php echo $totalmalued ?></td>
                    </tr>
                    <tr>
                        <td>Mamalingling Elementary School</td>
                        <td><?php echo $mamalinglingenglish ?></td>
                        <td><?php echo $mamalinglingfilipino ?></td>
                        <td><?php echo $mamalinglingnumeracy ?></td>
                        <td><?php echo $mamalinglingbehavioral ?></td>
                        <td><?php echo $totalmamalingling ?></td>
                    </tr>
                    <tr>
                        <td>Mangin-Tebeng Elementary School</td>
                        <td><?php echo $manginenglish ?></td>
                        <td><?php echo $manginfilipino ?></td>
                        <td><?php echo $manginnumeracy ?></td>
                        <td><?php echo $manginbehavioral ?></td>
                        <td><?php echo $totalmangin ?></td>
                    </tr>
                    <tr>
                        <td>North Central Elementary School</td>
                        <td><?php echo $northenglish ?></td>
                        <td><?php echo $northfilipino ?></td>
                        <td><?php echo $northnumeracy ?></td>
                        <td><?php echo $northbehavioral ?></td>
                        <td><?php echo $totalnorth ?></td>
                    </tr>
                    <tr>
                        <td>Pantal Elementary School</td>
                        <td><?php echo $pantalenglish ?></td>
                        <td><?php echo $pantalfilipino ?></td>
                        <td><?php echo $pantalnumeracy ?></td>
                        <td><?php echo $pantalbehavioral ?></td>
                        <td><?php echo $totalpantal ?></td>
                    </tr>
                    <tr>
                        <td>Pascuala G. Villamil Elementary School</td>
                        <td><?php echo $pascualaenglish ?></td>
                        <td><?php echo $pascualafilipino ?></td>
                        <td><?php echo $pascualanumeracy ?></td>
                        <td><?php echo $pascualabehavioral ?></td>
                        <td><?php echo $totalpaascuala ?></td>
                    </tr>
                    <tr>
                        <td>Pogo-Lasip Elementary School</td>
                        <td><?php echo $pogoenglish ?></td>
                        <td><?php echo $pogofilipino ?></td>
                        <td><?php echo $pogonumeracy ?></td>
                        <td><?php echo $pogobehavioral ?></td>
                        <td><?php echo $totalpogo ?></td>
                    </tr>
                    <tr>
                        <td>Pugaro Integrated School</td>
                        <td><?php echo $pugaroenglish ?></td>
                        <td><?php echo $pugarofilipino ?></td>
                        <td><?php echo $pugaronumeracy ?></td>
                        <td><?php echo $pugarobehavioral ?></td>
                        <td><?php echo $totalpugaro ?></td>
                    </tr>
                    <tr>
                        <td>Sabangan Elementary School</td>
                        <td><?php echo $sabanganenglish ?></td>
                        <td><?php echo $sabanganfilipino ?></td>
                        <td><?php echo $sabangannumeracy ?></td>
                        <td><?php echo $sabanganbehavioral ?></td>
                        <td><?php echo $totalSabangan ?></td>
                    </tr>
                    <tr>
                        <td>Salapingao Elementary School</td>
                        <td><?php echo $salapingaoenglish ?></td>
                        <td><?php echo $salapingaofilipino ?></td>
                        <td><?php echo $salapingaonumeracy ?></td>
                        <td><?php echo $salapingaobehavioral ?></td>
                        <td><?php echo $totalsalipangao ?></td>
                    </tr>
                    <tr>
                        <td>Salisay Elementary School</td>
                        <td><?php echo $salisayenglish ?></td>
                        <td><?php echo $salisayfilipino ?></td>
                        <td><?php echo $salisaynumeracy ?></td>
                        <td><?php echo $salisaybehavioral ?></td>
                        <td><?php echo $totalsalisay ?></td>
                    </tr>

                    <tr>
                        <td>Suit Elementary School</td>
                        <td><?php echo $suitenglish ?></td>
                        <td><?php echo $suitfilipino ?></td>
                        <td><?php echo $suitnumeracy ?></td>
                        <td><?php echo $suitbehavioral ?></td>
                        <td><?php echo $totalsuit ?></td>
                    </tr>
                    <tr>
                        <td>T. Ayson Rosario Elementary School</td>
                        <td><?php echo $aysonenglish ?></td>
                        <td><?php echo $aysonfilipino ?></td>
                        <td><?php echo $aysonnumeracy ?></td>
                        <td><?php echo $aysonbehavioral ?></td>
                        <td><?php echo $totalayson ?></td>
                    </tr>
                    <tr>
                        <td>Tambac Elementary School</td>
                        <td><?php echo $tambacenglish ?></td>
                        <td><?php echo $tambacfilipino ?></td>
                        <td><?php echo $tambacnumeracy ?></td>
                        <td><?php echo $tambacbehavioral ?></td>
                        <td><?php echo $totaltambac ?></td>
                    </tr>
                    <tr>
                        <td>Tebeng Elementary School</td>
                        <td><?php echo $tebengenglish ?></td>
                        <td><?php echo $tebengfilipino ?></td>
                        <td><?php echo $tebengnumeracy ?></td>
                        <td><?php echo $tebengbehavioral ?></td>
                        <td><?php echo $totaltebeng ?></td>
                    </tr>

                    <tr>
                        <td>Victoria Q. Zarate Elementary School</td>
                        <td><?php echo $victoriaenglish ?></td>
                        <td><?php echo $victoriafilipino ?></td>
                        <td><?php echo $victorianumeracy ?></td>
                        <td><?php echo $victoriabehavioral ?></td>
                        <td><?php echo $totalvictoria ?></td>
                    </tr>
                    <tr>
                        <td>West Central I Elementary School</td>
                        <td><?php echo $west1centralenglish?></td>
                        <td><?php echo $west1centralfilipino?></td>
                        <td><?php echo $west1centralnumeracy?></td>
                        <td><?php echo $west1centralbehavioral?></td>
                        <td><?php echo $totalwest1?></td>
                    </tr>
                    <tr>
                        <td>West Central II Elementary School</td>
                        <td><?php echo $westcentralenglish?></td>
                        <td><?php echo $westcentralfilipino?></td>
                        <td><?php echo $westcentralnumeracy?></td>
                        <td><?php echo $westcentralbehavioral?></td>
                        <td><?php echo $totalwest?></td>
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