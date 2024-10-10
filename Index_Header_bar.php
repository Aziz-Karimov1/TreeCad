<?php 
$user_email = $_COOKIE['user'];

include('conn.php');

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
        <nav>
            <ul class="nav_links">
                <!-- <li><a href="">Aasdsdsa</a></li>
                <li><a href="">Badsadsd</a></li> -->
                <li><a href="edit_profile.php">Edit Profile</a></li>
            </ul>
        </nav>
        <p class = "user_name_style"><?php echo $username?></p>
        <button onclick = "signOut()" class="contact_btn">Sign Out</button>
    </header>

    <script>
        function signOut(){
            window.location.href = "Login_page.php"
        }
    </script>
