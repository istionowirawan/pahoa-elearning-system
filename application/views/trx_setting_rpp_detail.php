<?php
//echo "aaaaaa : " . $idTrxRPP;
echo "<form name='frmRPP_part_header' id='frmRPP_part_header' class='form-horizontal' >";
	
	echo "<div class='head_rpp_part' >";
		echo "<div class='col-sm-12 rpp_detail_header' > RPP Header ";
		echo " <span class='glyphicon glyphicon-triangle-bottom' aria-hidden='true'></span>";
		echo "</div>";

		echo "<div class='content_part' >";
			
			echo "<div class='form-group'>";
				echo "<label for='Name_jmljam' class='col-sm-2'>Jumlah Jam Pertemuan : </label>";
				echo "<div class='col-sm-10' id='div_setRPP_jmljam'>";
				echo "<label id='lblRPPsk_jmljam' title='Jumlah Pertemuan ini diambil dari Prota' >";
					//echo ($tampilSKjam->row(0)->jmljam+$tampilSKjamUji->row(0)->jmljam);
					echo ($tampilSKjam->row(0)->jmljam);
				echo "</label>";
				echo "</div>";
			echo "</div>";


			echo "<div class='form-group'>";
				echo "<label for='Name_kegiatan' class='col-sm-2'> No RPP : </label>";
				echo "<div class='col-sm-10' id='div_setRPP_kegiatan'>";
					//echo "========> " . $noTrxRPP;
					if($idTrxRPP>0) {
						echo "<label id='lblRPP_no' >".$noTrxRPP."</label>";
						//echo "<input name='txtRPP_no' id='txtRPP_no' type='hidden' class='form-control' min='0' >";
						echo "<input type='hidden' id='txtRPP_id' name='txtRPP_id' value='".$idTrxRPP."' >";
					} else {
						echo "<input name='txtRPP_no' id='txtRPP_no' type='number' class='form-control' min='0' required >";
						echo "<label id='lblRPP_no' style='display: none;' ></label>";
						echo "<input type='hidden' id='txtRPP_id' name='txtRPP_id' value='' >";
					}
				echo "</div>";
			echo "</div>";

			echo "<div class='form-group'>";
				echo "<label for='Name_kegiatan' class='col-sm-2'></label>";
				echo "<div class='col-sm-10' id='div_setRPP_kegiatan'>";
					if($idTrxRPP<=0) {
						echo "<input type='submit' id='btnPartRPP_header_submit' class='btn btn-warning' value='Simpan RPP Header' >";
					}
				echo "</div>";
			echo "</div>";
			
		echo "</div>";
	echo "</div>";
echo "</form>";


$brs=0;
$noKD=-1;
$kdcount=1;

echo "<div class='head_rpp_part' >";
echo "<div class='col-sm-12 rpp_detail_header' > RPP detail (A sd C) ";
echo " <span class='glyphicon glyphicon-triangle-bottom' aria-hidden='true'></span>";
echo "</div>";

echo "<div class='content_part' >";
foreach($tampilSKrpp->result() as $object) {
	if($brs==0) {
		echo "<div class='form-group'>";
			echo "<label for='Name_sk_isi' class='col-sm-2'>A. Standart Kompetensi</label>";
			echo "<div class='col-sm-10' id='div_setRPP_sk_isi'>";
			echo "<label id='lblRPPsk_isi' >".$object->sk_detail."</label>";
			echo "</div>";
		echo "</div>";
	}
	
	if($noKD==-1) {
		echo "<div class='form-group' >";
			echo "<label for='Name_kd_isi' class='col-sm-2'>B. Kompetensi Dasar</label>";
			echo "<div class='col-sm-10' id='div_setRPP_kd_isi'>";
			echo "<label id='lblRPPkd_isi' >".$kdcount . ". " . $object->kd_detail."</label>";
			echo "</div>";
		echo "</div>";
		$noKD = $object->kd_no;
		$kdcount++;
	} else if ($noKD!=$object->kd_no) {
		echo "<div class='form-group decrease_top_margin'>";
			echo "<label for='Name_kd_isi' class='col-sm-2'></label>";
			echo "<div class='col-sm-10' id='div_setRPP_kd_isi'>";
			echo "<label id='lblRPPkd_isi' >".$kdcount . ". ".$object->kd_detail."</label>";
			echo "</div>";
		echo "</div>";
		$noKD = $object->kd_no;
		$kdcount++;
	}
	$brs++;
}

echo "<div class='col-sm-12'></div>";

$noindi=1;
foreach($tampilSKrpp->result() as $object) {
	if($noindi==1) {
		echo "<div class='form-group'>";
			echo "<label for='Name_indi' class='col-sm-2' title='Indikator Pencapaian Kompetensi' >C. Indikator</label>";
			echo "<div class='col-sm-10' id='div_setRPP_indi'>";
			echo "<label id='lblRPPkd_indi' >". $noindi .". " . $object->desc_indi."</label>";
			echo "</div>";
		echo "</div>";
		$noindi++;
	} else {
		echo "<div class='form-group decrease_top_margin'>";
			echo "<label for='Name_indi' class='col-sm-2'></label>";
			echo "<div class='col-sm-10' id='div_setRPP_indi'>";
			echo "<label id='lblRPPkd_indi' >". $noindi .". ".$object->desc_indi."</label>";
			echo "</div>";
		echo "</div>";
		$noindi++;
	}
	
}


echo "<br>";
echo "</div>";
echo "</div>";	
?>