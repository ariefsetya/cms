<div class="most-center">
	<legend>Management alam<span class='place-right'><a class="button" href="<?php echo base_url()."alam/tambah";?>">Tambah</a></span></legend>
	<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Isi</th>
			<th>Tipe</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<?php
	$jum = 0;
	$hal = 1;
	if(isset($_GET['hal'])){
		$hal = $_GET['hal'];
		if($hal == "0"){
			redirect(base_url("alam?hal=1"));
		}
		$jum = ($hal-1)*10;
	}
	$this->db->limit(10,$jum);
	$a = $this->db->order_by('id','desc');
	$a = $this->db->get('slideshow');
	if($a->num_rows()==0){
			$jumlah = $this->db->get('slideshow');
			if($jumlah->num_rows()>0){
				redirect(base_url("alam?hal=".($hal-1)));
			}
	}
	$a = $a->result_array();
	$i = 1;
	foreach ($a as $key) {
		?>
		<tr>
			<td align="center"><?php if($hal>1){echo $hal-1;}echo $i;?></td>
			<td align="center" style="width:300px;"><?php 
			if($key['slideshow_tipe']=="image/png"||$key['slideshow_tipe']=="image/jpeg"||$key['slideshow_tipe']=="image/gif"||$key['slideshow_tipe']=="image/jpg"){
				echo "<img style='max-width:300px;max-height:300px;' src='".$key['slideshow_path']."'>";
			}
			?></td>
			<td align="center"><?php echo $key['slideshow_tipe'];?></td>
			<td align="center"><a href="<?php echo base_url("alam/hapus/".$key['id']);?>">Hapus</a></td>
		</tr>
		<?php
		$i++;
	}
	?>
	</table>
	<a class="button" href="<?php echo base_url()."alam?hal=".($hal-1);?>">&lt;</a>
	<a class="button" href="<?php echo base_url()."alam?hal=".($hal+1);?>">&gt;</a>
</div>