<div class="pull-right">
	<a href="<?php echo site_url('provinsi/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped">
    <tr>
		<td>PROVINSI KODE</td>
		<td>PROVINSI NAMA</td>
		<td>Actions</td>
    </tr>
	<?php foreach($provinsi as $P): ?>
    <tr>
		<td><?php echo $P['PROVINSI_KODE']; ?></td>
		<td><?php echo $P['PROVINSI_NAMA']; ?></td>
		<td>
            <a href="<?php echo site_url('provinsi/edit/'.$P['PROVINSI_KODE']); ?>" class="btn btn-info">Edit</a> 

            <a href="<?php echo site_url('provinsi/remove/'.$P['PROVINSI_KODE']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php endforeach; ?>
</table>