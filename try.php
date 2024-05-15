<?php
include('database.php');

$sql_combined = "
    SELECT lrn, fullname, status, 
           CASE 
               WHEN lrn IN (SELECT lrn FROM academic_english) THEN 'E'
               ELSE '' 
           END AS english,
           CASE 
               WHEN lrn IN (SELECT lrn FROM academic_filipino) THEN 'F'
               ELSE '' 
           END AS filipino,
           CASE 
               WHEN lrn IN (SELECT lrn FROM academic_numeracy) THEN 'N'
               ELSE '' 
           END AS numeracy,
           CASE 
               WHEN lrn IN (SELECT lrn FROM behavioral) THEN 'B'
               ELSE '' 
           END AS behavioral
    FROM (
        SELECT lrn, fullname, status FROM academic_english
        UNION
        SELECT lrn, fullname, status FROM academic_filipino
        UNION
        SELECT lrn, fullname, status FROM academic_numeracy
        UNION
        SELECT lrn, fullname, status FROM behavioral
    ) AS combined_data
";

$result_combined = $conn->query($sql_combined);

$conn->close();
?>
<table border="0" id="parlist">
<?php 
if ($result_combined->num_rows > 0) {
    while($row = $result_combined->fetch_assoc()) {
?>
        <tr class='sheshable'>
            <th style='width:20%'><?php echo $row["lrn"]; ?></th>
            <th style='width:25.7%'><?php echo $row["fullname"]; ?></th>
            <th style='width:20%' class='act'>
                <div class="icon-container">
                    <?php if ($row["english"] === 'E'): ?>
                        E<i class='bx bx-book-open icon' onclick="showPupilRecordEnglish()"></i>
                    <?php endif; ?>
                    <?php if ($row["filipino"] === 'F'): ?>
                        F<i class='bx bx-book-open icon' onclick="showPupilRecordFilipino()"></i>
                    <?php endif; ?>
                    <?php if ($row["numeracy"] === 'N'): ?>
                        N<i class='par-icon bx bx-calculator icon' onclick="showPupilRecordNumeracy()"></i>
                    <?php endif; ?>
                    <?php if ($row["behavioral"] === 'B'): ?>
                        B<i class='par-icon bx bx-face icon' onclick="showPupilRecordBehavioral()"></i>
                    <?php endif; ?>
                </div>
            </th>
            <th style='width:20%'><?php echo $row["status"]; ?></th>
            <th style='width:25%' class='act'>
                <button type="submit" name="submit1" style=" background-color:#070000" class="updateRecordButtons">REMOVE PUPIL AT RISK</button>
            </th>
        </tr>
<?php
    }
}
?>
</table>
