<form method='POST' id='frmRPP_part_penilaian' name='frmRPP_part_penilaian' >
<div class='head_rpp_part' >
	<div class='col-sm-12 rpp_detail_header' style='text-align:left;' >J.1. Penilaian Indikator
	<span class='glyphicon glyphicon-triangle-bottom' aria-hidden='true'></span>
	</div>
	
	<div id='detail_penilaian' class='content_part' style='background-color:#ffffff;' >
		<table id='tbl_rpp_nilai' class="table table-bordered">
			<tr align='center'>
				<td width='5%'>No.</td>
				<td width='50%'>Indikator Penilaian.</td>
				<td>Teknik Penilaian</td>
				<td>Bentuk Instrument</td>
				<td>Instrument</td>
			</tr>
			
			<tbody id='cont_rpp_nilai' >
			</tbody>
			
			<tr>
				<td colspan='5'><input type='submit' value='Simpan Penilaian Indikator' class='btn btn-warning form-control' id='btnSubmitRPP_penilaian' ></td>
			</tr>
			
			<tr>
				<td colspan='5'>
				<button id='btnRPP_add_nilai' type="button" class="btn btn-info" aria-label="Left Align" title='tambah baris kriteria penilaian'>
				  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Tambah kriteria penilaian
				</button>
				
				<button id='btnRPP_remove_nilai' type="button" class="btn btn-danger" aria-label="Left Align" title='kurangi baris kriteria penilaian'>
				  <span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span> Kurangi kriteria penilaian
				</button>
				</td>
			</tr>
			
		</table>
		
	</div>
</div>
</form>



<form method='POST' id='frmRPP_part_soal' name='frmRPP_part_soal' >
<div class='head_rpp_part' >
	<div class='col-sm-12 rpp_detail_header' style='text-align:left;' >J.2. Penilaian Soal 
	<span class='glyphicon glyphicon-triangle-bottom' aria-hidden='true'></span>
	</div>
	
	<div id='detail_penilaian' class='content_part' style='background-color:#ffffff;' >
		<table id='tbl_rpp_nilaisoal' class="table table-bordered">
			<tr align='center'>
				<td width='5%'>No.</td>
				<td>Soal.</td>
				<td width='10%'>Bobot Skor (%).</td>
			</tr>
			
			<tbody id='cont_rpp_soal' >
			</tbody>
			
			<tr>
				<td colspan='5'><input type='submit' value='Simpan Penilaian Soal' class='btn btn-warning form-control' id='btnSubmitRPP_soal' ></td>
			</tr>
			
			<tr>
				<td colspan='5'>
				<button id='btnRPP_add_nilaisoal' type="button" class="btn btn-info" aria-label="Left Align" title='tambah baris soal penilaian'>
				  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Tambah soal
				</button>
				
				<button id='btnRPP_remove_nilaisoal' type="button" class="btn btn-danger" aria-label="Left Align" title='kurangi baris soal penilaian'>
				  <span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span> Kurangi soal
				</button>
				</td>
			</tr>
			
		</table>
		
	</div>
</div>
</form>


<form method='POST' id='frmRPP_part_jawaban' name='frmRPP_part_jawaban' >
<div class='head_rpp_part' >
	<div class='col-sm-12 rpp_detail_header' style='text-align:left;' >J.3. Penilaian Jawaban (Kunci Jawaban) 
	<span class='glyphicon glyphicon-triangle-bottom' aria-hidden='true'></span>
	</div>
	
	<div id='detail_penilaian' class='content_part' style='background-color:#ffffff;' >
		<table id='tbl_rpp_nilaijwb' class="table table-bordered">
			<tr align='center'>
				<td width='5%'>No.</td>
				<td>Jawaban</td>
			</tr>
			
			<tbody id='cont_rpp_jwb' >
			</tbody>
			
			<tr>
				<td colspan='5'><input type='submit' value='Simpan Penilaian Jawaban' class='btn btn-warning form-control' id='btnSubmitRPP_jawaban' ></td>
			</tr>
			
			<tr>
				<td colspan='5'>
				<button id='btnRPP_add_nilaijwb' type="button" class="btn btn-info" aria-label="Left Align" title='tambah baris kunci penilaian'>
				  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Tambah kunci
				</button>
				
				<button id='btnRPP_remove_nilaijwb' type="button" class="btn btn-danger" aria-label="Left Align" title='kurangi baris kunci penilaian'>
				  <span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span> Kurangi kunci
				</button>
				</td>
			</tr>
			
		</table>
		
	</div>
</div>
</form>