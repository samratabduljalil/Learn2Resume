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
          <li><a href="\Cvit-CVgenerator\index.php">Home</a></li>
          <li><a href="index.php">course</a></li>
          
          <?php if(isset($_SESSION['name'] )) { ?>
          <li><a href="\Cvit-CVgenerator/user2/index.php"><?php echo $_SESSION['name'] ?></a></li>
          <?php }else{
                    ?>
           <li><a href="\Cvit-CVgenerator/authentication\signup.php">SignUp/Login</a></li>
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
                <img class="d-block  imgcar" src="\Cvit-CVgenerator/img/analysis-1841158_1920.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block  imgcar" src="\Cvit-CVgenerator/img/code-1076536_1920.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block  imgcar" src="\Cvit-CVgenerator/img/stock-market-6531146_1920.jpg" alt="Third slide">
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
              html += "<a href='/Cvit-CVgenerator/payment/checkout.php?id="+data[index].ID+"'class='card'><h1 class='cardtext'><span class='t1'>" + data[index].Name + "</span></h1><div class='in_card'><h3>Enroll </h3></div></a>";
          }
  
          dataDisplay.innerHTML = html; 
      }
  
      
      fetchData();




//searching
document.getElementById("Live_search").addEventListener("input", function() {
        var query = this.value;
        if (query.length >= 1) {
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
                    resultsHtml += "<a href='in_course.php' class='card'><h1 class='cardtext'><span class='t1'>" + result['Name'] + "</span></h1><div class='in_card'><p>Click Here to Start Learning</p></div></a>";
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