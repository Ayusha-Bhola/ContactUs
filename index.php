<?php
if(isset($_POST['submit'])){
$to = $_POST['temail'];
if(!filter_var($to, FILTER_VALIDATE_EMAIL)){
echo("enter the correct email");}
else{
$from = $_POST['femail'];
if(!filter_var($from, FILTER_VALIDATE_EMAIL)){
echo("enter the correct email");}
else {
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$message = $fname."".$lname."\n".$_POST['message'];
$message = wordwrap($message, 70);
$headers = "From:" . $from;
$subject = "form submission";
mail($to , $subject, $message, $headers);
echo("mail send");
}
}
}
?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.3.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.3.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/mbr.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.css">
  <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.theme.css">
  <link rel="stylesheet" href="assets/datepicker/jquery.datetimepicker.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section class="menu menu2 cid-sr5IUUWjaF" once="menu" id="menu2-2">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="#menu2-2">
                        <img src="assets/images/mbr.png" alt="Contact us" style="height: 3rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="#menu2-2">Responsive website Contact us with google map feature</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black display-4" href="#form5-0">Contacts</a>
                    </li></ul>
                
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href="#google-map">google map</a></div>
            </div>
        </div>
    </nav>
</section>

<section class="header3 cid-sr5IVQS6V7 mbr-fullscreen mbr-parallax-background" id="header3-3">

    

    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(255, 255, 255);"></div>

    <div class="align-center container">
        <div class="row justify-content-end">
            <div class="col-12 col-lg-6">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>Responsive website</strong></h1>
                
                <p class="mbr-text mbr-fonts-style display-7">For sending email notifications with google map.</p>
                
            </div>
        </div>
    </div>
</section>

<section class="form5 cid-sr5Hjj0ewk" id="form5-0">
    
    <div class="mbr-overlay"></div>
    <div class="container-fluid">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Contacts</strong>
            </h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" >
                <form action="index.php" method="POST" class="mbr-form form-with-styler" enctype="multipart/form-data" >
				<input type="hidden" name="femail">
                    <div class="row">
                        <div hidden="hidden"  class="alert alert-success col-12">Thanks for filling out
                            the form! Your email has Successfully Sent!</div>
                        <div hidden="hidden"  class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group" >
                            <input type="text" name="fname" placeholder="Name" class="form-control" value="" id="name-form5-0">
                        </div>
						<div class="col-md col-sm-12 form-group" >
                            <input type="text" name="lname" placeholder="Last Name" class="form-control" value="" id="name-form5-0">
                        </div>
						<div class="col-md col-sm-12 form-group" >
						<div class="col-md col-sm-12 form-group" >
                            <input type="email" name="temail" placeholder="To" class="form-control" value="" id="email-form5-0">
                        </div>
                        <div class="col-md col-sm-12 form-group" >
                            <input type="email" name="femail" placeholder="From" class="form-control" value="" id="email-form5-0">
                        </div>
                        </div>
                        <div class="col-12 form-group" >
						<textarea cols="40" rows="5" placeholder="Enter your  message here"class="form-control" name="message" id="textarea-form5-0"></textarea>
                            <!--<textarea name="textarea" placeholder="Message"  class="form-control" id="textarea-form5-0"></textarea>-->
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                            <button type="submit" name ="submit" class="btn btn-primary display-4">Send message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="footer6 cid-sr5IJE7T3O" once="footers" id="footer6-1">

    

    

    <div class="container" id="google-map">
        <div class="row content mbr-white">
            <div class="col-12 col-md-3 mbr-fonts-style display-2">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-2"><strong>Google Map</strong></h5>
                <p class="mbr-text mbr-fonts-style display-7"></p> <br>
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 mt-4 display-7"></h5>
                <p class="mbr-text mbr-fonts-style mb-4 display-7"></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"></h5>
                <ul class="list mbr-fonts-style mb-4 display-4"></ul>
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 mt-5 display-7"></h5>
                <p class="mbr-text mbr-fonts-style mb-4 display-7"></p>
            </div>
            <div class="col-12 col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCNveGQ9bfpKFwWzQLLftrR9hNiHwdqQG8&amp;q=solapur" allowfullscreen=""></iframe></div>
            </div>
            <div class="col-md-6">
                
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="col-sm-12 copyright pl-0">
                <p class="mbr-text mbr-fonts-style mbr-white display-7">
                    © Copyright 2021 - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section><section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/v" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a><p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Built with Mobirise - <a href="https://mobirise.site/k" style="color:#aaa;">Get now</a></p></section><script src="assets/web/assets/jquery/jquery.min.js"></script>  <script src="assets/popper/popper.min.js"></script>  <script src="assets/tether/tether.min.js"></script>  <script src="assets/bootstrap/js/bootstrap.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/parallax/jarallax.min.js"></script>  <script src="assets/formstyler/jquery.formstyler.js"></script>  <script src="assets/formstyler/jquery.formstyler.min.js"></script>  <script src="assets/datepicker/jquery.datetimepicker.full.js"></script>  <script src="assets/dropdown/js/nav-dropdown.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  
  
  
</body>
</html>