<?php
    $fail=false;
    $success=false;
    include_once("header.inc.php");
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=get_user_field($db->con,$_POST["name"]);
        $email=get_user_field($db->con,$_POST["email"]);
        $city=get_user_field($db->con,$_POST["city"]);
        $mobile=get_user_field($db->con,$_POST["mobile"]);
        $msg=get_user_field($db->con,$_POST["msg"]);
       
            $sql="INSERT INTO contact (con_name, email,city,mobile,msg,dt)VALUES ('$name', '$email', '$city','$mobile','$msg',current_timestamp())";
            $res=mysqli_query($db->con,$sql);
            if($res)
            {
                $success=true;
            }
            else{
                $fail=ture;
            }
           
            /* smtp code
            $html="<table><tr><td>$name</td><td>$email</td><td>$mobile</td><td>$city</td><td>$msg</td></tr></table>";
            include('smtp/PHPMailerAutoload.php');
            $mail=new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host="smtp.gmail.com";
            $mail->Port=587;
            $mail->SMTPSecure="tls";
            $mail->SMTPAuth=true;
            $mail->Username="info@gdgoenkakapurthala.in";
            $mail->Password="clients@00";
            $mail->SetFrom("info@gdgoenkakapurthala.in");
            $mail->addAddress("clientscode@gmail.com");
            $mail->IsHTML(true);
            $mail->Subject="New Contact Us";
            $mail->Body=$html;
            $mail->SMTPOptions=array('ssl'=>array('verify_peer'=>false,'verify_peer_name'=>false,'allow_self_signed'=>false));
            $mail->send(); */
            
       
       
    }

 
 ?>
<section class="w3l-contact-breadcrum">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3 ">
      <h2>Contact Us</h2>
      <p class="text-white"><a  href="index.php">Home</a> &nbsp; / &nbsp; Contact</p>
    </div>
  </div>
</section>
<!-- contact -->
<section class="w3l-contacts-12" id="contact">
    <div class="contact-top pt-5">
        <div class="container py-md-3">

        <!-- message notification-->
        <div class="text-center">
                                <?php
                                      if($fail)
                                      {
                                          echo '<div class="alert alert-danger" role="alert">
                                               Sorry.There may be Error.Try Later.
                                          </div>';
                                      }
                                      if($success)
                                      {
                                          echo '<div class="alert alert-success" role="alert">
                                              Your Message has been Sent.
                                          </div>';
                                      }
                                ?>
                            </div>

             <h5 class="main_content_title"> CONTACT US</h5>
            <div class="row cont-main-top">
              
                <!-- contact address -->
                <div class="contact col-lg-4">
                    <div class="cont-subs">
                        <div class="cont-add">
                            
                           <div class="cont-add-rgt">
                            <h4>Address:</h4>
                            <p class="contact-text-sub">Goindwal Rd, Kapurthala, Punjab 144061</p>
                        </div>
                        <div class="cont-add-lft">
                            <span class="fa fa-map-marker" aria-hidden="true"></span>
                       </div>
                    </div>
                        <div class="cont-add add-2">
                            
                           <div class="cont-add-rgt">
                            <h4>Email:</h4>
							
                            <a href="mailto:info@gdgoenkakapurthala.in">
                                <p class="contact-text-sub">info@gdgoenkakapurthala.in</p>
                            </a>
                        </div>
                        <div class="cont-add-lft">
                            <span class="fa fa-envelope" aria-hidden="true"></span>
                       </div>
                    </div>
                        <div class="cont-add">
                           
                            <div class="cont-add-rgt">
                                 <h4>Phone:</h4>
                                 <a href="tel:919530803080">
                                    <p class="contact-text-sub">95308-03080</p>
                                 </a>
                            </div>
                            <div class="cont-add-lft">
                                <span class="fa fa-phone" aria-hidden="true"></span>
                           </div>
                        </div>
                        <div class="cont-add add-3">
                           
                            <div class="cont-add-rgt">
                                 <h4>Find Us On</h4>
                                 <div class="main-social-1 mt-2">
                                    <a href="https://www.facebook.com/gdgoenkakpt/" target="_blank" class="facebook"><span class="fa fa-facebook"></span></a>
                                   <!-- <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                                    <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                                    <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>-->
                                </div>
                            </div>
                            <div class="cont-add-lft">
                               
                           </div>
                        </div>
                    </div>
                </div>
                <!-- //contact address -->
                 <!-- contact form -->
                 <div class="contacts12-main col-lg-8 mt-lg-0 mt-5">
                   
                    <form action="" method="post" class="main-input">
                        <div class="top-inputs d-grid">
                            <input type="text" placeholder="Name" name="name" id="w3lName" required="">
                            <input type="email" name="email" placeholder="Email" id="w3lSender" required="">
                        </div>
						<div class="top-inputs d-grid">
                            <input type="text" placeholder="City" name="city" id="city" required="">
                            <input type="tel" name="mobile" placeholder="Mobile" id="w3lSender" required="">
                        </div>
                        
                        <textarea placeholder="Message" name="msg" id="w3lMessage" required=""></textarea>
                        
                            
                            <div class="text-right">
                                <button type="submit"  class="btn btn-theme2">Submit Now</button>
                            </div>      
                       
                    </form>
                </div>
                <!-- //contact form -->
            </div>
        </div>
        <!-- map -->
        <div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.790899723784!2d75.33524901447943!3d31.392328660595762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a3621d9c27d03%3A0x7755c6c4873a459!2sGD%20Goenka%20International%20School%20Kapurthala!5e0!3m2!1sen!2sin!4v1611299544928!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            
        </div>
        <!-- //map -->
    </div>
</section>
<!-- //contact -->
<!-- grids block 5 -->
<?php
    include_once("footer.inc.php");
 
 ?>
             