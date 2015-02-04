<div class="most-center">
	<div style="display:block;width:100%;">
	<?php
	$jum = 0;
	$hal = 1;
	if(isset($_GET['hal'])){
		$hal = $_GET['hal'];
		if($hal == "0"){
			redirect(base_url("galeri?hal=1"));
		}
		$jum = ($hal-1)*12;
	}
	$this->db->limit(12,$jum);
	$this->db->where('galeri_ss',0);
	$a = $this->db->order_by('id','desc');
	$a = $this->db->get('galeri');
	if($a->num_rows()==0){
			$jumlah = $this->db->get('galeri');
			if($jumlah->num_rows()>0){
				redirect(base_url("galeri?hal=".($hal-1)));
			}
	}
	$a = $a->result_array();
	foreach ($a as $key) {
		?>
		<div class="panel" style="width:300px;float:left;height:300px;margin-right:12px;margin-bottom:12px;">
		<div class="panel-header">
			<?php echo $key['galeri_judul'];?>
		</div>
		<div class="panel-content">
			<?php 
			if($key['galeri_tipe']=="image/png"||$key['galeri_tipe']=="image/jpeg"||$key['galeri_tipe']=="image/gif"||$key['galeri_tipe']=="image/jpg"){
				echo "<img style='max-width:250px;max-height:250px;margin:auto;' src='".$key['galeri_path']."'>";
			}
			?>
			</div>
			</div>
		<?php
	}
	?>
	</div>
	<div style="display:block;clear:both;">
	<br>
	<hr>
	<a class="button" href="<?php echo base_url()."galeri?hal=".($hal-1);?>">&lt;</a>
	<a class="button" href="<?php echo base_url()."galeri?hal=".($hal+1);?>">&gt;</a>
	</div>
</div>