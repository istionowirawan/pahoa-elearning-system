<?php
if($loadTujuanPertemuan->num_rows()>0) {
	foreach($loadTujuanPertemuan->result() as $tb) {
		echo "<tr style='background-color:#ffffff;text-align:center;' >";
		echo "<td>".$tb->pert_ke."</td>";
		echo "<td>".$tb->jml_jam."</td>";
		echo "<td>".$tb->tujuan_moral."</td>";
		echo "<td><input type='button' class='btn btn-danger form-control' value='hapus' title='".$tb->id."' ></td>";
		echo "</tr>";
	}
} else {
	echo "<tr style='background-color:#ffffff;text-align:center;color:red;' >";
	echo "<td colspan='4'>Belum ada data tujuan pembelajaran</td>";
	echo "</tr>";
}
?>