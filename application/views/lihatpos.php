<?php
	$this->db->select("pos.*,pengguna.pengguna_namadepan,pengguna.pengguna_namabelakang");
	$this->db->where('pos.pos_link',$this->uri->segment(3));
	$this->db->join('pengguna','pengguna.id=pos.pos_idpengguna','left');
	$a = $this->db->get('pos');
	if($a->num_rows()>0){
	$a = $a->row_array();
?>
<div class="most-center">
	<span style="font-size:20pt;"><?php echo $a['pos_judul'];?></span>
	<hr style="margin:0;">
	<div><i class="icon-clock"></i> <?php echo $a['pos_tanggal']." ".$a['pos_jam'];?>  <i class="icon-user"></i> <?php echo $a['pengguna_namadepan']." ".$a['pengguna_namabelakang'];?> </div>
	<br>
	<div>
		<?php if($a['pos_gambar']!=""){ ?><img src="<?php echo $a['pos_gambar'];?>"><?php } ?>
		<?php echo $a['pos_isi'];?>
	</div>
</div>
<?php }else{
	echo "<div class='most-center'>
	<legend>Halaman tidak ditemukan</legend>
	<h3><i class='icon-warning'></i> Kami tidak dapat menemukan halaman apapun, silahkan kembali ke <a href='".base_url()."'>Beranda</a></h3></div>";
} ?>