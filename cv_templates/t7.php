<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="template_style.css">

    <!-- not sure what these suckers do... -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

</head>
<body>
    <div id="template_ar" >
        <div class="parent">
            <div class="left_panel">
                <div class="profile_pic">
                    <img id="avatar" src="icons/simon_riley.png">
                </div>

                <div class="info">
                    <div class="infoX contact">
                        <strong>Contact</strong>
                        
                        
                        <div class="hr_line_left"></div>
                        
                        
                        <div class="phone">
                            <img id="phone" src="icons/phone.png" alt="">
                            <div class="phn_num">
                                <strong id="phone">Phone</strong>
                                <strong id="phn_num"><?php echo "gorib" ?></strong>
                            </div>
                        </div>

                        
                        <div class="phone">
                            <img id="phone" src="icons/mail.png" alt="">
                            <div class="phn_num">
                                <strong id="phone">Mail</strong>
                                <strong id="phn_num">ar@gmail.com</strong>
                            </div>
                        </div>

                        
                        <div class="phone">
                            <img id="phone" src="icons/home.png" alt="">
                            <div class="phn_num">
                                <strong id="phone">Address</strong>
                                <strong id="phn_num">narail</strong>
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
                                <strong id="phone">B.Sc in CSE</strong>
                                <strong id="phn_num">United International University</strong>
                            </div>
                        </div>

                        
                        <div class="phone">
                            <img id="phone" src="icons/school.png" alt="">
                            <div class="phn_num">
                                <strong id="phone">M.Sc in CSE</strong>
                                <strong id="phn_num">Uganda University</strong>
                            </div>
                        </div>

                    </div>



                    <!-- ---------------------------------------------------------------------- -->



                    <div class="infoX skills">
                        <strong>Skills</strong>
                        
                        
                        <div class="hr_line_left"></div>
                        
                        
                        <div class="phone_skill">
                            <img id="phone" src="icons/skill.jpg" alt="">
                            <strong id="skill">extraordinary</strong>
                        </div>

                        <div class="phone_skill">
                            <img id="phone" src="icons/skill.jpg" alt="">
                            <strong id="skill">skill</strong>
                        </div>
                        
                        <div class="phone_skill">
                            <img id="phone" src="icons/skill.jpg" alt="">
                            <strong id="skill">in wasting time</strong>
                        </div>

                    </div>
                    
                </div>

                
            </div>
            <!---------------------- -----------end of left pannel--------------------------------- -->




            <div class="right_panel">
                <div class="vertical_line"></div>

                <div class="name">
                    <strong id="name">Abdur Rahman</strong>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Numquam perspiciatis rerum quia! Fugit, labore harum.
                    </p>
                </div>

                <div class="right_info">
                    <div class="infoX contact">
                        <strong>Achievements</strong>
                        
                        
                        <div class="hr_line_right"></div>
                        
                        <!-- here goes the destruction------------- -->
                        
                        <div class="achivement_left">
                            <div class="phone">
                                <img id="phone" src="icons/achivement.png" alt="">
                                <div class="phn_num">
                                    <strong id="phone">CGPA</strong>
                                    <strong id="phn_num">02.4</strong>
                                </div>
                            </div>
        
                            
                            <div class="phone">
                                <img id="phone" src="icons/certificate.png" alt="">
                                <div class="phn_num">
                                    <strong id="phone">Networking</strong>
                                    <strong id="phn_num">CCNA, CompTIA Network+</strong>
                                </div>
                            </div>
        
                            
                            <div class="phone">
                                <img id="phone" src="icons/certificate.png" alt="">
                                <div class="phn_num">
                                    <strong id="phone">Cybersecurity</strong>
                                    <strong id="phn_num">CISM, CompTIA Security+</strong>
                                </div>
                            </div>

                        </div>


                        <div class="achivement_right">
                            <div class="phone">
                                <img id="phone" src="icons/certificate.png" alt="">
                                <div class="phn_num">
                                    <strong id="phone">OSCP</strong>
                                    <strong id="phn_num">Offensive Security Certified Professional</strong>
                                </div>
                            </div>
        
                            
                            <div class="phone">
                                <img id="phone" src="icons/certificate.png" alt="">
                                <div class="phn_num">
                                    <strong id="phone">C|EH</strong>
                                    <strong id="phn_num">Certified Ethical Hacker</strong>
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
                                    <strong id="phone">2001-2005</strong>
                                    <strong id="phn_num">Home School</strong>
                                </div>
                            </div>
                            
                            <div class="phone">
                                <img id="phone" src="icons/job.png" alt="">
                                <div class="phn_num">
                                    <strong id="phone">2001-2005</strong>
                                    <strong id="phn_num">Home School</strong>
                                </div>
                            </div>
                        </div>


                        <div class="exp_right">
                            <div class="phone">
                                <img id="phone" src="icons/job.png" alt="">
                                <div class="phn_num">
                                    <strong id="phone">2001-2005</strong>
                                    <strong id="phn_num">Home School</strong>
                                </div>
                            </div>
        
                            <div class="phone">
                                <img id="phone" src="icons/job.png" alt="">
                                <div class="phn_num">
                                    <strong id="phone">2001-2005</strong>
                                    <strong id="phn_num">Home School</strong>
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
                                    <strong id="phone">Sherlock Holmes</strong>
                                    <strong id="phn_num">does something here</strong>
                                </div>
                            </div>
                            
                            <div class="phone">
                                <img id="phone" src="icons/refer.png" alt="">
                                <div class="phn_num">
                                    <strong id="phone">Hercule Poirot</strong>
                                    <strong id="phn_num">does something here</strong>
                                </div>
                            </div>
                        </div>


                        <div class="exp_right">
                            <div class="phone">
                                <img id="phone" src="icons/refer.png" alt="">
                                <div class="phn_num">
                                    <strong id="phone">L Lawliet</strong>
                                    <strong id="phn_num">does something here</strong>
                                </div>
                            </div>
        
                            <div class="phone">
                                <img id="phone" src="icons/refer.png" alt="">
                                <div class="phn_num">
                                    <strong id="phone">Byomkesh Bakshi</strong>
                                    <strong id="phn_num">does something here</strong>
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

    <input type="button" value="Convert PDF" onclick="convertHTMLtoPDF()">

</body>
    <script type="text/javascript" src="convert_to_pdf.js"></script>
</html>