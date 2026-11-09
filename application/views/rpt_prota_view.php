<div class="isi-popup" >
	<div class="table-responsive" align='left' >
		
		<table width='100%'><tr><td>
		<img id='btnPDF_prota' src='<?php echo base_url(); ?>icons/pdf-export.png' class='img_export_pdf' align='right' title='Export Prota to PDF' >
		</td></tr></table>

		<table class="table table-bordered" >
			<tr align="center" >
				<td rowspan="2">No.SK</td>
				<td rowspan="2">Standart Kompetensi</td>
				<td rowspan="2">Jumlah KD</td>
				<td colspan="2">Jumlah Jam Tatap Muka</td>
			</tr>
			
			<tr align="center">
				<td>Semester 1</td>
				<td>Semester 2</td>
			</tr>
			
			<?php
			$arDataProta=array();
			$no=0;
			foreach($data_prota->result() as $object) {
				$arDataProta[$object->sk_no]["sk_sm1"] = $object->sk_sm1;
				$arDataProta[$object->sk_no]["sk_sm2"] = $object->sk_sm2;
				$no++;
			}
			
			$nourut=1;
			$totalKD = 0;
			$totSm1=0;
			$totSm2=0;
			foreach($data_skkd->result() as $object) {
				echo "<input type='hidden' name='txtIDSK[]' id='txtIDSK".$object->id."' value='".$object->id."'>";
				echo "<tr>";
				echo "<td align='center'>".$object->sk_no."<input type='hidden' name='txtSKNo[]' id='txtSKNo".$object->sk_no."' value='".$object->sk_no."' ></td>";
				echo "<td>".$object->sk_detail."</td>";
				echo "<td align='center'>".$object->jml_kd."</td>";
				if(isset($arDataProta[$object->sk_no]["sk_sm1"])) {
					echo "<td align='center'>".$arDataProta[$object->sk_no]["sk_sm1"]."</td>";
					$totSm1+=$arDataProta[$object->sk_no]["sk_sm1"];
				} else {
					echo "<td align='center'>0</td>";
				}
				if(isset($arDataProta[$object->sk_no]["sk_sm2"])) {
					echo "<td align='center'>".$arDataProta[$object->sk_no]["sk_sm2"]."</td>";
					$totSm2+=$arDataProta[$object->sk_no]["sk_sm2"];
				} else {
					echo "<td align='center'>0</td>";
				}
				echo "</tr>";
				$nourut++;
				$totalKD+=$object->jml_kd;
				
				/*
				echo "<script>";
				echo "arIdTMsm1.push('txtTM_sk".$object->sk_no."sm1');";
				echo "arIdTMsm2.push('txtTM_sk".$object->sk_no."sm2');";
				echo "jmlSK++;";
				echo "TMsm1_change($object->sk_no);";
				echo "TMsm2_change($object->sk_no);";
				echo "arNoSK.push('".$object->sk_no."');";
				echo "</script>";
				*/
			}
			?>
			
			<tr align="center" style='background-color:#E1F0FB;' >
				<td colspan="2">Jumlah KD dan Tatap Muka Semester</td>
				<td><?php echo $totalKD;?></td>
				<td><label id='txtJmlTMsm1'><?php echo $totSm1; ?></label></td>
				<td><label id='txtJmlTMsm2'><?php echo $totSm2; ?></label></td>
			</tr>
			
		</table>
				
		
	</div>
</div>

