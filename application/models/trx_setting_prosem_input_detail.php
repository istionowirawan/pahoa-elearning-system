<script>
var arTM_sk=new Array();
var arTM_kd=new Array();
var arTM_uji=new Array();
function hitungTM_awal() {
	for(var a=0; a<arTM_sk.length; a++) {
		hitungBaris(arTM_sk[a],arTM_kd[a]);
	}
}
function hitungTMuji_awal() {
	for(var a=0; a < arTM_sk.length; a++) {
		//alert(arTM_sk[a]);
		//hitungUjiKompetensi(arTM_uji[a]);
		hitungUjiKompetensi(arTM_sk[a],arTM_kd[a]);
	}
}
function hitungBaris(sk,kd) {
	var hslTambahBaris=0;
	for(var a=1; a<=5; a++) {
		var namaBaris = "sk"+sk+"kd"+kd+"mg"+a;
		hslTambahBaris += Number(document.getElementById(namaBaris).value);
	}
	var txtHasil = "txtTotalTMsk"+sk+"kd"+kd;
	document.getElementById(""+txtHasil).innerHTML=hslTambahBaris;
}
function hitungUjiKompetensi(sk,kd) {
	var hslTambahBarisUK=0;
	for(var a=1; a<=5; a++) {
		var namaBaris = "uji_sk"+sk+"kd"+kd+"mg"+a;
		hslTambahBarisUK += Number(document.getElementById(namaBaris).value);
	}
	
	var txtHasil = "txtTotUjiKompetensiSK"+sk+"KD"+kd;
	document.getElementById(""+txtHasil).innerHTML=hslTambahBarisUK;
}
</script>

