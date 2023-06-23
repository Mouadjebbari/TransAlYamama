
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
                    <form  class="account-form row"   method="POST" action="includes/reset-request.inc.php" onsubmit="return submitUserForm();">
                    <input type="hidden" name="_token" value="vhYZQm4xOfxA8WbxkROB1D7xq15bQeXj6jM5X03i">                    <div class="col-lg-12">
                    <input type="hidden" name="_token" value="vhYZQm4xOfxA8WbxkROB1D7xq15bQeXj6jM5X03i">                    <div class="col-xl-12">
                     
                    </div>
                    <div class="col-xl-12">
                        <div class="form--group">
                            <label for="value"  class="my_value">Email</label>
                            <input type="text" class="form--control " name="user_email" value="" required autofocus="off">

                                                    </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form--group">
                        <button name="reset-req-submit" type="submit"  class="contact-button">Envoyer le code de mot de passe</button>
                        </div>
                    </div>
                    <div class="">
                            <a href="login.php">Retour </a>
                        </div>
                </form>
            </div>
        </div>
    </section>
    </body>
</html>

 

