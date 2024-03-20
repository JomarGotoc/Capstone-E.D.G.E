document.addEventListener("DOMContentLoaded", function() {
    const editableIcons = document.querySelectorAll('.editable-icon');
    editableIcons.forEach(icon => {
        icon.addEventListener('click', () => {
            const container = icon.parentElement;
            const content = container.querySelector('input');
            content.contentEditable = !content.isContentEditable;
            content.focus();
            icon.className = content.isContentEditable ? 'bx bx-check editable-icon' : 'bx bx-edit editable-icon';
        });
    });

    const editableTexts = document.querySelectorAll('.editable-text');
    editableTexts.forEach(text => {
        text.addEventListener('input', () => {
            const icon = text.parentElement.querySelector('.editable-icon');
            if (text.value.trim() === '') {
                icon.className = 'bx bx-edit editable-icon';
            } else {
                icon.className = 'bx bx-check editable-icon';
            }
        });
    });
});


