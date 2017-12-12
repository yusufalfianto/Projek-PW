<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
<style type="text/css">
	body {
			background-image: url('<?php echo base_url();?>/img/Home.jpg');
			background-size: cover;
			background--position: center;
			height: 850px;
			background-repeat: no-repeat
		}
			/*background-color: #80ffd4;
			*/
		h1 {
			text-align: Center;
			color: #ff9800;

		}

		div.square{
			width:390px;
			height:360px;
			background-color: #ff9900;
			/*border:2px solid white;*/
			margin-top: 2px;
			margin-Left: 450px;
			margin-right: 450px; 
			padding : 15px;
			padding-left: 30px;
			padding-bottom: 5px; 
		}

		
	</style>
</head>
<body>

<div class='header'>
<ul>
	<li><a>/ STUDIO RASEL /</a></li>
	<li><a href="http://localhost/CI_kuis/HomeBF">Utama</a></li>
  
	<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">List Peralatan</a>
		<div class="dropdown-content">
		<a href="http://localhost/CI_kuis/daftar_barang" style="color:black">Kamera</a>
		<a href="#" style="color:black">Audio</a>
		<a href="#" style="color:black">Perlengkapan</a>
		</div>
	</li>
  
	<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Kontak</a>
		<div class="dropdown-content">
		<a href="http://localhost/CI_kuis/contactBF" style="color:black">more info..</a>
		</div>
	</li>
  
	<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn"><img src="<?php echo base_url();?>/img/user-login.png" style= "width: 34px"></a>
		<div class="dropdown-content">
		<a href="http://localhost/CI_kuis/login/Login " style="color:black">Login</a>
		</div>
	<li>
  
</ul>
</div>

<div class='format'>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="<?php echo base_url();?>/img/img1.png" style="width:100%">
  <div class="text">DJI RONIN</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="<?php echo base_url();?>/img/img2.png" style="width:100%">
  <div class="text">DJI MAVIC</div>
</div>	

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="<?php echo base_url();?>/img/img3.png" style="width:100%">
  <div class="text">DJI SPARK</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="<?php echo base_url();?>/img/img4.png" style="width:100%">
  <div class="text">CANON 600D</div>
</div>


</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>   
</div>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


</body>
	

</html>