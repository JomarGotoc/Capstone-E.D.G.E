document.addEventListener("DOMContentLoaded", function () {
    function openPopup() {
        var popupContainer = document.querySelector(".popup-container");
        popupContainer.style.display = "flex";
    }

    function closePopup() {
        var popupContainer = document.querySelector(".popup-container");
        popupContainer.style.display = "none";
    }

    var plusIcon = document.querySelector(".bx-plus");
    plusIcon.addEventListener("click", openPopup);

    var closeButton = document.getElementById("close-popup");
    closeButton.addEventListener("click", closePopup);

    var addStudentButton = document.querySelector(".circle");

    addStudentButton.addEventListener("click", function () {
        openPopup(); 
        closeAddStudentPopup(); 
    });

    var okButton = document.querySelector(".addpopup button");
    okButton.addEventListener("click", closeAddStudentPopup);

    function openAddStudentPopup() {
        var addStudentPopup = document.getElementById("myPopup");
        addStudentPopup.style.display = "flex";
    }

    function closeAddStudentPopup() {
        var addStudentPopup = document.getElementById("myPopup");
        addStudentPopup.style.display = "none";
    }


    var addStudentForm = document.getElementById("student-form");
    addStudentForm.addEventListener("submit", function (e) {
        e.preventDefault(); 
        openAddStudentPopup();
        closePopup();
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const filterIcons = {
        name: document.getElementById("name-filter-icon"),
        star: document.getElementById("star-filter-icon"),
        grade: document.getElementById("grade-filter-icon"),
        section: document.getElementById("section-filter-icon"),
    };

    const filterPopup = document.getElementById("filter-popup");
    const filterChoices = document.getElementById("filter-choices");
    let activeFilter = null; 

    for (let category in filterIcons) {
        filterIcons[category].addEventListener("click", function (e) {
            e.stopPropagation(); 

            if (activeFilter === category) {
                filterPopup.style.display = "none";
                activeFilter = null;
                return;
            }

            filterChoices.innerHTML = "";

            switch (category) {
                case "name":
                    addChoices(["A-Z", "Z-A"]);
                    break;
                case "star":
                    addChoices(["Academic", "Behavioral", "Psychological"]);
                    break;
                case "grade":
                    addChoices(["Grade 1", "Grade 2", "Grade 3"]);
                    break;
                case "section":
                    addChoices(["Section 1", "Section 2", "Section 3"]);
                    break;
            }

            const iconRect = filterIcons[category].getBoundingClientRect();
            let leftPosition = iconRect.left;
            let topPosition = iconRect.bottom;


            if (leftPosition + filterPopup.offsetWidth > window.innerWidth) {
                leftPosition = window.innerWidth - filterPopup.offsetWidth;
            }

            if (topPosition + filterPopup.offsetHeight > window.innerHeight) {
                topPosition = window.innerHeight - filterPopup.offsetHeight;
            }

            filterPopup.style.left = leftPosition + "px";
            filterPopup.style.top = topPosition + "px";

            filterPopup.style.display = "block";
            activeFilter = category;
        });
    }

    window.addEventListener("click", function (e) {
        if (e.target !== filterPopup && e.target !== filterIcons.name && e.target !== filterIcons.star && e.target !== filterIcons.grade && e.target !== filterIcons.section) {
            filterPopup.style.display = "none";
            activeFilter = null;
        }
    });

    function addChoices(choices) {
        choices.forEach(choice => {
            const li = document.createElement("li");
            li.textContent = choice;
            filterChoices.appendChild(li);
        });
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const menuIcon = document.getElementById("menu-icon");
    const menuPopup = document.getElementById("menu-popup");

    menuIcon.addEventListener("click", function (e) {
        menuPopup.style.display = menuPopup.style.display === "none" ? "block" : "none";
        e.stopPropagation();
    });

    window.addEventListener("click", function (e) {
        if (e.target !== menuPopup && e.target !== menuIcon) {
            menuPopup.style.display = "none";
        }
    });
});



function toggleDropdown() {
    var dropdownContent = document.getElementById("dropdownContent");
    dropdownContent.classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches('.logout-icon')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}



function toggleOptions(element, grade) {
    const options = element.nextElementSibling;
    if (options.style.display === "block") {
        options.style.display = "none";
    } else {
        document.querySelectorAll('.options').forEach(option => {
            option.style.display = "none";
        });
        options.innerHTML = '';
        let optionsList;
        if (grade === 'kindergarten') {
            optionsList = ['Section 1', 'Section 2', 'Section 3', 'Section 4', 'Section 5', 'Section 6'];
        } else if (grade === 'grade1') {
            optionsList = ['Section 1', 'Section 2', 'Section 3', 'Section 4', 'Section 5', 'Section 6'];
        } else if (grade === 'grade2') {
            optionsList = ['Section 1', 'Section 2', 'Section 3', 'Section 4', 'Section 5', 'Section 6'];
        } else if (grade === 'grade3') {
            optionsList = ['Section 1', 'Section 2', 'Section 3', 'Section 4', 'Section 5', 'Section 6'];
        }
        optionsList.forEach(optionText => {
            const div = document.createElement('div');
            div.textContent = optionText;
            div.classList.add('blue', 'option');
            div.onclick = () => {
                const sectionName = optionText.toLowerCase().replace(/\s/g, '_');
                window.location.href = `${grade}_${sectionName}.php`; 
            };
            options.appendChild(div);
        });

        options.style.display = "block";

        const rect = element.getBoundingClientRect();
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const elementTop = rect.top + scrollTop;

        window.scrollTo({
            top: elementTop,
            behavior: 'smooth'
        });
    }
}

