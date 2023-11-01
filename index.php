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
        <li><a href="sen.php">Create Cv</a></li>
        <?php if(isset($_SESSION['name'] )) { ?>
        <li><a href="user2\index.php"><?php echo $_SESSION['name'] ?></a></li>
        <?php }else{
                  ?>
         <li><a href="authentication\signup.php">SignUp/Login</a></li>
         <?php }?>



      </ul>
    </nav>

    

    <section>

    <section id="car">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block  imgcar" src=".\img\02.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block  imgcar" src=".\img\01.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block  imgcar" src=".\img\001.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
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

   
  </body>
</html>
