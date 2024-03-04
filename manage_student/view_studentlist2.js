// Function to open the modal and display the overlay
document.getElementById("addRecordButton").addEventListener("click", function() {
    var overlay = document.getElementById("overlay");
    var popupForm = document.getElementById("popupForm");
    overlay.style.display = "block";
    popupForm.style.display = "block";
});

// Function to close the modal and hide the overlay
function closeModal() {
    var overlay = document.getElementById("overlay");
    var popupForm = document.getElementById("popupForm");
    overlay.style.display = "none";
    popupForm.style.display = "none";
}
