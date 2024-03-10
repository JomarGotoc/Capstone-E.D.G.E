<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export UI to PDF</title>
    <script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <script>
        function exportToPDF() {
            // Load UI content from try1.php using AJAX
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var uiContent = xhr.responseText;
                    // Create a new window with the UI content
                    var newWindow = window.open();
                    newWindow.document.write('<html><head><title>University of Bobo - Export</title></head><body>' + uiContent + '</body></html>');
                    newWindow.document.close();

                    newWindow.focus();
                    html2pdf(newWindow.document.body, { margin: [1, 1, 1, 1] }).then(function (pdf) {
                        pdf.save('exported_document.pdf');
                        newWindow.close(); 
                    });
                }
            };
            xhr.open('GET', 'try1.php', true);
            xhr.send();
        }
    </script>
</head>
<body>

    <button onclick="exportToPDF()">Export to PDF</button>

</body>
</html>
