<?php
$this->db->where('TYPEDATE','31');
$a = $this->db->get('web_init');
$a = $a->row_array();
?>
</div>
<?php

if($this->session->userdata('admin')==FALSE){

?>
<div class="panel bg-blue fg-white" style="border:0px;color:white !important;">
	<div class="grid" style="margin-top:0px;padding-top:0px;">
		<div class="row" style="padding:10px;">
			<div class="span4">
	            <img style="width:100%" src="<?php echo $a['header_front'];?>">
	            <h4><?php echo $a['namper'];?></h4>
	            <h5><i class='icon-home'></i> <?php echo $a['alper'];?></h5>
	            <h5><i class='icon-phone'></i> <?php echo $a['offphone'];?></h5>
	            <h5><i class='icon-phone'></i> <?php echo $a['phone'];?></h5>
				<div>
				<a href="http://www.freecounterstat.com" title="free stat counter"><img src="http://counter1.allfreecounter.com/private/freecounterstat.php?c=72ffb73068c8c3e03f37369c78040e38" border="0" title="free stat counter" alt="free stat counter"></a>
        		</div>
	        </div>
			<div class="span4">
	            <h4><?php echo $a['judul1'];?></h4>
	            <div>
	            	<ul style="list-style-type:none;">
	            		<li><i class="icon-checkmark"></i> <?php echo $a['subjudul1'];?>
	            			<ul style="list-style-type:none;">
	            			<?php
	            			$text = trim($a['isi1']);
							$textAr = explode("\n", $text);
							$textAr = array_filter($textAr, 'trim'); // remove any extra \r characters left behind

							foreach ($textAr as $line) {
								?>
	            				<li><i class="icon-checkmark"></i> <?php echo $line;?></li>
	            				<?php
		            			}
		            			?>
	            			</ul>
	            		</li>
	            	</ul>
	            </div>
	        </div>
			<div class="span4">
	            <h4>&nbsp;</h4>
	            <div>
	            	<ul style="list-style-type:none;">
	            		<li><i class="icon-checkmark"></i> <?php echo $a['subjudul2'];?>
	            			<ul style="list-style-type:none;">
	            			<?php
	            			$text = trim($a['isi2']);
							$textAr = explode("\n", $text);
							$textAr = array_filter($textAr, 'trim'); // remove any extra \r characters left behind

							foreach ($textAr as $line) {
								?>
	            				<li><i class="icon-checkmark"></i> <?php echo $line;?></li>
	            				<?php
		            			}
		            			?>
	            			</ul>
	            		</li>
	            	</ul>
	            </div>
	        </div>
        </div>
	</div>
</div>
<?php
}
?>
</div>

<div style="position:fixed;bottom:10px;right:10px;width:150px;">
	<a href="ymsgr:sendIM?<?php echo $a['ym1'];?>"> <img src="http://opi.yahoo.com/online?u=<?php echo $a['ym1'];?>&m=g&t=14&l=id"/></a>
	<a href="ymsgr:sendIM?<?php echo $a['ym2'];?>"> <img src="http://opi.yahoo.com/online?u=<?php echo $a['ym2'];?>&m=g&t=14&l=id"/></a>
</div>
<!-- Load JavaScript Libraries -->
<script src="<?php echo base_url();?>assets/js/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/ckeditor/ckeditor.js"></script>

<script src="<?php echo base_url();?>assets/js/jquery/jquery.widget.min.js"></script>


<!-- Metro UI CSS JavaScript plugins -->
<script src="<?php echo base_url();?>assets/js/metro.min.js"></script>
<script src="<?php echo base_url();?>assets/js/load-metro.js"></script>
<script src="<?php echo base_url();?>assets/js/docs.js"></script>
<script src="<?php echo base_url();?>assets/js/script.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/syntax/scripts/shCore.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/syntax/scripts/shAutoloader.js"></script>
<!--End of Zopim Live Chat Script-->
<script type="text/javascript">
    SyntaxHighlighter.autoloader(
	    ['js','jscript','javascript','<?php echo base_url();?>assets/syntax/scripts/shBrushJScript.js'],
	    ['bash','shell','<?php echo base_url();?>assets/syntax/scripts/shBrushBash.js'],
	    ['css','<?php echo base_url();?>assets/syntax/scripts/shBrushCss.js'],
	    ['cpp','<?php echo base_url();?>assets/syntax/scripts/shBrushCpp.js'],
	    ['xml','<?php echo base_url();?>assets/syntax/scripts/shBrushXml.js'],
	    ['sql','<?php echo base_url();?>assets/syntax/scripts/shBrushSql.js'],
	    ['php','<?php echo base_url();?>assets/syntax/scripts/shBrushPhp.js'],
	    ['applescript','<?php echo base_url();?>assets/syntax/scripts/shBrushAppleScript.js'],
	    ['actionscript3','as3','<?php echo base_url();?>assets/syntax/scripts/shBrushAS3.js'],
	    ['coldfusion','cf','<?php echo base_url();?>assets/syntax/scripts/shBrushColdFusion.js'],
	    ['c#', 'c-sharp', 'csharp','<?php echo base_url();?>assets/syntax/scripts/shBrushCSharp.js'],
	    ['delphi', 'pascal', 'pas','<?php echo base_url();?>assets/syntax/scripts/shBrushDelphi.js'],
	    ['diff', 'patch','<?php echo base_url();?>assets/syntax/scripts/shBrushDiff.js'],
	    ['erl', 'erlang','<?php echo base_url();?>assets/syntax/scripts/shBrushErlang.js'],
	    ['groovy','<?php echo base_url();?>assets/syntax/scripts/shBrushGroovy.js'],
	    ['java','<?php echo base_url();?>assets/syntax/scripts/shBrushJava.js'],
	    ['jfx', 'javafx','<?php echo base_url();?>assets/syntax/scripts/shBrushJavaFX.js'],
	    ['perl', 'Perl', 'pl','<?php echo base_url();?>assets/syntax/scripts/shBrushPerl.js'],
	    ['text', 'plain','<?php echo base_url();?>assets/syntax/scripts/shBrushPlain.js'],
	    ['powershell', 'ps','<?php echo base_url();?>assets/syntax/scripts/shBrushPowerShell.js'],
	    ['py', 'python','<?php echo base_url();?>assets/syntax/scripts/shBrushPython.js'],
	    ['ruby', 'rails', 'ror', 'rb','<?php echo base_url();?>assets/syntax/scripts/shBrushRuby.js'],
	    ['sass', 'scss','<?php echo base_url();?>assets/syntax/scripts/shBrushSass.js'],
	    ['scala','<?php echo base_url();?>assets/syntax/scripts/shBrushScala.js'],
	    ['vb','<?php echo base_url();?>assets/syntax/scripts/shBrushVb.js']
    );
	SyntaxHighlighter.all();

    $(function(){
        $("#carousel2").carousel({
        	width:975,
            height: 450,
            effect: 'fade',
            stop:true,
            period: 5000,
			duration: 1000,
            markers: {
                show: true,
                type: 'square',
                position: 'bottom-right'
            }
        });
    })
</script>
</BODY>
</html>