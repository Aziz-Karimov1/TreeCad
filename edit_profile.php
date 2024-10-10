<?php
if (!isset($_COOKIE['user'])){
    header("Location: Login_page.php");
    exit();
}
include('conn.php');

$user_email = $_COOKIE['user']; // Corrected variable name

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['New_username'])) {
    // The form has been submitted, process the update
    $newUsername = $_POST['New_username'];
    $update_new_name_query = $conn->prepare("UPDATE users SET Username=? WHERE user_email=?");
    $update_new_name_query->bind_param("ss", $newUsername, $user_email); // Corrected variable name

    if ($update_new_name_query->execute()) {
         echo "<script>alert('Username has been updated successfully'); window.location.href='Index.php </script>";
    } else {
        echo "<script>alert('Error updating username: " . $conn->error . "')</script>";
    }

    $update_new_name_query->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS_folder/edit_profile.css">
    <link rel="stylesheet" href="CSS_folder/general.css">
    <title>Edit Profile</title>
</head>
<body>
    <?php include('edit_profile_header.php')?>

    <div class="cnt">
        <div class="container_update_name">
            <form action="edit_profile.php" method="post"> <!-- Specify your PHP file here -->
                <div class="entryarea">
                    <input type="text" name="New_username" required> <!-- Add a name attribute -->
                    <div class="labelline">Reset your name</div>
                </div>
                <button type="submit" class="btn_save" style="--clr:white"><span>Save</span><i></i></button>
            </form>
        </div>
    </div>
</body>
</html>
