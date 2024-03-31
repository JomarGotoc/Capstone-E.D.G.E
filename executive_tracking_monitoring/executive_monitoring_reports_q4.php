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
<?php $currentFileName2 = basename(__FILE__,'_q4.php'); ?>
<?php
$filename = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script>
        function preventBack(){window.history.forward()};
        setTimeout("preventBack()",0);
        window.onunload=function(){null;}
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Executive Committee</title>
    <style>
                body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url(../img/bg.png);
            background-size: cover;
        }
        
        .logo {
            width: 75px;
            height: 75px;
            margin: 0 auto 20px;
            background-image: url('../img/logo.png'); 
            background-size: cover;
        }
        
        h2 {
            font-family: 'Darker Grotesque', sans-serif;
            color: #fff;
        }
        
        h2 p{
            margin-top: 5px;
            font-size: 18px;
        }

        .login-container {
            background-color: rgba(25, 5, 114, 0.80); 
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }
        
        a {
            color: #fff;
            text-decoration: none;
        }
        
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: .1rem 5%;
            background: #130550;
            display: flex;
            align-items: center;
            z-index: 100;
            height: 55px;
        }

        .vertical-line {
            margin-left: 40rem;
            height: 40px;
            width: 1px;
            background-color: #fff;
        }

        .logout-icon {
            color: #fff; 
            font-size: 1.5rem;
            cursor: pointer; 
            margin-left: 15px;
        }

        .header.sticky {
            border-bottom: .2rem solid rgba(255, 255, 255, 0.2);
        }

        h4 {
            color: #fff;
            font-family: 'Darker Grotesque', sans-serif;
            font-weight: 300;
            font-size: 1.3rem;
            margin-left: 1rem;
            letter-spacing: 2px;
        }

        .logs {
            width: 3.5rem;
            height: 3.5rem;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: flex-start; 
            justify-content: center;
            width: 100%; 
        }

        .header-content {
            display: flex;
            align-items: center;
        }

        .navbar {
            background-color: #190572;;
            opacity: 80%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50px;
            width: 100%;
            position: fixed;
            top: 57px; 
        }

        .back-icon {
            margin-right: auto;
            font-size: 3rem;
        }
        
        .navbar a {
            display: inline-block;
            padding: 14px 20px;
            text-decoration: none;
            color: #FFFFFF;
            opacity: 100%;
        }
        
        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar {
            background-color: #190572;
            opacity: 80%;
            display: flex;
            justify-content: space-between; 
            align-items: center;
            height: 50px;
            width: 100%;
            position: fixed;
            top: 57px;
        }

        .back-icon {
            font-size: 3rem;
        }

        .navbar a {
            display: inline-block;
            text-decoration: none;
            color: #FFFFFF;
            opacity: 100%;
        }

        nav {
            flex: 1; 
            text-align: center;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        .back-icon:hover::after {
            content: "Back";
            position: absolute;
            left: 30px;
            top: 80%;
            transform: translateY(-50%);
            color: #fff;
            font-size: 14px;
        }

        h3{
        color: #fff;
        }
        
        .buttons {
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 10px;
        }
        
        a .button {
        background-color: #0C052F;
        color: #fff;
        padding: 10px 20px;
        margin: 0 10px;
        border: 1px solid #fff;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        width: 90%;
        }
        
        .button:hover {
        background-color: #ddd;
        border: 1px solid #0C052F;
        color: #190572;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }
    
        ::-webkit-scrollbar-thumb {
            background-color: #190572;
            border-radius: 20px;
        }
    
        ::-webkit-scrollbar-track {
            background-color: #E2DFEE;
            border-radius: 20px;
        }

        .main-container {
            width: 100%;
            height: calc(90vh - 140px);
            margin: 20px;
            margin-top: 125px;
            bottom: 0;
            background-color: #E2DFEE;
            opacity: 80%;
            overflow: auto;
            padding: 20px;
            border-radius: 20px;
        }

        .shesh {
            background-color: transparent;
            border-radius: 5px;
            border: 2px solid #919097;
            background: rgba(251, 251, 251, 0.25);
            box-shadow: 0px 7px 7px 0px rgba(0, 0, 0, 0.25) inset, 0px 7px 7px 0px rgba(0, 0, 0, 0.25);
            padding: 10px;
            padding-top: 15px;
            margin-bottom: 20px;  
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .column {
            flex: 0 0 calc(16.6667%);
            margin-bottom: 5px;
        }

        .column-right {
            flex: 0 0 calc(30%);
            margin-right: auto; 
        }

        .column-left {
            flex: 0 0 calc(15%);
            margin-left: 0;
            margin-right: auto; 
        }

        .row .column:not(:last-child),
        .wide-row .column:not(:last-child) {
            margin-right: 0;
        }

        .row:first-child .column:last-child{
            margin-left: auto;
        }

        .containers {
            background-color: #3498db;
            padding: .5px;
        }

        .first{
            border-radius: 3px;
            border: 1px solid #190572;
            background: #FBFBFB;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset, 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            flex-shrink: 0;
            text-align: center;
            font-size: 15px;
            padding-left: 50px;
            padding-right: 50px;
        }

        .select-wrapper {
            background: #FBFBFB;
            color: #190572;
        }

        #topdown {
            padding: 2px;
            width: 428px;
            background: #FBFBFB;
            color: #190572;
            text-align: start;
            border: none;
            font-weight: bold;
            font-size: 17px;
            text-align: left;
        }
        #topdown1 {
            padding: 2px;
            width: 100%;
            background: #FBFBFB;
            color: #190572;
            text-align: center;
            border: 1px solid #190572;
            border-radius: 5px;
        }

        .second{
            border-radius: 3px;
            background-color: #2206A0;
            text-align: center;
        }

        .second h3{
            color: #FFF;
            letter-spacing: 3px;
        }

        h3 {
            color: #190572;
            margin-left: 10px;
            margin: 0;
        }

        table{
            width:100%; 
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table-header th {
            background-color: #190572;
            color: #fff;
            font-size: 15px;
            padding: 5px;
        }

        tr:nth-child(even){
            background-color: rgb(242, 242, 244);
        }

        tr:nth-child(odd){
            background-color: #b7b7b7;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #130550;
            min-width: 100px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            right: 150px;
            border-bottom-left-radius: 7px;
            border-bottom-right-radius: 7px;
        }

        .dropdown-content a {
            color: rgb(255, 253, 253);
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #F3F3F3;
            color: #190572;
            opacity: 80%;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
        
    </style>
</head>
<body>

    <header>
        <div class="container">
            <div class="header-content">
                <img src="../img/logo.png" class="logs">
                <h4>E.D.G.E | P.A.R. Early Detection and Guidance for Education</h4>
                <i class="vertical-line"></i>
                <div class="dropdown">
                <i class='bx log-out bx-lock-alt logout-icon' onclick="toggleDropdown()"></i>
                    <div class="dropdown-content" id="dropdownContent">
                    <a href="../login/Login.php">Log Out</a>
                    <a href="executive_change_password.php?employment_number=<?php echo isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value'; ?>&filename=<?php echo $filename ?>">Change Password</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="navbar">
        <nav>
            <a href="executive_tracking_reports_q1.php?employment_number=<?php echo isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value'; ?>">Quarterly Reports</a>
            <a href="" style="background:#F3F3F3; color:#130550">Report Summary</a>
        </nav>
    </div>

    
    <div class="main-container">
        <div class="row">
            <div class="column">
                <div class="select-wrapper">
                    <select id="topdown1" name="school-year" class="containers first">
                        <option value="school-year">S.Y. 2023 - 2024</option>
                    </select>
                </div>
        </div>
            <div class="column column-left">
            <div class="containers second">
                <a href="executive_monitoring_print_q4.php?employment_number=<?php echo isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value'; ?>">
                    <button style="background: transparent; border: none;">
                        <h3><i class='bx bx-printer'></i>Print P.A.Rs List</h3>
                    </button>
                </a>
            </div>
            </div>
            <div class="column full-width">
                <div class="column third-column">
                    <div class="search-box">
                    </div>
                </div>
            </div>
        </div>

        <section class="shesh">
        <div class="row">
            <div class="column" >
                <div class="containers" style="background-color: #B7B7B7">
                    <h3 style="margin-left: 7px">Division</h3>
                </div>
            </div>
            <div class="column column-right">
                <div class="containers" style="background-color: #F3F3F3;">
                    <h3 style="margin-left: 7px">Dagupan City Division Elementary Schools</h3>
                </div>
            </div>
            <div class="column">
                <div>
                </div>
            </div>
        </div>

        
     <!--   <div class="row">
            <div class="column">
                <div class="containers" style="background-color: #B7B7B7;">
                    <h3>Quarter</h3>
                </div>
            </div>
            <div class="column column-right">
                <div class="containers" style="background-color: #F3F3F3;">
                    <h3>I</h3>
                </div>
            </div>
        </div> -->

        <table border="0">
            <thead class="table-header">
                <tr>
                    <th style="width:10%">P.A.R. Identification</th>
                    <th style="width:9%">Q1</th>
                    <th style="width:9%">Resolved</th>
                    <th style="width:9%">Q2</th>
                    <th style="width:9%">Resolved</th>
                    <th style="width:9%">Q3</th>
                    <th style="width:9%">Resolved</th>
                    <th style="width:9%">Q4</th>
                    <th style="width:9%">Resolved</th>
                    <th style="width:9%">Total P.A.R.s</th>
                    <th style="width:9%">Total Resolved</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <tr>
                        <th style="width:10%">Academic - Literacy in English</th>
                        <th style="width:9%"><?php echo $q1english ?></th>
                        <th style="width:9%"><?php echo $q1englishresolved ?></th>
                        <th style="width:9%"><?php echo $q2english ?></th>
                        <th style="width:9%"><?php echo $q2englishresolved ?></th>
                        <th style="width:9%"><?php echo $q3english ?></th>
                        <th style="width:9%"><?php echo $q3englishresolved ?></th>
                        <th style="width:9%"><?php echo $q4english ?></th>
                        <th style="width:9%"><?php echo $q4englishresolved ?></th>
                        <th style="width:9%"><?php echo $totalEnglish ?></th>
                        <th style="width:9%"><?php echo $totalEnglishResolved ?></th>
                    </tr>
                    <tr>
                        <th style="width:10%">Academic - Literacy in Filipino</th>
                        <th style="width:9%"><?php echo $q1filipino ?></th>
                        <th style="width:9%"><?php echo $q1filipinoresolved ?></th>
                        <th style="width:9%"><?php echo $q2filipino ?></th>
                        <th style="width:9%"><?php echo $q2filipinoresolved ?></th>
                        <th style="width:9%"><?php echo $q3filipino ?></th>
                        <th style="width:9%"><?php echo $q3filipinoresolved ?></th>
                        <th style="width:9%"><?php echo $q4filipino ?></th>
                        <th style="width:9%"><?php echo $q4filipinoresolved ?></th>
                        <th style="width:9%"><?php echo $totalFilipino ?></th>
                        <th style="width:9%"><?php echo $totalFilipinoResolved ?></th>
                    </tr>
                    <tr>
                        <th style="width:10%">Academic - Numeracy</th>
                        <th style="width:9%"><?php echo $q1numeracy ?></th>
                        <th style="width:9%"><?php echo $q1numeracyresolved ?></th>
                        <th style="width:9%"><?php echo $q2numeracy ?></th>
                        <th style="width:9%"><?php echo $q2numeracyresolved ?></th>
                        <th style="width:9%"><?php echo $q3numeracy ?></th>
                        <th style="width:9%"><?php echo $q3numeracyresolved ?></th>
                        <th style="width:9%"><?php echo $q4numeracy ?></th>
                        <th style="width:9%"><?php echo $q4numeracyresolved ?></th>
                        <th style="width:9%"><?php echo $totalNumeracy ?></th>
                        <th style="width:9%"><?php echo $totalNumeracyResolved ?></th>
                    </tr>
                    <tr>
                        <th style="width:10%">Behavioral</th>
                        <th style="width:9%"><?php echo $q1behavioral ?></th>
                        <th style="width:9%"><?php echo $q1behavioralresolved ?></th>
                        <th style="width:9%"><?php echo $q2behavioral ?></th>
                        <th style="width:9%"><?php echo $q2behavioralresolved ?></th>
                        <th style="width:9%"><?php echo $q3behavioral ?></th>
                        <th style="width:9%"><?php echo $q3behavioralresolved ?></th>
                        <th style="width:9%"><?php echo $q4behavioral ?></th>
                        <th style="width:9%"><?php echo $q4behavioralresolved ?></th>
                        <th style="width:9%"><?php echo $totalBehavioral ?></th>
                        <th style="width:9%"><?php echo $totalBehavioralResolved ?></th>
                    </tr>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="shesh">

        
        <div class="row">
            <div class="column">
                <div class="containers" style="background-color: #B7B7B7;">
                    <h3 style="margin-left: 7px">Quarter</h3>
                </div>
            </div>
            <div class="select-wrapper1">
                    <select id="topdown" name="quarter" class="containers second" onchange="redirectToQuarter()">
                        <option value="" disabled selected hidden>Quarter 4</option>
                        <option value="q1">Quarter 1</option>
                        <option value="q2">Quarter 2</option>
                        <option value="q3">Quarter 3</option>
                        <option value="q4">Quarter 4</option>
                    </select>
                </div>
        </div>

        <table border="0">
            <thead class="table-header">
                <tr>
                    <th style="width:40%">School Name</th>
                    <th style="width:15%">Academic - Literacy in English</th>
                    <th style="width:15%">Academic - Literacy in Filipino</th>
                    <th style="width:15%">Academic - Numeracy</th>
                    <th style="width:15%">Behavioral</th>
                    <th style="width:15%">Total P.A.R.s</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Bacayao Sur Elementary School</th>  
                        <th style="width:12%"><?php echo $bucayaoenglish ?></th>
                        <th style="width:12%"><?php echo $bucayaofilipino ?></th>
                        <th style="width:12%"><?php echo $bucayaonumeracy ?></th>
                        <th style="width:12%"><?php echo $bucayaobehavioral ?></th>
                        <th style="width:12%"><?php echo $totalbacayao ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Bliss Elementary School</th>
                        <th style="width:12%"><?php echo $blissenglish ?></th>
                        <th style="width:12%"><?php echo $blissfilipino ?></th>
                        <th style="width:12%"><?php echo $blissnumeracy ?></th>
                        <th style="width:12%"><?php echo $blissbehavioral ?></th>
                        <th style="width:12%"><?php echo $totalbliss ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Bolosan Elementary School</th>
                        <th style="width:12%"><?php echo $bolosanenglish ?></th>
                        <th style="width:12%"><?php echo $bolosanfilipino ?></th>
                        <th style="width:12%"><?php echo $bolosannumeracy ?></th>
                        <th style="width:12%"><?php echo $bolosanbehavioral ?></th>
                        <th style="width:12%"><?php echo $totalbolosan ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Bonuan Boquig Elementary School</th>
                        <th style="width:12%"><?php echo $bonuanenglish ?></th>
                        <th style="width:12%"><?php echo $bonuanfilipino ?></th>
                        <th style="width:12%"><?php echo $bonuannumeracy ?></th>
                        <th style="width:12%"><?php echo $bonuanbehavioral ?></th>
                        <th style="width:12%"><?php echo $totalbonuan ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Calmay Elementary School</th>
                        <th style="width:12%"><?php echo $calmayenglish ?></th>
                        <th style="width:12%"><?php echo $calmayfilipino ?></th>
                        <th style="width:12%"><?php echo $calmaynumeracy ?></th>
                        <th style="width:12%"><?php echo $calmaybehavioral ?></th>
                        <th style="width:12%"><?php echo $totalcalmay ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Carael Elementary School<</th>
                        <th style="width:12%"><?php echo $caraelenglish ?></th>
                        <th style="width:12%"><?php echo $caraelfilipino ?></th>
                        <th style="width:12%"><?php echo $caraelnumeracy ?></th>
                        <th style="width:12%"><?php echo $caraelbehavioral ?></th>
                        <th style="width:12%"><?php echo $totalcarael ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Caranglaan Elementary School</th>
                        <th style="width:12%"><?php echo $caranglaanenglish ?></th>
                        <th style="width:12%"><?php echo $caranglaanfilipino ?></th>
                        <th style="width:12%"><?php echo $caranglaannumeracy ?></th>
                        <th style="width:12%"><?php echo $caranglaanbehavioral ?></th>
                        <th style="width:12%"><?php echo $totalcaranglaan ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">East Central Integrated School</th>
                        <th style="width:12%"><?php echo $eastenglish ?></th>
                        <th style="width:12%"><?php echo $eastfilipino ?></th>
                        <th style="width:12%"><?php echo $eastnumeracy ?></th>
                        <th style="width:12%"><?php echo $eastbehavioral ?></th>
                        <th style="width:12%"><?php echo $totaleast ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Federico N. Ceralde School Integrated School</th>
                        <th style="width:12%"><?php echo $federicoenglish ?></th>
                        <th style="width:12%"><?php echo $federicofilipino ?></th>
                        <th style="width:12%"><?php echo $federiconumeracy ?></th>
                        <th style="width:12%"><?php echo $federicobehavioral ?></th>
                        <th style="width:12%"><?php echo $totalfederico ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Gen. Gregorio Del Pilar Elementary School</th>
                        <th style="width:12%"><?php echo $genenglish ?></th>
                        <th style="width:12%"><?php echo $genfilipino ?></th>
                        <th style="width:12%"><?php echo $gennumeracy ?></th>
                        <th style="width:12%"><?php echo $genbehavioral ?></th>
                        <th style="width:12%"><?php echo $totalgen ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Juan L. Siapno Elementary School</th>
                        <th style="width:12%"><?php echo $juanlenglish ?></th>
                        <th style="width:12%"><?php echo $juanlfilipino ?></th>
                        <th style="width:12%"><?php echo $juanlnumeracy ?></th>
                        <th style="width:12%"><?php echo $juanlbehavioral ?></th>
                        <th style="width:12%"><?php echo $totaljuanl ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Juan P. Guadiz Elementary School</th>
                        <th style="width:12%"><?php echo $juanpenglish ?></th>
                        <th style="width:12%"><?php echo $juanpfilipino ?></th>
                        <th style="width:12%"><?php echo $juanpnumeracy ?></th>
                        <th style="width:12%"><?php echo $juanpbehavioral ?></th>
                        <th style="width:12%"><?php echo $totaljuanp ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Lasip Grande Elementary School</th>
                        <th style="width:12%"><?php echo $lasipenglish ?></th>
                        <th style="width:12%"><?php echo $lasipfilipino ?></th>
                        <th style="width:12%"><?php echo $lasipnumeracy ?></th>
                        <th style="width:12%"><?php echo $lasipbehavioral ?></th>
                        <th style="width:12%"><?php echo $totallasip ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Leon-Francisco Elementary School</th>
                        <th style="width:12%"><?php echo $leonenglish ?></th>
                        <th style="width:12%"><?php echo $leonfilipino ?></th>
                        <th style="width:12%"><?php echo $leonnumeracy ?></th>
                        <th style="width:12%"><?php echo $leonbehavioral ?></th>
                        <th style="width:12%"><?php echo $totalleon?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Lomboy Elementary School</th>
                        <th style="width:12%"><?php echo $lomboyenglish ?></th>
                        <th style="width:12%"><?php echo $lomboyfilipino ?></th>
                        <th style="width:12%"><?php echo $lomboynumeracy ?></th>
                        <th style="width:12%"><?php echo $lomboybehavioral ?></th>
                        <th style="width:12%"><?php echo $totallomboy ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Lucao Elementary School</th>
                        <th style="width:12%"><?php echo $lucaoenglish ?></th>
                        <th style="width:12%"><?php echo $lucaofilipino ?></th>
                        <th style="width:12%"><?php echo $lucaonumeracy ?></th>
                        <th style="width:12%"><?php echo $lucaobehavioral ?></th>
                        <th style="width:12%"><?php echo $totallucao ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Malued Sur Elementary School</th>
                        <th style="width:12%"><?php echo $maluedenglish ?></th>
                        <th style="width:12%"><?php echo $maluedfilipino ?></th>
                        <th style="width:12%"><?php echo $maluednumeracy ?></th>
                        <th style="width:12%"><?php echo $maluedbehavioral ?></th>
                        <th style="width:12%"><?php echo $totalmalued ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Mamalingling Elementary School</th>
                        <th style="width:12%"><?php echo $mamalinglingenglish ?></th>
                        <th style="width:12%"><?php echo $mamalinglingfilipino ?></th>
                        <th style="width:12%"><?php echo $mamalinglingnumeracy ?></th>
                        <th style="width:12%"><?php echo $mamalinglingbehavioral ?></th>
                        <th style="width:12%"><?php echo $totalmamalingling ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Mangin-Tebeng Elementary School</th>
                        <th style="width:12%"><?php echo $manginenglish ?></th>
                        <th style="width:12%"><?php echo $manginfilipino ?></th>
                        <th style="width:12%"><?php echo $manginnumeracy ?></th>
                        <th style="width:12%"><?php echo $manginbehavioral ?></th>
                        <th style="width:12%"><?php echo $totalmangin ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">North Central Elementary School</th>
                        <th style="width:12%"><?php echo $northenglish ?></th>
                        <th style="width:12%"><?php echo $northfilipino ?></th>
                        <th style="width:12%"><?php echo $northnumeracy ?></th>
                        <th style="width:12%"><?php echo $northbehavioral ?></th>
                        <th style="width:12%"><?php echo $totalnorth ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Pantal Elementary School</th>
                        <th style="width:12%"><?php echo $pantalenglish ?></th>
                        <th style="width:12%"><?php echo $pantalfilipino ?></th>
                        <th style="width:12%"><?php echo $pantalnumeracy ?></th>
                        <th style="width:12%"><?php echo $pantalbehavioral ?></th>
                        <th style="width:12%"><?php echo $totalpantal ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Pascuala G. Villamil Elementary School</th>
                        <th style="width:12%"><?php echo $pascualaenglish ?></th>
                        <th style="width:12%"><?php echo $pascualafilipino ?></th>
                        <th style="width:12%"><?php echo $pascualanumeracy ?></th>
                        <th style="width:12%"><?php echo $pascualabehavioral ?></th>
                        <th style="width:12%"><?php echo $totalpaascuala ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Pogo-Lasip Elementary School</th>
                        <th style="width:12%"><?php echo $pogoenglish ?></th>
                        <th style="width:12%"><?php echo $pogofilipino ?></th>
                        <th style="width:12%"><?php echo $pogonumeracy ?></th>
                        <th style="width:12%"><?php echo $pogobehavioral ?></th>
                        <th style="width:12%"><?php echo $totalpogo ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Pugaro Integrated School</th>
                        <th style="width:12%"><?php echo $pugaroenglish ?></th>
                        <th style="width:12%"><?php echo $pugarofilipino ?></th>
                        <th style="width:12%"><?php echo $pugaronumeracy ?></th>
                        <th style="width:12%"><?php echo $pugarobehavioral ?></th>
                        <th style="width:12%"><?php echo $totalpugaro ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Sabangan Elementary School</th>
                        <th style="width:12%"><?php echo $sabanganenglish ?></th>
                        <th style="width:12%"><?php echo $sabanganfilipino ?></th>
                        <th style="width:12%"><?php echo $sabangannumeracy ?></th>
                        <th style="width:12%"><?php echo $sabanganbehavioral ?></th>
                        <th style="width:12%"><?php echo $totalSabangan ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Salapingao Elementary School</th>
                        <th style="width:12%"><?php echo $salapingaoenglish ?></th>
                        <th style="width:12%"><?php echo $salapingaofilipino ?></th>
                        <th style="width:12%"><?php echo $salapingaonumeracy ?></th>
                        <th style="width:12%"><?php echo $salapingaobehavioral ?></th>
                        <th style="width:12%"><?php echo $totalsalipangao ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Salisay Elementary School</th>
                        <th style="width:12%"><?php echo $salisayenglish ?></th>
                        <th style="width:12%"><?php echo $salisayfilipino ?></th>
                        <th style="width:12%"><?php echo $salisaynumeracy ?></th>
                        <th style="width:12%"><?php echo $salisaybehavioral ?></th>
                        <th style="width:12%"><?php echo $totalsalisay ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Suit Elementary School</th>
                        <th style="width:12%"><?php echo $suitenglish ?></th>
                        <th style="width:12%"><?php echo $suitfilipino ?></th>
                        <th style="width:12%"><?php echo $suitnumeracy ?></th>
                        <th style="width:12%"><?php echo $suitbehavioral ?></th>
                        <th style="width:12%"><?php echo $totalsuit ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">T. Ayson Rosario Elementary School</th>
                        <th style="width:12%"><?php echo $aysonenglish ?></th>
                        <th style="width:12%"><?php echo $aysonfilipino ?></th>
                        <th style="width:12%"><?php echo $aysonnumeracy ?></th>
                        <th style="width:12%"><?php echo $aysonbehavioral ?></th>
                        <th style="width:12%"><?php echo $totalayson ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Tambac Elementary School</th>
                        <th style="width:12%"><?php echo $tambacenglish ?></th>
                        <th style="width:12%"><?php echo $tambacfilipino ?></th>
                        <th style="width:12%"><?php echo $tambacnumeracy ?></th>
                        <th style="width:12%"><?php echo $tambacbehavioral ?></th>
                        <th style="width:12%"><?php echo $totaltambac ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Tebeng Elementary School</th>
                        <th style="width:12%"><?php echo $tebengenglish ?></th>
                        <th style="width:12%"><?php echo $tebengfilipino ?></th>
                        <th style="width:12%"><?php echo $tebengnumeracy ?></th>
                        <th style="width:12%"><?php echo $tebengbehavioral ?></th>
                        <th style="width:12%"><?php echo $totaltebeng ?></th>
                    </tr>

                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">Victoria Q. Zarate Elementary School</th>
                        <th style="width:12%"><?php echo $victoriaenglish ?></th>
                        <th style="width:12%"><?php echo $victoriafilipino ?></th>
                        <th style="width:12%"><?php echo $victorianumeracy ?></th>
                        <th style="width:12%"><?php echo $victoriabehavioral ?></th>
                        <th style="width:12%"><?php echo $totalvictoria ?></th>
                    </tr>
                    <tr>
                        <th style="width:40%; text-align: left; padding-left: 10px">West Central II Elementary School</th>
                        <th style="width:12%"><?php echo $westcentralenglish?></th>
                        <th style="width:12%"><?php echo $westcentralfilipino?></th>
                        <th style="width:12%"><?php echo $westcentralnumeracy?></th>
                        <th style="width:12%"><?php echo $westcentralbehavioral?></th>
                        <th style="width:12%"><?php echo $totalwest?></th>
                    </tr>

                </tr>
            </tbody>
        </table>
    </section>
    </div>

    <script src="monitoring_tracking.js"></script>
    <script>
    function redirectToQuarter() {
        // Get the selected value from the dropdown
        var selectedQuarter = document.getElementById("topdown").value;

        // Check if a quarter is selected
        if (selectedQuarter !== "") {
            // Construct the URL for redirection
            var redirectURL = "<?php echo $currentFileName2.'_'?>" + selectedQuarter + ".php?employment_number=<?php echo isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value'; ?>";

            // Redirect to the selected quarter's PHP file
            window.location.href = redirectURL;
        }
    }
</script>
<script>
    function printPARsList() {
        window.print();
    }
</script>
</body>
</html>
