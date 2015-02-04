<?php
if($this->input->post()){
	$data = $this->input->post();
	$id = $data['id'];
	unset($data['id']);
	unset($data['save']);
	$data['pengguna_katasandi'] = md5($data['pengguna_katasandi']);
	$this->db->where('id',$id);
	$this->db->update('pengguna',$data);
	redirect(base_url("pengguna"));
}

$this->db->where('id',$this->uri->segment(3));
$a = $this->db->get('pengguna');
$a = $a->row_array();
?>
<div class="most-center">
	<legend><a href="<?php echo base_url("pengguna");?>"><i class="icon-arrow-left"></i></a> Reset kata sandi <?php echo $a['pengguna_email'];?></legend>
	<form method="POST" action="">
		<table class="table">
			<tr>
				<td>Kata Sandi baru</td>
				<td><input type="hidden" name="id" value="<?php echo $a['id'];?>"><input required name="pengguna_katasandi" type="password" data-transform="input-control"></td>
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