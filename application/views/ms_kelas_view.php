<div class="header-popup">
	<b>Master Kelas (
	<?php echo $this->session->userdata('tahunAjr_active') . ", semester " . $this->session->userdata('semester_active'); ?>
	)</b>
</div>

<div class="isi-popup" >
	<div class="table-responsive" align='left' >
		<button class="btn btn-primary" id='btnAddNewKelas' title='Add New Class'>
			<span class="glyphicon glyphicon-plus"></span> Add &nbsp;
		</button>
		
		<button class="btn btn-danger" id='btnCancelNewKelas' title='Cancel New Class' style='display:none;'>
			<span class="glyphicon glyphicon-remove"></span> Cancel Input
		</button>
		<br><br>
		
		<div id="divFrmAddKelas">
			<form action="" method="POST" style='display:none;' id='frmInputNewKelas' role="form" >
				<table class="table" style='background-color:#F5F5F5;' >
					<tr>
						<td align="right" width='180px'>Jenjang : </td>
						<td>
							<label id="inputJenjang" name="inputJenjang" >
								<?php echo $this->session->userdata('login_jenjang'); ?>
							</label>
						</td>
					</tr>
					
					<tr>
						<td align="right" width='180px'>Kelas : </td>
						<td>
							<input class="form-control" type="kelas" name="inputKelas" id="inputKelas" required >
						</td>
					</tr>
					
					<tr>
						<td align="right" width='180px'>Tahun Ajaran : </td>
						<td>
							<label id="inputTahunAjaran" name="inputTahunAjaran" >
								<?php echo $this->session->userdata('tahunAjr_active'); ?>
							</label>
						</td>
					</tr>
					
					<tr>
						<td></td>
						<td><input class='btn btn-primary' type='submit' value='Save' id='btnSaveMapel' ></td>
					</tr>
				</table>
			</form>
		</div>
		
		<form action="" method="POST" name="frmKelas" id="frmKelas" >
			<table class="table table-hover" >
				<tr align='center' style='background-color:#F5F5F5;' >
					<td>No.</td>
					<td>Jenjang</td>
					<td>Kelas</td>
					<td>Tahun Ajaran</td>
					<!--<td>Edit</td>-->
				</tr>
				
				<?php
				$urut = 1;
				foreach($data_kelas as $object) {
					echo "<tr align='center' title='".$object->id."' style='cursor:pointer;' >";
					echo "<td>" . $urut . "</td>"; 
					echo "<td>" . $object->jenjang . "</td>"; 
					echo "<td>" . $object->kelas . "</td>";
					echo "<td>" . $object->tahun . "</td>";
					//echo "<td><button class='btn-primary'>Edit</button></td>";
					echo "</tr>";
					$urut++;
				}
				?>
				
				<div class="alert alert-success" id="infoKelas" >
				   <a href="#" class="close" data-dismiss="alert">&times;</a>
				   <strong>Update Success : </strong> Kelas has been added 
				</div>
				
				
				<tr><td colspan='5'></td></tr>
				
			</table>
		</form>
	</div>
	
</div>