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

$tree_query = "SELECT tree.type_ID, progression.Tree_Stage_url, progression.Progression_ID, progression.Progression_Rate,
               chapter.Chapter_Url, chapter.Chapter_briefing
               FROM users
               JOIN tree ON users.user_email = tree.user_email
               JOIN progression ON tree.Progression_ID = progression.Progression_ID
               JOIN chapter ON progression.Chapter_ID = chapter.Chapter_ID
               WHERE users.user_email = '$user_email'";

$tree_result = $conn->query($tree_query);
$tree_row = $tree_result->fetch_assoc();
$chapter_url = $tree_row['Chapter_Url'];


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
        <!-- <nav>
            <ul class="nav_links">
                <li><a href="">Aasdsdsa</a></li>
                <li><a href="">Badsadsd</a></li>
                <li><a href="edit_profile.php">Edit Profile</a></li>
            </ul>
        </nav> -->
        <?php echo $username;?>
        <a href="<?php echo $chapter_url;?>"><button class="contact_btn">Back</button></a>
    </header>
