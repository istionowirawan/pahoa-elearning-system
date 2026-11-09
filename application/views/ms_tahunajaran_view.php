<div class="header-popup">
	<b>Tahun Ajaran (<?php echo $this->session->userdata('tahunAjr_active') . ", semester " . $this->session->userdata('semester_active'); ?>)</b>
</div>

<div class="isi-popup" >
	<div class="table-responsive">
		<form action="" method="POST" name="frmChangePass" id="frmChangePass" >
			<table class="table table-hover" >
				<tr align='center'>
					<td>Id</td>
					<td>Tahun Ajaran</td>
					<td>Semester</td>
					<td>Status</td>
				</tr>
				
				<?php
				foreach($data_thnAjaran as $object) {
					echo "<tr align='center'>";
					echo "<td>" . $object->id . "</td>"; 
					echo "<td>" . $object->tahun . "</td>"; 
					echo "<td>" . $object->semester . "</td>";
					echo "<td width='20%'>"; 
						if($object->status==0) {
							echo "<button type='button' class='btn btn-info' style='width:100%' title='".$object->id."' >Non-active</button>"; 
						} else {
							echo "<button type='button' class='btn btn-info active' style='width:100%' title='".$object->id."' >Active</button>";
						}
					echo "</td>";
					echo "</tr>";
				}
				?>
				
				<div class="alert alert-success" id="infoTahunAjaran" >
				   <a href="#" class="close" data-dismiss="alert">&times;</a>
				   <strong>Update Success : </strong> Tahun ajaran has been changed 
				</div>
				
				
				<tr><td colspan='4'></td></tr>
				
			</table>
		</form>
	</div>
	
</div>