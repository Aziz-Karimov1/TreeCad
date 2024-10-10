<?php
include('conn.php');
$user_email = $_COOKIE['user'];

// Sselect 5 random questions and the quetsion IDs 
$sql = "SELECT exq.Ex_Q_ID, exq.Exercise_Question
        FROM (SELECT DISTINCT Ex_Q_ID, Exercise_Question
              FROM exer_subq 
              WHERE Exercise_Num IN (SELECT Exercise_Num 
                                     FROM exercise 
                                     WHERE Chapter_ID = (SELECT Chapter_ID 
                                                         FROM progression 
                                                         WHERE Progression_ID IN (SELECT Progression_ID 
                                                                                  FROM tree 
                                                                                  WHERE user_email = '$user_email'))) 
              ORDER BY RAND() 
              LIMIT 5) exq";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // Loop through each question
    while($row = $result->fetch_assoc()) {
        
        $Exercise_question = $row['Exercise_Question'];
        $Ex_Question_ID = $row['Ex_Q_ID'];
        
        // Output the question
        echo "<div class='question_container'>";
        echo "<p> {$Exercise_question} </p>";
        
        // get correct and incorrect answers 
        $sql_Answers = "SELECT Ex_A_ID, Ex_Answer, Correct_Answer
                       FROM exer_answer
                       WHERE Ex_Q_ID = '{$Ex_Question_ID}' 
                       ORDER BY RAND()";            //random the arrange of option
        $resultAnswers = $conn->query($sql_Answers); 
        
            echo "<div>";
        while ($rowAnswer = $resultAnswers->fetch_assoc()) {
            // option btn
            echo "<label class = 'label_style'>";
            echo "<input type='radio' name='answer_{$Ex_Question_ID}' value='{$rowAnswer['Ex_A_ID']}'>";
            echo "{$rowAnswer['Ex_Answer']}</label>";
        }
            echo "</div>";
        echo "</div>";
    }
} else {
    echo "No questions found <br>";
}

// Close the database connection
$conn->close();
?>
