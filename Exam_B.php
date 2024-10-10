<script>
    window.history.forward();
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam</title>
    <link rel="stylesheet" href="CSS_folder/Exercise_page.css">
    <link rel="stylesheet" href="CSS_folder/general.css">
    <script src="JavaScript_folder/Exam_B.js"></script>
</head>
<body>
    <div class="Question_content">
        <h1>Exam B</h1>
        <p>Time left: <span id="timer">0m 10s</span></p>
        <form id="Exam_Form" action="Exam_B_result.php" method="post">
            <?php include('Exam_B_Fetch_Q.php'); ?>
            <input id = "submit_exam_Btn" type="submit" value="Submit" class="submit_btn" >
        </form>
    </div>
</body>
</html>
