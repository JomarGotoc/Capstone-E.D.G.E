<form id="quarterForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <select id="quarterSelect" name="quarter" onchange="submitForm()">
        <option value="1">Quarter 1</option>
        <option value="2">Quarter 2</option>
        <option value="3">Quarter 3</option>
        <option value="4">Quarter 4</option>
    </select>
</form>

<script>
    function submitForm() {
        document.getElementById('quarterForm').submit();
    }
</script>