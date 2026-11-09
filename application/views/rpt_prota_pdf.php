<?php
$rootpath = $_SERVER['DOCUMENT_ROOT']."/elearning/pdftable/"; 
define('FPDF_FONTPATH', $rootpath.'font/');
require($rootpath.'lib/pdftable.inc.php');

$count=0;
$hitung=0;
$kdno=-1;
$skno=-1;
$nokd=1;
$statNewSK = false;
$statNewKd = false;
$imgpath = $_SERVER['DOCUMENT_ROOT']. "/elearning/image/logo_icon.jpg";

$content="
<table border=0 align=center width=100%>
<tr>
	<td colspan=2 size=18 width=50 style=bold >
	KURIKULUM TINGKAT SATUAN PENDIDIKAN
	<BR>PROGRAM SATU TAHUN (PROSATA) ".$this->session->userdata('tahunAjr_active')."
	</td>
	<td rowspan=4 valign=middle ><img src=".$imgpath." width=140 height=190></td>
</tr>
<tr><td colspan=2>&nbsp;</td></tr>

<tr>
<td width=50 align=L >Nama Sekolah </td>
<td align=L > : SEKOLAH TERPADU PAHOA</td>
</tr>

<tr>
<td width=50 align=L >Mata Pelajaran </td>
<td align=L > : ".$data_mapel_pilih."</td>
</tr>

<tr>
<td width=50 align=L >Kelas </td>
<td align=L> : ".$data_kelas_pilih."</td>
</tr>

<tr><td colspan=3>&nbsp;</td></tr>
</table>

<table border=1 align=right>
	<tr> 
		<td rowspan=2 style=bold width=10>No.SK</td>
		<td rowspan=2 style=bold>Standart Kompetensi</td>
		<td rowspan=2 style=bold width=30>Jumlah KD</td>
		<td colspan=2 style=bold>Jumlah Jam Tatap Muka</td>
	</tr>
	
	<tr align=center>
		<td width=40 style=bold>Semester 1</td>
		<td width=40 style=bold>Semester 2</td>
	</tr>";

$arDataProta=array();
$no=0;
$userinputProta=$data_user_pilih;
foreach($data_prota->result() as $object) {
	$arDataProta[$object->sk_no]["sk_sm1"] = $object->sk_sm1;
	$arDataProta[$object->sk_no]["sk_sm2"] = $object->sk_sm2;
	$no++;
}

$nourut=1;
$totalKD = 0;
$totSm1=0;
$totSm2=0;
foreach($data_skkd->result() as $object) {
	$content .= "<tr style=bold>";
	$content .= "<td>".$object->sk_no."</td>";
	$content .= "<td align=L>".$object->sk_detail."</td>";
	$content .= "<td>".$object->jml_kd."</td>";
	if(isset($arDataProta[$object->sk_no]["sk_sm1"])) {
		$content .= "<td>".$arDataProta[$object->sk_no]['sk_sm1']."</td>";
		$totSm1+=$arDataProta[$object->sk_no]['sk_sm1'];
	} else {
		$content .= "<td>0</td>";
	}
	if(isset($arDataProta[$object->sk_no]["sk_sm2"])) {
		$content .= "<td>".$arDataProta[$object->sk_no]['sk_sm2']."</td>";
		$totSm2+=$arDataProta[$object->sk_no]['sk_sm2'];
	} else {
		$content .= "<td>0</td>";
	}
	$content .= "</tr>";
	$nourut++;
	$totalKD+=$object->jml_kd;
}

$content .= "<tr>
	<td colspan=2 bgcolor=#F5F5F5 >Jumlah KD dan Tatap Muka Semester</td>
	<td bgcolor=#F5F5F5 >". $totalKD ."</td>
	<td bgcolor=#F5F5F5 >". $totSm1 ."</td>
	<td bgcolor=#F5F5F5 >". $totSm2 ."</td>
</tr>";
$content .= "</table>";

$content .= "
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
	<td></td>
	<td>( ".$userinputProta." )</td>
</tr>
</table>";
	


$p = new PDFTable("L","mm","A4");
$p->SetMargins(10,10,10);
$p->AddPage();
$p->SetTitle("Prota - PDF");
$p->SetFont('Arial','',11);
$p->htmltable($content);

$p->AliasNbPages();
$p->output('prota.pdf','I');
?>