<div class="header-popup">
	<b>Setting Program Tahunan - PROTA (
	<?php echo $this->session->userdata('tahunAjr_active'); ?>
	)</b>
</div>

<div class="isi-popup" >
	<div class="table-responsive" align='left' style='overflow-x:hidden;' >
			
			<form class="form-horizontal" id="frmSetProta" name="frmSetProta"  >
			<div class="form-group">
				<label for="Username_nik" class="col-sm-2">Username : </label>
				<div class="col-sm-10">
					<?php echo $this->session->userdata('login_username');?>
				</div>
			</div>
			
			<div class="form-group">
				<label for="Name_user" class="col-sm-2">Name : </label>
				<div class="col-sm-10">
					<?php echo $this->session->userdata('login_nama');?>
				</div>
			</div>
			
			<div class="form-group">
				<label for="Name_mapel" class="col-sm-2">Mata Pelajaran : </label>
				<div class="col-sm-10">
					<?php
					echo "<select id='setSKKD_mapel' name='setProta_mapel' class='form-control' required >";
					echo "<option value=''>== Pilih Mata Pelajaran ==</option>";
					foreach($data_mapel_guru->result() as $object) {
						echo "<option alt='".$object->id."' value='".$object->id_pelajaran."'>" . $object->mapel . "</option>";
					}
					echo "</select>";
					?>
				</div>
			</div>
			
			<div class="form-group">
				<label for="Name_kelas" class="col-sm-2">Kelas : </label>
				<div class="col-sm-10" id='div_setSKKD_kelas'>
					<?php
					echo "<select id='setSKKD_kelas' name='setProta_kelas' class='form-control' required >";
					echo "<option value=''>== Pilih Kelas ==</option>";
					echo "</select>";
					?>
				</div>
			</div>
			
			<div class="form-group">
				<label for="Name_kelas" class="col-sm-2"></label>
				<div class="col-sm-10">
					<input type="submit" value="Input Prosata (Program Satu Tahun)" class="btn btn-primary btnFrmSKKD" title='Input Program Satu Tahun' id='btnInputProta' >
				</div>
			</div>
			
		</form>
		
	</div>
	
</div>