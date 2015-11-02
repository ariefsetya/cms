<?php
if($this->input->post('nama')){
	$this->db->where('id',$this->uri->segment(3));
	$this->db->delete('navigasi');
	redirect(base_url("navigasi"));
}
$this->db->where('id',$this->uri->segment(3));
$a = $this->db->get('navigasi');
$row = $a->row_array();
?>
<div class="most-center">
	<legend><a href="<?php echo base_url("navigasi");?>"><i class="icon-arrow-left"></i></a> Hapus Navigasi</legend>
	<form method="POST" action="">
		<table class="table">
			<tr>
				<td>Nama Menu</td>
				<td><input readonly required value="<?php echo $row['menu_nama'];?>" name="nama" type="text" data-transform="input-control"></td>
				<td></td>
			</tr>
			<tr>
				<td>Link Tujuan</td>
				<td><input readonly required value="<?php echo $row['menu_link'];?>" name="tujuan" type="text" data-transform="input-control"></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="save">Hapus</button> <a class="button" href="<?php echo base_url();?>navigasi">Batal</a></td>
				<td></td>
			</tr>
		</table>
	</form>
</div>