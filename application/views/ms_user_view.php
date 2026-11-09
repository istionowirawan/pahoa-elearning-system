<div class="header-popup">
	<b>Master User (
	<?php echo $this->session->userdata('tahunAjr_active') . ", semester " . $this->session->userdata('semester_active'); ?>
	)</b>
</div>

<div class="isi-popup" >
	<div class="table-responsive" align='left' >
		<button class="btn btn-primary" id='btnAddNewUser' title='Add New User'>
			<span class="glyphicon glyphicon-plus"></span> Add &nbsp;
		</button>
		
		<button class="btn btn-danger" id='btnCancelNewUser' title='Cancel New User' style='display:none;'>
			<span class="glyphicon glyphicon-remove"></span> Cancel Input
		</button>
		<br><br>
		
		<div id="divFrmAddUser">
			<form action="" method="POST" style='display:none;' id='frmInputNewUser' role="form" >
				<table class="table" style='background-color:#F5F5F5;' >
					<tr>
						<td align="right" width='180px'>Username : </td>
						<td>
							<input class="form-control" type="text" name="inputUsername" id="inputUsername" required >
							<label id="ketUsernameValid" style='color:red;' ></label>
						</td>
					</tr>
					
					<tr>
						<td align="right" width='180px'>Password : </td>
						<td>
							<input class="form-control" type="password" name="inputPassword" id="inputPassword" required >
						</td>
					</tr>
					
					<tr>
						<td align="right" width='180px'>Nama Lengkap : </td>
						<td><input class="form-control" type="text" name="inputNamaLengkap" id="inputNamaLengkap" required ></td>
					</tr>
					<tr>
						<td align="right">Jenjang : </td>
						<td><label name="inputJenjang" id="inputJenjang" ><?php echo strtoupper($this->session->userdata('login_jenjang'));?></label></td>
					</tr>
					<tr>
						<td align="right">Jabatan : </td>
						<td>
							<?php
							echo "<select class='form-control' name='inputJabatan' id='inputJabatan' required >";
							echo "<option value=''>Pilih Jabatan</option>";
							foreach($jabatan_user->result() as $object) {
								echo "<option title='".$object->id."' value='".$object->id."'>" . $object->jabatan . "</option>";
							}
							echo "</select>";
							?>
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
					<td>Username</td>
					<td>Nama</td>
					<td>Jenjang</td>
					<td>Jabatan</td>
					<td>Status</td>
				</tr>
				
				<?php
				$urut = 1;
				echo "<script>";
				echo "var noUrut=0;";
				echo "var arUsername=new Array();";
				echo "</script>";
				
				
				foreach($data_user->result() as $object) {
					echo "<script>";
					echo "arUsername[noUrut]='".$object->username."';";
					echo "noUrut++;";
					echo "</script>";
					
					echo "<tr align='center' title='".$object->id."' style='cursor:pointer;' >";
					//echo "<td>" . ($urut+(($target-1)*10)) . "</td>"; 
					echo "<td>" . $object->username . "</td>";
					echo "<td>" . $object->nama . "</td>"; 
					echo "<td>" . $object->jenjang . "</td>";
					echo "<td>" . $object->jabatan . "</td>";
					echo "<td>"; 
						if($object->status==1) {
							echo "<button class='btn btn-primary btnUseractive' id='".$object->id."' alt='".$object->status."' title='Click to non-active this user'>Active</button>";
						} else {
							echo "<button class='btn btn-danger btnUseractive' id='".$object->id."' alt='".$object->status."' title='Click to activate this user'>Non-active</button>";
						}
					echo "</td>";
					echo "</tr>";
					$urut++;
				}
				?>
				
				<div class="alert alert-success" id="infoKelas" >
				   <a href="#" class="close" data-dismiss="alert">&times;</a>
				   <strong>Update Success : </strong> Kelas has been added 
				</div>
				
				
				<tr><td colspan='6'></td></tr>
				
			</table>
		</form>
	</div>
	
</div>