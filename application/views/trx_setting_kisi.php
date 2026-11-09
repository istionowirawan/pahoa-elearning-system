<div class="header-popup" style='width:130%;' >
	<b>Input Kisi-kisi Ujian Sekolah (
	<?php echo $this->session->userdata('tahunAjr_active'); ?>
	)</b>
</div>

<div id='divInfoKisi' class='rpp-info-div'  >
	<div class='rpp-text-info' id='txtInfoKisi' ></div>
</div>
		
<div class="isi-popup" style='width:130%;' >

	<div class="table-responsive" align='left' style='width:100%;background-color:#FFFFFF;overflow-x:hidden;' >

			<button class="btn btn-danger" title='Refresh / Cancel Input Kisi' id='btnRefreshKisi' >
				<span class="glyphicon glyphicon-refresh" ></span> Refresh
			</button>
			
			<form method='POST' id='frmKisi_input' name='frmKisi_input' class="form-horizontal" >
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
					echo "<select id='setKisi_mapel' name='setKisi_mapel' class='form-control' required >";
					echo "<option value=''>== Pilih Mata Pelajaran ==</option>";
					foreach($data_mapel_guru->result() as $object) {
						echo "<option alt='".$object->id."' value='".$object->id_pelajaran."'>" . $object->mapel . "</option>";
					}
					echo "</select>";
					?>
					<label id="lblKisimapel" ></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="Name_kelas" class="col-sm-2">Kelas : </label>
				<div class="col-sm-10" id='div_setKisi_kelas'>
					<?php
					echo "<select id='setKisi_kelas' name='setKisi_kelas' class='form-control' required >";
					echo "<option value=''>== Pilih Kelas ==</option>";
					echo "</select>";
					?>
					<label id="lblKisikelas" ></label>
				</div>
			</div>
			
			
			<div class="form-group">
				<label for="Name_semester" class="col-sm-2">Semester : </label>
				<div class="col-sm-10" id='div_setKisi_semester'>
					<?php
					echo "<select id='setKisi_semester' name='setKisi_semester' class='form-control' required >";
					echo "<option value=''>== Pilih Semester ==</option>";
					echo "<option value='1'>1</option>";
					echo "<option value='2'>2</option>";
					echo "</select>";
					?>
					<label id="lblKisisemester" ></label>
				</div>
			</div>
			
			
			<div id="kisidetail" ></div>
			<div id="kisi_part" ></div>
			
			<br>
			<div class="form-group">
				<div class="col-sm-12">
					<input type='submit' value='Simpan Kisi' class='btn btn-info' id='btnSimpanKisi' style='width:100%;' >
				</div>
			</div>
			
			</form>
			
			
	</div>
	
</div>
