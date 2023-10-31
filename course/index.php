<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
    <title>course</title>

</head>
<body>
    <nav>
        <ul>
           <form  >
            <input type="search" name="" id="Live_search" placeholder="Search Course">
          </form>
          <li><a href="#Home">Home</a></li>
          <li><a href="index.html">course</a></li>
          
          <?php if(isset($_SESSION['name'] )) { ?>
          <li><a href="\user2\index.php"><?php echo $_SESSION['name'] ?></a></li>
          <?php }else{
                    ?>
           <li><a href="signup.php">SignUp/Login</a></li>
           <?php }?>
  
  
  
        </ul>
      </nav>

      <div id="search-results">
      <section id="car">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block  imgcar" src="\Cvit-CVgenerator\img\02.jpg" alt="First slide">
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


      <section id="card-">

      
<div class="course_container">
<div class="course_contain">
<div class="course_card">



</div>


</div>



</div>
</section>
      



  <h1 class="course_title">All Course</h1>
<div class="container">
    <div class="course" id="allCourse">



      </div></div>



    
   </div>
    
      
    
    <script>
      // Function to fetch and display JSON data
      function fetchData() {
          var xhr = new XMLHttpRequest();
          xhr.open("GET", "fetcheAllData_api.php", true);
  
          xhr.onreadystatechange = function () {
              if (xhr.readyState === 4 && xhr.status === 200) {
                  var jsonArray = JSON.parse(xhr.responseText);
                  displayData(jsonArray);
              }
          };
  
          xhr.send();
      }
  
      function displayData(data) {
          var dataDisplay = document.getElementById("allCourse");
          var html = ''; 
  
          for (let index = 0; index < data.length; index++) {
              html += "<a href='/Cvit-CVgenerator/payment/checkout.php?id="+data[index].ID+"'class='card'><img src='/Cvit-CVgenerator/img/business-2717063_640.jpg' class='img_course'><h1 class='cardtext'><span class='t1'>" + data[index].Name + "</span></h1><div class='in_card'><h3>ENROLL </h3></div></a>";
          }
  
          dataDisplay.innerHTML = html; 
      }
  
      
      fetchData();




//searching
document.getElementById("Live_search").addEventListener("input", function() {
        var query = this.value;
        if (query.length >= 3) {
            var formData = new FormData();
            formData.append("query", query);

            fetch("search_data.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                var resultsHtml = "<h1 class='course_title'>Search Result</h1><div class='container'><div class='course'>";
                data.forEach(result => {
                    resultsHtml += "<a href='in_course.php' class='card'><img src='/Cvit-CVgenerator/img/business-2717063_640.jpg' class='img_course'><h1 class='cardtext'><span class='t1'>" + result['ID'] + "</span></h1><div class='in_card'><p>Click Here to Start Learning</p></div></a>";
                });
               resultsHtml += "</div></div>";
                document.getElementById("search-results").innerHTML = resultsHtml;
            })
            .catch(error => console.error(error));
        } else {
            document.getElementById("search-results").innerHTML = "";
        }
    });



  </script>
  
    
    


</body>
</html>