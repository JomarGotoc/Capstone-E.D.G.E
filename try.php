<table border="0" id="parlist" style="display: none;">
    <?php 
    $displayed_lrns = array(); // Array to keep track of displayed LRNs
    foreach ($results as $tables => $table_results):
        foreach ($table_results as $row):
            // Check if LRN has been displayed already
            if (!in_array($row['lrn'], $displayed_lrns)):
                array_push($displayed_lrns, $row['lrn']); // Add LRN to displayed list
                
                // Check if LRN is found in academic_english table
                $is_academic_english = ($tables === 'academic_english');
                $is_academic_filipino = ($tables === 'academic_filipino');
                $is_academic_numeracy = ($tables === 'academic_numeracy');
                $is_behavioral = ($tables === 'behavioral');
                $is_academic_english_filipino = ($tables === 'academic_english' && 'academic_filipino');
                $is_academic_english_numeracy = ($tables === 'academic_english' && 'academic_numeracy');
                $is_academic_english_behavioral = ($tables === 'academic_english' && 'behavioral');
                $is_academic_filipino_numeracy = ($tables === 'academic_filipino' && 'academic_numeracy');
                $is_academic_filipino_behavioral = ($tables === 'academic_filipino' && 'behavioral');
                $is_academic_numeracy_behavioral = ($tables === 'academic_numeracy' && 'behavioral');
    ?>
            <tr class='sheshable'>
                <th style='width:14%'><?php echo $row['lrn']; ?></th>
                <th style='width:22%'><?php echo $row['fullname']; ?></th>
                <th style='width:13%' class='act'>
                    <div class="icon-container">
                        <?php if ($is_academic_english): ?>
                            <strong><p style="font-weight: bolder;">E</p></strong>
                            <i class='bx bx-book-open icon' onclick="showPupilRecord()"></i>
                            <i class="vertical-lines"></i>
                            <p style="font-weight: normal;">F</p>
                            <i class="bx bx-book-open icon" onclick="showPupilRecord()"></i>
                            <i class="vertical-lines"></i>
                            <p style="font-weight: normal;">N</p>
                            <i class="par-icon bx bx-calculator icon" onclick="showPupilRecord()"></i>
                            <i class="vertical-lines"></i>
                            <p style="font-weight: normal;">B</p>
                            <i class="par-icon bx bx-calculator icon" onclick="showPupilRecord()"></i>
                            <i class="vertical-lines"></i>
                        <?php else: ?>
                            <p style="font-weight: normal;">E</p>
                            <i class='bx bx-book-open icon' onclick="showPupilRecord()"></i>
                            <i class="vertical-lines"></i>
                            <p style="font-weight: normal;">F</p>
                            <i class="bx bx-book-open icon" onclick="showPupilRecord()"></i>
                            <i class="vertical-lines"></i>
                            <p style="font-weight: normal;">N</p>
                            <i class="par-icon bx bx-calculator icon" onclick="showPupilRecord()"></i>
                            <i class="vertical-lines"></i>
                            <p style="font-weight: normal;">B</p>
                            <i class="par-icon bx bx-calculator icon" onclick="showPupilRecord()"></i>
                        <?php endif; ?>
                        <?php if ($is_academic_english_filipino): ?>
                          <strong><p style="font-weight: bolder;">E</p></strong>
                            <i class='bx bx-book-open icon' onclick="showPupilRecord()"></i>
                            <i class="vertical-lines"></i>
                            <strong><p style="font-weight: bolder;">F</p></strong>
                            <i class="bx bx-book-open icon" onclick="showPupilRecord()"></i>
                            <i class="vertical-lines"></i>
                            <p style="font-weight: normal;">N</p>
                            <i class="par-icon bx bx-calculator icon" onclick="showPupilRecord()"></i>
                            <i class="vertical-lines"></i>
                            <p style="font-weight: normal;">B</p>
                            <i class="par-icon bx bx-calculator icon" onclick="showPupilRecord()"></i>
                            <i class="vertical-lines"></i>
                        <?php else: ?>
                            <p style="font-weight: normal;">F</p>
                        <?php endif; ?>
                        
                        <?php if ($is_academic_numeracy): ?>
                            <strong><p style="font-weight: bolder;">N</p></strong>
                        <?php else: ?>
                            <p style="font-weight: normal;">N</p>
                        <?php endif; ?>
                        
                        <?php if ($is_behavioral): ?>
                            <strong><p style="font-weight: bolder;">B</p></strong>
                        <?php else: ?>
                            <p style="font-weight: normal;">B</p>
                        <?php endif; ?>
                        <i class="par-icon bx bx-face icon" onclick="showPupilRecord()"></i>
                    </div>
                </th>   
                <th style='width:16%'><?php echo $row['status']; ?></th>
                <th style='width:14%' class='act'>
                    <button class='updateRecordButton'>ADD PUPIL AT RISK</button>
                    <button type="submit" name="submit1" style="display:none; background-color:#070000" class="updateRecordButtons">REMOVE PUPIL AT RISK</button>
                </th>
            </tr>
    <?php 
            endif; // End of check if LRN has been displayed
        endforeach;
    endforeach;
    ?>
</table>