<script>
var arIdTMsm1=new Array();
var arIdTMsm2=new Array();
var arNoSK=new Array();
var jmlSK=0;

function TMsm1_change(noSK) {
	var jmlTMsm1=0;
	for(var a=0; a<arIdTMsm1.length; a++) {
		if(document.getElementById(arIdTMsm1[a]).value!="") {
			jmlTMsm1 += Number(document.getElementById(arIdTMsm1[a]).value);
		}
	}
	document.getElementById("txtJmlTMsm1").innerHTML=Number(jmlTMsm1);
	cek_valid_sk(noSK);
}
function TMsm2_change(noSK) {
	var jmlTMsm2=0;
	for(var a=0; a<arIdTMsm2.length; a++) {
		if(document.getElementById(arIdTMsm2[a]).value!="") {
			jmlTMsm2 += Number(document.getElementById(arIdTMsm2[a]).value);
		}
	}
	document.getElementById("txtJmlTMsm2").innerHTML=Number(jmlTMsm2);
	cek_valid_sk(noSK);
}
function cek_valid_sk(noSK) {
	var isiTxtSm1=document.getElementById("txtTM_sk"+noSK+"sm1").value;
	var isiTxtSm2=document.getElementById("txtTM_sk"+noSK+"sm2").value;
	
	if((isiTxtSm1>0 && isiTxtSm2==0) || (isiTxtSm1==0 && isiTxtSm2>0)) {
		document.getElementById("check_SK"+noSK).src = "<?php echo base_url(); ?>icons/tick_32.png";
		var kataTitle = "Valid jumlah tatap muka";
		kataTitle += "\nSK ini akan masuk kedalam kelompok \nSemester";
		if(isiTxtSm1>0) {
			kataTitle += "1";
			document.getElementById("txtChxSms_SK"+noSK).value=1;
		} else {
			kataTitle += "2";
			document.getElementById("txtChxSms_SK"+noSK).value=2;
		}
		document.getElementById("check_SK"+noSK).title = kataTitle;
		document.getElementById("check_SK"+noSK).alt = "tm_benar";
	} else {
		document.getElementById("check_SK"+noSK).src = "<?php echo base_url(); ?>icons/cross.png";
		document.getElementById("check_SK"+noSK).title = "Jumlah tatap muka tidak valid\nKemungkinan salah adalah \n1.Jumlah tatap muka masih kosong (Semester1 dan Semester2)\n2.SK tidak boleh diisi di kedua semester, salah satu aja (semester1 atau semester2 aja)";
		document.getElementById("check_SK"+noSK).alt = "tm_salah";
		document.getElementById("txtChxSms_SK"+noSK).value=0;
	}
}
</script>

<div class="header-popup">
	<b>Input Prosata - Program Satu Tahun (
	<?php echo $this->session->userdata('tahunAjr_active') . ", semester " . $this->session->userdata('semester_active'); ?>
	)</b>
</div>

