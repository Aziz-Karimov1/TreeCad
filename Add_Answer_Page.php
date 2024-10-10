<?php
$user_email = isset($_COOKIE['user']) ? $_COOKIE['user'] : NULL;

if ($user_email == NULL ){
    header("Location: Login_page.php");
    exit();
}

include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS_folder/general.css">
    <link rel="stylesheet" href="CSS_folder/Add_question_page.css">
    <link rel="stylesheet" href="CSS_folder/admin.css">
    <title>Add Answer</title>
    <script>
        function showForm(formId) {
            var form = document.getElementById(formId);
            var otherFormId = formId === 'examAForm' ? 'examBForm' : 'examAForm';
            var otherForm = document.getElementById(otherFormId);
            
            if (form.style.display === 'none') {
                form.style.display = 'block';
                otherForm.style.display = 'none';
            } else {
                form.style.display = 'none';
            }
        }
    </script>
</head>
<body>
    <?php include('Add_question_header.php')?>

    <div class="Maincontainer">
        <div>
            <button onclick="showForm('examAForm')">Add Exam A Question Option</button>
        </div>
        <div>
            <button onclick="showForm('examBForm')">Add Exam B Question Option</button>
        </div>
        <div>
            Select the Exam ID to insert the option:
            <form action="Add_answer.php" method="POST" id="examAForm" style="display:none;">
                <select name="Question_ID_A" id="Question_ID_A">
                    <option value="">Select Question A</option> <!-- Empty option -->
                    <?php  
                    $search_ID_A = "SELECT * FROM final_question_a;";
                    $get_questiona_ID_A = $conn->query($search_ID_A);
                    if ($get_questiona_ID_A === false) {
                        echo "Error: " . $conn->error;
                    } else {
                        while ($question_ID_A = $get_questiona_ID_A->fetch_assoc()) {
                            ?>
                            <option value="<?php echo $question_ID_A["QID_A"]; ?>">
                                <?php echo $question_ID_A["QID_A"]; ?>
                            </option>
                            <?php
                        }
                    }
                    ?>
                </select>
                <br>
                <p>Answer "A": </p>
                <input type="text" name="A_answer1" required size="40">
                <p>Answer "B": </p>
                <input type="text" name="A_answer2" required size="40">
                <p>Answer "C": </p>
                <input type="text" name="A_answer3" required size="40">
                <p>Answer "D": </p>
                <input type="text" name="A_answer4" required size="40">
                <br>
                (Choose 1 for Correct answer and 0 for wrong): 
                <br>
                Answer "A"<br>
                <input type="number" name="EA_correctA" id="Correct" min="0" max="1"><br>
                Answer "B"<br>
                <input type="number" name="EA_correctB" id="Correct" min="0" max="1"><br>
                Answer "C"<br>
                <input type="number" name="EA_correctC" id="Correct" min="0" max="1"><br>
                Answer "D"<br>
                <input type="number" name="EA_correctD" id="Correct" min="0" max="1"><br>            
                <br>
                <input type="submit" value="Submit" name="Exam_A_Submit">
            </form>
        </div>

        <div>
            Select the Exam ID to insert the option:
            <form action="Add_answer.php" method="POST" id="examBForm" style="display:none;">
            <select name="Question_ID_B" id="Question_ID_B">
                <option value="">Select Question B</option> <!-- Empty option -->
                <?php  
                $search_ID_B = "SELECT * FROM final_question_b;";
                $get_questiona_ID_B = $conn->query($search_ID_B);
                if ($get_questiona_ID_B === false) {
                    echo "Error: " . $conn->error;
                } else {
                    while ($question_ID_B  = $get_questiona_ID_B->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $question_ID_B["QID_B"]; ?>">
                            <?php echo $question_ID_B["QID_B"]; ?>
                        </option>
                        <?php
                    }
                }
                ?>
            </select><br>
                <p>Answer "A": </p>
                <input type="text" name="B_answer1" required size="40">
                <p>Answer "B": </p>
                <input type="text" name="B_answer2" required size="40">
                <p>Answer "C": </p>
                <input type="text" name="B_answer3" required size="40">
                <p>Answer "D": </p>
                <input type="text" name="B_answer4" required size="40">
                <br>
                (Choose 1 for Correct answer and 0 for wrong): 
                <br>
                Answer "A"<br>
                <input type="number" name="EB_correctA" id="Correct" min="0" max="1"><br>
                Answer "B"<br>
                <input type="number" name="EB_correctB" id="Correct" min="0" max="1"><br>
                Answer "C"<br>
                <input type="number" name="EB_correctC" id="Correct" min="0" max="1"><br>
                Answer "D"<br>
                <input type="number" name="EB_correctD" id="Correct" min="0" max="1"><br>            
                <br>
                <input type="submit" value="Submit" name="Exam_B_Submit">
            </form>
        </div>
    </div>

    <script>
        var buttons = document.querySelectorAll('button');
        buttons.forEach(function(button) {
            button.addEventListener('click', function() {
                var forms = document.querySelectorAll('.exam-form');
                forms.forEach(function(form) {
                    form.style.display = 'none';
                });
            });
        });
    </script>

</body>
</html>

