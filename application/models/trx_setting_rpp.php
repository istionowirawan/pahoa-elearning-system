<div class="header-popup">
	<b>Setting RPP (
	<?php echo $this->session->userdata('tahunAjr_active') . ", semester " . $this->session->userdata('semester_active'); ?>
	)</b>
</div>

<div id='divInfoRPP' class='rpp-info-div' >
	<div class='rpp-text-info' id='txtInfoRPP' ></div>
</div>
		
<div class="isi-popup" >

	<div class="table-responsive" align='left' style='overflow-x:hidden;' >

			<button class="btn btn-danger" title='Refresh / Cancel Input RPP' id='btnRefreshRPP' >
				<span class="glyphicon glyphicon-refresh" ></span> Refresh
			</button>
			
			<form class="form-horizontal" id="frmSetRPP" name="frmSetRPP"  >
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
					echo "<select id='setRPP_mapel' name='setRpp_mapel' class='form-control' required >";
					echo "<option value=''>== Pilih Mata Pelajaran ==</option>";
					foreach($data_mapel_guru->result() as $object) {
						echo "<option alt='".$object->id."' value='".$object->id_pelajaran."'>" . $object->mapel . "</option>";
					}
					echo "</select>";
					?>
					<label id="lblRPPmapel" ></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="Name_kelas" class="col-sm-2">Kelas : </label>
				<div class="col-sm-10" id='div_setRPP_kelas'>
					<?php
					echo "<select id='setRPP_kelas' name='setRPP_kelas' class='form-control' required >";
					echo "<option value=''>== Pilih Kelas ==</option>";
					echo "</select>";
					?>
					<label id="lblRPPkelas" ></label>
				</div>
			</div>
			
			
			<div class="form-group">
				<label for="Name_semester" class="col-sm-2">Semester : </label>
				<div class="col-sm-10" id='div_setRPP_semester'>
					<?php
					echo "<select id='setRPP_semester' name='setRPP_semester' class='form-control' required >";
					echo "<option value=''>== Pilih Semester ==</option>";
					echo "<option value='1'>1</option>";
					echo "<option value='2'>2</option>";
					echo "</select>";
					?>
					<label id="lblRPPsemester" ></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="Name_sk" class="col-sm-2">SK : </label>
				<div class="col-sm-10" id='div_setRPP_sk'>
					<?php
					echo "<select id='setRPP_sk' name='setRPP_sk' class='form-control' required >";
					echo "<option value=''>== Pilih SK ==</option>";
					echo "</select>";
					?>
					<label id="lblRPPsk" ></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="Name_sk" class="col-sm-2">KD : </label>
				<div class="col-sm-10" id='div_setRPP_kd'>
					<?php
					echo "<select id='setRPP_kd' name='setRPP_kd' class='form-control' required >";
					echo "<option value=''>== Pilih KD ==</option>";
					echo "</select>";
					?>
					<label id="lblRPPkd" ></label>
				</div>
			</div>
			</form>
			
			<div id="rppdetail" ></div>
			<div id="rpp_part" ></div>
			
			<br>
			<div class="form-group">
				<div class="col-sm-12">
					<!--<input type="submit" value="Simpan RPP" style="width:100%;" class="btn btn-warning btnFrmRPP" title='Simpan RPP' id='btnInputRPP' >-->
				</div>
			</div>
			
		
			
	</div>
	
</div>
