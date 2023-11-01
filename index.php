<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 

    <title>CVit</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
  <?php session_start()?>
    <nav>
      <ul>
        <li><a href="#Home">Home</a></li>
        
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
