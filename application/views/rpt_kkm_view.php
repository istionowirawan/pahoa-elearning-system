<table ><tr><td>
	<img id='btnPDF_kkm' src='<?php echo base_url(); ?>icons/pdf-export.png' class='img_export_pdf' align='right' title='Export KKM to PDF' >
</td></tr></table>

<?php
$dd_info = "Daya Dukung meliputi kompetensi guru, sarana, fasilitas, biaya, media, dll";
$Intake_info = "Tingkat kemampuan Rata-rata Peserta Didik \n
(Kelas X dapat didasarkan pada hasil seleksi Penerimaan siswa baru, Nilai UN, Raport kelas 3 SMP, tes seleksi masuk atau Psikotest,
Kelas XII dan XII didasarkan pada tingkat pencapaian KKM peserta didik pada semester atau kelas sebelumnya, keterkaitan
indikator dengan indikator sebelumnya yang telah dicapai oleh peserta didik)";
?>

<table class="table table-bordered table-responsive"  style='width:97%;' >

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

$rataPerRow = 0;
$rataPerKD = 0;

$skid=-1;
$kdid=-1;
$skid_hit=1;
$tutup_baris=false;

foreach($detail_kd_indi->result() as $obj) {
	$rataPerRow = 0;
	echo "<tr align='left' >";
		
		if($skid != $obj->id) {
			$skid=$obj->id;
			echo "<td border='1101' valign=top >".$obj->sk_no . "</td>";
			echo "<td border='1101' align=left valign=top >".$obj->sk_detail . "</td>";
			$statNewSK=true;
			$skid_hit=2;
		} else {
			if($obj->jml_kd==$skid_hit) {
				echo "<td border='0111' valign=top ></td>";
				echo "<td border='0111' valign=top ></td>";
				$tutup_baris=true;
			} else {
				echo "<td border='0101' valign=top ></td>";
				echo "<td border='0101' valign=top ></td>";
			}
			$statNewSK=false;
			$skid_hit+=1;
		}
		
		if($kdid != $obj->kdid) {
			$kdid = $obj->kdid;
			echo "<td border='1101' valign=top >".$obj->kd_no."</td>";
			echo "<td border='1101' align=left valign=top >".$obj->kd_detail."</td>";
			$statNewKd=true;
		} else {
			if($tutup_baris) {
				echo "<td border='0111' valign=top ></td>";
				echo "<td border='0111' align=left valign=top ></td>";	
			} else {
				echo "<td border='0101' valign=top ></td>";
				echo "<td border='0101' align=left valign=top ></td>";				
			}
			$statNewKd=false;
		}
		
		/*
		if($skno==-1) {
			$skno=$obj->sk_no;
			echo "<td title='sk_no:".$skno."_jml_indi".$obj->jml_kd."' rowspan='".$obj->jml_kd."' >".$obj->sk_no . "</td>";
			echo "<td title='sk_no:".$skno."_jml_indi".$obj->jml_kd."' rowspan='".$obj->jml_kd."' >".$obj->sk_detail . "</td>";
			$statNewSK=true;
		} else if ($skno!=$obj->sk_no) {
			$skno=$obj->sk_no;
			echo "<td title='sk_no:".$skno."_jml_indi".$obj->jml_kd."' rowspan='".$obj->jml_kd."' >".$obj->sk_no . "</td>";
			echo "<td title='sk_no:".$skno."_jml_indi".$obj->jml_kd."' rowspan='".$obj->jml_kd."' >".$obj->sk_detail . "</td>";
			$statNewSK=true;
		}
		
		if($kdno==-1) {
			$kdno=$obj->kd_no;
			echo "<td title='kd_no:".$kdno."_jml_indi".$obj->jml_indi."' rowspan='".$obj->jml_indi."'>".$obj->kd_no."</td>";
			echo "<td title='kd_no:".$kdno."_jml_indi".$obj->jml_indi."' rowspan='".$obj->jml_indi."'>".$obj->kd_detail."</td>";
			$count=0;
			$statNewKd=true;
		} else if ($kdno!=$obj->kd_no) {
			$kdno=$obj->kd_no;
			echo "<td title='kd_no:".$kdno."_jml_indi".$obj->jml_indi."' rowspan='".$obj->jml_indi."'>".$obj->kd_no."</td>";
			echo "<td title='kd_no:".$kdno."_jml_indi".$obj->jml_indi."' rowspan='".$obj->jml_indi."'>".$obj->kd_detail."</td>";
			$count=0;
			$statNewKd=true;
		}
		*/
		
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
		echo "<td align='center'>".$valueKP."<input value='".$valueKP."' type='hidden' name='txtKP[]' id='txtKP".$namaTxt."' title='txtKP".$namaTxt."' nosk='".$obj->sk_no."' nokd='".$obj->kd_no."' noin='".$obj->no_indi."' min='0' max='100' class='form-control inputkkm' required ></td>";
		echo "<td align='center'>".$valueDD."<input value='".$valueDD."' type='hidden' name='txtDD[]' id='txtDD".$namaTxt."' title='txtDD".$namaTxt."' nosk='".$obj->sk_no."' nokd='".$obj->kd_no."' noin='".$obj->no_indi."' min='0' max='100' class='form-control inputkkm' required ></td>";
		echo "<td align='center'>".$valueIN."<input value='".$valueIN."' type='hidden' name='txtIN[]' id='txtIN".$namaTxt."' title='txtIN".$namaTxt."' nosk='".$obj->sk_no."' nokd='".$obj->kd_no."' noin='".$obj->no_indi."' min='0' max='100' class='form-control inputkkm' required ></td>";
		$rataPerRow += $valueKP;
		$rataPerRow += $valueDD;
		$rataPerRow += $valueIN;
		
		$hasilRataPerRow = round($rataPerRow/3,0);
		echo "<td><label title='".($rataPerRow/3)."' > ".$hasilRataPerRow." </label></td>";
		if($statNewKd) {
			$q = "SELECT t1.*, sum(rata) as rata_kd, count(rata) as byk_data FROM 
			(
			SELECT *, ((kp+dd+intake)/3) as rata 
			FROM trx_kkm 
			WHERE id_mapel='".$obj->id_mapel."' 
			AND id_kelas='".$obj->id_kelas."' 
			AND semester='".$obj->semester."'
			AND sk_no='".$obj->sk_no."' 
			AND kd_no='".$obj->kd_no."'
			) as t1
			group by kd_no";
			$query = $this->db->query($q);
			
			if($query->num_rows()>0) {
				$hslRataKD = round(($query->row(0)->rata_kd) / ($query->row(0)->byk_data),0);
				echo "<td rowspan='".$obj->jml_indi."'><label title='".($query->row(0)->rata_kd) / ($query->row(0)->byk_data)."'>".$hslRataKD."</label></td>";
			} else {
				echo "<td rowspan='".$obj->jml_indi."'></td>";
			}
		}
		if($statNewSK) {
			$q = "SELECT t1.*, sum(rata) as rata_sk, count(rata) as byk_data FROM 
			(
			SELECT *, ((kp+dd+intake)/3) as rata 
			FROM trx_kkm 
			WHERE id_mapel='".$obj->id_mapel."' 
			AND id_kelas='".$obj->id_kelas."' 
			AND semester='".$obj->semester."'
			AND sk_no='".$obj->sk_no."' 
			) as t1
			group by sk_no";
			$query = $this->db->query($q);
			
			if($query->num_rows()>0) {
				$hslRataSK = round(($query->row(0)->rata_sk) / ($query->row(0)->byk_data),0);
				echo "<td rowspan='".$obj->jml_kd."'><label title='".($query->row(0)->rata_sk) / ($query->row(0)->byk_data)."'> ".$hslRataSK." </label></td>";
			} else {
				echo "<td rowspan='".$obj->jml_kd."'></td>";
			}
		}
		if($nokd==1) {
			$q = "SELECT t1.*, sum(rata) as rata_all, count(rata) as byk_data FROM 
			(
			SELECT *, ((kp+dd+intake)/3) as rata 
			FROM trx_kkm 
			WHERE id_mapel='".$obj->id_mapel."' 
			AND id_kelas='".$obj->id_kelas."' 
			AND semester='".$obj->semester."'
			) as t1
			group by id_mapel, id_kelas";
			$query = $this->db->query($q);
			
			if($query->num_rows()>0) {
				$hslRataALL = round(($query->row(0)->rata_all) / ($query->row(0)->byk_data),0);
				echo "<td rowspan='".$detail_kd_indi->num_rows()."'><label title='".($query->row(0)->rata_all) / ($query->row(0)->byk_data)."'> ".$hslRataALL." </label></td>";
			} else {
				echo "<td rowspan='".$detail_kd_indi->num_rows()."'></td>";
			}
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

echo "</table>";


$jmlMp=0;
echo "<table class='table' style='width:97%;' >";
foreach($data_mp_smst->result() as $mp) {
	echo "<tr>";
	echo "<td width='15%'>Rata MP Semester " . $mp->semester . " </td>";
	echo "<td> : " . round($mp->jml_mp,0) . "</td>";
	echo "</tr>";
	$jmlMp+=round($mp->jml_mp,0);
}
echo "<tr>";
	echo "<td>Jumlah MP </td>";
	echo "<td> : " . ($jmlMp/2) . "</td>";
echo "</tr>";
echo "</table>";
?>




</form>