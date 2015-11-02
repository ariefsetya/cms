<div class="most-center">
	<legend>Management Kategori</legend>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Kategori</th>
				<th colspan="2">Tindakan</th>
			</tr>
		</thead>
		<?php
		$a = $this->db->get('kategori');
		$a = $a->result_array();
		$i = 1;
		foreach($a as $key){
			?>
			<tbody>
				<td><?php echo $i;?></td>
				<td><?php echo $key['kategori_nama'];?></td>
				<td><a href="<?php echo base_url().'kategori/ubah/'.$key['id'];?>">Ubah</a></td>
				<td><a href="<?php echo base_url().'kategori/hapus/'.$key['id'];?>">Hapus</a></td>
			</tbody>
			<?php
			$i++;
		}
		?>
	</table>
</div>