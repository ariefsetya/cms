<?php
if($this->input->post('judul')!=""){
	$data['galeri_keterangan'] = $this->input->post('content');
	$data['galeri_link'] = $this->input->post('alamat');
	$data['galeri_judul'] = $this->input->post('judul');
	$data['galeri_aktif'] = $this->input->post('aktif');
	$data['galeri_ss'] = $this->input->post('galeri_ss');
	$data['galeri_idpengguna'] = $this->session->userdata('id');
	$data['galeri_tanggal'] = date("Y-m-d");
	$data['galeri_jam'] = date("H:i:s");
	if($_FILES['gambar']['tmp_name']!=""){
		$folder = $_FILES['gambar']['tmp_name'];
		mkdir("assets/galeri/".date("Y"));
		mkdir("assets/galeri/".date("Y")."/".date("m"));
		mkdir("assets/galeri/".date("Y")."/".date("m")."/".date("d"));
		$lokasi = "assets/galeri/".date("Y")."/".date("m")."/".date("d")."/".$_FILES['gambar']['name'];
		move_uploaded_file($folder,$lokasi);
		$data['galeri_path'] = base_url().$lokasi;
		$data['galeri_tipe'] = $_FILES['gambar']['type'];
	}
	$this->db->insert('galeri',$data);
	redirect(base_url()."galeri");
}
?>
<div class="most-center">
	<legend><a href="<?php echo base_url("galeri");?>"><i class="icon-arrow-left"></i></a> Tambah Galeri</legend>
	<form method="POST" action="" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<td style="width:100px;">Judul</td>
				<td><input required type="text" name="judul" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Pilih Berkas</td>
				<td><input type="file" name="gambar" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>
					<textarea required name="content" id="content"></textarea>
					<?php echo display_ckeditor($ckeditor); ?></td>
			</tr>
			<tr>
				<td>Alamat Berkas</td>
				<td>http://<?php echo $_SERVER['SERVER_NAME'];?>/galeri/p/<input required type="text" name="alamat" value="<?php echo md5(date("Y-m-d H:i:s"));?>" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Aktif</td>
				<td><select name="aktif" data-transform="input-control">
					<option value="1">Ya</option>
					<option value="0">Tidak</option>
				</select></td>
				<td></td>
			</tr>
			<tr>
				<td>Slideshow</td>
				<td><select name="galeri_ss" data-transform="input-control">
					<option value="0">Tidak</option>
					<option value="1">Ya</option>
				</select></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit">Simpan</button></td>
				<td></td>
			</tr>
		</table>
	</form>
</div>