<?php 
$user_email = $_COOKIE['user'];

include('conn.php');
if ($user_email == NULL ){
    header("Location: Login_page.php");
    exit();
}

$username_query = "SELECT * FROM users WHERE User_Email = '$user_email'";
$result = $conn->query($username_query);
$row = $result->fetch_assoc();
$username = $row['Username'];
?>

<link rel="stylesheet" href="CSS_folder/Header_style.css">
    <header>
        <div class="logo_section">
            <img class="indexpage_logo" src="Image/logo1.jpg" alt="">
            <h1 class="indexpage_logo_word"> <!--logo text-->
                TreeCad
            </h1>
        </div>
        <div style= "letter-spacing: 1px;">
            Edit Profile: &ensp;
        </div>
        <div>
            <?php echo $username;?>
        </div>

        <a href="Index.php"><button class="contact_btn">Back</button></a>
    </header>
