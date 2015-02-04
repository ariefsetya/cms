<nav class="navigation-bar bg-blue">
	<div class="navigation-bar-content">

		<a class="pull-menu" href="#"></a>
		<ul class="element-menu" style="">
			<?php 

			if($this->session->userdata('admin')==FALSE){
				echo $this->my->linkedmenu(17,0);
			}elseif ($this->session->userdata('admin')==TRUE) {
				echo $this->my->linkedmenu(1,1);
			}
			?>
		</ul>
		<?php
		if($this->session->userdata('admin')==TRUE){
			?>
			<div class="no-tablet-portrait">

				<div class="element place-right">
					<a class="dropdown-toggle" href="#">
						<span class="icon-cog"></span>
					</a>
					<ul class="dropdown-menu place-right" data-role="dropdown">
						<li><a href="#">Pengaturan</a></li>
						<li><a href="#">Bantuan</a></li>
						<li><a href="<?php echo base_url();?>masuk/cekkeluar">Keluar</a></li>
					</ul>
				</div>
				<span class="element-divider place-right"></span>
				<div class="element place-right">
					<i class="icon-user"></i> <?php echo $this->session->userdata('namalengkap');?>
				</div>
			</div>
			<?php }else{
				?>

				<div class="no-tablet-portrait">

					<div class="element place-right">
						<a class="element-menu" onclick="login()" href="#"><i class="icon-enter"></i> Masuk</a>
					</div>
				</div>
				<?php
			} ?>
		</div>
	</nav>
	<script type="text/javascript">
		 function login(){
			$.Dialog({
				shadow: true,
				overlay: false,
				draggable: true,
				icon: '<span class="icon-enter"></span>',
				title: 'Draggable window',
				width: 500,
				padding: 10,
				content: 'Masuk',
				onShow: function(){
					var content = '<form method="POST" action="<?php echo base_url();?>masuk/cekmasuk" id="login-form-1">' +
					'<label>E-Mail</label>' +
					'<div class="input-control text"><input required type="email" name="login"><button class="btn-clear"></button></div>' +
					'<label>Kata Sandi</label>'+
					'<div class="input-control password"><input required type="password" name="password"><button class="btn-reveal"></button></div>' +
					'<div class="form-actions">' +
					'<button class="button primary" type="submit">Masuk</button>&nbsp;'+
					'<button class="button" type="button" onclick="$.Dialog.close()">Cancel</button> '+
					'</div>'+
					'</form>';
					$.Dialog.title("Masuk");
					$.Dialog.content(content);
				}
			});
		}	
</script>