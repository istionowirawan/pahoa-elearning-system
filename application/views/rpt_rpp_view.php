<table width='100%'><tr><td>
	<img id='btnPrint_rpp' src='<?php echo base_url(); ?>icons/Print.png' class='img_export_pdf img-responsive' align='right' title='Print this report' >
	<img id='btnPDF_rpp' src='<?php echo base_url(); ?>icons/pdf-export.png' class='img_export_pdf' align='right' title='Export RPP to PDF' >
</td></tr></table>

<?php
//print_r($lap_rpp->result());
$brs=0;
$noKD=-1;
$kdcount=1;

echo "<div>";

echo "<div class='form-group'>";
	echo "<label class='col-sm-2' style='text-align:left;' >RPP No </label>";
	echo "<div class='col-sm-10'>";
		echo "<label> : ";
			if($lap_rpp->num_rows() > 0) {
				echo $lap_rpp->row(0)->no_rpp;
			}
		echo "</label>";
	echo "</div>";
echo "</div>";

$jmlJam = ($tampilSKjam->row(0)->jmljam+$tampilSKjamUji->row(0)->jmljam);	

echo "<div class='form-group'>";
	echo "<label class='col-sm-2' style='text-align:left;'>Jumlah pertemuan </label>";
	echo "<div class='col-sm-10'>";
		echo "<label> : ".$jmlJam."</label>";
	echo "</div>";
echo "</div>";


foreach($tampilSKrpp->result() as $object) {
	if($brs==0) {
		echo "<div >";
			echo "<label class='col-sm-12 rpt_rpp_label' >A. Standart Kompetensi</label>";
			echo "<div class='col-sm-12' style='margin-left:20px;' ><label>".$object->sk_detail."</label></div>";
		echo "</div>";
	}
	
	if($noKD==-1) {
		echo "<div >";
			echo "<label class='col-sm-12 rpt_rpp_label' >B. Kompetensi Dasar</label>";
			echo "<div class='col-sm-12' style='margin-left:20px;' ><label>".$kdcount . ". ". $object->kd_detail."</label></div>";
		echo "</div>";
		
		$noKD = $object->kd_no;
		$kdcount++;
	} else if ($noKD!=$object->kd_no) {
		echo "<div >";
			echo "<div class='col-sm-12' style='margin-left:20px;' ><label>".$kdcount . ". ". $object->kd_detail."</label></div>";
		echo "</div>";
		
		$noKD = $object->kd_no;
		$kdcount++;
	}
	$brs++;
}

$noindi=1;
foreach($tampilSKrpp->result() as $object) {
	if($noindi==1) {
		echo "<div >";
			echo "<label class='col-sm-12 rpt_rpp_label' >C. Indikator</label>";
			echo "<div class='col-sm-12' style='margin-left:20px;' ><label>".$noindi . ". ". $object->desc_indi."</label></div>";
		echo "</div>";
		$noindi++;
	} else {
		echo "<div >";
			echo "<div class='col-sm-12' style='margin-left:20px;' ><label>".$noindi . ". ". $object->desc_indi."</label></div>";
		echo "</div>";
		
		$noindi++;
	}	
}
echo "<br>";

$strSkill="";
$strTujbel="";

echo "<div >";
echo "<label class='col-sm-12 rpt_rpp_label' >D. Tujuan Pembelajaran</label>";
echo "</div >";
foreach($lap_rpp_tujuan->result() as $object) {
	$strSkill = "<ul class='centang-list' >";
	$exSkill = explode(";",$object->tujuan_skill);
	for($a=0; $a<count($exSkill)-1; $a++) {
		foreach($data_lifeskill->result() as $ls) {
			if($ls->kode == $exSkill[$a]) {
				$strSkill .= "<li>". $ls->kode . " - " . $ls->keterampilan . "</li>";
				break;
			} 
		}
	}
	$strSkill.="</ul>";
	
	$strTujbel = "<ul class='centang-list' >";
	$exTujbel = explode(";",$object->tujuan_pembelajaran);
	for($a=0; $a<count($exTujbel)-1; $a++) {
		foreach($data_tujbel->result() as $tb) {
			if($tb->id == $exTujbel[$a]) {
				$strTujbel .= "<li>". $tb->tujuan . "</li>";
				break;
			} 
		}
	}
	$strTujbel.="</ul>";
		
	echo "<div class='col-sm-12' style='margin-left:20px;' ><label>";
		echo "Pertemuan " . $object->pert_ke . " (".$object->jml_jam." jam) ";
		echo "<ul>";
		echo "<li><u>Life Skill</u></li>";
		echo $strSkill;
		echo "<li><u>Nilai Moral & Ajaran Confusius</u></li>";
		echo "<label style='padding-left:20px;'> " . $object->tujuan_moral . "</label>";
		echo "<li><u>Tujuan Pembelajaran</u></li>";
		echo $strTujbel;
		echo "</ul>";
	echo "</label></div>";
}

$isiMateriRPP = "";
if($lap_rpp_materi->num_rows()>0) {
	$isiMateriRPP = $lap_rpp_materi->row(0)->materi;
} else {
	$isiMateriRPP = $lap_rpp->row(0)->materi;
}
$isiMetodeRPP = "";
if($lap_rpp_metode->num_rows()>0) {
	$isiMetodeRPP = $lap_rpp_metode->row(0)->metode;
} else {
	$isiMetodeRPP = $lap_rpp->row(0)->metode;
}

