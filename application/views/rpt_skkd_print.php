<html>
<head>
<title>Report SKKD</title>
<style>
.meta_sk_detail p {
	display: inline;
}
.rpt_skkd_style td {
	padding:4px;
}
.rpt_skkd_style th {
	padding:4px;
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
	<td colspan=2 width='50' ><h3 align='center'>Analisis Pemetaan SK - KD</h3></td>
	<td rowspan=4 valign=middle width='160' ><img src=".$imgpath." width=110 height=150></td>
</tr>
<tr><td colspan=2>&nbsp;</td></tr>

<tr>
<td width=150 >Mata Pelajaran </td>
<td align=L > : ".$nama_mapel->row(0)->mapel."</td>
</tr>

<tr>
<td width=50 align=L >Kelas </td>
<td align=L> : ".$nama_kelas->row(0)->kelas."</td>
</tr>

<tr><td colspan=3>&nbsp;</td></tr>
</table>
";
?>

<table border='1' rules='all' class='rpt_skkd_style' >
				
	<tr style='background-color:#F5F5F5;text-align:center;' >
		<th>Standart Kompetensi</th>
		<th>Kompetensi Dasar</th>
		<th>Tingkat Ranah KD</th>
		<th>Indikator Pencapaian</th>
		<th title='Tingkatan Ranah Indikator Pencapaian'>Tingkatan Ranah PK</th>
		<th>Materi Pokok</th>
		<th>Ruang Lingkup</th>
		<th title='Diambil dari prosem'>Alokasi Waktu (Jam)</th>
	</tr>

	<?php
	$nowSKno=-1;
	$nowKDid=-1;
	$kdbaru=false;
	$jml_alokasi_waktu=0;
	
	foreach ($show_rpt_skkd->result() as $obj) {
		echo "<tr align='left' valign='top' >";
		
		$qe = "SELECT count(*) as jml_rlingkup FROM trx_skkd_kd_rlingkup WHERE id_skkd_kd='".$obj->kdid."' GROUP BY id_skkd_kd";
		$queryRlingkup = $this->db->query($qe);
		$q="SELECT *, SUM(week1+week2+week3+week4+week5) as jml_jam_kd FROM trx_prosem_detail WHERE kd_id='".$obj->kdid."' GROUP BY kd_id";
		$query = $this->db->query($q);
		$q2="SELECT *, SUM(week1+week2+week3+week4+week5) as jml_jam_kd FROM trx_prosem_uji WHERE kd_id='".$obj->kdid."' GROUP BY kd_id";
		$query2 = $this->db->query($q2);
		
		if($nowSKno != $obj->sk_no) {
			$nowSKno=$obj->sk_no;
			echo "<td title='".$obj->sk_no."' >". $obj->sk_no . ". <span class='meta_sk_detail'>" . $obj->sk_detail . "</span></td>";
		} else {
			echo "<td style='border-top-style:hidden;' ></td>";
		}
		
		if($nowKDid != $obj->kdid) {
			$nowKDid = $obj->kdid;
			echo "<td title='".$obj->kdid."' >".$obj->kd_no. ". " . $obj->kd_detail."</td>";
			echo "<td title='".$obj->kdid."' align='center' >". $obj->ranah_kd."</td>";
			$kdbaru=true;
		} else {
			echo "<td style='border-top-style:hidden;'></td>";
			echo "<td style='border-top-style:hidden;'></td>";
			$kdbaru=false;
		}
		
		echo "<td title='".$obj->indiid."' >" .$obj->no_indi . ". " . $obj->desc_indi."</td>";
		echo "<td title='".$obj->indiid."' align='center' >".$obj->ranah_indi."</td>";
		
		if($kdbaru==true) {
			echo "<td title='".$obj->no_indi."' >". $obj->materi_pokok."</td>";
			if($queryRlingkup->num_rows() > 0)  {
				echo "<td title='".$obj->no_indi."' align='center' >". $queryRlingkup->row(0)->jml_rlingkup."</td>";
			} else {
				echo "<td title='".$obj->no_indi."' align='center' ></td>";
			}
			if($query->row(0)) {
				$jml_alokasi_waktu = $query->row(0)->jml_jam_kd + $query2->row(0)->jml_jam_kd;
				echo "<td align='center' >". $jml_alokasi_waktu ."</td>";
			} else {
				echo "<td align='center' >-</td>";
			}
		} else {
			echo "<td style='border-top-style:hidden;'></td>";
			echo "<td style='border-top-style:hidden;'></td>";
			echo "<td style='border-top-style:hidden;'></td>";
		}	
	}
	
	echo "
	<table width=100% border='0' style='padding:10px;' >
	<tr><td colspan=2>&nbsp;</td></tr>

	<tr>
		<td width='60%'>Memeriksa / Menyetujui</td>
		<td></td>
		<td width='20%' >Tangerang, ".date("d F Y")."</td>
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
</table>
</body>
</html>