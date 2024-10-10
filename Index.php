<?php
include('conn.php');
$user_email = $_COOKIE['user'];

if ($user_email == NULL ){
    header("Location: Login_page.php");
    exit();
}


$username_query = "SELECT * FROM users WHERE User_Email = '$user_email'";
$result = $conn->query($username_query);
$row = $result->fetch_assoc();
$username = $row['Username'];

$tree_query = "SELECT tree.type_ID, progression.Tree_Stage_url, progression.Progression_ID, progression.Progression_Rate,
               chapter.Chapter_Name, chapter.Chapter_Url, chapter.Chapter_briefing
               FROM users
               JOIN tree ON users.user_email = tree.user_email
               JOIN progression ON tree.Progression_ID = progression.Progression_ID
               JOIN chapter ON progression.Chapter_ID = chapter.Chapter_ID
               WHERE users.user_email = '$user_email'";

$tree_result = $conn->query($tree_query);
$tree_row = $tree_result->fetch_assoc();
$tree_type_id = $tree_row['type_ID'];
$tree_stage_url = $tree_row['Tree_Stage_url'];
$progression_id = $tree_row['Progression_ID'];
$progression_rate = $tree_row['Progression_Rate'];
$chapter_url = $tree_row['Chapter_Url'];
$chapter_briefing = $tree_row['Chapter_briefing'];
$chapter_name = $tree_row['Chapter_Name'];
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS_folder/General.css">
    <link rel="stylesheet" href="CSS_folder/index.css">
    <title>Document</title>
</head>
<body>
    <?php include('Index_Header_bar.php')?>
    
    <div class="content"> <!--content inside will change-->
            <div class="image_container">
                <div>
                    <a class="prev" onclick= #> &#10094; </a>
                </div>
                <div>
                <img class="Tree_img" src="Web_assignment_image/<?php echo $tree_type_id; ?><?php echo $tree_stage_url; ?>" alt="">
                </div>
                <div>
                    <a class="next" onclick=#> &#10095; </a>
                </div>
            </div>


            <div class="course_content">
                    <h1>
                        Welcome To Tree CAD, <?php echo $username ?>
                    </h1>

                <div>
                    <p class = "chapter_brief">Infomation Current Learning Chapter: <?php echo $chapter_name;?></p>
                    <p class = "chapter_brief"><?php echo $chapter_briefing?></p>
                </div>
                <div class="button_content">
                    <div>
                        <?php if($progression_id == "P_11" || $progression_id == "P_12"): ?>
                                <a class="Learning_btn" href="Revision_page.php" ><span>Revision</span><i></i></a>
                        <?php else: ?>
                                <a class="Learning_btn" href="Explore_more.php" ><span>Explore More</span><i></i></a>
                        <?php endif; ?>
                    </div>
                        <div>
                            <?php if($progression_id == 'P_01'): ?>
                                <a class="Learning_btn" href="<?php echo $chapter_url ?>" ><span>Start Learning Now</span><i></i></a>
                            <?php elseif($progression_id == "P_11"): ?>
                                <a class="Learning_btn" href="Exam_A.php" ><span>Start Exam 1</span><i></i></a>
                            <?php elseif($progression_id == "P_12"): ?>
                                <a class="Learning_btn" href="Exam_B.php" ><span>Start Exam 2</span><i></i></a>
                            <?php elseif($progression_id == "P_13"): ?>
                                <a class="Learning_btn" href="" ><span>Course End</span><i></i></a>
                            <?php else: ?>
                                <a class="Learning_btn" href="<?php echo $chapter_url ?>"><span>Continue Learning</span><i></i></a>
                            <?php endif; ?>
                        </div>
                </div>


            </div>
    </div>
    
</body>
</html>