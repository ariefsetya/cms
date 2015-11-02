<div class="most-center">
	<legend>Pengaturan Header</legend>
	<div class="panel" style="padding:10px;">
	<div>Tampilan header Admin saat ini :</div>
	<?php
	$this->db->where('TYPEDATE','31');
	$a = $this->db->get('web_init');
	$a = $a->row_array();
	if($a['header_back']!=""){
	?>
	<img style="width:100%" src="<?php echo $a['header_back'];?>">
	<a class="place-right" href="<?php echo base_url("backheader/delete/header_back");?>"><i class="icon-remove"></i> Hapus Gambar</a>
	<?php }else{echo "<i class='icon-code'></i> Tidak ada";} ?>
	<hr>
	<strong>< Ubah Gambar ></strong>
	<form method="POST" action="<?php echo base_url("backheader/save_foto");?>" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<td>Pilih Berkas</td>
				<td><input type="file" data-transform="input-control" name="header_back"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit">Unggah</button></td>
			</tr>
		</table>
	</form>
	</div>
	<hr>
	<div class="panel" style="padding:10px;">
	<div>Tampilan header Guest saat ini :</div>
	<?php
	$this->db->where('TYPEDATE','31');
	$a = $this->db->get('web_init');
	$a = $a->row_array();
	if($a['header_front']!=""){
	?>
	<img style="width:100%" src="<?php echo $a['header_front'];?>">
	<a class="place-right" href="<?php echo base_url("backheader/delete/header_front");?>"><i class="icon-remove"></i> Hapus Gambar</a>
	<?php }else{echo "<i class='icon-code'></i> Tidak ada";} ?>
	<hr>
	<strong>< Ubah Gambar ></strong>
	<form method="POST" action="<?php echo base_url("backheader/save_foto");?>" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<td>Pilih Berkas</td>
				<td><input type="file" data-transform="input-control" name="header_front"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit">Unggah</button></td>
			</tr>
		</table>
	</form>
	</div>
	<legend>Pengaturan Latar Belakang</legend>
	<div class="panel" style="padding:10px;">
	<div>Gambar latar belakang :</div>
	<?php
	$this->db->where('TYPEDATE','31');
	$a = $this->db->get('web_init');
	$a = $a->row_array();
	if($a['backimage']!=""){
	?>
	<div style="width:100%;background-image:url('<?php echo $a['backimage'];?>');height:100px;"></div>
	<a class="place-right" href="<?php echo base_url("backheader/delete/backimage");?>"><i class="icon-remove"></i> Hapus Gambar</a>
	<?php }else{echo "<i class='icon-code'></i> Tidak ada";} ?>
	<hr>
	<strong>< Ubah Gambar ></strong>
	<form method="POST" action="<?php echo base_url("backheader/save_foto");?>" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<td>Pilih Berkas</td>
				<td><input type="file" data-transform="input-control" name="backimage"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit">Unggah</button></td>
			</tr>
		</table>
	</form>
	</div>
	<legend>Pengaturan Footer 1</legend>
	<div class="panel" style="padding:10px;">
		<form method="POST" action="<?php echo base_url("backheader/save_footer_one");?>">
			<input type="text" value="<?php echo $a['judul1'];?>" name="judul1" data-transform="input-control">
			<input type="text" value="<?php echo $a['subjudul1'];?>" name="subjudul1" data-transform="input-control">
			<textarea data-transform="input-control" name="isi1"><?php echo $a['isi1'];?></textarea>
			<button type="submit">Simpan</button>
		</form>
	</div>
	<legend>Pengaturan Footer 2</legend>
	<div class="panel" style="padding:10px;">
		<form method="POST" action="<?php echo base_url("backheader/save_footer_two");?>">
			<input type="text" value="<?php echo $a['subjudul2'];?>" name="subjudul2" data-transform="input-control">
			<textarea data-transform="input-control" name="isi2"><?php echo $a['isi2'];?></textarea>
			<button type="submit">Simpan</button>
		</form>
	</div>
</div>