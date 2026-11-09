<?php
$rootpath = $_SERVER['DOCUMENT_ROOT']."/elearning/pdftable/"; 
define('FPDF_FONTPATH', $rootpath.'font/');
require($rootpath.'lib/pdftable.inc.php');

$imgpath = $_SERVER['DOCUMENT_ROOT']. "/elearning/image/logo_icon.jpg";
$jmlJam = ($tampilSKjam->row(0)->jmljam+$tampilSKjamUji->row(0)->jmljam);

$content = "
<table border=0 align=center width=100%>
<tr>
	<td colspan=2 size=16 width=50 style=bold >
	RENCANA PELAKSANAAN PEMBELAJARAN (RPP)
	<br>No : ".$lap_rpp->row(0)->no_rpp."
	</td>
	<td rowspan=6 valign=middle ><img src=".$imgpath." width=140 height=190></td>
	</tr>
<tr><td colspan=2>&nbsp;</td></tr>

<tr>
<td width=50 align=L >Nama Sekolah</td>
<td align=L > : SEKOLAH TERPADU PAHOA</td>
</tr>

<tr>
<td width=50 align=L >Mata Pelajaran </td>
<td align=L > : ".$data_mapel_pilih."</td>
</tr>

<tr>
<td width=50 align=L >Kelas / Semester </td>
<td align=L> : ".$data_kelas_pilih . " / " . $semester . "</td>
</tr>

<tr>
<td width=50 align=L >Jumlah Pertemuan</td>
<td align=L > : ".$jmlJam."</td>
</tr>

</table>";

$content .= "<table width=100%><tr><td border=0></td></tr></table>";

$content .= "<table border=0 align=right>";

$brs=0;
$noKD=-1;
$kdcount=1;

foreach($tampilSKrpp->result() as $object) {
	if($brs==0) {
		$content .= "<tr>";
		$content .= "<td align=left style=bold>";
			$content .= "<label class='col-sm-12 rpt_rpp_label' >A. Standart Kompetensi</label>";
		$content .= "</td>";
		$content .= "</tr>";
		
		$content .= "<tr>";
		$content .= "<td align=left>";
			$content .= $object->sk_detail;
		$content .= "</td>";
		$content .= "</tr>";
	}
	
	if($noKD==-1) {
		$content .= "<tr><td></td></tr>";
		
		$content .= "<tr>";
		$content .= "<td align=left style=bold>";
			$content .= "<label class='col-sm-12 rpt_rpp_label' >B. Kompetensi Dasar</label>";
		$content .= "</td>";
		$content .= "</tr>";
		
		$content .= "<tr>";
		$content .= "<td align=left>";
			$content .= $kdcount . ". ". $object->kd_detail;
		$content .= "</td>";
		$content .= "</tr>";
		
		$noKD = $object->kd_no;
		$kdcount++;
	} else if ($noKD!=$object->kd_no) {
		$content .= "<tr>";
		$content .= "<td align=left>";
			$content .= $kdcount . ". ". $object->kd_detail;
		$content .= "</td>";
		$content .= "</tr>";
		
		$noKD = $object->kd_no;
		$kdcount++;
	}
	$brs++;
}

$noindi=1;
$content .= "<tr><td></td></tr>";
$content .= "<tr>";
$content .= "<td align=left style=bold>C. Indikator</td>";
$content .= "</tr>";
foreach($tampilSKrpp->result() as $object) {
	$content .= "<tr>";
	$content .= "<td align=left>";
		$content .= $noindi . ". ". $object->desc_indi;
	$content .= "</td>";
	$content .= "</tr>";
	$noindi++;
}


