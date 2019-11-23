<!doctype html>
<html lang="en">
<head>
	<title>SIM PENGASUHAN STPN | Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">
<!--===============================================================================================-->
</head>

<style>
img {
  border-radius: 0%;
}
.split-left {
height: 100%;
  width: 30%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
 
}
.split-right {
height: 100%;
  width: 70%;
  position: fixed;
  z-index: 1;
  top: 1;
  overflow-x: hidden;

}
.gambar{
  width: 30%;
  float: right;
  margin-right: 15px;
}
.card {
  width: 65%;
  float: right;
  margin-right: 20px;	
}
.center {
  height: 100%;
  position: fixed;
  z-index: 1;
  top: 1;
  overflow-x: hidden;
}
.judul {
	width: 130%;
  /* float: right; */
  margin-right: 20px;	
}
.square{
  width: 40%;
  margin-right: 50px;
  border-style : none;
}
/* .center {
  height: 100%;
  width: 70%;
  position: fixed;
  z-index: 1;
  top: 1;
  overflow-x: hidden
} */
/* .split-right-above {
height: 50%;
  width: 70%;
  position: fixed;
  z-index: 1;
  top: 1;
  overflow-x: hidden;	 */
}
/* .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  height: 100%;
  width: 40%;
  border-radius: 5px;
} */
/* .card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
} */



</style>
<!-- <div class="split-right">
<body style="background-color: #ffffff;">
<div class="center ">
  <h2><center>BANTU PANTI</center></h2>
  <br> </br>
  <h3> <center>Membantu dengan cara yang mudah.</center></h3>
  <h4> <center> Mengapa Harus Menggunakan BANTU PANTI?</center> </h4>
  <div class="card">

    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
	  <img src="<?php echo base_url('assets/image/PP1.png')?>" alt="Avatar" style="width:100%">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
	  <img src="<?php echo base_url('assets/image/PP1.png')?>" alt="Avatar" style="width:100%">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
	  <img src="<?php echo base_url('assets/image/PP1.png')?>" alt="Avatar" style="width:100%">
          </a>
    </div> -->
	
	<!-- <div class="card">
		<img src="<?php echo base_url('assets/image/PP1.png')?>" alt="Avatar" style="width:100%">
		<div class="container">
			<h4><b>Jane Doe</b></h4> 
			<p>Interior Designer</p> 
		</div>
		</div> -->
	</div>
</div>


<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
    <div class="gambar">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
		  <div class="split-left">
		  <div class="wrap-login100">
			<form method="post" action="<?php echo base_url('login/login_validation') ?>" class="login100-form validate-form">
			<div>
		
			</div>
					<span class="login100-form-title p-b-43">
						<img class="rounded-float-left img-responsive" style="width:100px;height:100px" src="<?php echo base_url(); ?>assets/image/logo.png" >
					</span>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					  
					</div>
					
					
					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
            			
					</div>
			
					
					<div class="container-login100-form-btn">
		 				 <button class="login100-form-btn" type="submit" name="insert" >Login </button>
					</div>
					
					<p>ingin menjadi donatur dan belum terdaftar?</p>
					<a href="<?php echo base_url(); ?>register" class="btn btn-info" role="button">Register</a>
					
				</form>
			</div>
			</div>
          </div>
        </div>
		
      </div>
	  
    </div>
	
  </div>
  <div class="center">
  <body style="background-color: 0xffffff;">
  <div class = "judul">
  <br> </br>
  <h2><center>BANTU PANTI<center></h2>
  <h4> <center>	<p>Sebarkan kebaikan ke Panti Asuhan BJ Habibie dengan menyumbang mulai dari Rp1,00 demi kebaikan mereka.</p><center></h4>
  <br> </br>
  <h2> <center> Mengapa Harus Menggunakan BANTU PANTI?<center> </h2> </div>
  <br> </br>
  <div class="card">
  <div class="lala">

    <div class="gambar">
      <!-- <a href="#" class="d-block mb-4 h-100"> -->
	  <center><img src="<?php echo base_url('assets/image/PP1.png')?>" alt="Avatar" style="width:100px"><center>
	  <h6> Update Anak Panti</h6>
	  <h7> <p>Bantu Panti akan memberikan update anak panti setelah menerima donasi secara berkala kepada donatur. </p></h7>


          <!-- </a> -->
    </div>
	<div class="gambar">
      <!-- <a href="#" class="d-block mb-4 h-100"> -->
	  <center><img src="<?php echo base_url('assets/image/PP2.png')?>" alt="Avatar" style="width:100px"><center>
	  <h6> Transparan </h6>
	  <h7> <p>Bantu Panti sangat transparan dalam mengelola keuangan. Setiap  transaksi dan distribusi donasi dapat dilihat dan diawasi. </p> </h7>

          <!-- </a> -->
    </div>
    <div class="gambar">
      <!-- <a href="#" class="d-block mb-4 h-100"> -->
	  <center><img src="<?php echo base_url('assets/image/PP3.png')?>" alt="Avatar" style="width:100px"><center>
	  <h6> Tepat Sasaran </h6>
	  <h7> <p> Donasi yang terkumpul melalui Bantu Panti akan disalurkan secara langsung ke Panti Asuhan BJ Habibie.</p> </h7>
	  <br> </br>
          <!-- </a> -->
    </div>
	<div class="square">
      <!-- <a href="#" class="d-block mb-4 h-100"> -->
	  <img src="<?php echo base_url('assets/image/BCA.png')?>" alt="BCA" style="width:44px" >	  <small p> 731 025 2527 A.n PNT BJ HABIBIE </small p>
	<br> </br>
          <!-- </a> -->
    </div>
	<div class="square">
      <!-- <a href="#" class="d-block mb-4 h-100"> -->
	  <img src="<?php echo base_url('assets/image/Mandiri.png')?>" alt="Avatar" style="width:40px">	  <small p>  0700 000 899 992 A.n PNT BJ HABIBIE </small p>
	  <br> </br>
          <!-- </a> -->
    </div>
    <div class="square">
      <!-- <a href="#" class="d-block mb-4 h-100"> -->
	  <img src="<?php echo base_url('assets/image/BRI.png')?>" alt="Avatar" style="width:40px">	  <small p>  034 101 000 743 303 A.n PNT BJ HABIBIE </small p>
	  <br> </br>
          <!-- </a> -->
    </div>
	</div>

	</div>
</div>
</div>

<!-- <div class="split-left">
<body style="background-color: #666666;">
	
	<div class="limiter">

		<div class="container-login100">
		
			<div class="wrap-login100">
			<form method="post" action="<?php echo base_url('login/login_validation') ?>" class="login100-form validate-form">
			<div>
		
			</div>
					<span class="login100-form-title p-b-43">
						<img class="rounded-float-left img-responsive" style="width:100px;height:100px" src="<?php echo base_url(); ?>assets/image/logo.png" >
					</span>
					
          
					
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					  
					</div>
					
					
					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
            			
					</div>
			
					
					<div class="container-login100-form-btn">
		 				 <button class="login100-form-btn" type="submit" name="insert" >Login </button>
					</div>
					
					<p>ingin menjadi donatur dan belum terdaftar?</p>
					<a href="<?php echo base_url(); ?>register" class="btn btn-info" role="button">Register</a>
					
				</form>

				
				</div>
			</div>
		</div>
	</div>
</div> -->
	
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>
</html>
