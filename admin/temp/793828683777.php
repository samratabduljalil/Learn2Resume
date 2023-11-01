<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV 3</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="<?php echo $_GET['css'] ?>">
    <?php session_start();
if(isset($_SESSION['user'])){




?>
<style>

.nu{
font-size:#
}
.qr{

display: flex;

justify-content: center;
align-items: center;
}
.qr_img{
margin-top: 79px;
  
height: 70px;
}

.con{
padding: 5px;

margin-left: 450px;
margin-bottom: 20px;
background-color: rgb(188, 241, 188);
border-radius: 5px;
transition: .45s;
}
.con:hover{
   padding: 6px;
  
  background-color: rgb(80, 254, 80);
  
     }
     .con1{
      padding: 5px;
     
     margin-left: 350px;
     margin-bottom: 20px;
     background-color: rgb(188, 241, 188);
     border-radius: 5px;
     transition: .45s;
        }
        .con1:hover{
         padding: 6px;
        
        background-color: red;
        
           }



</style>
    <!-- not sure what these suckers do... -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

</head>


<?php

session_start();

include('connection.php');

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Fetch product data from the database
$sql = "SELECT * FROM cv_user where UserID = '{$_GET['id']}'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
$row = $result->fetch_assoc(); 
       
$encryption_key_email =12345678912000006958657423654789; 
$iv_email = 1596324856700000; 
$decrypted = openssl_decrypt($row['email'], 'aes-256-cbc', $encryption_key_email, 0, $iv_email);

?>



<body>
    <div id="template_ar2" >
        <div class="parent">
            <div class="left_panel">
                <div class="profile_pic">
                    <img id="avatar" src="\Cvit-CVgenerator/user2/<?php echo $row['img'] ?>">
                </div>

                <div class="info">
                    <div class="infoX contact">
                        <strong id="section_title">Contact</strong>
                        
                        
                        <div class="hr_line_left"></div>
                        
                        
                        <div class="the_sec">
                            <img id="icon" src="\Cvit-CVgenerator/cv_templates/icons/phone.png" alt="">
                            <div class="sub_sec">
                                <strong id="phone">Phone</strong>
                                <strong id="phn_num"><?php echo $row['phone'] ?></strong>
                            </div>
                        </div>

                        
                        <div class="the_sec">
                            <img id="icon" src="\Cvit-CVgenerator/cv_templates/icons/mail.png" alt="">
                            <div class="sub_sec">
                                <strong id="mail">Email</strong>
                                <strong id="mail_acc"><?php echo $decrypted ?></strong>
                            </div>
                        </div>

                        
                        <div class="the_sec">
                            <img id="icon" src="\Cvit-CVgenerator/cv_templates/icons/home.png" alt="">
                            <div class="sub_sec">
                                <strong id="addr">Address</strong>
                                <strong id="address"><?php echo $row['address'] ?></strong>
                            </div>
                        </div>
                    </div>


                    <!-- ---------------------------------------------------------------------- -->


                    <div class="infoX education">
                        <strong id="section_title">Education</strong>
                        
                        
                        <div class="hr_line_left"></div>
                        
                        
                        <div class="the_sec">
                            <img id="phone" src="\Cvit-CVgenerator/cv_templates/icons/school.png" alt="">
                            <div class="sub_sec">
                                <strong id="qualification"><?php echo $row['edu_1'] ?></strong>
                                <strong id="uni_name"><?php echo $row['degree_1'] ?></strong>
                                <strong class="nu"><?php echo $row['cgpa_1'] ?></strong>
                            </div>
                        </div>

                        
                        <div class="the_sec">
                            <img id="phone" src="\Cvit-CVgenerator/cv_templates/icons/school.png" alt="">
                            <div class="sub_sec">
                            <strong id="qualification"><?php echo $row['edu_2'] ?></strong>
                                <strong id="uni_name"><?php echo $row['degree_2'] ?></strong>
                                <strong class="nu"><?php echo $row['cgpa_1'] ?></strong>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!---------------------- -----------end of left pannel--------------------------------- -->




            <div class="right_panel">
                <div class="vertical_line"></div>

                <div class="bio">
                    <div class="name"><?php echo $row['name'] ?></div>
                    <p>
                    <?php echo $row['about'] ?>
                    </p>
                </div>

                <div class="right_info">
                    <!-- ----------- experience section ----------------->
                <div class="infoX contact">
                    <strong id="section_title">WORK EXPERIENCES</strong>


                    <div class="hr_line_right"></div>

                    <!-- here goes the destruction------------- -->
                    <div class="contentExp">
                        <div class="experience">
                            <div class="dates">
                                <strong id="exp_date"><?php echo $row['c_year_1'] ?></strong>
                            </div>
                            <div class="exps">
                                <div class="expX">
                                    <strong id="company_name"><?php echo $row['c_name_1'] ?></strong>
                                    <strong id="position"><?php echo $row['c_position_1'] ?></strong>
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="contentExp">
                        <div class="experience">
                        <div class="dates">
                        <strong id="exp_date"><?php echo $row['c_year_2'] ?></strong>
                            </div>
                            <div class="exps">
                                <div class="expX">
                                    <strong id="company_name"><?php echo $row['c_name_2'] ?></strong>
                                    <strong id="position"><?php echo $row['c_position_2'] ?></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ----------- END of experience section ----------------->

                    
                    <div class="infoX contact">
                        <strong id="section_title">Skills</strong>
                        
                        
                        <div class="hr_line_right"></div>
                        
                        <!-- here goes the destruction------------- -->
                        <div class="skill_container">
                            <div class="skill_1">
                                <strong id="skl"># <?php echo $row['skills_1'] ?></strong>
                            </div>

                            <div class="skill_1">
                                <strong id="skl"># <?php echo $row['skills_2'] ?></strong>
                            </div>

                            <div class="skill_1">
                                <strong id="skl"># <?php echo $row['skills_3'] ?></strong>
                            </div>

                            <div class="skill_1">
                                <strong id="skl"># <?php echo $row['skills_4'] ?></strong>
                            </div>

                            <div class="skill_1">
                                <strong id="skl"># <?php echo $row['skills_5'] ?></strong>
                            </div>

                            <div class="skill_1">
                                <strong id="skl"># <?php echo $row['skills_6'] ?></strong>
                            </div>
                        </div>
                        
                    </div>
                    <div class="qr">


                       
                    <?php 
                        
                        $query = "SELECT  `qr`FROM `qr` WHERE `template_id`='{$_GET['temp2']}' and `user_id`='{$_GET['id']}'";
                        $result = mysqli_query($connection, $query);
                        if ($result && mysqli_num_rows($result) > 0) {
     
                            $user = mysqli_fetch_assoc($result);
                        
                        ?>
                        <img src="\Cvit-CVgenerator\cv_templates\qr_code/<?php echo $user['qr']?>" alt="" class="qr_img">

                        <?php }?>
                    </div>
                </div>
                
            </div> 
            <!-- end of right pannel--------------------------------- -->


        </div>
    </div>
<?php }?>
    <br><br>
    <a href="\Cvit-CVgenerator\user2\index.php"><input class="con1" type="button" value="Back" ></a>
    <input class="con" type="button" value="Convert PDF" onclick="convertHTMLtoPDF()">
   
   
    <a href="\Cvit-CVgenerator\cv_templates\qr_code.php?id=<?php echo $_GET['id']?>&&temp=<?php echo $_GET['temp']?>&&temp2=<?php echo $_GET['temp2']?>&&css=<?php echo $_GET['css']?>"><input class="con1" type="button" value="create Qr code" ></a>

</body>
    <script type="text/javascript" src="convert_to_pdf.js"></script>
    <?php
}else{
    header("location: \Cvit-CVgenerator/authentication/login.php");

}


?>
</html>