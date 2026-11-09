<div class="header-popup">
	<b>Master Closing (<?php echo $this->session->userdata('tahunAjr_active'); ?>)</b>
</div>

<div class="isi-popup" >
<?php
$kataClosing = ($stat_closing==1?"Open":"Closed");

echo "<table class='table table-bordered' >";
	echo "<tr style='background-color:#AA3F3E;color:#ffffff;'>";
	echo "<td width='150' >Jenjang</td>";
	echo "<td width='150' >Status Closing</td>";
	echo "<td>Change</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td style='vertical-align:middle;'>" . $this->session->userdata('login_jenjang') . "</td>";
	echo "<td style='vertical-align:middle;'>" . $kataClosing . "</td>";
	echo "<td align='left' ><input id='btnClickClosing' statClose='".$stat_closing."' alt='".$this->session->userdata('login_jenjang')."' title='Click to change status close' type='button' value='Change status closing' class='btn btn-info'  ></td>";
	echo "</tr>";
echo "</table>";

echo "<br><br>";

echo "<table class='table table-bordered table-striped' >";
echo "<tr style='background-color:#31B0D5;color:#ffffff;'>";
	echo "<td >Log Date Closing / Unclose</td>";
	echo "<td >Log Status</td>";
	echo "<td >Log Close / Unclose by</td>";
	echo "</tr>";
foreach($log_closing->result() as $row) {
	if($row->status==1) {
		echo "<tr>";
	} else {
		echo "<tr style='background-color:#C74848;color:#ffffff;'>";
	}
	echo "<td>" . $row->date_execute . "</td>";
	echo "<td>" . ($row->status==1?"Opened":"Closed") . "</td>";
	echo "<td>" . $row->user_change . "</td>";
	echo "<tr>";
}
echo "</table>";
?>
</div>
