<html>
<head>
<title>Report RPP</title>
<style>
.head_part_rpp td {
	padding-top:10px;
	font-weight:bold;
}
.desc_part_rpp td {
	padding-left:20px;
	padding-top:3px;
}
.sub_header_part_rpp td {
	padding-left:20px;
	text-decoration:underline;
}
.sub_desc_part_rpp td {
	padding-left:20px;
}
.sub_desc_isi_part_rpp td {
	padding-left:45px;
}

.table_part_rpp tr td {
	padding:4px;
	vertical-align:top;
}
.ul_tbl_inti {
	padding-left:20px;
}
.ul_tbl_inti li {
	padding-top:5px;
}
.row_awal td {
	text-align:center;
	background-color:#F5F5F5;
	font-weight:bold;
}
.centang-list {
	list-style: none;
	list-style-position:outside;
	padding-left:0px;
	text-indent:2px;
}
.centang-list li:before {
	content: '✔';   
	margin-right:10px;
}
</style>

<script src="<?php echo base_url(); ?>jquery/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		window.print();
	});
</script>
</head>

<body>

<?php
$imgpath=base_url() . "image/logo.png";
$jmlJam = ($tampilSKjam->row(0)->jmljam+$tampilSKjamUji->row(0)->jmljam);

echo "
<table border='0' align=center width=100%>
<tr>
	<td colspan=2 width='50' ><h2 align='center'>Rencana Pelaksanaan Pembelajaran<br>No : ".$lap_rpp->row(0)->no_rpp."</h2></td>
	<td rowspan=4 valign=middle width='160' ><img src=".$imgpath." width=110 height=150></td>
</tr>

<tr>
<td width=50 >Nama Sekolah</td>
<td > : SEKOLAH TERPADU PAHOA</td>
</tr>

<tr>
<td width=150 >Mata Pelajaran </td>
<td > : ".$data_mapel_pilih."</td>
</tr>

<tr>
<td width=50 >Kelas / Semester </td>
<td> : ".$data_kelas_pilih . " / " . $semester . "</td>
</tr>

<tr>
<td width=50 >Jumlah Pertemuan</td>
<td> : ".$jmlJam. "</td>
</tr>

<tr><td colspan=3>&nbsp;</td></tr>
</table>";


echo "<table border=0>";

$brs=0;
$noKD=-1;
$kdcount=1;

foreach($tampilSKrpp->result() as $object) {
	if($brs==0) {
		echo "<tr class='head_part_rpp' >";
		echo "<td align=left style=bold >";
			echo "<label class='col-sm-12 rpt_rpp_label' ><b>A. Standart Kompetensi</b></label>";
		echo "</td>";
		echo "</tr>";
		
		echo "<tr class='desc_part_rpp' >";
		echo "<td align=left>";
			echo $object->sk_detail;
		echo "</td>";
		echo "</tr>";
	}
	
	if($noKD==-1) {
		echo "<tr><td></td></tr>";
		
		echo "<tr class='head_part_rpp'>";
		echo "<td>";
			echo "<label class='col-sm-12 rpt_rpp_label' >B. Kompetensi Dasar</label>";
		echo "</td>";
		echo "</tr>";
		
		echo "<tr class='desc_part_rpp'>";
		echo "<td align=left>";
			echo $kdcount . ". ". $object->kd_detail;
		echo "</td>";
		echo "</tr>";
		
		$noKD = $object->kd_no;
		$kdcount++;
	} else if ($noKD!=$object->kd_no) {
		echo "<tr class='desc_part_rpp'>";
		echo "<td align=left>";
			echo $kdcount . ". ". $object->kd_detail;
		echo "</td>";
		echo "</tr>";
		
		$noKD = $object->kd_no;
		$kdcount++;
	}
	$brs++;
}


