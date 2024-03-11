function toggleBold(inputId) {
    var input = document.getElementById(inputId);
    input.value += "**bold text**";
}

function toggleItalic(inputId) {
    var input = document.getElementById(inputId);
    input.value += "*italic text*";
}

function toggleBullet(inputId) {
    var input = document.getElementById(inputId);
    input.value += "\n• ";
}


document.addEventListener('DOMContentLoaded', function () {
    var editableTexts = document.querySelectorAll('.editable-text');

    editableTexts.forEach(function (textArea) {
        textArea.addEventListener('input', function () {
            if (textArea.textContent.trim() !== '') {
                textArea.classList.add('content-entered');
            } else {
                textArea.classList.remove('content-entered');
            }
        });
    });
});