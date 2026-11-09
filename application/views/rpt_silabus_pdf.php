<?php
$rootpath = $_SERVER['DOCUMENT_ROOT']."/elearning/pdftable/"; 
define('FPDF_FONTPATH', $rootpath.'font/');
require($rootpath.'lib/pdftable.inc.php');

$imgpath = $_SERVER['DOCUMENT_ROOT']. "/elearning/image/logo_icon.jpg";


$content = "
<table border=0 align=center width=100%>
<tr>
	<td colspan=2 size=18 width=50 style=bold >SILABUS</td>
	<td rowspan=6 valign=middle ><img src=".$imgpath." width=140 height=190></td>
</tr>
<tr><td colspan=2>&nbsp;</td></tr>

<tr>
<td width=50 align=L >Nama Sekolah</td>
<td align=L > : SEKOLAH TERPADU PAHOA</td>
</tr>

<tr>
<td width=50 align=L >Semester </td>
<td align=L > : ".$semester."</td>
</tr>

<tr>
<td width=50 align=L >Mata Pelajaran </td>
<td align=L > : ".$data_mapel_pilih."</td>
</tr>

<tr>
<td width=50 align=L >Kelas </td>
<td align=L> : ".$data_kelas_pilih."</td>
</tr>

</table>";

//202cb962ac59075b964b07152d234b70
//dba85b4a3f7d9a19de9369cfffe6bfef

$content .= "<table>";
	$nourut=0;
	foreach($lap_skdetail->result() as $obj) {
		$nourut++;
		if($lap_skdetail->num_rows()==$nourut) {
			$content .= "<tr>";
			$content .= "<td align=left valign=top width=50>Standart Kompetensi</td> <td width=2 valign=top>:</td> <td valign=top align=left>" . $obj->sk_detail . "</td>";
			$content .= "</tr>";

			$content .= "<tr>";
			$content .= "<td align=left valign=top >Alokasi Waktu</td> <td>:</td> <td valign=top align=left>" . $alokasiWaktuSK . "</td>";
			$content .= "</tr>";
		}
		
	}
$content .= "</table>";

$content .= "
<table border=1 align=right>
	<tr> 
		<td style=bold bgcolor=#F5F5F5 width='5' >No. KD</td>
		<td style=bold bgcolor=#F5F5F5 >Kompetensi Dasar</td>
		<td style=bold bgcolor=#F5F5F5 >Materi Pokok Pembelajaran</td>
		<td style=bold bgcolor=#F5F5F5 >Tujuan Pembelajaran</td>
		<td style=bold bgcolor=#F5F5F5 >Kegiatan Pembelajaran</td>
		<td style=bold bgcolor=#F5F5F5 >Indikator Pencapaian Kompetensi</td>
		<td style=bold bgcolor=#F5F5F5 width='10' >Penilaian</td>
		<td style=bold bgcolor=#F5F5F5 width='10' >Alokasi Waktu</td>
		<td style=bold bgcolor=#F5F5F5 width='12' >Sumber Belajar</td>
	</tr>";

