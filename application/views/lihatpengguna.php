<?php
$this->db->where('id',$this->uri->segment(3));
$a = $this->db->get('pengguna');
$a = $a->row_array();
?>
<div class="most-center">
	<legend><a href="<?php echo base_url("pengguna");?>"><i class="icon-arrow-left"></i></a> Detail pengguna</legend>
	<table class="table">
		<tr>
			<td>Nama Depan</td>
			<td><input readonly type="hidden" name="id" value="<?php echo $a['id'];?>"><input readonly required name="pengguna_namadepan" type="text" data-transform="input-control" value="<?php echo $a['pengguna_namadepan'];?>"></td>
			<td></td>
		</tr>
		<tr>
			<td>Nama Belakang</td>
			<td><input readonly value="<?php echo $a['pengguna_namabelakang'];?>" required name="pengguna_namabelakang" type="text" data-transform="input-control"></td>
			<td></td>
		</tr>
		<tr>
			<td>E-Mail</td>
			<td><input readonly required value="<?php echo $a['pengguna_email'];?>" name="pengguna_email" type="text" data-transform="input-control"></td>
			<td></td>
		</tr>
		<tr>
			<td>Aktif</td>
			<td><input readonly required name="pengguna_email" type="text" data-transform="input-control" value="<?php if($a['pengguna_aktif']==1){echo"Ya";} if($a['pengguna_aktif']==0){echo"Tidak";} ?>"></td>
			<td></td>
		</tr>
		<tr>
			<td>Tanggal daftar</td>
			<td><input readonly required name="pengguna_email" type="text" data-transform="input-control" value="<?php echo $a['pengguna_tanggal'];?>"></td>
			<td></td>
		</tr>
		<tr>
			<td>Jam daftar</td>
			<td><input readonly required name="pengguna_email" type="text" data-transform="input-control" value="<?php echo $a['pengguna_jam'];?>"></td>
			<td></td>
		</tr>
	</table>
</div>