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
                $count_sql .= " AND school = 'Gen. Gregorio Del Pilar Elementary School' AND quarter = '1'";
                break;
            case 'academic_filipino':
                $count_sql .= " AND school = 'Gen. Gregorio Del Pilar Elementary School' AND quarter = '1'";
                break;
            case 'academic_numeracy':
                $count_sql .= " AND school = 'Gen. Gregorio Del Pilar Elementary School' AND quarter = '1'";
                break;
            case 'behavioral':
                $count_sql .= " AND school = 'Gen. Gregorio Del Pilar Elementary School' AND quarter = '1'";
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
<tr>
                <th style="width:29%">Gen. Gregorio Del Pilar Elementary School</th>
                <th style="width:12%"><?php echo $genstudents ?></th>
                <th style="width:12%"><?php echo $gentotalpar ?></th>
                <th style="width:12%"><?php echo $genenglish ?></th>
                <th style="width:12%"><?php echo $genfilipino ?></th>
                <th style="width:12%"><?php echo $gennumeracy ?></th>
                <th style="width:12%"><?php echo $genbehavioral ?></th>
            </tr>