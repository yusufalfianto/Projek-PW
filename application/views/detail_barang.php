<!DOCTYPE html>
<html lang="en">
<head>



  <title>DJI RONIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <style >
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
	

	
/*Hide dropdown links until they are needed*/
li ul {
    display: none;
}
/*Make dropdown links vertical*/
li ul li {
    display: block;
    float: none;
}
/*Prevent text wrapping*/
li ul li a {
    width: auto;
    min-width: 100px;
    padding: 0 20px;
}
/*Display the dropdown on hover*/
ul li a:hover + .hidden, .hidden:hover {
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
	
	
	table {
	width : 100%;
    
}

table, td, th {
    border: 1px solid black;
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

/*Login*/
input{
        	position : absolute;
        	margin-top : 217px;
            margin-left : 555px;
			width : 282px;
			height : 24px;
            border: 1.5px solid #ff3300;
			border-radius: 6px;
			padding: 3px;
        }
	
	
	.Link a:link{
		color: orange;
		padding: 8px 15px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		margin-top: 1px;
		margin-left: 745px;
	} 
	
	.Link a:visited {
		color: orange;
		
	}
	
	.Link a:hover, a:active {
		color: red;
	}
	
	.link-button a:link, a:visited {
		background-color: #ff3300;
		color: white;
		padding: 8px 15px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		margin-top: 255px;
		margin-left: 555px;
	}
	
	
	.link-button a:hover, a:active {
		background-color: red;
	}
	</style>
</head>
<body>
<ul>
	<li>
		<?php
				if (isset($this->session->userdata['logged_in'])) {
					echo "<a href='http://localhost/CI_kuis/comment'>/ STUDIO RASEL /</a>";
				}
				else 
					echo "<a>/ STUDIO RASEL /</a>";
			?>
		
	</li>
	<li><a href="http://localhost/CI_kuis/HomeBF">Utama</a></li>
  
	<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">List Peralatan</a>
		<div class="dropdown-content">
		<a href="http://localhost/CI_kuis/daftar_barang">Kamera</a>
		<a href="#">Audio</a>
		<a href="#">Perlengkapan</a>
		</div>
	</li>
  
	<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Kontak</a>
		<div class="dropdown-content">
			<?php
				if (isset($this->session->userdata['logged_in'])) {
					echo "<a href='http://localhost/CI_kuis/contactAF' style='color:black'>more info..</a>";
				}
				else 
					echo "<a href='http://localhost/CI_kuis/contactBF' style='color:black'>more info..</a>";
			?>
		</div>
	</li>
  
	<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn"><img src="<?php echo base_url();?>/img/user-login.png" style= "width: 34px"></a>
		<div class="dropdown-content">
			<?php
				if (isset($this->session->userdata['logged_in'])) {
					echo "<a href='http://localhost/CI_kuis/login/Logout'>Logout</a>";
				}
				else 
					echo "<a href=' http://localhost/CI_kuis/login/Login'>Login</a>";
			?>
		
		</div>
	<li>
	
   </ul>

<div class="container-fluid">
  
  <div class="row">
    <div class="col-md-4" >
	<div class="gallery">
  <a target="_blank" href="img1.jpg">
    <img src="<?php echo base_url();?>/img/img1.jpg" alt="DJI RONIN" width="900" height="600">
  </a>
  <div class="desc">DJI RONIN</div>
</div>
	<table>
  <tr>
    <th>Tipe</th>
    <th>Penjelasan</th>
  </tr>
  <tr>
    <td>Weight</td>
    <td>4,2 KG</td>
  </tr>
  <tr>
    <td>Dimensions</td>
    <td>620mm(W) x 280-380mm (D)x 500mm(H)</td>
  </tr>
</table>
	</div>
    <div class="col-md-8" >
	<h1>DJI RONIN</h1>
	<p >
	Ronin-M adalah 3-axis camera stabilization gimbal yang mampu mengangkut atau memboyong berbagai jenis kamera profesional demi mengoptimalkan hasil gambar yang lebih smooth, stabil, membuat pengambil gambar atau video bergerak lebih leluasa. Berbeda dengan Ronin versi reguler, Ronin-M memiliki keunggulan dari segi berat yang lebih ringan, bentuk yang lebih praktis, sehingga semakin memudahkan pengambilan gambar atau video di lokasi yang memiliki keterbatasan ruang. Produk ini didedikasikan untuk para creator dan seniman yang menginginkan kestabilan kelas dunia yang ditawarkan DJI dalam bentuk yang lebih praktis dan ringan.
	</p>
	
	
	</div>
	
  </div>
</div>
    
	
	
	
</body>
</html>