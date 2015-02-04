<div class="most-center">
	<legend>Management Galeri</legend>
	<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Judul</th>
			<th>Isi</th>
			<th>Tipe</th>
			<th>Slideshow</th>
			<th colspan="2">Tindakan</th>
		</tr>
	</thead>
	<?php
	$jum = 0;
	$hal = 1;
	if(isset($_GET['hal'])){
		$hal = $_GET['hal'];
		if($hal == "0"){
			redirect(base_url("galeri?hal=1"));
		}
		$jum = ($hal-1)*10;
	}
	$this->db->limit(10,$jum);
	$a = $this->db->order_by('id','desc');
	$a = $this->db->get('galeri');
	if($a->num_rows()==0){
			$jumlah = $this->db->get('galeri');
			if($jumlah->num_rows()>0){
				redirect(base_url("galeri?hal=".($hal-1)));
			}
	}
	$a = $a->result_array();
	$i = 1;
	foreach ($a as $key) {
		?>
		<tr>
			<td align="center"><?php if($hal>1){echo $hal-1;}echo $i;?></td>
			<td align="center"><?php echo $key['galeri_judul'];?></td>
			<td align="center" style="width:300px;"><?php 
			if($key['galeri_tipe']=="image/png"||$key['galeri_tipe']=="image/jpeg"||$key['galeri_tipe']=="image/gif"||$key['galeri_tipe']=="image/jpg"){
				echo "<img style='max-width:300px;max-height:300px;' src='".$key['galeri_path']."'>";
			}
			?></td>
			<td align="center"><?php echo $key['galeri_tipe'];?></td>
			<td align="center"><?php echo ($key['galeri_ss']==0)?"<a href='".base_url("galeri/aktifss/".$key['id'])."'>Aktifkan</a>":"<a href='".base_url("galeri/nonaktifss/".$key['id'])."'>Nonaktifkan</a>";?></td>
			<td align="center"><a href="<?php echo base_url("galeri/lihat/".$key['id']);?>">Lihat</a></td>
			<td align="center"><a href="<?php echo base_url("galeri/hapus/".$key['id']);?>">Hapus</a></td>
		</tr>
		<?php
		$i++;
	}
	?>
	</table>
	<a class="button" href="<?php echo base_url()."galeri?hal=".($hal-1);?>">&lt;</a>
	<a class="button" href="<?php echo base_url()."galeri?hal=".($hal+1);?>">&gt;</a>
</div>