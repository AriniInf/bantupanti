<!DOCTYPE html>
<html>
<head>
	<title>Bantu Panti</title>
</head>
<body>
	<center>
		<h1>Form Tambah Anak</h1>
	</center>
	<form action="<?php echo base_url(). 'anakPanti/tambahAnak'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="ap_nama"></td>
			</tr>
			<td>
				<td>Tempat Lahir</td>
				<td><input type="text" name="ap_tempatlahir"></td>
			</td>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="ap_tanggallahir"></td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td><input type="text" name="ap_hobi"></td>
			</tr>
			<tr>
				<td>Sekolah</td>
				<td><input type="text" name="ap_sekolah"></td>
			</tr>
			<tr>
				<td>Prestasi</td>
				<td><input type="text" name="ap_prestasi"></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><input type="photo" name="ap_foto"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="ap_username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="ap_password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
	<form action="<?php echo base_url(). 'anakPanti/tambahAnak'; ?>" method="post">al" aria-label="Close">
                <div class="form-group">
                  <input type="hidden" name="ap_id" id="ap_id" value="" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="ap_nama" class="form-control">
                </div>
                <div class="form-group">
					<label>Tanggal Lahir</label>
                  <input type="date" name="ap_tanggallahir" class="form-control">
                </div>
                <div class="form-group">
				  <label name="kategori">Tempat Lahir</label>
				  <input type="text" name="ap_tempatlahir" class="form-control">
                </div>
                <div class="form-group">                
				  <label>Username</label>
				  <input type="text" name="ap_username" class="form-control">
                </div>
                <div class="form-group">                
                  <label>Password</label>
                  <input type="password" name="ap_password" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <button type="submit" name="simpan" class="btn btn-danger">Tambah</button>
              </div>
        </form>

</body>
</html>
       