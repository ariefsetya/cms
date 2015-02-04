<?php
$this->db->where('id',$this->uri->segment(3));
$a = $this->db->get('slideshow');
$a = $a->row_array();
?>
<div class="most-center">
	<legend>Hapus Slideshow</legend>
	<form method="POST" action="<?php echo base_url("alam/del");?>" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $a['id'];?>">Isi</td>
				<td align="center" style="width:300px;"><?php 
			if($a['slideshow_tipe']=="image/png"||$a['slideshow_tipe']=="image/jpeg"||$a['slideshow_tipe']=="image/gif"||$a['slideshow_tipe']=="image/jpg"){
				echo "<img style='max-width:300px;max-height:300px;' src='".$a['slideshow_path']."'>";
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