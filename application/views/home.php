<?php if($this->session->userdata('admin')==TRUE){ ?>
<div class="most-center">
	<legend>Beranda</legend>
	<div class="text-center" style="display:block;">
	<a href="<?php echo base_url("navigasi");?>"><div style="display:inline-block" class="text-center span3 notice bg-blue marker-on-top">
    	<span class="fg-white" style="font-size:20pt;"><i class="icon-pointer"></i> Navigasi</span>
	</div></a>
	<a href="<?php echo base_url("pos");?>"><div style="display:inline-block" class="text-center span3 notice bg-blue marker-on-top">
    	<span class="fg-white" style="font-size:20pt;"><i class="icon-file"></i> Artikel</span>
	</div></a>
	<a href="<?php echo base_url("pengguna");?>"><div style="display:inline-block" class="text-center span3 notice bg-blue marker-on-top">
    	<span class="fg-white" style="font-size:20pt;"><i class="icon-user-2"></i> Pengguna</span>
	</div></a>
	<a href="<?php echo base_url("pesan");?>"><div style="display:inline-block" class="text-center span3 notice bg-blue marker-on-top">
    	<span class="fg-white" style="font-size:20pt;"><i class="icon-mail"></i> Pesan</span>
	</div></a>
	</div>
	<div style="display:block;height:20px;">
		
	</div>
	<div style="display:block;" class="text-center">
	<a href="<?php echo base_url("galeri");?>"><div style="display:inline-block" class="text-center span2 notice bg-blue marker-on-top">
    	<span class="fg-white" style="font-size:20pt;"><i class="icon-film"></i> Galeri</span>
	</div></a>
	<a href="<?php echo base_url("backheader");?>"><div style="display:inline-block" class="text-center span2 notice bg-blue marker-on-top">
    	<span class="fg-white" style="font-size:20pt;"><i class="icon-monitor"></i> Tampilan</span>
	</div></a>
	<a href="<?php echo base_url("backheader/website");?>"><div style="display:inline-block" class="text-center span2 notice bg-blue marker-on-top">
    	<span class="fg-white" style="font-size:20pt;"><i class="icon-cog"></i> Website</span>
	</div></a>
	</div>
</div>
<?php }else{
?>
<div class="" style="display:inline-block">
<div id="carousel2" class="panel carousel text-center" style="clear:both;display:block;margin-bottom:10px;">
    <?php
    $this->db->where('galeri_ss',1);
    $ss = $this->db->get('galeri');
    $ss = $ss->result_array();
    foreach ($ss as $key) {
    ?>
    <div class="slide" style="">
        <img class="cover1" src="<?php echo $key['galeri_path'];?>">
    </div>
    <?php
	}
	?>
	<div class="markers square" style="right: 10px; left: auto;">
		<ul>
			<li class="active"><a data-num="0" href="javascript:void(0)"></a></li>
			<li class=""><a data-num="1" href="javascript:void(0)"></a></li>
			<li class=""><a data-num="2" href="javascript:void(0)"></a></li>
		</ul>
	</div>
</div>
<?php
	$jum = 0;
	$hal = 1;
	if(isset($_GET['hal'])){
		$hal = $_GET['hal'];
		if($hal == "0"){
			redirect(base_url("home?hal=1"));
		}
		$jum = ($hal-1)*3;
	}
	$this->db->limit(3,$jum);
	$a = $this->db->select('pos.*,pengguna.pengguna_namadepan,pengguna.pengguna_namabelakang');
	$a = $this->db->join('pengguna','pos.pos_idpengguna=pengguna.id','left');
	$a = $this->db->where('pos.pos_aktif',1);
	$a = $this->db->order_by('pos.id','desc');
	$a = $this->db->get('pos');
	if($a->num_rows()==0){
			$jumlah = $this->db->get('pos');
			if($jumlah->num_rows()>0){
				redirect(base_url("home?hal=".($hal-1)));
			}
	}
	$a = $a->result_array();
	$i = 1;
	foreach ($a as $key) {
?>
	<div class="home-left-child" style="float:left;width:300px;margin-right:25px;margin-bottom:12px;">
		<div class="panel chd" style="padding:5px;">
			<?php if($key['pos_gambar']!=""){
				?>
				<img style="max-width:100%" src="<?php echo $key['pos_gambar'];?>">
				<?php } ?>
			<legend style="margin:0px;"><?php echo $key['pos_judul'];?></legend>
			<div><i class="icon-clock"></i> <?php echo $key['pos_tanggal']." ".$key['pos_jam'];?>  <i class="icon-user"></i> <?php echo $key['pengguna_namadepan']." ".$key['pengguna_namabelakang'];?> </div>
			<br>
			<div><?php 
			$isinya = $key['pos_isi'];
			$isi = explode("</p><p>", $isinya);
			if(sizeof($isi)==1){
				echo $isi[0]."...";
			}else{
				echo $isi[0].$isi[1];
			}
			?>
			<a href="<?php echo base_url()."pos/p/".$key['pos_link'];?>">baca selengkapnya</a>
			</div>
		</div>
	</div>
	<?php } ?>
</div>

<div style="display:inherit;clear:both;float:right">
<a class="button" style="margin:10px;" href="<?php echo base_url()."home?hal=".($hal-1);?>">&lt;</a>
<a class="button" href="<?php echo base_url()."home?hal=".($hal+1);?>">&gt;</a>
</div>
<hr>
<?php
} ?>
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