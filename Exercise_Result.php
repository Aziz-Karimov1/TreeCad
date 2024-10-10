<script>
    window.history.forward();
</script>
<?php
include('conn.php');

$user_email = $_COOKIE['user'];

$total_questions = 0;
$correct_answers = 0;

foreach ($_POST as $key => $value) {
    // Extract Ex_Q_ID from input name
    $ex_q_id = str_replace('answer_', '', $key);
    
    // Check selected answer 
    $sqlCheckAnswer = "SELECT Correct_Answer FROM exer_answer WHERE Ex_A_ID = '$value'";
    $resultCheckAnswer = $conn->query($sqlCheckAnswer);
    if ($resultCheckAnswer && $rowCheckAnswer = $resultCheckAnswer->fetch_assoc()) {
        if ($rowCheckAnswer['Correct_Answer'] == 1) {
            $correct_answers++;
        }
    }

    $total_questions++;
}

$percentage = ($correct_answers / $total_questions) * 100;

if ($percentage >= 50){
    $get_progression_query = "SELECT Progression_ID FROM tree WHERE user_email = '$user_email'";
    $Get_progression_result = $conn->query($get_progression_query);
    if ($Get_progression_result && $rowGetProgression = $Get_progression_result->fetch_assoc()){
        $currentProgression = $rowGetProgression['Progression_ID'];
        
        //Started extract from the third character 
        $currentProgressionNumber = intval(substr($currentProgression, 2));
        
        // Increment the Progression_ID number
        $nextProgressionNumber = $currentProgressionNumber + 1;
                
        // %02d is to set if 1 = 01
        $nextProgressionID = 'P_' . sprintf("%02d", $nextProgressionNumber);
        
        $sqlUpdateProgression = "UPDATE tree SET Progression_ID = '$nextProgressionID' WHERE user_email = '$user_email'";
        $conn->query($sqlUpdateProgression);
    }
}

$Stage_Grow = ''; // Initialize Stage_Grow variable

if (isset($nextProgressionID)) {
    $treeTypeQuery = "SELECT type_ID FROM tree WHERE user_email = '$user_email'";
    $treeTypeResult = $conn->query($treeTypeQuery);
    if ($treeTypeResult && $rowTreeType = $treeTypeResult->fetch_assoc()) {
        $treeType = $rowTreeType['type_ID'];
        $stageNumber = substr($nextProgressionID, -2);
        $Stage_Grow = "Web_assignment_image/$treeType/grow/Stage_" . ($stageNumber - 2) . "_to_". ($stageNumber - 1).".gif";
    }
}else{
    $Stage_Grow = "Image/Fail_exercise.gif";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="CSS_folder/Exercise_result_styles.css">
    <link rel="stylesheet" href="CSS_folder/general.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
</head>
<body>

    <section>
      <button class="show-modal">See Result</button>
      <span class="overlay"></span>

      <div class="modal-box">
        <img class="gif_img" src="<?php echo $Stage_Grow ?>" alt= " Nothing Will Show if Get Lower Than 50% ">
        <h2>Score: <?php echo "$correct_answers/$total_questions"?></h2>
        <div class="progress">
            <div class="progress__fill"></div>
            <span class="progress__text"><?php echo $percentage?></span>
        </div>
        <h3>Click on Continue to proceed</h3>
        <div class="buttons">
          <a href="Index.php"><button class="close-btn">Continue</button></a>
        </div>
      </div>
    </section>

    <script>
    const section = document.querySelector("section");
    const overlay = document.querySelector(".overlay");
    const showBtn = document.querySelector(".show-modal");

    showBtn.addEventListener("click", () => section.classList.add("active"));

    function updateProgressBar(progressBar, value) {
        value = Math.round(value);
        progressBar.querySelector(".progress__fill").style.width = `${value}%`;
        progressBar.querySelector(".progress__text").textContent = `${value}%`;
    }
    
    const myProgressBar = document.querySelector(".progress");
    
    updateProgressBar(myProgressBar, <?php echo $percentage?>);
    </script>

</body>
</html>
