<?php
$this->db->where('id',$this->uri->segment(3));
$a = $this->db->get('pos');
$a = $a->row_array();
?>
<div class="most-center">
	<legend>Hapus Artikel</legend>
	<form method="POST" action="<?php echo base_url("pos/del");?>" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<td style="width:100px;">Judul</td>
				<td><input type="hidden" name="id" value="<?php echo $a['id'];?>"><input readonly value="<?php echo $a['pos_judul'];?>" required type="text" name="judul" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Isi</td>
				<td><?php $spli = explode("</p><p>",$a['pos_isi']); 
					echo $spli[0];?></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit">Hapus</button></td>
				<td></td>
			</tr>
		</table>
	</form>
</div>