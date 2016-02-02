<?php echo validation_errors(); ?>

<?php echo form_open('provinsi/add'); ?>

	<div>PROVINSI NAMA : <input type="text" name="PROVINSI_NAMA" value="<?php echo $this->input->post('PROVINSI_NAMA'); ?>" /><div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>