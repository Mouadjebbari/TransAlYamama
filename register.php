<?php include_once 'helpers/helper.php'; ?>



<?php
if(isset($_GET['error'])) {
    if($_GET['error'] === 'invalidemail') {
        echo '<script>alert("Invalid email")</script>';
    } else if($_GET['error'] === 'pwdnotmatch') {
        echo '<script>alert("Passwords do not match")</script>';
    } else if($_GET['error'] === 'sqlerror') {
        echo"<script>alert('Database error')</script>";
    } else if($_GET['error'] === 'usernameexists') {
        echo"<script>alert('Username already exists')</script>";
    } else if($_GET['error'] === 'emailexists') {
        echo"<script>alert('Email already exists')</script>";
    }
}
?>
<link rel="stylesheet" href="assets/css/form.css">

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from script.viserlab.com/viserbus/register by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2023 19:36:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" Content="ViserBus - Sign Up">
    <meta name="description" content="Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit">
    <meta name="keywords" content="ViserBus,bus booking system,bus booking php script,single vendro bus booking system">

    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logoIcon/favicon.png">

    
    <link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="ViserBus - Sign Up">
    
    <meta itemprop="name" content="ViserBus - Sign Up">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="assets/images/seo/6210e34d4726e1645273933.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="ViserBus - Bus Ticket Booking System">
    <meta property="og:description" content="Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit ff">
    <meta property="og:image" content="assets/images/seo/6210e34d4726e1645273933.png"/>
    <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="register.html">
    
    <meta name="twitter:card" content="summary_large_image">
    <!-- BootStrap Link -->
    <!-- Bootstrap Link -->
<link rel="stylesheet" href="assets/templates/basic/css/bootstrap.min.css?v=<?php echo time(); ?>">

<!-- Icon Links -->
<link rel="stylesheet" href="assets/global/css/all.min.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="assets/global/css/line-awesome.min.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="assets/templates/basic/css/flaticon.css?v=<?php echo time(); ?>">

<!-- Plugin Links -->
<link rel="stylesheet" href="assets/templates/basic/css/slick.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="assets/global/css/select2.min.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="assets/templates/basic/css/jquery-ui.css?v=<?php echo time(); ?>">

<!-- Cookie Link -->
<link rel="stylesheet" href="assets/templates/basic/css/cookie.css?v=<?php echo time(); ?>">

<!-- Custom Links -->
<link rel="stylesheet" href="assets/templates/basic/css/main.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="assets/templates/basic/css/custom.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="assets/templates/basic/css/colorf972.css?color=0E9E4D&amp;v=<?php echo time(); ?>">

    <title>ViserBus - Sign Up</title>
        <style>
        .hover-input-popup {
            position: relative;
        }
        .hover-input-popup:hover .input-popup {
            opacity: 1;
            visibility: visible;
        }
        .input-popup {
            position: absolute;
            bottom: 130%;
            left: 50%;
            width: 280px;
            background-color: #1a1a1a;
            color: #fff;
            padding: 20px;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            -o-border-radius: 5px;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%);
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }
        .input-popup::after {
            position: absolute;
            content: '';
            bottom: -19px;
            left: 50%;
            margin-left: -5px;
            border-width: 10px 10px 10px 10px;
            border-style: solid;
            border-color: transparent transparent #1a1a1a transparent;
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }
        .input-popup p {
            padding-left: 20px;
            position: relative;
        }
        .input-popup p::before {
            position: absolute;
            content: '';
            font-family: 'Line Awesome Free';
            font-weight: 900;
            left: 0;
            top: 4px;
            line-height: 1;
            font-size: 18px;
        }
        .input-popup p.error {
            text-decoration: line-through;
        }
        .input-popup p.error::before {
            content: "\f057";
            color: #ea5455;
        }
        .input-popup p.success::before {
            content: "\f058";
            color: #28c76f;
        }
    </style>
</head>





