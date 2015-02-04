<div class="most-center">
	<legend>Management Pengguna</legend>
	<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>E-Mail</th>
			<th>Aktif</th>
			<th colspan="4">Tindakan</th>
		</tr>
	</thead>
	<?php
	$jum = 0;
	$hal = 1;
	if(isset($_GET['hal'])){
		$hal = $_GET['hal'];
		if($hal == "0"){
			redirect(base_url("pengguna?hal=1"));
		}
		$jum = ($hal-1)*10;
	}
	$this->db->limit(10,$jum);
	$a = $this->db->order_by('id','desc');
	$a = $this->db->get('pengguna');
	if($a->num_rows()==0){
			$jumlah = $this->db->get('pengguna');
			if($jumlah->num_rows()>0){
				redirect(base_url("pengguna?hal=".($hal-1)));
			}
	}
	$a = $a->result_array();
	$i = 1;
	foreach ($a as $key) {
		?>
		<tr>
			<td align="center"><?php if($hal>1){echo $hal-1;}echo $i;?></td>
			<td><?php echo $key['pengguna_namadepan']." ".$key['pengguna_namabelakang'];?></td>
			<td align="center"><?php echo $key['pengguna_email'];?></td>
			<td align="center"><?php if($key['pengguna_aktif']==1){echo"Ya";}else{echo"Tidak";} ?></td>
			<td align="center"><a href="<?php echo base_url("pengguna/lihat/".$key['id']);?>">Lihat</a></td>
			<td align="center"><a href="<?php echo base_url("pengguna/ubah/".$key['id']);?>">Ubah</a></td>
			<td align="center"><a href="<?php echo base_url("pengguna/pass/".$key['id']);?>">Reset</a></td>
			<td align="center"><a href="<?php echo base_url("pengguna/hapus/".$key['id']);?>">Hapus</a></td>
		</tr>
		<?php
		$i++;
	}
	?>
	</table>
	<a class="button" href="<?php echo base_url()."pengguna?hal=".($hal-1);?>">&lt;</a>
	<a class="button" href="<?php echo base_url()."pengguna?hal=".($hal+1);?>">&gt;</a>
</div>