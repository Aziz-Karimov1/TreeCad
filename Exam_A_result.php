<?php
include('conn.php');
$user_email = $_COOKIE['user'];

$total_questions = 30;
$correct_answers = 0;

foreach ($_POST as $key => $value) {
    // Extract Ex_Q_ID from input name
    $ex_q_id = str_replace('answer_', '', $key);
    
    // Check selected answer 
    $sqlCheckAnswer = "SELECT Correct_Answer FROM final_b_answer WHERE F_B_Answer_ID = '$value'";
    $resultCheckAnswer = $conn->query($sqlCheckAnswer);
    if ($resultCheckAnswer && $rowCheckAnswer = $resultCheckAnswer->fetch_assoc()) {
        if ($rowCheckAnswer['Correct_Answer'] == 1) {
            $correct_answers++;
        }
    }
}

$percentage = ($correct_answers / $total_questions) * 100;

$Stage_Grow = ''; 
$nextProgressionID = null;

$sqlFetchProgression = "SELECT Progression_ID, type_ID FROM tree WHERE user_email = '$user_email'";
$resultFetchProgression = $conn->query($sqlFetchProgression);

if ($resultFetchProgression->num_rows > 0) {
    $row = $resultFetchProgression->fetch_assoc();
    $currentProgression = $row['Progression_ID'];
    $treeType = $row['type_ID'];
} else {
    echo "Error: Progression data not found for user.";
}


if ($currentProgression == 'P_11' && $percentage < 50 && $treeType == 'Tree_A') {
    $Stage_Grow = "Web_assignment_image/Tree_A/dead_tree/dead_stage_10.gif";
    $nextProgressionID = 'P_01'; 
} elseif ($currentProgression == 'P_11' && $percentage < 50 && $treeType == 'Tree_B') {
    $Stage_Grow = "Web_assignment_image/Tree_B/dead_tree/dead_stage_10.gif";
    $nextProgressionID = 'P_01'; 
} elseif ($currentProgression == 'P_11' && $percentage >= 50 && $treeType == 'Tree_A') {
    $Stage_Grow = "Web_assignment_image/Tree_A/grow/Stage_10_to_11.gif";
    $nextProgressionID = 'P_12'; 
} elseif ($currentProgression == 'P_11' && $percentage >= 50 && $treeType == 'Tree_B') {
    $Stage_Grow = "Web_assignment_image/Tree_B/grow/Stage_10_to_11.gif";
    $nextProgressionID = 'P_12'; 
}
if ($nextProgressionID !== null) {
    $sqlUpdateProgression = "UPDATE tree SET Progression_ID = '$nextProgressionID' WHERE user_email = '$user_email'";
    $conn->query($sqlUpdateProgression);
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
        <img class="gif_img" src = "<?php echo $Stage_Grow ?>" alt="">
        <h2>Score: <?php echo "$correct_answers/$total_questions"; ?></h2>
        <div class="progress">
            <div class="progress__fill"></div>
            <span class="progress__text"><?php echo $percentage?></span>
        </div>
        <h3>Click on Continue to proceed</h3>
        <div class="buttons">
            <a href="aft_ex_feedback.php"><button class="close-btn">continue </button> </a>
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