$noindi=1;
echo "<tr><td></td></tr>";
echo "<tr class='head_part_rpp'>";
echo "<td>C. Indikator</td>";
echo "</tr>";
foreach($tampilSKrpp->result() as $object) {
	echo "<tr class='desc_part_rpp'>";
	echo "<td align=left>";
		echo $noindi . ". ". $object->desc_indi;
	echo "</td>";
	echo "</tr>";
	$noindi++;
}

$strSkill="";
$strTujbel="";

echo "<tr><td></td></tr>";
echo "<tr class='head_part_rpp'>";
echo "<td>D. Tujuan Pembelajaran</td>";
echo "</tr>";
foreach($lap_rpp_tujuan->result() as $object) {
	echo "<tr>";
	echo "<td>";
		echo "<table>";
		
		echo "<tr class='sub_header_part_rpp' >";
		echo "<td>Pertemuan " . $object->pert_ke . " (".$object->jml_jam." jam) " . "</td>";
		echo "</tr>";
		
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
		
		echo "<ol>";
			echo "<tr class='sub_desc_part_rpp' >";
			echo "<td><li>Life Skill</li></td>";
			echo "</tr>";
			echo "<tr class='sub_desc_isi_part_rpp' >";
			echo "<td>" . $strSkill . "</td>";
			echo "</tr>";
			
			
			echo "<tr class='sub_desc_part_rpp'>";
			echo "<td><li>Nilai Moral & Ajaran Confusius</li></td>";
			echo "</tr>";
			echo "<tr class='sub_desc_isi_part_rpp'>";
			echo "<td align=left>" . $object->tujuan_moral . "</td>";
			echo "</tr>";
			
			
			echo "<tr class='sub_desc_part_rpp'>";
			echo "<td><li>Tujuan Pembelajaran</li></td>";
			echo "</tr>";
			echo "<tr class='sub_desc_isi_part_rpp'>";
			echo "<td>" . $strTujbel . "</td>";
			echo "</tr>";
		echo "</ol>";
		
		echo "<tr><td></td></tr>";
		
		echo "</table>";
	echo "</td>";
	echo "</tr>";
}


echo "<tr><td></td></tr>";

echo "<tr class='head_part_rpp'>";
echo "<td>E. Materi Pembelajaran</td>";
echo "</tr>";
echo "<tr class='desc_part_rpp'>";
echo "<td align=left>". nl2br($lap_rpp_materi->row(0)->materi) . "</td>";
echo "</tr>";

echo "<tr><td></td></tr>";
echo "<tr class='head_part_rpp'>";
echo "<td>F. Metode Pembelajaran</td>";
echo "</tr>";
echo "<tr class='desc_part_rpp'>";
echo "<td>". nl2br($lap_rpp_metode->row(0)->metode) . "</td>";
echo "</tr>";


echo "</table>";
$noAr=0;
foreach($lap_rpp_kegbel->result() as $obj) {
	echo "<table border='0' width=100%>";
	echo "<tr><td></td></tr>";
	echo "<tr class='head_part_rpp'>";
	echo "<td>G. Kegiatan Pembelajaran</td>";
	echo "</tr>";
	
	
	echo "<tr>";
	echo "<td style='padding-left:20px;' >Pertemuan " . $obj->pert_ke . " (".$object->jml_jam." Jam) "."</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>";
		echo "<table style='margin-left:20px;' border='1' rules='all' width='95%' class='table_part_rpp' >";
			echo "<tr class='head_part_rpp' >";
			echo "<td width='3%' bgcolor=#F5F5F5 >No.</td>";
			echo "<td bgcolor=#F5F5F5 >Kegiatan</td>";
			echo "<td width='30' bgcolor=#F5F5F5 >Waktu</td>";
			echo "<td width='30%' bgcolor=#F5F5F5 >Metode</td>";
			echo "</tr>";
			
			echo "<tr>";
				echo "<td align='center' >1.</td>";
				echo "<td>";
					echo "<u>Pendahuluan :</u><br>";
					echo $obj->pendahuluan;
				echo "</td>";
				echo "<td>".$obj->waktu_a." mnt</td>";
				echo "<td>".$obj->metode_a."</td>";
			echo "</tr>";
			
			echo "<tr>";
				echo "<td align='center' >2.</td>";
				echo "<td class='detail_tbl_kegbel_inti' >";
					echo "<u>Kegiatan Inti :</u>";
					echo "<ul type='square' class='ul_tbl_inti' >";
					echo "<li>Eksplorasi</li>";
					echo "<label class='desc_kegbel_inti' >" . $obj->eksplor . "</label>";
					echo "<li>Elaborasi</li>";
					echo "<label class='desc_kegbel_inti' >" . $obj->elabor . "</label>";
					echo "<li>Konfirmasi</li>";
					echo "<label class='desc_kegbel_inti' >" . $obj->konfirm . "</label>";
					echo "</ul>";
				echo "</td>";
				echo "<td>".$obj->waktu_b." mnt</td>";
				echo "<td>".$obj->metode_b."</td>";
			echo "</tr>";
			
			echo "<tr>";
				echo "<td align='center'>3.</td>";
				echo "<td align=left>";
					echo "<u>Penutup :</u><br>";
					echo $obj->penutup;
				echo "</td>";
				echo "<td>".$obj->waktu_c." mnt</td>";
				echo "<td>".$obj->metode_c."</td>";
			echo "</tr>";
			
		echo "</table>";
	
	echo "</td>";
	echo "</tr>";
	echo "</table>";
	$noAr++;
}

