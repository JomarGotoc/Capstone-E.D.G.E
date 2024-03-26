<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Real-time Button Activation</title>
<style>
    #myButton {
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }
</style>
</head>
<body>

<button id="myButton">Activate</button>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const button = document.getElementById("myButton");

        setInterval(function() {
            const currentTime = new Date().getTime(); // Get current timestamp in milliseconds
            const activateTime = 5000; // Time in milliseconds to activate the button
            const deactivateTime = 5000; // Time in milliseconds to deactivate the button

            if (currentTime % (activateTime + deactivateTime) < activateTime) {
                button.disabled = false; // Enable the button during the activation period
                button.innerText = "Active";
            } else {
                button.disabled = true; // Disable the button during the deactivation period
                button.innerText = "Inactive";
            }
        }, 100); // Check the time every 100 milliseconds
    });
</script>

</body>
</html>
