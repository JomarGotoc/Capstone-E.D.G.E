<?php $currentFileName2 = basename(__FILE__,'_q3.php'); ?>
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
                $count_sql .= " AND school = 'West Central II Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'West Central II Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'West Central II Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'West Central II Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Bacayao Sur Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Bacayao Sur Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Bacayao Sur Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Bacayao Sur Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Bliss Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Bliss Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Bliss Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Bliss Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Bolosan Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Bolosan Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Bolosan Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Bolosan Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Bonuan Boquig Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Bonuan Boquig Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Bonuan Boquig Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Bonuan Boquig Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Calmay Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Calmay Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Calmay Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Calmay Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Carael Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Carael Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Carael Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Carael Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Caranglaan Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Caranglaan Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Caranglaan Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Caranglaan Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'East Central Integrated School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'East Central Integrated School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'East Central Integrated School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'East Central Integrated School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Federico N. Ceralde School Integrated School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Federico N. Ceralde School Integrated School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Federico N. Ceralde School Integrated School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Federico N. Ceralde School Integrated School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Gen. Gregorio Del Pilar Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Gen. Gregorio Del Pilar Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Gen. Gregorio Del Pilar Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Gen. Gregorio Del Pilar Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Juan L. Siapno Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Juan L. Siapno Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Juan L. Siapno Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Juan L. Siapno Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Juan P. Guadiz Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Juan P. Guadiz Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Juan P. Guadiz Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Juan P. Guadiz Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Lasip Grande Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Lasip Grande Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Lasip Grande Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Lasip Grande Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Leon-Francisco Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Leon-Francisco Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Leon-Francisco Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Leon-Francisco Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Lomboy Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Lomboy Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Lomboy Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Lomboy Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Lucao Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Lucao Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Lucao Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Lucao Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Malued Sur Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Malued Sur Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Malued Sur Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Malued Sur Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Mamalingling Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Mamalingling Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Mamalingling Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Mamalingling Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Mangin-Tebeng Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Mangin-Tebeng Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Mangin-Tebeng Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Mangin-Tebeng Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'North Central Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'North Central Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'North Central Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'North Central Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Pantal Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Pantal Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Pantal Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Pantal Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Pascuala G. Villamil Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Pascuala G. Villamil Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Pascuala G. Villamil Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Pascuala G. Villamil Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Pogo-Lasip Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Pogo-Lasip Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Pogo-Lasip Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Pogo-Lasip Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Pugaro Integrated School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Pugaro Integrated School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Pugaro Integrated School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Pugaro Integrated School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Sabangan Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Sabangan Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Sabangan Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Sabangan Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Salapingao Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Salapingao Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Salapingao Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Salapingao Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Salisay Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Salisay Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Salisay Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Salisay Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Suit Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Suit Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Suit Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Suit Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'T. Ayson Rosario Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'T. Ayson Rosario Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'T. Ayson Rosario Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'T. Ayson Rosario Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Tambac Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Tambac Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Tambac Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Tambac Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Tebeng Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Tebeng Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Tebeng Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Tebeng Elementary School' AND quarter = '3'";
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
                $count_sql .= " AND school = 'Victoria Q. Zarate Elementary School' AND quarter = '3'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Victoria Q. Zarate Elementary School' AND quarter = '3'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Victoria Q. Zarate Elementary School' AND quarter = '3'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Victoria Q. Zarate Elementary School' AND quarter = '3'";
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
<?php
    include('../database.php');
    $tables = array(
        "academic_english",
        "academic_filipino",
        "academic_numeracy",
        "behavioral"
    );

    $totalpar = 0; 
    $resolved = 0;

    // Loop through each table
    foreach ($tables as $table) {
        $sql = "SELECT COUNT(*) AS count, SUM(CASE WHEN status = 'resolved' THEN 1 ELSE 0 END) AS resolved_count FROM $table";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $totalpar += $row["count"];
                $resolved += $row["resolved_count"];
            }
        } else {
            echo "0 results for table $table";
        }
    }

    $conn->close();
