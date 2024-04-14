//filter
function toggleFilterOptions() {
    var filterOptions = document.getElementById("filterOptions");
    if (filterOptions.style.display === "block") {
        filterOptions.style.display = "none";
    } else {
        filterOptions.style.display = "block";
    }
}

//action button
var filterIcons = document.querySelectorAll(".filter-icon");
filterIcons.forEach(icon => icon.addEventListener("click", toggleFilterOptions));

function toggleActionsDropdown(button) {
    var dropdown = button.closest('.actions-container').querySelector('.action-option');
    dropdown.classList.toggle("show");
}
//acticate deactivate button
function activate(employmentNumber) {
    document.getElementById("activateBtn_" + employmentNumber).disabled = true;
    document.getElementById("deactivateBtn_" + employmentNumber).disabled = false;
}

function deactivate(employmentNumber) {
    document.getElementById("deactivateBtn_" + employmentNumber).disabled = true;
    document.getElementById("activateBtn_" + employmentNumber).disabled = false;
}


//plus button
document.addEventListener("DOMContentLoaded", function() {
    const plusButton = document.getElementById('plusButton');
    const addbuttonContent = document.getElementById('createAccountDropdown');

    plusButton.addEventListener('click', function(event) {
        addbuttonContent.style.display = addbuttonContent.style.display === 'block' ? 'none' : 'block';
        
        event.preventDefault();
    });
});


//add form log in container 
function showLoginContainer(accountType) {
    var loginContainer = document.querySelector('.login-container');
    var overlay = document.createElement('div');
    overlay.classList.add('overlay');
    document.body.appendChild(overlay);
    loginContainer.style.display = 'block';
    overlay.style.display = 'block'; 
    overlay.addEventListener('click', hideLoginContainer);

    var loginContainerTitle = loginContainer.querySelector('h2');
    loginContainerTitle.textContent = accountType;
}

function hideLoginContainer() {
    var loginContainer = document.querySelector('.login-container');
    var overlay = document.querySelector('.overlay');
    document.body.removeChild(overlay);
    loginContainer.style.display = 'none';
}

function showSchoolAdminLoginContainer() {
    var loginContainer = document.querySelector('.login-container.schooladmin'); 
    var overlay = document.createElement('div');
    overlay.classList.add('overlay');
    document.body.appendChild(overlay);
    loginContainer.style.display = 'block';
    overlay.style.display = 'block'; 
    overlay.addEventListener('click', hideLoginContainerSchoolAdmin);
}

function hideLoginContainerSchoolAdmin() {
    var loginContainer = document.querySelector('.login-container.schooladmin');
    var overlay = document.querySelector('.overlay');
    document.body.removeChild(overlay);
    loginContainer.style.display = 'none';
}

function createAccount(accountType) {
    if (accountType === 'SDO Administrator' || accountType === 'Executive Committee') {
        showLoginContainer(accountType);
    } else if (accountType === 'School Administrator') {
        showSchoolAdminLoginContainer();
    }
}


//select school options
var schoolInput = document.getElementById("schoolName");
var schoolDropdown = document.getElementById("schoolDropdown");

schoolDropdown.addEventListener("click", function(event) {
  if (event.target.tagName === "A") {
    schoolName.value = event.target.textContent;
  }
});

function filterSchools() {
    var input, filter, dropdown, a, i, txtValue;
    input = document.getElementById("schoolName");
    filter = input.value.toUpperCase();
    dropdown = document.getElementById("schoolDropdown");
    a = dropdown.getElementsByTagName("a");
    if (filter === "") {
        dropdown.style.display = "none";
        return;
    }
    for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
    dropdown.style.display = "block";
}



//edit form
function toggleEditContainer() {
    var editContainer = document.querySelector('.edit-container');
    var overlay = document.getElementById('overlay');
    
    editContainer.style.display = 'block';
    overlay.style.display = 'block';


    var fullName = document.querySelector('.rows:nth-child(1)').textContent;
    var employeeNumber = document.querySelector('.rows:nth-child(2)').textContent;
    var email = document.querySelector('.rows:nth-child(3)').textContent;

    document.getElementById('full-name').value = fullName;
    document.getElementById('idnum').value = employeeNumber;
    document.getElementById('email').value = email;

    var position = document.querySelector('.rows:nth-child(5)').textContent;
    var editContainerTitle = document.querySelector('.edit-container h2');
    if (position === "Principal") {
        editContainerTitle.textContent = "Principal";
    } else if (position === "Adviser") {
        editContainerTitle.textContent = "Adviser";
    } else if (position === "Guidance Counselor") {
        editContainerTitle.textContent = "Guidance Counselor";
    }
}

function hideEditContainer() {
    var editContainer = document.querySelector('.edit-container');
    var overlay = document.getElementById('overlay');

    editContainer.style.display = 'none';
    overlay.style.display = 'none';
}

function handleEditButtonClick() {
    toggleEditContainer();
}

var editButton = document.querySelector('#actionsDropdown button:nth-child(1)');
editButton.addEventListener('click', handleEditButtonClick);

var overlay = document.getElementById('overlay');
overlay.addEventListener('click', hideEditContainer);


//date
var currentDate = new Date();

var year = currentDate.getFullYear();
var month = String(currentDate.getMonth() + 1).padStart(2, '0'); 
var day = String(currentDate.getDate()).padStart(2, '0');

document.getElementById('date-added').value = `${year}-${month}-${day}`;

document.getElementById('date-added').disabled = true;





//new school year
document.addEventListener('DOMContentLoaded', function () {
    var selectedStartYear, selectedEndYear;

    function showModal() {
        document.getElementById("myModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    document.querySelector('#topdown1').addEventListener('change', function () {
        if (this.value === 'new-option') {
            showModal();
            this.value = 'school-year'; 
        }
    });

    document.querySelector("#submitBtn").addEventListener("click", function () {
        var startYear = document.querySelector("#startDateCalendar").value;
        var endYear = document.querySelector("#endDateCalendar").value;

        if (startYear && endYear) {
            var startYearParts = startYear.split(" - ");
            selectedStartYear = startYearParts[0];

            var endYearParts = endYear.split("-");
            selectedEndYear = endYearParts[0];

            var schoolYear = selectedStartYear + ' - ' + selectedEndYear;
            var selectDropdown = document.getElementById("topdown1");

            var addSchoolYearOption = selectDropdown.querySelector("option[value='new-option']");
            var option = document.createElement("option");
            option.text = schoolYear;
            option.value = schoolYear; 
            selectDropdown.insertBefore(option, addSchoolYearOption);

            closeModal(); 
        }
    });

    document.querySelector(".close").addEventListener("click", closeModal);
});