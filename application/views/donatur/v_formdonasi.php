<div class="container-fluid">
    <br>

    <form method="post" action="<?php echo base_url('donatur/inputdonasi')?>" class="berdonasi">
        <div class="form-group">
            <label>nominal</label>
            <input type="text" name="nominal"
            placeholder="masukkan nominal" class="form-control">
        </div>

        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggal"
            placeholder="masukkan tanggal" class="form-control">
        </div>

        <div class="form-group">
            <label>bukti tf</label>
            <input type="text" name="bukti"
            placeholder="Kirim bukti tf" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary ">Kirim</button>

    </form> 
    
</div> 