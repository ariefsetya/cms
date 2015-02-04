<?php
if($this->input->post('content')!=""){
	$data['pos_isi'] = $this->input->post('content');
	$data['pos_kategori'] = $this->input->post('kategori');
	$data['pos_link'] = str_replace(array(" ","'",'"',';',':'), "_", $this->input->post('alamat'));
	$data['pos_judul'] = $this->input->post('judul');
	$data['pos_aktif'] = $this->input->post('aktif');
	$data['pos_tag'] = $this->input->post('tags');
	$data['pos_tanggal'] = date("Y-m-d");
	$data['pos_jam'] = date("H:i:s");
	$this->db->where('id',$this->input->post('id'));

	if($_FILES['gambar']['tmp_name']!=""){
		$folder = $_FILES['gambar']['tmp_name'];
		$lokasi = "assets/upload/".$_FILES['gambar']['name'];
		move_uploaded_file($folder,$lokasi);
		$data['pos_gambar'] = base_url().$lokasi;
	}
	$this->db->update('pos',$data);
	redirect(base_url()."pos");
}

$this->db->where('id',$this->uri->segment(3));
$a = $this->db->get('pos');
$a = $a->row_array();
?>
<div class="most-center">
	<legend>Ubah Artikel</legend>
	<form method="POST" action="" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<td style="width:100px;">Judul</td>
				<td><input type="hidden" name="id" value="<?php echo $a['id'];?>"><input value="<?php echo $a['pos_judul'];?>" required type="text" name="judul" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td><select name="kategori" data-transform="input-control">
				<?php
				$b = $this->db->get('kategori');
				$b = $b->result_array();
				foreach ($b as $key) {
				?>
				<option <?php if($a['pos_kategori']==$key['id']){echo"selected";} ?> value="<?php echo $key['id'];?>"><?php echo $key['kategori_nama'];?></option>
				<?php } ?>
				</select></td>
			</tr>
			<tr>
				<td>Isi</td>
				<td>
					<textarea required name="content" id="content"><?php echo $a['pos_isi'];?></textarea>
					<?php echo display_ckeditor($ckeditor); ?></td>
			</tr>
			<tr>
				<td>Gambar Depan</td>
				<td><?php if($a['pos_gambar']!=""){?><img style="width:100%;max-width:100%;" src="<?php echo $a['pos_gambar'];?>"><div><a href="<?php echo base_url();?>pos/hapusgambar/<?php echo $a['id'];?>"><i class="icon-remove"></i> Hapus Gambar</a></div><?php } ?><input type="file" name="gambar" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Alamat Artikel</td>
				<td>http://<?php echo $_SERVER['SERVER_NAME'];?>/pos/p/<input required type="text"  value="<?php echo $a['pos_link'];?>" name="alamat" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Tags</td>
				<td><input type="text" name="tags"  value="<?php echo $a['pos_tag'];?>" data-transform="input-control"></td>
			</tr>
			<tr>
				<td>Aktif</td>
				<td><select name="aktif" data-transform="input-control">
					<option <?php if($a['pos_aktif']=="1"){echo"selected";} ?> value="1">Ya</option>
					<option <?php if($a['pos_aktif']=="0"){echo"selected";} ?> value="0">Tidak</option>
				</select></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit">Perbarui</button></td>
				<td></td>
			</tr>
		</table>
	</form>
</div>