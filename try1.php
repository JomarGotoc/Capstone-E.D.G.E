<?php
include('../database.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalSabangan = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Sabangan Elementary School' AND quarter = '3'";
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
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tables = array("academic_english", "academic_filipino", "academic_numeracy", "behavioral");
$totalbliss = 0;
$lrn_counted = array(); // Array to keep track of counted LRNs
foreach ($tables as $table) {
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Bliss Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Bolosan Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Bonuan Boquig Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Calmay Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Carael Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Caranglaan Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'East Central Integrated School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Federico N. Ceralde School Integrated School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Gen. Gregorio Del Pilar Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Juan L. Siapno Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Lasip Grande Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Leon-Francisco Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Lomboy Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Lucao Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Malued Sur Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Mamalingling Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Mangin-Tebeng Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'North Central Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Pantal Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Pascuala G. Villamil Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Pogo-Lasip Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Juan P. Guadiz Elementary School	' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Pugaro-Lasip Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Salapingao Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Salisay Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Suit Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'T. Ayson Rosario Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Tambac Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Tebeng Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Victoria Q. Zarate Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'West Central II Elementary School' AND quarter = '3'";
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
    $query = "SELECT DISTINCT lrn FROM $table WHERE school = 'Bacayao Sur Elementary School' AND quarter = '3'";
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