<?php
	$data['pesan_baca'] = 1;
	$this->db->where('id',$this->uri->segment(3));
	$this->db->update('pesan',$data);

$this->db->where('id',$this->uri->segment(3));
$a = $this->db->get('pesan');
$row = $a->row_array();
?>
<div class="most-center">
	<legend><a href="<?php echo base_url("pesan");?>"><i class="icon-arrow-left"></i></a> Detail Pesan</legend>
		<table class="table">
			<tr>
				<td>Pengirim</td>
				<td><input readonly required value="<?php echo $row['pesan_nama'];?>" name="nama" type="text" data-transform="input-control"></td>
				<td></td>
			</tr>
			<tr>
				<td>E-Mail</td>
				<td><input id="link" readonly required value="<?php echo $row['pesan_email'];?>" name="tujuan" type="text" data-transform="input-control"></td>
				<td></td>
			</tr>
			<tr>
				<td>Perihal</td>
				<td><input id="icon" readonly value="<?php echo $row['pesan_perihal'];?>" readonly name="icon" type="text" data-transform="input-control"></td>
				<td></td>
			</tr>
			<tr>
				<td>Isi</td>
				<td><?php echo $row['pesan_isi'];?></td>
				<td></td>
			</tr>
		</table>
</div>