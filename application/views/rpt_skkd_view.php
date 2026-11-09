<table width='100%'><tr><td>
<img id='btnPrint_skkd' src='<?php echo base_url(); ?>icons/Print.png' class='img_export_pdf img-responsive' align='right' title='Print this report' >
<img id='btnPDF_skkd' src='<?php echo base_url(); ?>icons/pdf-export.png' class='img_export_pdf img-responsive' align='right' title='Export to PDF' >
</td></tr></table>
<table class="table-bordered rpt_skkd_style" >
				
	<tr style='background-color:#F5F5F5;text-align:center;' >
		<td>Standart Kompetensi</td>
		<td>Kompetensi Dasar</td>
		<td>Tingkat Ranah KD</td>
		<td>Indikator Pencapaian</td>
		<td title='Tingkatan Ranah Indikator Pencapaian'>Tingkatan Ranah PK</td>
		<td>Materi Pokok</td>
		<td>Ruang Lingkup</td>
		<td title='Diambil dari prosem'>Alokasi Waktu (Jam)</td>
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
			echo "<td style='border-top-style:none;' ></td>";
		}
		
		if($nowKDid != $obj->kdid) {
			$nowKDid = $obj->kdid;
			echo "<td title='".$obj->kdid."' >".$obj->kd_no. ". " . $obj->kd_detail."</td>";
			echo "<td title='".$obj->kdid."' align='center' >". $obj->ranah_kd."</td>";
			$kdbaru=true;
		} else {
			echo "<td></td>";
			echo "<td></td>";
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
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
		}
		
		
		
		
	
	}
	?>
</table>