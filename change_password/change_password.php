<?php
  $errorMsg = "";
  if (isset($_POST['submit'])) {
      $old_password = isset($_POST['old_password']) ? $_POST['old_password'] : '';
      $new_password = isset($_POST['new_password']) ? $_POST['new_password'] : '';
      $repeat_password = isset($_POST['repeat_password']) ? $_POST['repeat_password'] : '';
      $employment_number = isset($_GET['employment_number']) ? $_GET['employment_number'] : '';

      if (!empty($old_password) && !empty($new_password) && !empty($repeat_password) && !empty($employment_number)) {
          if ($new_password === $repeat_password) {
              include('../database.php');

              $found_tables = [];

              $tables = ['adviser', 'counselor', 'principal', 'school_admin', 'sdo_admin', 'executive_committee'];
              foreach ($tables as $table) {
                  $sql = "SELECT * FROM $table WHERE employment_number = ?";
                  $stmt = $conn->prepare($sql);
                  $stmt->bind_param("s", $employment_number);
                  $stmt->execute();
                  $result = $stmt->get_result();

                  if ($result->num_rows > 0) {
                      $found_tables[] = $table;

                      $row = $result->fetch_assoc();
                      $stored_password = $row['password'];

                      if (password_verify($old_password, $stored_password)) {
                          $hashed_new_password = password_hash($new_password, PASSWORD_DEFAULT);
                          $update_sql = "UPDATE $table SET password = ? WHERE employment_number = ?";
                          $update_stmt = $conn->prepare($update_sql);
                          $update_stmt->bind_param("ss", $hashed_new_password, $employment_number);
                          $update_stmt->execute();

                          $errorMsg = "Password updated successfully.";
                          break;
                      } else {
                        $errorMsg = "Old password is incorrect.";
                      }
                  }
              }

              if (empty($found_tables)) {
                $errorMsg = "Employment Number not found in any table.";
              }

              $conn->close();
          } else {
            $errorMsg = "Password do not match.";
          }
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Change Password</title>
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
            background: url(../img/bg.png);
            background-size: cover;
          }

          .alert1-success{
                color: red;
                font-weight: bold;
            }
          .login-container {
            background-color: #190572;
            opacity: 1;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
          }

          .logo {
            width: 75px;
            height: 75px;
            margin: 0 auto 20px;
            background-image: url('../img/logo.png'); 
            background-size: cover;
          }

          .login-form input[type="text"],
          .login-form input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
          }

          .login-form button {
            background-color: #0C052F;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
          }

          .login-form button:hover {
            background-color: #DDDAE7;
            color: #0C052F;
          }

          h2 {
            font-family: 'Goblin One', cursive;
            color: #fff;
            text-align: left;
            font-weight: 500;
          }

          p{
            text-align: left;
            font-weight: 500;
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

        .header.sticky {
            border-bottom: .2rem solid rgba(185, 169, 169, 0.2);
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

          .login-container {
              position: relative;
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
            p {
                color: #fff;
            }

            .login-form button[type="submit"]{
            background-color: #0C052F;
            width: 18.5rem;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 7px 30px;
            cursor: pointer;
            margin-top: 5px; 
        }

        .login-form button[type="submit"]:hover {
            background-color: #DDDAE7;
            color: #0C052F;
        }
        .error-message{
          color: green;
          font-weight: bold;
        }
        .errorMsg{
          color: red;
          font-weight: bold;
        }

    </style>
</head>
<body>

  <header>
    <img src="../img/logo.png" class="logs">
    <div class="container">
        <h4>E.D.G.E | P.A.R Early Detection and Guidance for Education</h4>
    </div>
  </header>

    <div class="login-container">
        <div class="logo"></div>
        <h2>Change Your Password</h2>
        <p>Enter a new password to change your password</p>
          

        <div class="errorMsg">
          <?php echo $errorMsg ?>
        </div>

        <form class="login-form" action="" method="post">
            <input type="password" id="password" name="old_password"  placeholder="Old Password " required>
            <input type="password" id="password" name="new_password"  placeholder="New Password " >
            <input type="password" id="password" name="repeat_password" placeholder="Confirm Password " >
            <button type="submit" value="Login" name="submit">Change Password</button>
        </form>

  
    </div>
</body>
</html>