$brs=1;
foreach ($lap_silabus->result() as $obj) {
	$content .= "<tr>";
	
	$content .= "<td valign=top >";
			$content .= $obj->kd_no;
		$content .= "</td>";
		
		$content .= "<td align=left valign=top >";
			$content .= $obj->kd_detail;
		$content .= "</td>";
		
		$content .= "<td align=left valign=top>";
			$content .= $obj->materi_pokok;
		$content .= "</td>";
		
		$content .= "<td align=left valign=top>";
			$isiTP = explode(";",$obj->tujuan_pembelajaran);
			for($z=0; $z<count($isiTP)-1; $z++) {
				$content .= ($z+1) . ". " . $isiTP[$z];
				$content .= "<br>";
			}
		$content .= "</td>";
		
		$content .= "<td align=left valign=top>";
			$content .= $obj->kegiatan_pembelajaran;
		$content .= "</td>";
		
		$content .= "<td align=left valign=top>";
			$q = "SELECT * FROM trx_skkd_kd_indi WHERE id_skkd_kd='".$obj->kdid."'";
			$query = $this->db->query($q);
			foreach($query->result() as $rowIndi) {
				$content .= $rowIndi->no_indi . ". " . $rowIndi->desc_indi;
				$content .= "<br>";
			}
		$content .= "</td>";
		
		$content .= "<td align=left valign=top>";
			//$content .= $obj->id;
			$q = "SELECT * FROM trx_silabus_detail WHERE id_silabus='".$obj->id."'";
			$query = $this->db->query($q);
			foreach($query->result() as $rowNilaiIndi) {
				$content .= $rowNilaiIndi->penilaian_indi;
				$content .= "<br>";
			}
		$content .= "</td>";
		
		$resultSUMkd=0;
		$content .= "<td valign=top>";
			//$content .= $obj->id;
			$q = "SELECT *, SUM(week1+week2+week3+week4+week5) as jmlAW FROM trx_prosem_detail WHERE kd_id='".$obj->kdid."' GROUP BY kd_id";
			$query = $this->db->query($q);
			foreach($query->result() as $rowAlokasiWkt) {
				$resultSUMkd += $rowAlokasiWkt->jmlAW;
			}
			
			$q2 = "SELECT *, SUM(week1+week2+week3+week4+week5) as jmlAW FROM trx_prosem_uji WHERE kd_id='".$obj->kdid."' GROUP BY kd_id";
			$query2 = $this->db->query($q2);
			foreach($query2->result() as $rowAlokasiWktUji) {
				$resultSUMkd += $rowAlokasiWktUji->jmlAW;
			}
			$content .= $resultSUMkd;
			//$hitJmlKD+=$resultSUMkd;
			
		$content .= "</td>";
		
		$content .= "<td align=left valign=top>".$obj->sumber_belajar."</td>";
	
	$content .= "</tr>";
	
	
	$content .= "<tr>";
	$content .= "<td border='1001'></td><td border='1001'></td><td border='1001'></td>";
	$content .= "<td align='L' border='1101' >";
	$content .= "Life Skill:<br>";		
	$strLS = explode(";",$obj->life_skill);
	for($i=0; $i<count($strLS)-1; $i++) {
		foreach($data_lifeskill->result() as $arLS) {
			if($arLS->kode==$strLS[$i]) {
				$content .= "> Melalui pelajaran ".$obj->materi_pokok.", siswa diharapkan dapat " . $arLS->deskripsi . "<br>";
				break;
			}
		}
	}
	$content .= "</td>";
	$content .= "<td border='1001'></td><td border='1001'></td><td border='1001'></td><td border='1001'></td><td border='1101'></td>";
	$content .= "</td></tr>";
	
	$content .= "<tr>";
	$content .= "<td border='0001'></td><td border='0001'></td><td border='0001'></td>";
	$content .= "<td align='L' border='1101'>";
	$content .= "Nilai Moral ajaran Confusius:<br>";
	$content .= $obj->nilai_moral;
	$content .= "</td>";
	$content .= "<td border='0001'></td><td border='0001'></td><td border='0001'></td><td border='0001'></td><td border='0101'></td>";
	$content .= "</td></tr>";
	
	$content .= "<tr>";
	$content .= "<td border='0011'></td><td border='0011'></td><td border='0011'></td>";
	$content .= "<td align='L'>";
	$content .= "Kegiatan Mandiri Tidak Terstruktur:<br>";
	$content .= $obj->pendidikan_karakter;
	$content .= "</td>";
	$content .= "<td border='0011'></td><td border='0011'></td><td border='0011'></td><td border='0011'></td><td border='0111'></td>";
	$content .= "</td></tr>";
}
	
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
$p->SetTitle("Silabus - PDF");
$p->SetFont('Arial','',11);
$p->htmltable($content);

$p->AliasNbPages();
$p->output('silabus.pdf','I');
?>