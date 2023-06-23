<?php include_once 'helpers/helper.php'; ?>
<?php subview('header.php'); 
    require 'helpers/init_conn_db.php';                      
	?> 	
<!-- <style>
/*--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
--*/
footer {
  /* position: absolute; */
  bottom: 0;
  width: 100%;
  height: 2.5rem;            /* Footer height */
}
form.logout_form {
	background: transparent;
	padding: 10px !important;
}
body {
	/* background:url('assets/images/bg2.jpg') no-repeat 0px 0px;
	background-size: cover;
	font-family: 'Open Sans', sans-serif;
	background-attachment: fixed;
    background-position: center; */
	background: #bdc3c7;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

h1,h2,h3,h4,h5,h6{
	font-family: 'Montserrat', sans-serif;
	
}
h5.text-light {
	margin-top: 10px;
}
@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
}
h1{
    font-family :'product sans' !important;
	color:cornflowerblue ;
	font-size:50px;
	margin-top:50px;
	text-align:center;
}

.main-agileinfo{
	margin:50px auto;
	width:50%;
}
/*--SAP--*/
.sap_tabs{
	clear:both;
	padding: 0;
}
.tab_box{
	background:#fd926d;
	padding: 2em;
}
.top1{
	margin-top: 2%;
}
.resp-tabs-list {
    list-style: none;
    padding: 15px 0px;
    margin: 0 auto;
    text-align: center;
	/* background: rgb(33, 150, 243); */
	background: rgb(78 103 114);
}
.resp-tab-item {
    font-size: 1.1em;
    font-weight: 500;
    cursor: pointer;
    display: inline-block;
    margin: 0;
    text-align: center;
    list-style: none;
    outline: none;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -ms-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
    text-transform: uppercase;
    margin: 0 1.2em 0;
	color:#b1b1b1;
	padding:7px 15px;
}

.resp-tab-active {
	color:#fff;	
}
.resp-tabs-container {
	padding: 0px;
	clear: left;	
}
h2.resp-accordion {
	cursor: pointer;
	padding: 5px;
	display: none;
}
.resp-tab-content {
	display: none;
}
.resp-content-active, .resp-accordion-active {
   display: block;
}
form {
    background:rgba(3, 3, 3, 0.57);
    padding: 25px;
}

h3 {
    font-size: 16px;
    color:rgb(255, 255, 255);
    margin-bottom: 7px;
}
.from,.to,.date,.depart,.return{
	width:48%;
	float:left;
}

.from,.to,.date{
	margin-bottom:40px;
}
.from,.date,.depart{
	margin-right:4%;
}
input[type="text"]{
	padding:10px;
	width:93%;
	float:left;
}
input#datepicker,input#datepicker1,input#datepicker2,input#datepicker3 {
    width: 85%;
	margin-bottom:10px;
}
select#w3_country1 {
    padding: 10px;
	float:left;
}
label.checkbox {
  display: inline-block;
}
.checkbox {
    position: relative;
    font-size: 0.95em;
    font-weight: normal;
    color:#dedede;
    padding: 0em 0.5em 0em 2em;
}
.checkbox i {
    position: absolute;
    bottom: 1px;
    left: 2px;
    display: block;
    width: 18px;
    height: 18px;
    outline: none;
    background: #fff;
    border: 1px solid #6A67CE;
}
.checkbox i {
    font-size: 20px;
    font-weight: 400;
    color: #999;
    font-style: normal;
}
.checkbox input:checked + i:after {
    opacity: 1;
}
.checkbox input + i:after {
    position: absolute;
    opacity: 0;
    transition: opacity 0.1s;
    -o-transition: opacity 0.1s;
    -ms-transition: opacity 0.1s;
    -moz-transition: opacity 0.1s;
    -webkit-transition: opacity 0.1s;
}
.checkbox input + i:after {
    content: '';
    background: url("assets/images/tick.png") no-repeat 5px 5px;
    top: -1px;
    left: -1px;
    width: 15px;
    height: 15px;
    font: normal 12px/16px FontAwesome;
    text-align: center;
}
input[type="checkbox"]{
	opacity:0;
	margin:0;
	display:none;
}

