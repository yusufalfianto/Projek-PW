<!DOCTYPE html>
<html>
<head>
	
<style type="text/css">
	body {
			background-image: url('<?php echo base_url();?>/img/Home.jpg');
			background-size: cover;
			background--position: center;
			height: 850px;
			background-repeat: no-repeat
		}

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

	label{
			padding-top:px;
		}

		ul {
			    list-style-type: none;
				width: 1340px;
			    margin: 0px;
			    padding: 0px;
			    overflow: hidden;
				background-size: 100% 100%;
			    background-color: #333;	
			}
			li {
				float: right;
				
			}
			li a, .dropbtn {
				display: inline-block;
				color: white;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
			}
			li a:hover, .dropdown:hover .dropbtn {
				background-color: #ff9933;
			}
			li.dropdown {
				display: inline-block;
			}
			.dropdown-content {
				display: none;
				position: absolute;
				background-color: #f9f9f9;
				min-width: 160px;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				z-index: 1;
			}
			.dropdown-content a {
				color: black;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
				text-align: left;
			}
			.dropdown-content a:hover {background-color: #f1f1f1}
			.dropdown:hover .dropdown-content {
				display: block;
			}
					
			* {box-sizing:border-box}	
				body {font-family: Verdana,sans-serif;}
				.mySlides {display:none}

			/* Slideshow container */
				.slideshow-container {
				max-width: 500px;
				position: relative;
				margin: auto;
				}

			/* Caption text */
				.text {
				color: #003366;
				font-size: 17px;
				padding: 8px 12px;
				position: absolute;
				bottom: 8px;
				width: 100%;
				text-align: center;
				}

			/* Number text (1/3 etc) */
				.numbertext {
				color: #f2f2f2;
				font-size: 12px;
				padding: 8px 12px;
				position: absolute;
				top: 0;
				}

			/* The dots/bullets/indicators */
				.dot {
				height: 13px;
				width: 13px;
				margin: 0 2px;
				background-color: #bbb;
				border-radius: 50%;
				display: inline-block;
				transition: background-color 0.6s ease;
				}

				.active {
				background-color: #717171;
				}

			/* Fading animation */
				.fade {
				-webkit-animation-name: fade;
				-webkit-animation-duration: 1.5s;
				animation-name: fade;
				animation-duration: 1.5s;
				}

			@-webkit-keyframes fade {
				from {opacity: .4} 
				to {opacity: 1}		
				}

			@keyframes fade {
				from {opacity: .4} 
				to {opacity: 1}
				}

			/* On smaller screens, decrease text size */
				@media only screen and (max-width: 300px) {
				.text {font-size: 11px}
				}
				
				.header {
					//border : 1px solid red;
					width : 100%
					padding: 0px;
					margin-top: 0px;
				}
				.format {
					//border : 1px solid red;
					width : 100%;
					height : 47%;
					padding: 0px;
					margin-top: 0px;
					
				}
				
				
				
			}

			div.gallery {
			    
			    float: left;
			    width: 100%;
			}

			div.gallery:hover {
			    border: 1px solid #777;
			}

			div.gallery img {
			    width: 100%;
			    height: auto;
			}

			div.desc {
			    padding: 15px;
			    text-align: center;
			}
						}

	</style>
</head>
<body>

<div class="header">
  <ul>
  		<li><a href="http://localhost/CI_kuis/comment">/ STUDIO RASEL /</a></li>
	<li><a href="http://localhost/CI_kuis/HomeAF">Utama</a></li>
  
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
		<a href="http://localhost/CI_kuis/contactAF" style="color:black">more info..</a>
		</div>
	</li>
  
	<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn"><img src="<?php echo base_url();?>/img/user-login.png" style= "width: 34px"></a>
		<div class="dropdown-content">
		<a href="http://localhost/CI_kuis/login/Logout " style="color:black">Logout</a>
		
		</div>
	<li>
	
   </ul>
</div>

<div class="format">
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