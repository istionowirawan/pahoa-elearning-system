<table width='100%'><tr><td>
<img id='btnPDF_skkd' src='<?php echo base_url(); ?>icons/pdf-export.png' class='img_export_pdf' align='right' title='Export to PDF' >
</td></tr></table>
<table class="table-bordered" >
				
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
	$count=0;
	$hitung=0;
	$kdno=-1;
	$indino=-1;
	$skno=-1;
	$nokd=1;
	//print_r($show_rpt_skkd->result());
	$statNewSK = false;
	$statNewKd = false;

	foreach ($show_rpt_skkd->result() as $obj) {
		echo "<tr align='left' valign='top' >";
		
		if($skno==-1) {
			$skno=$obj->sk_no;
			echo "<td rowspan='".$obj->jml_kd."' style='padding:3px;' >". $obj->sk_no . ". <span class='meta_sk_detail'>" . $obj->sk_detail . "</span></td>";
			$statNewSK=true;
		} else if ($skno!=$obj->sk_no) {
			$skno=$obj->sk_no;
			echo "<td rowspan='".$obj->jml_kd."' style='padding:3px;' >".$obj->sk_no . ". <span class='meta_sk_detail'>" . $obj->sk_detail . "</span></td>";
			$statNewSK=true;
		}
		
		if($kdno==-1) {
			$kdno=$obj->kd_no;
			echo "<td title='KD Id : ".$obj->kdid."' rowspan='".$obj->jml_indi."' style='padding:3px;'>".$obj->kd_no. ". " . $obj->kd_detail."</td>";
			echo "<td rowspan='".$obj->jml_indi."' align='center' style='padding:3px;' >". $obj->ranah_kd."</td>";
			$count=0;
			$statNewKd=true;
		} else if ($kdno!=$obj->kd_no) {
			$kdno=$obj->kd_no;
			echo "<td title='KD Id : ".$obj->kdid."' rowspan='".$obj->jml_indi."' style='padding:3px;'>".$obj->kd_no. ". " . $obj->kd_detail."</td>";
			echo "<td rowspan='".$obj->jml_indi."' align='center' style='padding:3px;'>". $obj->ranah_kd."</td>";	
			$count=0;
			$statNewKd=true;
			$indino=-1;
		}
		
		if($indino==-1) {
			$indino=$obj->no_indi;
			echo "<td title='".$obj->no_indi."' style='padding:3px;'>" .$obj->no_indi . ". " . $obj->desc_indi."</td>";
			echo "<td align='center' >".$obj->ranah_indi."</td>";
		} else if ($indino!=$obj->no_indi) {
			$indino=$obj->no_indi;
			echo "<td title='".$obj->no_indi."' style='padding:3px;'>" .$obj->no_indi . ". " . $obj->desc_indi."</td>";
			echo "<td align='center' >".$obj->ranah_indi."</td>";
		}
		
		
		
		
		if($statNewKd==true) {
			echo "<td rowspan='".$obj->jml_indi."' style='padding:3px;'>". $obj->materi_pokok."</td>";
			
			$qe = "SELECT count(*) as jml_rlingkup FROM trx_skkd_kd_rlingkup WHERE id_skkd_kd='".$obj->kdid."' GROUP BY id_skkd_kd";
			$queryRlingkup = $this->db->query($qe);
			echo "<td rowspan='".$obj->jml_indi."' style='padding:3px;' align='center' >". $queryRlingkup->row(0)->jml_rlingkup."</td>";
			
			$q="SELECT *, SUM(week1+week2+week3+week4+week5) as jml_jam_kd FROM trx_prosem_detail WHERE kd_id='".$obj->kdid."' GROUP BY kd_id";
			$query = $this->db->query($q);
			//print_r($query->row(0));
			if($query->row(0)) {
				echo "<td rowspan='".$obj->jml_indi."' style='padding:3px;' align='center' >". $query->row(0)->jml_jam_kd ."</td>";
			} else {
				echo "<td rowspan='".$obj->jml_indi."' ></td>";
			}
		}
		
		echo "</tr>";
		
		$count++;
		$hitung++;
		$statNewKd=false;
		$statNewSK=false;
		$nokd++;
	}
	?>
</table>