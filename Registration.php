<?php
include('conn.php');

if(isset($_POST["submit"])){
    $user_name = $_POST['fullname'];
    $user_email = $_POST['email'];
    $password = $_POST['password'];
    $roles = "0";
    
    // if user insert the name or email similar inside the database
    
    $databasename = "SELECT * FROM users WHERE username = '$user_name'"; //get name from database
    $databaseemail =  "SELECT * FROM users WHERE User_Email = '$user_email'"; //get email from database
    $valid_result_for_name = $conn->query($databasename);
    $valid_result_for_email = $conn->query($databaseemail);
    

    if($valid_result_for_name->num_rows > 0 || $valid_result_for_email->num_rows > 0){ // if user insert the name or email similar inside the database
        echo "Email or User Name have been use by someone";
    }else{
        //random tree type 
        $random_tree_query = "SELECT type_ID FROM tree_types ORDER BY RAND() LIMIT 1";
        $random_tree_result = $conn->query($random_tree_query);
        $random_tree_row = $random_tree_result->fetch_assoc();
        $random_tree_type_id = $random_tree_row['type_ID'];

        //default progression 
        $initial_progression_id = "P_01";

        // save user info
        $sql =("INSERT INTO users(user_email, Username, user_password, user_roles) VALUES(?, ?, ?, ?)");

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss",$user_email, $user_name, $password, $roles);

        if($stmt->execute()){
            $insert_tree_sql = "INSERT INTO tree (type_ID, user_email, Progression_ID) VALUES (?, ?, ?)";
            $insert_tree_stmt = $conn->prepare($insert_tree_sql);
            $insert_tree_stmt->bind_param("sss", $random_tree_type_id, $user_email, $initial_progression_id);
            
            if($insert_tree_stmt->execute()) {
                echo "success";
            } else {
                echo "failure";
            }
        }else{
            echo "failure";
        }

        $stmt->close();
    }
}   
$conn->close();
?>
