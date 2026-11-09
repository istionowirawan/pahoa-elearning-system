<div class='head_rpp_part' >
	<div class='col-sm-12 rpp_detail_header' style='text-align:left;' >G. Kegiatan Pembelajaran 
	<span class='glyphicon glyphicon-triangle-bottom' aria-hidden='true'></span>
	</div>
	
	<div class='content_part' style='background-color:#ffffff;' >
		<?php
		//$jmlJam = ($tampilSKjam->row(0)->jmljam+$tampilSKjamUji->row(0)->jmljam);
		$jmlJam = ($tampilSKjam->row(0)->jmljam);
		
		/*
		echo "<ul class='nav nav-tabs form-group' >";
		for($a=1; $a <= $jmlJam; $a++) {
			if($a==1) {
				echo "<li role='presentation' class='kegBel active' style='cursor:pointer;' title='meet".$a."' alt='".$a."' ><a>Pertemuan ".$a."</a></li>";
			} else {
				echo "<li role='presentation' class='kegBel' style='cursor:pointer;' title='meet".$a."' alt='".$a."' ><a>Pertemuan ".$a."</a></li>";
			}
		}
		echo "</ul>";
		*/
		?>
		<div id='detail_kegbel' ></div>
	</div>
</div>