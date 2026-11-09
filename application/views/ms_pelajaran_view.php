<div class="header-popup">
	<b>Master Pelajaran (
	<?php echo $this->session->userdata('tahunAjr_active') . ", semester " . $this->session->userdata('semester_active'); ?>
	)</b>
</div>

<div class="isi-popup" >
	<div class="table-responsive" align='left' >
		<!--<button class="btn btn-primary" title='Add New Class'>
			<span class="glyphicon glyphicon-plus"></span> Add
		</button>
		<br><br>-->
		
		<button class="btn btn-primary" id='btnAddNewPelajaran' title='Add New Pelajaran'>
			<span class="glyphicon glyphicon-plus"></span> Add &nbsp;
		</button>
		
		<button class="btn btn-danger" id='btnCancelNewPelajaran' title='Cancel New Pelajaran' style='display:none;'>
			<span class="glyphicon glyphicon-remove"></span> Cancel Input
		</button>
		<br><br>
		
		<div id="divFrmAddPelajaran">
			<form action="" method="POST" style='display:none;' id='frmInputNewPelajaran' >
				<table class="table" style='background-color:#F5F5F5;' >
					<tr>
						<td align="right" width='180px'>Nama Mapel : </td>
						<td><input class='form-control' type="text" name="inputNamaMapel" id="inputNamaMapel" required ></td>
					</tr>
					<tr>
						<td align="right">Jenjang : </td>
						<td><label name="inputJenjang" id="inputJenjang" ><?php echo strtoupper($this->session->userdata('login_jenjang'));?></label></td>
					</tr>
					
					<tr>
						<td></td>
						<td><input class='btn btn-primary' type='submit' value='Save' id='btnSaveMapel' ></td>
					</tr>
				</table>
			</form>
		</div>
		
		<form action="" method="POST" name="frmKelas" id="frmKelas" >
			<table class="table" >
				<tr align='center' style='background-color:#F5F5F5;' >
					<td>No.</td>
					<!--<td>Kode Mapel</td>-->
					<td>Nama Mapel</td>
					<td>Jenjang</td>
					<td>Edit</td>
				</tr>
				
				<?php
				$urut = 1;
				foreach($data_pelajaran as $object) {
					echo "<tr align='center' title='".$object->id."' style='cursor:pointer;' id='brs".$object->id."' >";
					echo "<td>" . $urut . "</td>"; 
					//echo "<td>" . $object->kode . "</td>";
					echo "<td>";
						echo "<label name='lblMapel[]' id='lblMapel".$object->id."' >" . $object->mapel . "</label>";
						echo "<input type='hidden' name='txtMapel[]' id='txtMapel".$object->id."' value='".$object->mapel."' style='width:100%;' >";
					echo "</td>"; 
					echo "<td>" . $object->jenjang . "</td>";
					echo "<td>"; 
						echo "<input type='button' class='btn btn-primary btnEditMapel' alt='".$object->id."' title='Edit Mapel' value='Edit'>";
					echo "</td>";
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