<div class="header-popup">
	<b>Input SK - STANDAR KOMPETENSI (
	<?php echo $this->session->userdata('tahunAjr_active'); ?>
	)</b>
</div>

<div class="isi-popup" >
	<div class="table-responsive" align='left' >
		<button class="btn btn-primary" id='btnBackSetSKKD' title='Kembali ke setting SK & KD'>
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Back &nbsp;
		</button>
		
		<?php
		//print_r($data_mapel . " -> " . $data_kelas);
		//print_r($data_mapel_pilih);
		//print_r($data_kelas_pilih);
		?>
		
		<form class="form-horizontal" id="frmSetSKKD_input" name="frmSetSKKD_input" novalidate >
			<table class="table" style='background-color:#F5F5F5;' >
				
			<tr>
				<td width='15%' align="right">Mata Pelajaran : </td>
				<td>
					<?php echo $data_mapel_pilih;?>
					<input type='hidden' name='txtMapelSK_input' id='txtMapelSK_input' value='<?php echo $data_mapel;?>' >
				</td>
			</tr>
			
			<tr>
				<td align="right">Kelas : </td>
				<td>
					<?php echo $data_kelas_pilih;?>
					<input type='hidden' name='txtKelasSK_input' id='txtKelasSK_input' value='<?php echo $data_kelas;?>' >
				</td>
			</tr>
			
			<tr>
				<td align="right" >Pilih SK : </td>
				<td>
					<select id='pilihSK_mapel' class='form-control' required >
					<option alt='' value=''>== pilih SK ==</option>
					<?php
					for($a=1; $a<=99; $a++) {
						echo "<option alt='".$a."' value='".$a."' >".$a."</option>";
					}
					?>
					</select>
				</td>
			</tr>
			
				<tr>
					<td colspan='2' >
						<div class='divTxtDescSK' >
						<textarea id='txtDescSK_input' name='txtDescSK_input' style='width:100%;' required ></textarea>
						</div>
					</td>
				</tr>
				
				<tr>
					<td colspan='2' align='center' >
						<div class='divTxtDescSK'>
						<input id='btnSimpanSK_input' type='submit' value='Simpan Standar Kompetensi' class='btn btn-primary' style='width:100%;' >
						</div>
					</td>
				</tr>
				
				<tr>
					<td colspan='2' align='center' >
						<div class='divTxtDescSK'>
						<input id='btnHapusSK_input' name='btnHapusSK_input' title='' type='button' value='Hapus Standar Kompetensi' class='btn btn-danger' style='width:100%;' >
						</div>
					</td>
				</tr>
				
		</form>
		
	</div>
	
</div>