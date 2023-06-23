<?php include_once 'helpers/helper.php'; ?>
<?php subview('header.php'); 
require 'helpers/init_conn_db.php';                    
?> 
 	
<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200&display=swap" rel="stylesheet">
<!-- <style>
table {
  background-color: white;
}
@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
}
h1{
    font-family :'product sans' !important;
	color:#424242 ;
	font-size:40px !important;
	margin-top:20px;
	text-align:center;
}
body {
  background: #bdc3c7;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
th {
  font-size: 22px;
  /* font-family: 'Courier New', Courier, monospace; */
}
td {
  margin-top: 10px !important;
  font-size: 16px;
  font-weight: bold;
  /* color: #3931af; */
  color: #424242;
} -->

<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<!-- Mirrored from script.viserlab.com/viserbus/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2023 19:35:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> ViserBus - Home</title>
    <meta name="title" Content="ViserBus - Home">
    <meta name="description" content="Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit">
    <meta name="keywords" content="ViserBus,bus booking system,bus booking php script,single vendro bus booking system">

    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logoIcon/favicon.png">

    
    <link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="ViserBus - Home">
    
    <meta itemprop="name" content="ViserBus - Home">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="assets/images/seo/6210e34d4726e1645273933.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="ViserBus - Bus Ticket Booking System">
    <meta property="og:description" content="Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit ff">
    <meta property="og:image" content="assets/images/seo/6210e34d4726e1645273933.png"/>
    <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="https://script.viserlab.com/viserbus">
    
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
    
    </head>
    <body>
    <section class="inner-banner bg_img" style="background: url(assets/images/frontend/breadcrumb/61f14e10b48871643204112.jpg) center">
    <div class="container">
        <div class="inner-banner-content">
            <!-- <h2 class="title">Blog Page</h2> -->
        </div>
    </div>
</section>


        <section class="ticket-section padding-bottom section-bg">
            <main>
                  <?php if(isset($_POST['search_but'])) { 
                                            
                                            $dep_date = $_POST['dep_date'];                        
                                            $ret_date = $_POST['ret_date'];  
                                            $dep_city = $_POST['dep_city'];  
                                            $arr_city = $_POST['arr_city'];   
                                            $choix_aller_retour = $_POST['choix_aller_retour'];     
                                            $f_class = $_POST['f_class'];
                                            $passengers = $_POST['passengers'];
                                            if($dep_city === $arr_city){
                                              header('Location: index.php?error=sameval');
                                              exit();    
                                            }
                                            if($dep_city === '0') {
                                              header('Location: index.php?error=seldep');
                                              exit(); 
                                            }
                                            if($arr_city === '0') {
                                              header('Location: index.php?error=selarr');
                                              exit();              
                                            }
                                            ?>
                  <div class="container-md mt-2">
                    <br>
                    <h1 class="display-4 text-center"
                      >AUTOBUS DE : <br> <?php echo $dep_city; ?> 
                      à <?php echo $arr_city; ?> </h1><br>
                        <?php
                  if($choix_aller_retour == 'one'){     
                    $sql = 'SELECT * FROM bus WHERE source=? AND Destination =? AND 
                         DATE(departure)=? ORDER BY Price';
                        $stmt = mysqli_stmt_init($conn);
                        mysqli_stmt_prepare($stmt,$sql);                
                        mysqli_stmt_bind_param($stmt,'sss',$dep_city,$arr_city,$dep_date);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);   
                        
                        while ($row = mysqli_fetch_assoc($result)) {
                          $price = (int)$row['Price']*(int)$passengers;
                          if($choix_aller_retour === 'round') {
                            $price = $price*2;
                          }
                          
                          if($row['status'] === '') {
                            $status = "Pas encore Parti";
                            $alert = 'alert-primary';
                        } else if($row['status'] === 'dep') {
                            $status = "Disparu";
                            $alert = 'alert-info';
                        } else if($row['status'] === 'issue') {
                            $status = "Retardé";
                            $alert = 'alert-danger';
                        } else if($row['status'] === 'arr') {
                            $status = "Arrivé";
                            $alert = 'alert-success';
                        }                          
                          echo "<div class='ticket-item'>
                          <div class='ticket-item-inner'><BR>
                              <h4 class='bus-name'> ".$row['source']." - ".$row['Destination']."</h4><br><br>
                              <span class='ratting'><i class='las la-bus'></i><div>
                              <div class='alert ".$alert." text-center mb-0 pt-1 pb-1' 
                                  role='alert'>
                                  ".$status."
                              </div>
                          </div>  </span>
                          </div>
                          <div class='ticket-item-inner travel-time col-md-4 justify-content-center'>
                              <div class='bus-time'>
                                  <p class='time'>".date("d-m-Y", strtotime($row['departure']))."</p>
                                  <p class='place'>".$row['source']."</p>
                              </div>
                     
                          </div>
                          <div class='ticket-item-inner book-ticket'>
                              <p class='rent mb-0'>".$price." MAD</p>
                              <div class='seats-left mt-2 mb-3 fs--14px'>
                              Jours de congé: <div class='d-inline-flex flex-wrap' style='gap:5px'>
                                      <span class='badge badge--primary'>Vendredi</span>
                                  </div>
                              </div>";
                           if(isset($_SESSION['userId']) && $row['status'] === '') {   
                            echo " 
                            <form action='pass_form.php' method='post'>
                            <input name='bus_id' type='hidden' value=".$row['bus_id'].">
                            <input name='type' type='hidden' value=".$choix_aller_retour.">
                            <input name='passengers' type='hidden' value=".$passengers.">
                            <input name='price' type='hidden' value=".$price.">
                            <input name='ret_date' type='hidden' value=".$ret_date.">
                            <input name='class' type='hidden' value=".$f_class."> 
                              <button name='book_but' type='submit' 
                              class='btn btn--base'>
                                Select Seat
                            </button>
                            </form>                                                      
                            "; 
                          } elseif (isset($_SESSION['userId']) && $row['status'] === 'dep') {
                  echo "<a class='btn btn--base' >Not Available</a>";
                  } else {
                            echo '<a class="btn btn--base" href="login.php">Login to continue</a>';                          }
                          echo "</div>
                          <div class='ticket-item-footer'>
                              <div class='d-flex content-justify-center'>
                                  <span>
                                      <strong>Installations - </strong>
                                      <span class='facilities'>Bouteille d'eau</span>
                                      <span class='facilities'>Oreiller</span>
                                      <span class='facilities'>Wifi</span>
                                  </span>
                              </div>
                          </div>
                      </div>";
                  
                                          
                        }
                   }else{
                    $sql = 'SELECT * FROM bus WHERE source=? AND Destination =? AND 
                    DATE(departure)=? AND DATE(arrivale)=? ORDER BY Price';
                    
                   $stmt = mysqli_stmt_init($conn);
                   mysqli_stmt_prepare($stmt,$sql);                
                   mysqli_stmt_bind_param($stmt,'ssss',$dep_city,$arr_city,$dep_date,$ret_date);
                   mysqli_stmt_execute($stmt);
                   $result = mysqli_stmt_get_result($stmt);
                   
                   while ($row = mysqli_fetch_assoc($result)) {
                     $price = (int)$row['Price']*(int)$passengers;
                     if($choix_aller_retour === 'round') {
                       $price = $price*2;
                     }
                     
                     if($row['status'] === '') {
                         $status = "Pas encore Parti";
                         $alert = 'alert-primary';
                     } else if($row['status'] === 'dep') {
                         $status = "Disparu";
                         $alert = 'alert-info';
                     } else if($row['status'] === 'issue') {
                         $status = "Retardé";
                         $alert = 'alert-danger';
                     } else if($row['status'] === 'arr') {
                         $status = "Arrivé";
                         $alert = 'alert-success';
                     }       
                                   
                          echo "<div class='ticket-item'>
                          <div class='ticket-item-inner'><BR>
                              <h4 class='bus-name'> ".$row['source']." - ".$row['Destination']."</h4><br><br>
                              <span class='ratting'><i class='las la-bus'></i><div>
                              <div class='alert ".$alert." text-center mb-0 pt-1 pb-1' 
                                  role='alert'>
                                  ".$status."
                              </div>
                          </div>  </span>
                          </div>
                          <div class='ticket-item-inner travel-time jjj'>
                              <div class='bus-time'>
                                  <p class='time'>".date("d-m-Y", strtotime($row['departure']))."</p>
                                  <p class='place'>".$row['source']."</p>
                              </div>
                              <div class='bus-time'>
                                  <i class='las la-arrow-right'></i>
                              </div>
                              <div class='bus-time'>
                                  <p class='time'>".date("d-m-Y", strtotime($row['arrivale']))."</p>
                                  <p class='place'>".$row['Destination']."</p>
                              </div>
                          </div>
                          <div class='ticket-item-inner book-ticket'>
                              <p class='rent mb-0'>".$price." MAD</p>
                              <div class='seats-left mt-2 mb-3 fs--14px'>
                              Jours de congé: <div class='d-inline-flex flex-wrap' style='gap:5px'>
                                      <span class='badge badge--primary'>Vendredi</span>
                                  </div>
                              </div>";
                           if(isset($_SESSION['userId']) && $row['status'] === '') {   
                            echo " 
                            <form action='pass_form.php' method='post'>
                            <input name='bus_id' type='hidden' value=".$row['bus_id'].">
                            <input name='type' type='hidden' value=".$choix_aller_retour.">
                            <input name='passengers' type='hidden' value=".$passengers.">
                            <input name='price' type='hidden' value=".$price.">
                            <input name='ret_date' type='hidden' value=".$ret_date.">
                            <input name='class' type='hidden' value=".$f_class."> 
                              <button name='book_but' type='submit' 
                              class='btn btn--base'>
                                Select Seat
                            </button>
                            </form>                                                      
                            "; 
                          } elseif (isset($_SESSION['userId']) && $row['status'] === 'dep') {
                  echo "<a class='btn btn--base' >Not Available</a>";
                  } else {
                            // echo "<td>Login to continue</td>";
                            echo '<a class="btn btn--base" href="login.php">Login to continue</a>';                          }
                          echo "</div>
                          <div class='ticket-item-footer'>
                              <div class='d-flex content-justify-center'>
                                  <span>
                                      <strong>Facilities - </strong>
                                      <span class='facilities'>Water Bottle</span>
                                      <span class='facilities'>Pillow</span>
                                      <span class='facilities'>Wifi</span>
                                  </span>
                              </div>
                          </div>
                      </div>";
                      
                          
                        }
                  }
                        
                        ?>

                    

                </div>       
              <?php } ?>

          </main>
          </section>


        
    </body>

<?php subview('footer.php'); ?> 
</html> 
 