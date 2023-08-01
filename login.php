<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>LogIn</title>
</head>
<body>
    

    <nav>
        <ul>
        <li><a href="index.php#Home">Home</a></li>
          <li><a href="index.html#Service">service</a></li>
          <li><a href="index.html#About">Contact Us</a></li>
  
          <li><a href="signup.html">SignUp/Login</a></li>
        </ul>
      </nav>
    
<div class="sign_container">
    <div class="sign_contain">
        <div class="sign_card">
            <h1>LogIn</h1>
<form action="login_php.php" method="post">


<input type="email" name="email" id="email" class="sign_text" placeholder="Enter Your Email">

<input type="password" name="password" id="password" class="sign_text" placeholder="Enter Your Password"><br>
<button type="submit" class="btn_signup">LogIn</button>
<h1>Don`t have account?<a href="signup.php" class="log_link"> Signup</a> </h1>
</form>
</div>
</div>
</div>



</body>
</html>