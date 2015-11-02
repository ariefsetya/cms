<?php
if($this->input->post()){
	$data = $this->input->post();
	$id = $data['id'];
	unset($data['id']);
	unset($data['save']);
	$this->db->where('id',$id);
	$this->db->update('pengguna',$data);
	redirect(base_url("pengguna"));
}

$this->db->where('id',$this->uri->segment(3));
$a = $this->db->get('pengguna');
$a = $a->row_array();
?>
<div class="most-center">
	<legend><a href="<?php echo base_url("pengguna");?>"><i class="icon-arrow-left"></i></a> Ubah pengguna</legend>
	<form method="POST" action="">
		<table class="table">
			<tr>
				<td>Nama Depan</td>
				<td><input type="hidden" name="id" value="<?php echo $a['id'];?>"><input required name="pengguna_namadepan" type="text" data-transform="input-control" value="<?php echo $a['pengguna_namadepan'];?>"></td>
				<td></td>
			</tr>
			<tr>
				<td>Nama Belakang</td>
				<td><input value="<?php echo $a['pengguna_namabelakang'];?>" required name="pengguna_namabelakang" type="text" data-transform="input-control"></td>
				<td></td>
			</tr>
			<tr>
				<td>E-Mail</td>
				<td><input required value="<?php echo $a['pengguna_email'];?>" name="pengguna_email" type="text" data-transform="input-control"></td>
				<td></td>
			</tr>
			<tr>
				<td>Aktif</td>
				<td><select name="pengguna_aktif" data-transform="input-control">
					<option <?php if($a['pengguna_aktif']==1){echo"selected";} ?> value="1">Ya</option>
					<option <?php if($a['pengguna_aktif']==0){echo"selected";} ?> value="0">Tidak</option>
				</select></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="save">Perbarui</button></td>
				<td></td>
			</tr>
		</table>
	</form>
</div>