echo "<div >";
	echo "<label class='col-sm-12 rpt_rpp_label' >E. Materi Pembelajaran</label>";
	echo "<div class='col-sm-12' style='margin-left:20px;' ><label>".nl2br($isiMateriRPP)."</label></div>";
echo "</div>";

echo "<div>";
	echo "<label class='col-sm-12 rpt_rpp_label' >F. Metode Pembelajaran</label>";
	echo "<div class='col-sm-12' style='margin-left:20px;' ><label>".nl2br($isiMetodeRPP)."</label></div>";
echo "</div>";

echo "<div>";
echo "<label class='col-sm-12 rpt_rpp_label' >G. Kegiatan Pembelajaran</label>";
echo "</div>";
foreach($lap_rpp_kegbel->result() as $obj) {
	echo "<div class='col-sm-12' style='margin-left:20px;' >";
	echo "Pertemuan " . $obj->pert_ke . " (".$object->jml_jam." Jam) ";
	echo "<table class='table table-bordered'>";
		echo "<tr>";
		echo "<td width='3%'>No.</td>";
		echo "<td>Kegiatan</td>";
		echo "<td width='7%'>Waktu</td>";
		echo "<td width='20%'>Metode</td>";
		echo "</tr>";
		
		echo "<tr>";
			echo "<td>1.</td>";
			echo "<td>";
				echo "Pendahuluan:<br>";
				echo $obj->pendahuluan;
			echo "</td>";
			echo "<td>".$obj->waktu_a." mnt</td>";
			echo "<td>".$obj->metode_a."</td>";
		echo "</tr>";
		
		echo "<tr>";
			echo "<td>2.</td>";
			echo "<td>";
				echo "Kegiatan Inti:<br>";
				echo "<ol type='a'>";
				echo "<li>Eksplorasi</li>";
				echo $obj->eksplor;
				echo "<li>Elaborasi</li>";
				echo $obj->elabor;
				echo "<li>Konfirmasi</li>";
				echo $obj->konfirm;
				echo "</ol>";
			echo "</td>";
			echo "<td>".$obj->waktu_b." mnt</td>";
			echo "<td>".$obj->metode_b."</td>";
		echo "</tr>";
		
		echo "<tr>";
			echo "<td>3.</td>";
			echo "<td>";
				echo "Penutup:<br>";
				echo $obj->penutup;
			echo "</td>";
			echo "<td>".$obj->waktu_c." mnt</td>";
			echo "<td>".$obj->metode_c."</td>";
		echo "</tr>";
		
	echo "</table>";
	echo "</div>";
}

echo "<div >";
	echo "<label class='col-sm-12 rpt_rpp_label' >H. Sumber Belajar</label>";
	echo "<div class='col-sm-12' style='margin-left:20px;' ><label>".nl2br($lap_rpp->row(0)->sumber)."</label></div>";
echo "</div>";

echo "<div >";
	echo "<label class='col-sm-12 rpt_rpp_label' >I. Media Pembelajaran</label>";
	echo "<div class='col-sm-12' style='margin-left:20px;' ><label>".nl2br($lap_rpp_media->row(0)->media)."</label></div>";
echo "</div>";


echo "<div>";
echo "<label class='col-sm-12 rpt_rpp_label' >J. Penilaian</label>";
echo "</div>";

echo "<table class='table table-bordered'>";
	
	echo "<tr align='center'>";
		echo "<td width='3%'>No.</td>";
		echo "<td>Indikator</td>";
		echo "<td width='10%'>Teknik</td>";
		echo "<td width='10%'>Bentuk</td>";
		echo "<td width='10%'>Instrument</td>";
	echo "</tr>";

foreach($lap_rpp_indi->result() as $obj) {
	echo "<tr>";
		echo "<td align='center'>".$obj->no."</td>";
		echo "<td>".$obj->indikator."</td>";
		echo "<td align='center'>".$obj->teknik."</td>";
		echo "<td align='center'>".$obj->bentuk."</td>";
		echo "<td align='center'>".$obj->instrument."</td>";
	echo "</tr>";
}
echo "</table>";

echo "<br>";

echo "<table class='table table-bordered'>";
	
	echo "<tr align='center'>";
		echo "<td width='3%'>No.</td>";
		echo "<td>Soal</td>";
		echo "<td width='10%'>Bobot %</td>";
	echo "</tr>";

	
foreach($lap_rpp_soal->result() as $obj) {
	echo "<tr>";
		echo "<td align='center'>".$obj->no."</td>";
		echo "<td>".$obj->soal."</td>";
		echo "<td align='center'>".$obj->bobot."</td>";
	echo "</tr>";
}
echo "</table>";

echo "<br>";

echo "<table class='table table-bordered'>";
	
	echo "<tr align='center'>";
		echo "<td width='3%'>No.</td>";
		echo "<td>Jawaban</td>";
	echo "</tr>";
	
foreach($lap_rpp_jawaban->result() as $obj) {
	echo "<tr>";
		echo "<td align='center'>".$obj->no."</td>";
		echo "<td>".$obj->jawaban."</td>";
	echo "</tr>";
}
echo "</table>";

echo "</div>";
echo "</div>";
?>