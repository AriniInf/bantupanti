<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}


/* garis */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: white;
  top: 0;
  bottom: 0;

  /* margin-left: -3px; */
}

/* container */

.container {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 40%;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 15px;
  height: 15px;
  right: -1px;
  background-color: white;
  border: 4px solid #FF9F55;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  left: -25%;
}

/* Place the container to the right */
.right {
  left: 15%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 20px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 20px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content {
  padding: 20px 30px;
  background-color: white;
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .container {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
  }
}
</style>
</head>
<body>

<div class="timeline">
  <div class="container left">
    <div class="content">
      <h2>BJ HABIBIE</h2>
      <p>Pembelian tanah dilakukan pada awal tahun 2003. Pembangunan dilaksanakan tahun 2005 - 2007. Panti BJ Habibie memperoleh dana bukan dari lemabga khusus, dana yang diperoleh murni dari donatur</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2></h2>
      <p>Alamat: Jl. Keputih Tegal I No.25, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60111.
      </p>
      <p>Telepon: (031) 5950362</p>
        <p> Provinsi: Jawa Timur</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>Kegiatan</h2>
      <p>Ada banyak kegiatan panti, tapi tidak tentu setiap bulannya. Pada bulan puasa biasanya lebih banyak acara yang dari luar. Seperti kegiatan yang dari mahasiswa bakti kampus, doa Bersama, maupun buka Bersama. Selain itu juga ada kegiatan sholawatan Bersama masyarakat sekitar</p>
    </div>
  </div>
  <!-- <div class="container right">
    <div class="content">
      <h2>2012</h2>
      <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>2011</h2>
      <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2007</h2>
      <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
    </div>
  </div>
</div> -->

</body>
</html>
