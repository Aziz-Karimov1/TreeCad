<?php
include('conn.php');

// Get Chapter_ID 
$user_email = $_COOKIE['user'];
$sqlChapterID = "SELECT Chapter_ID 
                 FROM progression 
                 WHERE Progression_ID IN (SELECT Progression_ID 
                                          FROM tree 
                                          WHERE user_email = '$user_email')";
$resultChapterID = $conn->query($sqlChapterID);

if ($resultChapterID->num_rows > 0) {
    $rowChapterID = $resultChapterID->fetch_assoc();
    $chapterID = $rowChapterID['Chapter_ID'];

    // Get Course_ID and Final_Exam_Type
    $sqlCourseAndExamType = "SELECT Course_ID, Final_Exam_Type
                             FROM final 
                             WHERE Chapter = '$chapterID'";
    $resultCourseAndExamType = $conn->query($sqlCourseAndExamType);

    if ($resultCourseAndExamType->num_rows > 0) {
        $rowCourseAndExamType = $resultCourseAndExamType->fetch_assoc();
        $courseID = $rowCourseAndExamType['Course_ID'];
        $examType = $rowCourseAndExamType['Final_Exam_Type'];

        // Get 30 random questions
        $sqlRandomQuestions = "SELECT QID_A, Question_A 
                               FROM final_question_a 
                               WHERE Final_Exam_ID IN (SELECT Final_Exam_ID 
                                                       FROM final 
                                                       WHERE Course_ID = '$courseID' 
                                                       AND Final_Exam_Type = '$examType') 
                               ORDER BY RAND() 
                               LIMIT 30";
        $resultRandomQuestions = $conn->query($sqlRandomQuestions);

        if ($resultRandomQuestions->num_rows > 0) {
            // show all questionquestion
            while ($rowQuestion = $resultRandomQuestions->fetch_assoc()) {
                $questionID = $rowQuestion['QID_A'];
                $question = $rowQuestion['Question_A'];
                //question
                echo "<div class='question_container'>";
                echo "<p> {$question} </p>";

                // Get answers option
                $sqlAnswers = "SELECT F_A_Answer_ID, Final_Answer_A, Correct_Answer 
                               FROM final_a_answer 
                               WHERE QID_A = '$questionID'
                               ORDER BY RAND()";
                $resultAnswers = $conn->query($sqlAnswers);

                if ($resultAnswers->num_rows > 0) {
                    while ($rowAnswer = $resultAnswers->fetch_assoc()) {
                        $answerID = $rowAnswer['F_A_Answer_ID'];
                        $answer = $rowAnswer['Final_Answer_A'];
                        $isCorrect = $rowAnswer['Correct_Answer'];

                        // show options
                        echo "<label class = 'label_style'>";
                        echo "<input type='radio' name='answer_{$questionID}' value='{$answerID}'>";
                        echo "{$answer}</label>";
                    }
                } else {
                    echo "No answers found for this question";
                }
                echo "</div>";
            }
        } else {
            echo "No questions found for this exam";
        }
    } else {
        echo "No exam found for this chapter";
    }
} else {
    echo "No chapter found for this user";
}

$conn->close();
?>
