<?php
$rootpath = $_SERVER['DOCUMENT_ROOT']."/elearning/pdftable/"; 
define('FPDF_FONTPATH', $rootpath.'font/');
require($rootpath.'lib/pdftable.inc.php');

$imgpath = $_SERVER['DOCUMENT_ROOT']. "/elearning/image/logo_icon.jpg";


$content = "
<table border=0 align=center width=100%>
<tr>
	<td colspan=2 size=18 width=50 style=bold >KRITERIA KETUNTASAN MINIMAL</td>
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
<td width=50 align=L >Kelas </td>
<td align=L> : ".$data_kelas_pilih."</td>
</tr>

<tr>
<td width=50 align=L >Semester </td>
<td align=L > : ".$semester."</td>
</tr>

</table>";



$content .= "
<table border=1 align=right>
	
	<tr>
		<td rowspan='2' bgcolor=#F5F5F5 >SK No.</td>
		<td rowspan='2' bgcolor=#F5F5F5 >Standart Kompetensi</td>
		<td rowspan='2' bgcolor=#F5F5F5 >KD No.</td>
		<td rowspan='2' bgcolor=#F5F5F5 >Kompetensi Dasar</td>
		<td rowspan='2' bgcolor=#F5F5F5 >Indikator</td>
		<td rowspan='2' bgcolor=#F5F5F5 width=8>KP</td>
		<td rowspan='2' bgcolor=#F5F5F5 width=8>DD</td>
		<td rowspan='2' bgcolor=#F5F5F5 width=8>Intake</td>
		<td colspan='4' bgcolor=#F5F5F5 >Rata-rata</td>
	</tr>
	
	<tr>
		<td >ID</td>
		<td >KD</td>
		<td >SK</td>
		<td >MP</td>
	</tr>
	";

$count=0;
$hitung=0;

$kdno=-1;
$skno=-1;

$nokd=1;

$statNewSK = false;
$statNewKd = false;

$rataPerRow = 0;
$rataPerKD = 0;

foreach($detail_kd_indi->result() as $obj) {
	$rataPerRow = 0;
	$content .= "<tr align='left' >";
		if($skno==-1) {
			$skno=$obj->sk_no;
			$content .= "<td rowspan='".$obj->jml_kd."' valign=top >".$obj->sk_no . "</td>";
			$content .= "<td rowspan='".$obj->jml_kd."' align=left valign=top >".$obj->sk_detail . "</td>";
			$statNewSK=true;
		} else if ($skno!=$obj->sk_no) {
			$skno=$obj->sk_no;
			$content .= "<td rowspan='".$obj->jml_kd."' valign=top >".$obj->sk_no . "</td>";
			$content .= "<td rowspan='".$obj->jml_kd."' align=left valign=top >".$obj->sk_detail . "</td>";
			$statNewSK=true;
		}
		
		if($kdno==-1) {
			$kdno=$obj->kd_no;
			$content .= "<td rowspan='".$obj->jml_indi."' valign=top >".$obj->kd_no."</td>";
			$content .= "<td rowspan='".$obj->jml_indi."' align=left valign=top >".$obj->kd_detail."</td>";
			$count=0;
			$statNewKd=true;
		} else if ($kdno!=$obj->kd_no) {
			$kdno=$obj->kd_no;
			$content .= "<td rowspan='".$obj->jml_indi."' valign=top >".$obj->kd_no."</td>";
			$content .= "<td rowspan='".$obj->jml_indi."' align=left valign=top >".$obj->kd_detail."</td>";
			$count=0;
			$statNewKd=true;
		}
		
		$content .= "<td align=left valign=top >";
			$content .= $obj->no_indi . ". " . $obj->desc_indi;
		$content .= "</td>";
		
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
		$content .= "<td >".$valueKP."</td>";
		$content .= "<td >".$valueDD."</td>";
		$content .= "<td >".$valueIN."</td>";
		$rataPerRow += $valueKP;
		$rataPerRow += $valueDD;
		$rataPerRow += $valueIN;
		
		$hasilRataPerRow = round($rataPerRow/3,0);
		$content .= "<td>".$hasilRataPerRow."</td>";
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
			
			$hslRataKD = round(($query->row(0)->rata_kd) / ($query->row(0)->byk_data),0);
			$content .= "<td rowspan='".$obj->jml_indi."'>".$hslRataKD."</td>";
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
			
			$hslRataSK = round(($query->row(0)->rata_sk) / ($query->row(0)->byk_data),0);
			$content .= "<td rowspan='".$obj->jml_kd."'>".$hslRataSK."</td>";
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
			
			$hslRataALL = round(($query->row(0)->rata_all) / ($query->row(0)->byk_data),0);
			$content .= "<td rowspan='".$detail_kd_indi->num_rows()."'>".$hslRataALL." </td>";
		}
		
	$content .= "</tr>";
	
	$count++;
	$hitung++;
	$statNewKd=false;
	$statNewSK=false;
	$nokd++;
}
	
$content .= "</table>";

$jmlMp=0;
$content .= "<br><br><table class='table' >";
foreach($data_mp_smst->result() as $mp) {
	$content .= "<tr>";
	$content .= "<td width='100' align='left' >Rata MP Semester " . $mp->semester . " </td>";
	$content .= "<td align='left'> : " . round($mp->jml_mp,0) . "</td>";
	$content .= "</tr>";
	$jmlMp+=round($mp->jml_mp,0);
}
$content .= "<tr>";
	$content .= "<td align='left'>Jumlah MP </td>";
	$content .= "<td align='left'> : " . ($jmlMp/2) . "</td>";
$content .= "</tr>";
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
	<td>( ".$data_user_pilih." )</td>
</tr>
</table>";


$p = new PDFTable("L","mm","A4");
$p->SetMargins(10,10,10);
$p->AddPage();
$p->SetTitle("Kriteria Ketuntasan Minimal - PDF");
$p->SetFont('Arial','',11);
$p->htmltable($content);

$p->AliasNbPages();
$p->output('silabus.pdf','I');
?>