$content .= "<tr><td></td></tr>";
$content .= "<tr>";
$content .= "<td align=left style=bold>D. Tujuan Pembelajaran</td>";
$content .= "</tr>";
foreach($lap_rpp_tujuan->result() as $object) {
	
	$strSkill="";
	$strTujbel="";
	
	$content .= "<tr>";
	$content .= "<td align=left>";
		$content .= "<table>";
		
		$content .= "<tr>";
		$content .= "<td align=left style=bold,underline>Pertemuan " . $object->pert_ke . " (".$object->jml_jam." jam) " . "</td>";
		$content .= "</tr>";
		
		$content .= "<tr>";
		$content .= "<td align=left style=bold> > Life Skill</td>";
		$content .= "</tr>";
		$content .= "<tr>";
		
		$noUrut=1;
		$exSkill = explode(";",$object->tujuan_skill);
		for($a=0; $a<count($exSkill)-1; $a++) {
			foreach($data_lifeskill->result() as $ls) {
				if($ls->kode == $exSkill[$a]) {
					$strSkill .= $noUrut . ". " . $ls->kode . " - " . $ls->keterampilan . "<br>";
					$noUrut++;
					break;
				} 
			}
		}
		
		$content .= "<td align=left>" . $strSkill . "</td>";
		$content .= "</tr>";
		
		
		$content .= "<tr>";
		$content .= "<td align=left style=bold> > Nilai Moral & Ajaran Confusius</td>";
		$content .= "</tr>";
		$content .= "<tr>";
		$content .= "<td align=left>" . $object->tujuan_moral . "</td>";
		$content .= "</tr>";
		
		
		$content .= "<tr>";
		$content .= "<td align=left style=bold> > Tujuan Pembelajaran</td>";
		$content .= "</tr>";
		$content .= "<tr>";
		
		$exTujbel = explode(";",$object->tujuan_pembelajaran);
		for($a=0; $a<count($exTujbel)-1; $a++) {
			foreach($data_tujbel->result() as $tb) {
				if($tb->id == $exTujbel[$a]) {
					$strTujbel .= $tb->tujuan . "<br>";
					break;
				} 
			}
		}
		$content .= "<td align=left>" . $strTujbel . "</td>";
		$content .= "</tr>";
		
		$content .= "<tr><td></td></tr>";
		
		$content .= "</table>";
	$content .= "</td>";
	$content .= "</tr>";
}

$content .= "<tr><td></td></tr>";
$content .= "<tr>";
$content .= "<td align=left style=bold>E. Materi Pembelajaran</td>";
$content .= "</tr>";
$content .= "<tr>";
$content .= "<td align=left>". $lap_rpp->row(0)->materi . "</td>";
$content .= "</tr>";

$content .= "<tr><td></td></tr>";
$content .= "<tr>";
$content .= "<td align=left style=bold>F. Metode Pembelajaran</td>";
$content .= "</tr>";
$content .= "<tr>";
$content .= "<td align=left>". $lap_rpp->row(0)->metode . "</td>";
$content .= "</tr>";


$content .= "</table>";
$noAr=0;
foreach($lap_rpp_kegbel->result() as $obj) {
	$conPert[$noAr] = "";
	$conPert[$noAr] .= "<table border=0 width=100%>";
	$conPert[$noAr] .= "<tr><td></td></tr>";
	$conPert[$noAr] .= "<tr>";
	$conPert[$noAr] .= "<td align=left style=bold>G. Kegiatan Pembelajaran</td>";
	$conPert[$noAr] .= "</tr>";
	
	
	$conPert[$noAr] .= "<tr>";
	$conPert[$noAr] .= "<td align=left style=bold colspan=4 border=0 >Pertemuan " . $obj->pert_ke . " (".$object->jml_jam." Jam) "."</td>";
	$conPert[$noAr] .= "</tr>";

	$conPert[$noAr] .= "<tr>";
	$conPert[$noAr] .= "<td>";
		$conPert[$noAr] .= "<table border=1 width=100%>";
			$conPert[$noAr] .= "<tr>";
			$conPert[$noAr] .= "<td width='3%' bgcolor=#F5F5F5 >No.</td>";
			$conPert[$noAr] .= "<td bgcolor=#F5F5F5 >Kegiatan</td>";
			$conPert[$noAr] .= "<td width='30' bgcolor=#F5F5F5 >Waktu</td>";
			$conPert[$noAr] .= "<td width='50%' bgcolor=#F5F5F5 >Metode</td>";
			$conPert[$noAr] .= "</tr>";
			
			$conPert[$noAr] .= "<tr>";
				$conPert[$noAr] .= "<td valign=top>1.</td>";
				$conPert[$noAr] .= "<td align=left>";
					$conPert[$noAr] .= "Pendahuluan:<br>";
					$conPert[$noAr] .= $obj->pendahuluan;
				$conPert[$noAr] .= "</td>";
				$conPert[$noAr] .= "<td>".$obj->waktu_a." mnt</td>";
				$conPert[$noAr] .= "<td>".$obj->metode_a."</td>";
			$conPert[$noAr] .= "</tr>";
			
			$conPert[$noAr] .= "<tr>";
				$conPert[$noAr] .= "<td valign=top>2.</td>";
				$conPert[$noAr] .= "<td align=left>";
					$conPert[$noAr] .= "> Kegiatan Inti:<br>";
					$conPert[$noAr] .= "<br>";
					$conPert[$noAr] .= " o Eksplorasi<br> ";
					$conPert[$noAr] .= $obj->eksplor;
					$conPert[$noAr] .= "<br> o Elaborasi<br>";
					$conPert[$noAr] .= $obj->elabor;
					$conPert[$noAr] .= "<br> o Konfirmasi<br>";
					$conPert[$noAr] .= $obj->konfirm;
					$conPert[$noAr] .= "<br>";
				$conPert[$noAr] .= "</td>";
				$conPert[$noAr] .= "<td>".$obj->waktu_b." mnt</td>";
				$conPert[$noAr] .= "<td>".$obj->metode_b."</td>";
			$conPert[$noAr] .= "</tr>";
			
			$conPert[$noAr] .= "<tr>";
				$conPert[$noAr] .= "<td valign=top>3.</td>";
				$conPert[$noAr] .= "<td align=left>";
					$conPert[$noAr] .= "Penutup:<br>";
					$conPert[$noAr] .= $obj->penutup;
				$conPert[$noAr] .= "</td>";
				$conPert[$noAr] .= "<td>".$obj->waktu_c." mnt</td>";
				$conPert[$noAr] .= "<td>".$obj->metode_c."</td>";
			$conPert[$noAr] .= "</tr>";
			
		$conPert[$noAr] .= "</table>";
	
	$conPert[$noAr] .= "</td>";
	$conPert[$noAr] .= "</tr>";
	$conPert[$noAr] .= "</table>";
	$noAr++;
}

