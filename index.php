<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">


    <title>CVit</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
  <?php session_start()?>
    <nav>
      <ul>
        <li><a href="#Home">Home</a></li>
        <li><a href="\course\index.html">Service</a></li>
        <li><a href="\Cvit-CVgenerator\course\index.php">Course</a></li>
        <li><a href="authentication\signup.php">Create Cv</a></li>
        <?php if(isset($_SESSION['name'] )) { 
          if(isset($_SESSION['user'] )) {
          ?>

        <li><a href="user2\index.php"><?php echo $_SESSION['name'] ?></a></li>
        <?php }else{
          ?>

          <li><a href="admin\index.php"><?php echo $_SESSION['name'] ?></a></li>
          <?php }
        
      }else{
                  ?>
         <li><a href="authentication\signup.php">SignUp/Login</a></li>
         <?php }?>



      </ul>
    </nav>

    

    <section>

   
    <section id="Service">
      
      <div class="moto_service"><P>.Create Your CV</P></div>
      <div class="moto_service"><samp> .</samp> <span id="element">Create your First CV with us <a href="authentication\signup.php"><button class="Home_get">Create CV</button></a></span></div>
      <div class="line"></div>
      <div class="moto_service"><P>Improve Your CV</P></div>
      <div class="moto_service"><samp> .</samp> <span id="element">Improve Your Skills with Our  Courses<a href="\Cvit-CVgenerator\course\index.php"><button class="Home_get">Courses</button></a></span></div>
      



    </section>
   

    <footer>Copywrite:Cvit</footer>

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
