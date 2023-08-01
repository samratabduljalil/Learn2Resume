<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cv_form</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    <form action="/upload_cv.php" method="post" enctype="multipart/form-data">
    <div class="parent">
        <div class="left_panel">
            <div class="profile_pic">
                <img id="avatar" src="icons/simon_riley.png">
                
                <input type="file" id="imageUpload" name="image" accept="image/*" placeholder="Chose image">
            </div>

            <div class="info">
                <div class="infoXl contact">
                    <strong>Contact</strong>
                    
                    
                    <div class="hr_line_left"></div>
                    
                    
                    <div class="phone">
                        <img id="phone" src="icons/phone.png" alt="">
                        <div class="phn_num">
                            <strong id="phone">Phone</strong>
                            <input type="text"  placeholder="Enter your Phone Number" class="input_text22"  name="phone">
                        </div>
                    </div>

                    
                    <div class="phone">
                        <img id="phone" src="icons/mail.png" alt="">
                        <div class="phn_num">
                            <strong id="phone">Mail</strong>
                            <input type="text"  placeholder="Enter your Email" class="input_text22" name="email">
                        </div>
                    </div>

                    
                    <div class="phone">
                        <img id="phone" src="icons/home.png" alt="">
                        <div class="phn_num">
                            <strong id="phone">Address</strong>
                            <textarea cols="33" rows="4" placeholder="Address"  name="address" class="ty"></textarea>
                           
                        </div>
                    </div>
                </div>


                <!-- ---------------------------------------------------------------------- -->


                <div class="infoXl education">
                    <strong>Education</strong>
                    
                    
                    <div class="hr_line_left"></div>
                    
                    
                    <div class="phone">
                        <img id="phone" src="icons/school.png" alt="">
                        <div class="phn_num">
                            <input type="text"  placeholder="Enter your Degree Name" class="input_text22" name="degree1">
                            <input type="text"  placeholder="University Name" class="input_text22" name="university1">
                        </div>
                    </div>

                    
                    <div class="phone">
                        <img id="phone" src="icons/school.png" alt="">
                        <div class="phn_num">
                        <input type="text"  placeholder="Enter your Degree Name" class="input_text22" name="degree2">
                            <input type="text"  placeholder="University Name" class="input_text22" name="university2">
                        </div>
                    </div>

                </div>



                <!-- ---------------------------------------------------------------------- -->



                <div class="infoXl skills">
                    <strong>Skills</strong>
                    
                    
                    <div class="hr_line_left"></div>
                    
                    
                    <div class="phone_skill">
                        <img id="phone" src="icons/skill.jpg" alt="">
                        <input type="text" placeholder="Soft Skills" class="input_text22"  name="soft_s">
                    </div>

                    <div class="phone_skill">
                        <img id="phone" src="icons/skill.jpg" alt="" >
                        <input type="text" placeholder="Hard Skills" class="input_text22" name="hard_s">
                    </div>
                    
                    <div class="phone_skill">
                        <img id="phone" src="icons/skill.jpg" alt="" >
                        <input type="text"  placeholder="other Skills" class="input_text22" name="other_s">
                    </div>

                </div>
                
            </div>

            
        </div>
        <!---------------------- -----------end of left pannel--------------------------------- -->


        <!-- ---------------------- hr line ----------------------- -->
        <!-- <div class="vertical_line"></div> -->





        <!-- ---------------------- hr line ---------------------- -->




        <div class="right_panel">
            <div class="vertical_line"></div>
            



            <div class="name">
                <input type="text"  placeholder="Enter your Name" class="input_text2 input_text21" name="name">
                <p>
                    <textarea  cols="40" rows="7" placeholder="Why We give you this job ? write 100 word" name="100wrd"></textarea>
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
                                <input type="text" name="acchivement1" id="" class="input_text"  placeholder="Achivement"  >
                                <input type="text" name="shor1" id="" placeholder="short details" class="input_text">
                            </div>
                        </div>
    
                        
                        <div class="phone">
                            <img id="phone" src="icons/certificate.png" alt="">
                            <div class="phn_num">
                            <input type="text" name="acchivement2" id="" class="input_text"  placeholder="Achivement"  >
                                <input type="text" name="shor2" id="" placeholder="short details" class="input_text">
                            </div>
                        </div>
    
                        
                        <div class="phone">
                            <img id="phone" src="icons/certificate.png" alt="">
                            <div class="phn_num">
                            <input type="text" name="acchivement3" id="" class="input_text"  placeholder="Achivement"  >
                                <input type="text" name="shor3" id="" placeholder="short details" class="input_text">
                            </div>
                        </div>

                    </div>


                 

                    
                    <!-- here goes the destruction------------- -->
                
                
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
                                <input type="text" name="Company1" id="" placeholder="Company Name" class="input_text">
                            <input type="text" name="c_date1" id="" placeholder="working Date" class="input_text">
                            </div>
                        </div>
                        
                        <div class="phone">
                            <img id="phone" src="icons/job.png" alt="">
                            <div class="phn_num">
                                <input type="text" name="Company2" id="" placeholder="Company Name" class="input_text">
                                <input type="text" name="c_date2" id="" placeholder="working Date" class="input_text">
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
                                <input type="text" name="re_name1" id="" placeholder="Name" class="input_text">
                                <input type="text" name="re_position1" id="" placeholder="Position" class="input_text">
                            </div>
                        </div>
                        
                        <div class="phone">
                            <img id="phone" src="icons/refer.png" alt="">
                            <div class="phn_num">
                                <input type="text" name="re_name2" id="" placeholder="Name" class="input_text">
                                <input type="text" name="re_position2" id="" placeholder="Position" class="input_text">
                            </div>
                        </div>
                    </div>


                   

                </div>
                
            </div>
        </div> 
        <!-- end of right pannel--------------------------------- -->


    </div>
   
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Please recheck then click confirm .</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     Please Check All the details.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cencel</button>
        <a href="\cv_templates\form.php"><button type="submit" class="btn btn-primary" >Confirm & Save</button></a>
      </div>
    </div>
  </div>
</div>
</form>

<button type="button" class="btn btn-primary hy" data-toggle="modal" data-target="#exampleModal">
Submit
</button>
    <br><br>
</body>
</html>