<table class="table table-bordered" >
	<tr align="center" style='background-color:#8296AD;color:white;' >
		<td rowspan="3" style="vertical-align:middle" >No.SK</td>
		<td rowspan="3" style="vertical-align:middle">No.KD</td>
		<td rowspan="3" style="vertical-align:middle">Kompetensi Dasar</td>
		<td rowspan="3" style="vertical-align:middle">Jumlah Indikator</td>
		<td rowspan="3" style="vertical-align:middle">Jam Tatap Muka</td>
		<td colspan="50" style="vertical-align:middle">Bulan dan minggu efektif belajar</td>
	</tr>
	
	<tr align="center" style='background-color:#8296AD;color:white;' >
		<?php
		echo "<td colspan='5' width='50%' >";
		echo "<select id='cbProsem_bulan' name='cbProsem_bulan' class='form-control' required >";
			echo "<option value=''>== Pilih bulan ==</option>";
			foreach($data_bulan->result() as $object) {
				echo "<option value='".$object->id."'>".$object->bulan."</option>";
			}
		echo "</select>";
		echo "</td>";
		?>
	</tr>
	
	<tr align="center" style='background-color:#8296AD;color:white;' >
		<?php
		for ($b=0; $b<5; $b++) {
			echo "<td title='Minggu ke - ".($b+1)."'>".($b+1)."</td>";
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
	
	echo "<script>";
	echo "var arIdSKKD_per_week=new Array();";
	echo "var arIdUK_per_week=new Array();";
	echo "</script>";
	
	//print_r($data_prosem->result());
	foreach($data_prosem->result() as $object) {
		if($nourut==1){
			$nosk=$object->sk_no;
			$skid=$object->id;
			$tampilsk=true;
		}
		if($nosk!=$object->sk_no) {
			$nosk=$object->sk_no;
			$skid=$object->id;
			$tampilsk=true;
		}
		
		echo "<tr align='center'>";
		echo "<td title='Semester".$object->semester."'>".$object->sk_no."<input type='hidden' name='txtSKNo[]' id='txtSKNo".$object->sk_no."' value='".$object->sk_no."' ></td>";
		echo "<input type='hidden' name='txtKDid[]' id='txtKDid".$object->kd_id."' value='".$object->kd_id."' >";
		echo "<td>".$object->kd_no."<input type='hidden' name='txtKDNo[]' id='txtKDNo".$object->kd_no."' value='".$object->kd_no."' ></td>";
		echo "<td align='left'>".$object->kd_detail."</td>";
		echo "<td>".$object->jml_indi."</td>";
		echo "<td>";
			echo "<label id='txtTotalTMsk".$object->sk_no."kd".$object->kd_no."' title='txtTotalTMsk".$object->sk_no."kd".$object->kd_no."' ></label>";
		echo "</td>";
		$col_jml_indi+=$object->jml_indi;
		
		for ($b=0; $b<5; $b++) {
			$barisTxt = "sk".$object->sk_no;
			$barisTxt .= "kd".$object->kd_no;
			$barisTxt .= "mg".($b+1);
			
			$barisName = "sk".$object->sk_no;
			$barisName .= "kd".$object->kd_no;
			
			echo "<td>";
			echo "<input id='".$barisTxt."' name='".$barisName."[]' title='".$barisTxt."' alt='brsMggu".$nourut."' type='number' min='0' value='0' style='width:100%;' onchange='hitungBaris($object->sk_no,$object->kd_no)' >";
			echo "</td>";
			
			echo "<script>";
			echo "arIdSKKD_per_week.push('".$barisTxt."');";
			echo "</script>";
		}
		$nourut++;
		echo "</tr>";
		
		echo "<tr style='background-color:#d0dfef;' align='center' >";
			//buat_row_ujikompetensi($nomorUjiKompetensi,$object->sk_no,$object->id,$object->kd_no,$object->kd_id);
			echo "<td colspan='4'>";
			echo "Uji Kompetensi ".$nomorUjiKompetensi." (SK".$object->sk_no."-KD".$object->kd_no.")";
			//echo "<input type='hidden' name='txtUjiKDid[]' id='txtUjiKDid".$idKD."' value='".$idKD."' >";
			echo "</td>";
			
			echo "<td><label id='txtTotUjiKompetensiSK".$object->sk_no."KD".$object->kd_no."' title='txtTotUjiKompetensiSK".$object->sk_no."KD".$object->kd_no."' >0</label></td>";
			for ($b=0; $b<5; $b++) {
				$ujiTxt = "uji_sk".$object->sk_no;
				$ujiTxt .= "kd".$object->kd_no;
				$ujiTxt .= "mg".($b+1);
				
				$barisName = "uji_sk".$object->sk_no;
				$barisName .= "kd".$object->kd_no;
				
				echo "<td>";
				echo "<input id='".$ujiTxt."' name='".$barisName."[]' title='".$ujiTxt."' alt='brsMggu".$nourut."' type='number' min='0' value='0' style='width:100%;' onchange='hitungUjiKompetensi($object->sk_no,$object->kd_no)' >";
				echo "</td>";
				
				echo "<script>";
				echo "arIdUK_per_week.push('".$ujiTxt."');";
				echo "arTM_uji.push('".$nomorUjiKompetensi."');";
				echo "</script>";
			}
			$nomorUjiKompetensi++;
		echo "</tr>";
		
		
		echo "<script>";
		echo "arTM_sk.push('".$object->sk_no."');";
		echo "arTM_kd.push('".$object->kd_no."');";
		echo "hitungBaris($object->sk_no,$object->kd_no);";
		echo "</script>";
	}
	
	
	?>
	
	<tr align="center" style='background-color:#efe8e8;color:blue;' >
		<td colspan="3">Jumlah KD dan Tatap Muka</td>
		<td id='col_jml_indi'><?php echo $col_jml_indi;?></td>
		<td id='col_jml_tm'></td>
		<td id='col_jml_mg1'></td>
		<td id='col_jml_mg2'></td>
		<td id='col_jml_mg3'></td>
		<td id='col_jml_mg4'></td>
		<td id='col_jml_mg5'></td>
	</tr>
	
	<tr>
		<td colspan='10' align='center' >
			<?php
			echo "<input id='btnSimpanProsem_input' type='submit' value='Simpan Prosem' class='btn btn-success' style='width:100%;' >";
			?>
		</td>
	</tr>
	
	
</table>
