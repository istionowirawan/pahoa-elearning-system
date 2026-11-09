<div class="header-popup">
	<b>Setting Guru Mapel (
	<?php echo $this->session->userdata('tahunAjr_active'); ?>
	)</b>
</div>

<div class="isi-popup" >
	<div class="table-responsive" align='left' >
		<button class="btn btn-primary" id='btnAddNewSetMapel' title='Add New Setting Guru Mapel'>
			<span class="glyphicon glyphicon-plus"></span> Add &nbsp;
		</button>
		
		<button class="btn btn-danger" id='btnCancelNewSetMapel' title='Cancel Input' style='display:none;'>
			<span class="glyphicon glyphicon-remove"></span> Cancel Input
		</button>
		<br><br>
		
		<?php
		echo "<script>";
		echo "var arDataUser = new Array();";
		echo "</script>";
		
		foreach($data_user as $object) {
			echo "<script>";
			echo "arDataUser.push(
				{
					value: '".$object->id."',
					label: '".$object->nama."',
					desc: '".$object->username."',
					icon: 'jquery_32x32.png'
				}
			);";
			//echo "alert('=> '+arDataUser.length)";
			echo "</script>";
		}
		?>
		
		<div id="divFrmAddSetMapel">
			<form action="" method="POST" style='display:none;' id='frmInputNewSetMapel' role="form" >
				<table class="table" style='background-color:#F5F5F5;' >
					
					<tr>
						<td align="right">Tahun Ajaran : </td>
						<td>
							<?php echo $this->session->userdata('tahunAjr_active'); ?>
						</td>
					</tr>
					
					<tr>
						<td align="right">Jenjang : </td>
						<td><?php echo strtoupper($this->session->userdata('login_jenjang'));?></td>
					</tr>
					
					<tr>
						<td align="right" >Nik : </td>
						<td>
							<input type="hidden" id="setMapel_id" class="form-control">
							<input type="text" id="setMapel_nik" class="form-control" placeholder="== tuliskan nama guru untuk mencari NIK ==" required >
						</td>
					</tr>
					
					<tr>
						<td align="right" >Nama : </td>
						<td>
							<input type="text" id="setMapel_nama" class="form-control" readonly >
						</td>
					</tr>
					
					<tr>
						<td align="right">Pelajaran : </td>
						<td>
							<!--<img id="project-icon" src="images/transparent_1x1.png" class="ui-state-default" alt="">-->
							<select id="setMapel_pelajaran" class="form-control" required >
							<option value="" >== Pilih Mata pelajaran ==</option>
							<?php
							foreach($data_pelajaran as $object) {
								echo "<option value='".$object->id."'>".$object->mapel."</option>";
							}
							?>
							</select>
						</td>
					</tr>
					
					<tr>
						<td align="right" >Kelas : </td>
						<td>
							<!--<select id="setMapel_kelas" class="form-control" required >
							<option value="" >== Pilih Kelas ==</option>-->
							<?php
							$hitung=0;
							echo "<div id='divSetmapel_kelas'>";
							foreach($data_kelas as $object) {
								echo "<input type='checkbox' style='width:20px;height:20px' 
								name='setMapel_kelas[]' 
								id='setMapel_kelas' 
								value='".$object->id."' 
								title='(".$object->id.") - ".$object->kelas."' > " . $object->kelas . " ";
								$hitung++;
								if($hitung%7==0){
									echo "<br>";
								}
							}
							echo "</div>";
							?>
							<!--</select>-->
						</td>
					</tr>
					
					<tr>
						<td></td>
						<td><input class='btn btn-primary' type='submit' value='Save' id='btnSaveSetMapel' title='Save setting guru mapel' ></td>
					</tr>
				</table>
			</form>
		</div>
		
		
		<form action="" method="POST" name="frmKelas" id="frmKelas" >
			
			<table class="table table-hover" >
				<tr align='center' style='background-color:#F5F5F5;' >
					<td>No.</td>
					<td>Nik</td>
					<td>Nama</td>
					<td>Tahun Ajaran</td>
					<td>Pelajaran</td>
					<td>Kelas</td>
					<td>Delete</td>
				</tr>
				
				<?php
				$urut=1;
				foreach($data_trx_setmapel as $object) {
					echo "<tr align='center' title='".$object->id."' style='cursor:pointer;' >";
					echo "<td>" . $urut . "</td>"; 
					echo "<td>" . $object->username . "</td>";
					echo "<td>" . $object->nama . "</td>"; 
					echo "<td>" . $object->tahun . "</td>";
					echo "<td>" . $object->mapel . "</td>";
					echo "<td><a class='kelasampuh_detail' title='Klik untuk melihat kelas yang diampuh' alt='".$object->id."' >Kelas Ampuh</a></td>";
					echo "<td>";
						echo "<img src='".base_url()."icons/delete_32.png' width='15px' height='15px' alt='".$object->id."' class='btnDeleteTrxMapel' title='Delete Action'>";
					echo "</td>";
					echo "</tr>";
					$urut++;
					
				}
				?>
				
				<tr><td colspan='7'></td></tr>
				
			</table>
		</form>
		
		
	</div>
	
</div>