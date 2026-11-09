<?php
$arIdKls = array();
$arKls = array();
foreach($kelas_jenjang->result() as $jnj) {
	array_push($arIdKls,$jnj->id);
	array_push($arKls,$jnj->kelas);
}
?>
<table class='table table-bordered table-striped' >

<tr style='background-color:#EEEEEE;' align='center' >
<td rowspan='2' width='200' >Mapel</td>
<td colspan='<?php echo count($arKls); ?>'>Pemetaan SKKD</td>
<td colspan='<?php echo count($arKls); ?>'>Prota</td>
<td colspan='<?php echo count($arKls); ?>'>Prosem</td>
<td colspan='<?php echo count($arKls); ?>'>Silabus</td>
<td colspan='<?php echo count($arKls); ?>'>KKM</td>
<td colspan='<?php echo count($arKls); ?>'>RPP</td>
</tr>


<?php

echo "<tr  style='background-color:#EEEEEE;' align=center>";
for($b=0; $b<6; $b++) {
	for($a=0; $a<count($arKls); $a++) {
		echo "<td title='".$arIdKls[$a]."'>".$arKls[$a]."</td>";
	}
}
echo "</tr>";

$arNamaTable = array('trx_skkd','trx_prota','trx_prosem','trx_silabus','trx_kkm','trx_rpp');

foreach($mapel_jenjang->result() as $obj) {
	echo "<tr align='center' >";
	echo "<td title='".$obj->id."' align='left' >".$obj->mapel."</td>";
	
	for($b=0; $b<6; $b++) {
		for($a=0; $a<count($arKls); $a++) {
			
			//echo "<td>".$obj->id." | " . $arIdKls[$a] . " | " .  $arKls[$a] ."</td>";
			echo "<td>";
			$qCari = $this->db->query("SELECT id, COUNT(id_kelas) as jmlsk 
			FROM ".$arNamaTable[$b]." 
			WHERE id_mapel='".$obj->id."'
			AND id_kelas='".$arIdKls[$a]."'
			GROUP BY id_kelas");
			if($qCari->num_rows()>0) {
				//echo $qCari->row(0)->id;
				if($qCari->num_rows()>0) {
					echo "<span title='Data exist' class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
				}
			}
			echo "</td>";
			
		}
	}
	
	
	echo "</tr>";
}
?>
</table>