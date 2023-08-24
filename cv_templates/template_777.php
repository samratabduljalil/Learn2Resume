<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="template_style.css">
<link rel="stylesheet" href="Qr_img.css">
    <!-- not sure what these suckers do... -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

</head>
<body>
    <div id="template_ar2" >
        <div class="parent">
            <div class="left_panel">
                <div class="profile_pic">
                    <img id="avatar" src="icons/simon_riley.png">
                </div>

                <div class="info">
                    <div class="infoX contact">
                        <strong id="section_title">Contact</strong>
                        
                        
                        <div class="hr_line_left"></div>
                        
                        
                        <div class="the_sec">
                            <img id="icon" src="icons/phone.png" alt="">
                            <div class="sub_sec">
                                <strong id="phone">Phone</strong>
                                <strong id="phn_num">302947029</strong>
                            </div>
                        </div>

                        
                        <div class="the_sec">
                            <img id="icon" src="icons/mail.png" alt="">
                            <div class="sub_sec">
                                <strong id="mail">Mail</strong>
                                <strong id="mail_acc">ar@gmail.com</strong>
                            </div>
                        </div>

                        
                        <div class="the_sec">
                            <img id="icon" src="icons/home.png" alt="">
                            <div class="sub_sec">
                                <strong id="addr">Address</strong>
                                <strong id="address">narail</strong>
                            </div>
                        </div>
                    </div>


                    <!-- ---------------------------------------------------------------------- -->


                    <div class="infoX education">
                        <strong id="section_title">Education</strong>
                        
                        
                        <div class="hr_line_left"></div>
                        
                        
                        <div class="the_sec">
                            <img id="phone" src="icons/school.png" alt="">
                            <div class="sub_sec">
                                <strong id="qualification">B.Sc in Computer Science and Engineering</strong>
                                <strong id="uni_name">United International University</strong>
                            </div>
                        </div>

                        
                        <div class="the_sec">
                            <img id="phone" src="icons/school.png" alt="">
                            <div class="sub_sec">
                                <strong id="qualification">M.Sc in Computer Science and Engineering</strong>
                                <strong id="uni_name">Uganda University</strong>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!---------------------- -----------end of left pannel--------------------------------- -->




            <div class="right_panel">
                <div class="vertical_line"></div>

                <div class="bio">
                    <div class="name">Abdur Rahman</div>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Numquam perspiciatis rerum quia! Fugit, labore harum.
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
                                <strong id="exp_date">20XX - 20YY</strong>
                            </div>
                            <div class="exps">
                                <div class="expX">
                                    <strong id="company_name">Here Goes The Company Name</strong>
                                    <strong id="position">[Position]</strong>
                                    <p id="exp_details">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, amet.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="contentExp">
                        <div class="experience">
                            <div class="dates">
                                <strong id="exp_date">20XX - 20YY</strong>
                            </div>
                            <div class="exps">
                                <div class="expX">
                                    <strong id="company_name">Here Goes The Company Name</strong>
                                    <strong id="position">[Position]</strong>
                                    <p id="exp_details">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, amet.
                                    </p>
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
                                <strong id="skl">&#9957; Skill_X</strong>
                            </div>

                            <div class="skill_1">
                                <strong id="skl">&#9957; Skill_X</strong>
                            </div>

                            <div class="skill_1">
                                <strong id="skl">&#9957; Skill_X</strong>
                            </div>

                            <div class="skill_1">
                                <strong id="skl">&#9957; Skill_X</strong>
                            </div>

                            <div class="skill_1">
                                <strong id="skl">&#9957; Skill_X</strong>
                            </div>

                            <div class="skill_1">
                                <strong id="skl">&#9957; Skill_X</strong>
                            </div>
                        </div>
                        
                    </div>
                    <div class="qr">
                        <img src="qr_code\qrcode.png" alt="" class="qr_img">
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