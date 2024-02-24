<?php
require '../vendor/autoload.php'; // Include PHPMailer

// Database connection
include ("../database.php");

// Function to generate OTP
function generateOTP() {
    return mt_rand(100000, 999999);
}

// Function to send email using SMTP
function sendEmail($to, $otp) {
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'edge.developers1234@gmail.com'; // Your Gmail username
        $mail->Password = 'leka dsmb yqoy ppvm'; // Your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('edge.developers1234@gmail.com', 'EDGE');
        $mail->addAddress($to);

        $mail->isHTML(true);
        $mail->Subject = 'OTP for your account';
        $mail->Body = "Your OTP is: $otp";

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

// Process user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employment_number = $_POST["employment_number"];
    $email = $_POST["email"];

    $tables = ['adviser', 'principal', 'counselor', 'school_admin', 'sdo_admin', 'executive_committee'];

    foreach ($tables as $table) {
        $query = "SELECT * FROM $table WHERE employment_number = '$employment_number'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $otp = generateOTP();

            $updateQuery = "UPDATE $table SET otp = '$otp' WHERE employment_number = '$employment_number'";
            $conn->query($updateQuery);

            if (sendEmail($email, $otp)) {
                header("Location: ../Enter_OTP/forgot_pass_Enter_OTP.php");
            } else {
                echo "Failed to send OTP. Please try again later.";
            }

            break; 
        }
    }

    $conn->close();
}
?>