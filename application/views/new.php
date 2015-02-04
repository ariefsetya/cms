<form method="POST" action="<?php echo base_url();?>report/add.pointer">
<div class="big-center">
<div class="panel">
	<div class="panel-header ribbed-blue fg-white">
		Submit Error
	</div>
	<div class="panel-content">
		<label>Vendor</label>
		<select data-transform="input-control" name="vendor">
			<option value="Lion Air">Lion Air</option>
			<option value="Lion Air Sub">Lion Air Sub</option>
			<option value="Express Air">Express Air</option>
			<option value="Citilink">Citilink</option>
			<option value="Sriwijaya Air">Sriwijaya Air</option>
		</select>
		<label>Error Name</label>
		<input required name="judul" type="text" data-transform="input-control">
		<label>Process</label>
		<input required name="proses" type="text" data-transform="input-control">
		<label>Condition</label>
		<textarea required name="kondisi" type="text" data-transform="input-control"></textarea>
		<label>Solution</label>
		<textarea required name="solusi" type="text" data-transform="input-control"></textarea>
		<label>URL</label>
		<textarea required name="alamat" type="text" data-transform="input-control"></textarea>
		<label>Description</label>
		<textarea required name="keterangan" type="text" data-transform="input-control"></textarea>
		<label>Attachment</label>
		<textarea required name="content" id="content"></textarea>
		<?php echo display_ckeditor($ckeditor); ?>
	</div>
</div>
</div>
<div class="small-right">
	<div class="panel" style="position:fixed;float:right;display:block;">
		<div class="panel-header ribbed-blue fg-white">Tutorial Info</div>
		<div class="panel-content">
		<label>Tags (Separate with comma)</label>
		<input name="tags" type="text" data-transform="input-control">
			<button type="submit">Publish</button>
			<a class="button" href="<?php echo base_url();?>report/create.pointer">Cancel</a>
		</div>
	</div>
</div>
</form>