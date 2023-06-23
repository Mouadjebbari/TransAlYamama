<?php include_once 'helpers/helper.php'; 
require 'helpers/init_conn_db.php'; 
?>
<?php subview('header.php'); ?>
<link rel="stylesheet" href="assets/css/form.css">
<style>
.main-col {
    padding: 30px;
    background-color: whitesmoke;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
    margin-top: 50px;   
}
.pass-form {
    background-color: white;
    border: 5px dotted #607d8b;
    padding: 20px;
    margin-top: 30px;
}

body {
  background: #bdc3c7;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
  }
  h1 {
    font-size: 42px !important;
    margin-bottom: 20px;  
    font-family :'product sans' !important;
    font-weight: bolder;
  }
  input {
    border :0px !important;
    border-bottom: 2px solid #424242 !important;
    color :#424242 !important;
    border-radius: 0px !important;
    font-weight: bold !important;   
    margin-bottom: 10px;
  }
  label {
    color : #828282 !important;
    font-size: 19px;
  }  
@media screen and (max-width: 900px){
    body {
  background: #bdc3c7;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}  
}
#seatsDiagram td,
    #displaySeats td{
        /* padding: 1rem; */
        text-align: center;
        margin: 0.3rem;
        width: 60px;
        border: 3px solid transparent;
        display: inline-block;
        background-color: #efefef;
        border-radius: 5px;
    }

    #displaySeats{
        margin: 3rem auto 1rem auto;
    }


    #seatsDiagram{
        width: 100%;
        margin-bottom: 1rem;
    }

    #seatsDiagram  td.selected{
        background-color: greenyellow;
        -webkit-animation-name: rubberBand;
        animation-name: rubberBand;
        animation-duration: 300ms;
        animation-fill-mode: both;
    }

    #seatsDiagram td.notAvailable,
    #displaySeats td.notAvailable
    {
        color: white;
        background-color: #db2619;
    }

    #seatsDiagram td:not(.space,.notAvailable):hover{
        cursor: pointer;
        border-color:greenyellow;
    }

    #seatsDiagram .space,
    #displaySeats .space{
        background-color: white;
        border: none;
    }

    #routeSugg{
        display: flex;
        justify-content: space-between;
    }
    
    @-webkit-keyframes rubberBand {
        0% {
            -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1);
        }

        30% {
            -webkit-transform: scale3d(1.25, 0.75, 1);
                    transform: scale3d(1.25, 0.75, 1);
        }

        40% {
            -webkit-transform: scale3d(0.75, 1.25, 1);
                    transform: scale3d(0.75, 1.25, 1);
        }

        50% {
            -webkit-transform: scale3d(1.15, 0.85, 1);
                    transform: scale3d(1.15, 0.85, 1);
        }

        65% {
            -webkit-transform: scale3d(.95, 1.05, 1);
                    transform: scale3d(.95, 1.05, 1);
        }

        75% {
            -webkit-transform: scale3d(1.05, .95, 1);
                    transform: scale3d(1.05, .95, 1);
        }

        100% {
            -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1);
        }
        }

        @keyframes rubberBand {
        0% {
            -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1);
        }

        30% {
            -webkit-transform: scale3d(1.25, 0.75, 1);
                    transform: scale3d(1.25, 0.75, 1);
        }

        40% {
            -webkit-transform: scale3d(0.75, 1.25, 1);
                    transform: scale3d(0.75, 1.25, 1);
        }

        50% {
            -webkit-transform: scale3d(1.15, 0.85, 1);
                    transform: scale3d(1.15, 0.85, 1);
        }

        65% {
            -webkit-transform: scale3d(.95, 1.05, 1);
                    transform: scale3d(.95, 1.05, 1);
        }

        75% {
            -webkit-transform: scale3d(1.05, .95, 1);
                    transform: scale3d(1.05, .95, 1);
        }

        100% {
            -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1);
        }
        }

        .rubberBand {
        -webkit-animation-name: rubberBand;
                animation-name: rubberBand;
        }
</style>
<?php
   if(isset($_GET['error'])) {
        if($_GET['error'] === 'invdate') {
          echo '<script>alert("Invalid date of birth")</script>';
      } else if($_GET['error'] === 'moblen') {
          echo '<script>alert("Invalid contact info need to be 10 numbers")</script>';
      } else if($_GET['error'] === 'sqlerror') {
          echo"<script>alert('Database error')</script>";
      }
    }
    ?>
