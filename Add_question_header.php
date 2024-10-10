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
                <!-- <li><a href="Add_Answer_Page.php">Add Answer</a></li>
                <li><a href="Delete_Q&A.php">Delete Question</a></li> -->
            </ul>
        </nav>
        <p class = "user_name_style"><?php echo $username?></p>
        <a href="admin.php"><button class="contact_btn">Back</button></a>
    </header>

    <script>
        function signOut(){
            window.location.href = "Login_page.php"
        }
    </script>
