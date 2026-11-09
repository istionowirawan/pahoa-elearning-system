<div class="header-popup">
	<b>Report Program Semester (
	<?php echo $this->session->userdata('tahunAjr_active'); ?>
	)</b>
</div>

<?php
echo "<script>";
echo "var arDataUser = new Array();";
echo "</script>";

foreach($all_user->result() as $object) {
	echo "<script>";
	echo "arDataUser.push(
		{
			value: '".$object->id."',
			label: '".$object->nama."',
			desc: '".$object->username."',
			jenjang: '".$object->jenjang."',
			icon: ''
		}
	);";
	//echo "alert('=> '+arDataUser.length)";
	echo "</script>";
}
?>

<div class="isi-popup" >
	<div class="table-responsive" align='left' style='overflow-x:auto;' >
			
			<form class="form-horizontal" id="frmSetSilabus" name="frmSetSilabus"  >
			
			<?php if($this->session->userdata('login_id_jabatan')==1) { ?>
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
			<?php 
			} else {
				echo "
				<div class='form-group'>
					<label for='Username_nik' class='col-sm-2'>Username : </label>
					<div class='col-sm-10'>
						<label id='lblSKKD_username' name='lblSKKD_username' ></label>";
						
						echo "<input type='text' id='setSKKD_username' name='setSKKD_username' class='form-control' placeholder=' ++ Tuliskan nama user yang dicari ++ ' required >";
						
					echo "</div>
				</div>
				
				<div class='form-group'>
					<label for='Name_user' class='col-sm-2'>Name : </label>
					<div class='col-sm-10'>
						<input id='setSKKD_name' name='setSKKD_name' type='text' class='form-control' readonly required >
					</div>
				</div>";
			}
			?>
			
			<div class="form-group">
				<label for="Name_mapel" class="col-sm-2">Mata Pelajaran : </label>
				<div class="col-sm-10">
					<?php
					echo "<select id='set_mapel' name='set_mapel' class='form-control' required >";
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
				<div class="col-sm-10" id='div_set_kelas'>
					<?php
					echo "<select id='set_kelas' name='set_kelas' class='form-control' required >";
					echo "<option value=''>== Pilih Kelas ==</option>";
					echo "</select>";
					?>
				</div>
			</div>
			
			<div class="form-group">
				<label for="Name_semester" class="col-sm-2 filter_semester">Semester : </label>
				<div class="col-sm-10 filter_semester" id='div_set_semester'>
					<?php
					echo "<select id='set_semester' name='set_semester' class='form-control' required >";
					echo "<option value=''>== Pilih Semester ==</option>";
					echo "<option value='1'>1</option>";
					echo "<option value='2'>2</option>";
					echo "</select>";
					?>
				</div>
			</div>
			
			<div id='detail_report'>
			</div>
			
		</form>
		
	</div>
	
</div>