.quantity-select .entry.value-minus {
    margin-left: 0;
}
.value-minus, .value-plus {
    height: 40px;
    line-height: 24px;
    width: 40px;
    margin-right: 3px;
    display: inline-block;
    cursor: pointer;
    position: relative;
    font-size: 18px;
    color: #fff;
    text-align: center;
    -webkit-user-select: none;
    -moz-user-select: none;
    border: 1px solid #b2b2b2;
    vertical-align: bottom;
}

.value {
    cursor: default;
    width: 40px;
    height:33px;
    color: #000;
    line-height: 24px;
    border: 1px solid #E5E5E5;
    background-color: #fff;
    text-align: center;
    display: inline-block;
    margin-right: 3px;
	padding-top:7px;
}

.quantity-select .entry.value-minus:hover, .quantity-select .entry.value-plus:hover {
    background:rgba(0, 0, 0, 0.6);;
}
.value-minus, .value-plus {
    height: 40px;
    line-height: 24px;
    width: 40px;
    margin-right: 3px;
    display: inline-block;
    cursor: pointer;
    position: relative;
    font-size: 18px;
    text-align: center;
    -webkit-user-select: none;
    -moz-user-select: none;
    border: 1px solid #b2b2b2;
    vertical-align: bottom;
}
.quantity-select .entry.value-minus:before, .quantity-select .entry.value-plus:before {
    content: "";
    width: 13px;
    height: 2px;
    background: #fff;
    left: 50%;
    margin-left: -7px;
    top: 50%;
    margin-top: -0.5px;
    position: absolute;
}
.quantity-select .entry.value-plus:after {
    content: "";
    height: 13px;
    width: 2px;
    background: #fff;
    left: 50%;
    margin-left: -1.4px;
    top: 50%;
    margin-top: -6.2px;
    position: absolute;
}

.numofppl,.adults,.child{
	width:50%;
	float:left;
}
.class{
	width:48%;
	float:left;
}
input[type="submit"] {
    font-size: 18px;
    color: #fff;
    background:#4caf50;
    border: none;
    outline: none;
    padding: 10px 20px;
    margin-top: 21px;
	cursor:pointer;
	 transition: 0.5s all ease;
    -webkit-transition: 0.5s all ease;
    -moz-transition: 0.5s all ease;
    -o-transition: 0.5s all ease;
    -ms-transition: 0.5s all ease;
}
input[type="submit"]:hover  {
    background:#212121;
	color:#fff;
}
/*-- load-more --*/
ul#myList{
	margin-bottom:2em;
}
#myList li{ 
	display:none;
	list-style-type:none;
}
#loadMore,#showLess {
	display: inline-block;
    cursor: pointer;
    padding: 7px 20px;
    background: #fff;
    font-size: 14px;
    color: #fff;
    transition: 0.5s all ease;
    -webkit-transition: 0.5s all ease;
    -moz-transition: 0.5s all ease;
    -o-transition: 0.5s all ease;
    -ms-transition: 0.5s all ease;
    background: rgb(33, 150, 243);
}
#loadMore:hover  {
    background:#212121;
	color:#fff;
}

.spcl{
	position:relative;
}

.ui-datepicker {width:16.2%;
	padding: 0 0em 0;
	}
	.ui-datepicker .ui-datepicker-header {
	  position: relative;
	  padding: .56em 0;
	  background:rgb(33, 150, 243);;
	  text-transform: uppercase;
	}