<div class="isi-popup" >
	<div class="table-responsive" align='left' >
		<button class="btn btn-primary" id='btnBackSetProta' title='Kembali ke setting Prota'>
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Back &nbsp;
		</button>
		
		<?php
		//print_r($data_mapel . " -> " . $data_kelas);
		//print_r($data_mapel_pilih);
		//print_r($data_kelas_pilih);
		?>
		
		<form class="form-horizontal" id="frmSetProta_input" name="frmSetProta_input" >
			<table class="table" style='background-color:#F5F5F5;' >
				
			<tr>
				<td width='15%' align="right">Mata Pelajaran : </td>
				<td>
					<?php echo $data_mapel_pilih;?>
					<input type='hidden' name='txtMapelProta_input' id='txtMapelProta_input' value='<?php echo $data_mapel;?>' >
				</td>
			</tr>
			
			<tr>
				<td align="right">Kelas : </td>
				<td>
					<?php echo $data_kelas_pilih;?>
					<input type='hidden' name='txtKelasProta_input' id='txtKelasProta_input' value='<?php echo $data_kelas;?>' >
				</td>
			</tr>
			
			<tr>
				<td colspan='2'>
				
					<table class="table table-bordered" >
						<tr align="center" >
							<td rowspan="2">No.SK</td>
							<td rowspan="2">Standart Kompetensi</td>
							<td rowspan="2">Jumlah KD</td>
							<td colspan="3">Jumlah Jam Tatap Muka</td>
						</tr>
						
						<tr align="center">
							<td>Semester 1</td>
							<td>Semester 2</td>
							<td title='Checking Semester'><img src='<?php echo base_url(); ?>icons/tick_32.png' width='15px;' height='15px;' ></td>
						</tr>
						
						<?php
						$arDataProta=array();
						$no=0;
						foreach($data_prota->result() as $object) {
							$arDataProta[$object->sk_no]["sk_sm1"] = $object->sk_sm1;
							$arDataProta[$object->sk_no]["sk_sm2"] = $object->sk_sm2;
							$no++;
						}
						
						$nourut=1;
						$totalKD = 0;
						foreach($data_skkd->result() as $object) {
							echo "<input type='hidden' name='txtIDSK[]' id='txtIDSK".$object->id."' value='".$object->id."'>";
							echo "<tr>";
							echo "<td align='center'>".$object->sk_no."<input type='hidden' name='txtSKNo[]' id='txtSKNo".$object->sk_no."' value='".$object->sk_no."' ></td>";
							echo "<td>".$object->sk_detail."</td>";
							echo "<td align='center'>".$object->jml_kd."</td>";
							if(isset($arDataProta[$object->sk_no]["sk_sm1"])) {
								echo "<td align='center'><input class='form-control' type='number' min='0' pattern='[0-9]' name='txtSKsm1[]' id='txtTM_sk".$object->sk_no."sm1' title='SK".$object->sk_no."-sm1' onchange='TMsm1_change($object->sk_no)' required value='".$arDataProta[$object->sk_no]["sk_sm1"]."' ></td>";
							} else {
								echo "<td align='center'><input class='form-control' type='number' min='0' pattern='[0-9]' name='txtSKsm1[]' id='txtTM_sk".$object->sk_no."sm1' title='SK".$object->sk_no."-sm1' onchange='TMsm1_change($object->sk_no)' required value='0' ></td>";
							}
							if(isset($arDataProta[$object->sk_no]["sk_sm2"])) {
								echo "<td align='center'><input class='form-control' type='number' min='0' pattern='[0-9]' name='txtSKsm2[]' id='txtTM_sk".$object->sk_no."sm2' title='SK".$object->sk_no."-sm2' onchange='TMsm2_change($object->sk_no)' required value='".$arDataProta[$object->sk_no]["sk_sm2"]."' ></td>";
							} else {
								echo "<td align='center'><input class='form-control' type='number' min='0' pattern='[0-9]' name='txtSKsm2[]' id='txtTM_sk".$object->sk_no."sm2' title='SK".$object->sk_no."-sm2' onchange='TMsm2_change($object->sk_no)' required value='0' ></td>";
							}
							echo "<td>";
								echo "<div>";
								echo "<img src='".base_url()."icons/tick_32.png' id='check_SK".$object->sk_no."' title='check_SK".$object->sk_no."' width='15px;' height='15px;' >";
								echo "<input type='hidden' id='txtChxSms_SK".$object->sk_no."' name='txtChxSms_SK[]' >";
								echo "</div>";
							echo "</td>";
							echo "</tr>";
							$nourut++;
							$totalKD+=$object->jml_kd;
							
							echo "<script>";
							echo "arIdTMsm1.push('txtTM_sk".$object->sk_no."sm1');";
							echo "arIdTMsm2.push('txtTM_sk".$object->sk_no."sm2');";
							echo "jmlSK++;";
							echo "TMsm1_change($object->sk_no);";
							echo "TMsm2_change($object->sk_no);";
							echo "arNoSK.push('".$object->sk_no."');";
							echo "</script>";
						}
						?>
						
						<tr>
							<td colspan="6">&nbsp;<input type="hidden" name='txtJmlSK' id='txtJmlSK' value='' ></td>
						</tr>
						
						<tr align="center" >
							<td colspan="2">Jumlah KD dan Tatap Muka</td>
							<td><?php echo $totalKD;?></td>
							<td><label id='txtJmlTMsm1'></label></td>
							<td><label id='txtJmlTMsm2'></label></td>
							<td></td>
						</tr>
						
					</table>
				
				</td>
			</tr>
			
			<tr>
				<td colspan='2' align='center' >
					<?php
					if(count($arDataProta)>0) {
						echo "<input id='btnSimpanProta_input' type='submit' value='Update Prota' class='btn btn-warning' style='width:100%;' >";
					} else {
						if($nourut>1) {
							echo "<input id='btnSimpanProta_input' type='submit' value='Simpan Prota' class='btn btn-success' style='width:100%;' >";
						} else {
							echo "<input id='btnSimpanProta_input' type='button' value='Silahkan isi pemetaan SK-KD terlebih dahulu' class='btn btn-danger' style='width:100%;' >";
						}
					}
					?>
					
				</td>
			</tr>
			
			</table>
		</form>
	</div>
</div>

