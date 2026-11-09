<div class="header-popup">
	<b>Change Password</b>
</div>

<div class="isi-popup" >
	<div class="table-responsive">
		<form action="" method="POST" name="frmChangePass" id="frmChangePass" >
			<table class="table">
				<tr>
					<td align="left" width=15%>Username</td>
					<td align="left">
						<label><?php  echo $this->session->userdata('login_username'); ?></label>
						<input type="hidden" name="txtUsername" id="txtUsername" value="<?php  echo $this->session->userdata('login_username'); ?>" >
					</td>
				</tr>
				
				<tr>
					<td align="left">Current Password</td>
					<td align="left"><input type="password" name="txtCurPass" id="txtCurPass" required ></td>
				</tr>
				
				<tr>
					<td align="left">New Password</td>
					<td align="left"><input type="password" name="txtNewPass1" id="txtNewPass1" required ></td>
				</tr>
				
				<tr>
					<td align="left">Retype Password</td>
					<td align="left"><input type="password" name="txtNewPass2" id="txtNewPass2" required ></td>
				</tr>
				
				<tr>
					<td align="left"></td>
					<td align="left"><input type="submit" name="btnSubmit" id="btnSubmit" value="Change Password"  ></td>
				</tr>
				
				<tr>
					<td align="center" colspan="2" id="colKeterangan" style="color:red;" ></td>
				</tr>
				
			</table>
		</form>
	</div>
	
</div>