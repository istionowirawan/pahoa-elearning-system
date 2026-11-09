<div class="header-popup">
	<b>Input KKM - Kriteria Ketuntasan Minimal (
	<?php echo $this->session->userdata('tahunAjr_active'); ?>
	)</b>
</div>

<div id='divInfoKKM' class='rpp-info-div' >
	<div class='rpp-text-info' id='txtInfoKKM' ></div>
</div>
		
<div class="isi-popup" >

	<div align='left' style='overflow-x:auto;' >

			<button class="btn btn-danger" title='Refresh / Cancel Input KKM' id='btnRefreshKKM' >
				<span class="glyphicon glyphicon-refresh" ></span> Refresh
			</button>
			
			<form method='POST' id='frmKKM_input' name='frmKKM_input' class="form-horizontal" >
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
					echo "<select id='setKKM_mapel' name='setKKM_mapel' class='form-control' required >";
					echo "<option value=''>== Pilih Mata Pelajaran ==</option>";
					foreach($data_mapel_guru->result() as $object) {
						echo "<option alt='".$object->id."' value='".$object->id_pelajaran."'>" . $object->mapel . "</option>";
					}
					echo "</select>";
					?>
					<label id="lblKKMmapel" ></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="Name_kelas" class="col-sm-2">Kelas : </label>
				<div class="col-sm-10" id='div_setKKM_kelas'>
					<?php
					echo "<select id='setKKM_kelas' name='setKKM_kelas' class='form-control' required >";
					echo "<option value=''>== Pilih Kelas ==</option>";
					echo "</select>";
					?>
					<label id="lblKKMkelas" ></label>
				</div>
			</div>
			
			
			<div class="form-group">
				<label for="Name_semester" class="col-sm-2">Semester : </label>
				<div class="col-sm-10" id='div_setKKM_semester'>
					<?php
					echo "<select id='setKKM_semester' name='setKKM_semester' class='form-control' required >";
					echo "<option value=''>== Pilih Semester ==</option>";
					echo "<option value='1'>1</option>";
					echo "<option value='2'>2</option>";
					echo "</select>";
					?>
					<label id="lblKKMsemester" ></label>
				</div>
			</div>
			
			
			<div id="kkmdetail" ></div>
			<div id="kkm_part" ></div>
			
			<br>
			<div class="form-group">
				<div class="col-sm-12">
					<input type='submit' value='Simpan KKM' class='btn btn-success' id='btnSimpanKKM' style='width:100%;' >
				</div>
			</div>
			
			</form>
			
			
	</div>
	
</div>
