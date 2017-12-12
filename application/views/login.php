<!DOCTYPE html>
 <html lang="en">
		<?php
			if (isset($this->session->userdata['logged_in'])) {
			header("location: Home(after login)");
			}
		?>

 	<head>
 		<meta charset="utf-8">
 		<title>Login</title>
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

		h2 {
			text-align: Center;
			color: #ff9800;
		}

		div.square{
			background-color: #ff9900;
			/*border:2px solid white;*/
			margin-Left: 500px;
			margin-right: 500px; 
			padding : 15px;
			padding-left: 40px;
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

 	
 	<body class="home">
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
						<a href="http://localhost/Project/index.php/contactBF" style="color:black">more info..</a>
					</div>
				</li>
			  
				<li class="dropdown">
								<a href="javascript:void(0)" class="dropbtn"><img src="<?php echo base_url();?>/img/user-login.png" style= "width: 34px"></a>
								<div class="dropdown-content">
								<a href="http://localhost/CI_kuis/login/login" style="color:black">Login</a>
								
								</div>
							</li>
				
			</ul>
			</div>	

    <h2 class="form-signin-heading">Please login</h2>
 	<div class="square">
 		<div class="wrapper">
            <form class="form-signin" method="post" action="<?php echo base_url(); ?>login/login">       
                
        
				<?php
					echo "<div class='error_msg'>";
						if (isset($error_message)) {
							echo $error_message;
						}
					//echo validation_errors();
					echo "</div>";
				?>

      <label>Username :</label><br>
      <input style="width:245px" type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" /><br>
      <label>Password :</label><br>
      <input style="width:245px" type="password" class="form-control" name="password" placeholder="Password" required=""/><br><br>	
      <input type="submit" value="Login " name="submit"/><br>
      <label>Belum punya akun ? </label>
      <a href="http://localhost/CI_kuis/SignUp" target="_blank">Sign Up</a>
    </form>
   </div>
  </div>

</body>
</html>