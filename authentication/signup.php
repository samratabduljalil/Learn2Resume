<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>SignUp</title>
</head>
<body>

    <nav>
        <ul>
          <li><a href="index.php#Home">Home</a></li>
          <li><a href="index.php#Service">service</a></li>
          <li><a href="index.php#About">Contact Us</a></li>
  
          <li><a href="signup.html">SignUp/Login</a></li>
        </ul>
      </nav>
    
<div class="sign_container">
    <div class="sign_contain">
        <div class="sign_card">
            <h1>Signup</h1>
<form action="sign_php.php" method="post">

<input type="text" name="name" id="name" class="sign_text" placeholder="Enter Your Name">

<input type="email" name="email" id="email" class="sign_text" placeholder="Enter Your Email">

<input type="password" name="password" id="password" class="sign_text" placeholder="Enter Your Password">
<select id="sign" name="sign" class="sign_text">
  
  <option value="cv_user" class="sign_text">User</option>
 
</select><br>
<button type="submit" class="btn_signup">SignUp</button>
<h1>already have account?<a href="login.php" class="log_link">Log in</a></h1>
</form>
</div>
</div>
</div>



</body>
</html>