<?php
session_start();

include("conn.php");



if(isset($_POST['sendotp'])){
    $login_email = $conn->real_escape_string($_POST['useremail']);

    $query = "SELECT * FROM users WHERE user_email = '$login_email'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['User_email'] = $row['user_email'];
        $_SESSION['User_name'] = $row['Username'];
        $_SESSION['User_password'] = $row['user_password'];
        $_SESSION['User_role'] = $row['user_roles'];
    
            // echo "".$_SESSION["User_password"]."";
    
        if ($_SESSION['User_email'] == $login_email) {
            echo "<script type = 'text/javascript'>document.location = 'OTP_verify.php' </script>";
        }
        
    }
    else{
        echo '<script>alert("This email doesnot exits")</script>';
        echo "<script type = 'text/javascript'>document.location = 'Reset_password_Page.php' </script>";
    }
    echo '<script>alert("done running php")</script>';
}
?>
