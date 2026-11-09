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
	<td colspan=2 size=18 width=50 style=bold >Analisis Pemetaan SK - KD</td>
	<td rowspan=4 valign=middle ><img src=".$imgpath." width=140 height=190></td>
</tr>
<tr><td colspan=2>&nbsp;</td></tr>

<tr>
<td width=50 align=L >Mata Pelajaran </td>
<td align=L > : ".$nama_mapel->row(0)->mapel."</td>
</tr>

<tr>
<td width=50 align=L >Kelas </td>
<td align=L> : ".$nama_kelas->row(0)->kelas."</td>
</tr>

<tr><td colspan=3>&nbsp;</td></tr>
</table>

<table border=1 align=right>
	<tr> 
		<td style=bold bgcolor=#F5F5F5 >Standart Kompetensi</td>
		<td style=bold bgcolor=#F5F5F5 >Kompetensi Dasar</td>
		<td style=bold bgcolor=#F5F5F5 >Tingkat Ranah KD</td>
		<td style=bold bgcolor=#F5F5F5 >Indikator Pencapaian</td>
		<td style=bold bgcolor=#F5F5F5 >Tingkatan Ranah PK</td>
		<td style=bold bgcolor=#F5F5F5 >Materi Pokok</td>
		<td style=bold bgcolor=#F5F5F5 >Ruang Lingkup</td>
		<td style=bold bgcolor=#F5F5F5 >Alokasi Waktu (Jam)</td>
	</tr>";

foreach ($show_rpt_skkd->result() as $obj) {
	$content .= "<tr>";
	
	if($skno==-1) {
		$skno=$obj->sk_no;
		$content .= "<td rowspan=".$obj->jml_kd." align=L valign=T >". $obj->sk_no . ". " . $obj->sk_detail . "</td>";
		$statNewSK=true;
	} else if ($skno!=$obj->sk_no) {
		$skno=$obj->sk_no;
		$content .= "<td rowspan=".$obj->jml_kd." align=L valign=T >".$obj->sk_no . ". " . $obj->sk_detail . "</td>";
		$statNewSK=true;
	}
	
	if($kdno==-1) {
		$kdno=$obj->kd_no;
		$content .= "<td rowspan=".$obj->jml_indi." align=L valign=T >".$obj->kd_no. ". " . $obj->kd_detail."</td>";
		$content .= "<td rowspan=".$obj->jml_indi." valign=T >". $obj->ranah_kd."</td>";
		$count=0;
		$statNewKd=true;
	} else if ($kdno!=$obj->kd_no) {
		$kdno=$obj->kd_no;
		$content .= "<td rowspan=".$obj->jml_indi." align=L valign=T >".$obj->kd_no. ". " . $obj->kd_detail."</td>";
		$content .= "<td rowspan=".$obj->jml_indi." valign=T >". $obj->ranah_kd."</td>";	
		$count=0;
		$statNewKd=true;
	}
	
	$content .= "<td align=L valign=T >". $obj->no_indi . ". " . $obj->desc_indi."</td>";
	$content .= "<td valign=T >". $obj->ranah_indi ."</td>";
	
	if($statNewKd==true) {
		$content .= "<td rowspan=".$obj->jml_indi." valign=T >". $obj->materi_pokok."</td>";
		$content .= "<td rowspan=".$obj->jml_indi." valign=T >". $obj->ruang_lingkup."</td>";
		
		$q="SELECT *, SUM(week1+week2+week3+week4+week5) as jml_jam_kd FROM trx_prosem_detail WHERE kd_id='".$obj->kdid."' GROUP BY kd_id";
		$query = $this->db->query($q);
		if($query->row(0)) {
			$content .= "<td rowspan=".$obj->jml_indi." valign=T >". $query->row(0)->jml_jam_kd ."</td>";
		} else {
			$content .= "<td rowspan=".$obj->jml_indi." valign=T ></td>";
		}
	}
	
	$content .= "</tr>";
	
	$count++;
	$hitung++;
	$statNewKd=false;
	$statNewSK=false;
	$nokd++;
}
	
$content .= "</table>";


$p = new PDFTable("L","mm","A4");
$p->SetMargins(10,10,10);
$p->AddPage();
$p->SetTitle("Analisis Pemetaan SKKD - PDF");
$p->SetFont('Arial','',11);
$p->htmltable($content);

//$p->footerTable = "aaaaaaaa";	
//$p->SetY(-25);
//$p->SetFont('Arial','I',8);
//$p->SetHeaderFooter("aaaaa","bbbbbbb");

$p->AliasNbPages();
$p->output('pemetaan_skkd.pdf','I');
?>