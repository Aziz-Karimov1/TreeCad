<?php
session_start();

include("conn.php");

if(isset($_POST['reset_password'])){
    $password = $conn->real_escape_string($_POST['password']);
    $confirm_password = $conn->real_escape_string($_POST['confirm_password']);
    
    // Check if passwords match
    if($password == $confirm_password){
        // Check if password meets the minimum length requirement
        if(strlen($password) >= 8){
            // No need to hash the password
            $plain_text_password = $password;

            // Update password in the database
            $email = $_SESSION['User_email'];
            $update_query = "UPDATE users SET user_password='$plain_text_password' WHERE user_email='$email'";
            $conn->query($update_query);

            // Redirect user to login page
            header("Location: Reset_sucess.php");
            session_destroy();
            exit();
        } else {
            echo '<script>alert("Password must be at least 8 characters long");</script>';
        }
    } else {
        echo '<script>alert("Passwords do not match");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS_folder/Reset_password.css">
    <link rel="stylesheet" href="CSS_folder/general.css">
    <title>Reset Password</title>
</head>
<body>
    <form action="" method="POST" class="form">
        <h1>Reset Password</h1>
        <div>
            <label for="password">New Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        <button type="submit" name="reset_password" class="btn">Reset Password</button>
    </form>
</body>
</html>