<?php if(isset($_SESSION['userId']) && isset($_POST['book_but'])) {   
    $bus_id = $_POST['bus_id'];
    $passengers = $_POST['passengers']; 
    $price = $_POST['price'];
    $class = $_POST['class'];
    $type = $_POST['type'];
    $ret_date = $_POST['ret_date'];
         $busno = $bus_id;
                                $sql = "SELECT * FROM ticket WHERE bus_id='$busno'";
                                $result = mysqli_query($conn, $sql);

                                $booked_seats = array();
                                if(mysqli_num_rows($result))
                                {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $booked_seats[] = $row["seat_no"];
                                        // You can perform additional operations with the row data here
                                    }
                                    
                                }
                                $seats_string = "";
                                if(!empty($booked_seats)){
                                    $seats_string = implode(',', $booked_seats);
                                }
}

                              
                          
                        
?>    
<main>
<section class="inner-banner bg_img" style="background: url(assets/images/frontend/breadcrumb/61f14e10b48871643204112.jpg) center">
    <div class="container">
        <div class="inner-banner-content">
            <h2 class="title">Détails et choix du Siège</h2>
        </div>
    </div>
</section>
<div class="container mb-5">
    <div class="col-md-12 main-col">
        <h1 class="text-center text-secondary">DÉTAILS DU PASSAGER</h1>  
        <form action="includes/pass_detail.inc.php" class="needs-validation mt-4" 
            method="POST">

            <input type="hidden" name="type" value=<?php echo $type; ?>>   
            <input type="hidden" name="ret_date" value=<?php echo $ret_date; ?>>   
            <input type="hidden" name="class" value=<?php echo $class; ?>>   
            <input type="hidden" name="passengers" value=<?php echo $passengers; ?>>   
            <input type="hidden" name="price" value=<?php echo $price; ?>>   
            <input type="hidden" name="bus_id" value=<?php echo $bus_id; ?>>   
        <?php for($i=1;$i<=$passengers;$i++) {
            echo'   
            <div class="pass-form">  
            <div class="form-row">
                <div class="col-md">
                    <div class="input-group">
                        <label for="firstname'.$i.'">Prénom</label>
                        <input type="text" name="firstname[]" id="firstname'.$i.'" class="pl-0 pr-0" 
                            required style="width: 100%;">
                    </div>
                </div>
                <div class="clear" style="display: none;">
                    <div class="input-group">
                        <label for="midname'.$i.'">Middlename</label>
                        <input type="text" name="midname[]" id="midname'.$i.'" class="pl-0 pr-0"
                            required style="width: 100%;" value="JBR">
                    </div>
                </div>

                <div class="col-md">
                    <div class="input-group">
                        <label for="lastname'.$i.'">Nom</label>
                        <input type="text" name="lastname[]" id="lastname'.$i.'" class="pl-0 pr-0"
                             required style="width: 100%;">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md">
                    <div class="input-group">
                        <label for="mobile'.$i.'">N° de contact</label>
                        <input type="number" name="mobile[]" min="0" id="mobile'.$i.'" class="pl-0 pr-0" required style="padding: 20px 0 0 2px; margin: 0 0 0 -1px;">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group mt-3"> 
                        <label for="dob">Date de naissance</label>
                        <input id="date" name="date[]" type="date"
                             required>
                    </div>
                </div>
            </div>';
			?><BR></BR>
      <div style="text-align: center;">
			<div class="mb-3">
			<label>Choisissez votre siège   </label>
                     
                           <?php if(!empty($booked_seats)){?>
                        <table id="seatsDiagram" data-seats="<?php echo $seats_string; ?>">
                        <?php }else{ ?>
                        <table id="seatsDiagram">
                        <?php } ?>
                                <tr>
                                <td class="driver"><img src="wheel.svg" alt="Driver"></td>
                                <td class="space">&nbsp;</td>
                                <td class="space">&nbsp;</td>
                                <td class="space">&nbsp;</td>
                                <td class="door" colspan="2"><img src="door.svg" alt="Driver"></td>
                              </tr>
                              <tr>
                                <td id="seat-1" data-name="1">1</td> 
                                <td id="seat-2"  data-name="2">2</td>
                                <td class="space" colspan="2">&nbsp;</td>
                                <td id="seat-3" data-name="3">3</td>
                                <td id="seat-4" data-name="4">4</td>
                              </tr>
                              <tr>
                                <td id="seat-5" data-name="5">5</td> 
                                <td id="seat-6" data-name="6">6</td>
                                <td class="space" colspan="2">&nbsp;</td>
                                <td id="seat-7" data-name="7">7</td>
                                <td id="seat-8" data-name="8">8</td>
                              </tr>
                              <tr>
                                <td id="seat-9" data-name="9">9</td> 
                                <td id="seat-10" data-name="10">10</td>
                                <td class="space" colspan="2">&nbsp;</td>
                                <td id="seat-11" data-name="11">11</td>
                                <td id="seat-12" data-name="12">12</td>
                              </tr>
                              <tr>
                                <td id="seat-13" data-name="13">13</td> 
                                <td id="seat-14" data-name="14">14</td>
                                <td class="space" colspan="2">&nbsp;</td>
                                <td id="seat-15" data-name="15">15</td>
                                <td id="seat-16" data-name="16">16</td>
                              </tr>
                              <tr>
                                <td id="seat-17" data-name="17">17</td> 
                                <td id="seat-18" data-name="18">18</td>
                                <td class="space" colspan="2">&nbsp;</td>
                                <td id="seat-19" data-name="19">19</td>
                                <td id="seat-20" data-name="20">20</td>
                              </tr>
                              <tr>
                                <td id="seat-21" data-name="21">21</td> 
                                <td id="seat-22" data-name="22">22</td>
                                <td class="space" colspan="2">&nbsp;</td>
                                <td id="seat-23" data-name="23">23</td>
                                <td id="seat-24" data-name="24">24</td>
                              </tr>
                              <tr>
                                <td id="seat-25" data-name="25">25</td> 
                                <td id="seat-26" data-name="26">26</td>
                                <td class="space" colspan="2">&nbsp;</td>
                                <td id="seat-27" data-name="27">27</td>
                                <td id="seat-28" data-name="28">28</td>
                              </tr>
                              <tr>
                                <td id="seat-29" data-name="29">29</td> 
                                <td id="seat-30" data-name="30">30</td>
                                <td class="space" colspan="2">&nbsp;</td>
                                <td id="seat-31" data-name="31">31</td>
                                <td id="seat-32" data-name="32">32</td>
                              </tr>
                              <tr>
                                <td id="seat-29" data-name="29">33</td> 
                                <td id="seat-30" data-name="30">34</td>
                                <td class="space" colspan="2">&nbsp;</td>
                                <td id="seat-31" data-name="31">35</td>
                                <td id="seat-32" data-name="32">36</td>
                              </tr>
                              <tr>
                                <td id="seat-29" data-name="29">37</td> 
                                <td id="seat-30" data-name="30">38</td>
                                <td class="space" colspan="2">&nbsp;</td>
                                <td id="seat-31" data-name="31">39</td>
                                <td id="seat-32" data-name="32">40</td>
                              </tr>
                              <tr>
                                <td class="space">&nbsp;</td>
                                <td class="space">&nbsp;</td>
                                <td class="space">&nbsp;</td>
                                <td class="space">&nbsp;</td>
                                <td class="space">&nbsp;</td>
                                <td class="space">&nbsp;</td>
                              </tr>
                                </table>
							              	<input type="hidden" id="seatInput" class="form-control" name="seatInput" readonly="">
                            </div>
			
            </div>
            
			
			<?php
		
			}  ?>    
                   
        </form>
            <div class="col text-center">
                    <button name="pass_but" type="submit" 
                    class="btn btn-success mt-4">
                    <div style="font-size: 1.5rem;">
                    <i class="fa fa-lg fa-arrow-right"></i> Proceed  
                    </div>
                    </button>
            </div>               
    </div>
    </div>
    </div>










    <?php subview('footer.php'); ?> 
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
  
  
  
  // Selecting Seats
const seatDiagram = document.querySelector("#seatsDiagram");
const seatInputInput = document.querySelector("#seatInput");
seatDiagram.addEventListener("click", selectSeat);
let selected_id; 

function selectSeat(evt)
{
  if(evt.target.nodeName == "TD" && !evt.target.className.includes("space") && !evt.target.className.includes("notAvailable"))
  {
    if(!selected_id || evt.target.dataset.name === selected_id)
    {
      selected_id = evt.target.dataset.name;
      evt.target.classList.toggle("selected");

      if(!evt.target.className.includes("selected"))
      {
        selected_id = "";
      }
	  
	  console.log(selected_id);

      seatInput.value = selected_id;
    }
  }
}


let booked_seats = "";

if(seatDiagram)
{
    booked_seats = seatDiagram.dataset.seats;
}
if(booked_seats)
{
    // Color the taken seats as purple
    booked_seats = booked_seats.split(",");

    booked_seats.forEach(seatNo => {
        const seat = seatDiagram.querySelector(`#seat-${seatNo}`);
        seat.classList.add("notAvailable");
    });
}
  
  
});
</script>
</main>

