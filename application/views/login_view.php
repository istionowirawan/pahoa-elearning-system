<?php
if($this->session->userdata('login_nama')) {
	echo "<script>window.location.href='index.php/mainmenu/home'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title ?></title>
	
	<base href='<?php echo base_url(); ?>'/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap-3.3.4/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap-3.3.4/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/mystyle.css">
</head>

<body>

<div class="wrapper">
   <img src="<?php echo base_url();?>image/banner_home.jpg" class="img-responsive ukuran-img" alt="Responsive image">
</div>

<div class="container-fluid" align="center">
	<br><br>
	<div class="row" >
		<div class="col-md-4 col-xs-0 col-sm-0"></div>
		<div class="col-md-4 col-xs-12 col-sm-12" style="text-align:center;" >
			<img src="<?php echo base_url();?>image/logo.png" width="10%" height="10%" style="min-height:100px;min-width:100px;" >
			<br><br>
			<div style='font-size:180%;' class='judul'>SEKOLAH TERPADU PAHOA</div>
			<div style='font-size:150%;' class='judul'><blink>PAHOA Elearning System</blink></div>
		</div>
		<div class="col-md-4 col-xs-0 col-sm-0"></div>
	</div>
	
	<div class="row" id="rcorners2" >
		<div class="col-md-4 col-xs-0 col-sm-0"></div>
		<div class="col-md-4 col-xs-12 col-sm-12" style="text-align:center;padding-top:5px;padding-left:5px;padding-right:5px;" >
			<form action="<?php echo base_url();?>index.php/login/cek_login" method="POST" >
				<div class="form-group has-feedback has-feedback-left">
					<input type="text" class="form-control" id="txtUsername" name="txtUsername" placeholder="Username PAHOA Elearning" required >
					<i class="form-control-feedback glyphicon glyphicon-user"></i>
				</div>
				<div class="form-group has-feedback has-feedback-left">
					<input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password PAHOA Elearning" required >
					<i class="form-control-feedback glyphicon glyphicon-lock"></i>
				</div>
				<button type="submit" class="btn btn-primary" style="width:100%;" >Login</button>
			</form>
		</div>
		<div class="col-md-4 col-xs-0 col-sm-0"></div>
	</div>
	
	<div class="row" >
		<div class="col-md-4" style="text-align:center;" ></div>
		
		<?php
		if(isset($ket_login)) {
			echo "<div class='col-md-4' style='text-align:center;padding-left:50px;padding-right:50px;' >";
				echo "<label id='txtKeteranganLogin' class='keteranganLogin' >Invalid Username or Password</label>";
			echo "</div>";
		} else {
		?>
			<div class="col-md-4" style="text-align:center;padding-top:20px;padding-left:50px;padding-right:50px;" >
				<label id="txtKeteranganLogin" class="keteranganLogin" ></label>
			</div>
		<?php
		}
		?>
		
		<div class="col-md-4" style="text-align:center;" >
		</div>
	</div>
	
</div>


</body>

</html>