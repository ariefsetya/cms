<?php
if($this->input->post('content')!=""){
	$data['pos_isi'] = $this->input->post('content');
	$data['pos_kategori'] = $this->input->post('kategori');	
	$data['pos_link'] = str_replace(array(" ","'",'"',';',':'), "_", $this->input->post('alamat'));
	$data['pos_judul'] = $this->input->post('judul');
	$data['pos_aktif'] = $this->input->post('aktif');
	$data['pos_tag'] = $this->input->post('tags');
	$data['pos_idpengguna'] = $this->session->userdata('id');
	$data['pos_tanggal'] = date("Y-m-d");
	$data['pos_jam'] = date("H:i:s");
	if($_FILES['gambar']['tmp_name']!=""){
		$folder = $_FILES['gambar']['tmp_name'];
		$lokasi = "assets/upload/".$_FILES['gambar']['name'];
		move_uploaded_file($folder,$lokasi);
		$data['pos_gambar'] = base_url().$lokasi;
	}
	$this->db->insert('pos',$data);
	redirect(base_url()."pos");
}
?>
<div class="most-center">
	<legend><a href="<?php echo base_url("pos");?>"><i class="icon-arrow-left"></i></a> Tambah Artikel</legend>
	<form method="POST" action="" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<td style="width:100px;">Judul</td>
				<td><input required type="text" name="judul" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td><select name="kategori" data-transform="input-control">
				<?php
				$a = $this->db->get('kategori');
				$a = $a->result_array();
				foreach ($a as $key) {
				?>
				<option value="<?php echo $key['id'];?>"><?php echo $key['kategori_nama'];?></option>
				<?php } ?>
				</select></td>
			</tr>
			<tr>
				<td>Isi</td>
				<td>
					<textarea required name="content" id="content"></textarea>
					<?php echo display_ckeditor($ckeditor); ?></td>
			</tr>
			<tr>
				<td>Gambar Depan</td>
				<td><input type="file" name="gambar" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Alamat Artikel</td>
				<td>http://<?php echo $_SERVER['SERVER_NAME'];?>/p/<input required type="text" name="alamat" value="<?php echo md5(date("Y-m-d H:i:s"));?>" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Tags</td>
				<td><input type="text" name="tags" data-transform="input-control"></td>
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
				<td></td>
				<td><button type="submit">Simpan</button></td>
				<td></td>
			</tr>
		</table>
	</form>
</div>