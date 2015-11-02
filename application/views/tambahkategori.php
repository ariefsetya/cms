<?php
if($this->input->post('nama')){
	$data['kategori_nama'] = $this->input->post('nama');
	$data['kategori_tanggal'] = date("Y-m-d");
	$data['kategori_jam'] = date("H:i:s");
	$this->db->insert('kategori',$data);
	redirect(base_url("kategori"));
}

?>
<div class="most-center">
	<legend><a href="<?php echo base_url("kategori");?>"><i class="icon-arrow-left"></i></a> Tambah kategori</legend>
	<form method="POST" action="">
		<table class="table">
			<tr>
				<td>Nama Kategori</td>
				<td><input required name="nama" type="text" data-transform="input-control"></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="save">Simpan</button></td>
				<td></td>
			</tr>
		</table>
	</form>
</div>