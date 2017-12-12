<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="../style.css">
<style type="text/css">
	body {
			background-image: url('<?php echo base_url();?>/img/Home.jpg');
			background-size: cover;
			background--position: center;
			height: 850px;
			background-repeat: no-repeat
		}
	
	h1{
		text-align: center;
	}

	h3{
		text-align: center;
	}

	div.square{
			margin-top: 40px;
			margin-right: 400px;
			margin-left: 400px;
			background-color: #ff9900;
			
			padding: 2px;
			padding-right: 2px;
			padding-left: 2px;
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
	</style>
</head>
<body>

<div class="header">
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
		<a href="http://localhost/CI_kuis/login/Login" style="color:black">Login</a>
		
		</div>
	<li>
	
   </ul>
</div>

<div>
	<h1 style="color: black ">Contact</h1>

	<div class="square">
		<h3 >Untuk mengetahui kontak kami, silakan login ke akun anda terleih dahulu !</h3>
	</div>
</div>


</body>
	

</html>