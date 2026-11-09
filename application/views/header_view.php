<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teacher Administration : <?php echo $this->session->userdata('login_username'); ?></title>
	
	<base href='<?php echo base_url(); ?>'/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap-3.3.4/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap-3.3.4/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/mystyle.css">
</head>

<body>

<div class="container-fluid">
	<div class="row" >
		<div class="col-md-12" style="padding:3px;background-color:#742E2C;" >
			<span class="header-text" style="font-size:25px;text-align:left;padding-left:10px;vertical-align:bottom;" >SEKOLAH TERPADU PAHOA </span>
			<span class="header-text header-desc" >&nbsp; - Teacher Administration System</span>
			
			<span class="header-text" style="right:10px;position:absolute;" >
				<img style="height:37px;" src="<?php echo base_url(); ?>image/guest.png"  >
			</span>
			
			<span class="header-username" style="cursor:pointer;">
				<div class="dropdown"  style="z-index:10000000000;" >
					<div class="dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
						<?php 
						echo " (" . $this->session->userdata('login_username') . ") ";
						echo $this->session->userdata('login_nama'); 
						?>
					<span class="caret"></span></div>
					<ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style="left:-10px;top:30px;">
					  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Change Pass</a></li>
					  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Change Pic</a></li>
					  <li role="presentation" class="divider"></li>
					  <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php/mainmenu/logout">Logout</a></li>
					</ul>
				</div>
			</span>
		</div>
		
	</div>
	
	
	<div class="row" >
		<div class="col-md-2 panel_setting_awal" style="padding:3px;background-color:#742E2C;" >
			<div class="leftmenu_hiasan" >
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading panel_setting_judul" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
					<h4 class="panel-title" >
						Master
					</h4>
				</div>
				<div id="collapse1" class="panel-collapse collapse in">
					<div class="panel-body panel_setting_subjudul">Tahun Ajaran</div>
					<div class="panel-body panel_setting_subjudul">Kelas</div>
					<div class="panel-body panel_setting_subjudul">Pelajaran</div>
					<div class="panel-body panel_setting_subjudul">User</div>
				</div>
			</div>
		
			<div class="panel panel-default">
				<div class="panel-heading panel_setting_judul" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
					<h4 class="panel-title" >
						Transaction
					</h4>
				</div>
				<div id="collapse2" class="panel-collapse collapse">
					<div class="panel-body panel_setting_subjudul">Setting Guru Mapel</div>
					<div class="panel-body panel_setting_subjudul">Prota</div>
					<div class="panel-body panel_setting_subjudul">Prosem</div>
					<div class="panel-body panel_setting_subjudul">Silabus</div>
					<div class="panel-body panel_setting_subjudul">RPP</div>
				</div>
			</div>
		
			<div class="panel panel-default">
				<div class="panel-heading panel_setting_judul" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
					<h4 class="panel-title" >
						Report
					</h4>
				</div>
				<div id="collapse3" class="panel-collapse collapse">
					<div class="panel-body panel_setting_subjudul">Report1</div>
					<div class="panel-body panel_setting_subjudul">Report2</div>
					<div class="panel-body panel_setting_subjudul">Report3</div>
					<div class="panel-body panel_setting_subjudul">Report4</div>
					<div class="panel-body panel_setting_subjudul">Report5</div>
					<div class="panel-body panel_setting_subjudul">Report6</div>
					<div class="panel-body panel_setting_subjudul">Report7</div>
					<div class="panel-body panel_setting_subjudul">Report1</div>
					<div class="panel-body panel_setting_subjudul">Report2</div>
					<div class="panel-body panel_setting_subjudul">Report3</div>
					<div class="panel-body panel_setting_subjudul">Report4</div>
					<div class="panel-body panel_setting_subjudul">Report5</div>
					<div class="panel-body panel_setting_subjudul">Report6</div>
					<div class="panel-body panel_setting_subjudul">Report7</div>
				</div>
			</div>
			
			<div class="leftmenu_hiasan" >
			</div>
		</div>
		
		<div class="col-md-10" style="padding:3px;text-align:center" >
			
		</div>
	</div>
		
</div>

</body>

</html>