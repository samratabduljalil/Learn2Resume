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

        <li><a href="signup.html">SignUp/Login</a></li>
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
    <section id="About">
      <form action="" method="post">
        <div class="Contact_container">
          <div class="Contact_container">
            <div class="Contact_card">
              <input
                type="text"
                name=""
                id="Contact_name"
                class="Contact_text_box"
                placeholder="Enter your Name"
              />
              <input
                type="email"
                name=""
                id="Contact_email"
                class="Contact_text_box"
                placeholder="Enter your email"
              />
              <input
                type="text"
                name=""
                id="Contact_phone"
                class="Contact_text_box"
                placeholder="Enter your Phone Number"
              />
              <button type="submit" id="submit" class="Contact_btn_submit">
                Send Message
              </button>
            </div>
            <div class="Contact_card">
              <textarea
                name=""
                id="Contact_message"
                cols="30"
                rows="10"
                placeholder="Message write here"
              ></textarea>
            </div>
          </div>
        </div>
      </form>
    </section>

    <footer>Copywrite:Cvit</footer>

    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <script>
      var typed = new Typed("#element", {
        strings: ['Welcome To Our Website.<pre> Create Your Cv with Cvit.  <button class="Home_get">Get Strated</button></pre> '],
        typeSpeed: 25,
        showCursor: false,
      
      });
    </script>
  </body>
</html>