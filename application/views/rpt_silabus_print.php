<html>
<head>
<title>Silabus</title>
<style>
.tbl_report_silabus td {
	vertical-align:top;
	padding:5px;
}
.row_header td {
	vertical-align:middle;
	font-weight:bold;
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
echo "
<table border='0' align=center width=100%>
<tr>
	<td colspan=2 width='50' ><h3 align='center'>SILABUS</h3></td>
	<td rowspan=4 valign=middle width='160' style='padding-top:5px;' ><img src=".$imgpath." width=70 height=100></td>
</tr>

<tr>
<td width=150 >Mata Pelajaran </td>
<td align=L > : ".$data_mapel_pilih."</td>
</tr>

<tr>
<td width=50 align=L >Kelas </td>
<td align=L> : ".$data_kelas_pilih."</td>
</tr>

</table>
";

echo "<table class='table' >";
	$nourut=0;
	foreach($lap_skdetail->result() as $obj) {
		if($nourut==0) {
			echo "<tr>";
			echo "<td width='150'>Standart Kompetensi</td> <td width='2%'>:</td> <td>" . $obj->sk_detail . "</td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td>Alokasi Waktu</td> <td>:</td> <td id='lblTot_perKD'></td>";
			echo "</tr>";
		}
		$nourut++;
	}
echo "</table>";
?>

<table border='1' rules='all' class="tbl_report_silabus" >
	<tr align="center" style='background-color:yellow;color:#000000;' class='row_header' >
		<td >No.KD</td>
		<td >Kompetensi Dasar</td>
		<td>Materi Pokok Pembelajaran</td>
		<td>Tujuan Pembelajaran</td>
		<td>Kegiatan Pembelajaran</td>
		<td>Indikator Pencapaian Kompetensi</td>
		<td>Penilaian</td>
		<td>Alokasi Waktu</td>
		<td>Sumber Belajar</td>
	</tr>
	
	<?php
	$brs=1;
	$hitJmlKD = 0;
	foreach($lap_silabus->result() as $obj) {
		echo "<tr>";
		
		echo "<td align='center' rowspan='".$brs."'>";
			echo $obj->kd_no;
		echo "</td>";
		
		echo "<td>";
			echo $obj->kd_detail;
		echo "</td>";
		
		echo "<td>";
			echo $obj->materi_pokok;
		echo "</td>";
		
		echo "<td style='text-align:justify;' >";
			$isiTP = explode(";",$obj->tujuan_pembelajaran);
			for($z=0; $z < count($isiTP)-1; $z++) {
				echo ($z+1) . ". " . $isiTP[$z];
				echo "<br>";
			}
			echo "<br><u>Life Skill:</u>";
			
			echo "<ul style='padding-left:20px;margin-top:0px;'>";
			$strLS = explode(";",$obj->life_skill);
			for($i=0; $i<count($strLS)-1; $i++) {
				foreach($data_lifeskill->result() as $arLS) {
					if($arLS->kode==$strLS[$i]) {
						echo "<li>Melalui pelajaran ".$obj->materi_pokok.", siswa diharapkan dapat " . $arLS->deskripsi . "</li>";
						break;
					}
				}
			}
			echo "</ul>";
			
			//echo "<br>";
			echo "<u>Nilai Moral ajaran Confusius:</u><br>";
			echo "Melalui pelajaran ".$obj->materi_pokok.", siswa diharapkan dapat menerapkan nilai " . $obj->nilai_moral;
			echo "<br><br>";
			
			
			//echo "<u>Kegiatan Mandiri Tidak Terstruktur:</u><br>";
			echo "<u>Pendidikan Karakter:</u><br>";
			$penKarID = explode(";",$obj->pendidikan_karakter);
			
			for($a=0; $a<count($penKarID); $a++) {
				foreach($data_pend_kar->result() as $dpk) {
					if($dpk->id==$penKarID[$a]) {
						echo $dpk->keterangan . ", ";
						break;
					}
				}
			}
		echo "</td>";
		
		echo "<td>";
			echo $obj->kegiatan_pembelajaran;
		echo "</td>";
		
		echo "<td>";
			$q = "SELECT * FROM trx_skkd_kd_indi WHERE id_skkd_kd='".$obj->kdid."'";
			$query = $this->db->query($q);
			foreach($query->result() as $rowIndi) {
				echo $rowIndi->no_indi . ". " . $rowIndi->desc_indi;
				echo "<br>";
			}
		echo "</td>";
		
		echo "<td>";
			//echo $obj->id;
			$q = "SELECT * FROM trx_silabus_detail WHERE id_silabus='".$obj->id."'";
			$query = $this->db->query($q);
			foreach($query->result() as $rowNilaiIndi) {
				echo $rowNilaiIndi->penilaian_indi;
				echo "<br>";
			}
		echo "</td>";
		
		$resultSUMkd=0;
		echo "<td align='center' >";
			//echo $obj->id;
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
			echo $resultSUMkd;
			$hitJmlKD+=$resultSUMkd;
		echo "</td>";
		
		echo "<td>".$obj->sumber_belajar."</td>";
		
		echo "</tr>";
	}
	echo "<script>
	document.getElementById('lblTot_perKD').innerHTML='".$hitJmlKD."';
	</script>"
	?>
	
</table>

<?php
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
	<td></td>
	<td>( ".$data_user_pilih." )</td>
</tr>
</table>";
?>
