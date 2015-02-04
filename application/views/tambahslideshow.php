<div class="most-center">
	<legend><a href="<?php echo base_url("alam");?>"><i class="icon-arrow-left"></i></a> Tambah Slideshow</legend>
	<form method="POST" action="<?php echo base_url();?>alam/save_slide" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<td>Pilih Berkas</td>
				<td><input type="hidden" name="ada" value="ada"><input type="file" name="slidefoto" data-transform="input-control"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit">Simpan</button></td>
			</tr>
		</table>
	</form>
</div>