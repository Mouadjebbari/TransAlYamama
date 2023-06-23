<?php include_once 'helpers/helper.php'; ?>
<?php subview('header.php'); ?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<style>
nav {
    display: none !important;
}

@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
}
h2.brand {
    /* font-style: italic; */
    font-size: 27px !important;
}
.vl {
  border-left: 6px solid #424242;
  height: 400px;
}
.text-light2 {
    color: #d9d9d9;
}
h3 {
    /* font-weight: lighter !important; */
    font-size: 21px !important;
    margin-bottom: 20px;  
    font-family: Tahoma, sans-serif;
    font-weight: lighter;
}
p.head {
    text-transform: uppercase;
    font-family: arial;
    font-size: 17px;
    margin-bottom: 10px ;
    color: grey;  
}
p.txt {
    text-transform: uppercase;
    font-family: arial;
    font-size: 25px;
    font-weight: bolder;
}
.bord {
    border: 2px solid lightgray;
    /* border-left: 0px !important; */
}
.out {
    /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);   */
    background-color: white;
    padding-left: 25px;
    padding-right: 0px;
    padding-top: 20px;
    border: 2px solid lightgray;
    border-top-left-radius: 25px;
    border-bottom-left-radius: 25px;
}
h2 {
    font-weight: lighter !important;
    font-size: 35px !important;
    margin-bottom: 20px;  
    font-family :'product sans' !important;
    font-weight: bolder;
}
h1 {
    font-weight: lighter !important;
    font-size: 45px !important;
    margin-bottom: 20px;  
    font-family :'product sans' !important;
    font-weight: bolder;
  }
</style>
<main>
  <?php if(isset($_SESSION['userId'])) {   
    require 'helpers/init_conn_db.php';   ?>     
    <div class="container mb-5"> 
    <!-- <h1 class="text-center text-light mt-4 mb-4">E-TICKETS</h1> -->

      <?php 
    if(isset($_POST['print_but'])) {
        $ticket_id = $_POST['ticket_id'];      
      $stmt = mysqli_stmt_init($conn);
      $sql = 'SELECT * FROM Ticket WHERE ticket_id=?';
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt,$sql)) {
          header('Location: ticket.php?error=sqlerror');
          exit();            
      } else {
          mysqli_stmt_bind_param($stmt,'i',$ticket_id);            
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          if ($row = mysqli_fetch_assoc($result)) {   
            $sql_p = 'SELECT * FROM Passenger_profile WHERE passenger_id=?';
            $stmt_p = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt_p,$sql_p)) {
                header('Location: ticket.php?error=sqlerror');
                exit();            
            } else {
                mysqli_stmt_bind_param($stmt_p,'i',$row['passenger_id']);            
                mysqli_stmt_execute($stmt_p);
                $result_p = mysqli_stmt_get_result($stmt_p);
                if($row_p = mysqli_fetch_assoc($result_p)) {
                  $sql_f = 'SELECT * FROM bus WHERE bus_id=?';
                  $stmt_f = mysqli_stmt_init($conn);
                  if(!mysqli_stmt_prepare($stmt_f,$sql_f)) {
                      header('Location: ticket.php?error=sqlerror');
                      exit();            
                  } else {
                      mysqli_stmt_bind_param($stmt_f,'i',$row['bus_id']);            
                      mysqli_stmt_execute($stmt_f);
                      $result_f = mysqli_stmt_get_result($stmt_f);
                      if($row_f = mysqli_fetch_assoc($result_f)) {
                        $date_time_dep = $row_f['departure'];
                        $date_dep = substr($date_time_dep,0,10);
                        $time_dep = substr($date_time_dep,10,6) ;    
                        $date_time_arr = $row_f['arrivale'];
                        $date_arr = substr($date_time_arr,0,10);
                        $time_arr = substr($date_time_arr,10,6) ; 
                        if($row['class'] === 'E') {
                            $class_txt = 'ECONOMY';
                        } else if($row['class'] === 'B') {
                            $class_txt = 'BUSINESS';
                        }
                        echo '
                        <div class="row mb-5">                                                         
                        <div class="col-8 out">
                                    <div class="row ">                                                     
                                        <div class="col">
                                            <h2 class="text-secondary mb-0 brand">
                                                TransAlYamama</h2> 
                                        </div>
                                    
                                    </div>
                                    <hr>
                                    <div class="row mb-3">  
                                                <div class="col-4">
                                                    <p class="txt">Passenger</p>
                                                    <p class="head">
                                                    '.$row_p['f_name'].'  '.$row_p['l_name'].'
                                                    </p>                              
                                                </div>           
                                            <div class="col-4">
                                                <p class="txt">from</p>
                                                <p class="head">'.$row_f['source'].'</p>
                                            </div>
                                            <div class="col-4">
                                                <p class="txt">to</p>
                                                <p class="head">'.$row_f['Destination'].'</p>                
                                            </div>
                                    </div>

                                    <div class="row mb-3">
                                    <div class="col-4">
                                        <p class="txt">departure</p>
                                        <p class="head">'.$date_dep.'</p>
                                        <p class="head">'.$time_dep.'</p>  
                                    </div>            
                                    <div class="col-4">
                                        <p class="txt">arrival</p>
                                        <p class="head">'.$date_arr.'</p>
                                        <p class="head">'.$time_arr.'</p>  
                                    </div>           
                                    <div class="col-4">
                                        <p class="txt">seat</p>
                                        <p class="h4 font-weight-bold mb-3">'.$row['seat_no'].'</p>
                                    </div>                
                                    </div>  
                                    <div class="row" >
                                        <h3 class="text-light2 text-center mt-2 mb-0">
                                        &nbsp 
                                            Please be at the gate at boarding time</h3>   
                                    </div>

                        </div>


                        <div class="col-3 pl-0" style="background-color:black !important;
                            padding:20px; border-top-right-radius: 25px; border-bottom-right-radius: 25px;">
                                                        
                            <div class="row justify-content-center">
                                <div class="col-12">                                    
                                    <img src="logo.png" class="mx-auto d-block"
                                    height="200px" width="200px" alt="">
                                </div>                                
                            </div> </br> </br>
                            <div class="row">
                                <h3 class="text-light2 text-center mt-2 mb-0">
                                &nbsp Thank you for choosing us. 
                                    </h3>   
                            </div>                            
                        </div>                                        
                        </div>                                               
                      ' ;
                      }
                  }                  
                }
            }                                    
          }
      }   
      
    }   ?> 

    </div>
  </main>
  <?php } ?>
  <script>
  window.print();
  </script>