form.blackbg{
	background:rgba(3, 3, 3, 0.57);
}
/*-- //load-more --*/
.footer-w3l {
    margin: 50px 0 15px 0;
}
.footer-w3l p{
	font-size:14px;
	text-align:center;
	color:#000;
	line-height:27px;
}
.footer-w3l p a{
	color:#000;
}
.footer-w3l p a:hover{
	text-decoration:underline;
}
/*-- responsive --*/
 @media (max-width:1440px){
	.checkbox {
		font-size: 0.9em;
	}
}
 @media (max-width:1366px){
	.main-agileinfo {
		width: 53%;
	}
}
 @media (max-width:1280px){
	.main-agileinfo {
		width: 57%;
	}
}
 @media (max-width:1080px){
	h1 {
		color: #fff;
		font-size: 47px;
	}
	.main-agileinfo {
		width: 68%;
	}
}
 @media (max-width:1024px){
	.main-agileinfo {
		width: 71%;
	}
}
 @media (max-width:991px){
	.from, .to, .date, .depart, .return {
		width: 49%;
		float: left;
	}
	.from, .date, .depart {
		margin-right: 2%;
	}
}
 @media (max-width:966px){
	.main-agileinfo {
		width: 73%;
	}
	
}
 @media (max-width:900px){
	.checkbox {
		font-size: 0.82em;
	}
}
 @media (max-width:800px){
	.main-agileinfo {
		width: 81%;
	}
}
 @media (max-width:768px){
	.main-agileinfo {
		width: 85%;
	}
	.checkbox i {
		width: 15px;
		height: 15px;
	}
	.checkbox input + i:after {
		top: -3px;
		left: -3px;
	}
}
 @media (max-width:736px){
	.main-agileinfo {
		width: 88%;
		margin:40px auto;
	}
	h1 {
		color: #fff;
		font-size: 43px;
		margin-top:40px;
	}
	input[type="text"] {
		padding: 10px;
		width: 90%;
		float: left;
	}
	input#datepicker, input#datepicker1, input#datepicker2, input#datepicker3 {
		width: 79%;
	}
	.value-minus, .value-plus {
		height: 30px;
		width: 30px;
	}
	.value {
		width: 33px;
		height: 25px;
		padding-top: 6px;
	}
}
 @media (max-width:667px){
	.numofppl {
		width: 60%;
	}
	.roundtrip .date {
		width: 68%;
		float:left;
	}
	.roundtrip .class{
		width:30%;
		float:left;
	}
	.oneway .depart,.multicity .depart{
		width: 68%;
	}
}
 @media (max-width:600px){
	select#w3_country1 {
		width: 100%;
	}
}
 @media (max-width:568px){
	h1 {
		font-size: 40px;
	}
	.resp-tab-item {
		padding: 7px 13px;
		margin: 0 1em 0;
	}
	.numofppl {
		width: 70%;
	}
}
 @media (max-width:480px){
	.resp-tab-item {
		padding: 7px 7px;
		margin: 0 0.7em 0;
	}
	 input[type="text"] {
		padding: 10px;
		width: 86%;
		float: left;
	}
	.roundtrip .date {
		width: 100%;
		float: left;
	}
	input#datepicker, input#datepicker1, input#datepicker2, input#datepicker3 {
		width: 86%;
	}
	.roundtrip .class{
		width: 100%;
		float: left;
		margin-bottom:40px;
	}
	.numofppl {
		width: 80%;
	}
	.oneway .depart, .multicity .depart {
		width: 100%;
	}
}
 @media (max-width:414px){
	h1 {
		font-size: 35px;
		margin-top:30px;
	}
	.resp-tab-item {
		padding: 7px 7px;
		margin: 0 0.5em 0;
		font-size: 15px;
	}
	.numofppl {
		width: 100%;
	}
}
 @media (max-width:384px){
	h1 {
		font-size: 32px;
	}
	h3 {
		font-size: 15px;
	}
	.from, .to, .date, .depart, .return {
		width: 100%;
		float: left;
		margin-bottom:25px;
	}
	.date{
		margin-bottom:0;
	}
	.resp-tab-item {
		padding: 7px 7px;
		margin: 0 0em 0;
		font-size: 15px;
	}
	.class {
		width: 100%;
		float: left;
		margin-bottom: 40px;
	}
	input[type="text"] {
		padding: 10px;
		width: 91.5%;
	}
	input#datepicker, input#datepicker1, input#datepicker2, input#datepicker3 {
		width: 91.5%;
	}
}
 @media (max-width:320px){
	h1 {
		font-size: 26px;
		margin-top:25px;
	}
	form{
		padding:15px;
	}
	.resp-tab-item {
		padding: 7px 5px;
		margin: 0 0em 0;
		font-size: 14px;
	}
	.adults, .child {
		width: 100%;
		float: left;
	}
	.adults{
		margin-bottom:25px;
	}
}
@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
}
h1 {
	font-family: 'product sans';
    /* font-style: italic; */
    font-size: 40px !important;	
}	
</style> -->
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
    <link rel="stylesheet" href="assets/templates/basic/css/bootstrap.min.css">
    <!-- Icon Link -->
    <link rel="stylesheet" href="assets/global/css/all.min.css">
    <link rel="stylesheet" href="assets/global/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/templates/basic/css/flaticon.css">

    <!-- Plugings Link -->
    <link rel="stylesheet" href="assets/templates/basic/css/slick.css">
    <link rel="stylesheet" href="assets/global/css/select2.min.css">
    <link rel="stylesheet" href="assets/templates/basic/css/jquery-ui.css">

    <!-- Cookie Link -->
    <link rel="stylesheet" href="assets/templates/basic/css/cookie.css">
    <!-- Custom Link -->
    <link rel="stylesheet" href="assets/templates/basic/css/main.css">
    <link rel="stylesheet" href="assets/templates/basic/css/custom.css">
    <link rel="stylesheet" href="assets/templates/basic/css/colorf972.css?color=0E9E4D">
    
    </head>
