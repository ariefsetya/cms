<?php
if($this->input->post('parent')){
	$data['menu_parent'] = $this->input->post('parent');
	$data['menu_nama'] = $this->input->post('nama');
	$data['menu_keterangan'] = $this->input->post('nama');
	$data['menu_link'] = $this->input->post('tujuan');
	$data['menu_icon'] = $this->input->post('icon');
	$data['menu_aktif'] = $this->input->post('aktif');
	$data['menu_indeks'] = $this->input->post('indeks');
	$data['menu_tipe'] = $this->input->post('hak');
	$this->db->insert('navigasi',$data);
	redirect(base_url("navigasi"));
}

?>
<div class="most-center">
	<legend><a href="<?php echo base_url("navigasi");?>"><i class="icon-arrow-left"></i></a> Tambah Navigasi</legend>
	<form method="POST" action="">
		<table class="table">
			<tr>
				<td>Menu Induk</td>
				<td><select name="parent" data-transform="input-control">
					<?php
					$this->db->order_by('menu_tipe','asc');
					//$this->db->order_by('menu_indeks','asc');
					$a = $this->db->get('navigasi');
					$a = $a->result_array();
					foreach ($a as $key) {
						?>
						<option <?php if($this->uri->segment(3)==$key['id']){echo"selected";} ?> value="<?php echo $key['id'];?>"><?php if($key['menu_tipe']==1){echo"Admin : ";}else{echo"Guest : ";} echo $key['menu_nama'];?></option>
						<?php
					}
					?>
				</select></td>
				<td></td>
			</tr>
			<tr>
				<td>Nama Menu</td>
				<td><input required name="nama" type="text" data-transform="input-control"></td>
				<td></td>
			</tr>
			<tr>
				<td>Link Tujuan</td>
				<td><input id="link" required name="tujuan" type="text" data-transform="input-control"></td>
				<td><span onclick="$('#link').val('<?php echo base_url();?>')" class="button"> <i class="icon-home"></i> </span></td>
			</tr>
			<tr>
				<td>Icon</td>
				<td><input id="icon" value="icon-file" readonly name="icon" type="text" data-transform="input-control"></td>
				<td><span onclick="coba()" class="button"> <i class="icon-search"></i> </span></td>
			</tr>
			<tr>
				<td>Aktif</td>
				<td><select name="aktif" data-transform="input-control">
					<option value="1">Ya</option>
					<option value="0">Tidak</option>
				</select></td>
				<td></td>
			</tr>
			<tr>
				<td>Hak</td>
				<td><select name="hak" data-transform="input-control">
					<option value="0">Pengguna</option>
					<option value="1">Admin</option>
				</select></td>
				<td></td>
			</tr>
			<tr>
				<td>Indeks</td>
				<td><input required type="text" name="indeks" data-transform="input-control" value="1"></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="save">Simpan</button></td>
				<td></td>
			</tr>
		</table>
	</form>
