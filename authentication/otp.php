<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="styles.css">
    <title>OTP Verification</title>
</head>
<body>
  
    <div class="sign_container">
        <div class="sign_contain">
            <div class="sign_card">
                <h1>OTP Verification</h1>
    <form action="otp_verify.php" method="post">
    
    
   
    
    <input type="number" name="OTP2" id="OTP2" class="otp sign_text" maxlength="6" placeholder="Enter 6-digit OTP">
    
   
   <br>
    <button type="submit" class="btn_signup verify" id="submitBtn" disabled>verify</button>
    <button  class="btn_signup resend">Re Send</button>
    <h2 class="text_resend">Resend your OTP after one minute</h2>
   
    </form>



    
    </div>
    </div>
    </div>
    <script>
  const otpInput = document.getElementById('OTP2');
const submitBtn = document.getElementById('submitBtn');

otpInput.addEventListener('input', function () {
  const inputValue = otpInput.value;

  // Check if the input is exactly 6 digits
  if (/^\d{6}$/.test(inputValue)) {
    submitBtn.removeAttribute('disabled');
   
    submitBtn.classList.add('btn_signup verify')
  } else {
    submitBtn.setAttribute('disabled', 'disabled');
  }
});

    </script>
  
</body>
</html>