<?php
    if(isset($_GET['error'])) {
        if($_GET['error'] === 'sameval') {
		  echo '<script>alert("Select different value for departure city and arrival city")</script>';
      } else if($_GET['error'] === 'seldep') {
          echo '<script>alert("Select Departure city")</script>';
      } else if($_GET['error'] === 'selarr') {
          echo"<script>alert('Select Arrival city')</script>";
      }
    }
	
?>
<!-- log on to codeastro.com for more projects -->
<link rel="stylesheet" type="text/css"
        href="styles%2c_bootstrap4%2c_bootstrap.min.css%2bplugins%2c_font-awesome-4.7.0%2c_css%2c_font-awesome.min.css%2bplugins%2c_OwlCarousel2-2.2.1%2c_owl.carousel.css%2bplugins%2c_OwlCarousel2-2.2.1%2c_owl" />
	<meta name="keywords" content="" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } ;</script>			
	<section class="banner-section" style="background: url(assets/images/frontend/banner/61f118f07f1151643190512.png) repeat-x bottom;">
		<div class="container">
        	<div class="banner-wrapper">
				<div class="banner-content">
					<h1 class="title">Obtenez votre billet en ligne, facilement et en toute sécurité</h1>
					<a href="blog.php" class="cmn--btn">Obtenez un billet maintenant</a>
				</div>
           	 <div class="ticket-form-wrapper">
					<div class="ticket-header nav-tabs nav border-0">
						<h4 class="title">Choisissez votre billet</h4>
					</div>
               	 <div class="tab-content">
                    	<div class="tab-pane fade show active" id="one-way">
							<form action="book_bus.php"  method="POST" onsubmit="return check(this)" class="ticket-form row g-3 justify-content-center m-0">
									<!-- <input type="hidden" name="type" value="round"> -->
		<div class="col-md-12">
										<div class="form--group">
                                        <label><input type="radio"  name="choix_aller_retour" value="one"  onclick="hideReturnDate()"> Aller </label>
                                         <label><input type="radio" name="choix_aller_retour" value="round"  onclick="showReturnDate()" checked> Aller et retour</label>
                                        </div></div>
									<div class="col-md-6">
										<div class="form--group">
												<i class="las la-location-arrow"></i>
												<!-- <h3 style="color: rgba(255, 255, 255, 0.767);">From</h3> -->
												<?php
												$sql = 'SELECT * FROM Cities ';
												$stmt = mysqli_stmt_init($conn);
												mysqli_stmt_prepare($stmt,$sql);         
												mysqli_stmt_execute($stmt);          
												$result = mysqli_stmt_get_result($stmt);    
												echo '<select class="form--control select2"  name="dep_city" id="w3_country1">
												<option value="0" selected disabled >Départ</option>';
												while ($row = mysqli_fetch_assoc($result)) {
												echo '<option value='. $row['city']  .'>'. 
													$row['city'] .'</option>';
												}
												?>
												</select>  
										</div>
									</div>

								<div class="col-md-6">
									<div class="form--group">
											<!-- <h3 style="color: rgba(255, 255, 255, 0.767);">To</h3> -->
											<i class="las la-map-marker"></i>
											<?php
											$sql = 'SELECT * FROM Cities ';
											$stmt = mysqli_stmt_init($conn);
											mysqli_stmt_prepare($stmt,$sql);         
											mysqli_stmt_execute($stmt);          
											$result = mysqli_stmt_get_result($stmt);    
											echo '<select value="0" class="form--control select2" name="arr_city" id="w3_country1">
											<option selected disabled>Arrivée</option>';
											while ($row = mysqli_fetch_assoc($result)) {
											echo '<option value='. $row['city']  .'>'. 
												$row['city'] .'</option>';
											}
											?>
											</select>							
									</div>
								</div>

									<!-- <div class="clear"></div> -->


									<!-- <div class="col-md-12">
										<div class="form--group">
											<i class="las la-calendar-check"></i>
											<input type="text" name="date_of_journey" class="form--control datepicker" placeholder="Departure Date" autocomplete="off">
										</div>
									</div> -->

									<div class="col-md-12">
										<div class="form--group">
											<i class="las la-calendar-check"></i>
											<input class="form--control datepicker" name="dep_date" type="DATE" placeholder="Departure Date" autocomplete="off"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
										</div>
									</div>
									<div class="col-md-12" id="return_date_div">
										<div class="form--group">
											<i class="las la-calendar-check"></i>
											<input class="form--control datepicker"  name="ret_date" type="DATE" placeholder="Retourn Date" autocomplete="off"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" >
										</div>
									</div>
                                    <div class="col-md-6">
										<div class="form--group">
										<input style="width:100%" class="btn btn-success" type="submit" name="search_but" id="btn"  value="Recherche">
										</div>
									</div>

									<!-- 
										<div class="return">
											<h3 style="color: rgba(255, 255, 255, 0.767);">Return</h3>
											<input class="form-control"  name="ret_date" type="date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
										</div>
										<div class="clear"></div>
									</div> -->
									<!-- <div class="class" style="display:none;">
										<h3 style="color: rgba(255, 255, 255, 0.767);">Class</h3>
										<select id="w3_country1" 
											name="f_class" onchange="change_country(this.value)" class="frm-field required">
											<option value="E">Economy</option>  
											<option value="B">Business</option>   
										</select>

									</div> -->
                                    <div class="clear"></div>
                                    </div>
                                    <div class="class" style="display:none;">
                                        <h3 style="color: rgba(255, 255, 255, 0.767);"></h3>
                                        <select id="w3_country1" 
                                            name="f_class" onchange="change_country(this.value)" class="frm-field required">
                                            <option value="E"></option>  
                                            <option value="B"></option>   
                                        </select>

                                    </div>

                                    <div class="clear"></div>
                                    <div class="numofppl" style="display:none;">
                                        <div class="adults">
                                            <h3 style="color: rgba(255, 255, 255, 0.767);"></h3>
                                            <div class="quantity"> 
                                                <div class="quantity-select">                           
                                                    <div class="entry value-minus">&nbsp;</div>
                                                    <div class="entry value"><span>1</span></div>
                                                    <input type="hidden" name="passengers"
                                                        class="input_val" value="1">
                                                    <div class="entry value-plus active">&nbsp;</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="clear"></div>
									
								</form>																				
								</div>
                </div>
            </div>
        </div>
    </div>
                    <script>
					function hideReturnDate() {
						document.getElementById("return_date_div").style.display = "none";
					}
					
					function showReturnDate() {
						document.getElementById("return_date_div").style.display = "block";
					}
					</script>
    <div class="shape">
        <img src="assets/images/frontend/banner/6209144de6ed01644762189.png" alt="bg">
    </div>
