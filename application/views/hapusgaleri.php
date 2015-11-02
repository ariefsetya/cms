<?php
$this->db->where('id',$this->uri->segment(3));
$a = $this->db->get('galeri');
$a = $a->row_array();
?>
<div class="most-center">
	<legend>Hapus Galeri</legend>
	<form method="POST" action="<?php echo base_url("galeri/del");?>" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<td style="width:100px;">Judul</td>
				<td><input type="hidden" name="id" value="<?php echo $a['id'];?>"><input readonly value="<?php echo $a['galeri_judul'];?>" required type="text" name="judul" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Isi</td>
				<td align="center" style="width:300px;"><?php 
			if($a['galeri_tipe']=="image/png"||$a['galeri_tipe']=="image/jpeg"||$a['galeri_tipe']=="image/gif"||$a['galeri_tipe']=="image/jpg"){
				echo "<img style='max-width:300px;max-height:300px;' src='".$a['galeri_path']."'>";
			}
			?></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit">Hapus</button></td>
				<td></td>
			</tr>
		</table>
	</form>
</div>