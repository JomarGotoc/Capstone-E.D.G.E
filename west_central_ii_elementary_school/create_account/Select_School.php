<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDO Administrator</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
                    body {
                font-family: Arial, sans-serif;
                background-color: #f2f2f2;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background: url(../../img/bg.png);
                background-size: cover;
            }
            
            .logo {
                width: 75px;
                height: 75px;
                margin: 0 auto 20px;
                background-image: url('../img/logo.png'); 
                background-size: cover;
            }

            
            .login-container {
                background-color: rgba(25, 5, 114, 0.80); 
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                padding: 20px;
                width: 300px;
                text-align: center;
            }
            
            a {
                color: #fff;
                text-decoration: none;
            }
            
            header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: .1rem 5%;
            background: #130550;
            display: flex;
            align-items: center;
            z-index: 100;
            height: 55px;
        }

        .vertical-line {
            margin-left: 37rem;
            height: 40px;
            width: 1px;
            background-color: #fff;
        }

        .logout-icon {
            color: #fff; 
            font-size: 1.5rem;
            cursor: pointer; 
            margin-left: 15px;
        }

        .header.sticky {
            border-bottom: .2rem solid rgba(255, 255, 255, 0.2);
        }

        h4 {
            color: #fff;
            font-family: 'Darker Grotesque', sans-serif;
            font-weight: 300;
            font-size: 1.3rem;
            margin-left: 1rem;
            letter-spacing: 2px;
        }

        .logs {
            width: 3.5rem;
            height: 3.5rem;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: flex-start; 
            justify-content: center;
            width: 100%; 
        }

        .header-content {
            display: flex;
            align-items: center;
        }

            .navbar {
                background-color: #190572;;
                opacity: 80%;
                display: flex;
                justify-content: center;
                height: 50px;
                width: 100%;
                position: fixed;
                top: 57px; 
            }

            nav {
                display: flex;
                align-items: center;
            }

            nav a {
                display: inline-block;
                padding: 14px 40px;
                text-decoration: none;
                color: FFFFFF;
                opacity: 100%;
            }

            nav a:hover {
                background-color: #ddd;
                color: black;
            }

            .form-container {
                background-color: #190572;
                opacity: 1;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                padding: 20px;
                width: 300px;
                text-align: center;
            }
            
            h2 {
                font-family: 'Darker Grotesque', sans-serif;
                color: #fff;
                font-size: 20px;
            }
            
            .form-container {
                background-color: rgba(25, 5, 114, 0.80); 
                flex-direction: column;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                padding: 20px;
                width: 400px;
                text-align: center;
                align-items: center;
                justify-content: center;
                position: relative;
            }
            
            a {
                color: #fff;
                text-decoration: none;
            }

            .search-container {
            margin-top: 35px;
            position: relative; 
            display: flex;
            left: 5px;
            margin-bottom: 30px;
            width: 100%;
            }

            input[type="text"] {
            padding: 10px;
            margin-right: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            flex-grow: 1;
            width: 375px;
            margin-top: -200px;
            }

            .search-icon {
                font-size: 20px;
                position: absolute; 
                right: 20px; 
                top: 50%;
                transform: translateY(-50%);
                cursor: pointer;
                color: #0C052F;
            }

            button {
                background-color: #0C052F;
                color: white;
                border: 1px solid #fff;
                padding: 10px;
                border-radius: 5px;
                cursor: pointer;
                width: 100%;
            }

            button:hover {
                background-color: #ddd;
                border: 1px solid #0C052F;
                color: #190572;
            }
            .back-icon {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 30px;
            color: #fff;
            text-decoration: none;
          }
                
          .back-icon i {
             margin-right: 5px;
          } 

          .dropdown-content {
            display: none;
            position: absolute;
            background-color: #130550;
            min-width: 100px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            right: 100px;
            border-bottom-left-radius: 7px;
            border-bottom-right-radius: 7px;
        }

        .dropdown-content a {
            color: rgb(255, 253, 253);
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #F3F3F3;
            color: #190572;
            opacity: 80%;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown-contents {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            max-height: 200px; /* Set maximum height for the dropdown */
            overflow-y: auto; /* Add scrollbar when content overflows */
        }
        .dropdown-contents a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-contents a:hover {
        background-color: #f1f1f1;
        cursor: pointer;
        }
  
        .search-container:hover .dropdown-contents {
            display: block;
        }
        .search-container {
    position: relative;
    display: inline-block;
  }
        
    </style>
</head>
<body>

    <header>
        <div class="container">
            <div class="header-content">
                <img src="../../img/logo.png" class="logs">
                <h4>E.D.G.E | P.A.R. Early Detection and Guidance for Education</h4>
                <i class="vertical-line"></i>
                <div class="dropdown">
                <i class='bx log-out bx-lock-alt logout-icon' onclick="toggleDropdown()"></i>
                    <div class="dropdown-content" id="dropdownContent">
                        <a href="#">Log Out</a>
                        <a href="../change_password/change_password.php">Change Password</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="form-container">
        <a href="../../SDO_manage_account/SDO_manageaccount3.phpp" class="back-icon"><i class='bx bxs-chevron-left'></i></a>
        <div class="logo"></div>
        <h2>Select School</h2>

        <form>
    <div class="search-container">
        <input type="text" id="schoolName" placeholder="School's Name: " name="schoolName" required>
        <div class="dropdown-contents" id="schoolDropdown">
            <a>Bacayao Sur Elementary School</a>
            <a>Bliss Elementary School</a>
            <a>Bolosan Elementary School</a>
            <a>Bonuan Boquig Elementary School</a>
            <a>Calmay Elementary School</a>
            <a>Carael Elementary School</a>
            <a>Caranglaan Elementary School</a>
            <a>East Central Integrated School</a>
            <a>Federico N. Ceralde School Integrated School</a>
            <a>Gen. Gregorio Del Pilar Elementary School</a>
            <a>Juan L. Siapno Elementary School</a>
            <a>Juan P. Guadiz Elementary School</a>
            <a>Lasip Grande Elementary School</a>
            <a>Leon-Francisco Elementary School</a>
            <a>Lomboy Elementary School</a>
            <a>Lucao Elementary School</a>
            <a>Malued Sur Elementary School</a>
            <a>Mamalingling Elementary School</a>
            <a>Mangin-Tebeng Elementary School</a>
            <a>North Central Elementary School</a>
            <a>Pantal Elementary School</a>
            <a>Pascuala G. Villamil Elementary School</a>
            <a>Pogo-Lasip Elementary School</a>
            <a>Pugaro Integrated School</a>
            <a>Sabangan Elementary School</a>
            <a>Salapingao Elementary School</a>
            <a>Salisay Elementary School</a>
            <a>Suit Elementary School</a>
            <a>T. Ayson Rosario Elementary School</a>
            <a>Tambac Elementary School</a>
            <a>Tebeng Elementary School</a>
            <a>Victoria Q. Zarate Elementary School</a>

        </div>
    </div>
    <a href="Create_Account_School_Admin.php">
        <button type="button">Confirm</button>
    </a>
</form>


    </div>

    <script src="create_account.js"></script>
    <script>
  // Get references to the input field and the dropdown menu
  var schoolInput = document.getElementById("schoolName");
  var schoolDropdown = document.getElementById("schoolDropdown");

  // Add event listener to the dropdown menu
  schoolDropdown.addEventListener("click", function(event) {
    // Check if the clicked element is an anchor tag
    if (event.target.tagName === "A") {
      // Update the input field value with the text of the clicked anchor tag
      schoolName.value = event.target.textContent;
    }
  });
</script>

</body>
</html>