<?php

include("conn.php");

if(isset($_POST['_login'])){
    $login_email = $conn->real_escape_string($_POST['user_email']);
    $login_password = $conn->real_escape_string($_POST['user_password']);

    $query = "SELECT * FROM users WHERE user_email = '$login_email' and user_password = '$login_password'";
    $result = $conn->query($query);

    if($result-> num_rows == 1){
        //valid login, start session
        $row = $result->fetch_assoc();
        $user_email = $row['user_email'];
        $user_name = $row['Username'];
        $user_role = $row['user_roles'];
    }else{
        echo "<script type = 'text/javascript'> alert('Invalid Username or Password!'); document.location = 'Login_page.php' </script>";
    }
}
$conn->close();


?>
