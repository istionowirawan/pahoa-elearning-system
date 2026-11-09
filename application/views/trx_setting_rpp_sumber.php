<br>
<?php
$isiSumber = "";
?>
<form method='POST' id='frmRPP_part_sumber' name='frmRPP_part_sumber' >
<div class='head_rpp_part' >
	<div class='col-sm-12 rpp_detail_header' style='text-align:left;' >H. Sumber Belajar 
	<span class='glyphicon glyphicon-triangle-bottom' aria-hidden='true'></span>
	</div>
	
	<div class='content_part' >
		
		<div class="rows">
			<div class="col-sm-12">
				<?php 
				$isiSumber = "";
				/*if($loadRppSumber->num_rows() > 0) {
					if(isset($loadRppSumber->row(0)->sumber)) {
						$isiSumber = $loadRppSumber->row(0)->sumber;
					}
				} else {*/
				if(isset($loadRppSumberSilabus->row(0)->sumber_belajar)) {
					if($loadRppSumberSilabus->row(0)->sumber_belajar=="") {
					} else {
						$isiSumber = $loadRppSumberSilabus->row(0)->sumber_belajar;
					}
				}
				//}
				?>
				<textarea readonly class='txtMateriBelajarRPP form-control' id='txtSumberBelajar' name='txtSumberBelajar' style='resize:none;' required ><?php echo $isiSumber; ?></textarea>
				<br>
			</div>
		</div>
		
		<div class="rows">
			<div class="col-sm-12">
				<input type='submit' value='Simpan Sumber Belajar (Tetep diklik yah, walau tidak bisa diinput.. untuk update data dari Silabus ke RPP)' class='btn btn-warning form-control' id='btnSubmitRPP_sumber' >
				<br><br>
			</div>
		</div>
		
	</div>
</div>
</form>

<form method='POST' id='frmRPP_part_media' name='frmRPP_part_media' >
<div class='head_rpp_part' >
	<div class='col-sm-12 rpp_detail_header' style='text-align:left;' >I. Media Belajar 
	<span class='glyphicon glyphicon-triangle-bottom' aria-hidden='true'></span>
	</div>
	
	<div class='content_part' >
		<div class="rows">
			<label class="col-sm-2">Media Pembelajaran</label>
			<div class="col-sm-10">
				<textarea id='txtMediaBelajar' name='txtMediaBelajar' rows='4' style='resize:none;' class="form-control" required ><?php echo (isset($loadRppMedia->row(0)->media)?$loadRppMedia->row(0)->media:""); ?></textarea>
				<br>
			</div>
		</div>
		
		<div class="rows">
			<div class="col-sm-12">
				<input type='submit' value='Simpan Media Pembelajaran' class='btn btn-warning form-control' id='btnSubmitRPP_media' >
				<br><br>
			</div>
		</div>
	</div>
</div>
</form>