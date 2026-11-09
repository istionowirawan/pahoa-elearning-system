<div class="header-popup">
	<b>Input Prosem - Program Semester (
	<?php echo $this->session->userdata('tahunAjr_active'); ?>
	)</b>
</div>

<div class="isi-popup" >
	<div class="table-responsive" align='left' >
		<button class="btn btn-primary" id='btnBackSetProsem' title='Kembali ke setting Prosem'>
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Back &nbsp;
		</button>
		
		<?php
		//print_r($data_mapel . " -> " . $data_kelas);
		//print_r($data_mapel_pilih);
		//print_r($data_kelas_pilih);
		?>
		
		<form class="form-horizontal" id="frmSetProsem_input" name="frmSetProsem_input" >
			<table class="table" style='background-color:#F5F5F5;' >
				
			<tr>
				<td width='15%' align="right">Mata Pelajaran : </td>
				<td>
					<?php echo $data_mapel_pilih;?>
					<input type='hidden' name='txtMapelProsem_input' id='txtMapelProsem_input' value='<?php echo $data_mapel;?>' >
					<input type='hidden' name='txtProsemMs_id' id='txtProsemMs_id' value='' >
				</td>
			</tr>
			
			<tr>
				<td align="right">Kelas : </td>
				<td>
					<?php echo $data_kelas_pilih;?>
					<input type='hidden' name='txtKelasProsem_input' id='txtKelasProsem_input' value='<?php echo $data_kelas;?>' >
				</td>
			</tr>
			
			<tr>
				<td align="right">Semester : </td>
				<td>
					<select name='txtPilihSms' id='txtPilihSms' class='form-control' >
					<option value=''>== Pilih Semester ==</option>
					<option value='1'>1</option>
					<option value='2'>2</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<td colspan='2'>
				
					<div id='divprosem_input_detail' ></div>
				
				</td>
			</tr>
			
			
			</table>
		</form>
	</div>
</div>