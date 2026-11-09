<div class="header-popup">
	<b>Input Silabus (
	<?php echo $this->session->userdata('tahunAjr_active'); ?>
	)</b>
</div>

<div class="isi-popup" >
	<div class="table-responsive" align='left' >
		<button class="btn btn-primary" id='btnBackSetSilabus' title='Kembali ke setting Silabus'>
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Back &nbsp;
		</button>
		<button class="btn btn-danger" id='btnRefreshSilabus' title='Refresh Silabus'>
			<span class="glyphicon glyphicon-refresh"></span> Refresh &nbsp;
		</button>
		
		<?php
		//print_r($data_mapel . " -> " . $data_kelas);
		//print_r($data_mapel_pilih);
		//print_r($data_kelas_pilih);
		?>
		
		<form class="form-horizontal" id="frmSetSilabus_input" name="frmSetSilabus_input" >
			<input type="hidden" name='txtSilabus_id' id='txtSilabus_id' >
			<table class="table" style='background-color:#F5F5F5;' id='tblSilabusInput' >
				
			<tr>
				<td width='15%' align="right">Mata Pelajaran : </td>
				<td>
					<?php echo $data_mapel_pilih;?>
					<input type='hidden' name='txtMapelSilabus_input' id='txtMapelSilabus_input' value='<?php echo $data_mapel;?>' >
				</td>
			</tr>
			
			<tr>
				<td align="right">Kelas : </td>
				<td>
					<?php echo $data_kelas_pilih;?>
					<input type='hidden' name='txtKelasSilabus_input' id='txtKelasSilabus_input' value='<?php echo $data_kelas;?>' >
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
					<label id='lblPilihSms'></label>
				</td>
			</tr>
			
			<tr>
				<td align="right">Pilih SK : </td>
				<td colspan='2' >
					<?php
					echo "<select id='txtSilabusSK' name='txtSilabusSK' class='form-control' required >";
					echo "<option value=''>== Pilih SK ==</option>";
					echo "</select>";
					?>
					<label id='lblSilabusSK' align='left'></label>
				</td>
			</tr>
			
			<tr>
				<td align="right">Pilih KD : </td>
				<td colspan='2' >
					<?php
					echo "<select id='txtSilabusKD' name='txtSilabusKD' class='form-control' required >";
					echo "<option value=''>== Pilih KD ==</option>";
					echo "</select>";
					?>
					<label id='lblSilabusKD' align='left' ></label>
				</td>
			</tr>
			
			<tr class='rowSilabusDetail' >
				<td align="right">Standart Kompetensi : </td>
				<td>
					<label id='lblSilabus_sk'></label>
				</td>
			</tr>
			
			<tr class='rowSilabusDetail'>
				<td align="right">Alokasi Waktu SK : </td>
				<td>
					<label id='lblSilabus_wkt_sk'></label>
				</td>
			</tr>
			
			<tr class='rowSilabusDetail'>
				<td align="right">Kompetensi Dasar : </td>
				<td>
					<label id='lblSilabus_kd'></label>
				</td>
			</tr>
			
			<tr class='rowSilabusDetail'>
				<td align="right">Alokasi Waktu KD : </td>
				<td>
					<label id='lblSilabus_wkt_kd'></label>
				</td>
			</tr>
			
			<tr class='rowSilabusDetail'>
				<td align="right">Materi Pokok Pembelajaran : </td>
				<td>
					<textarea readonly id='txtSilabus_mapok' name='txtSilabus_mapok' rows='4' class='form-control' required placeholder='contoh :
