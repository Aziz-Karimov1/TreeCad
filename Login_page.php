<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS_folder/general.css">
    <link rel="stylesheet" href="CSS_folder/Login_Register.css">
    <script defer src = 'JavaScript_folder/Register_login_Validation.js'></script>
    <title>Login Page</title>
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
                    Sign In
            </div>

            <form id="login_form" onsubmit="return validate_login()" action="Login_process.php" method="POST">
                <div class="login_form">
                    
                    <div class="input-field"  ><!--inputbox for email-->
                        <input type = "email"   name = "user_email"    id="login_user_email" placeholder=" Email"/>
                    </div>
                    
                    <div class="input-field"><!--inputbox for password-->
                        <input type="password"  name = "user_password" id="login_pass"       placeholder=" Enter Password"/>
                        <img class = "eye_style"  src="Image/eye-close.png" alt="" id="eyeicon">
                    </div>

                </div>
                <div  class="forgot_password">
                    <a href="Reset_password_Page.php" style="color: #0b64f0; text-decoration: underline;"> Forgot Password</a>
                </div>
                <input class="login_btn" name = "_login" type="submit" value="Login" >
            </form>

            <div class="l_line-container">
                <div class="or_text">or</div>
            </div>
            <div class="register_container">
                <p>Don't have an account? <a style = "color:#0b64f0; text-decoration: underline" href="Register_page.php">SIGN-UP</a></p>
              </div>

        </div>
    </div>

<script>
    let eyeicon = document.getElementById("eyeicon");
    let password = document.getElementById("login_pass");

eyeicon.onclick = function(){
    if(password.type == "password"){
        password.type = "text";
        eyeicon.src = "Image/eye-open.png";
    }else{
        password.type = "password";
        eyeicon.src = "Image/eye-close.png";
    }
}
</script>

    
    
</body>
</html>