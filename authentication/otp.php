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
    <p class="resend2">You can resend after </p>
    <button type="submit" class="btn_signup resend" id="submitBtn" disabled>Resend</button>

   
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
   submitBtn.style.backgroundColor= 'greenyellow';
    
  } else {
    submitBtn.setAttribute('disabled', 'disabled');
    submitBtn.style.backgroundColor= 'greenyellow';
  }
});

    </script>
  
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6541e338a84dd54dc48758ba/1he4lv6c6';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>