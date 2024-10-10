<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="CSS_folder/Reset_password.css">
      <link rel="stylesheet" href="CSS_folder/general.css">
      <script defer src="https://smtpjs.com/v3/smtp.js"></script>
      <title>Reset Password</title>
</head>
<body>
      <div>
            <a href="Login_page.php" class="close"></a>
      </div>
      <form  action="RP_email_verify.php" class="form" method="POST">

            <h1> Reset Password</h1>
            <input type="email" name="useremail" id="useremail" required placeholder="Enter Your Email">
            <input class="btn" type="submit" name="sendotp" id="sendotp">
      </form>
</body>
</html>