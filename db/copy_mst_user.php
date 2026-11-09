<?php
mysql_connect("localhost","root","pahoa");
mysql_select_db("adm_guru");

function jenjang_kata($jenjang) {
	$kata="SMA";
	if($jenjang==1) {
		$kata="SMA";
	} else {
		$kata="SMP";
	}
	return $kata;
}
function jabatan_angka($jab) {
	$kodejab = 1;
	if($jab=="TU") {
		$kodejab = 2;
	} else if ($jab=="GURU") {
		$kodejab = 1;
	} else if ($jab=="Dokumen Kontrol") {
		$kodejab = 5;
	}
	return $kodejab;
}

$query = mysql_query("SELECT * FROM mst_user");
while($row = mysql_fetch_array($query)) {
	$insert = mysql_query("INSERT INTO ms_user (username, password, nama, jenjang, id_jabatan, status, create_by, date)
	VALUES (
	'".$row['username']."',
	'202cb962ac59075b964b07152d234b70',
	'".$row['nama_lengkap']."',
	'".jenjang_kata($row['id_unit'])."',
	'".jabatan_angka($row['level'])."',
	'1',
	'admin',
	now()
	)
	");
	
	if($insert) {
		echo "sukses";
	} else {
		echo "gagal " . mysql_error();
	}
	echo "<br>";
}
?>