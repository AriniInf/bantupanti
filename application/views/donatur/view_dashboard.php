<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/jsresponsiveslides.min.js"></script>

<section class="content-header">
  <h1>
    Dashboard
    <small>Bantu Panti</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard Donatur</li>
  </ol>
</section>

<section class="content">
      <!-- Info boxes -->
  <div class="row">
	<?php 

	 echo $data;
	 
	 ?>
  </div>
  <!-- /.row -->

  <div class="row">
    <div class="col-sm-12">
      <div class="box">
        
          <div class="box-body">
          
          <center><h3>Langkah-langkah berdonasi</h3></center>
           
           <br>
            
            <div class="card">
            
             
              <img src="<?php echo base_url('assets/image/one.png')?>" alt="Avatar" style="width:100%">
              <div class="container">
                <!-- <h4><b>John Doe</b></h4>  -->
                <p><b>Login sebagai donatur</b></p> 
              </div>
            </div>

            <div class="card">
             
             <img src="<?php echo base_url('assets/image/two.png')?>" alt="Avatar" style="width:100%">
             <div class="container">
               <!-- <h4><b>John Doe</b></h4>  -->
               <p><b>Klik menu donasi</b></p> 
             </div>
           </div>

           <div class="card">
             
             <img src="<?php echo base_url('assets/image/three.png')?>" alt="Avatar" style="width:100%">
             <div class="container">
               <!-- <h4><b>John Doe</b></h4>  -->
               <p><b>Klik  sub-menu berdonasi</b></p> 
             </div>
           </div>

           <div class="card">
             
             <img src="<?php echo base_url('assets/image/four.png')?>" alt="Avatar" style="width:100%">
             <div class="container">
               <!-- <h4><b>John Doe</b></h4>  -->
               <p><b>Isi dan upload bukti tf</b></p> 
             </div>
           </div>

           <div class="card">
             
             <img src="<?php echo base_url('assets/image/five.png')?>" alt="Avatar" style="width:100%">
             <div class="container">
               <!-- <h4><b>John Doe</b></h4>  -->
               <p><b>klik tombol donasi</b></p> 
             </div>
           </div>

           <div class="card">
             
             <img src="<?php echo base_url('assets/image/six.png')?>" alt="Avatar" style="width:100%">
             <div class="container">
               <!-- <h4><b>John Doe</b></h4>  -->
               <p><b>Donasi Anda, akan diproses</b></p> 
             </div>
           </div>

          </div>
            <div class="box-body">
              <div class="don">
                <img src="<?php echo base_url('assets/image/carousel12.jpg')?>" style="width:100%">
             </div>
            </div>
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
      <!-- /.row -->
  <script>
    $(function() {
      $('.box').hide();

      $('.box').fadeIn(500);
    });

  </script>

  <style>
  
  .don{
    width: 100%;
  }
  .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 15%;
  float: left;
  border: 5px;
  margin-right: 20px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
  /* Make the image fully responsive
    .box
    {
    	background-image: url("<?php echo base_url(''); ?>assets/img/STPN2.jpg");
    	height: 720px;
    	background-size: cover;
    	background-position: center;
    	animation: ganti 10s infinite;
    }

    @keyframes ganti
    {
    	30%{
    		background-image: url("<?php echo base_url(''); ?>assets/img/STPN2.jpg");	
    	}
    	60%{
    		background-image: url("<?php echo base_url(''); ?>assets/img/STPN1.jpg");
    	}
    	90%{
    		background-image: url("<?php echo base_url(''); ?>assets/img/STPN2.jpg");
    	}
    } */
  </style>
