<?php
$user_email = $_COOKIE['user'];

if ($user_email == NULL || $user_email != "tingwei@gmail.com"){
    header("Location: Login_page.php");
    exit();
}
include('conn.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS_folder/general.css">
    <link rel="stylesheet" href="CSS_folder/admin.css">
    <title>Document</title>
</head>
<body>
    <center>
        <?php include('Add_question_header.php')?>
        <div>
            <form action="Add_Question.php" method="post" id = "addQuestionForm">
                <p>Question:</p>
                <input type="text" name="question" required size="40">
                <p>Exam Type:</p>
                <select name="Exam_type" id="Exam_type">
                    <?php  
                    $search_question_ID = "SELECT * FROM final";
                    $get_question_ID = $conn->query($search_question_ID);
                    if ($get_question_ID === false) {
                        echo "Error: " . $search_question_ID . "<br>" . $conn->error;
                    } else {
                        while ($question = mysqli_fetch_array($get_question_ID)) {
                            ?>
                            <option value="<?php echo $question["Final_Exam_ID"]; ?>">
                                <?php echo $question["Final_Exam_ID"]; ?>
                            </option>
                            <?php
                        }
                    }
                    ?>
                </select>
                <br>
                <input type="submit" name="Insert" value="Insert">
            </form>
        </div>
    </center>


    
    
</body>
</html>