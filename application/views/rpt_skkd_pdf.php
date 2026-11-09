<?php
$rootpath = $_SERVER['DOCUMENT_ROOT']."/elearning/pdftable/"; 
//$rootalamat = $_SERVER['DOCUMENT_ROOT']."/elearning/fpdf/"; 
define('FPDF_FONTPATH', $rootpath.'font/');
require($rootpath.'lib/pdftable.inc.php');
//require($rootalamat.'fpdf.php');

class PDF extends FPDF {

	function Header() {
		parent::Header();
		$this->SetFont('Arial','B',15);
		// Move to the right
		$this->Cell(80);
		// Framed title
		$this->Cell(30,10,'Title',1,0,'C');
		// Line break
		$this->Ln(20);
	}
	function Footer() {
	  
	}
}

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
		<td style=bold bgcolor=#F5F5F5 width='20' >Tingkat Ranah KD</td>
		<td style=bold bgcolor=#F5F5F5 >Indikator Pencapaian</td>
		<td style=bold bgcolor=#F5F5F5 width='20' >Tingkatan Ranah PK</td>
		<td style=bold bgcolor=#F5F5F5 >Materi Pokok</td>
		<td style=bold bgcolor=#F5F5F5 width='20' >Ruang Lingkup</td>
		<td style=bold bgcolor=#F5F5F5 width='20' >Alokasi Waktu (Jam)</td>
	</tr>";

$nowSKno=-1;
$nowKDid=-1;
$kdbaru=false;
$jml_alokasi_waktu=0;



foreach ($show_rpt_skkd->result() as $obj) {
	$content .= "<tr>";
	
	$qe = "SELECT count(*) as jml_rlingkup FROM trx_skkd_kd_rlingkup WHERE id_skkd_kd='".$obj->kdid."' GROUP BY id_skkd_kd";
	$queryRlingkup = $this->db->query($qe);
	$q="SELECT *, SUM(week1+week2+week3+week4+week5) as jml_jam_kd FROM trx_prosem_detail WHERE kd_id='".$obj->kdid."' GROUP BY kd_id";
	$query = $this->db->query($q);
	$q2="SELECT *, SUM(week1+week2+week3+week4+week5) as jml_jam_kd FROM trx_prosem_uji WHERE kd_id='".$obj->kdid."' GROUP BY kd_id";
	$query2 = $this->db->query($q2);
	
	if($nowSKno != $obj->sk_no) {
		$nowSKno=$obj->sk_no;
		$content .= "<td border='1101' align='left' valign='top' >". $obj->sk_no . ". <span class='meta_sk_detail'>" . $obj->sk_detail . "</span></td>";
	} else {
		$content .= "<td border='0101' ></td>";
	}
	
	if($nowKDid != $obj->kdid) {
		$nowKDid = $obj->kdid;
		$content .= "<td border='1101' align=left valign=top >".$obj->kd_no. ". " . $obj->kd_detail."</td>";
		$content .= "<td border='1101' valign=top >". $obj->ranah_kd."</td>";
		$kdbaru=true;
	} else {
		$content .= "<td border='0101'></td>";
		$content .= "<td border='0101'></td>";
		$kdbaru=false;
	}
	
	$content .= "<td align='left' valign='top' >" .$obj->no_indi . ". " . $obj->desc_indi."</td>";
	$content .= "<td valign='top' >".$obj->ranah_indi."</td>";
	
	if($kdbaru==true) {
		$content .= "<td border='1101' align='left' valign='top' >". $obj->materi_pokok."</td>";
		if($queryRlingkup->num_rows() > 0)  {
			$content .= "<td border='1101' valign='top' >". $queryRlingkup->row(0)->jml_rlingkup."</td>";
		} else {
			$content .= "<td border='1101' valign='top' ></td>";
		}
		if($query->row(0)) {
			$jml_alokasi_waktu = $query->row(0)->jml_jam_kd + $query2->row(0)->jml_jam_kd;
			$content .= "<td border='1101' valign='top' >". $jml_alokasi_waktu ."</td>";
		} else {
			$content .= "<td border='1101' valign='top' >-</td>";
		}
	} else {
		$content .= "<td border='0101'></td>";
		$content .= "<td border='0101'></td>";
		$content .= "<td border='0101'></td>";
	}
	
}

$content .= "<tr>";
$content .= "<td border='1000' colspan='8' ></td>";
$content .= "</tr>";

$content .= "</table>";


$p = new PDFTable("L","mm","A4");
$p->AliasNbPages();
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