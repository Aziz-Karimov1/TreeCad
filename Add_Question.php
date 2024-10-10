<?php
include("conn.php");

if(isset($_POST["Insert"])){
    $Question = isset($_POST['question']) ? $_POST['question'] : '';
    $Exam_type = isset($_POST['Exam_type']) ? $_POST['Exam_type'] : '';

    if($Exam_type == "MATHEND01"){
        $sql = "INSERT INTO final_question_a(Question_A, Final_Exam_ID) VALUES(?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $Question, $Exam_type);
    }
    elseif($Exam_type == "MATHEND02"){
        $sql = "INSERT INTO final_question_b(Question_B, Final_Exam_ID) VALUES(?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $Question, $Exam_type);
    }

    if ($stmt->execute()) {
        echo "<script type='text/javascript'> alert('Record inserted successfully'); document.location = 'Add_Answer_Page.php'</script>";
        echo "<script type='text/javascript'> document.getElementById('addQuestionForm').reset(); </script>"; 
    } else {
        echo "<script type='text/javascript'> alert('Record insertion unsuccessful'); document.location = 'admin.php'</script>";
    }
}

?>
