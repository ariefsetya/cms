<?php if($this->session->userdata('admin')==FALSE){ ?>
<div class="most-center" style="padding:0px;border:0;">
	<?php
	$jum = 0;
	$hal = 1;
	if(isset($_GET['hal'])){
		$hal = $_GET['hal'];
		if($hal == "0"){
			redirect(base_url("pos?hal=1"));
		}
		$jum = ($hal-1)*10;
	}
	$this->db->limit(10,$jum);
	$a = $this->db->select('pos.*,pengguna.pengguna_namadepan,pengguna.pengguna_namabelakang');
	$a = $this->db->join('pengguna','pos.pos_idpengguna=pengguna.id','left');
	$a = $this->db->where('pos.pos_aktif',1);
	$a = $this->db->order_by('pos.id','desc');
	$a = $this->db->get('pos');
	if($a->num_rows()==0){
			$jumlah = $this->db->get('pos');
			if($jumlah->num_rows()>0){
				redirect(base_url("pos?hal=".($hal-1)));
			}
	}
	$a = $a->result_array();
	$i = 1;
	foreach ($a as $key) {
		?><div class="panel chd" style="padding:10px;">
			<legend style="margin:0px;"><?php echo $key['pos_judul'];?></legend>
			<div><i class="icon-clock"></i> <?php echo $key['pos_tanggal']." ".$key['pos_jam'];?>  <i class="icon-user"></i> <?php echo $key['pengguna_namadepan']." ".$key['pengguna_namabelakang'];?> </div>
			<br>
			<div>
				<?php if($key['pos_gambar']!=""){
				?>
				<img style="max-width:100%" src="<?php echo $key['pos_gambar'];?>">
				<?php } echo $key['pos_isi'];?>
			</div>
		</div>
		<hr>
		<?php
		$i++;
	}
	?>
	<a class="button" style="margin:10px;" href="<?php echo base_url()."pos?hal=".($hal-1);?>">&lt;</a>
	<a class="button" href="<?php echo base_url()."pos?hal=".($hal+1);?>">&gt;</a>
</div>
<?php } elseif($this->session->userdata('admin')==TRUE){ 
	?>
	<div class="most-center">
	<legend>Management Artikel</legend>
	<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Judul</th>
			<th>Tanggal</th>
			<th>Jam</th>
			<th colspan="3">Tindakan</th>
		</tr>
	</thead>
	<?php
	$jum = 0;
	$hal = 1;
	if(isset($_GET['hal'])){
		$hal = $_GET['hal'];
		if($hal == "0"){
			redirect(base_url("pos?hal=1"));
		}
		$jum = ($hal-1)*10;
	}
	$this->db->limit(10,$jum);
	$a = $this->db->order_by('id','desc');
	$a = $this->db->get('pos');
	if($a->num_rows()==0){
			$jumlah = $this->db->get('pos');
			if($jumlah->num_rows()>0){
				redirect(base_url("pos?hal=".($hal-1)));
			}
	}
	$a = $a->result_array();
	$i = 1;
	foreach ($a as $key) {
		?>
		<tr>
			<td align="center"><?php if($hal>1){echo $hal-1;}echo $i;?></td>
			<td><?php echo $key['pos_judul'];?></td>
			<td align="center"><?php echo $key['pos_tanggal'];?></td>
			<td align="center"><?php echo $key['pos_jam'];?></td>
			<td align="center"><a href="<?php echo base_url("pos/lihat/".$key['pos_link']);?>">Lihat</a></td>
			<td align="center"><a href="<?php echo base_url("pos/ubah/".$key['id']);?>">Ubah</a></td>
			<td align="center"><a href="<?php echo base_url("pos/hapus/".$key['id']);?>">Hapus</a></td>
		</tr>
		<?php
		$i++;
	}
	?>
	</table>
	<a class="button" href="<?php echo base_url()."pos?hal=".($hal-1);?>">&lt;</a>
	<a class="button" href="<?php echo base_url()."pos?hal=".($hal+1);?>">&gt;</a>
</div>
<?php
}
?>

<style type="text/css">
	
div.chd:hover{
	border: 1px solid #0099ee;
	transition:border .5s;
	-webkit-transition:border .5s;
	-moz-transition:border .5s;
	-o-transition:border .5s;
	-ms-transition:border .5s;
}
</style>