?>
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
    <title>SDO Superintendent</title>
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
            font-size: 3rem;
        }

        .navbar a {
            display: inline-block;
            padding: 14px 20px;
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

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .wide-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between; 
        }

        .column {
            flex: 0 0 calc(16.6667%);
            margin-bottom: 5px;
        }

        .wide-columns {
            flex: 0 0 calc(30% - 10px);
            margin-bottom: 20px;
            margin-top: 10px;
        }

        .wide-column {
            flex: 0 0 calc(12% - 10px);
            margin-bottom: 20px;
            margin-top: 10px;
        }

        .wide-columns .containers, 
        .wide-column .containers{
            background-color: #919097;
            padding: .5px;
        }

        .column-right {
            flex: 0 0 calc(30%);
            margin-right: 0;
            margin-right: auto; 
        }

        .column-left {
            flex: 0 0 calc(15%);
            margin-left: 0;
            margin-left: auto; 
        }

        .row .column:not(:last-child),
        .wide-row .column:not(:last-child) {
            margin-right: 0;
        }

        .row:first-child .column:last-child{
            margin-left: auto;
        }

        .full-width {
            flex: 0 0 calc(30%);
            margin-right: 0;
        }

        .half-width {
            flex: 0 0 calc(15%);
            margin-right: 0;
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
            position: relative;
            background: #FBFBFB;
            color: #190572;
        }

        #topdown {
            padding: 2px;
            width: 435px;
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

        .wide-column h3, 
        .wide-columns h3{
            color: #070000;
            text-align: center;
        }

        .third-column {
            flex: 0 0 calc(30%); 
            margin-right: 0;
            position: relative; 
        }

        .search-box {
            background-color: #F3F3F3;
            border-radius: 5px;
            display: flex;
            align-items: center;
            border: 1px solid #190572;
            padding: 5px;
        }

        .search-input {
            border-radius: 5px;
            border: none;
            outline: none;
            width: 80%;
            background-color: #F3F3F3; 
        }

        .search-icon {
            margin-left: auto;
            cursor: pointer;
            color: #190572; 
        }

        table{
            width:100%; 
            border-collapse: collapse
            
        }

        tr:nth-child(odd){
            background-color: rgb(242, 242, 244);
        }

        tr:nth-child(even){
            background-color: #b7b7b7;
        }

        table tr th:first-child{
            text-align: left;
            padding-left: 10px;
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
            <a href="" style="background:#F3F3F3; color:#130550">Quarterly Reports</a>
            <a href="executive_monitoring_reports_q1.php?employment_number=<?php echo isset($_GET['employment_number']) ? $_GET['employment_number'] : 'default_value'; ?>">Report Summary</a>
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
            <div class="column">
            <div class="containers second">
                <a href="executive_tracking_print_q3.php">
                    <button style="background: transparent; border: none;">
                        <h3><i class='bx bx-printer'></i>Print P.A.Rs List</h3>
                    </button>
                </a>
            </div>
            </div>
            <div class="column full-width">
            <div class="column third-column">
            <div class="search-box">
    <input type="text" class="search-input" placeholder="Search School" oninput="filterTable()">
    <i class='bx bx-search search-icon'></i>
</div>
    </div>

            </div>
        </div>


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
            <div class="column column-left">
                <div class="containers" style="background-color: #B7B7B7;">
                    <h3 style="margin-left: 7px">Total P.A.R.s</h3>
                </div>
            </div>
            <div class="column half-width">
                <div class="containers" style="background-color: #F3F3F3;">
                    <h3 style="margin-left: 7px"><?php echo $totalpar ?></h3>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="column">
                <div class="containers" style="background-color: #B7B7B7;">
                    <h3 style="margin-left: 7px">Quarter</h3>
                </div>
            </div>
            <div class="select-wrapper1">
                    <select id="topdown" name="quarter" class="containers second" onchange="redirectToQuarter()">
                        <option value="" disabled selected hidden>Quarter 3</option>
                        <option value="q1">Quarter 1</option>
                        <option value="q2">Quarter 2</option>
                        <option value="q3">Quarter 3</option>
                        <option value="q4">Quarter 4</option>
                    </select>
                </div>
            <div class="column column-left">
                <div class="containers" style="background-color: #B7B7B7;">
                    <h3 style="margin-left: 7px">Resolved Cases</h3>
                </div>
            </div>
            <div class="column half-width">
                <div class="containers" style="background-color: #F3F3F3;">
                    <h3 style="margin-left: 7px"><?php echo $resolved. " / " . $totalpar ?></h3>
                </div>
            </div>
        </div>


        <div class="wide-row">
            <div class="wide-columns">
                <div class="containers">
                    <h3>Elementary School's Name</h3>
                </div>
            </div>
            <div class="wide-column">
                <div class="containers">
                    <h3># of Students</h3>
                </div>
            </div>
            <div class="wide-column">
                <div class="containers">
                    <h3># of P.A.R</h3>
                </div>
            </div>
            <div class="wide-column">
                <div class="containers">
                    <h3>A - Literacy (E)</h3>
                </div>
            </div>
            <div class="wide-column">
                <div class="containers">
                    <h3>A - Literacy (F)</h3>
                </div>
            </div>
            <div class="wide-column">
                <div class="containers">
                    <h3>A - Numeracy</h3>
                </div>
            </div>
            <div class="wide-column">
                <div class="containers">
                    <h3>Behavioral</h3>
                </div>
            </div>
        </div>

        <table border="0" id="schoolTable">
        <tr>
                <th style="width:29%">Bacayao Sur Elementary School</th>
                <th style="width:12%"><?php echo $bucayaostudents ?></th>
                <th style="width:12%"><?php echo $bucayaoltotalpar ?></th>
                <th style="width:12%"><?php echo $bucayaoenglish ?></th>
                <th style="width:12%"><?php echo $bucayaofilipino ?></th>
                <th style="width:12%"><?php echo $bucayaonumeracy ?></th>
                <th style="width:12%"><?php echo $bucayaobehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Bliss Elementary School</th>
                <th style="width:12%"><?php echo $blissstudents ?></th>
                <th style="width:12%"><?php echo $blisstotalpar ?></th>
                <th style="width:12%"><?php echo $blissenglish ?></th>
                <th style="width:12%"><?php echo $blissfilipino ?></th>
                <th style="width:12%"><?php echo $blissnumeracy ?></th>
                <th style="width:12%"><?php echo $blissbehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Bolosan Elementary School</th>
                <th style="width:12%"><?php echo $bolosanstudents ?></th>
                <th style="width:12%"><?php echo $bolosantotalpar ?></th>
                <th style="width:12%"><?php echo $bolosanenglish ?></th>
                <th style="width:12%"><?php echo $bolosanfilipino ?></th>
                <th style="width:12%"><?php echo $bolosannumeracy ?></th>
                <th style="width:12%"><?php echo $bolosanbehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Bonuan Boquig Elementary School</th>
                <th style="width:12%"><?php echo $bonuanstudents ?></th>
                <th style="width:12%"><?php echo $bonuantotalpar ?></th>
                <th style="width:12%"><?php echo $bonuanenglish ?></th>
                <th style="width:12%"><?php echo $bonuanfilipino ?></th>
                <th style="width:12%"><?php echo $bonuannumeracy ?></th>
                <th style="width:12%"><?php echo $bonuanbehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Calmay Elementary School</th>
                <th style="width:12%"><?php echo $calmaystudents ?></th>
                <th style="width:12%"><?php echo $calmaytotalpar ?></th>
                <th style="width:12%"><?php echo $calmayenglish ?></th>
                <th style="width:12%"><?php echo $calmayfilipino ?></th>
                <th style="width:12%"><?php echo $calmaynumeracy ?></th>
                <th style="width:12%"><?php echo $calmaybehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Carael Elementary School</th>
                <th style="width:12%"><?php echo $caraelstudents ?></th>
                <th style="width:12%"><?php echo $caraeltotalpar ?></th>
                <th style="width:12%"><?php echo $caraelenglish ?></th>
                <th style="width:12%"><?php echo $caraelfilipino ?></th>
                <th style="width:12%"><?php echo $caraelnumeracy ?></th>
                <th style="width:12%"><?php echo $caraelbehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Caranglaan Elementary School</th>
                <th style="width:12%"><?php echo $caranglaanstudents ?></th>
                <th style="width:12%"><?php echo $caranglaantotalpar ?></th>
                <th style="width:12%"><?php echo $caranglaanenglish ?></th>
                <th style="width:12%"><?php echo $caranglaanfilipino ?></th>
                <th style="width:12%"><?php echo $caranglaannumeracy ?></th>
                <th style="width:12%"><?php echo $caranglaanbehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">East Central Integrated School</th>
                <th style="width:12%"><?php echo $eaststudents ?></th>
                <th style="width:12%"><?php echo $easttotalpar ?></th>
                <th style="width:12%"><?php echo $eastenglish ?></th>
                <th style="width:12%"><?php echo $eastfilipino ?></th>
                <th style="width:12%"><?php echo $eastnumeracy ?></th>
                <th style="width:12%"><?php echo $eastbehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Federico N. Ceralde School Integrated School</th>
                <th style="width:12%"><?php echo $federicostudents ?></th>
                <th style="width:12%"><?php echo $federicototalpar ?></th>
                <th style="width:12%"><?php echo $federicoenglish ?></th>
                <th style="width:12%"><?php echo $federicofilipino ?></th>
                <th style="width:12%"><?php echo $federiconumeracy ?></th>
                <th style="width:12%"><?php echo $federicobehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Gen. Gregorio Del Pilar Elementary School</th>
                <th style="width:12%"><?php echo $genstudents ?></th>
                <th style="width:12%"><?php echo $gentotalpar ?></th>
                <th style="width:12%"><?php echo $genenglish ?></th>
                <th style="width:12%"><?php echo $genfilipino ?></th>
                <th style="width:12%"><?php echo $gennumeracy ?></th>
                <th style="width:12%"><?php echo $genbehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Juan L. Siapno Elementary School</th>
                <th style="width:12%"><?php echo $juanlstudents ?></th>
                <th style="width:12%"><?php echo $juanltotalpar ?></th>
                <th style="width:12%"><?php echo $juanlenglish ?></th>
                <th style="width:12%"><?php echo $juanlfilipino ?></th>
                <th style="width:12%"><?php echo $juanlnumeracy ?></th>
                <th style="width:12%"><?php echo $juanlbehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Juan P. Guadiz Elementary School</th>
                <th style="width:12%"><?php echo $juanpstudents ?></th>
                <th style="width:12%"><?php echo $juanptotalpar ?></th>
                <th style="width:12%"><?php echo $juanpenglish ?></th>
                <th style="width:12%"><?php echo $juanpfilipino ?></th>
                <th style="width:12%"><?php echo $juanpnumeracy ?></th>
                <th style="width:12%"><?php echo $juanpbehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Lasip Grande Elementary School</th>
                <th style="width:12%"><?php echo $lasipstudents ?></th>
                <th style="width:12%"><?php echo $lasiptotalpar ?></th>
                <th style="width:12%"><?php echo $lasipenglish ?></th>
                <th style="width:12%"><?php echo $lasipfilipino ?></th>
                <th style="width:12%"><?php echo $lasipnumeracy ?></th>
                <th style="width:12%"><?php echo $lasipbehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Leon-Francisco Elementary School</th>
                <th style="width:12%"><?php echo $leonstudents ?></th>
                <th style="width:12%"><?php echo $leontotalpar ?></th>
                <th style="width:12%"><?php echo $leonenglish ?></th>
                <th style="width:12%"><?php echo $leonfilipino ?></th>
                <th style="width:12%"><?php echo $leonnumeracy ?></th>
                <th style="width:12%"><?php echo $leonbehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Lomboy Elementary School</th>
                <th style="width:12%"><?php echo $lomboystudents ?></th>
                <th style="width:12%"><?php echo $lomboytotalpar ?></th>
                <th style="width:12%"><?php echo $lomboyenglish ?></th>
                <th style="width:12%"><?php echo $lomboyfilipino ?></th>
                <th style="width:12%"><?php echo $lomboynumeracy ?></th>
                <th style="width:12%"><?php echo $lomboybehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Lucao Elementary School</th>
                <th style="width:12%"><?php echo $lucaostudents ?></th>
                <th style="width:12%"><?php echo $lucaototalpar ?></th>
                <th style="width:12%"><?php echo $lucaoenglish ?></th>
                <th style="width:12%"><?php echo $lucaofilipino ?></th>
                <th style="width:12%"><?php echo $lucaonumeracy ?></th>
                <th style="width:12%"><?php echo $lucaobehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Malued Sur Elementary School</th>
                <th style="width:12%"><?php echo $maluedstudents ?></th>
                <th style="width:12%"><?php echo $maluedtotalpar ?></th>
                <th style="width:12%"><?php echo $maluedenglish ?></th>
                <th style="width:12%"><?php echo $maluedfilipino ?></th>
                <th style="width:12%"><?php echo $maluednumeracy ?></th>
                <th style="width:12%"><?php echo $maluedbehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Mamalingling Elementary School</th>
                <th style="width:12%"><?php echo $mamalinglingstudents ?></th>
                <th style="width:12%"><?php echo $mamalinglingtotalpar ?></th>
                <th style="width:12%"><?php echo $mamalinglingenglish ?></th>
                <th style="width:12%"><?php echo $mamalinglingfilipino ?></th>
                <th style="width:12%"><?php echo $mamalinglingnumeracy ?></th>
                <th style="width:12%"><?php echo $mamalinglingbehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Mangin-Tebeng Elementary School</th>
                <th style="width:12%"><?php echo $manginstudents ?></th>
                <th style="width:12%"><?php echo $mangintotalpar ?></th>
                <th style="width:12%"><?php echo $manginenglish ?></th>
                <th style="width:12%"><?php echo $manginfilipino ?></th>
                <th style="width:12%"><?php echo $manginnumeracy ?></th>
                <th style="width:12%"><?php echo $manginbehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">North Central Elementary School</th>
                <th style="width:12%"><?php echo $northstudents ?></th>
                <th style="width:12%"><?php echo $northtotalpar ?></th>
                <th style="width:12%"><?php echo $northenglish ?></th>
                <th style="width:12%"><?php echo $northfilipino ?></th>
                <th style="width:12%"><?php echo $northnumeracy ?></th>
                <th style="width:12%"><?php echo $northbehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Pantal Elementary School</th>
                <th style="width:12%"><?php echo $pantalstudents ?></th>
                <th style="width:12%"><?php echo $pantaltotalpar ?></th>
                <th style="width:12%"><?php echo $pantalenglish ?></th>
                <th style="width:12%"><?php echo $pantalfilipino ?></th>
                <th style="width:12%"><?php echo $pantalnumeracy ?></th>
                <th style="width:12%"><?php echo $pantalbehavioral ?></th>
            </tr>

            <tr>
                <th style="width:29%">Pascuala G. Villamil Elementary School</th>
                <th style="width:12%"><?php echo $pascualastudents ?></th>
                <th style="width:12%"><?php echo $pascualatotalpar ?></th>
                <th style="width:12%"><?php echo $pascualaenglish ?></th>
                <th style="width:12%"><?php echo $pascualafilipino ?></th>
                <th style="width:12%"><?php echo $pascualanumeracy ?></th>
                <th style="width:12%"><?php echo $pascualabehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Pogo-Lasip Elementary School</th>
                <th style="width:12%"><?php echo $pogostudents ?></th>
                <th style="width:12%"><?php echo $pogototalpar ?></th>
                <th style="width:12%"><?php echo $pogoenglish ?></th>
                <th style="width:12%"><?php echo $pogofilipino ?></th>
                <th style="width:12%"><?php echo $pogonumeracy ?></th>
                <th style="width:12%"><?php echo $pogobehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Pugaro Integrated School</th>
                <th style="width:12%"><?php echo $pugarostudents ?></th>
                <th style="width:12%"><?php echo $pugarototalpar ?></th>
                <th style="width:12%"><?php echo $pugaroenglish ?></th>
                <th style="width:12%"><?php echo $pugarofilipino ?></th>
                <th style="width:12%"><?php echo $pugaronumeracy ?></th>
                <th style="width:12%"><?php echo $pugarobehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Sabangan Elementary School</th>
                <th style="width:12%"><?php echo $sabanganstudents ?></th>
                <th style="width:12%"><?php echo $sabangantotalpar ?></th>
                <th style="width:12%"><?php echo $sabanganenglish ?></th>
                <th style="width:12%"><?php echo $sabanganfilipino ?></th>
                <th style="width:12%"><?php echo $sabangannumeracy ?></th>
                <th style="width:12%"><?php echo $sabanganbehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Salapingao Elementary School</th>
                <th style="width:12%"><?php echo $salapingaostudents ?></th>
                <th style="width:12%"><?php echo $salapingaototalpar ?></th>
                <th style="width:12%"><?php echo $salapingaoenglish ?></th>
                <th style="width:12%"><?php echo $salapingaofilipino ?></th>
                <th style="width:12%"><?php echo $salapingaonumeracy ?></th>
                <th style="width:12%"><?php echo $salapingaobehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Salisay Elementary School</th>
                <th style="width:12%"><?php echo $salisaystudents ?></th>
                <th style="width:12%"><?php echo $salisaytotalpar ?></th>
                <th style="width:12%"><?php echo $salisayenglish ?></th>
                <th style="width:12%"><?php echo $salisayfilipino ?></th>
                <th style="width:12%"><?php echo $salisaynumeracy ?></th>
                <th style="width:12%"><?php echo $salisaybehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Suit Elementary School</th>
                <th style="width:12%"><?php echo $suitstudents ?></th>
                <th style="width:12%"><?php echo $suittotalpar ?></th>
                <th style="width:12%"><?php echo $suitenglish ?></th>
                <th style="width:12%"><?php echo $suitfilipino ?></th>
                <th style="width:12%"><?php echo $suitnumeracy ?></th>
                <th style="width:12%"><?php echo $suitbehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">T. Ayson Rosario Elementary School</th>
                <th style="width:12%"><?php echo $aysonstudents ?></th>
                <th style="width:12%"><?php echo $aysontotalpar ?></th>
                <th style="width:12%"><?php echo $aysonenglish ?></th>
                <th style="width:12%"><?php echo $aysonfilipino ?></th>
                <th style="width:12%"><?php echo $aysonnumeracy ?></th>
                <th style="width:12%"><?php echo $aysonbehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Tambac Elementary School</th>
                <th style="width:12%"><?php echo $tambacstudents ?></th>
                <th style="width:12%"><?php echo $tambactotalpar ?></th>
                <th style="width:12%"><?php echo $tambacenglish ?></th>
                <th style="width:12%"><?php echo $tambacfilipino ?></th>
                <th style="width:12%"><?php echo $tambacnumeracy ?></th>
                <th style="width:12%"><?php echo $tambacbehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Tebeng Elementary School</th>
                <th style="width:12%"><?php echo $tebengstudents ?></th>
                <th style="width:12%"><?php echo $tebengtotalpar ?></th>
                <th style="width:12%"><?php echo $tebengenglish ?></th>
                <th style="width:12%"><?php echo $tebengfilipino ?></th>
                <th style="width:12%"><?php echo $tebengnumeracy ?></th>
                <th style="width:12%"><?php echo $tebengbehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">Victoria Q. Zarate Elementary School</th>
                <th style="width:12%"><?php echo $victoriastudents ?></th>
                <th style="width:12%"><?php echo $victoriatotalpar ?></th>
                <th style="width:12%"><?php echo $victoriaenglish ?></th>
                <th style="width:12%"><?php echo $victoriafilipino ?></th>
                <th style="width:12%"><?php echo $victorianumeracy ?></th>
                <th style="width:12%"><?php echo $victoriabehavioral ?></th>
            </tr>
            <tr>
                <th style="width:29%">West Central II Elementary School</th>
                <th style="width:12%"><?php echo $westcentralstudents?></th>
                <th style="width:12%"><?php echo $westcentraltotalpar?></th>
                <th style="width:12%"><?php echo $westcentralenglish?></th>
                <th style="width:12%"><?php echo $westcentralfilipino?></th>
                <th style="width:12%"><?php echo $westcentralnumeracy?></th>
                <th style="width:12%"><?php echo $westcentralbehavioral?></th>
            </tr>
        </table>
    </div>
    <script src="monitoring_tracking.js"></script>

    <script>
    function filterTable() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.querySelector('.search-input');
        filter = input.value.toUpperCase();
        table = document.getElementById('schoolTable');
        tr = table.getElementsByTagName('tr');

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName('th')[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = '';
                } else {
                    tr[i].style.display = 'none';
                }
            }
        }
    }
</script>
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
