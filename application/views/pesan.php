<div class="most-center">
	<legend>Management Pesan</legend>
	<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>E-Mail</th>
			<th>Subyek</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<?php
	$jum = 0;
	$hal = 1;
	if(isset($_GET['hal'])){
		$hal = $_GET['hal'];
		if($hal == "0"){
			redirect(base_url("pesan?hal=1"));
		}
		$jum = ($hal-1)*10;
	}
	$this->db->limit(10,$jum);
	$a = $this->db->order_by('id','desc');
	$a = $this->db->get('pesan');
	if($a->num_rows()==0){
			$jumlah = $this->db->get('pesan');
			if($jumlah->num_rows()>0){
				redirect(base_url("pesan?hal=".($hal-1)));
			}
	}
	$a = $a->result_array();
	$i = 1;
	foreach ($a as $key) {
		?>
		<tr>
			<td align="center"><?php if($hal>1){echo $hal-1;}echo $i;?></td>
			<td align="center"><?php echo $key['pesan_nama'];?></td>
			<td align="center"><?php echo $key['pesan_email'];?></td>
			<td align="center"><?php echo $key['pesan_perihal'];?></td>
			<td align="center"><a href="<?php echo base_url("pesan/lihat/".$key['id']);?>">Lihat</a></td>
		</tr>
		<?php
		$i++;
	}
	?>
	</table>
	<a class="button" href="<?php echo base_url()."pesan?hal=".($hal-1);?>">&lt;</a>
	<a class="button" href="<?php echo base_url()."pesan?hal=".($hal+1);?>">&gt;</a>
</div>