<div class="header-popup">
	<b>Tahun Ajaran (<?php echo $this->session->userdata('tahunAjr_active') . ", semester " . $this->session->userdata('semester_active'); ?>)</b>
</div>

<div class="isi-popup" >
	<div class="table-responsive">
		<form action="index.php/mainmenu/profile_change_pic_do/" method="POST" name="frmChangePass" id="frmChangePass" enctype="multipart/form-data" >
			<table class="table table-bordered" style="text-align:left;" >
				
				<tr>
					<td width='150'>
						<img src='<?php echo base_url(); ?>/photo/<?php echo $data_profile->row(0)->pic; ?>' width='150' height='150' class="img-responsive" alt="Responsive image" >
						<button class='btn btn-info' style='width:100%;' id='btnChangePic' >Change pic</button>
						<input type='file' name='txtImg' id='txtImg' >
					</td>
					
					<td>
						<?php 
						foreach($data_profile->result() as $obj) {
							echo "<table border=0 style='color:#ad6d6d;font-size:14px;' >
							<tr>
							<td width=150>Username </td>
							<td>: ".$obj->username."<input type='hidden' name='txtId' id='txtId' value='".$obj->id."' ></td>
							</tr>
							
							<tr>
							<td>Nama </td>
							<td>: ".$obj->nama."</td>
							</tr>
							
							<tr>
							<td>Jenjang </td>
							<td>: ".$obj->jenjang."</td>
							</tr>
							
							<tr>
							<td>Jabatan </td>
							<td>: ".$obj->jabatan."</td>
							</tr>
							
							<tr>
							<td>Status </td>
							<td>: ".($obj->status==1?'Active':'Non-active')."</td>
							</tr>
							</table>";
						}
						?>
					</td>
				</tr>
				
			</table>
		</form>
	</div>
	
</div>