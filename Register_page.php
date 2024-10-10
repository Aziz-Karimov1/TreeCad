<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS_folder/general.css">
    <link rel="stylesheet" href="CSS_folder/Login_Register.css">
    <script defer src = 'JavaScript_folder/Register_login_Validation.js'></script>
    <title>Document</title>
</head>
<body>
    <div class="background">
        <div class="header_bar">
            <div class="left_section">
                <img class="logo"  src="Image/logo1.jpg" alt=""> <!--Logo image-->
                <h1 class="logo_word"> <!--logo text-->
                    TreeCad
                </h1>
            </div>
        </div>
    
        <div class="Login_wrapper" align = "center";>
            <div>
                <a href="Welcome_page.html" class="close"></a>
            </div>
            <div class="signin_header">
                    Sign Up
            </div>
            <form id="Register_form" onsubmit = "return validate_register()" action="Registration.php" method="POST"> <!--php code-->
                <div class="Register_form">
                    <!--Name input box-->
                    <input type="text" name="fullname" id="reg_name" placeholder="Full Name" class="input-field">
                    <!--inputbox for email-->
                    <input type="email" name="email" id="reg_email" placeholder=" Email" class="input-field"/>
                    <!--inputbox for password-->
                    <input type="password" name="password" id="regpass"  placeholder=" Enter Password" class="input-field"/>
                    <!--repeat password input-->
                    <input type="password" name="repeat_password"  id="reg_Rp_pass"  placeholder=" Repeat Password" class="input-field"/>
                </div>
            
                <input class="login_btn" type="submit" value="Register" name = 'submit'>
            </form>


            <div class="r_line-container">
                <div class="or_text">or</div>
            </div>
            <div class="register_container">
                <p>Already have an account? <a style = "color:#0b64f0; text-decoration: underline" href="Login_page.php">SIGN-IN</a></p>
              </div>
        </div>
    </div>
    
</body>
</html>