$contBawah = "";
echo "<table border=0 width='100%' >";
	echo "<tr><td></td></tr>";
	echo "<tr class='head_part_rpp'>";
	echo "<td colspan=3 >H. Sumber Belajar</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td align=left colspan=3>".$lap_rpp->row(0)->sumber."</td>";
	echo "</tr>";

	echo "<tr class='head_part_rpp'>";
	echo "<td colspan=3>I. Media Pembelajaran</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td align=left colspan=3>".$lap_rpp->row(0)->media."</td>";
	echo "</tr>";
echo "</table>";

echo "<div>";
echo "<br><label ><b>J. Penilaian</b></label>";
echo "</div>";

echo "<table border='1' rules='all' class='table_part_rpp'>";
	
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

echo "<table border='1' rules='all' width='100%' class='table_part_rpp' >";
	echo "<tr class='row_awal'>";
	echo "<td >No.</td>";
	echo "<td >Soal</td>";
	echo "<td >Bobot %</td>";
	echo "</tr>";
	
	foreach($lap_rpp_soal->result() as $obj) {
		echo "<tr>";
			echo "<td align='center' >".$obj->no."</td>";
			echo "<td >".$obj->soal." mnt</td>";
			echo "<td align='center' >".$obj->bobot."</td>";
		echo "</tr>";
	}	
echo "</table>";


echo "<table border='1' rules='all' width='100%' class='table_part_rpp' >";
	
	echo "<tr class='row_awal'>";
		echo "<td width=10 bgcolor='#F5F5F5' align='center' >No.</td>";
		echo "<td bgcolor=#F5F5F5 style=bold >Jawaban</td>";
	echo "</tr>";
	
foreach($lap_rpp_jawaban->result() as $obj) {
	echo "<tr>";
		echo "<td align='center' >".$obj->no."</td>";
		echo "<td>".$obj->jawaban." mnt</td>";
	echo "</tr>";

}
echo "</OL>";

echo "</table>";

echo "
<table width=100% border=0>
<tr><td colspan=2>&nbsp;</td></tr>

<tr>
	<td>Memeriksa / Menyetujui</td>
	<td width=100></td>
	<td width=100>Tangerang, ".date("d F Y")."</td>
</tr>

<tr>
	<td>Kepala Sekolah</td>
	<td></td>
	<td>Guru bidang studi,</td>
</tr>

<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>

<tr>
	<td>( ".$nama_kepsek." )</td>
	<td></td>";

//echo "<td>( ".$data_user_pilih." )</td>
echo "<td>( ".$this->session->userdata('login_nama')." )</td>
</tr>
</table>";
?>