1. Membuat peta konsep sel 
2. Membuat preparat pengamatan mikroskopis sel' ><?php echo (isset($data_materi_pokok)?$data_materi_pokok->row(0)->materi_pokok:""); ?></textarea>
				</td>
			</tr>
			
			<tr class='rowSilabusDetail'>
				<td align="right">Tujuan Pembelajaran : </td>
				<td>
					<table class="table table-bordered" id='tbl_tujuan_belajar'>
					
					<tr><td class="info">Tujuan</td></tr>
					
					
					<tbody id='cont_row_tujuan' ></tbody>
					
					<tr>
						<td>
							<button id='btn_add_tujuan' type="button" class="btn btn-info" aria-label="Left Align" title='tambah baris tujuan'>
							  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Tambah tujuan
							</button>
							
							<button id='btn_remove_tujuan' type="button" class="btn btn-danger" aria-label="Left Align" title='kurangi baris tujuan'>
							  <span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span> Kurangi tujuan
							</button>
						</td>
					</tr>
					
					<tr><td class="info">Life Skill</td></tr>
					<tr><td>
						<!--<textarea id='txtSilabus_lifeskill' name='txtSilabus_lifeskill' rows='3' class='form-control' required placeholder='contoh : LC3,LC 4, LC6, LP1, LI1, LI2, LI3, LI8' ></textarea>-->
						<?php
						$hitLS = 0;
						echo "Melalui pelajaran ini, siswa diharapkan dapat ...<br>";
						echo "<table>";
						foreach($data_lifeskill->result() as $ls) {
							if($hitLS==0 || $hitLS==7 || $hitLS==17) {
								echo "<tr>";
							}
							
							echo "<td>";
							//echo $hitLS;
							$isiTitle = $ls->kode . "\n" . $ls->learning . "\n" . $ls->keterampilan . "\n" . $ls->deskripsi;
							echo "<input type='checkbox' name='txtLifeSkill[]' id='txtLS_".$ls->kode."' value='".$ls->kode."' title='".$isiTitle."' >"; 
							echo "<label title='".$isiTitle."'>" . $ls->kode . " </label>&nbsp;&nbsp;&nbsp;";
							echo "</td>";
							
							if($hitLS == 6 || $hitLS == 16 || $hitLS == 27) {
								echo "</tr>";
							}
							$hitLS++;
						}
						echo "</table>";
						?>
					</td></tr>
					
					<tr><td class="info">Nilai Moral ajaran Confucius</td></tr>
					<tr><td>
						<!--<textarea id='txtSilabus_moral' name='txtSilabus_moral' rows='3' class='form-control' required placeholder='contoh : Confucius Benevolence dan Welas asih' ></textarea>-->
						<?php
						echo "<select name='txtSilabus_moral' id='txtSilabus_moral' class='form-control' required >";
						echo "<option value=''>== Pilih Nilai Moral Confucius ==</option>";
						foreach($data_confucius->result() as $cof) {
							echo "<option value='".$cof->dizigui."' >".$cof->dizigui . " (".$cof->indo.")"."</option>";
						}
						echo "</select>";
						?>
					</td></tr>
					
					<tr><td class="info">Pendidikan Karakter</td></tr>
					<tr><td>
						<!--<textarea id='txtSilabus_karakter' name='txtSilabus_karakter' rows='3' class='form-control' required placeholder='contoh : Jujur, kerja keras,Toleransi,Tanggung Jawab,Peduli lingkungan' ></textarea>-->
						<?php
						$hitPK=0;
						echo "<table>";
						foreach($data_pend_kar->result() as $pk) {
							if($hitPK%3 == 0) {
								echo "<tr>";
							}
							
							echo "<td>";
								//echo $hitPK%6;
								echo "<input class='txtSil_kar' type='checkbox' name='txtSilabus_karakter[]' id='txtSilabus_karakter".$hitPK."' value='".$pk->id."' title='".$pk->keterangan."' >"; 
								echo "<label title='".$pk->id."'>" . $pk->keterangan . " </label>&nbsp;&nbsp;&nbsp;";
							echo "</td>";
							
							if($hitPK%3 == 5) {
								echo "</tr>";
							}
							
							$hitPK++;
						}
						echo "</table>";
						?>
					</td></tr>
					
					</table>
				</td>
			</tr>
			
			<tr class='rowSilabusDetail'>
				<td align="right">Kegiatan Pembelajaran : </td>
				<td>
					<textarea id='txtSilabus_kegbel' name='txtSilabus_kegbel' rows='4' class='form-control' required placeholder='Contoh kegiatan pembelajaran :
1. Tatap muka
2. Penugasan Terstruktur
3. Kegiatan Mandiri Tidak Terstruktur' ></textarea>
				</td>
			</tr>
			
			<tr class='rowSilabusDetail'>
				<td align="right">Indikator Pencapaian Kompetensi : </td>
				<td>
					<div id='divIndiCapai'>
					</div>
				</td>
			</tr>
			
			<tr class='rowSilabusDetail'>
				<td align="right">Sumber Belajar : </td>
				<td>
					<textarea id='txtSilabus_sumbel' name='txtSilabus_sumbel' rows='4' class='form-control' required placeholder='Contoh Sumber Belajar :
1. Buku Biologi 2A
2. Mikroskop' ></textarea>
				</td>
			</tr>
			
			<tr class='rowSilabusDetail'>
				<td colspan='2' ><input type='submit' value='Simpan Silabus' name='btnSubmitSilabus' id='btnSubmitSilabus' class="btn btn-danger" style="width:100%" ></td>
			</tr>
			
			</table>
		</form>
	</div>
</div>