$contBawah = "";
$contBawah .= "<table border=0 width=100%>";
	$contBawah .= "<tr><td></td></tr>";
	$contBawah .= "<tr>";
	$contBawah .= "<td align=left style=bold colspan=3 >H. Sumber Belajar</td>";
	$contBawah .= "</tr>";

	$contBawah .= "<tr>";
	$contBawah .= "<td align=left colspan=3>".$lap_rpp->row(0)->sumber."</td>";
	$contBawah .= "</tr>";

	$contBawah .= "<tr>";
	$contBawah .= "<td align=left style=bold colspan=3>I. Media Pembelajaran</td>";
	$contBawah .= "</tr>";

	$contBawah .= "<tr>";
	$contBawah .= "<td align=left colspan=3>".$lap_rpp->row(0)->media."</td>";
	$contBawah .= "</tr>";
$contBawah .= "</table>";

$contBawah .= "<table border=1 width=100%>";
	$contBawah .= "<tr><td border=0></td></tr>";
	$contBawah .= "<tr>";
	$contBawah .= "<td align=left style=bold colspan=3 border=0 >J. Penilaian</td>";
	$contBawah .= "</tr>";
	
	$contBawah .= "<tr>";
	$contBawah .= "<td width=10 bgcolor=#F5F5F5 style=bold >No.</td>";
	$contBawah .= "<td bgcolor=#F5F5F5 style=bold >Soal</td>";
	$contBawah .= "<td width=40 bgcolor=#F5F5F5 style=bold >Bobot %</td>";
	$contBawah .= "</tr>";
	
	foreach($lap_rpp_soal->result() as $obj) {
		$contBawah .= "<tr>";
			$contBawah .= "<td>".$obj->no."</td>";
			$contBawah .= "<td align=left>".$obj->soal." mnt</td>";
			$contBawah .= "<td>".$obj->bobot."</td>";
		$contBawah .= "</tr>";
	}
	
$contBawah .= "</table>";

$contBawah .= "<table width=100%><tr><td border=0></td></tr></table>";

$contBawah .= "<table border=1 width=100%>";
	
	$contBawah .= "<tr >";
		$contBawah .= "<td width=10 bgcolor=#F5F5F5 style=bold >No.</td>";
		$contBawah .= "<td bgcolor=#F5F5F5 style=bold >Jawaban</td>";
	$contBawah .= "</tr>";
	
foreach($lap_rpp_jawaban->result() as $obj) {
	$contBawah .= "<tr>";
		$contBawah .= "<td>".$obj->no."</td>";
		$contBawah .= "<td align=left>".$obj->jawaban." mnt</td>";
	$contBawah .= "</tr>";
}
$contBawah .= "</table>";


$contBawah .= "
<table width=100% border=0>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>

<tr>
	<td>Memeriksa / Menyetujui</td>
	<td></td>
	<td>Tangerang, ".date("d F Y")."</td>
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
	<td>( ".$nama_kepsek ." )</td>
	<td></td>
	<td>( ".$data_user_pilih." )</td>
</tr>
</table>";

$p = new PDFTable("P","mm","A4");
$p->SetMargins(15,15,15);
$p->AddPage();
$p->SetTitle("RPP - PDF");
$p->SetFont('Arial','',11);

$p->htmltable($content);
for($a=0; $a < count($conPert); $a++) {
	$p->AddPage();
	$p->htmltable($conPert[$a]);
}
$p->AddPage();
$p->htmltable($contBawah);

$p->AliasNbPages();
$p->output('rpp.pdf','I');
?>