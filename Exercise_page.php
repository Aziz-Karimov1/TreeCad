<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Questions</title>
    <link rel="stylesheet" href="CSS_folder/Exercise_page.css">
    <link rel="stylesheet" href="CSS_folder/general.css">

        <script>
        function validateForm() {
            var questions = document.querySelectorAll('.question_container');
            var answeredCount = 0;

            questions.forEach(function(question) {
                var selectedAnswer = question.querySelector('input[type="radio"]:checked');
                if (selectedAnswer) {
                    answeredCount++;
                }
            });

            if (answeredCount < questions.length) {
                alert("Please answer all questions before submitting.");
                return false;
            }
            return true;
        }
    </script>

</head>
<body>
    <?php include('Exercise_Header.php')?>

    <div class="Question_content">
        <h1>Exercise Questions</h1>
        <form action="Exercise_Result.php" method="post" onsubmit="return validateForm()">
            <?php include 'Fetch_Exercise_Question.php';?>
            <input class="submit_btn" type="submit" value="Submit Form">
        </form>
    </div>
    <div class="Feedback_div">
        <form method="post" id="feedback" action = "Exercise_page.php">
            <p>Report a problem</p>
            <input type="text" name="report" autocomplete="off" id="input_feedback">
            <input class="submit_btn" type="submit" value="Submit" name="Feedback">
            <p id="aftersubmit"></p>
        </form>
    </div>
<?php
include('conn.php');

if(isset($_COOKIE['user'])) {
    $email = $_COOKIE['user'];
} else {
    // Handle case where User_email cookie is not set
    echo "<script type='text/javascript'> alert('User email cookie not found'); </script>";
    exit; // Exit the script
}

if(isset($_POST["Feedback"])){
    $Report = isset($_POST['report']) ? $_POST['report'] : '';
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $date = date("Y-m-d");
    $type = "Exercise Issue";
    $sql = "INSERT INTO feedback(Feedback, R_date , user_email, R_type) VALUES (?, ?, ?, ?)";
    $stmt = $conn -> prepare($sql);
    $stmt -> bind_param("ssss", $Report, $date, $email, $type);
    if ($stmt->execute()) {
        echo"<b>Thank you for your feedback!</b>";
        echo "<script type='text/javascript'> alert('Report succed'); document.location = 'Exercise_page.php'</script>";
    } else {
        echo "<script type='text/javascript'> alert('Report failed'); document.location = 'Exercise_page.php'</script>";
    }
    
}

?>
   
</body>
</html>

