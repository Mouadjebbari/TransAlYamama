<?php include_once 'helpers/helper.php'; ?>

<link rel="stylesheet" href="assets/css/form.css">
<?php
if(isset($_GET['pwd'])) {
    if($_GET['pwd']=='updated') {
        echo "<script>alert('Your password has been reset!!');</script>";
    }
}    
?>
<?php
if(isset($_GET['error'])) {
    if($_GET['error'] === 'invalidcred') {
        echo '<script>alert("Invalid Credentials")</script>';
    } else if($_GET['error'] === 'wrongpwd') {
        echo '<script>alert("Wrong Password")</script>';
    } else if($_GET['error'] === 'sqlerror') {
        echo"<script>alert('Database error')</script>";
    }
}
if(isset($_COOKIE['Uname']) && isset($_COOKIE['Upwd'])) {
  require 'helpers/init_conn_db.php';   
  $email_id = $_POST['user_id'];
  $password = $_POST['user_pass'];
  $sql = 'SELECT * FROM Users WHERE username=? OR email=?;';
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)) {
      header('Location: views/login.php?error=sqlerror');
      exit();            
  } else {
      mysqli_stmt_bind_param($stmt,'ss',$_COOKIE['Uname'],$_COOKIE['Uname']);            
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if($row = mysqli_fetch_assoc($result)) {
          $pwd_check = password_verify($_COOKIE['Upwd'],$row['password']);
          if($pwd_check == false) {
              setcookie('Uname', '',time() - 3600);
              setcookie('Upwd', '',time() - 3600);              
              header('Location: views/login.php?error=wrongpwd');
              exit();    
          }
          else if($pwd_check == true) {
              session_start();
              $_SESSION['userId'] = $row['user_id'];
              $_SESSION['userUid'] = $row['username'];
              $_SESSION['userMail'] = $row['email'];                            
              header('Location: views/index.php?login=success');
              exit();                  
          } else {
              header('Location: views/login.php?error=invalidcred');
              exit();                    
          }
      }
      header('Location: views/login.php?error=invalidcred');
      exit();         
  }
  header('Location: views/login.php?error=invalidcred');
  exit();      
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
?>

<!-- <main>
<div class="container mt-0">
  <div class="row">
    <div class="col-md-3"></div>
      <div class="bg-light form-out col-md-6">
      <h1 class="text-secondary text-center">LOG IN PANEL</h1>
      
      <form method="POST" class=" text-center" 
        action="includes/login.inc.php">

        <div class="form-row">  
            <div class="col-1 p-0 mr-1">
                <i class="fa fa-user text-secondary" 
                    style="float: right;margin-top:35px;"></i>
            </div> 
          <div class="col-10 mb-2">              
            <div class="input-group">
                <label for="user_id">Username/ Email</label>
                <input type="text" name="user_id" id="user_id" required
                   >
              </div>              
          </div>       
          <div class="col-1 p-0 mr-1">
                <i class="fa fa-lock text-secondary" 
                    style="float: right;margin-top:35px;"></i>
          </div>                
          <div class="col-10">
            <div class="input-group">
                <label for="user_pass">Password</label>
                <input type="password" name="user_pass" id="user_pass"
                      required>
              </div>            
          </div> 

        </div>          
        <div class="row mt-3">
       
          <div class="col">
          <a id="reset-pass" class="mr-5" href="reset-pwd.php"
              style="float: right !important;">Reset Password</a>        
          </div>         
        </div>   
        <div class="row mt-4">
          <div class="col">
            <a href="register.php">
              <button type="button" class="btn btn-info mt-3">
                <div style="font-size: 1.5rem;">
                <i class="fas fa-user-plus text-light"></i> Register
                </div>
              </button>
            </a> 
          </div> 
          <div class="col">
            <button name="login_but" type="submit" 
              class="btn btn-success mt-3">
              <div style="font-size: 1.5rem;">
              <i class="fa fa-lg fa-arrow-right"></i> Login
              </div>
            </button>
          </div>       
        </div>       
      
      </form>
    </div>
    <div class="col-md-3"></div>
    </div>
</div>   -->

<!-- <script>
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
  $('#test-form').submit(function(e){
    e.preventDefault() ;
    alert("Thank you") ;
  })
});
</script> -->
<!-- </main> -->
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
                         <h3 class="title">Bienvenue à TranAlYAMAMA</h3>
                        <span>Connectez-vous à votre compte</span>
                    </div>
                </div>
                    <form method="POST" class="account-form row"   action="includes/login.inc.php" onsubmit="return submitUserForm();">
                    <input type="hidden" name="_token" value="vhYZQm4xOfxA8WbxkROB1D7xq15bQeXj6jM5X03i">                    <div class="col-lg-12">
                        <div class="form--group">
                            <label for="username">Username/Email</label>
                            <input  name="user_id" id="user_id" type="text" class="form--control" placeholder="Enter Your username" required>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form--group">
                            <label for="password">Password</label>
                            <input name="user_pass" id="user_pass" type="password"  class="form--control" placeholder="Enter Your Password" required>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form--group">
                                                    </div>
                    </div>
                                        <div class="col-lg-12 d-flex justify-content-between">
                        <!-- <div class="form--group custom--checkbox">
                            <input type="checkbox" name="remember" id="remember" >
                            <label for="remember">Souviens-toi de moi</label>
                        </div> -->
                        <div class="">
                            <a href="reset-pwd.php">Mot de passe oublié ?</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form--group">
                            <button class="account-button w-100" name="login_but" type="submit">Connexion</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="account-page-link">
                            <p>Vous n'avez pas de compte ? <a href="register.php">S'inscrire</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    </body>
</html>

 