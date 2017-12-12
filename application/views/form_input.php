 <!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	 
	<style>
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
<body >
	<div >
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
				</li>
				
			   </ul>
			</div>

		<h1>SignUp</h1>
		
		
   				<div class="square">
    				<form action="<?php echo base_url('signup/input_data');?>" method="post" onSubmit="return validate();"> 
						<div class="form-group">
							<label>Username :</label><br>
							<input style="background-color: white;border:2px solid white;width:360px" type="text" class="form-control" name="username" maxlength="25" required>
						</div>
				
						<div class="form-group">
							<label>Password :</label><br>
							<input style="background-color: white;border:2px solid white;width:360px"type="password" class="form-control" id="password" name="password" required>
						</div>

				        <div class="form-group">
							<label>Alamat :</label><br>
				            <textarea style="background-color:white;border:2px solid white;width:355px;height:40px" class="form-control" rows="3" name="alamat" maxlength="100" required></textarea>
						</div>

						<div class="form-group">
							<label>Nama Lengkap :</label><br>
							<input style="background-color:white;border:2px solid white;width:360px"type="text" class="form-control" name="nama_lengkap" maxlength="100" required>
						</div>

						<div class="form-group">
							<label>Email :</label><br>
							<input style="background-color:white;border:2px solid white;width:360px"type="email" class="form-control" name="email" maxlength="50" required>
						</div>

						<div class="form-group">
							<label>Nomor Telpon :</label><br>
							<input style="background-color: white;border:2px solid white;width:360px"type="text" class="form-control" name="nomor_telepon" maxlength="15" required>
						</div>
		        
		    			<br><input type="submit" class="btn btn-primary" value="Submit" name="submit">
					</form>
				</div>		
    
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 
	</body>
</html>