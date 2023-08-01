<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="template_style.css">
    <link rel="stylesheet" href="style.css">

    <!-- not sure what these suckers do... -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <?php
include('connection.php');
session_start();

    
    $query = "SELECT * FROM cv_template WHERE user_id = '{$_SESSION['id']}' LIMIT 1";
    $result = mysqli_query($connection, $query);
    $user = mysqli_fetch_assoc($result);
    if(isset($user['name'] )) { 

?>

</head>
<body>
    <div id="template_ar" >
        <div class="parent">
            <div class="left_panel">
                <div class="profile_pic">
                    <img id="avatar" src="/<?php echo  $user['image'] ?>">
                </div>

                <div class="info">
                    <div class="infoX contact">
                        <strong>Contact</strong>
                        
                        
                        <div class="hr_line_left"></div>
                        
                        
                        <div class="phone">
                            <img id="phone" src="icons/phone.png" alt="">
                            <div class="phn_num">
                                <strong id="phone">Phone</strong>
                                <strong id="phn_num"><?php echo  $user['phone'] ?></strong>
                            </div>
                        </div>

                        
                        <div class="phone">
                            <img id="phone" src="icons/mail.png" alt="">
                            <div class="phn_num">
                                <strong id="phone">Mail</strong>
                                <strong id="phn_num"><?php echo  $user['eamil'] ?></strong>
                            </div>
                        </div>

                        
                        <div class="phone">
                            <img id="phone" src="icons/home.png" alt="">
                            <div class="phn_num">
                                <strong id="phone">Address</strong>
                                <strong id="phn_num"><?php echo  $user['address'] ?></strong>
                            </div>
                        </div>
                    </div>


                    <!-- ---------------------------------------------------------------------- -->


                    <div class="infoX education">
                        <strong>Education</strong>
                        
                        
                        <div class="hr_line_left"></div>
                        
                        
                        <div class="phone">
                            <img id="phone" src="icons/school.png" alt="">
                            <div class="phn_num">
                                <strong id="phone"><?php echo  $user['degree1'] ?></strong>
                                <strong id="phn_num"><?php echo  $user['edu_institution1'] ?></strong>
                            </div>
                        </div>

                        
                        <div class="phone">
                            <img id="phone" src="icons/school.png" alt="">
                            <div class="phn_num">
                            <strong id="phone"><?php echo  $user['degree2'] ?></strong>
                                <strong id="phn_num"><?php echo  $user['edu_institution2'] ?></strong>
                            </div>
                        </div>

                    </div>



                    <!-- ---------------------------------------------------------------------- -->



                    <div class="infoX skills">
                        <strong>Skills</strong>
                        
                        
                        <div class="hr_line_left"></div>
                        
                        
                        <div class="phone_skill">
                            <img id="phone" src="icons/skill.jpg" alt="">
                            <strong id="skill"><?php echo  $user['skill1'] ?></strong>
                        </div>

                        <div class="phone_skill">
                            <img id="phone" src="icons/skill.jpg" alt="">
                            <strong id="skill"><?php echo  $user['skill2'] ?></strong>
                        </div>
                        
                        <div class="phone_skill">
                            <img id="phone" src="icons/skill.jpg" alt="">
                            <strong id="skill"><?php echo  $user['skill3'] ?></strong>
                        </div>

                    </div>
                    
                </div>

                
            </div>
            <!---------------------- -----------end of left pannel--------------------------------- -->




            <div class="right_panel">
                <div class="vertical_line"></div>

                <div class="name">
                    <strong id="name"><?php echo  $user['name'] ?></strong>
                    <p>
                    <?php echo  $user['why'] ?>
                    </p>
                </div>

                <div class="right_info">
                    <div class="infoX contact">
                        <strong>Achievements</strong>
                        
                        
                        <div class="hr_line_right"></div>
                        
                        <!-- here goes the destruction------------- -->
                        
                        <div class="achivement_left">
                        <div class="phone">
                                <img id="phone" src="icons/certificate.png" alt="">
                                <div class="phn_num">
                                    <strong id="phone"><?php echo  $user['achivment1'] ?></strong>
                                    <strong id="phn_num"><?php echo  $user['achivment1_short'] ?></strong>
                                </div>
                            </div>
        
                            
                            <div class="phone">
                                <img id="phone" src="icons/certificate.png" alt="">
                                <div class="phn_num">
                                <strong id="phone"><?php echo  $user['achivment2'] ?></strong>
                                    <strong id="phn_num"><?php echo  $user['achivment2_short'] ?></strong>
                                </div>
                            </div>
        
                            
                            <div class="phone">
                                <img id="phone" src="icons/certificate.png" alt="">
                                <div class="phn_num">
                                <strong id="phone"><?php echo  $user['achivment3'] ?></strong>
                                    <strong id="phn_num"><?php echo  $user['achivment3_short'] ?></strong>
                                </div>
                            </div>

                        </div>


                      
                    </div>
                    
                    
                    <!-- ---------------------------------------------------------------------- -->
                    

                    <div class="infoX education">
                        <strong>Experiences</strong>
                        
                        
                        <div class="hr_line_right"></div>
                        
                        <!-- here goes the destruction------------- -->
                        
                        <div class="exp_left">
                            <div class="phone">
                                <img id="phone" src="icons/job.png" alt="">
                                <div class="phn_num">
                                <strong id="phone"><?php echo  $user['Cdate1'] ?></strong>
                                    <strong id="phn_num"><?php echo  $user['company1'] ?></strong>
                                </div>
                            </div>
                            
                            <div class="phone">
                                <img id="phone" src="icons/job.png" alt="">
                                <div class="phn_num">
                                    <strong id="phone"><?php echo  $user['Cdate2'] ?></strong>
                                    <strong id="phn_num"><?php echo  $user['company2'] ?></strong>
                                </div>
                            </div>
                        </div>


                       

                    </div>



                    <!-- ---------------------------------------------------------------------- -->



                    <div class="infoX skills">
                        <strong>References</strong>
                        
                        
                        <div class="hr_line_right"></div>
                        
                        
                        
                        <div class="exp_left">
                            <div class="phone">
                                <img id="phone" src="icons/refer.png" alt="">
                                <div class="phn_num">
                                <strong id="phone"><?php echo  $user['refer_name1'] ?></strong>
                                    <strong id="phn_num"><?php echo  $user['refer_dg1'] ?></strong>
                                </div>
                            </div>
                            
                            <div class="phone">
                                <img id="phone" src="icons/refer.png" alt="">
                                <div class="phn_num">
                                <strong id="phone"><?php echo  $user['refer_name2'] ?></strong>
                                    <strong id="phn_num"><?php echo  $user['refer_dg2'] ?></strong>
                                </div>
                            </div>
                        </div>


                      

                    </div>
                    
                </div>
            </div> 
            <!-- end of right pannel--------------------------------- -->


        </div>
    </div>

    <br><br>

    <input type="button" class="yu" value="Convert PDF" onclick="convertHTMLtoPDF()">
   <a href="/index.php"> <input type="button" class="yu" value="Back To Home"  ></a>

</body>
    <script type="text/javascript" src="convert_to_pdf.js"></script>
    <?php }else{?>
     

<a href="/index.php"> <input type="button" class="yu" value="Back To Home"  ></a>


        <?php } ?>
</html>