</div>
<script type="text/javascript">
		 function coba(){
			$.Dialog({
				shadow: true,
				overlay: false,
				draggable: true,
				icon: '<span class="icon-enter"></span>',
				title: 'Draggable window',
				width: 700,
				padding: 10,
				content: 'Masuk',
				onShow: function(){
					var content = '<ol class="unstyled four-columns" id="icon-list">'+
	'<li style="cursor:pointer" onclick="addto('+"'icon-home'"+')"><i class="icon-home"></i> icon-home</li>'+
	'<li style="cursor:pointer" onclick="addto('+"'icon-newspaper'"+')"><i class="icon-newspaper"></i> icon-newspaper</li>'+
	'<li style="cursor:pointer" onclick="addto('+"'icon-pencil'"+')"><i class="icon-pencil"></i> icon-pencil</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-droplet'"+')"><i class="icon-droplet"></i> icon-droplet</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-pictures'"+')"><i class="icon-pictures"></i> icon-pictures</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-camera'"+')"><i class="icon-camera"></i> icon-camera</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-music'"+')"><i class="icon-music"></i> icon-music</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-film'"+')"><i class="icon-film"></i> icon-film</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-camera-2'"+')"><i class="icon-camera-2"></i> icon-camera-2</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-spades'"+')"><i class="icon-spades"></i> icon-spades</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-clubs'"+')"><i class="icon-clubs"></i> icon-clubs</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-diamonds'"+')"><i class="icon-diamonds"></i> icon-diamonds</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-broadcast'"+')"><i class="icon-broadcast"></i> icon-broadcast</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-mic'"+')"><i class="icon-mic"></i> icon-mic</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-book'"+')"><i class="icon-book"></i> icon-book</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-file'"+')"><i class="icon-file"></i> icon-file</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-new'"+')"><i class="icon-new"></i> icon-new</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-copy'"+')"><i class="icon-copy"></i> icon-copy</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-folder'"+')"><i class="icon-folder"></i> icon-folder</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-folder-2'"+')"><i class="icon-folder-2"></i> icon-folder-2</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-tag'"+')"><i class="icon-tag"></i> icon-tag</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-phone'"+')"><i class="icon-phone"></i> icon-phone</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-mail'"+')"><i class="icon-mail"></i> icon-mail</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-location'"+')"><i class="icon-location"></i> icon-location</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-compass'"+')"><i class="icon-compass"></i> icon-compass</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-history'"+')"><i class="icon-history"></i> icon-history</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-clock'"+')"><i class="icon-clock"></i> icon-clock</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-bell'"+')"><i class="icon-bell"></i> icon-bell</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-calendar'"+')"><i class="icon-calendar"></i> icon-calendar</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-cabinet'"+')"><i class="icon-cabinet"></i> icon-cabinet</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-drawer'"+')"><i class="icon-drawer"></i> icon-drawer</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-user'"+')"><i class="icon-user"></i> icon-user</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-busy'"+')"><i class="icon-busy"></i> icon-busy</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-search'"+')"><i class="icon-search"></i> icon-search</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-fire'"+')"><i class="icon-fire"></i> icon-fire</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-lab'"+')"><i class="icon-lab"></i> icon-lab</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-remove'"+')"><i class="icon-remove"></i> icon-remove</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-briefcase'"+')"><i class="icon-briefcase"></i> icon-briefcase</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-cars'"+')"><i class="icon-cars"></i> icon-cars</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-bus'"+')"><i class="icon-bus"></i> icon-bus</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-cube'"+')"><i class="icon-cube"></i> icon-cube</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-cube-2'"+')"><i class="icon-cube-2"></i> icon-cube-2</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-puzzle'"+')"><i class="icon-puzzle"></i> icon-puzzle</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-glasses'"+')"><i class="icon-glasses"></i> icon-glasses</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-glasses-2'"+')"><i class="icon-glasses-2"></i> icon-glasses-2</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-link'"+')"><i class="icon-link"></i> icon-link</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-link-2'"+')"><i class="icon-link-2"></i> icon-link-2</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-flag'"+')"><i class="icon-flag"></i> icon-flag</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-flag-2'"+')"><i class="icon-flag-2"></i> icon-flag-2</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-eye'"+')"><i class="icon-eye"></i> icon-eye</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-bookmark'"+')"><i class="icon-bookmark"></i> icon-bookmark</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-star'"+')"><i class="icon-star"></i> icon-star</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-earth'"+')"><i class="icon-earth"></i> icon-earth</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-battery'"+')"><i class="icon-battery"></i> icon-battery</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-list'"+')"><i class="icon-list"></i> icon-list</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-grid'"+')"><i class="icon-grid"></i> icon-grid</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-alarm'"+')"><i class="icon-alarm"></i> icon-alarm</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-layers-alt'"+')"><i class="icon-layers-alt"></i> icon-layers-alt</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-layers'"+')"><i class="icon-layers"></i> icon-layers</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-rainbow'"+')"><i class="icon-rainbow"></i> icon-rainbow</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-air'"+')"><i class="icon-air"></i> icon-air</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-spin'"+')"><i class="icon-spin"></i> icon-spin</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-auction'"+')"><i class="icon-auction"></i> icon-auction</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-dollar'"+')"><i class="icon-dollar"></i> icon-dollar</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-dollar-2'"+')"><i class="icon-dollar-2"></i> icon-dollar-2</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-coins'"+')"><i class="icon-coins"></i> icon-coins</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-file-2'"+')"><i class="icon-file-2"></i> icon-file-2</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-tools'"+')"><i class="icon-tools"></i> icon-tools</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-alarm-2'"+')"><i class="icon-alarm-2"></i> icon-alarm-2</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-ruler'"+')"><i class="icon-ruler"></i> icon-ruler</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-lamp'"+')"><i class="icon-lamp"></i> icon-lamp</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-stats-2'"+')"><i class="icon-stats-2"></i> icon-stats-2</li>'+
    '<li style="cursor:pointer" onclick="addto('+"'icon-stats-3'"+')"><i class="icon-stats-3"></i> icon-stats-3</li>'+
'</ol>';
					$.Dialog.title("Pilih Icon");
					$.Dialog.content(content);
				}
			});
		}
		function addto (argument) {
			$("#icon").val(argument);	
			$.Dialog.close();	
		}	
</script>