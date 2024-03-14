<?php

include('database.php');

$unique_schools = [];

$sql = "SELECT table_name
        FROM information_schema.tables
        WHERE table_schema = '{$database}'
        AND (table_name LIKE '%grade%' OR table_name LIKE '%section%')";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $table_name = $row["table_name"];
        
        $check_school_column_sql = "SELECT COLUMN_NAME
                                    FROM information_schema.columns
                                    WHERE table_schema = '{$database}'
                                    AND table_name = '{$table_name}'
                                    AND column_name = 'school'";
        
        $school_column_result = $conn->query($check_school_column_sql);
        
        if ($school_column_result->num_rows > 0) {
            $fetch_school_data_sql = "SELECT school FROM {$table_name}";
            $school_data_result = $conn->query($fetch_school_data_sql);
        } 
    }
}

$conn->close();

?>
<table border="0" id="schoolTable">
            <tr>
            <th style="width:29%">
                <?php
                if ($school_data_result->num_rows > 0) {
                    while ($school_row = $school_data_result->fetch_assoc()) {
                        $school = $school_row["school"];
                        if (!in_array($school, $unique_schools)) {
                            echo "School Data: " . $school . "<br>";
                            $unique_schools[] = $school;
                        }
                    }
                }
                ?>
            </th>
                <th style="width:12%"></th>
                <th style="width:12%"></th>
                <th style="width:12%"></th>
                <th style="width:12%"></th>
                <th style="width:12%"></th>
                <th style="width:12%"></th>
            </tr>
        </table>
