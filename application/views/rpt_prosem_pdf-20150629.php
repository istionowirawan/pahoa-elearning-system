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

$GLOBALS['content']="";

$content="
<table border=0 align=center width=100%>
<tr>
	<td colspan=2 size=18 width=50 style=bold >
	KURIKULUM TINGKAT SATUAN PENDIDIKAN
	<BR>PROGRAM SEMESTER PEMBELAJARAN SISWA ".$this->session->userdata('tahunAjr_active')."
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
		<td rowspan=3 >No.SK</td>
		<td rowspan=3 >No.KD</td>
		<td rowspan=3 >Kompetensi Dasar</td>
		<td rowspan=3 >Jumlah Indikator</td>
		<td rowspan=3 >Jam Tatap Muka</td>
		<td colspan=30 >Bulan dan minggu efektif belajar</td>
	</tr>
	
	<tr>";
	
		$jmlBulan=0;
		foreach($data_bulan->result() as $object) {
			$content .= "<td colspan='5' >";
			$content .= $object->bulan;
			$jmlBulan++;
			$content .= "</td>";
		}
		
	$content.= "</tr>";
	
	$content .= "<tr>";
		for ($b=0; $b < 5 * $jmlBulan; $b++) {
			$content .= "<td>".(($b%($jmlBulan-1))+1) ."</td>";
		}
	$content .= "</tr>";

	
//data -------------------------------------------
$nourut=1;
$totalKD = 0;
$col_jml_indi=0;
$nosk=999;
$skid=999;
$nomorUjiKompetensi=1;
$tampilsk=true;

$totJmlIndi=0;

$colNo=0;
$arCol = array();
$GLOBALS['arColUji'] = array();
$GLOBALS['totJmlTatapMuka']=0;

for ($b=0; $b<5* $jmlBulan; $b++) {
	$arCol[$b]=0;
	
	global $arColUji;
	$arColUji[$b]=0;
}

