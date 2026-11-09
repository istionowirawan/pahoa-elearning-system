<?php
$skill="";
$moral="";
$karakter="";
foreach($loadTujuanTemu->result() as $object) {
	$skill = $object->life_skill;
	$moral = $object->nilai_moral;
	$karakter = $object->pendidikan_karakter;
}
$moral_load="";
$tuj_bljr="";
foreach($loadTujuanIsiTemu->result() as $isi) {
	$moral_load = $isi->tujuan_moral;
	$tuj_bljr = $isi->tujuan_pembelajaran;
}

$strSkill = "<ul style='padding-left:20px;'>";
$exSkill = explode(";",$skill);
for($a=0; $a<count($exSkill)-1; $a++) {
	foreach($data_lifeskill->result() as $ls) {
		if($ls->kode == $exSkill[$a]) {
			$strSkill .= "<li>". $ls->kode . " - " . $ls->keterampilan . "</li>";
			break;
		} 
	}
}
$strSkill.="</ul>";

$strKar = "<ul style='padding-left:20px;'>";
$exKar = explode(";",$karakter);
for($a=0; $a<count($exKar)-1; $a++) {
	foreach($data_pend_kar->result() as $kar) {
		if($kar->id == $exKar[$a]) {
			$strKar .= "<li>". $kar->keterangan . "</li>";
			break;
		} 
	}
}
$strKar.="</ul>";
?>

<br>
<form method='POST' id='frmRPP_part_tujuan' name='frmRPP_part_tujuan' >
<table class="table table-condensed">
	&nbsp;
	<tr align='center'>
		<td style='text-align:right;' >Life skill : </td>
		<td align='left' >
			<input type='hidden' class='form-control' name='txtTemuTujuan_skill' id='txtTemuTujuan_skill' required value='<?php echo preg_replace('/\s+/', '', $skill); ?>' >
			<?php echo $strSkill; ?>
		</td>
	</tr>

	<tr align='center'>
		<td style='text-align:right;' >Pendidikan Karakter : </td>
		<td align='left'>
			<input type='hidden' class='form-control' name='txtTemuTujuan_karakter' id='txtTemuTujuan_karakter' required value='<?php echo preg_replace('/\s+/', '', $karakter); ?>' >
			<?php echo $strKar; ?>
		</td>
	</tr>
	
	<tr align='center'>
		<td style='text-align:right;width:20%;' >Pertemuan Ke : </td>
		<td align='left' >
			<select name='txtPertemuanKe' id='txtPertemuanKe' class='form-control' required >
				<?php
				echo "<option value='' >== Pilih Pertemuan ==</option>";
				for($a=1; $a <= 30; $a++) {
					echo "<option value='".$a."' >".$a."</option>";
				}
				?>
			</select>
		</td>
	</tr>
	
	<tr align='center'>
		<td style='text-align:right;width:20%;' >Jumlah Jam : </td>
		<td align='left' >
			<select name='txtJmlJam' id='txtJmlJam' id='txtTemuTujuan_no' class='form-control' required >
				<?php
				echo "<option value='' >== Pilih jumlah jam pada pertemuan ini ==</option>";
				for($b=1; $b <= 10; $b++) {
					echo "<option value='".$b."' >".$b."</option>";
				}
				?>
			</select>
		</td>
	</tr>
	<tr align='center'>
		<td style='text-align:right;' >Nilai Moral Ajaran Confucius : </td>
		<td >
			<select class='form-control' style='resize:none;' name='txtTemuTujuan_moral' id='txtTemuTujuan_moral' required >
				<?php //echo $moral; ?>
				<option value=''>== Pilih Nilai Moral ==</option>
				<?php
				foreach($data_confucius->result() as $cf) {
					if($moral_load==$cf->dizigui) {
						echo "<option selected value='".$cf->dizigui."'>".$cf->dizigui."</option>";
					} else {
						echo "<option value='".$cf->dizigui."'>".$cf->dizigui."</option>";
					}
				}
				?>
			</select>
		</td>
	</tr>
	
	<tr align='center'>
		<td style='text-align:right;' >Tujuan Pembelajaran : </td>
		<td align='left'>
			<!--<textarea class='form-control' style='resize:none;' name='txtTemuTujuan_pembelajaran' id='txtTemuTujuan_pembelajaran' required >-->
				<?php //echo $tuj_bljr; ?>
			<!--</textarea>-->
			<?php
			$explodeTujBljr = explode(";",$tuj_bljr);
			$jmlIsiTujuan = count($explodeTujBljr) - 1;
			
			foreach($data_tujuan_pmbljaran->result() as $tp) {
				if($jmlIsiTujuan > 0) {
					$adaIsi=false;
					for($x=0; $x < $jmlIsiTujuan; $x++) {
						if($explodeTujBljr[$x]==$tp->idtujuan) {
							echo "<input type='checkbox' name='txtTemuTujuan_pembelajaran[]' id='txtTemuTujuan_pembelajaran".$tp->idtujuan."' title='txtTemuTujuan_pembelajaran".$tp->idtujuan."' value='".$tp->idtujuan."' checked > " . $tp->tujuan . "<br>";
							$adaIsi=true;
							break;
						}
					}
					if($adaIsi==false) {
						echo "<input type='checkbox' name='txtTemuTujuan_pembelajaran[]' id='txtTemuTujuan_pembelajaran".$tp->idtujuan."' title='txtTemuTujuan_pembelajaran".$tp->idtujuan."' value='".$tp->idtujuan."' > " . $tp->tujuan . "<br>";
					}
				} else {
					echo "<input type='checkbox' name='txtTemuTujuan_pembelajaran[]' id='txtTemuTujuan_pembelajaran".$tp->idtujuan."' title='txtTemuTujuan_pembelajaran".$tp->idtujuan."' value='".$tp->idtujuan."' > " . $tp->tujuan . "<br>";
				}
			}
			?>
		</td>
	</tr>

	
	<tr align='center'>
		<td style='text-align:right;' ></td>
		<td><input type='submit' value='Simpan Tujuan Pembelajaran' class='btn btn-warning form-control' id='btnSubmitRPP_tujuan' ></td>
	</tr>	
	
	
</table>
</form>

<table class="table table-bordered" style='background-color:#BCBCBC;' id='tbl_data_tujuan_rpp' >
<tr align='center'><td colspan='4' title='Preview Tujuan Pembelajaran yang telah diinput' >Preview Tujuan Pembelajaran yang telah diinput</td></tr>
<tr align='center'>
	<td>Pertemuan Ke.</td>
	<td>Jumlah Jam</td>
	<td>Nilai Moral</td>
	<td>Hapus</td>
</tr>

<tbody id='tbl_rpp_tujuan' ></tbody>


</table>