</section>
<!-- <style>
.intro{width:100%;background:#fff;z-index:1}
.intro_background{top:-128px;left:0;width:100%;height:20px;background-repeat:no-repeat;background-size:cover;background-position:center center}
.intro_container{width:100%;border-bottom:solid 2px #e4e6e8;padding-top:142px;padding-bottom:121px}
.intro_icon{width:70px;height:71px}
.intro_icon img{max-width:100%}
.intro_content{padding-left:28px}
.intro_title{font-family:'Oswald',sans-serif;font-size:18px;color:#181818;font-weight:400}
.destinations{width:100%;background:#fff;padding-top:115px;padding-bottom:116px}

div.card {
  -webkit-transition: 0.4s ease;
  transition: 0.4s ease;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
}

.col-lg-6:hover div.card {
  -webkit-transform: scale(1.08);
  transform: scale(0.89);
}
/* .card {
  width: 100%;
  height:200px;
  border-top-left-radius:2px;
  border-top-right-radius:2px;
  display:block;
    overflow: hidden;
} */
.card img{
  width: 100%;
  height: 370px;
  object-fit:cover; 
  transition: all .25s ease;
} 

</style> -->
 <!-- Working Process Section Starts Here -->
 <section class="working-process padding-top padding-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-header text-center">
                    <h2 class="title">Obtenez vos billets en seulement 3 étapes</h2>
                    <p>jetez un oeil à notre raison populaire. pourquoi vous devriez choisir votre bus. Juste un bus et obtenez un billet pour votre grand voyage. !</p>
                </div>
            </div>
        </div>
        <div class="row g-4 gy-md-5 justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="working-process-item">
                        <div class="thumb-wrapper">
                            <span>01</span>
                            <div class="thumb">
                            <i class="las la-search"></i>                        </div>
                        </div>
                        <div class="content">
                            <h4 class="title">Recherchez votre autobus</h4>
                            <p>Choisissez votre origine, votre destination, choisissez simplement les dates d'un voyage en bus et recherchez des bus</p>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="working-process-item">
                        <div class="thumb-wrapper">
                            <span>02</span>
                            <div class="thumb">
                            <i class="las la-ticket-alt"></i>                        </div>
                        </div>
                        <div class="content">
                            <h4 class="title">Choisissez le billet</h4>
                            <p>Choisissez votre origine, votre destination, Just a Bus pour vos grandes dates de voyage et recherchez des bus</p>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="working-process-item">
                        <div class="thumb-wrapper">
                            <span>03</span>
                            <div class="thumb">
                            <i class="las la-money-bill-wave-alt"></i>                        </div>
                        </div>
                        <div class="content">
                            <h4 class="title">Masse salariale</h4>
                            <p>Choisissez votre origine, votre destination, choisissez un Bus pour vos grandes dates de voyage et recherchez des bus</p>
                        </div>
                    </div>
                </div>
                    </div>
    </div>
</section>
<!-- Working Process Section Ends Here -->
                    <!-- Our Ameninies Section Starts Here -->
<section class="amenities-section padding-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-header text-center">
                    <h2 class="title">Nos commodités</h2>
                    <p>Jetez un œil à notre raison populaire. pourquoi vous devriez choisir votre bus. Choisissez simplement un bus et obtenez un billet pour votre grand voyage !</p>
                </div>
            </div>
        </div>
        <div class="amenities-wrapper">
            <div class="amenities-slider">
                                <div class="single-slider">
                    <div class="amenities-item">
                        <div class="thumb">
                            <i class="las la-wifi"></i>                        </div>
                        <h6 class="title">Wifi</h6>
                    </div>
                </div>
                                <div class="single-slider">
                    <div class="amenities-item">
                        <div class="thumb">
                            <i class="las la-bed"></i>                        </div>
                        <h6 class="title">Oreiller</h6>
                    </div>
                </div>
                                <div class="single-slider">
                    <div class="amenities-item">
                        <div class="thumb">
                            <i class="las la-prescription-bottle"></i>                        </div>
                        <h6 class="title">Bouteille d'eau</h6>
                    </div>
                </div>
                </div>
                            </div>
        </div>
    </div>
</section>
<!-- Our Ameninies Section Ends Here -->
                    <!-- Section Starts Here -->

    <!-- Section Ends Here -->
                    <!-- Blog Section Starts Here -->
<section class="blog-section padding-top padding-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-header text-center">
                    <h2 class="title">Article de blog récent</h2>
                    <p>Jetez un œil à notre raison populaire. pourquoi vous devriez choisir votre bus. Choisissez simplement un bus et obtenez un billet pour votre grand voyage. !</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center g-4">
                        <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="post-item">
                    <div class="post-thumb">
                        <img src="assets/images/frontend/blog/thumb_6210e4b6d132d1645274294.jpg" alt="blog">
                    </div>
                    <div class="post-content">
                        <ul class="post-meta">
                            <li>
                                <span class="date"><i class="las la-calendar-check"></i>22 Juin 2023</span>
                            </li>
                        </ul>
                        <h4 class="title"><a href="blog/89/the-standard-lorem-ipsum-passage-used-since-the-1500s.html">The standard Lorem Ipsum passage, used since the 1500s</a></h4>
                        <p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali...</p>
                    </div>
                </div>
            </div>
                        <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="post-item">
                    <div class="post-thumb">
                        <img src="assets/images/frontend/blog/thumb_62108d71dc2dc1645251953.jpg" alt="blog">
                    </div>
                    <div class="post-content">
                        <ul class="post-meta">
                            <li>
                                <span class="date"><i class="las la-calendar-check"></i>22 Juin 2023</span>
                            </li>
                        </ul>
                        <h4 class="title"><a href="blog/88/lorem-ipsum-is-simply-dummy.html">Article de blog récent</a></h4>
                        <p>Contrairement à la croyance populaire, le Lorem Ipsum n'est pas simplement un texte aléatoire. Il a des racines dans un morceau de littérature latine classique...</p>
                    </div>
                </div>
            </div>
                        <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="post-item">
                    <div class="post-thumb">
                        <img src="assets/images/frontend/blog/thumb_62108d54284f11645251924.jpg" alt="blog">
                    </div>
                    <div class="post-content">
                        <ul class="post-meta">
                            <li>
                                <span class="date"><i class="las la-calendar-check"></i>22 Juin 2023</span>
                            </li>
                        </ul>
                        <h4 class="title"><a href="blog/87/why-do-we-use-it.html">Pourquoi l'utilisons-nous?</a></h4>
                        <p>Contrairement à la croyance populaire, le Lorem Ipsum n'est pas simplement un texte aléatoire. Il a des racines dans un morceau de littérature latine classique...</p>
                    </div>
                </div>
            </div>
                    </div>
    </div>
</section>

                


    <a href="javascript::void()" class="scrollToTop active"><i class="las la-chevron-up"></i></a>
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/global/js/jquery-3.6.0.min.js"></script>
    <script src="assets/templates/basic/js/bootstrap.min.js"></script>
    <script src="assets/templates/basic/js/slick.min.js"></script>
    <script src="assets/global/js/select2.min.js"></script>
    <!-- <script src="assets/templates/basic/js/jquery-ui.min.js"></script> -->
    <script src="assets/templates/basic/js/main.js"></script>

    



    

<script>
    "use strict";
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script>
    
<script>
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5fe0b9b2a8a254155ab5421d/1eq2tap1m';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
  })();
</script>

<script>
if (window.top != window.self) {
    document.body.innerHTML += '<div style="position:fixed;top:0;width:100%;z-index:9999999;background:#f8d7da;color:#721c24;text-align:center; padding: 20px;"><p style="font-size:20px; font-weight: bold;">You are using this website under an external iframe!!</p><p style="font-size:16px; margin-top: 20px;">for a better experience, please browse directly instead of an external iframe.</p><a href="'+window.self.location+'" target="_blank" style=" margin-top:20px; color: #fff;background-color: #dc3545; padding: 5px 10px; border-radius: 5px; text-decoration: none;">Browse Directly</a></div>';
}
</script>


<script>
    adroll_adv_id = "YXRNNTO7ZBAMFBH67UUE5M";
    adroll_pix_id = "MMQQDWGN25EXPHGRPA3NLR";
    adroll_version = "2.0";
    (function(w, d, e, o, a) {
        w.__adroll_loaded = true;
        w.adroll  = w.adroll  || [];
        w.adroll.f = [ 'setProperties', 'identify', 'track' ];
        var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id
                + "/roundtrip.js";
        for (a = 0; a < w.adroll.f.length; a++) {
            w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function(n) {
                return function() {
                    w.adroll.push([ n, arguments ])
                }
            })(w.adroll.f[a])
        }
        e = d.createElement('script');
        o = d.getElementsByTagName('script')[0];
        e.async  = 1;
        e.src  = roundtripUrl;
        o.parentNode.insertBefore(e, o);
    })(window, document);
    adroll.track("pageView");
</script>


<script async src="../../pagead2.googlesyndication.com/pagead/js/f6b5c.txt?client=ca-pub-8940522890323334" crossorigin="anonymous"></script>

</body>

<?php subview('footer.php'); ?> 
</html>


    

		
