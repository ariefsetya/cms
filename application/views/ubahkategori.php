<?php
if($this->input->post('nama')){
	$data['kategori_nama'] = $this->input->post('nama');
	$data['kategori_tanggal'] = date("Y-m-d");
	$data['kategori_jam'] = date("H:i:s");
	$this->db->where('id',$this->input->post('id'));
	$this->db->update('kategori',$data);
	redirect(base_url("kategori"));
}
$this->db->where('id',$this->uri->segment(3));
$a = $this->db->get('kategori');
$a = $a->row_array();
?>
<div class="most-center">
	<legend><a href="<?php echo base_url("kategori");?>"><i class="icon-arrow-left"></i></a> Ubah Kategori</legend>
	<form method="POST" action="">
		<table class="table">
			<tr>
				<td>Nama Kategori</td>
				<td><input name="id" type="hidden" value="<?php echo $a['id'];?>"><input required name="nama" type="text" value="<?php echo $a['kategori_nama'];?>" data-transform="input-control"></td>
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