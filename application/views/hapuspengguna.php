<?php
if($this->input->post()){
	$data = $this->input->post();
	$id = $data['id'];
	$this->db->where('id',$id);
	$this->db->delete('pengguna');
	redirect(base_url("pengguna"));
}

$this->db->where('id',$this->uri->segment(3));
$a = $this->db->get('pengguna');
$a = $a->row_array();
?>
<div class="most-center">
	<legend><a href="<?php echo base_url("pengguna");?>"><i class="icon-arrow-left"></i></a> Hapus pengguna</legend>
	<form method="POST" action="">
		<table class="table">
			<tr>
				<td>Nama Lengkap</td>
				<td><input type="hidden" name="id" value="<?php echo $a['id'];?>"><input readonly required name="pengguna_namadepan" type="text" data-transform="input-control" value="<?php echo $a['pengguna_namadepan']." ".$a['pengguna_namabelakang'];?>"></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="save">Hapus</button></td>
				<td></td>
			</tr>
		</table>
	</form>
</div>