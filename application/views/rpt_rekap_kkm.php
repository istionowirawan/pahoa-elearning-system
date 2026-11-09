<?php
$arIdKls = array();
$arKls = array();
foreach($kelas_jenjang->result() as $jnj) {
	array_push($arIdKls,$jnj->id);
	array_push($arKls,$jnj->kelas);
}
?>
<table class='table table-bordered table-striped' >

<?php

echo "<tr  style='background-color:#EEEEEE;' align=center>";
echo "<td>Mapel</td>";
for($a=0; $a<count($arKls); $a++) {
	echo "<td title='".$arIdKls[$a]."'>".$arKls[$a]."</td>";
}
echo "</tr>";

$arNamaTable = array('trx_skkd','trx_prota','trx_prosem','trx_silabus','trx_kkm','trx_rpp');

foreach($mapel_jenjang->result() as $obj) {
	echo "<tr align='center' >";
	echo "<td title='".$obj->id."' align='left' >".$obj->mapel."</td>";
	
	for($a=0; $a<count($arKls); $a++) {
		$kkmIsi=0;
		//echo "<td>".$obj->id." | " . $arIdKls[$a] . " | " .  $arKls[$a] ."</td>";
		foreach($data_rekap_kkm->result() as $rKkm) {
			if($obj->id==$rKkm->id_mapel) {
				if($arIdKls[$a]==$rKkm->id_kelas) {
					echo "<td title='".$rKkm->kkm_rata."'>". round($rKkm->kkm_rata,0) . "</td>";
					$kkmIsi++;
				}
			}
		}
		if($kkmIsi==0) {
			echo "<td></td>";
		}
	}
	
	echo "</tr>";
}
?>
</table>