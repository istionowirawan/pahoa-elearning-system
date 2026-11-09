<div class="header-popup">
	<b>Report Rekapitulasi (
	<?php echo $this->session->userdata('tahunAjr_active') . ", semester " . $this->session->userdata('semester_active'); ?>
	)</b>
</div>

<div class="isi-popup" >
	<div class="table-responsive" align='left' style='overflow-x:auto;' >
		
		<table class='table' >
			<tr>
				<td>Tahun Ajaran </td>
				<td width=10 > : </td>
				<td><?php echo $this->session->userdata('tahunAjr_active'); ?></td>
			</tr>
		
			<tr>
				<td width=100 >Jenjang </td>
				<td width=10 > : </td>
				<td>
					<select id='txtJenjang' class='form-control' >
					<option value='' >== pilih jenjang ==</option>
					<option value='TK' >TK</option>
					<option value='SD' >SD</option>
					<option value='SMP' >SMP</option>
					<option value='SMA' >SMA</option>
					</select>
				</td>
			</tr>
			
			<tr>
			<td colspan=3 id='conRekap' ></td>
			</tr>
		</table>
		
	</div>
	
</div>