//---------------------------------------------------------------------------------------------------------
foreach($data_prosem->result() as $object) {
	if($nourut==1){
		$nosk=$object->sk_no;
		$skid=$object->id;
		$tampilsk=true;
	}
	if($nosk!=$object->sk_no) {
		$content .= "<tr>";
		//buat_row_ujikompetensi($nomorUjiKompetensi,$nosk,$skid,$jmlBulan,$object->semester,$prosem_uji_kom);
		$noSK=$object->sk_no;
		$idSK=$object->id;
		$smst=$object->semester;
		
		$content .= "<td colspan=4>";
		$content .= "Uji Kompetensi ".$nomorUjiKompetensi . " (SK".$noSK.")";
		$content .= "</td>";
		$content .= "<td>";
		$rowJmlahUji = 0;
		foreach($prosem_uji_kom->result() as $row) {
			if($idSK==$row->sk_id) {
				$rowJmlahUji+=$row->jml;
			}
		}
		$content .= $rowJmlahUji;
		global $totJmlTatapMuka;
		$totJmlTatapMuka+=$rowJmlahUji;
		$content .= "</td>";
		
		$colNo=0;
		for ($b=0; $b<5* $jmlBulan; $b++) {
			$content .= "<td>";
			
			$smsTbh = ($smst==1?6:0);
			$bln = ceil(($b+1)/5) + $smsTbh;
			$mgu = (($b%($jmlBulan-1))+1);
			
			$adadata = 0;
			foreach($prosem_uji_kom->result() as $row) {
				if($idSK==$row->sk_id && $bln==$row->bulan) {
					//$content .= $idSK . "/" . $bln . "/" . $mgu . " == " . $row->sk_id . "/" . $row->bulan . "<br>";
					$dataWeek = "";
					if($mgu==1) {
						$dataWeek=$row->week1;
					} else if ($mgu==2) {
						$dataWeek=$row->week2;
					} else if ($mgu==3) {
						$dataWeek=$row->week3;
					} else if ($mgu==4) {
						$dataWeek=$row->week4;
					} else if ($mgu==5) {
						$dataWeek=$row->week5;
					}
					
					$content .= kosong_jk_nol($dataWeek);
					$adadata++;
					
					global $arColUji;
					$arColUji[$colNo]+=$dataWeek;
					
					$colNo++;
					break;
				}
			}
			if($adadata==0) {
				//$content .= "|" . $colNo;
				
				global $arColUji;
				$arColUji[$colNo]+=0;
				
				$colNo++;
			} 
			$content .= "</td>";
		}
		
		$content .= "</tr>";
		$nosk=$object->sk_no;
		$skid=$object->id;
		$nomorUjiKompetensi++;
		$tampilsk=true;
	}
	
	$content .= "<tr>";
	$content .= "<td>".$object->sk_no."</td>";
	$content .= "<td>".$object->kd_no."</td>";
	$content .= "<td align=left>".$object->kd_detail."</td>";
	
	$content .= "<td>".$object->jml_indi."</td>";
	$totJmlIndi+=$object->jml_indi;
	
	$content .= "<td>";
	$rowJmlah = 0;
	foreach($prosem_detail->result() as $row) {
		if($object->kd_id==$row->kd_id) {
			$rowJmlah+=$row->jml;
		}
	}
	$content .= $rowJmlah;
	global $totJmlTatapMuka;
	$totJmlTatapMuka+=$rowJmlah;
	$content .= "</td>";
	$col_jml_indi+=$object->jml_indi;
	
	$colNo=0;
	for ($b=0; $b<5* $jmlBulan; $b++) {
		$content .= "<td>";
		
		$smsTbh = ($object->semester==1?6:0);
		$bln = ceil(($b+1)/5) + $smsTbh;
		$mgu = (($b%($jmlBulan-1))+1);
		
		$adadata = 0;
		foreach($prosem_detail->result() as $row) {
			if($row->kd_id==$object->kd_id && $bln==$row->bulan) {
				$dataWeek = "";
				if($mgu==1) {
					$dataWeek=$row->week1;
				} else if ($mgu==2) {
					$dataWeek=$row->week2;
				} else if ($mgu==3) {
					$dataWeek=$row->week3;
				} else if ($mgu==4) {
					$dataWeek=$row->week4;
				} else if ($mgu==5) {
					$dataWeek=$row->week5;
				}
				$content .= kosong_jk_nol($dataWeek);
				
				$adadata++;
				
				$arCol[$colNo]+=$dataWeek;
				$colNo++;
				break;
			}
		}
		if($adadata==0) {
			$arCol[$colNo]+=0;
			$colNo++;
		} 
		
		$content .= "</td>";
	}
	$nourut++;
	$content .= "</tr>";
	
	if(($nourut-1)==$data_prosem->num_rows()) {
		$content .= "<tr>";
		//buat_row_ujikompetensi($nomorUjiKompetensi,$object->sk_no,$object->id,$jmlBulan,$object->semester,$prosem_uji_kom);
		$noSK=$object->sk_no;
		$idSK=$object->id;
		$smst=$object->semester;
		
		$content .= "<td colspan=4>";
		$content .= "Uji Kompetensi ".$nomorUjiKompetensi . " (SK".$noSK.")";
		$content .= "</td>";
		$content .= "<td>";
		$rowJmlahUji = 0;
		foreach($prosem_uji_kom->result() as $row) {
			if($idSK==$row->sk_id) {
				$rowJmlahUji+=$row->jml;
			}
		}
		$content .= $rowJmlahUji;
		global $totJmlTatapMuka;
		$totJmlTatapMuka+=$rowJmlahUji;
		$content .= "</td>";
		
		$colNo=0;
		for ($b=0; $b<5* $jmlBulan; $b++) {
			$content .= "<td>";
			
			$smsTbh = ($smst==1?6:0);
			$bln = ceil(($b+1)/5) + $smsTbh;
			$mgu = (($b%($jmlBulan-1))+1);
			
			$adadata = 0;
			foreach($prosem_uji_kom->result() as $row) {
				if($idSK==$row->sk_id && $bln==$row->bulan) {
					//$content .= $idSK . "/" . $bln . "/" . $mgu . " == " . $row->sk_id . "/" . $row->bulan . "<br>";
					$dataWeek = "";
					if($mgu==1) {
						$dataWeek=$row->week1;
					} else if ($mgu==2) {
						$dataWeek=$row->week2;
					} else if ($mgu==3) {
						$dataWeek=$row->week3;
					} else if ($mgu==4) {
						$dataWeek=$row->week4;
					} else if ($mgu==5) {
						$dataWeek=$row->week5;
					}
					
					$content .= kosong_jk_nol($dataWeek);
					$adadata++;
					
					global $arColUji;
					$arColUji[$colNo]+=$dataWeek;
					
					$colNo++;
					break;
				}
			}
			if($adadata==0) {
				//$content .= "|" . $colNo;
				
				global $arColUji;
				$arColUji[$colNo]+=0;
				
				$colNo++;
			} 
			$content .= "</td>";
		}
		
		$content .= "</tr>";
	}
}

//=========================================================================================================================
function buat_row_ujikompetensi($nomorUjiKompetensi,$noSK,$idSK,$jmlBulan,$smst,$prosem_uji_kom) {
	global $content;
	
	
	//$colUjiTiga+=111;
	//$content .= "1.".$colUjiTiga;
}

function kosong_jk_nol($nilai) {
	$result = $nilai;
	if($nilai==0) {
		$result="";
	}
	return $result;
}

$content .= "<tr align='center' style='background-color:#efe8e8;color:blue;' >";
	$content .= "<td colspan='3'>Jumlah KD dan Tatap Muka</td>";
	
	$content .= "<td id='col_jml_indi'>".$totJmlIndi."</td>";
	$content .= "<td id='col_jml_tm'>".$totJmlTatapMuka."</td>";
				
	for ($b=0; $b<5* $jmlBulan; $b++) {	
		$namaTotal = "tot_col_".$b;
		//$content .= "<td id='col_jml_mg1'><label id='".$namaTotal."' title='".$namaTotal."' >".$arCol[$b]."</label></td>";
		$content .= "<td id='col_jml_mg1'><label id='".$namaTotal."' title='".$namaTotal."' >".($arColUji[$b]+$arCol[$b])."</label></td>";
	}
$content .= "</tr>";

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
$p->SetTitle("Prosem-PDF");
$p->SetFont('Arial','',11);
$p->htmltable($content);

$p->AliasNbPages();
$p->output('prota.pdf','I');
?>