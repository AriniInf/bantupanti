<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/jsresponsiveslides.min.js"></script>

<section class="content-header">
  <h1>
    Dashboard
    <small>Bantu Panti</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<section class="content">
      <!-- Info boxes -->
  <div class="row">
	<?php 

	//  echo $data;
	 
	 ?>
  </div>
  <!-- /.row -->

  <div class="row">
    <div class="col-sm-12">
      <div class="box">
        
          <div class="box-body">
          
          <center><h3><b>Langkah-langkah berdonasi</b></h3></center>
           
           <br>
            
            <div class="card1">
            
             
              <img src="<?php echo base_url('assets/image/one.png')?>" alt="Avatar" style="width:100%">
              <div class="container">
                <!-- <h4><b>John Doe</b></h4>  -->
                
              </div>
              
            </div>

            <div class="arrow">
            
             
            <img src="<?php echo base_url('assets/image/right-arrow.png')?>" alt="Avatar" style="width:100%">
            <div class="container">
              <!-- <h4><b>John Doe</b></h4>  -->
              
            </div>
            
          </div>
          
            <div class="card">
             
             <img src="<?php echo base_url('assets/image/two.png')?>" alt="Avatar" style="width:100%">
             <div class="container">
               <!-- <h4><b>John Doe</b></h4>  -->
               
             </div>
           </div>           
           <div class="arrow">
            
             
            <img src="<?php echo base_url('assets/image/right-arrow.png')?>" alt="Avatar" style="width:100%">
            <div class="container">
              <!-- <h4><b>John Doe</b></h4>  -->
              
            </div>
            </div>


           <div class="card">
             
             <img src="<?php echo base_url('assets/image/three.png')?>" alt="Avatar" style="width:100%">
             <div class="container">
               <!-- <h4><b>John Doe</b></h4>  -->
               
             </div>
           </div>

           <div class="arrow">
            
             
            <img src="<?php echo base_url('assets/image/right-arrow.png')?>" alt="Avatar" style="width:100%">
            <div class="container">
              <!-- <h4><b>John Doe</b></h4>  -->
              
            </div>
            </div>

           <div class="card">
             
             <img src="<?php echo base_url('assets/image/four.png')?>" alt="Avatar" style="width:100%">
             <div class="container">
               <!-- <h4><b>John Doe</b></h4>  -->
               
             </div>
           </div>
           <div class="arrow">
            
             
            <img src="<?php echo base_url('assets/image/right-arrow.png')?>" alt="Avatar" style="width:100%">
            <div class="container">
              <!-- <h4><b>John Doe</b></h4>  -->
              
            </div>
            </div>

           <div class="card">
             
             <img src="<?php echo base_url('assets/image/five.png')?>" alt="Avatar" style="width:100%">
             <div class="container">
               <!-- <h4><b>John Doe</b></h4>  -->
               
             </div>
           </div>
           <div class="arrow">
            
             
            <img src="<?php echo base_url('assets/image/right-arrow.png')?>" alt="Avatar" style="width:100%">
            <div class="container">
              <!-- <h4><b>John Doe</b></h4>  -->
              
            </div>
            </div>

           <div class="card6">
             
             <img src="<?php echo base_url('assets/image/six.png')?>" alt="Avatar" style="width:100%">
             <div class="container">
               <!-- <h4><b>John Doe</b></h4>  -->
               
             </div>
             
           </div>
          <div class="box-body">
            <div class="tulisan1">
            <h5><b>Login sebagai donatur</b></h5> 
            </div>
            <div class="tulisan2">
            <h5><b>Klik menu donasi</b></h5>
            </div>
            <div class="tulisan3">
            <h5><b>Klik  sub-menu berdonasi</b></h5> 
            </div>
            <div class="tulisan4">
            <h5><b>Isi dan upload bukti tf</b></h5> 
            </div>

            <div class="tulisan5">
            <h5><b>klik tombol donasi</b></h5>
            </div>
            <div class="tulisan6">
             
            <h5><b>Donasi Anda, akan diproses</b></h5> 
            </div>
          </div>

          </div>
            <div class="box-body">
              <div class="don">
                <img src="<?php echo base_url('assets/image/nate.jpg')?>" style="width:100%">
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
  width: 5%;
  float: left;
  border: 20%;

}
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 5%;
  float: left;
  border: 20%;
	margin-left:25px;


  

}
.card6 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 5%;
  float: left;
  border: 20%;
 

}
.arrow{
  width: 5%;
  float: left;
  border: 20%;
  margin-left: 37px;
  margin-right: 37px;

}
.tulisan{
  width: 15%;
  float: left;
  border: 20%;
  margin-left: 10px;
  margin-right: 10px;
}
.tulisan1{
  width: 10%;
  float: left;
  border: 0%;
  margin-left: 0px;
  margin-right: 25px;
}
.tulisan2{
  width: 15%;
  float: left;
  border: 0%;
  margin-left: 30px;
  margin-right: 25px;
}
.tulisan3{
  width: 15%;
  float: left;
  border: 0%;
  margin-left:15px;
  margin-right: 0px;
}
.tulisan4{
  width: 15%;
  float: left;
  border: 0%;
  margin-left: 22px;
  margin-right: 25px;
}
.tulisan5{
  width: 12%;
  float: left;
  border: 0%;
  margin-left: 25px;
  margin-right: 30px;
}
.tulisan6{
  width: 10%;
  float: left;
  border: 0%;
	margin-left: 10px;
  margin-right: 0px;
}
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
/* .box-body{
 background-color: #ff383b;
} */

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
    @font-family{
      font-family: 'letters';
      src: url("<?php echo base_url('assets/fonts/letters.ttf'); ?>
    }
    
    h3{
      font-family: letters;
    }
  
    
 
  
  </style>
