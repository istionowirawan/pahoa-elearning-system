<?php
$dd_info = "Daya Dukung meliputi kompetensi guru, sarana, fasilitas, biaya, media, dll";
$Intake_info = "Tingkat kemampuan Rata-rata Peserta Didik \n
(Kelas X dapat didasarkan pada hasil seleksi Penerimaan siswa baru, Nilai UN, Raport kelas 3 SMP, tes seleksi masuk atau Psikotest,
Kelas XII dan XII didasarkan pada tingkat pencapaian KKM peserta didik pada semester atau kelas sebelumnya, keterkaitan
indikator dengan indikator sebelumnya yang telah dicapai oleh peserta didik)";
?>

<table class="table table-bordered table-responsive" style='width:97%;'>

<tr align='center' style='background-color:#C64848;color:#ffffff;' >
	<td rowspan='2' >SK No.</td>
	<td rowspan='2' >Standart Kompetensi</td>
	<td rowspan='2' >KD No.</td>
	<td rowspan='2'>Kompetensi Dasar</td>
	<td rowspan='2'>Indikator</td>
	<td rowspan='2' title='Kompleksitas' width='8%'>KP</td>
	<td rowspan='2' title='<?php echo $dd_info;?>' width='8%'>DD</td>
	<td rowspan='2' title='<?php echo $Intake_info;?>' width='8%'>Intake</td>
	<td colspan='4'>Rata-rata</td>
</tr>

<tr align='center' style='background-color:#C64848;color:#ffffff;' >
	<td title='Indikator'>ID</td>
	<td title='Kompetensi dasar'>KD</td>
	<td title='Standart kompetensi'>SK</td>
	<td title='Mata pelajaran'>MP</td>
</tr>

<?php
echo "<script>";
echo "var arSKno=new Array();";
echo "var arKDno=new Array();";
echo "var arIDno=new Array();";
echo "</script>";

$count=0;
$hitung=0;

$kdno=-1;
$skno=-1;

$nokd=1;

//print_r($data_kkm->result());

$statNewSK = false;
$statNewKd = false;
foreach($detail_kd_indi->result() as $obj) {
	echo "<tr align='left' >";
		
		if($skno==-1) {
			$skno=$obj->sk_no;
			echo "<td rowspan='".$obj->jml_kd."' >".$obj->sk_no . "</td>";
			echo "<td rowspan='".$obj->jml_kd."' >".$obj->sk_detail . "</td>";
			$statNewSK=true;
			$statNewKd=true;
		} else if ($skno!=$obj->sk_no) {
			$skno=$obj->sk_no;
			echo "<td rowspan='".$obj->jml_kd."' >".$obj->sk_no . "</td>";
			echo "<td rowspan='".$obj->jml_kd."' >".$obj->sk_detail . "</td>";
			$statNewSK=true;
			$statNewKd=true;
		}
		
		if($kdno==-1) {
			$kdno=$obj->kd_no;
			echo "<td rowspan='".$obj->jml_indi."'>".$obj->kd_no."</td>";
			echo "<td rowspan='".$obj->jml_indi."'>".$obj->kd_detail."</td>";
			$count=0;
			$statNewKd=true;
		} else if ($kdno!=$obj->kd_no || $statNewKd) {
			$kdno=$obj->kd_no;
			echo "<td rowspan='".$obj->jml_indi."'>".$obj->kd_no."</td>";
			echo "<td rowspan='".$obj->jml_indi."'>".$obj->kd_detail."</td>";
			$count=0;
			$statNewKd=true;
		}
		
		echo "<td>";
			echo $obj->no_indi . ". " . $obj->desc_indi;
			echo "<input type='hidden' name='txtNoSK[]' value='".$obj->sk_no."' >";
			echo "<input type='hidden' name='txtNoKD[]' value='".$obj->kd_no."' >";
			echo "<input type='hidden' name='txtNoIN[]' value='".$obj->no_indi."' >";
		echo "</td>";
		
		$namaTxt  = "_sk" . $obj->sk_no;
		$namaTxt .= "_kd" . $obj->kd_no;
		$namaTxt .= "_id" . $obj->no_indi;
		$valueKP = "";
		$valueDD = "";
		$valueIN = "";
		if($data_kkm->num_rows() > 0) {
			foreach($data_kkm->result() as $dtkkm) {
				if($obj->sk_no==$dtkkm->sk_no && $obj->kd_no==$dtkkm->kd_no && $obj->no_indi==$dtkkm->id_no) {
					$valueKP = $dtkkm->kp;
					$valueDD = $dtkkm->dd;
					$valueIN = $dtkkm->intake;
				}
			}
		}
		echo "<td><input value='".$valueKP."' type='number' name='txtKP[]' id='txtKP".$namaTxt."' title='txtKP".$namaTxt."' nosk='".$obj->sk_no."' nokd='".$obj->kd_no."' noin='".$obj->no_indi."' min='0' max='100' class='form-control inputkkm' required ></td>";
		echo "<td><input value='".$valueDD."' type='number' name='txtDD[]' id='txtDD".$namaTxt."' title='txtDD".$namaTxt."' nosk='".$obj->sk_no."' nokd='".$obj->kd_no."' noin='".$obj->no_indi."' min='0' max='100' class='form-control inputkkm' required ></td>";
		echo "<td><input value='".$valueIN."' type='number' name='txtIN[]' id='txtIN".$namaTxt."' title='txtIN".$namaTxt."' nosk='".$obj->sk_no."' nokd='".$obj->kd_no."' noin='".$obj->no_indi."' min='0' max='100' class='form-control inputkkm' required ></td>";
		
		$namaRata  = "_sk" . $obj->sk_no;
		$namaRata .= "_kd" . $obj->kd_no;
		$namaRata .= "_id" . $obj->no_indi;
		echo "<td><label id='lblRata".$namaRata."' title='lblRata".$namaRata."' > id </label></td>";
		if($statNewKd) {
			$namaRataId = "_sk" . $obj->sk_no;
			$namaRataId .= "_kd" . $obj->kd_no;
			echo "<td rowspan='".$obj->jml_indi."'><label id='lblRataId".$namaRataId."' title='lblRataId".$namaRataId."' > kd </label></td>";
		}
		if($statNewSK) {
			$namaRataKD = "_sk" . $obj->sk_no;
			echo "<td rowspan='".$obj->jml_kd."'><label id='lblRataKd".$namaRataKD."' title='lblRataKd".$namaRataKD."' > sk </label></td>";
		}
		if($nokd==1) {
			echo "<td rowspan='".$detail_kd_indi->num_rows()."'><label id='lblRataTot' title='lblRataTot' > mp </label></td>";
		}
		
	echo "</tr>";
	
	echo "<script>";
	echo "arSKno.push('".$obj->sk_no."');";
	echo "arKDno.push('".$obj->kd_no."');";
	echo "arIDno.push('".$obj->no_indi."');";
	echo "</script>";
	
	$count++;
	$hitung++;
	$statNewKd=false;
	$statNewSK=false;
	$nokd++;
}

?>


</table>

</form>