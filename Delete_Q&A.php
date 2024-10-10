<?php
include('conn.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS_folder/general.css">
    <link rel="stylesheet" href="CSS_folder/Del_ques.css">
    <title>Delete Q&A</title>
</head>
<body>
    <?php
    include('Add_question_header.php')
    ?>
<div class='Main-wrapper'>
        <form method="post">
            Which Question A: <br>
            <select name="qida" id="qida">
                <option value="0" selected>Final A Question</option>
                    <?php
                    $search = "SELECT * FROM final_question_a";
                    $try = $conn->query($search);
                    if ($result === false) {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    } else {
                    while($question = mysqli_fetch_array($try)){;
                    ?>
                        <option value="<?php echo $question["QID_A"]; ?>">
                            <?php echo $question["QID_A"];

                            ?>
                            </option>
                            <?php
                    }}
                    ?>
            </select> <br>
            Which Question B: <br>
            <select name="qidb" id="qidb">
                <option value="0" selected>Final B Question</option>
                    <?php
                    $search = "SELECT * FROM final_question_b";
                    $try = $conn->query($search);
                    if ($result === false) {
                        echo "<div class='Error-msg'>Error: </div>" . $sql . "<br>" . $conn->error;
                    } else {
                    while($question = mysqli_fetch_array($try)){;
                    ?>
                        <option value="<?php echo $question["QID_B"]; ?>">
                            <?php echo $question["QID_B"];

                            ?>
                            </option>
                            <?php
                    }}
                    ?>
            </select> &nbsp;<br>
            <input type="submit" value="check" name="check"> &nbsp;      
            <input type="submit" value="delete" name="delete">
        </form>
        </div>
        <?php
    if (isset($_POST["check"])){
        $qida = $_POST['qida'];
        $qidb = $_POST['qidb'];

        if($qidb == 0){
            $sql = "SELECT * FROM final_question_a WHERE QID_A = $qida";
            $result = $conn->query($sql);
            if ($result === false) {
                echo "<div> Error: " . $sql . "<br>" . $conn->error ."</div>";
            } else {
                if ($result->num_rows > 0) {
                    // Fetch associative array
                    $row = $result->fetch_assoc();
                    // Output data of the question
                    echo "<div class ='output'> ID: " . $row["QID_A"]. " - Question: " . $row["Question_A"]. " - Exam Type: " . $row["Final_Exam_ID"]."</div>";
                } else {
                    echo "<div class ='No'>No records found</div>";
                }
            }
            $sql2 = "SELECT final_a_answer.F_A_Answer_ID, final_a_answer.QID_A, final_a_answer.Final_Answer_A, final_a_answer.Correct_Answer FROM final_a_answer INNER JOIN final_question_a ON final_a_answer.QID_A = final_question_a.QID_A WHERE final_question_a.QID_A = $qida ";
            $answerresult = $conn->query($sql2);
            if ($answerresult === false) {
                echo "<div class='Error-msg'>Error: " . $sql2 . "<br>" . $conn->error."</div>";
            } else {
                if ($answerresult->num_rows > 0) {
                    // Fetch associative array
                    while ($row = $answerresult -> fetch_assoc()){
                    // Output data of the answer with the same foreign key
                    echo "<div class= 'output'>ID: " . $row["F_A_Answer_ID"]. " - Question: " . $row["QID_A"]. " - Answer: " . $row["Final_Answer_A"]. "-Correct Answer:". $row["Correct_Answer"] ."<br>"."</div>";
                    }
                } else {
                    echo "<div class ='No'> No records found </div>";
                }
            }
        }

        if($qida == 0){
            $sql = "SELECT * FROM final_question_b WHERE QID_B = $qidb";
            $result = $conn->query($sql);
            if ($result === false) {
                echo "<div> Error: " . $sql . "<br>" . $conn->error ."</div>";
            } else {
                if ($result->num_rows > 0) {
                    // Fetch associative array
                    $row = $result->fetch_assoc();
                    // Output data of the question
                    echo "<div class ='output'> ID: " . $row["QID_B"]. " - Question: " . $row["Question_B"]. " - Exam Type: " . $row["Final_Exam_ID"]."</div>";
                } else {
                    echo "<div class ='No'>No records found</div>";
                }
            }
            $sql2 = "SELECT final_b_answer.F_B_Answer_ID, final_b_answer.QID_B, final_b_answer.Final_Answer_B, final_b_answer.Correct_Answer FROM final_b_answer INNER JOIN final_question_b ON final_b_answer.QID_B = final_question_b.QID_B WHERE final_question_b.QID_B = $qidb ";
            $answerresult = $conn->query($sql2);
            if ($answerresult === false) {
                echo "<div>Error: " . $sql2 . "<br>" . $conn->error. "</div>";
            } else {
                if ($answerresult->num_rows > 0) {
                    // Fetch associative array
                    while ($row = $answerresult -> fetch_assoc()){
                    // Output data of the answer with the same foreign key
                    echo "<div class= 'output'>ID: " . $row["F_B_Answer_ID"]. " - Question: " . $row["QID_B"]. " - Answer: " . $row["Final_Answer_B"]. "-Correct Answer:". $row["Correct_Answer"] ."<br>"."</div>";
                    }
                } else {
                    echo "<div class ='No'> No records found </div>";
                }
            }
        }

    }
    ?>
</body>
</html>

<?php
if(isset($_POST['delete'])){
    $qida = $_POST['qida'];
    $qidb = $_POST['qidb'];

    if($qidb == 0){
        $delete1 = " DELETE FROM final_a_answer WHERE QID_A = $qida"; 
        $delete2 =  "DELETE FROM final_question_a WHERE QID_A = $qida"; 
        if(mysqli_query($conn,$delete1)){
            if(mysqli_query($conn,$delete2)){
                echo "<script>alert('Successfully delete data!')</script>";
            }
            else {
                echo "<div>Error deleting from final_question_a: " . mysqli_error($conn) . "</div>";
            }
        } 
        else {
            echo "<div>Error deleting from final_a_answer: " . mysqli_error($conn) . "</div>";
        }
        }
    if($qida == 0){
        $delete1 = " DELETE FROM final_b_answer WHERE QID_B = $qidb"; 
        $delete2 =  "DELETE FROM final_question_b WHERE QID_B = $qidb"; 
        if(mysqli_query($conn,$delete1)){
            if(mysqli_query($conn,$delete2)){
                echo "<script>alert('Successfully delete data!')</script>";
            }
            else {
                echo "<div>Error deleting from final_question_a: " . mysqli_error($conn) . "</div>";
            }
        } 
        else {
            echo "<div>Error deleting from final_a_answer: " . mysqli_error($conn) . "</div>";
        }
        }
    else{
        echo "<script>alert('Choose a data to delete')</script>";
    }
}


?>