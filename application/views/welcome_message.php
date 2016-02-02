	<div id="page-wrapper">
		<form>
			<?php if($selected['USER_NAMA']=="")
				{
					echo '<form method="post" action="index.php/c_user/add_new_user/">';
				}
				else
					echo '<form method="post" action="index.php/c_user/edit_user_selected/">';
			?>
			<fieldset>
				<div>
					<label for="focusedInput">Kode Pengguna</label>
					<span id="user_kode"><?php echo $selected['USER_KODE']; ?></span>
				</div>
				<div>
					<label for="textarea1">Nama Pengguna</label>
						<input id="user_nama" id="focusedInput" type="text" value="<?php echo $selected['USER_NAMA']; ?>">
				</div>
				<div>
					<label for="textarea2">NIP</label>
						<input id="nip" id="focusedInput" type="text" value="<?php echo $selected['NIP']; ?>">
				</div>
				<div>
					<label for="textarea3">NUPTK</label>
						<input id="nuptk" id="focusedInput" type="text" value="<?php echo $selected['NUPTK']; ?>">
				</div>
				<div class="form-actions">
					<?php if($selected['USER_NAMA']=="")
						{
							echo '<button href="'.site_url("/c_user/add_new_user").'" id="adduser">Tambah Data Pengguna</button>';
						}
						else
						{
							echo '<button href="'.site_url("/c_user/edit_user_selected" ).'" id="edituser">Simpan</button>';
						}
				?>	
			</fieldset>
		</form>   

		<table border=1>
			<thead>
				<tr>
					<th>No.</th>
					<th>KODE USER</th>
					<th>NAMA USER</th>
					<th>NIP</th>
					<th>NUPTK</th>
					<th>Kelola Data</th>
				 </tr>
			</thead>
			<tbody>
			  	<?php
					$no = 1;
				?>
				<?php foreach ($daftar_user as $a)	{?>
					<tr>
						<td class="center"><?php echo $no++ ?></td>
						<td class="center"><?php echo $a->USER_KODE; ?></td>
						<td class="center"><?php echo $a->USER_NAMA; ?></td>
						<td class="center"><?php echo $a->NIP; ?></td>
						<td class="center"><?php echo $a->NUPTK; ?></td>

						<td class="center">
							<a href="<?php echo site_url ('c_user/data_user/'.$a->USER_KODE)?>"><button class="btn btn-mini btn-warning">Edit</button></a>
							<a href="<?php echo site_url ('c_user/delete_selected_user/'.$a->USER_KODE)?>"><button class="btn btn-mini btn-danger">Hapus</button></a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
		
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

