<div class="container-fluid">
    <table class="table table hover table-borderes table-striped">
        <?php foreach($data as $do) :?>
        <img src="<?php echo base_url('assets/uploads/').$do->foto ?>"style="width: 20%">
        
        <tr>
            <td>telp</td>
            <td><?php echo $do->telp ?></td>

        </tr>
        <tr>
            <td>email</td>
            <td><?php echo $do->email ?></td>

        </tr>
        
        <?php endforeach; ?>
    </table>
</div>