<?php
$err = "";
if($this->input->post()){
	$data = $this->input->post();
	unset($data['save']);
	$this->db->where('pengguna_email',$data['pengguna_email']);
	$a = $this->db->get('pengguna');
	if($a->num_rows()>0){
		$err = "email";
		goto lanjut;
	}
	$data['pengguna_katasandi'] = md5($data['pengguna_katasandi']);
	$data['pengguna_tanggal'] = date("Y-m-d");
	$data['pengguna_jam'] = date("H:i:s");
	$this->db->insert('pengguna',$data);
	redirect(base_url("pengguna"));
}
lanjut:
if($err=="email"){
	?>
	<div class="notice marker-on-top fg-white ribbed-red">
			Kesalahan : E-Mail sudah terdaftar 	
	</div>
	<?php
}

?>
<div class="most-center">
	<legend><a href="<?php echo base_url("pengguna");?>"><i class="icon-arrow-left"></i></a> Tambah pengguna</legend>
	<form method="POST" action="">
		<table class="table">
			<tr>
				<td>Nama Depan</td>
				<td><input required name="pengguna_namadepan" type="text" data-transform="input-control"></td>
				<td></td>
			</tr>
			<tr>
				<td>Nama Belakang</td>
				<td><input required name="pengguna_namabelakang" type="text" data-transform="input-control"></td>
				<td></td>
			</tr>
			<tr>
				<td>E-Mail</td>
				<td><input required name="pengguna_email" type="text" data-transform="input-control"></td>
				<td></td>
			</tr>
			<tr>
				<td>Kata Sandi</td>
				<td><input required name="pengguna_katasandi" type="password" data-transform="input-control"></td>
				<td></td>
			</tr>
			<tr>
				<td>Aktif</td>
				<td><select name="pengguna_aktif" data-transform="input-control">
					<option value="1">Ya</option>
					<option value="0">Tidak</option>
				</select></td>
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