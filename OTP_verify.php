<?php
session_start();
$user_email = $_SESSION['User_email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="CSS_folder/Reset_password.css">
      <link rel="stylesheet" href="CSS_folder/general.css">
      <script defer src="https://smtpjs.com/v3/smtp.js"></script>
      <title>OTP Verify</title>
</head>
<body>
      <div>
            <a href="Login_page.php" class="close"></a>
      </div>
      <div class="form">
            <h1> OTP Verify</h1>
                  <div>
                        <input type="text" id="otp_inp" placeholder="Enter the OTP sended to your email">
                        <button class="btn" onclick="sendOTP()" name="sendotpbtn" value="sendotpbtn" >Get OTP</button>
                        <button class="btn" id="otp_btn" onclick="CheckOTP()">Verify</button>
                  </div>     
      </div>
      

      <script>
            var otp_val = Math.floor(1000 + Math.random() * 9000);

            function sendOTP() {
                  const _Email = "<?php echo $user_email; ?>";
            
            
                  let emailbody = `<h2>Your OTP is ready for account verification.</h2> Your OTP code is ${otp_val}`;
            
                  Email.send({
                        SecureToken: "be4b9465-5c2e-48be-8d65-5ac1a65c53b7",
                        To: _Email,
                        From: "lcyew041229@gmail.com",
                        Subject: "OTP to reset your account password",
                        Body: emailbody,
                  }).then(
                        alert("OTP sent to " + _Email)
                  )
            }
            function CheckOTP(){ 
                  const otp_inp = document.getElementById('otp_inp'); 

                        if (otp_inp.value == otp_val){
                              window.location.href = "Reset_password.php";
                        } 
                        else {
                              alert("Invalid OTP");
                        }
            }
      </script>
</body>
</html>
