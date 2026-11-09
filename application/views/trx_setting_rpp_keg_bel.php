<br>
<form method='POST' id='frmRPP_part_kegbel' name='frmRPP_part_kegbel' >


<table class="table" rules='none' >
&nbsp;
<tr align='center'>
	<td style='text-align:left;width:10%;vertical-align:middle;' >Pertemuan Ke</td>
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
	<td style='text-align:left;vertical-align:middle;' >Jumlah Jam : </td>
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
</table>

<table class="table table-bordered">

<input type='hidden' name='txtRPP_kegbel_no' id='txtRPP_kegbel_no' value='<?php echo $noTemu; ?>' >
<tr align='center' style='background-color:#F11B22;color:#ffffff;' >
	<td>No.</td>
	<td width='70%'>Kegiatan.</td>
	<td width='10%'>Waktu (menit)</td>
	<td>Metode.</td>
</tr>

<tr>
	<td align='center'>1</td>
	<td>Pendahuluan
		<textarea name='txtRPP_kegbel_pendahuluan' id='txtRPP_kegbel_pendahuluan' class="form-control" style='resize:none;' required ><?php //echo (isset($loadKegbel->row(0)->pendahuluan)?$loadKegbel->row(0)->pendahuluan:""); ?></textarea>
	</td>
	<td><input name='txtRPP_kegbel_waktu_a' id='txtRPP_kegbel_waktu_a' type="number" class="form-control" min="0" value="<?php //echo (isset($loadKegbel->row(0)->waktu_a)?$loadKegbel->row(0)->waktu_a:''); ?>" required ></td>
	<td><textarea name='txtRPP_kegbel_metode_a' id='txtRPP_kegbel_metode_a' class="form-control" style='resize:none;' required ><?php //echo (isset($loadKegbel->row(0)->metode_a)?$loadKegbel->row(0)->metode_a:""); ?></textarea></td>
</tr>

<tr>
	<td align='center'>2</td>
	<td>
		a. Eksplorasi
		<textarea name='txtRPP_kegbel_eksplor' id='txtRPP_kegbel_eksplor' class="form-control" style='resize:none;' required ><?php //echo (isset($loadKegbel->row(0)->eksplor)?$loadKegbel->row(0)->eksplor:""); ?></textarea>
		b. Elaborasi
		<textarea name='txtRPP_kegbel_elabor' id='txtRPP_kegbel_elabor' class="form-control" style='resize:none;' required ><?php //echo (isset($loadKegbel->row(0)->elabor)?$loadKegbel->row(0)->elabor:""); ?></textarea>
		c. Konfirmasi
		<textarea name='txtRPP_kegbel_konfirm' id='txtRPP_kegbel_konfirm' class="form-control" style='resize:none;' required ><?php //echo (isset($loadKegbel->row(0)->konfirm)?$loadKegbel->row(0)->konfirm:""); ?></textarea>
	</td>
	<td><input name='txtRPP_kegbel_waktu_b' id='txtRPP_kegbel_waktu_b' type="number" class="form-control" min="0" value="<?php //echo (isset($loadKegbel->row(0)->waktu_b)?$loadKegbel->row(0)->waktu_b:""); ?>" required ></td>
	<td><textarea name='txtRPP_kegbel_metode_b' id='txtRPP_kegbel_metode_b' class="form-control" style='resize:none;' required ><?php //echo (isset($loadKegbel->row(0)->metode_b)?$loadKegbel->row(0)->metode_b:""); ?></textarea></td>
</tr>

<tr>
	<td align='center'>3</td>
	<td>
		Penutup
		<textarea name='txtRPP_kegbel_tutup' id='txtRPP_kegbel_tutup' class="form-control" style='resize:none;' required ><?php //echo (isset($loadKegbel->row(0)->penutup)?$loadKegbel->row(0)->penutup:""); ?></textarea>
	</td>
	<td><input name='txtRPP_kegbel_waktu_c' id='txtRPP_kegbel_waktu_c' type="number" class="form-control" value="<?php //echo (isset($loadKegbel->row(0)->waktu_c)?$loadKegbel->row(0)->waktu_c:""); ?>" min="0" required ></td>
	<td><textarea name='txtRPP_kegbel_metode_c' id='txtRPP_kegbel_metode_c' class="form-control" style='resize:none;' required ><?php //echo (isset($loadKegbel->row(0)->metode_c)?$loadKegbel->row(0)->metode_c:""); ?></textarea></td>
</tr>

<tr style='display: none;'>
	<td align='center'>4</td>
	<td>
		Tujuan
		<textarea name='txtRPP_kegbel_tujuan' id='txtRPP_kegbel_tujuan' class="form-control" style='resize:none;' ><?php //echo (isset($loadKegbel->row(0)->tujuan)?$loadKegbel->row(0)->tujuan:""); ?></textarea>
	</td>
	<td><input name='txtRPP_kegbel_waktu_d' id='txtRPP_kegbel_waktu_d' type="number" class="form-control" min="0" value="<?php //echo (isset($loadKegbel->row(0)->waktu_d)?$loadKegbel->row(0)->waktu_d:""); ?>"  ></td>
	<td><textarea name='txtRPP_kegbel_metode_d' id='txtRPP_kegbel_metode_d' class="form-control" style='resize:none;'  ><?php //echo (isset($loadKegbel->row(0)->metode_d)?$loadKegbel->row(0)->metode_d:""); ?></textarea></td>
</tr>

<tr>
	<td align='center' colspan='4'>
		<input type='submit' value='Simpan Kegiatan Pembelajaran' class='btn btn-warning form-control' id='btnSubmitRPP_kegbel' >
	</td>
</tr>

</table>

</form>

<table class="table table-bordered" style='background-color:#BCBCBC;' id='tbl_data_kegbel_rpp' >
<tr align='center'><td colspan='6' title='Preview Kegiatan Pembelajaran yang telah diinput' >Preview Kegiatan Pembelajaran yang telah diinput</td></tr>
<tr align='center'>
	<td width='50' >Pertemuan Ke.</td>
	<td width='50'>Jumlah Jam</td>
	<td>Kegiatan</td>
	<td width='50' >Waktu</td>
	<td>Metode</td>
	<td width='10%'>Hapus</td>
</tr>

<tbody id='tbl_rpp_kegbel' ></tbody>
</table>