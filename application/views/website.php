<div class="most-center">
	<?php
	$this->db->where('TYPEDATE','31');
	$a = $this->db->get('web_init');
	$a = $a->row_array();
	?>
	<form method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>backheader/save_data">
		<table class="table">
			<tr>
				<td>Alamat Website</td>
				<td><input type="text" value="<?php echo $a['alamat_web'];?>" name="alamat_web" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Judul Website</td>
				<td><input value="<?php echo $a['judul'];?>" type="text" name="judul" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>favicon</td>
				<td><img style="max-height:100px;" src="<?php echo $a['favicon'];?>"><hr style="margin:0;"><?php echo $a['favicon'];?><hr style="margin-top:0;"><input type="file" name="favicon" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Meta Charset</td>
				<td><input type="text" value="<?php echo $a['meta_charset'];?>" name="meta_charset" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Meta Content Type</td>
				<td><input type="text" value="<?php echo $a['meta_content_type'];?>" name="meta_content_type" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Meta Keywords</td>
				<td><input type="text" value="<?php echo $a['meta_keyword'];?>" name="meta_keyword" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Meta Description</td>
				<td><input type="text" value="<?php echo $a['meta_desc'];?>" name="meta_desc" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Meta Author</td>
				<td><input type="text" value="<?php echo $a['meta_author'];?>" name="meta_author" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Meta Title</td>
				<td><input type="text" value="<?php echo $a['meta_title'];?>" name="meta_title" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Meta Keyword Tag</td>
				<td><input type="text" value="<?php echo $a['meta_keyword_tag'];?>" name="meta_keyword_tag" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Meta Product</td>
				<td><input type="text" value="<?php echo $a['meta_product'];?>" name="meta_product" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Meta Viewport</td>
				<td><input type="text" value="<?php echo $a['meta_viewport'];?>" name="meta_viewport" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Meta Og Title</td>
				<td><input type="text" value="<?php echo $a['meta_og_title'];?>" name="meta_og_title" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Meta Og Description</td>
				<td><input type="text" value="<?php echo $a['meta_og_desc'];?>" name="meta_og_desc" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Meta Og Image</td>
				<td><img style="max-height:100px;" src="<?php echo $a['meta_og_image'];?>"><hr style="margin:0;"><?php echo $a['meta_og_image'];?><hr style="margin-top:0;"><input type="file" name="meta_og_image" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Nama Perusahaan</td>
				<td><input type="text" value="<?php echo $a['namper'];?>" name="namper" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Alamat Perusahaan</td>
				<td><input type="text" value="<?php echo $a['alper'];?>" name="alper" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Office Phone</td>
				<td><input type="text" value="<?php echo $a['offphone'];?>" name="offphone" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" value="<?php echo $a['phone'];?>" name="phone" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Facebook</td>
				<td><input type="text" value="<?php echo $a['fb'];?>" name="fb" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Twitter</td>
				<td><input type="text" value="<?php echo $a['twitter'];?>" name="twitter" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Yahoo! Messenger 1</td>
				<td><input type="text" value="<?php echo $a['ym1'];?>" name="ym1" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Yahoo! Messenger 1</td>
				<td><input type="text" value="<?php echo $a['ym2'];?>" name="ym2" data-transform="input-control"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit">Simpan</button></td>
			</tr>
		</table>
	</form>
</div>