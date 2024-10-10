<?php

include("conn.php");

if(isset($_POST["Exam_A_Submit"])){
    $EA_AnswerA = $_POST['A_answer1'];
    $EA_AnswerB = $_POST['A_answer2'];
    $EA_AnswerC = $_POST['A_answer3'];
    $EA_AnswerD = $_POST['A_answer4'];
    $EA_correctA = $_POST['EA_correctA'];
    $EA_correctB = $_POST['EA_correctB'];
    $EA_correctC = $_POST['EA_correctC'];
    $EA_correctD = $_POST['EA_correctD'];
    $question_ID = $_POST['Question_ID_A'];

    $sql = "INSERT INTO final_a_answer (QID_A, Final_Answer_A, Correct_Answer)
    VALUES ('$question_ID', '$EA_AnswerA', '$EA_correctA'),
        ('$question_ID', '$EA_AnswerB', '$EA_correctB'),
        ('$question_ID', '$EA_AnswerC', '$EA_correctC'),
        ('$question_ID', '$EA_AnswerD', '$EA_correctD')";


    echo "SQL Query: $sql <br>"; // Debugging: Output SQL query to check correctness

    if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'> alert('Records inserted successfully'); document.location = 'Add_Answer_Page.php'</script>";
    } else {
        echo "<script type='text/javascript'> alert('Records insertion unsuccessful: ".mysqli_error($conn)."'); document.location = 'Add_Answer_Page.php'</script>";
    }
} elseif($_POST["Exam_B_Submit"]){
    $EB_AnswerA = $_POST['B_answer1'];
    $EB_AnswerB = $_POST['B_answer2'];
    $EB_AnswerC = $_POST['B_answer3'];
    $EB_AnswerD = $_POST['B_answer4'];
    $EB_correctA = $_POST['EB_correctA'];
    $EB_correctB = $_POST['EB_correctB'];
    $EB_correctC = $_POST['EB_correctC'];
    $EB_correctD = $_POST['EB_correctD'];
    $question_ID = $_POST['Question_ID_B'];

    $sql = "INSERT INTO final_b_answer (QID_B, Final_Answer_B, Correct_Answer)
    VALUES ('$question_ID', '$EB_AnswerA', '$EB_correctA'),
        ('$question_ID', '$EB_AnswerB', '$EB_correctB'),
        ('$question_ID', '$EB_AnswerC', '$EB_correctC'),
        ('$question_ID', '$EB_AnswerD', '$EB_correctD')";


    echo "SQL Query: $sql <br>"; // Debugging: Output SQL query to check correctness

    if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'> alert('Records inserted successfully'); document.location = 'Add_Answer_Page.php'</script>";
    } else {
        echo "<script type='text/javascript'> alert('Records insertion unsuccessful: ".mysqli_error($conn)."'); document.location = 'Add_Answer_Page.php'</script>";
    }

}
?>
