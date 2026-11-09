<div class="header-popup">
	<b>Input KD - KOMPETENSI DASAR (
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
		
		<form class="form-horizontal" id="frm_setkd" name="frm_setkd" >
			<table class="table" style='background-color:#F5F5F5;' id='tbl_skkd_kd_input' >
				
			<tr>
				<td width='15%' align="right">Mata Pelajaran : </td>
				<td>
					<?php echo $data_mapel_pilih;?>
					<input type='hidden' name='setkd_mapel' id='setkd_mapel' value='<?php echo $data_mapel;?>' >
				</td>
			</tr>
			
			<tr>
				<td align="right" >Kelas : <input type='hidden' id='setkd_pilih_id' name='setkd_pilih_id' ></td>
				<td>
					<?php echo $data_kelas_pilih;?>
					<input type='hidden' name='setkd_kelas' id='setkd_kelas' value='<?php echo $data_kelas;?>' >
				</td>
			</tr>
			
			<tr>
				<td align="right" >Pilih SK : </td>
				<td>
					<label id='setkd_pilih_sk_label' ></label>
					<select id='setkd_pilih_sk' name='setkd_pilih_sk' class='form-control' required >
					<option alt='' value=''>== pilih SK ==</option>
					<?php
					foreach ($data_sk_isi->result() as $row)
					{
						echo "<option alt='".$row->id."' value='".$row->id."' nomersk='".$row->sk_no."' >".$row->sk_no."</option>";
					}
					?>
					</select>
					<div id='setkd_sk_desc' style='padding:10px;' ></div>
				</td>
			</tr>
			
			<tr id='row_set_kd_pilih_kd' >
				<td align="right" >Pilih KD : </td>
				<td>
					<label id='setkd_kd_label' ></label>
					<select id='setkd_kd' name='setkd_kd' class='form-control' required >
					<option alt='' value=''>== pilih KD ==</option>
					<?php
					for($a=1; $a<=15; $a++) {
						echo "<option alt='".$a."' value='".$a."' >".$a."</option>";
					}
					?>
					</select>
				</td>
			</tr>
			
			<tr class='setkd_div_desc'>
				<td align="right">KD Desc : </td>
				<td >
					<textarea id='setkd_desc' name='setkd_desc' class='form-control' required style='resize:none;' rows='4' ></textarea>
				</td>
			</tr>
			
			<tr class='setkd_div_desc'>
				<td align="right">Semester </td>
				<td title='Untuk menentukan KD ini akan diajarkan pada semester keberapa' >
					<select id='setkd_semester' name='setkd_semester' class='form-control' required >
					<option value=''>== Pilih semester dimana KD ini akan diterapkan ==</option>
					<option value='1'>1</option>
					<option value='2'>2</option>
					</select>
				</td>
			</tr>
			
			<tr class="setkd_div_desc" >
				<td align="right" >Tingkat Ranah KD : </td>
				<td>
					<select name='setkd_ranah_kd' id='setkd_ranah_kd' class='form-control' required >
					<option alt='' value=''>== Tingkat Ranah KD (C : Kognitif | P : Psikomotorik) ==</option>
					<?php
					foreach($data_ranah->result() as $rnh) {
						echo "<option alt='".$rnh->ranah_kode."' value='".$rnh->ranah_kode."' >".$rnh->ranah_kode." - " . $rnh->ranah_ket . "</option>";
					}
					
					/*$arRanahC = array("Pengetahuan / Mengingat","Pemahaman","Penerapan","Analisis","Sintesis","Penilaian");
					for($a=1; $a<=6; $a++) {
						echo "<option alt='C".$a."' value='C".$a."' >C".$a." - " . $arRanahC[($a-1)] . "</option>";
					}
					$arRanahP = array("Peniruan","Manipulasi","Pengalamiahan","Artikulasi");
					for($b=1; $b<=4; $b++) {
						echo "<option alt='P".$b."' value='P".$b."' >P".$b." - " . $arRanahP[($b-1)] . "</option>";
					}*/
					?>
					</select>
				</td>
			</tr>
			
			<?php
			echo "<script>";
			echo "var arRanah=new Array();";
			echo "</script>";
			foreach($data_ranah->result() as $rnh) {
				//echo $rnh->ranah_kode;
				echo "<script>";
				echo "arRanah.push({kode:'".$rnh->ranah_kode."',jenis:'".$rnh->ranah_jenis."',ket:'".$rnh->ranah_ket."'});";
				echo "</script>";
			}
			
			?>
			
			<tr class='setkd_div_desc'>
				<td align="right">Indikator Pencapaian : </td>
				<td>
					
					<!-- DETAIL Indikator Pencapaian -->
					<table rules='cols' class="table" id='tbl_indi_capai' >
					<tr style='text-align:center;color:white;background-color:#2E6DA4' >
						<td style='vertical-align:middle;' >No.</td>
						<td style='vertical-align:middle;' >Indikator Pencapaian</td>
						<td style='vertical-align:middle;'>Tingkat Ranah PK</td>
					</tr>
					
					</table>
					<!-- END DETAIL Indikator Pencapaian -->
					
					<button class="btn btn-success" id='btn_indi_capai_add' title='Tambah Indikator Pencapaian'>
						<span class="glyphicon glyphicon-plus"></span> Tambah &nbsp;
					</button>
					<button class="btn btn-success" id='btn_indi_capai_kurang' title='Kurangi Indikator Pencapaian'>
						<span class="glyphicon glyphicon-minus"></span> Kurang &nbsp;
					</button>
					
				</td>
			</tr>
			
			<tr class='setkd_div_desc' >
				<td>Materi Pokok</td>
				<td align='center' >
					<input type='text' id='setkd_materi_pokok' name='setkd_materi_pokok' class='form-control' placeholder='diisi hanya inti dari materi saja (tidak perlu penjelasan detail - max 50 character)' maxlength='50' required >
				</td>
			</tr>
			
			<tr class='setkd_div_desc' >
				<td colspan='1'>Ruang Lingkup</td>
				<td align='left' id='isiSKKD_rlingkup' >
					<table rules='cols' class='table' id='tbl_skkd_rlingkup' >
						<tr style='text-align:center;color:white;background-color:#2E6DA4;vertical-align:middle;'>
						<td>No.Ruang Lingkup</td>
						<td>Deskripsi Ruang Lingkup</td>
						</tr>
						
					</table>
					
					<button class="btn btn-success" id='btn_rlingkup_add' title='Tambah Ruang Lingkup'>
						<span class="glyphicon glyphicon-plus"></span> Tambah &nbsp;
					</button>
					<button class="btn btn-success" id='btn_rlingkup_kurang' title='Kurangi Ruang Lingkup'>
						<span class="glyphicon glyphicon-minus"></span> Kurang &nbsp;
					</button>
					
					<!--<select id='setkd_ruanglingkup' name='setkd_ruanglingkup' class="form-control" required title='Ruang lingkup diisi menurut disiplin ilmunya atau didasarkan menurut kemahiran atau kecakapan yang hendak ingin dicapai' >
						<option value='' >== Pilih Ruang Lingkup == </option>-->
						<?php
						//for ($a=1; $a<=10; $a++) {
							//echo "<option value='".$a."' >".$a."</option>";
						//}
						?>
					<!--</select>-->
					
				</td>
			</tr>
			
			
			
			
			
			<tr class='setkd_div_desc' >
				<td colspan='2' align='center' >
					<input id='setkd_btnsimpan' type='submit' value='Simpan Kompetensi Dasar' class='btn btn-warning' style='width:100%;' >
				</td>
			</tr>
			
				
		</form>
		
	</div>
	
</div>