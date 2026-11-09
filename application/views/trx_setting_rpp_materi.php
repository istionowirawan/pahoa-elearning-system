<br>
<form method='POST' id='frmRPP_part_materi' name='frmRPP_part_materi' >
<div class='head_rpp_part' >
	<div class='col-sm-12 rpp_detail_header' style='text-align:left;' >E. Materi Pembelajaran 
	<span class='glyphicon glyphicon-triangle-bottom' aria-hidden='true'></span>
	</div>
	
	<div class='content_part' >
		<div class="rows">
			<div class="col-sm-12">
				<textarea class='txtMateriBelajarRPP' id='txtMateriBelajar' name='txtMateriBelajar' style='width:100%;' >
				<?php echo (isset($loadRppMateri->row(0)->materi)?$loadRppMateri->row(0)->materi:""); ?>
				</textarea>
			</div>
		</div>
		
		<div class="rows">
			<div class="col-sm-12">
				<input type='submit' value='Simpan Materi Pembelajaran' class='btn btn-warning form-control' id='btnSubmitRPP_materi' >
				<br><br>
			</div>
		</div>
	</div>
</div>
</form>


<form method='POST' id='frmRPP_part_metode' name='frmRPP_part_metode' >
<div class='head_rpp_part' >
	<div class='col-sm-12 rpp_detail_header' style='text-align:left;' >F. Metode Pembelajaran 
	<span class='glyphicon glyphicon-triangle-bottom' aria-hidden='true'></span>
	</div>
	
	<div class='content_part' >
		<div class="rows">
			<label class="col-sm-2">Metode Pembelajaran</label>
			<div class="col-sm-10">
				<textarea id='txtMetodeBelajar' name='txtMetodeBelajar' rows='4' style='resize:none;' class="form-control" required ><?php echo (isset($loadRppMetode->row(0)->metode)?$loadRppMetode->row(0)->metode:""); ?></textarea><br>
			</div>
		</div>
		
		<div class="rows">
			<div class="col-sm-12">
				<input type='submit' value='Simpan Metode Pembelajaran' class='btn btn-warning form-control' id='btnSubmitRPP_metode' >
				<br><br>
			</div>
		</div>
		
	</div>
</div>
</form>