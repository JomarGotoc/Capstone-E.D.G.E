
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Table</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        /* Add your styles here */
    </style>
</head>
<body>

<?php
// Assuming $results is your data array
$results = [
    ["Table1", [
        ["lrn" => "123", "fullname" => "John Doe", "classification" => "Behavioral", "grade" => "5", "section" => "A", "status" => "Active"],
        // Add more rows as needed
    ]],
    // Add more tables as needed
];

?>

<table border="0" id="pupilTable">
    <?php
    foreach ($results as $tableResult) {
        if ($tableResult) {
            list($tableName, $tableData) = $tableResult;
            foreach ($tableData as $row) {
                // Determine the row color based on classification
                $classification = $row['classification'];
                $rowColor = '';

                switch ($classification) {
                    case 'Behavioral':
                        $rowColor = 'red';
                        break;
                    case 'Academic - Numeracy':
                        $rowColor = 'blue';
                        break;
                    case 'Academic - Literacy in English':
                        $rowColor = 'yellow';
                        break;
                    case 'Academic - Literacy in Filipino':
                        $rowColor = 'green';
                        break;
                    default:
                        $rowColor = '';
                        break;
                }

                echo "<tr class='sheshable'>
                        <th style='width:.5%; background-color: $rowColor;'></th>
                        <th style='width:13%'>{$row['lrn']}</th>
                        <th style='width:22%'>{$row['fullname']}</th>
                        <th style='width:15%'>{$classification}</th>
                        <th style='width:15%'>{$row['grade']} - {$row['section']}</th>
                        <th style='width:15%'>{$row['status']}</th>
                        <th style='width:15%' class='act'><button class='updateRecordButton'>UPDATE RECORD</button></th>
                      </tr>";
            }
        }
    }
    ?>
</table>

<div class="search-box">
    <input type="text" class="search-input" placeholder="Search Pupil's Name">
    <i class='bx bx-search search-icon'></i>
</div>

<script>
    $(document).ready(function () {
        $(".search-input").on("keyup", function () {
            var searchText = $(this).val().toLowerCase().trim();

            $(".sheshable").each(function () {
                var rowText = $(this).find('th:nth-child(3)').text().toLowerCase().trim();
                $(this).toggle(rowText === searchText);
            });
        });
    });
</script>

</body>
</html>