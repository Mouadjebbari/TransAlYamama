<?php include_once 'helpers/helper.php'; ?>

<link rel="shortcut icon" type="image/x-icon" href="logo.png">
<link rel="stylesheet" href="assets/css/login.css">
<style>
@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
}
/* h1{
   font-family :'product sans' !important;
	font-size:48px !important;
	margin-top:20px;
	text-align:center;
    color: #fbef00;
}
body {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
} */
.login-form {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
    border-radius: 0px;
}
</style>




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



<link rel="stylesheet" href="assets/css/login.css">
<link rel="shortcut icon" type="image/x-icon" href="logo.png">

<?php
if(isset($_GET['err']) || isset($_GET['mail'])) {
    if($_GET['err'] === 'invalidemail') {
        echo '<script>alert("Invalid email");</script>';
    } else if($_GET['err'] === 'sqlerr') {
        echo '<script>alert("An error occured");</script>';        
    } else if($_GET['mail'] === 'success') {
        echo '<script>alert("Email has been succesfully sent to you");</script>';        
    } else if($_GET['err'] === 'mailerr') {
        echo '<script>alert("An error occured");</script>';        
    }                    
} 
?>






    <?php include_once 'helpers/helper.php'; ?>

<link rel="stylesheet" href="assets/css/form.css">
<?php
if(isset($_GET['pwd'])) {
    if($_GET['pwd']=='updated') {
        echo "<script>alert('Your password has been reset!!');</script>";
    }
}    
?>





<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" Content="ViserBus - Sign In">
    <meta name="description" content="Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit">
    <meta name="keywords" content="ViserBus,bus booking system,bus booking php script,single vendro bus booking system">

    <link rel="shortcut icon" type="image/x-icon" href="logo.png">

    
    <link rel="apple-touch-icon" href="logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="ViserBus - Sign In">
    
    <meta itemprop="name" content="ViserBus - Sign In">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="assets/images/seo/6210e34d4726e1645273933.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="ViserBus - Bus Ticket Booking System">
    <meta property="og:description" content="Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit ff">
    <meta property="og:image" content="assets/images/seo/6210e34d4726e1645273933.png"/>
    <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="login.html">
    
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

    <title>TranAlYAMAMA</title>
    </head>
<body>
<section class="account-section bg_img" style="background: url(assets/images/frontend/sign_in/61f2810a7e4171643282698.jpg) bottom left;">
        <span class="spark"></span>
        <span class="spark2"></span>
        <div class="account-wrapper">
            <div class="account-form-wrapper">
                <div class="account-header">
                    <div class="left-content">
                        <div class="logo mb-4">
                            <a href=""><img src="logo.png" alt="Logo"></a>
                        </div>
                         <h3 class="title">Réinitialiser le mot de passe</h3>
                    </div>
                </div>

                <?php 
            $selector = $_GET['selector'];
            $validator = $_GET['validator'];    
            if(empty($selector) || empty($validator)){
                // echo $_GET;
                echo '<script>alert("Could not validate your request")</script>'; 
            } else {
                if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false){
                    ?>
                    <form method="POST" action="includes/reset-password.inc.php">
                    <input type="hidden" name="_token" value="vhYZQm4xOfxA8WbxkROB1D7xq15bQeXj6jM5X03i">                   
                     <div class="col-lg-12">
                    <input type="hidden" name="_token" value="vhYZQm4xOfxA8WbxkROB1D7xq15bQeXj6jM5X03i">                   
                     <div class="col-xl-12">
                     
                     <input type="hidden" name="selector" value="<?php echo $selector ?>">
                     <input type="hidden" name="validator" value="<?php echo $validator ?>">
                    </div>
                    <div class="col-xl-12">
                        <div class="form--group">
                            <input type="password" name="password" class="form-input" 
                            placeholder="Entrez le mot de passe" 
                            required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                            title="Must contain at least one number and one uppercase and lowercase letter, 
                            and at least 8 or more characters">     

                         </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form--group">
                            <input type="password" name="password_repeat" class="form-input" 
                            placeholder="Confirmer le mot de passe" required>   

                         </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form--group">
                            <button name="new-pwd-submit" type="submit" class="button">
                                Submit</button> 
                         </div>
                    </div>
                </form>
                <?php
            }            
    }
    ?>
            </div>
        </div>
    </section>
    </body>
</html>

 

