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
    <nav>
      <ul>
        <li><a href="#Home">Home</a></li>
        <li><a href="#Service">service</a></li>
        <li><a href="admin/admn_dashboard.html">Contact Us</a></li>

        <li><a href="signup.php">SignUp/Login</a></li>
      </ul>
    </nav>

    <section id="Home">
      <div class="Home_container">
        <div class="Home_contain">
          
          <div class="Home_card">
            <div class="Home_moto_flex">
            <div class="moto"><samp> .</samp> <span id="element"></span></div>
        </div>
          </div>
          <div class="Home_card">
            <div class="Home_image_flex">
            <img src="img/1.png" alt="" class="Home_image" /></div>
          </div>
        </div>
      </div>
    </section>
    <section id="Service">
      
      <div class="moto_service"><P>.Create Your CV</P></div>
      <div class="moto_service"><samp> .</samp> <span id="element">Create your First CV with us<button class="Home_get">Create CV</button></span></div>
      <div class="line"></div>
      <div class="moto_service"><P>Improve Your CV</P></div>
      <div class="moto_service"><samp> .</samp> <span id="element">Improve Your Skills with Our free Cources<button class="Home_get">Courses</button></span></div>
      



    </section>
   

    <footer>Copywrite:Cvit</footer>

    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <script>
      var typed = new Typed("#element", {
        strings: ['Welcome To Our Website.<pre> Create Your Cv with Cvit. <a href="signup.php"><button class="Home_get">Get Strated</button></a></pre> '],
        typeSpeed: 25,
        showCursor: false,
      
      });
    </script>
  </body>
</html>
