<table width='100%'><tr><td>
	<img id='btnPDF_prosem' src='<?php echo base_url(); ?>icons/pdf-export.png' class='img_export_pdf' align='right' title='Export Prosem to PDF' >
</td></tr></table>
		
<table class="table table-bordered" >
		
	<tr align="center" style='background-color:#8296AD;color:white;' >
		<td rowspan="3" style="vertical-align:middle" >No.SK</td>
		<td rowspan="3" style="vertical-align:middle">No.KD</td>
		<td rowspan="3" style="vertical-align:middle">Kompetensi Dasar</td>
		<td rowspan="3" style="vertical-align:middle">Jumlah Indikator</td>
		<td rowspan="3" style="vertical-align:middle">Jam Tatap Muka</td>
		<td colspan="30" style="vertical-align:middle">Bulan dan minggu efektif belajar</td>
	</tr>
	
	<tr align="center" style='background-color:#8296AD;color:white;' >
		<?php
		$jmlBulan=0;
		foreach($data_bulan->result() as $object) {
			echo "<td colspan='5' >";
			echo $object->bulan;
			$jmlBulan++;
			echo "</td>";
		}
		
		?>
	</tr>
	
	<tr align="center" style='background-color:#8296AD;color:white;' >
		<?php
		for ($b=0; $b < 5 * $jmlBulan; $b++) {
			echo "<td>".(($b%($jmlBulan-1))+1) ."</td>";
		}
		?>
	</tr>
	
	<?php
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
	//$arColUji = array();
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
			echo "<tr style='background-color:#EAF4FC;' align='center' >";
			buat_row_ujikompetensi($nomorUjiKompetensi,$nosk,$skid,$jmlBulan,$object->semester,$prosem_uji_kom);
			echo "</tr>";
			$nosk=$object->sk_no;
			$skid=$object->id;
			$nomorUjiKompetensi++;
			$tampilsk=true;
		}
		
		echo "<tr align='center'>";
		echo "<td title='Semester".$object->semester."'>".$object->sk_no."<input type='hidden' name='txtSKNo[]' id='txtSKNo".$object->sk_no."' value='".$object->sk_no."' ></td>";
		echo "<input type='hidden' name='txtKDid[]' id='txtKDid".$object->kd_id."' value='".$object->kd_id."' >";
		echo "<td title='kd_id".$object->kd_id."'>".$object->kd_no."<input type='hidden' name='txtKDNo[]' id='txtKDNo".$object->kd_no."' value='".$object->kd_no."' ></td>";
		echo "<td align='left'>".$object->kd_detail."</td>";
		
		echo "<td>".$object->jml_indi."</td>";
		$totJmlIndi+=$object->jml_indi;
		
		echo "<td>";
		$rowJmlah = 0;
		foreach($prosem_detail->result() as $row) {
			if($object->kd_id==$row->kd_id) {
				$rowJmlah+=$row->jml;
			}
		}
		echo $rowJmlah;
		global $totJmlTatapMuka;
		$totJmlTatapMuka+=$rowJmlah;
		//echo "<label id='txtTotalTMsk".$object->sk_no."kd".$object->kd_no."' title='txtTotalTMsk".$object->sk_no."kd".$object->kd_no."' ></label>";
		echo "</td>";
		$col_jml_indi+=$object->jml_indi;
		
		$colNo=0;
		for ($b=0; $b<5* $jmlBulan; $b++) {
			echo "<td>";
			
			$smsTbh = ($object->semester==1?6:0);
			$bln = ceil(($b+1)/5) + $smsTbh;
			$mgu = (($b%($jmlBulan-1))+1);
			
			$adadata = 0;
			foreach($prosem_detail->result() as $row) {
				if($row->kd_id==$object->kd_id && $bln==$row->bulan) {
					//echo $object->kd_id . "/" . $bln . "/" . $mgu . " == " . $row->kd_id . "/" . $row->bulan . "<br>";
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
					echo kosong_jk_nol($dataWeek);
					
					$adadata++;
					
					$arCol[$colNo]+=$dataWeek;
					$colNo++;
					break;
				}
			}
			if($adadata==0) {
				//echo  . "|" . $colNo;
				$arCol[$colNo]+=0;
				$colNo++;
			} 
			
			//echo "<input id='".$barisTxt."' name='".$barisName."[]' title='".$barisTxt."' alt='brsMggu".$nourut."' type='number' min='0' value='0' style='width:100%;' onchange='hitungBaris($object->sk_no,$object->kd_no)' >";
			echo "</td>";
		}
		$nourut++;
		echo "</tr>";
		
		if(($nourut-1)==$data_prosem->num_rows()) {
			echo "<tr style='background-color:#EAF4FC;' align='center' >";
			buat_row_ujikompetensi($nomorUjiKompetensi,$object->sk_no,$object->id,$jmlBulan,$object->semester,$prosem_uji_kom);
			echo "</tr>";
		}
	}
	
	
	
	//=========================================================================================================================
	function buat_row_ujikompetensi($nomorUjiKompetensi,$noSK,$idSK,$jmlBulan,$smst,$prosem_uji_kom) {
		
		echo "<td colspan='4'>";
			echo "Uji Kompetensi ".$nomorUjiKompetensi . " (SK".$noSK.")";
			echo "<input type='hidden' name='txtIDUjiSK[]' id='txtIDUjiSK".$idSK."' value='".$idSK."' >";
			echo "<input type='hidden' name='txtNoUjiSK[]' id='txtNoUjiSK".$noSK."' value='".$noSK."' >";
		echo "</td>";
		echo "<td><label id='txtTotUjiKompetensi".$nomorUjiKompetensi."' title='txtTotUjiKompetensi".$nomorUjiKompetensi."' >";
		$rowJmlahUji = 0;
		foreach($prosem_uji_kom->result() as $row) {
			if($idSK==$row->sk_id) {
				$rowJmlahUji+=$row->jml;
			}
		}
		echo $rowJmlahUji;
		global $totJmlTatapMuka;
		$totJmlTatapMuka+=$rowJmlahUji;
		echo "</label></td>";
		
		$colNo=0;
		for ($b=0; $b<5* $jmlBulan; $b++) {
			echo "<td>";
			//echo "<input id='".$idUji."' name='".$namaUji."[]' title='".$idUji."' type='number' min='0' value='0' style='width:100%;' onchange='hitungUjiKompetensi($nomorUjiKompetensi)' >";
			//$prosem_uji_kom
			
			$smsTbh = ($smst==1?6:0);
			$bln = ceil(($b+1)/5) + $smsTbh;
			$mgu = (($b%($jmlBulan-1))+1);
			
			$adadata = 0;
			foreach($prosem_uji_kom->result() as $row) {
				if($idSK==$row->sk_id && $bln==$row->bulan) {
					//echo $idSK . "/" . $bln . "/" . $mgu . " == " . $row->sk_id . "/" . $row->bulan . "<br>";
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
					
					echo kosong_jk_nol($dataWeek);
					$adadata++;
					
					global $arColUji;
					$arColUji[$colNo]+=$dataWeek;
					
					$colNo++;
					break;
				}
			}
			if($adadata==0) {
				//echo "|" . $colNo;
				
				global $arColUji;
				$arColUji[$colNo]+=0;
				
				$colNo++;
			} 
			echo "</td>";
		}
		
		//$colUjiTiga+=111;
		//echo "1.".$colUjiTiga;
	}
	
	function kosong_jk_nol($nilai) {
		$result = $nilai;
		if($nilai==0) {
			$result="";
		}
		return $result;
	}
	
	
	echo "<tr align='center' style='background-color:#efe8e8;color:blue;' >";
		echo "<td colspan='3'>Jumlah KD dan Tatap Muka</td>";
		
		echo "<td id='col_jml_indi'>".$totJmlIndi."</td>";
		echo "<td id='col_jml_tm'>".$totJmlTatapMuka."</td>";
					
		for ($b=0; $b<5* $jmlBulan; $b++) {	
			$namaTotal = "tot_col_".$b;
			//echo "<td id='col_jml_mg1'><label id='".$namaTotal."' title='".$namaTotal."' >".$arCol[$b]."</label></td>";
			echo "<td id='col_jml_mg1'><label id='".$namaTotal."' title='".$namaTotal."' >".($arColUji[$b]+$arCol[$b])."</label></td>";
		}
	echo "</tr>";
	
	//print_r($arColUji);
	
	?>
	
	
	
</table>
