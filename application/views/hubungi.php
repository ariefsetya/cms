<?php
if($this->uri->segment(2)){
	?>
	<div class="notice marker-on-bottom ribbed-blue fg-white">
		Pesan Anda berhasil dikirim
	</div>
	<hr>
	<?php
}
?>
<div class="most-center">
	<form method="POST" action="<?php echo base_url();?>hubungi/kirim">
	<fieldset>
		<legend>Tinggalkan pesan</legend>
		<table class="table span7">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="pesan_nama" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>E-Mail</td>
				<td><input type="email" name="pesan_email" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Perihal</td>
				<td><input type="text" name="pesan_perihal" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Isi</td>
				<td><textarea name="pesan_isi" data-transform="input-control"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit">Kirim</button></td>
			</tr>
		</table>
	</fieldset>
	</form>
</div>