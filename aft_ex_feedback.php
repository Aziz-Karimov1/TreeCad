<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS_folder/Exercise_result_styles.css">
    <link rel="stylesheet" href="CSS_folder/general.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
</head>
<body>
    <section class= "active">
      <div class="modal-box">
        <h2>Provide A Feedback</h2>
        <form action="aft_ex_feedback.php" method = "post">
            <textarea id="text" name="text" rows="2" cols="50"></textarea>
            <div class="buttons">
                <a href="Index.php" class="skip_txt" style="
                                                            text-decoration: none;
                                                            padding-right: 20px;
                                                            color: #6c6c6c;
                                                        ">Skip</a>
            <input style="font-size: 18px;font-weight: 400;color: #fff;padding: 14px 22px;border: none;background: #4070f4;border-radius: 6px;cursor: pointer;" type="submit" value="Submit" name="Feedback">
            </div>
        </form>
      </div>
    </section>
    
</body>
<?php
include('conn.php');

if(isset($_COOKIE['user'])) {
    $email = $_COOKIE['user'];
    if(isset($_POST["Feedback"])){
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $date = date("Y-m-d");
        $type = "Exam Feedback";
        $text = $_POST['text'];
        $sql = "INSERT INTO feedback(Feedback, R_date , user_email, R_type) VALUES (?, ?, ?, ?)";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("ssss", $text, $date, $email, $type);
        if ($stmt->execute()) {
            echo "<script type='text/javascript'> alert('Thank you for providing a feedback'); document.location = 'Index.php'</script>";
        } else {
            echo "<script type='text/javascript'> alert('Report failed'); document.location = 'aft_ex_feedback.php'</script>";
        }
        
    }
} 



?>
</html>