<section class="account-section bg_img" style="background: url(assets/images/frontend/sign_up/61f281283d54b1643282728.jpg) bottom left;">
    <span class="spark"></span>
    <span class="spark2"></span>
    <div class="account-wrapper  sign-up">
        <div class="account-form-wrapper">
            <div class="account-header">
                <div class="left-content">
                    <div class="logo mb-4">
                        <a href="https://script.viserlab.com/viserbus"><img src="logo.png" alt="Logo"></a>
                    </div>
                    <h3 class="title">Welcome to Bus Booking</h3>
                    <span>Sign Up your Account</span>
                </div>
            </div>
            <form class="account-form row" method="POST" action="includes/register.inc.php" >
                <input type="hidden" name="_token" value="vhYZQm4xOfxA8WbxkROB1D7xq15bQeXj6jM5X03i">
                <!-- <div class="col-sm-6 col-xl-6">
                    <div class="form--group">
                        <label for="firstname">First Name <span>*</span></label>
                        <input id="firstname" type="text" class="form--control" name="username" id="username"   value="" placeholder="Enter Your First Name" required>
                    </div>
                </div> -->
                <!-- <div class="col-sm-6 col-xl-6">
                    <div class="form--group">
                        <label for="lastname">Last Name <span>*</span></label>
                        <input id="lastname" type="text" class="form--control" name="lastname" value="" placeholder="Enter Your Last Name" required>
                    </div>
                </div> -->



                <div class="col-sm-6 col-xl-6">
                    <div class="form--group">
                        <label for="username">Username <span>*</span></label>
                        <input  type="text" class="form--control checkUser"  name="username" id="username" value="" placeholder="Enter Username" required>
                        <small class="text-danger usernameExist"></small>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-6">
                    <div class="form--group">
                        <label for="email">Email <span>*</span></label>
                        <input  type="email" class="form--control checkUser" name="email_id" id="email_id" value="" placeholder="Enter Your Email" required>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-6 hover-input-popup">
                    <div class="form--group">
                        <label for="password">Password <span>*</span></label>
                        <input  type="password" class="form--control" name="password" id="password"            
                                required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                title="Must contain at least one number and one uppercase and lowercase letter,
                                and at least 8 or more characters" placeholder="Enter Your Password" >
                                            </div>
                </div>
                <div class="col-sm-6 col-xl-6">
                    <div class="form--group">
                        <label for="password-confirm">Confirm Password <span>*</span></label>
                        <input  type="password" class="form--control"  type="password" name="password_repeat" 
                                    id="password_repeat"  placeholder="Confirm Password" required>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-6 mb-3"></div>
                <div class="col-md-12">
                    <div class="form--group">
                        <button class="account-button w-100" name="signup_submit" type="submit" >Sign Up</button>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="account-page-link">
                        <p>Already have an Account? <a href="login.php">Sign In</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Account Section Ends Here -->

<!-- <div class="modal fade" id="existModalCenter" tabindex="-1" role="dialog" aria-labelledby="existModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"  id="existModalLongTitle">You are with us</h5>
                <button type="button" class="w-auto btn--close" data-bs-dismiss="modal"><i class="las la-times"></i></button>
            </div>
            <div class="modal-body">
                <strong class="text-dark">You already have an account please Sign in </strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn--danger btn--sm w-auto" data-bs-dismiss="modal">Close</button>
                <a href="login.html" class="btn btn--success btn--sm w-auto">Login</a>
            </div>
        </div>
    </div>
</div> -->

    <script src="assets/global/js/jquery-3.6.0.min.js"></script>
    <script src="assets/templates/basic/js/bootstrap.min.js"></script>
    <script src="assets/templates/basic/js/slick.min.js"></script>
    <script src="assets/global/js/select2.min.js"></script>
    <script src="assets/templates/basic/js/jquery-ui.min.js"></script>
    <script src="assets/templates/basic/js/main.js"></script>
    <script src="assets/global/js/secure_password.js"></script>
    <link rel="stylesheet" href="assets/global/css/iziToast.min.css">
<script src="assets/global/js/iziToast.min.js"></script>

<script>
$(document).ready(function(){
  $('.input-group input').focus(function(){
    me = $(this) ;
    $("label[for='"+me.attr('id')+"']").addClass("animate-label");
  }) ;
  $('.input-group input').blur(function(){
    me = $(this) ;
    if ( me.val() == ""){
      $("label[for='"+me.attr('id')+"']").removeClass("animate-label");
    }
  }) ;
  // $('#test-form').submit(function(e){
  //   e.preventDefault() ;
  //   alert("Thank you") ;
  // })
});    
</script>
</body>
