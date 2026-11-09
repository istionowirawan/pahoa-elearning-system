<!DOCTYPE html>
<html lang="en">
<?php
if(!$this->session->userdata('login_nama')) {
	echo "<script>window.location.href='back_to_login'</script>";
}
?>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Elearning : <?php echo $this->session->userdata('login_nama'); ?></title>
	
	<base href='<?php echo base_url(); ?>'/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap-3.3.4/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap-3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/mystyle.css">
	
	<link href="<?php echo base_url(); ?>jquery_ui/jquery-ui.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>jquery_ui/external/jquery/jquery.js"></script>
	<script src="<?php echo base_url(); ?>jquery_ui/jquery-ui.js"></script>
	<script src="<?php echo base_url(); ?>tinymce/js/tinymce/tinymce.min.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		//menu report ke closing MG05177 //report -> pencarian barang //31-3-2015
		
		//CHANGE PASSWORD =============================================
		$("#idChangePass").click(function() {
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/change_pass", function() {
				$("#frmChangePass").submit(function() {
					var passCur = $("#txtCurPass").val();
					var passSession = "<?php echo $this->session->userdata('login_password'); ?>";
					//alert($("#txtCurPass").val() + " === " + passSession);
					
					if(passCur==passSession) {
						if($("#txtNewPass1").val()==$("#txtNewPass2").val()) {
							$("#colKeterangan").text("");
							$.post("index.php/mainmenu/update_pass/", {
								txtUsername:$("#txtUsername").val(),
								txtNewpass:$("#txtNewPass1").val()
							}, function(data, status) {
								$("#colKeterangan").text(data);
								
								$("#txtUsername").val("");
								$("#txtCurPass").val("");
								$("#txtNewPass1").val("");
								$("#txtNewPass2").val("");
							}); 
							
						} else {
							$("#colKeterangan").text("Password doesn't match");
						}
						
					} else {
						$("#colKeterangan").text("Invalid or wrong old password");
					}
					
					return false;
				});
			});
		});
		//END CHANGE PASSWORD =============================================
		
		
		//CHANGE PICTURE
		//call_change_pic();
		$("#idChangePic").click(call_change_pic);
		function call_change_pic() {
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/profile_change_pic", function() {
				$("#txtImg").hide();
				$("#btnChangePic").click(function() {
					$("#txtImg").click();
					$("#txtImg").change(function(event) {
						var files;
						var ext = $('#txtImg').val().split('.').pop().toLowerCase();
						if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
							alert('invalid extension! This is not an image!');
						} else {
							//files = document.getElementById("txtImg").files;
							//var myFile = files[0];
							//alert(myFile);
							
							files = $("#frmChangePass").serialize();
							files += "&txtFiles=" + event.target.files[0];
							
							var myFileName = event.target.files[0].name;
							var myFileSize = event.target.files[0].size;
							var myFileType = event.target.files[0].type;
							
							//alert("FileName: " + myFileName + "- FileSize: " + myFileSize + " - FileType: " + myFileType);
							if(myFileType=="image/jpg" || myFileType=="image/jpeg") {
								if(myFileSize>500000) {
									alert("Foto terlalu besar (kegedean), cari foto yang lain aja yang lebih kecil size nya (MAX 500KB)");
								} else {
									$("#frmChangePass").submit();
								}
							} else {
								alert("Mohon maaf, saya hanya menerima foto dalam bentuk JPG");
							}
							
							
							/*
							var formData = new FormData();
							formData.append('theFile', event.target.files[0]);
							
							var xhr = new XMLHttpRequest();
							xhr.open("post", 'index.php/mainmenu/profile_change_pic_do/');
							xhr.send(formData);
							alert(xhr);
							
							
							$.ajax({
								type: "POST",
								url: "index.php/mainmenu/profile_change_pic_do/",
								data: files,
								success: function(data, status) {
									alert(data);
								}
							});
							*/
							
						}
						
						
					});
					
					
					return false;
				});
			});
		}
		//END CHANGE PICTURE
		
		
		call_trx_feed();
		
		
		//TRX FEED
		$("#idFeedInfo").click(function() {
			call_trx_feed();
		});
		//$("#idChangePic").click(call_change_pic);
		function call_trx_feed() {
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/profile_feed", function() {
				
				$("#txtFeed").keyup(function(){
					$("#lblCharLeft").html("Characters left: " + (500 - $(this).val().length));
				});
				
				$("#frmFeed").submit(function() {
					//alert($(this).serialize());
					var datastring = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "index.php/mainmenu/insert_feed/",
						data: datastring,
						success: function(data, status) {
							//alert("Feed berhasil di simpan");
							call_trx_feed();
						}
					});
						
					return false;
				});
				
				$(".frmFeedReply").submit(function() {
					var idFeed = ($(this).attr("alt"));
					var dataStr = $(this).serialize();
					//dataStr += "&feed_id="+idFeed;
					
					$.ajax({
						type: "POST",
						url: "index.php/mainmenu/insert_feed_reply/",
						data: dataStr,
						success: function(data, status) {
							//alert("Feed reply berhasil di simpan" + data);
							call_trx_feed();
						}
					});
					
					return false;
				});
				
				$(".delete_post").click(function() {
					//alert($(this).attr("alt"));
					var idhapus='idhapus='+$(this).attr("alt");
					
					$.ajax({
						type: "POST",
						url: "index.php/mainmenu/hapus_feed/",
						data: idhapus,
						success: function(data, status) {
							call_trx_feed();
						}
					});
					
				});
				
				$(".delete_reply").click(function() {
					//alert($(this).attr("alt"));
					var idhapus='idhapus='+$(this).attr("alt");
					$.ajax({
						type: "POST",
						url: "index.php/mainmenu/hapus_feed_reply/",
						data: idhapus,
						success: function(data, status) {
							call_trx_feed();
						}
					});
					
				});
				
				
			});
		}
		//END TRX FEED
		
		
		
		//Menu Master Tahun Ajaran =============================================
		$("#msTahunAjaran").click(function() {
			$( ".panel_setting_subjudul" ).removeClass( "mn_active" );
			$(this).addClass("mn_active");
			
			call_tahun_ajaran("awal");
		});
		function call_tahun_ajaran($stat) {
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/ms_tahunajaran", function() {
				if($stat=="refresh") {
					$("#infoTahunAjaran").show();
				} else {
					$("#infoTahunAjaran").hide();
				}
				$(".btn").click(function() {
					var idThnAjr = $(this).attr("title");
					
					$.post("index.php/mainmenu/update_thn_ajr/", {
						ThnAjrID:idThnAjr
					}, function(data, status) {
						if(status=="success") {
							$("#leftmenu_top").load("index.php/mainmenu/refresh_session_leftmenu");
							call_tahun_ajaran("refresh");
						}
					}); 
				});
			});
		}
		//END Menu Master Tahun Ajaran =============================================
		
		
		//Menu Master Kelas =============================================
		$("#msKelas").click(call_mst_kelas);
		function call_mst_kelas() {
			$( ".panel_setting_subjudul" ).removeClass( "mn_active" );
			$(this).addClass("mn_active");
			
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/ms_kelas", function() {
				$("#infoKelas").hide();
				
				$("#btnAddNewKelas").click(function() {
					$("#btnAddNewKelas").hide();
					$("#btnCancelNewKelas").show();
					$("#frmInputNewKelas").show('fast');
				});
				$("#btnCancelNewKelas").click(function() {
					$("#btnAddNewKelas").show();
					$("#btnCancelNewKelas").hide();
					$("#frmInputNewKelas").hide('fast');
				});
				
				$("#frmInputNewKelas").submit(function() {
					
					$.post("index.php/mainmenu/insert_kelas/", {
						inputKelas:$("#inputKelas").val()
					}, function(data, status) {
						//alert(data);
						$("#infoMsgBox").show(1,function(){
							$("#infoMsgBox").text("Class has been added");
							$("#infoMsgBox").hide(5000);
							call_mst_kelas();
						});
					}); 
					return false;
				});
				
			});
		}
		//END Menu Master Kelas =============================================
		
		
		
		//Menu Master Pelajaran =============================================
		$("#msPelajaran").click(call_mst_pelajaran);
		function call_mst_pelajaran() {
			$( ".panel_setting_subjudul" ).removeClass( "mn_active" );
			$(this).addClass("mn_active");
			
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/ms_pelajaran", function() {
				$("#infoKelas").hide();
				
				$(".btnEditMapel").click(function() {
					var idMapelEdit = $(this).attr("alt");
						
					if($(this).val()=="Edit") {
						$("#txtMapel"+idMapelEdit).attr("type","text");
						$("#lblMapel"+idMapelEdit).hide();
						$("#brs"+idMapelEdit).attr("bgcolor","yellow");
						$("#txtMapel"+idMapelEdit).focus();
						
						$(this).attr("value","Update");
						$(this).attr("title","Update this record");
						$(this).css("background-color","red");
					} else {
						//save
						$.post("index.php/mainmenu/update_mapel/", {
							idMapel:idMapelEdit,
							namaMapel:$("#txtMapel"+idMapelEdit).val()
						}, function(data, status) {
							$("#lblMapel"+idMapelEdit).text($("#txtMapel"+idMapelEdit).val());
							$("#txtMapel"+idMapelEdit).attr("type","hidden");
							$("#lblMapel"+idMapelEdit).show();
							$("#brs"+idMapelEdit).attr("bgcolor","white");
							
							$("#infoMsgBox").show(1,function(){
								$("#infoMsgBox").text("Update Success");
								$("#infoMsgBox").hide(5000);
							});
						}); 
						
						$(this).attr("value","Edit");
						$(this).attr("title","Edit Mapel");
						$(this).css("background-color","#337AB7");
					}
					return false;
				});
				
				$("#btnAddNewPelajaran").click(function() {
					$("#btnAddNewPelajaran").hide();
					$("#btnCancelNewPelajaran").show();
					$("#frmInputNewPelajaran").show('fast');
				});
				$("#btnCancelNewPelajaran").click(function() {
					$("#btnAddNewPelajaran").show();
					$("#btnCancelNewPelajaran").hide();
					$("#frmInputNewPelajaran").hide('fast');
				});
				$("#frmInputNewPelajaran").submit(function() {
					
					$.post("index.php/mainmenu/insert_mapel/", {
						namaMapel:$("#inputNamaMapel").val()
					}, function(data, status) {
						//alert(data);
						$("#infoMsgBox").show(1,function(){
							$("#infoMsgBox").text("New pelajaran has been added");
							$("#infoMsgBox").hide(5000);
							call_mst_pelajaran();
						});
					}); 
					return false;
				});
				
				return false;
			});
		}
		//END Menu Master Kelas =============================================
		
		
		
		//Menu Master User =============================================
		$("#msUser").click(call_mst_user);
		function call_mst_user(hal) {
			$( ".panel_setting_subjudul" ).removeClass( "mn_active" );
			$(this).addClass("mn_active");
			
			if(hal.type===undefined) {
				hal = hal;
			} else {
				hal = 1;
			}
			var usernameValid=true;
			
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/ms_user/"+hal, function() {
				$("#infoKelas").hide();
				
				//paging
				$(".linkpage li").click(function() {
					//alert($(this).val());
					var halTarget = hal;
					if($(this).val()==-9999) {
						if(halTarget>1) {
							halTarget-=1;
						} 
					} else if ($(this).val()==9999) {
						if(halTarget<$("#txtTotPage").val()) {
							halTarget+=1;
						}
					} else {
						halTarget = $(this).val();
					} 
					//alert(halTarget);
					call_mst_user(halTarget);
					
					return false;
				});
				
				$(".btnUseractive").click(function() {
					var idUser = $(this).attr("id");
					var statUser = $(this).attr("alt");
					
					//alert("id user : " + idUser + " active : " + statUser);
					$.post("index.php/mainmenu/update_status_user/", {
						userid:idUser,
						userstatus:statUser
					}, function(data, status) {
						//alert(status);
						if(status=="success") {
							call_mst_user();
						}
					}); 
					
					return false;
				});
				
				$("#btnAddNewUser").click(function() {
					$("#btnAddNewUser").hide();
					$("#btnCancelNewUser").show();
					$("#frmInputNewUser").show('fast');
					$("#inputUsername").focus();
				});
				$("#btnCancelNewUser").click(function() {
					$("#btnAddNewUser").show();
					$("#btnCancelNewUser").hide();
					$("#frmInputNewUser").hide('fast');
				});
				
				
				$("#frmInputNewUser").submit(function() {
					if(usernameValid==true) {
						$.post("index.php/mainmenu/insert_user/", {
							inputUsername:$("#inputUsername").val(),
							inputPassword:$("#inputPassword").val(),
							inputNama:$("#inputNamaLengkap").val(),
							inputJabatan:$("#inputJabatan").val()
						}, function(data, status) {
							//alert(data);
							$("#infoMsgBox").show(1,function(){
								$("#infoMsgBox").text("New user has been created");
								$("#infoMsgBox").hide(5000);
								call_mst_user();
							});
						}); 
					}
					return false;
				});
				
				$("#inputUsername").blur(function() {
					var salah=0;
					for(var a=0; a<arUsername.length; a++) {
						if(arUsername[a]==$("#inputUsername").val()) {
							usernameValid=false;
							$("#ketUsernameValid").css('color','red');
							$("#ketUsernameValid").text(" Username is not available");
							salah++;
						}
					}
					if(salah==0) {
						usernameValid=true;
						$("#ketUsernameValid").css('color','green');
						$("#ketUsernameValid").text(" Username is Available");
					}
				});
				
			});
		}
		//END Menu Master User =============================================
		
		
		
		
		
		//Menu Trx Setting Guru Mapel =============================================
		$("#trxSettingGuruMapel").click(call_trx_setting_gurumapel);
		function call_trx_setting_gurumapel() {
			$( ".panel_setting_subjudul" ).removeClass( "mn_active" );
			$("#trxSettingGuruMapel").addClass("mn_active");
			
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/trx_setting_gurumapel", function() {
				$("#btnAddNewSetMapel").click(function() {
					$("#btnAddNewSetMapel").hide();
					$("#btnCancelNewSetMapel").show();
					$("#frmInputNewSetMapel").show('fast');
					$("#setMapel_nik").focus();
				});
				$("#btnCancelNewSetMapel").click(function() {
					$("#btnAddNewSetMapel").show();
					$("#btnCancelNewSetMapel").hide();
					$("#frmInputNewSetMapel").hide('fast');
				});
				
				
				//alert(arDataUser.length);
				$( "#setMapel_nik" ).autocomplete({
					minLength: 1,
					source: arDataUser,
					focus: function( event, ui ) {
						$( "#setMapel_nik" ).val( ui.item.desc );
						return false;
					},
					select: function( event, ui ) {
						$( "#setMapel_nik" ).val( ui.item.desc );
						$( "#setMapel_nama" ).val( ui.item.label );
						$( "#setMapel_nama2" ).val( ui.item.label );
						$( "#setMapel_id" ).val( ui.item.value );
						//$( "#project-icon" ).attr( "src", "images/" + ui.item.icon );
						return false;
					},
					response: function(event, ui) {
						//alert(ui.content.length);
						if (ui.content.length === 0) {
							$( "#setMapel_nama" ).val("");
							$( "#setMapel_nik" ).val("");
						} else {
							
						}
					}
				})
				.autocomplete( "instance" )._renderItem = function( ul, item ) {
					return $( "<li>" )
					.append( "<a>" + item.desc + " " + item.label + "</a>" )
					.appendTo( ul );
				};
				
				$("#frmInputNewSetMapel").submit(function() {
					var allClasses = [];
					$("#divSetmapel_kelas :checked").each(function() {
						allClasses.push($(this).val());
					});
					
					$.post("index.php/mainmenu/insert_set_guru_mapel/", {
						setMapel_userid:$("#setMapel_id").val(),
						setMapel_usernik:$("#setMapel_nik").val(),
						setMapel_usernama:$("#setMapel_nama").val(),
						setMapel_kelas:allClasses,
						setMapel_pelajaran:$("#setMapel_pelajaran").val()
					}, function(data, status) {
						//alert(data + " ==> " + status);
						if(status=="success") {
							$("#infoMsgBox").show(1,function(){
								$("#infoMsgBox").text("Setting Mapel Guru has been saved");
								$("#infoMsgBox").hide(5000);
								call_trx_setting_gurumapel();
							});
						}
					}); 
					return false;
				});
				
				$(".btnDeleteTrxMapel").click(function() {
					//alert($(this).attr("alt"));
					if (confirm("Are you sure want to delete this record?")) {
						$.post("index.php/mainmenu/delete_set_guru_mapel/", {
							idrecord:$(this).attr("alt")
						}, function(data, status) {
							//alert(data + " ==> " + status);
							if(status=="success") {
								$("#infoMsgBox").show(1,function(){
									$("#infoMsgBox").text("Delete Success!!!");
									$("#infoMsgBox").hide(5000);
									call_trx_setting_gurumapel();
								});
							}
						});
					}
					return false;
				});
				
				// Link to open the dialog
				$( ".kelasampuh_detail" ).click(function( event ) {
					$("#dialog_content" ).dialog( "open" );
					$("#dialog_content" ).attr( "option", "title", "Detail Kelas" );
					
					var almTujuan = "index.php/mainmenu/detail_set_gurumapel/"+$(this).attr("alt");
					$("#dialog_content").load(almTujuan);
					
					event.preventDefault();
				});
				
			});
		}
		//END Trx Setting Guru Mapel =============================================
		
		
		
		
		//Menu Trx Setting SK KD =============================================
		//call_trx_setting_skkd();
		$("#trxSettingSkKd").click(call_trx_setting_skkd);
		function call_trx_setting_skkd() {
			$( ".panel_setting_subjudul" ).removeClass( "mn_active" );
			$("#trxSettingSkKd").addClass("mn_active");
			
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/trx_peta_skkd", function() {
				$("#setSKKD_mapel").change(function() {
					//alert("ID : " + $('option:selected', this).attr('alt'));
					var almTujuan = "index.php/mainmenu/cari_kelas_based_mapel/"+$('option:selected', this).attr('alt');
					$("#div_setSKKD_kelas").load(almTujuan);
				});
				
				var btnInputClick = "";
				$(".btnFrmSKKD").click(function() {
					btnInputClick = $(this).val();
				});
				
				$("#frmSetSKKD").submit(function () {
					if(btnInputClick=="Input SK") {
						call_trx_setting_skkd_input($("#setSKKD_mapel").val(),$("#setSKKD_kelas").val());
					} else {
						call_trx_setting_kd_input($("#setSKKD_mapel").val(),$("#setSKKD_kelas").val());
					}
					return false;
				});
				
				
			});
			
		}
		
		//call_trx_setting_skkd_input(40,1);
		function call_trx_setting_skkd_input(mapel_skkd,kelas_skkd) {
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/lihat_detail_trx_skkd/"+mapel_skkd+"/"+kelas_skkd, function() {
				tinyMCE.editors=[];
				tinymce.init({
					selector: "#txtDescSK_input",
					plugins: [
						"advlist autolink lists link image charmap print preview anchor",
						"searchreplace visualblocks code fullscreen",
						"insertdatetime media table contextmenu paste"
					],
					toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
				});
				
				
				$("#btnBackSetSKKD").click(function() {
					location.reload();
					call_trx_setting_skkd();
				});
				
				$(".divTxtDescSK").hide();
				$("#pilihSK_mapel").change(function() {
					if($('option:selected', this).attr('alt')=="") {
						$(".divTxtDescSK").hide();
					} else {
						$(".divTxtDescSK").hide();
						$.post("index.php/mainmenu/cari_sk_sudah_input/", {
							txtMapelSK:$("#txtMapelSK_input").val(),
							txtKelasSK:$("#txtKelasSK_input").val(),
							txtNomorSK:$("#pilihSK_mapel").val()
						}, function(data, status) {
							if(status=="success") {
								if(data=="") {
									tinymce.activeEditor.setContent(data, {format : 'raw'});
									$("#btnSimpanSK_input").val("Simpan Standart Kompetensi");
									$(".divTxtDescSK").show();
								} else {
									tinymce.activeEditor.setContent(data, {format : 'raw'});
									$("#btnSimpanSK_input").val("Update Standar Kompetensi");
									$(".divTxtDescSK").show();
								}
							}
						});
						
					}
					//alert("ID : " + $('option:selected', this).attr('alt'));
					//var almTujuan = "index.php/mainmenu/cari_kelas_based_mapel/"+$('option:selected', this).attr('alt');
					//$("#div_setSKKD_kelas").load(almTujuan);
				});
				
				$("#frmSetSKKD_input").submit(function() {
					if($("#txtDescSK_input").val()=="") {
						alert("Standart Kompetensi masih kosong");
					} else {
						if($("#btnSimpanSK_input").val()=="Simpan Standart Kompetensi") {
						
							$.post("index.php/mainmenu/insert_sk/", {
								txtMapelSK:$("#txtMapelSK_input").val(),
								txtKelasSK:$("#txtKelasSK_input").val(),
								txtNomorSK:$("#pilihSK_mapel").val(),
								txtDescSK:$("#txtDescSK_input").val()
							}, function(data, status) {
								//alert("Save SK : " + data);
								$("#infoMsgBox").show(1,function(){
									$("#infoMsgBox").text("New SK has been inserted");
									$("#infoMsgBox").hide(5000);
									location.reload();
									call_trx_setting_skkd();
								});
							});
							
						} else {
							
							$.post("index.php/mainmenu/update_sk/", {
								txtMapelSK:$("#txtMapelSK_input").val(),
								txtKelasSK:$("#txtKelasSK_input").val(),
								txtNomorSK:$("#pilihSK_mapel").val(),
								txtDescSK:$("#txtDescSK_input").val()
							}, function(data, status) {
								$("#infoMsgBox").show(1,function(){
									$("#infoMsgBox").text("SK has been updated");
									$("#infoMsgBox").hide(5000);
									location.reload();
									call_trx_setting_skkd();
								});
							});
							
						}
					}
					return false;
				});
			});
		}
		
		//call_trx_setting_kd_input(40,1);
		function call_trx_setting_kd_input(mapel_skkd,kelas_skkd) {
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/lihat_detail_trx_kd/"+mapel_skkd+"/"+kelas_skkd, function() {
				tinyMCE.editors=[];
				tinymce.init({
					selector: ".text-panjang",
					plugins: [
						"advlist autolink lists link image charmap print preview anchor",
						"searchreplace visualblocks code fullscreen",
						"insertdatetime media table contextmenu paste"
					],
					toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
				});
				
				$("#setkd_sk_desc").hide();
				var sk_dipilih = "";
				$("#setkd_pilih_sk").change(function() {
					sk_dipilih = $('option:selected', this).attr('alt');
					if(sk_dipilih!="") {
						$("#setkd_sk_desc").load("<?php echo base_url(); ?>index.php/mainmenu/cari_sk_desc/"+sk_dipilih, function() {
							$("#setkd_sk_desc").show();
							
							hapusTextBox_indi();
							buatTextBox_indi();
							$("#setkd_kd option[value='']").attr('selected','selected');
							$("#setkd_desc").val('');
							$("#setkd_ranah_kd option[value='']").attr('selected','selected');
							$("#setkd_materi_pokok").val('');
							$("#setkd_ruanglingkup option[value='']").attr('selected','selected');
							
							$("#setkd_btnsimpan").val("Simpan Kompetensi Dasar");
						});
					} else {
						$("#setkd_sk_desc").load("");
					}
				});
				
				var nomorIndiCapai=0;
				$(".setkd_div_desc").hide();
				$("#setkd_kd").change(function() {
					var kd_dipilih = $('option:selected', this).attr('alt');
					buatTextBox_indi();
					
					$.post("index.php/mainmenu/cari_kd_detail/", {
						setkd_pilih_sk:$("#setkd_pilih_sk").val(),
						setkd_kd:$("#setkd_kd").val()
					}, function(status) {
						//alert(status);
						var obj = jQuery.parseJSON( status );
						//var obj = jQuery.parseJSON( data );
						if(obj.length>0) {
							//isi awal
							$("#setkd_pilih_id").val(obj[0].id);
							$("#setkd_desc").val(obj[0].kd_detail);
							$('#setkd_ranah_kd option[value='+obj[0].ranah_kd+']').attr('selected','selected');
							$("#setkd_materi_pokok").val(obj[0].materi_pokok);
							$('#setkd_ruanglingkup option[value='+obj[0].ruang_lingkup+']').attr('selected','selected');
							$('#setkd_semester option[value='+obj[0].semester+']').attr('selected','selected');
							
							//detail
							hapusTextBox_indi();
							for (var a=0; a<obj.length; a++) {
								buatTextBox_indi();
								var aa=a+1;
								$("#setkd_indi_id"+aa).val(obj[a].no_indi)
								$("#setkd_indi_desc"+aa).val(obj[a].desc_indi);
								$('#setkd_ranahpk'+aa+' option[value='+obj[a].ranah_indi+']').attr('selected','selected');
							}
							
							$("#setkd_btnsimpan").val("Update Kompetensi Dasar");
						} else {
							hapusTextBox_indi();
							buatTextBox_indi();
							$("#setkd_desc").val('');
							$("#setkd_ranah_kd option[value='']").attr('selected','selected');
							$("#setkd_materi_pokok").val('');
							$("#setkd_ruanglingkup option[value='']").attr('selected','selected');
							
							$("#setkd_btnsimpan").val("Simpan Kompetensi Dasar");
							
						}
					});
					
					
					$(".setkd_div_desc").show();
				});
				
				function hapusTextBox_indi() {
					while(nomorIndiCapai > 0) {
						$("#row_indi_capai"+nomorIndiCapai).remove();
						nomorIndiCapai--;
					}
				}
				function buatTextBox_indi() {
					nomorIndiCapai++;
					
					var hasil = "<tr id='row_indi_capai"+nomorIndiCapai+"'>";
					hasil += "<td align='center'>"+nomorIndiCapai+"<input type='hidden' name='setkd_indi_id[]' id='setkd_indi_id"+nomorIndiCapai+"' value='"+nomorIndiCapai+"' ></td>";
					hasil += "<td style='width:75%'><textarea id='setkd_indi_desc"+nomorIndiCapai+"' name='setkd_indi_desc[]' class='form-control' style='resize:none;' required ></textarea></td>";
					hasil += "<td style='width:25%'>";
					hasil += "<select id='setkd_ranahpk"+nomorIndiCapai+"' name='setkd_ranahpk[]' class='form-control' required >";
					hasil += "<option value='C1'>C1 - Pengetahuan / Mengingat</option>";
					hasil += "<option value='C2'>C2 - Pemahaman</option>";
					hasil += "<option value='C3'>C3 - Penerapan</option>";
					hasil += "<option value='C4'>C4 - Analisis</option>";
					hasil += "<option value='C5'>C5 - Sintesis</option>";
					hasil += "<option value='C6'>C6 - Penilaian</option>";
					hasil += "<option value='P1'>P1 - Peniruan</option>";
					hasil += "<option value='P2'>P2 - Manipulasi</option>";
					hasil += "<option value='P3'>P3 - Pengalamiahan</option>";
					hasil += "<option value='P4'>P4 - Artikulasi</option>";
					hasil += "</select>";
					hasil += "</td>";
					hasil += "</tr>";
					
					$("#tbl_indi_capai").append(hasil);
				}
				
				$("#btn_indi_capai_add").click(function() {
					buatTextBox_indi();
					return false;
				});
				
				$("#btn_indi_capai_kurang").click(function() {
					if(nomorIndiCapai>1) {
						$("#row_indi_capai"+nomorIndiCapai).remove();
						nomorIndiCapai--;
					}
					return false;
				});
				
				
				$("#frm_setkd").submit(function(event) {
					if($("#setkd_btnsimpan").val()=="Simpan Kompetensi Dasar") {
						
						var datastring = $(this).serialize();
						$.ajax({
							type: "POST",
							url: "index.php/mainmenu/insert_kd/",
							data: datastring,
							success: function(data, status) {
								alert("KD berhasil di simpan");
								$("#infoMsgBox").text("New KD has been inserted");
								$("#infoMsgBox").hide(5000);
								location.reload();
								call_trx_setting_skkd();
							}
						});
						
					} else {
						
						var datastringUpdate = $(this).serialize();
						$.ajax({
							type: "POST",
							url: "index.php/mainmenu/update_kd/",
							data: datastringUpdate,
							success: function(data, status) {
								alert("KD berhasil di update");
								$("#infoMsgBox").text("New KD has been updated");
								$("#infoMsgBox").hide(5000);
								location.reload();
								call_trx_setting_skkd();
							}
						});
						
					}
					return false;
					
				});
				
				$("#btnBackSetSKKD").click(function() {
					location.reload();
					call_trx_setting_skkd();
				});
			});
		}
		//END Menu Trx Setting SK KD =============================================
		
		
		
		//Menu Trx Setting Prota =============================================
		//call_trx_setting_prota();
		$("#trxSettingProta").click(call_trx_setting_prota);
		function call_trx_setting_prota() {
			$( ".panel_setting_subjudul" ).removeClass( "mn_active" );
			$("#trxSettingProta").addClass("mn_active");
			
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/show_prota_page/", function() {
				$("#setSKKD_mapel").change(function() {
					//alert("ID : " + $('option:selected', this).attr('alt'));
					var almTujuan = "index.php/mainmenu/cari_kelas_based_mapel/"+$('option:selected', this).attr('alt');
					$("#div_setSKKD_kelas").load(almTujuan);
				});
				
				$("#frmSetProta").submit(function() {
					call_trx_setting_prota_input($("#setSKKD_mapel").val(),$("#setSKKD_kelas").val());
					return false;
				});
			});
		}
		
		//call_trx_setting_prota_input(40,1);
		function call_trx_setting_prota_input(mapel_skkd,kelas_skkd) {
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/show_prota_detail/"+mapel_skkd+"/"+kelas_skkd, function(data) {
				$("#btnBackSetProta").click(function() {
					location.reload();
					call_trx_setting_prota();
				});
				
				$("#frmSetProta_input").submit(function() {
					$("#txtJmlSK").val(jmlSK);
					
					var adaSalah=0;
					for(var a=0; a<arNoSK.length; a++) {
						//alert(arNoSK[a]);txtChxSms_SK
						if($("#check_SK"+arNoSK[a]).attr("alt")=="tm_salah") {
							adaSalah++;
						}
					}
					
					if(adaSalah==0) {
						var protaInsertString = $(this).serialize();
							
						if($("#btnSimpanProta_input").val()=="Simpan Prota") {
						
							$.ajax({
								type: "POST",
								url: "index.php/mainmenu/insert_prota/",
								data: protaInsertString,
								success: function(data, status) {
									alert("Prota berhasil disimpan ");
									//$("#infoMsgBox").text("Prota Berhasil Disimpan");
									//$("#infoMsgBox").hide(5000);
									//location.reload();
									call_trx_setting_prota();
								}
							});
							
						} else {
							
							$.ajax({
								type: "POST",
								url: "index.php/mainmenu/update_prota/",
								data: protaInsertString,
								success: function(data, status) {
									alert("Prota berhasil diupdate");
									//$("#infoMsgBox").text("Prota Berhasil Diupdate");
									//$("#infoMsgBox").hide(5000);
									//location.reload();
									call_trx_setting_prota();
								}
							});
							
							
						} 
					} else {
						alert("Pengisian Jumlah Tatap Muka Belum Valid Semua!!!");
					}
					return false;
				});
				
			});
		}
		//END Menu Trx Setting Prota =============================================
		
		
		
		//Menu Trx Setting Prosem =============================================
		//call_trx_setting_prosem();
		$("#trxSettingProsem").click(call_trx_setting_prosem);
		function call_trx_setting_prosem() {
			$( ".panel_setting_subjudul" ).removeClass( "mn_active" );
			$("#trxSettingProsem").addClass("mn_active");
			
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/show_prosem_page/", function() {
				$("#setSKKD_mapel").change(function() {
					//alert("ID : " + $('option:selected', this).attr('alt'));
					var almTujuan = "index.php/mainmenu/cari_kelas_based_mapel_prosem/"+$('option:selected', this).attr('alt');
					$("#div_setSKKD_kelas").load(almTujuan);
				});
				
				$("#frmSetProsem").submit(function() {
					call_trx_setting_prosem_input($("#setSKKD_mapel").val(),$("#setProsem_kelas").val());
					return false;
				});
			});
		}
		
		function call_trx_setting_prosem_input(mapel_skkd,kelas_skkd) {
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/show_prosem_detail/"+mapel_skkd+"/"+kelas_skkd, function(data) {
				$("#btnBackSetProsem").click(function() {
					location.reload();
					call_trx_setting_prosem();
				});
				
				$("#txtPilihSms").change(function() {
					
					$("#divprosem_input_detail").load("<?php echo base_url(); ?>index.php/mainmenu/show_prosem_detail_sms/"+mapel_skkd+"/"+kelas_skkd+"/"+$(this).val(), function(data) {
						showhide_textbox_week("hide");
						
						$("#cbProsem_bulan").change(function() {
							
							if($(this).val()==""){
								showhide_textbox_week("hide");
							} else {
								showhide_textbox_week("show");
								
								var idMapel=$("#txtMapelProsem_input").val();
								var idKelas=$("#txtKelasProsem_input").val();
								var idSms=$("#txtPilihSms").val();
								var idBln=$("#cbProsem_bulan").val();
								
								//alert("mapel : " + idMapel + " kelas : " + idKelas + " sms : " + idSms + " bulan : " + idBln);
								//data bulan dan minggu efektif belajar (regular)
								$.post("index.php/mainmenu/tampil_isi_prosem/", {
									mapelID:idMapel,
									kelasID:idKelas,
									smsID:idSms,
									blnID:idBln
								}, function(data, status) {
									//alert(data);
									var obj = jQuery.parseJSON( data );
									
									if(obj.length>0) {
										$("#txtProsemMs_id").val(obj[0].id_ms_prosem);
										for(var a=0; a< arIdSKKD_per_week.length; a++) {
											for(var c=0; c < obj.length; c++) {
												var weekNo = (a%5)+1;
												var kataGab = "sk"+obj[c].sk_no+"kd"+obj[c].kd_no+"mg"+weekNo;
												//alert(arIdSKKD_per_week[a] + " <==> " + kataGab + " Week : " + weekNo);
												
												if(arIdSKKD_per_week[a]==kataGab) {
													
													if(weekNo==1) { 
														$("#"+arIdSKKD_per_week[a]).val(obj[c].week1);
													} else if (weekNo==2) {
														$("#"+arIdSKKD_per_week[a]).val(obj[c].week2);
													} else if (weekNo==3) {
														$("#"+arIdSKKD_per_week[a]).val(obj[c].week3);
													} else if (weekNo==4) {
														$("#"+arIdSKKD_per_week[a]).val(obj[c].week4);
													} else if (weekNo==5) {
														$("#"+arIdSKKD_per_week[a]).val(obj[c].week5);
													}
													break;
												}
												
											}
										}
										hitungTM_awal();
										$("#btnSimpanProsem_input").val("Update Prosem");
									} else {
										for(var d=0; d< arIdSKKD_per_week.length; d++) {
											$("#"+arIdSKKD_per_week[d]).val(0);
										}
										$("#txtProsemMs_id").val(-1);
										$("#btnSimpanProsem_input").val("Simpan Prosem");
									}
									
								});
								
								//data bulan dan minggu efektif belajar (Uji Kompetensi)
								$.post("index.php/mainmenu/tampil_uji_prosem/", {
									mapelID:idMapel,
									kelasID:idKelas,
									smsID:idSms,
									blnID:idBln
								}, function(data, status) {
									var obj = jQuery.parseJSON( data );
									
									if(obj.length>0) {
										for(var a=0; a< arIdUK_per_week.length; a++) {
											for(var c=0; c < obj.length; c++) {
												var weekNo = (a%5)+1;
												var kataGab = "uji_sk"+obj[c].sk_no+"kd"+obj[c].kd_no+"mg"+weekNo;
												//alert(arIdUK_per_week[a] + " <==> " + kataGab + " Week : " + weekNo);
												
												if(arIdUK_per_week[a]==kataGab) {
													
													if(weekNo==1) { 
														$("#"+arIdUK_per_week[a]).val(obj[c].week1);
													} else if (weekNo==2) {
														$("#"+arIdUK_per_week[a]).val(obj[c].week2);
													} else if (weekNo==3) {
														$("#"+arIdUK_per_week[a]).val(obj[c].week3);
													} else if (weekNo==4) {
														$("#"+arIdUK_per_week[a]).val(obj[c].week4);
													} else if (weekNo==5) {
														$("#"+arIdUK_per_week[a]).val(obj[c].week5);
													}
													break;
												}
											}
										}
										hitungTMuji_awal();
									} else {
										for(var d=0; d< arIdSKKD_per_week.length; d++) {
											$("#"+arIdUK_per_week[d]).val(0);
										}
									}
								});
								
							}
						});
					});
				});
				
				
				function showhide_textbox_week(status) {
					
					for(var a=0; a< arIdSKKD_per_week.length; a++) {
						if(status=="show") {
							$("#"+arIdSKKD_per_week[a]).show();
							$("#"+arIdUK_per_week[a]).show();
						} else {
							$("#"+arIdSKKD_per_week[a]).hide();
							$("#"+arIdSKKD_per_week[a]).val(0);
							$("#"+arIdUK_per_week[a]).hide();
							$("#"+arIdUK_per_week[a]).val(0);
						}
					}					
				}
				
				$("#frmSetProsem_input").submit(function() {
					var prosemInsertString = $(this).serialize();
					
					if($("#btnSimpanProsem_input").val()=="Simpan Prosem") {
					
						$.ajax({
							type: "POST",
							url: "index.php/mainmenu/insert_prosem/",
							data: prosemInsertString,
							success: function(data, status) {
								alert("Prosem berhasil disimpan " + data);
								//$("#infoMsgBox").text("Prosem Berhasil Disimpan");
								//$("#infoMsgBox").hide(5000);
								//location.reload();
								call_trx_setting_prosem_input(mapel_skkd,kelas_skkd)
							}
						});
						
					} else {
						
						$.ajax({
							type: "POST",
							url: "index.php/mainmenu/update_prosem/",
							data: prosemInsertString,
							success: function(data, status) {
								alert("Prosem berhasil diupdate !" + data);
								//$("#infoMsgBox").text("Prosem Berhasil diupdate");
								//$("#infoMsgBox").hide(5000);
								//location.reload();
								call_trx_setting_prosem_input(mapel_skkd,kelas_skkd)
							}
						});
						
					}
					
					return false;
				});
				
			});
		}
		//END Menu Trx Setting Prosem =============================================
		
		
		
		
		
		
		//Menu Trx Setting Silabus =============================================
		var arDetailIndi=new Array();
		var arIndiNo=new Array();
		//call_trx_setting_silabus();
		$("#trxSettingSilabus").click(call_trx_setting_silabus);
		function call_trx_setting_silabus() {
			$( ".panel_setting_subjudul" ).removeClass( "mn_active" );
			$("#trxSettingSilabus").addClass("mn_active");
			
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/show_silabus_page/", function() {
				$("#setSKKD_mapel").change(function() {
					//alert("ID : " + $('option:selected', this).attr('alt'));
					var almTujuan = "index.php/mainmenu/cari_kelas_based_mapel_prosem/"+$('option:selected', this).attr('alt');
					$("#div_setSKKD_kelas").load(almTujuan);
				});
				
				$("#frmSetSilabus").submit(function() {
					call_trx_setting_silabus_input($("#setSKKD_mapel").val(),$("#setProsem_kelas").val());
					return false;
				});
			});
		}
		
		function call_trx_setting_silabus_input(mapel_skkd,kelas_skkd) {
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/show_silabus_detail/"+mapel_skkd+"/"+kelas_skkd, function(data) {
				
				$("#btnBackSetSilabus").click(function() {
					location.reload();
					call_trx_setting_silabus();
				});
				$("#btnRefreshSilabus").click(function() {
					call_trx_setting_silabus_input(mapel_skkd,kelas_skkd);
				});
				
				$(".rowSilabusDetail").hide();
				
				$("#lblPilihSms").hide();
				$("#txtPilihSms").change(function() {
					$("#lblPilihSms").html($("#txtPilihSms").val());
					$("#lblPilihSms").show();
					$("#txtPilihSms").hide();
					
					$.post("index.php/mainmenu/cari_silabus_sk/", {
						silabusMapel:$("#txtMapelSilabus_input").val(),
						silabusKelas:$("#txtKelasSilabus_input").val(),
						silabusSms:$("#txtPilihSms").val(),
					}, function(data, status) {
						//alert(data);
						var obj = jQuery.parseJSON( data );
									
						if(obj.length>0) {
							$("#txtSilabusSK").empty();
							$("#txtSilabusSK").append("<option value=''>== Pilih SK ==</option>");
							for(var c=0; c < obj.length; c++) {
								$("#txtSilabusSK").append("<option value='"+obj[c].id+"'>"+obj[c].sk_no+"</option>");
							}
						}
						
					});
					
				});
				
				$("#lblSilabusSK").hide();
				$("#txtSilabusSK").change(function() {
					$("#lblSilabusSK").html($("#txtSilabusSK option:selected").text());
					$("#lblSilabusSK").show();
					$("#txtSilabusSK").hide();
					
					$.post("index.php/mainmenu/cari_silabus_kd/", {
						silabusMapel:$("#txtMapelSilabus_input").val(),
						silabusKelas:$("#txtKelasSilabus_input").val(),
						silabusSms:$("#txtPilihSms").val(),
						silabusSKid:$(this).val()
					}, function(data, status) {
						//alert(data);
						var obj = jQuery.parseJSON( data );
									
						if(obj.length>0) {
							$("#txtSilabusKD").empty();
							$("#txtSilabusKD").append("<option value=''>== Pilih KD ==</option>");
							for(var c=0; c < obj.length; c++) {
								$("#txtSilabusKD").append("<option value='"+obj[c].id+"'>"+obj[c].kd_no+"</option>");
							}
						}
					});
					
				});
				
				$("#txtSilabusKD").change(function() {
					$("#lblSilabusKD").html($("#txtSilabusKD option:selected").text());
					$("#lblSilabusKD").show();
					$("#txtSilabusKD").hide();
					
					$(".rowSilabusDetail").show();
					arDetailIndi=[];
					arIndiNo=[];
					
					$.post("index.php/mainmenu/cari_silabus_skkd/", {
						silabusMapel:$("#txtMapelSilabus_input").val(),
						silabusKelas:$("#txtKelasSilabus_input").val(),
						silabusSms:$("#txtPilihSms").val(),
						silabusSKid:$("#txtSilabusSK").val(),
						silabusKDid:$(this).val()
					}, function(data, status) {
						//alert(data);
						var obj = jQuery.parseJSON( data );
						var textdescIndi = "";
						
						textdescIndi += "<table class='table table-bordered'>";
						if(obj.length>0) {
							for(var c=0; c < obj.length; c++) {
								$("#lblSilabus_sk").html(obj[c].sk_detail);
								$("#lblSilabus_wkt_sk").html(obj[c].jam_sk);
								$("#lblSilabus_kd").html(obj[c].kd_detail);
								$("#lblSilabus_wkt_kd").html(obj[c].jam_kd);
								textdescIndi += "<tr>";
								textdescIndi += "<td class='info' colspan='2'>" + obj[c].desc_indi + "</td>";
								textdescIndi += "</tr>";
								
								textdescIndi += "<tr>";
								textdescIndi += "<td width='15%' align='right'><input type='hidden' name='txtIndiID[]' value='"+obj[c].indiid+"' >Penilaian Indi "+obj[c].no_indi+" : </td>";
								textdescIndi += "<td><textarea name='txtPenilaian[]' id='txtPenilaian"+obj[c].indiid+"' title='txtPenilaian"+obj[c].indiid+"' class='form-control' required placeholder='contoh :\n1. Penilaian Jenis Tagihan\n2. Penilaian Instrumen Penilaian' ></textarea></td>";
								textdescIndi += "</tr>";
								
								$("#divIndiCapai").html(textdescIndi);
							}
						}
						textdescIndi += "</table>";
						if(arDetailIndi.length>0) {
							for(var x=0; x<arDetailIndi.length; x++) {
								$("#txtPenilaian"+arIndiNo[x]).val(arDetailIndi[x]);
							}
						}
					});
					
					cariisi_silabus($("#txtMapelSilabus_input").val(),$("#txtKelasSilabus_input").val(),$("#txtPilihSms").val(),$("#txtSilabusSK").val(),$(this).val());
					
				});
				
				$("#frmSetSilabus_input").submit(function() {
					var silabusInsertString = $(this).serialize();
					//alert(silabusInsertString);
					
					if($("#btnSubmitSilabus").val()=="Simpan Silabus") {
					
						$.ajax({
							type: "POST",
							url: "index.php/mainmenu/insert_silabus/",
							data: silabusInsertString,
							success: function(data, status) {
								alert("Silabus berhasil disimpan !!!");
								location.reload();
								call_trx_setting_silabus();
							}
						});
						
					} else {
						
						$.ajax({
							type: "POST",
							url: "index.php/mainmenu/update_silabus/",
							data: silabusInsertString,
							success: function(data, status) {
								alert("Silabus berhasil diupdate !!!");
								location.reload();
								call_trx_setting_silabus();
							}
						});
						
					}
					
					
					return false;
				});
			});
			
			function cariisi_silabus(mapel,kls,sms,skid,kdid) {
				
				$.post("index.php/mainmenu/cari_silabus_isi/", {
					silabusMapel:mapel,
					silabusKelas:kls,
					silabusSms:sms,
					silabusSKid:skid,
					silabusKDid:kdid
				}, function(data, status) {
					//alert(data);
					var obj = jQuery.parseJSON( data );
					
					if(obj.length>0) {
						//alert("Load silabus data success!!!");
						$("#btnSubmitSilabus").val("Update Silabus");
						for(var h=0; h < obj.length; h++) {
							
							var data = obj[h].life_skill;
							var arr = data.split(';');
							for(var a=0; a<arr.length-1; a++) {
								$("#txtLS_"+arr[a]).attr('checked','checked');
							}
							
							$("#txtSilabus_id").val(obj[h].id);
							$("#txtSilabus_mapok").html(obj[h].materi_pokok);
							$("#txtSilabus_tujuan").html(obj[h].tujuan_pembelajaran);
							//$("#txtSilabus_lifeskill").html(obj[h].life_skill);
							//$("#txtSilabus_moral").html(obj[h].nilai_moral);
							$("#txtSilabus_karakter").html(obj[h].pendidikan_karakter);
							$("#txtSilabus_kegbel").html(obj[h].kegiatan_pembelajaran);
							$("#txtSilabus_sumbel").html(obj[h].sumber_belajar);
							
							$("#txtSilabus_moral option").each(function()
							{
								if($(this).val()==obj[h].nilai_moral) {
									$(this).attr('selected','selected');
								}
							});
							
							arIndiNo.push(obj[h].id_indi);
							arDetailIndi.push(obj[h].penilaian_indi);
							$("#txtPenilaian"+obj[h].id_indi).val(obj[h].penilaian_indi);
						}
					
					} else {
						$("#btnSubmitSilabus").val("Simpan Silabus");
					}
				});
			}
		}
		//END Menu Trx Setting Silabus =============================================		
				
				
				
		
		//Begin menu Trx Setting RPP ==================================================================
		$("#trxSettingRPP").click(call_trx_setting_rpp);
		//call_trx_setting_rpp();
		function call_trx_setting_rpp() {
			$( ".panel_setting_subjudul" ).removeClass( "mn_active" );
			$("#trxSettingRPP").addClass("mn_active");
			
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/show_rpp_page/", function() {
				$("#divInfoRPP").hide();
			
				$("#lblRPPmapel").hide();
				$("#lblRPPkelas").hide();
				$("#lblRPPsemester").hide();
				$("#lblRPPsk").hide();
				
				$("#setRPP_mapel").change(function() {
					//var almTujuan = "index.php/mainmenu/cari_kelas_based_mapel_rpp/"+$('option:selected', this).attr('alt');
					//$("#div_setRPP_kelas").load(almTujuan);
					$.post("index.php/mainmenu/cari_kelas_based_mapel_rpp/", {
						txtMapel:$('option:selected', this).attr('alt')
					}, function(data, status) {
						//alert(data);
						var obj = jQuery.parseJSON( data );
						
						if(obj.length>0) {
							$("#setRPP_kelas").empty();
							$("#setRPP_kelas").append("<option value=''>== Pilih Kelas ==</option>");
							for(var c=0; c < obj.length; c++) {
								$("#setRPP_kelas").append("<option value='"+obj[c].id_kelas+"'>"+obj[c].kelas+"</option>");
							}
						}
						
					});
					
					$("#lblRPPmapel").html($("#setRPP_mapel option:selected").text());
					$("#setRPP_mapel").hide();
					$("#lblRPPmapel").show();
				});
				
				
				$("#setRPP_kelas").change(function() {
					$("#lblRPPkelas").html($("#setRPP_kelas option:selected").text());
					$("#setRPP_kelas").hide();
					$("#lblRPPkelas").show();
				});
				
				$("#setRPP_semester").change(function() {
					$("#lblRPPsemester").html($("#setRPP_semester").val());
					$("#setRPP_semester").hide();
					$("#lblRPPsemester").show();
				});
				
				$("#setRPP_semester").change(function() {
					$.post("index.php/mainmenu/cari_rpp_sk/", {
						rppMapel:$("#setRPP_mapel").val(),
						rppKelas:$("#setRPP_kelas").val(),
						rppSms:$("#setRPP_semester").val()
					}, function(data, status) {
						//alert(data);
						var obj = jQuery.parseJSON( data );
						
						if(obj.length>0) {
							$("#setRPP_sk").empty();
							$("#setRPP_sk").append("<option value=''>== Pilih SK ==</option>");
							for(var c=0; c < obj.length; c++) {
								$("#setRPP_sk").append("<option value='"+obj[c].id+"'>"+obj[c].sk_no+"</option>");
							}
						}
						
					});
				});
				
				
				
				$("#setRPP_sk").change(function() {
					$("#lblRPPsk").html($("#setRPP_sk option:selected").text());
					$("#setRPP_sk").hide();
					$("#lblRPPsk").show();
					
					$.post("index.php/mainmenu/cari_rpp_kd/", {
						rppMapel:$("#setRPP_mapel").val(),
						rppKelas:$("#setRPP_kelas").val(),
						rppSms:$("#setRPP_semester").val(),
						rppSKid:$(this).val()
					}, function(data, status) {
						alert(data);
						var obj = jQuery.parseJSON( data );
									
						if(obj.length>0) {
							$("#setRPP_kd").empty();
							$("#setRPP_kd").append("<option value=''>== Pilih KD ==</option>");
							for(var c=0; c < obj.length; c++) {
								$("#setRPP_kd").append("<option value='"+obj[c].id+"'>"+obj[c].kd_no+"</option>");
							}
						}
					});
				});
				
				
				$("#setRPP_kd").change(function() {
					$("#lblRPPkd").html($("#setRPP_kd option:selected").text());
					$("#setRPP_kd").hide();
					$("#lblRPPkd").show();
					
					//load database
					var mapel=$("#setRPP_mapel").val();
					var kls=$("#setRPP_kelas").val();
					var sms=$("#setRPP_semester").val();
					var sk=$("#setRPP_sk").val();
					var skno=$("#setRPP_sk option:selected").text();
					
					//alert($("#setRPP_mapel").val() + " | " + $("#setRPP_kelas").val() + " | " + $("#setRPP_semester").val() + " | " + $("#setRPP_sk").val());
					$("#rppdetail").load("<?php echo base_url(); ?>index.php/mainmenu/show_rpp_page_input/"+mapel+"/"+kls+"/"+sms+"/"+sk+"/"+skno, function() {
						//$("#lblRPP_no").hide();
						var idmapel = $("#setRPP_mapel").val();
						var idkelas = $("#setRPP_kelas").val();
						var sms = $("#setRPP_semester").val();
						var idsk = $("#setRPP_sk").val();
						var jmlTemu = $("#lblRPPsk_jmljam").text();
						var rppno = $("#txtRPP_no").val();
						
						if($("#idRPP_temp").val()>0) {
							tampil_rpp_all_detail(mapel,kls,sms,sk,skno,$("#idRPP_temp").val());
						} else {
							$("#frmRPP_part_header").submit(function() {
								rppno = $("#txtRPP_no").val();
								
								$.post("index.php/mainmenu/simpan_rpp_header/", {
									mapelid:idmapel,
									kelasid:idkelas,
									smst:sms,
									skid:idsk,
									temujml:jmlTemu,
									norpp:rppno
								}, function(data, status) {
									//alert(status + " => " + data);
									if(status=="success") {
										$("#txtInfoRPP").text("Simpan RPP Header Sukses, silahkan isi detail RPP dibawah!");
										$("#divInfoRPP").fadeIn(100).delay(800).fadeOut(100);
										tampil_rpp_all_detail(mapel,kls,sms,sk,skno,data);
									}
								});
									
								return false;	
							});
							
						}
						
						function tampil_rpp_all_detail(mapel,kls,sms,sk,skno,data) {
							$("#txtRPP_id").val(data);
							
							$("#lblRPP_no").text($("#txtRPP_no").val());
							$("#lblRPP_no").show();
							$("#txtRPP_no").hide();
							$("#btnPartRPP_header_submit").hide();
							
							$("#rpp_part").load("<?php echo base_url(); ?>index.php/mainmenu/tampilkan_data_rpp/"+mapel+"/"+kls+"/"+sms+"/"+sk+"/"+skno+"/"+data, function() {
								
								//RPP : TUJUAN PERTEMUAN -----------------------------------------
								$("#detail_tujuan").load("<?php echo base_url(); ?>index.php/mainmenu/rpp_tujuan_temu/1/"+$("#txtRPP_id").val(), function() {
									call_submit_temu_tujuan();
								});
								
								$(".temuTujuan").click(function() {
									$(".temuTujuan").removeClass("active");
									$(this).addClass("active");
									
									//load form pertemuan
									var noMeet = $(this).attr("alt");
									$("#detail_tujuan").html("<center><br><img src='<?php echo base_url(); ?>image/mainloading.gif' /></center>");
									$("#detail_tujuan").load("<?php echo base_url(); ?>index.php/mainmenu/rpp_tujuan_temu/"+noMeet+"/"+$("#txtRPP_id").val(), function() {
										call_submit_temu_tujuan();
									});
								});
								
								$(".rpp_detail_header").click(function() {
									$(this).parent().children('.content_part').animate({
										height: 'toggle'
									});
								});
								
								function call_submit_temu_tujuan() {
									$("#frmRPP_part_tujuan").submit(function(event) {
										var isiPartTemuTujuan = $(this).serialize();
										isiPartTemuTujuan += "&rpp_id="+$("#txtRPP_id").val();
										isiPartTemuTujuan += "&rpp_no="+$("#lblRPP_no").text();
										
										$("#btnSubmitRPP_tujuan").attr("disabled","disabled");
										$.ajax({
											type: "POST",
											url: "index.php/mainmenu/simpan_tujuan_pembelajaran/",
											data: isiPartTemuTujuan,
											success: function(data, status) {
												//alert("Tujuan Pembelajaran Berhasil Disimpan : " + data);
												$("#btnSubmitRPP_tujuan").removeAttr("disabled");
												
												if(status=="success") {
													$("#txtInfoRPP").text("Simpan RPP Tujuan Pembelajaran Berhasil");
													$("#divInfoRPP").fadeIn(100).delay(800).fadeOut(100);
												}
											}
										});
										
										return false;
									});
								}
								//RPP : END TUJUAN PERTEMUAN -----------------------------------------
								
								
								
								//RPP : MATERI PEMBELAJARAN -----------------------------------------
								tinyMCE.editors=[];
								tinymce.init({
									selector: "#txtMateriBelajar",
									plugins: [
										"advlist autolink lists link image charmap print preview anchor",
										"searchreplace visualblocks code fullscreen",
										"insertdatetime media table contextmenu paste"
									],
									toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
								});
								
								$("#frmRPP_part_materi").submit(function(event) {
									
									if($("#txtMateriBelajar").val() != "") {
										var isiPartMateri = $(this).serialize();
										isiPartMateri += "&rpp_id="+$("#txtRPP_id").val();
										isiPartMateri += "&rpp_no="+$("#lblRPP_no").text();
										
										$("#btnSubmitRPP_materi").attr("disabled","disabled");
										$.ajax({
											type: "POST",
											url: "index.php/mainmenu/simpan_rpp_materi/",
											data: isiPartMateri,
											success: function(data, status) {
												//alert("Materi Pembelajaran Berhasil Disimpan : " + data);
												$("#btnSubmitRPP_materi").removeAttr("disabled");
												
												if(status=="success") {
													$("#txtInfoRPP").text("Simpan RPP Materi Pembelajaran Berhasil");
													$("#divInfoRPP").fadeIn(100).delay(800).fadeOut(100);
												}
											}
										});
									} else {
										alert("WARNING\nMateri Pembelajaran masih kosong!!!");
									}
									return false;
									
								});
								//RPP : END MATERI PEMBELAJARAN -----------------------------------------
								
								
								
								//RPP : METODE PEMBELAJARAN -----------------------------------------
								$("#frmRPP_part_metode").submit(function(event) {
									
									var isiPartMateri = $(this).serialize();
									isiPartMateri += "&rpp_id="+$("#txtRPP_id").val();
									isiPartMateri += "&rpp_no="+$("#lblRPP_no").text();
									
									$("#btnSubmitRPP_metode").attr("disabled","disabled");
									$.ajax({
										type: "POST",
										url: "index.php/mainmenu/simpan_rpp_metode/",
										data: isiPartMateri,
										success: function(data, status) {
											//alert("Metode Pembelajaran Berhasil Disimpan : " + data);
											$("#btnSubmitRPP_metode").removeAttr("disabled");
											
											if(status=="success") {
												$("#txtInfoRPP").text("Simpan RPP Metode Pembelajaran Berhasil");
												$("#divInfoRPP").fadeIn(100).delay(800).fadeOut(100);
											}
										}
									});
									return false;
									
								});
								//RPP : END METODE PEMBELAJARAN -----------------------------------------
								
								
								
								//Kegiatan Pembelajaran
								$("#detail_kegbel").load("<?php echo base_url(); ?>index.php/mainmenu/rpp_keg_bel/1/"+$("#txtRPP_id").val(), function() {
									func_submit_kegbel(1);
								});
								$(".kegBel").click(function() {
									$(".kegBel").removeClass("active");
									$(this).addClass("active");
									
									//load form pertemuan
									var noMeet = $(this).attr("alt");
									$("#detail_kegbel").html("<center><br><img src='<?php echo base_url(); ?>image/mainloading.gif' /></center>");
									$("#detail_kegbel").load("<?php echo base_url(); ?>index.php/mainmenu/rpp_keg_bel/"+noMeet+"/"+$("#txtRPP_id").val(), function() {
										func_submit_kegbel(noMeet);
									});
								});
								
								function func_submit_kegbel(noMeet) {
									//RPP : KEGIATAN PEMBELAJARAN
									$("#frmRPP_part_kegbel").submit(function(event) {
										var isiPartKegbel = $(this).serialize();
										isiPartKegbel += "&rpp_id="+$("#txtRPP_id").val();
										isiPartKegbel += "&rpp_no="+$("#lblRPP_no").text();
										isiPartKegbel += "&meet_no="+noMeet;
										
										$("#btnSubmitRPP_kegbel").attr("disabled","disabled");
										$.ajax({
											type: "POST",
											url: "index.php/mainmenu/simpan_rpp_kegbel/",
											data: isiPartKegbel,
											success: function(data, status) {
												//alert("Kegiatan Pembelajaran Berhasil Disimpan : " + data);
												$("#btnSubmitRPP_kegbel").removeAttr("disabled");
												
												if(status=="success") {
													$("#txtInfoRPP").text("Simpan RPP Kegiatan Pembelajaran Berhasil");
													$("#divInfoRPP").fadeIn(100).delay(800).fadeOut(100);
												}
											}
										});
										
										return false;
									});
									//RPP : END KEGIATAN PEMBELAJARAN
								}
								
								
								//RPP : SUMBER BELAJAR -----------------------------------------
								$("#frmRPP_part_sumber").submit(function(event) {
									
									var isiPartSumber = $(this).serialize();
									isiPartSumber += "&rpp_id="+$("#txtRPP_id").val();
									isiPartSumber += "&rpp_no="+$("#lblRPP_no").text();
									
									$("#btnSubmitRPP_sumber").attr("disabled","disabled");
									$.ajax({
										type: "POST",
										url: "index.php/mainmenu/simpan_rpp_sumber/",
										data: isiPartSumber,
										success: function(data, status) {
											//alert("Metode Pembelajaran Berhasil Disimpan : " + data);
											$("#btnSubmitRPP_sumber").removeAttr("disabled");
											
											if(status=="success") {
												$("#txtInfoRPP").text("Simpan RPP Sumber Belajar Berhasil");
												$("#divInfoRPP").fadeIn(100).delay(800).fadeOut(100);
											}
										}
									});
									return false;
									
								});
								//RPP : END SUMBER BELAJAR -----------------------------------------
								
								
								
								//RPP : MEDIA BELAJAR -----------------------------------------
								$("#frmRPP_part_media").submit(function(event) {
									
									var isiPartMedia = $(this).serialize();
									isiPartMedia += "&rpp_id="+$("#txtRPP_id").val();
									isiPartMedia += "&rpp_no="+$("#lblRPP_no").text();
									
									$("#btnSubmitRPP_media").attr("disabled","disabled");
									$.ajax({
										type: "POST",
										url: "index.php/mainmenu/simpan_rpp_media/",
										data: isiPartMedia,
										success: function(data, status) {
											//alert("Metode Pembelajaran Berhasil Disimpan : " + data);
											$("#btnSubmitRPP_media").removeAttr("disabled");
											
											if(status=="success") {
												$("#txtInfoRPP").text("Simpan RPP Media Pembelajaran Berhasil");
												$("#divInfoRPP").fadeIn(100).delay(800).fadeOut(100);
											}
										}
									});
									return false;
									
								});
								//RPP : END MEDIA BELAJAR -----------------------------------------
								
								
								
								//ADD NEW ROWS penilaian indikator
								var noUrutRowNilai = 0;
								create_new_row_nilai("");
								$("#btnRPP_add_nilai").click(function() {
									create_new_row_nilai("");
								});
								function create_new_row_nilai(objData) {
									noUrutRowNilai++;
									var noData = noUrutRowNilai-1;
									
									var strNewRow = "";
									strNewRow += "<tr align='center' id='rowRppNilai"+noUrutRowNilai+"' >";
									strNewRow += "<td><label name='txtRPP_nilai_urut[]' id='txtRPP_nilai_urut"+noUrutRowNilai+"' >"+noUrutRowNilai+"</label><input type='hidden' name='txtRPP_nilai_nomor[]' id='txtRPP_nilai_nomor"+noUrutRowNilaisoal+"' value='"+noUrutRowNilai+"'></td>";
									strNewRow += "<td><textarea name='txtRPP_nilai_indi[]' id='txtRPP_nilai_indi"+noUrutRowNilai+"' class='form-control' style='resize:none;' required title='row"+noUrutRowNilai+"' >"+(objData==""?"":objData[noData].indikator)+"</textarea></td>";
									strNewRow += "<td><textarea name='txtRPP_nilai_teknik[]' id='txtRPP_nilai_teknik"+noUrutRowNilai+"' class='form-control' style='resize:none;' required >"+(objData==""?"":objData[noData].teknik)+"</textarea></td>";
									strNewRow += "<td><textarea name='txtRPP_nilai_bentuk[]' id='txtRPP_nilai_bentuk"+noUrutRowNilai+"' class='form-control' style='resize:none;' required >"+(objData==""?"":objData[noData].bentuk)+"</textarea></td>";
									strNewRow += "<td><textarea name='txtRPP_nilai_instrument[]' id='txtRPP_nilai_instrument"+noUrutRowNilai+"' class='form-control' style='resize:none;' required >"+(objData==""?"":objData[noData].instrument)+"</textarea></td>";
									strNewRow += "</tr>";
									$("#tbl_rpp_nilai").before($("#cont_rpp_nilai")).append(strNewRow);
								}
								$("#btnRPP_remove_nilai").click(function() {
									if(noUrutRowNilai>1) {
										$("#rowRppNilai"+noUrutRowNilai).remove();
										noUrutRowNilai--;
									}
								});
								
								
								//INDIKATOR PENILAIAN
								//load
								$.post("index.php/mainmenu/cari_rpp_detail_indi/", {
									rpp_id:$("#txtRPP_id").val()
								}, function(data, status) {
									var obj = jQuery.parseJSON( data );
									
									if(obj.length>0) {
										$("#rowRppNilai"+noUrutRowNilai).remove();
										noUrutRowNilai--;
										
										for(var c=0; c < obj.length; c++) {
											create_new_row_nilai(obj);
											//$("#setRPP_sk").append("<option value='"+obj[c].id+"'>"+obj[c].sk_no+"</option>");
										}
									}
									
								});
								
								//save
								$("#frmRPP_part_penilaian").submit(function(event) {
									
									var isiPartIndi = $(this).serialize();
									isiPartIndi += "&rpp_id="+$("#txtRPP_id").val();
									isiPartIndi += "&rpp_no="+$("#lblRPP_no").text();
									
									$("#btnSubmitRPP_penilaian").attr("disabled","disabled");
									$.ajax({
										type: "POST",
										url: "index.php/mainmenu/simpan_rpp_indi/",
										data: isiPartIndi,
										success: function(data, status) {
											//alert("Indikator Penilaian Berhasil Disimpan : " + data);
											$("#btnSubmitRPP_penilaian").removeAttr("disabled");
											
											if(status=="success") {
												$("#txtInfoRPP").text("Simpan RPP Indikator Penilaian Berhasil");
												$("#divInfoRPP").fadeIn(100).delay(800).fadeOut(100);
											}
										}
									});
									
									return false;
								});
								//END INDIKATOR PENILAIAN
								
								
								
								//ADD NEW ROWS penilaian soal
								var noUrutRowNilaisoal = 0;
								create_new_row_nilai_soal("");
								$("#btnRPP_add_nilaisoal").click(function() {
									create_new_row_nilai_soal("");
								});
								function create_new_row_nilai_soal(objData) {
									noUrutRowNilaisoal++;
									var noData = noUrutRowNilaisoal-1;
									
									var strNewRowSoal = "";
									strNewRowSoal += "<tr align='center' id='rowRppNilaiSoal"+noUrutRowNilaisoal+"' >";
									strNewRowSoal += "<td><label name='txtRPP_soal_urut[]' id='txtRPP_soal_urut"+noUrutRowNilaisoal+"' >"+noUrutRowNilaisoal+"</label><input type='hidden' name='txtRPP_soal_nomor[]' id='txtRPP_soal_nomor"+noUrutRowNilaisoal+"' value='"+noUrutRowNilaisoal+"' ></td>";
									strNewRowSoal += "<td><textarea name='txtRPP_soal_isi[]' id='txtRPP_soal_isi"+noUrutRowNilaisoal+"' class='form-control' style='resize:none;' required title='row"+noUrutRowNilai+"' >"+(objData==""?"":objData[noData].soal)+"</textarea></td>";
									strNewRowSoal += "<td><input type='number' min='0' name='txtRPP_soal_bobot[]' id='txtRPP_soal_bobot"+noUrutRowNilaisoal+"' class='form-control' style='resize:none;' value='"+(objData==""?"":objData[noData].bobot)+"' required ></td>";
									strNewRowSoal += "</tr>";
									$("#tbl_rpp_nilaisoal").before($("#cont_rpp_soal")).append(strNewRowSoal);
								}
								$("#btnRPP_remove_nilaisoal").click(function() {
									if(noUrutRowNilaisoal>1) {
										$("#rowRppNilaiSoal"+noUrutRowNilaisoal).remove();
										noUrutRowNilaisoal--;
									}
								});
								
								
								//PENILAIAN SOAL
								//load
								$.post("index.php/mainmenu/cari_rpp_detail_soal/", {
									rpp_id:$("#txtRPP_id").val()
								}, function(data, status) {
									var obj = jQuery.parseJSON( data );
									
									if(obj.length>0) {
										$("#rowRppNilaiSoal"+noUrutRowNilaisoal).remove();
										noUrutRowNilaisoal--;
										
										for(var c=0; c < obj.length; c++) {
											create_new_row_nilai_soal(obj);
										}
									}
									
								});
								
								//save
								$("#frmRPP_part_soal").submit(function(event) {
									
									var isiPartSoal = $(this).serialize();
									isiPartSoal += "&rpp_id="+$("#txtRPP_id").val();
									isiPartSoal += "&rpp_no="+$("#lblRPP_no").text();
									
									$("#btnSubmitRPP_soal").attr("disabled","disabled");
									$.ajax({
										type: "POST",
										url: "index.php/mainmenu/simpan_rpp_soal/",
										data: isiPartSoal,
										success: function(data, status) {
											//alert("Penilaian soal Berhasil Disimpan : " + data);
											$("#btnSubmitRPP_soal").removeAttr("disabled");
											
											if(status=="success") {
												$("#txtInfoRPP").text("Simpan RPP Penilaian Soal Berhasil");
												$("#divInfoRPP").fadeIn(100).delay(800).fadeOut(100);
											}
										}
									});
									
									return false;
								});
								//END PENILAIAN SOAL
								
								
								
								//ADD NEW ROWS penilaian kunci
								var noUrutRowNilaikunci = 0;
								create_new_row_nilai_kunci("");
								$("#btnRPP_add_nilaijwb").click(function() {
									create_new_row_nilai_kunci("");
								});
								function create_new_row_nilai_kunci(objData) {
									noUrutRowNilaikunci++;
									var noData = noUrutRowNilaikunci-1;
									
									var strNewRowKunci = "";
									strNewRowKunci += "<tr align='center' id='rowRppNilaiJawaban"+noUrutRowNilaikunci+"' >";
									strNewRowKunci += "<td><label name='txtRPP_jawaban_urut[]' id='txtRPP_jawaban_urut"+noUrutRowNilaikunci+"' >"+noUrutRowNilaikunci+"</label><input type='hidden' name='txtRPP_jawaban_nomor[]' id='txtRPP_jawaban_nomor"+noUrutRowNilaikunci+"' value='"+noUrutRowNilaikunci+"' ></td>";
									strNewRowKunci += "<td><textarea name='txtRPP_jawaban_isi[]' id='txtRPP_jawaban_isi"+noUrutRowNilaikunci+"' class='form-control' style='resize:none;' required title='row"+noUrutRowNilai+"' >"+(objData==""?"":objData[noData].jawaban)+"</textarea></td>";
									strNewRowKunci += "</tr>";
									$("#tbl_rpp_nilaijwb").before($("#cont_rpp_jwb")).append(strNewRowKunci);
								}
								$("#btnRPP_remove_nilaijwb").click(function() {
									if(noUrutRowNilaikunci>1) {
										$("#rowRppNilaiJawaban"+noUrutRowNilaikunci).remove();
										noUrutRowNilaikunci--;
									}
								});
								
								
								//PENILAIAN JAWABAN
								//load
								$.post("index.php/mainmenu/cari_rpp_detail_jawaban/", {
									rpp_id:$("#txtRPP_id").val()
								}, function(data, status) {
									var obj = jQuery.parseJSON( data );
									
									if(obj.length>0) {
										$("#rowRppNilaiJawaban"+noUrutRowNilaikunci).remove();
										noUrutRowNilaikunci--;
										
										for(var c=0; c < obj.length; c++) {
											create_new_row_nilai_kunci(obj);
										}
									}
									
								});
								
								//save
								$("#frmRPP_part_jawaban").submit(function(event) {
									
									var isiPartJawab = $(this).serialize();
									isiPartJawab += "&rpp_id="+$("#txtRPP_id").val();
									isiPartJawab += "&rpp_no="+$("#lblRPP_no").text();
									
									$("#btnSubmitRPP_jawaban").attr("disabled","disabled");
									$.ajax({
										type: "POST",
										url: "index.php/mainmenu/simpan_rpp_jawaban/",
										data: isiPartJawab,
										success: function(data, status) {
											//alert("Penilaian soal Berhasil Disimpan : " + data);
											$("#btnSubmitRPP_jawaban").removeAttr("disabled");
											
											if(status=="success") {
												$("#txtInfoRPP").text("Simpan RPP Penilaian Jawaban Berhasil");
												$("#divInfoRPP").fadeIn(100).delay(800).fadeOut(100);
											}
										}
									});
									
									return false;
								});
								//END PENILAIAN JAWABAN
								
								
							});
						}
						
					});
				});
				
				
				
				$("#btnRefreshRPP").click(function() {
					location.reload();
					call_trx_setting_rpp();
				});
				
				
			});
		}
		//End menu Trx Setting RPP ==================================================================
		
		
		
		
		//Begin menu Trx Setting KKM ==================================================================
		$("#trxSettingKKM").click(call_trx_setting_kkm);
		//call_trx_setting_kkm();
		function call_trx_setting_kkm() {
			$( ".panel_setting_subjudul" ).removeClass( "mn_active" );
			$("#trxSettingKKM").addClass("mn_active");
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/show_kkm_page/", function() {
				$("#divInfoKKM").hide();
				
				$("#lblKKMmapel").hide();
				$("#lblKKMkelas").hide();
				$("#lblKKMsemester").hide();
				$("#lblKKMsk").hide();
				
				$("#setKKM_mapel").change(function() {
					//var almTujuan = "index.php/mainmenu/cari_kelas_based_mapel_rpp/"+$('option:selected', this).attr('alt');
					//$("#div_setRPP_kelas").load(almTujuan);
					$.post("index.php/mainmenu/cari_kelas_based_mapel_rpp/", {
						txtMapel:$('option:selected', this).attr('alt')
					}, function(data, status) {
						//alert(data);
						var obj = jQuery.parseJSON( data );
						
						if(obj.length>0) {
							$("#setKKM_kelas").empty();
							$("#setKKM_kelas").append("<option value=''>== Pilih Kelas ==</option>");
							for(var c=0; c < obj.length; c++) {
								$("#setKKM_kelas").append("<option value='"+obj[c].id_kelas+"'>"+obj[c].kelas+"</option>");
							}
						}
						
					});
					
					$("#lblKKMmapel").html($("#setKKM_mapel option:selected").text());
					$("#setKKM_mapel").hide();
					$("#lblKKMmapel").show();
				});
				
				
				$("#setKKM_kelas").change(function() {
					$("#lblKKMkelas").html($("#setKKM_kelas option:selected").text());
					$("#setKKM_kelas").hide();
					$("#lblKKMkelas").show();
				});
				
				$("#setKKM_semester").change(function() {
					$("#lblKKMsemester").html($("#setKKM_semester").val());
					$("#setKKM_semester").hide();
					$("#lblKKMsemester").show();
				});
				
				$("#setKKM_semester").change(function() {
					
					//load database
					var mapel=$("#setKKM_mapel").val();
					var kls=$("#setKKM_kelas").val();
					var sms=$("#setKKM_semester").val();
					
					//alert($("#setRPP_mapel").val() + " | " + $("#setRPP_kelas").val() + " | " + $("#setRPP_semester").val() + " | " + $("#setRPP_sk").val());
					$("#kkmdetail").load("<?php echo base_url(); ?>index.php/mainmenu/show_kkm_input/"+mapel+"/"+kls+"/"+sms, function() {
						
						$(".inputkkm").change(function() {
							hitung_id();
						});
						
						hitung_id();
						
						function hitung_id() {
							var noSKKD=0;
							var rtID="";
							var hitungRTid=0;
							var countID=1;
							var resultRTid=0;
							
							var noSK=-1;
							var rtKD="";
							var hitungRTkd=0;
							var countKD=1;
							var resultRTkd=0;
							
							var jmlID = 0;
							var Total = 0;
							
							for(var a=0; a<arKDno.length; a++) {
								var kata = "_sk"+arSKno[a];
								kata += "_kd"+arKDno[a];
								kata += "_id"+arIDno[a];
								
								var angkaKPa = Number($("#txtKP"+kata).val());
								var angkaDDa = Number($("#txtDD"+kata).val());
								var angkaINa = Number($("#txtIN"+kata).val());
								
								var hitRataIDa = Math.round(Number(angkaKPa+angkaDDa+angkaINa)/3,2);
								var strRataKD = "lblRata"+kata;
								$("#"+strRataKD).html(hitRataIDa);
								
								//perhitungan Rata KD (hasil rata-rata dari indikator)
								if(noSKKD != Number(arSKno[a]+""+arKDno[a])) {
									noSKKD=Number(arSKno[a]+""+arKDno[a]);
									hitungRTid = Math.round(hitRataIDa,2);
									countID=1;
									
									rtID = "_sk"+arSKno[a];
									rtID += "_kd"+arKDno[a];
									resultRTid = Math.round(hitungRTid/countID,2);
									$("#lblRataId"+rtID).html(resultRTid);
								} else {
									hitungRTid += Math.round(hitRataIDa,2);
									countID++;
									
									rtID = "_sk"+arSKno[a];
									rtID += "_kd"+arKDno[a];
									resultRTid = Math.round(hitungRTid/countID,2);
									$("#lblRataId"+rtID).html(resultRTid);
								}
								
								//perhitungan Rata SK (hasil rata-rata dari KD)
								if(noSK != Number(arSKno[a])) {
									noSK=Number(arSKno[a]);
									hitungRTkd = Math.round(hitRataIDa,2);
									countKD=1;
									
									rtKD = "_sk"+arSKno[a];
									resultRTkd = Math.round(hitungRTkd/countKD,2);
									$("#lblRataKd"+rtKD).html(resultRTkd);
								} else {
									hitungRTkd += Math.round(hitRataIDa,2);
									countKD++;
									
									rtKD = "_sk"+arSKno[a];
									resultRTkd = Math.round(hitungRTkd/countKD,2);
									$("#lblRataKd"+rtKD).html(resultRTkd);
								}
								
								jmlID++;
								Total+=hitRataIDa;
							}
							
							//perhitungan TOTAL
							var totAkhir = Math.round(Total/jmlID);
							$("#lblRataTot").html(totAkhir);
						}
						
						
						$("#frmKKM_input").submit(function() {
							
							var dataKKM = $(this).serialize();
							
							$("#btnSimpanKKM").attr("disabled","disabled");
							$.ajax({
								type: "POST",
								url: "index.php/mainmenu/simpan_kkm/",
								data: dataKKM,
								success: function(data, status) {
									//alert("Simpan KKM Success : " + data);
									$("#btnSimpanKKM").removeAttr("disabled");
									
									if(status=="success") {
										$("#txtInfoKKM").text("Simpan KKM Success!!!");
										$("#divInfoKKM").fadeIn(100).delay(800).fadeOut(100);
									}
								}
							});
									
							return false;
						});
						
					});
					
				});
				
				
				$("#setKKM_sk").change(function() {
					$("#lblKKMsk").html($("#setKKM_sk option:selected").text());
					$("#setKKM_sk").hide();
					$("#lblKKMsk").show();
					
					
				});
				
				
				$("#btnRefreshKKM").click(function() {
					location.reload();
					call_trx_setting_kkm();
				});
				
			});
			
		
			
		}
		//End menu Trx Setting KKM ==================================================================
		
		
		
		
		
		
		//Begin menu Trx Setting KISI ==================================================================
		$("#trxSettingKisi").click(call_trx_setting_kisi);
		//call_trx_setting_kisi();
		function call_trx_setting_kisi() {
			$( ".panel_setting_subjudul" ).removeClass( "mn_active" );
			$("#trxSettingKisi").addClass("mn_active");
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/show_kisi_page/", function() {
				$("#divInfoKisi").hide();
				
				$("#lblKisimapel").hide();
				$("#lblKisikelas").hide();
				$("#lblKisisemester").hide();
				
				$("#setKisi_mapel").change(function() {
					
					$.post("index.php/mainmenu/cari_kelas_based_mapel_rpp/", {
						txtMapel:$('option:selected', this).attr('alt')
					}, function(data, status) {
						//alert(data);
						var obj = jQuery.parseJSON( data );
						
						if(obj.length>0) {
							$("#setKisi_kelas").empty();
							$("#setKisi_kelas").append("<option value=''>== Pilih Kelas ==</option>");
							for(var c=0; c < obj.length; c++) {
								$("#setKisi_kelas").append("<option value='"+obj[c].id_kelas+"'>"+obj[c].kelas+"</option>");
							}
						}
						
					});
					
					$("#lblKisimapel").html($("#setKisi_mapel option:selected").text());
					$("#setKisi_mapel").hide();
					$("#lblKisimapel").show();
				});
				
				
				$("#setKisi_kelas").change(function() {
					$("#lblKisikelas").html($("#setKisi_kelas option:selected").text());
					$("#setKisi_kelas").hide();
					$("#lblKisikelas").show();
				});
				
				$("#setKisi_semester").change(function() {
					$("#lblKisisemester").html($("#setKisi_semester").val());
					$("#setKisi_semester").hide();
					$("#lblKisisemester").show();
					
					//load database
					var mapel=$("#setKisi_mapel").val();
					var kls=$("#setKisi_kelas").val();
					var sms=$("#setKisi_semester").val();
					var noKisi=0;
					var objRanah;
					
					//alert($("#setRPP_mapel").val() + " | " + $("#setRPP_kelas").val() + " | " + $("#setRPP_semester").val() + " | " + $("#setRPP_sk").val());
					$("#kisidetail").load("<?php echo base_url(); ?>index.php/mainmenu/show_kisi_input/"+mapel+"/"+kls+"/"+sms, function() {
						
						//load Ranah
						var obj;
						var objMateri;
						$.post("index.php/mainmenu/load_ranah_kisi/", {
							txtMapel:mapel
						}, function(data, status) {
							objRanah = jQuery.parseJSON( data );
							
							//Load isi desc KD
							$.post("index.php/mainmenu/load_skkd_kisi/", {
								txtMapel:mapel,
								txtKls:kls,
								txtSms:sms
							}, function(data, status) {
								obj = jQuery.parseJSON( data );
								
								//Load isi materi
								$.post("index.php/mainmenu/load_materi_kisi/", {
									txtMapel:mapel,
									txtKls:kls
								}, function(data, status) {
									//alert(data);
									objMateri = jQuery.parseJSON( data );
									buatbaris_kisi(obj,objMateri);
								});
								
							});
							
							
							
						});
						
						
						
						
						$("#btnAddKisi").click(function() {
							buatbaris_kisi(obj,objMateri);
							return false;
						});
						$("#btnRemoveKisi").click(function() {
							if(noKisi>1) {
								$("#row_kisi_detail"+noKisi).remove();
								noKisi--;
							}
							return false;
						});
						
						
						//submit form
						$("#frmKisi_input").submit(function() {
							
							var postFrmKisi = $(this).serialize();
							
							$("#btnSimpanKisi").attr("disabled","disabled");
							$.ajax({
								type: "POST",
								url: "index.php/mainmenu/simpan_frm_kisi/",
								data: postFrmKisi,
								success: function(data, status) {
									//alert("Penilaian KISI Disimpan : " + data);
									$("#btnSimpanKisi").removeAttr("disabled");
									
									if(status=="success") {
										$("#txtInfoKisi").text("Simpan Kisi Penilaian Soal Berhasil");
										$("#divInfoKisi").fadeIn(100).delay(800).fadeOut(100);
									}
								}
							});
							
							return false;
						});
					});
					
					function call_change_select_kd_kisi() {
						$(".txtSelect_kd").change(function() {
							var idSelectKD = $(this).attr("id");
							var kdid = $(this).val();
							var nomor = $(this).attr("nomor");
							
							$.post("index.php/mainmenu/load_indi_kisi/", {
								txtKdid:kdid
							}, function(dataindi, statusindi) {
								obj = jQuery.parseJSON( dataindi );
								
								$("#txtKisi_indi"+nomor).empty();
								$("#txtKisi_indi"+nomor).append("<option value=''>== Pilih Indi ==</option>");
								for(var i=0; i < obj.length; i++) {
									$("#txtKisi_indi"+nomor).append("<option value='"+obj[i].id+"'>"+obj[i].desc_indi+"</option>");
								}
							});
						});
					}
					
					function isi_select_kd(obj,noKisi) {
						if(obj.length>0) {
							//alert($("#txtKisi_kd"+noKisi));
							$("#txtKisi_kd"+noKisi).empty();
							$("#txtKisi_kd"+noKisi).append("<option value=''>== Pilih KD ==</option>");
							for(var c=0; c < obj.length; c++) {
								$("#txtKisi_kd"+noKisi).append("<option value='"+obj[c].idkd+"'>"+obj[c].kd_detail+"</option>");
							}
						}
					}
					function isi_select_materi(objMateri,noKisi) {
						if(objMateri.length>0) {
							$("#txtKisi_materi"+noKisi).empty();
							$("#txtKisi_materi"+noKisi).append("<option value=''>== Pilih Materi ==</option>");
							for(var c=0; c < objMateri.length; c++) {
								$("#txtKisi_materi"+noKisi).append("<option title='"+objMateri[c].materi+"' value='"+objMateri[c].idmateri+"'>"+potong_kata_materi(objMateri[c].materi)+"</option>");
							}
						}
						
						function potong_kata_materi(kata_asli) {
							var kata_potong = "";
							var maxChar=100;
							if(kata_asli.length>maxChar) {
								kata_potong = kata_asli.substr(0,maxChar);
								kata_potong += "...";
							} else {
								kata_potong=kata_asli;
							}
							return kata_potong;
						}
					}
					
					//soal di KISI diganti jadi rumusan butir soal
					//contoh :Disajikan sebuah kutipan cerpen, siswa menentukan latar cerpen
					
					
					function buatbaris_kisi(obj,objMateri) {
						noKisi++;
						
						var arPilihRanah=new Array();
						arPilihRanah.push("C1 - Pengetahuan");
						arPilihRanah.push("C1 - Pengetahuan");
						arPilihRanah.push("C1 - Pengetahuan");
						arPilihRanah.push("C1 - Pengetahuan");
						arPilihRanah.push("C1 - Pengetahuan");
						
						var hasil = "<tr id='row_kisi_detail"+noKisi+"'>";
						hasil += "<td align='center'>"+noKisi+"<input type='hidden' name='txtKisi_urut[]' id='txtKisi_urut"+noKisi+"' value='"+noKisi+"' ></td>";
						hasil += "<td>";
							hasil += "<select id='txtKisi_kd"+noKisi+"' name='txtKisi_kd[]' title='txtKisi_kd"+noKisi+"' class='form-control txtSelect_kd' nomor='"+noKisi+"' required >";
							hasil += "</select>";
						hasil += "</td>";
						
						hasil += "<td>";
							hasil += "<select id='txtKisi_indi"+noKisi+"' name='txtKisi_indi[]' title='txtKisi_indi"+noKisi+"' class='form-control txtSelect_indi' required >";
							hasil += "<option value=''>== Pilih Indi ==</option>";
							hasil += "</select>";
						hasil += "</td>";
						
						hasil += "<td>";
							hasil += "<select id='txtKisi_materi"+noKisi+"' name='txtKisi_materi[]' title='txtKisi_materi"+noKisi+"' class='form-control' required >";
							hasil += "<option value=''>== Pilih Materi ==</option>";
							hasil += "</select>";
						hasil += "</td>";
						
						hasil += "<td>";
						hasil += "<textarea name='txtKisi_indisoal[]' id='txtKisi_indisoal"+noKisi+"' class='form-control' style='resize:none;height:100px;' required ></textarea>";
						hasil += "</td>";
						
						hasil += "<td>";
							hasil += "<select id='txtKisi_ranah"+noKisi+"' name='txtKisi_ranah[]' title='txtKisi_ranah"+noKisi+"' class='form-control txtSelect_ranah' required >";
							hasil += "</select>";
						hasil += "</td>";
						
						hasil += "<td>";
							hasil += "<select id='txtKisi_bentuk"+noKisi+"' name='txtKisi_bentuk[]' title='txtKisi_bentuk"+noKisi+"' nomor='"+noKisi+"' class='form-control txtSelectKisi_bentuk' required >";
							hasil += "<option value=''>= Pilih Bentuk Soal =</option>";
							hasil += "<option value='PG'>PG</option>";
							hasil += "<option value='Essay'>Essay</option>";
							hasil += "<option value='Isian'>Isian</option>";
							hasil += "</select>";
						hasil += "</td>";
						
						hasil += "<td>";
							hasil += "<textarea name='txtKisi_soal[]' id='txtKisi_soal"+noKisi+"' class='form-control' style='resize:none;height:100px;' required ></textarea>";
						hasil += "</td>";
						
						hasil += "<td>";
							hasil += "<select id='txtKisi_sukar"+noKisi+"' name='txtKisi_sukar[]' title='txtKisi_sukar"+noKisi+"' class='form-control txtSelect_sukar' required >";
							hasil += "<option value='Mudah'>Mudah</option>";
							hasil += "<option value='Sedang'>Sedang</option>";
							hasil += "<option value='Sulit'>Sulit</option>";
							hasil += "</select>";
						hasil += "</td>";
						
						hasil += "<td>";
							hasil += "<input type='number' min='1' max='1000' id='txtKisi_nomor"+noKisi+"' name='txtKisi_nomor[]' title='txtKisi_nomor"+noKisi+"' class='form-control' required >";
						hasil += "</td>";
						
						hasil += "<td id='rowKunci"+noKisi+"'>";
							hasil += "<select id='txtKisi_jawab"+noKisi+"' name='txtKisi_jawab[]' title='txtKisi_jawab"+noKisi+"' class='form-control' required >";
							hasil += "<option value=''> - </option>";
							hasil += "</select>";
						hasil += "</td>";
						
						hasil += "<td>";
							hasil += "<textarea name='txtKisi_buku[]' id='txtKisi_buku"+noKisi+"' class='form-control' style='resize:none;height:100px;' required ></textarea>";
						hasil += "</td>";
						
						hasil += "</tr>";
						
						$("#kisiDetail").append(hasil);
						
						//isi Ranah
						$("#txtKisi_ranah"+noKisi).empty();
						$("#txtKisi_ranah"+noKisi).append("<option value=''>== Pilih Ranah ==</option>");
						for(var r=0; r < objRanah.length; r++) {
							$("#txtKisi_ranah"+noKisi).append("<option value='"+objRanah[r].ranah_kode+"'>"+objRanah[r].ranah_kode + " - " + objRanah[r].ranah_ket +"</option>");
						}
						
						isi_select_kd(obj,noKisi);
						isi_select_materi(objMateri,noKisi);
						call_change_select_kd_kisi();
						
						
						$(".txtSelectKisi_bentuk").change(function() {
							var noUrutKisi = $(this).attr("nomor");
							$("#txtKisi_jawab"+noUrutKisi).remove();
							
							var buatElmKunci = "";
							if($(this).val()=="PG") {
								buatElmKunci += "<select id='txtKisi_jawab"+noUrutKisi+"' name='txtKisi_jawab[]' title='txtKisi_jawab"+noUrutKisi+"' class='form-control' required >";
								buatElmKunci += "<option value=''>= Pilih PG =</option>";
								buatElmKunci += "<option value='A'>A</option>";
								buatElmKunci += "<option value='B'>B</option>";
								buatElmKunci += "<option value='C'>C</option>";
								buatElmKunci += "<option value='D'>D</option>";
								buatElmKunci += "<option value='E'>E</option>";
								buatElmKunci += "</select>";
							} else if($(this).val()=="Essay" || $(this).val()=="Isian") {
								buatElmKunci += "<textarea id='txtKisi_jawab"+noUrutKisi+"' name='txtKisi_jawab[]' title='txtKisi_jawab"+noUrutKisi+"' class='form-control' style='resize:none;height:100px;' required ></textarea>";
							} else {
								buatElmKunci += "<select id='txtKisi_jawab"+noUrutKisi+"' name='txtKisi_jawab[]' title='txtKisi_jawab"+noUrutKisi+"' class='form-control' required >";
								buatElmKunci += "<option value=''> - </option>";
								buatElmKunci += "</select>";
							}
							$("#rowKunci"+noUrutKisi).append(buatElmKunci);
						});
					}
					
				});
				
				
				$("#btnRefreshKisi").click(function() {
					location.reload();
					call_trx_setting_kisi();
				});
				
			});
			
		}
		//END menu Trx Setting KISI ==================================================================
		
		
		
		//REPORT Pemetaan SKKD
		$("#rptMetaSKKD").click(show_report_skkd);
		function show_report_skkd() {
			$( ".panel_setting_subjudul" ).removeClass( "mn_active" );
			$("#rptMetaSKKD").addClass("mn_active");
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/show_meta_skkd/", function() {
				//alert("done report skkd");
				$("#lblSKKD_username").hide();
				$("#setSKKD_username").change(function() {
					$("#setSKKD_name").val($('option:selected', this).attr('alt'));
					$("#lblSKKD_username").html($('option:selected', this).attr('nim'));
					$("#setSKKD_username").hide();
					$("#lblSKKD_username").show();
					
					var dataStr = "txtId=" + $('option:selected', this).val();
					
					$.ajax({
						type: "POST",
						url: "index.php/mainmenu/cariulang_mapel_guru/",
						data: dataStr,
						success: function(data, status) {
							var obj = jQuery.parseJSON( data );
												
							if(obj.length>0) {
								$("#setSKKD_mapel").empty();
								$("#setSKKD_mapel").append("<option value=''>-- Pilih Mata Pelajaran --</option>");
								for(var c=0; c < obj.length; c++) {
									$("#setSKKD_mapel").append("<option alt='"+obj[c].id+"' value='"+obj[c].id_pelajaran+"'>"+obj[c].mapel+"</option>");
								}
							}
						}
					});
				});
						
				$("#setSKKD_mapel").change(function() {
					//alert("ID : " + $('option:selected', this).attr('alt'));
					var almTujuan = "index.php/mainmenu/cari_kelas_based_mapel_prosem/"+$('option:selected', this).attr('alt');
					$("#div_setSKKD_kelas").load(almTujuan, function() {
						
						$("#setProsem_kelas").change(function() {
							$("#detail_report").load("index.php/mainmenu/tampil_lap_skkd/"+$("#setSKKD_mapel").val()+"/"+$("#setProsem_kelas").val(), function() {
								
								$("#btnPDF_skkd").click(function() {
									window.open("index.php/mainmenu/tampil_pdf_skkd/"+$("#setSKKD_mapel").val()+"/"+$("#setProsem_kelas").val(),"_blank");
								});
								
							});
						});
						
					});
				});
				
			});
		}
		//END REPORT Pemetaan SKKD
		
		
		
		//REPORT PROTA
		$("#rptProta").click(show_report_prota);
		function show_report_prota() {
			$( ".panel_setting_subjudul" ).removeClass( "mn_active" );
			$("#rptProta").addClass("mn_active");
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/show_rpt_prota/", function() {
				$("#lblSKKD_username").hide();
				$("#setSKKD_username").change(function() {
					$("#setSKKD_name").val($('option:selected', this).attr('alt'));
					$("#lblSKKD_username").html($('option:selected', this).attr('nim'));
					$("#setSKKD_username").hide();
					$("#lblSKKD_username").show();
					
					var dataStr = "txtId=" + $('option:selected', this).val();
					
					$.ajax({
						type: "POST",
						url: "index.php/mainmenu/cariulang_mapel_guru/",
						data: dataStr,
						success: function(data, status) {
							var obj = jQuery.parseJSON( data );
												
							if(obj.length>0) {
								$("#setSKKD_mapel").empty();
								$("#setSKKD_mapel").append("<option value=''>-- Pilih Mata Pelajaran --</option>");
								for(var c=0; c < obj.length; c++) {
									$("#setSKKD_mapel").append("<option alt='"+obj[c].id+"' value='"+obj[c].id_pelajaran+"'>"+obj[c].mapel+"</option>");
								}
							}
						}
					});
				});
				
				$("#setSKKD_mapel").change(function() {
					var almTujuan = "index.php/mainmenu/cari_kelas_based_mapel_prosem/"+$('option:selected', this).attr('alt');
					$("#div_setSKKD_kelas").load(almTujuan, function() {
						
						$("#setProsem_kelas").change(function() {
							$("#detail_report").load("index.php/mainmenu/tampil_lap_prota/"+$("#setSKKD_mapel").val()+"/"+$("#setProsem_kelas").val(), function() {
								$("#btnPDF_prota").click(function() {
									window.open("index.php/mainmenu/tampil_pdf_prota/"+$("#setSKKD_mapel").val()+"/"+$("#setProsem_kelas").val(),"_blank");
								});
								
							});
						});
						
					});
				});
				
			});
		}
		//END REPORT PROTA
		
		
		
		//REPORT PROSEM
		$("#rptProsem").click(show_report_prosem);
		function show_report_prosem() {
			$( ".panel_setting_subjudul" ).removeClass( "mn_active" );
			$("#rptProsem").addClass("mn_active");
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/show_rpt_prosem/", function() {
				$(".filter_semester").hide();
				
				$("#lblSKKD_username").hide();
				$("#setSKKD_username").change(function() {
					$("#setSKKD_name").val($('option:selected', this).attr('alt'));
					$("#lblSKKD_username").html($('option:selected', this).attr('nim'));
					$("#setSKKD_username").hide();
					$("#lblSKKD_username").show();
					
					var dataStr = "txtId=" + $('option:selected', this).val();
					
					$.ajax({
						type: "POST",
						url: "index.php/mainmenu/cariulang_mapel_guru/",
						data: dataStr,
						success: function(data, status) {
							var obj = jQuery.parseJSON( data );
							if(obj.length>0) {
								$("#set_mapel").empty();
								$("#set_mapel").append("<option value=''>-- Pilih Mata Pelajaran --</option>");
								for(var c=0; c < obj.length; c++) {
									$("#set_mapel").append("<option alt='"+obj[c].id+"' value='"+obj[c].id_pelajaran+"'>"+obj[c].mapel+"</option>");
								}
							}
						}
					});
				});
				
				$("#set_mapel").change(function() {
					var almTujuan = "index.php/mainmenu/cari_kelas_dari_mapel/"+$('option:selected', this).attr('alt');
					$("#div_set_kelas").load(almTujuan, function() {
						
						$("#set_kelas").change(function() {
							$(".filter_semester").show();
							$("#set_semester").change(function() {
								$("#detail_report").load("index.php/mainmenu/tampil_lap_prosem/"+$("#set_mapel").val()+"/"+$("#set_kelas").val()+"/"+$("#set_semester").val(), function() {
									$("#btnPDF_prosem").click(function() {
										window.open("index.php/mainmenu/tampil_pdf_prosem/"+$("#set_mapel").val()+"/"+$("#set_kelas").val()+"/"+$("#set_semester").val(),"_blank");
									});
									
								});
							});
							
							
						});
						
					});
				});
				
			});
		}
		//END REPORT PROSEM
		
		
		
		
		//REPORT SILABUS
		$("#rptSilabus").click(show_report_silabus);
		function show_report_silabus() {
			$( ".panel_setting_subjudul" ).removeClass( "mn_active" );
			$("#rptSilabus").addClass("mn_active");
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/show_rpt_silabus/", function() {
				$(".filter_semester").hide();
				
				$("#lblSKKD_username").hide();
				$("#setSKKD_username").change(function() {
					$("#setSKKD_name").val($('option:selected', this).attr('alt'));
					$("#lblSKKD_username").html($('option:selected', this).attr('nim'));
					$("#setSKKD_username").hide();
					$("#lblSKKD_username").show();
					
					var dataStr = "txtId=" + $('option:selected', this).val();
					
					$.ajax({
						type: "POST",
						url: "index.php/mainmenu/cariulang_mapel_guru/",
						data: dataStr,
						success: function(data, status) {
							var obj = jQuery.parseJSON( data );
							if(obj.length>0) {
								$("#set_mapel").empty();
								$("#set_mapel").append("<option value=''>-- Pilih Mata Pelajaran --</option>");
								for(var c=0; c < obj.length; c++) {
									$("#set_mapel").append("<option alt='"+obj[c].id+"' value='"+obj[c].id_pelajaran+"'>"+obj[c].mapel+"</option>");
								}
							}
						}
					});
				});
				
				$("#set_mapel").change(function() {
					var almTujuan = "index.php/mainmenu/cari_kelas_dari_mapel/"+$('option:selected', this).attr('alt');
					$("#div_set_kelas").load(almTujuan, function() {
						
						$("#set_kelas").change(function() {
							$(".filter_semester").show();
							$("#set_semester").change(function() {
								
								$.post("index.php/mainmenu/cari_sk/", {
									mapel:$("#set_mapel").val(),
									kelas:$("#set_kelas").val(),
									smstr:$("#set_semester").val(),
								}, function(data, status) {
									//alert(data);
									var obj = jQuery.parseJSON( data );
												
									if(obj.length>0) {
										$("#set_sk").empty();
										$("#set_sk").append("<option value=''>== Pilih SK ==</option>");
										for(var c=0; c < obj.length; c++) {
											$("#set_sk").append("<option value='"+obj[c].id+"'>"+obj[c].sk_no+"</option>");
										}
									}
									
								});
								
								$("#set_sk").change(function() {
									$("#detail_report").load("index.php/mainmenu/tampil_lap_silabus/"+$("#set_mapel").val()+"/"+$("#set_kelas").val()+"/"+$("#set_semester").val()+"/"+$("#set_sk").val(), function() {
										
										
										$("#btnPDF_silabus").click(function() {
											window.open("index.php/mainmenu/tampil_pdf_silabus/"+$("#set_mapel").val()+"/"+$("#set_kelas").val()+"/"+$("#set_semester").val()+"/"+$("#set_sk").val(),"_blank");
										});
										
									});									
								});
								
								
							});
							
							
						});
						
					});
				});
				
			});
		}
		//END REPORT SILABUS
		
		
		
		
		//REPORT KKM
		$("#rptKKM").click(show_report_kkm);
		function show_report_kkm() {
			$( ".panel_setting_subjudul" ).removeClass( "mn_active" );
			$("#rptKKM").addClass("mn_active");
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/show_rpt_kkm/", function() {
				$(".filter_semester").hide();
				
				$("#lblSKKD_username").hide();
				$("#setSKKD_username").change(function() {
					$("#setSKKD_name").val($('option:selected', this).attr('alt'));
					$("#lblSKKD_username").html($('option:selected', this).attr('nim'));
					$("#setSKKD_username").hide();
					$("#lblSKKD_username").show();
					
					var dataStr = "txtId=" + $('option:selected', this).val();
					
					$.ajax({
						type: "POST",
						url: "index.php/mainmenu/cariulang_mapel_guru/",
						data: dataStr,
						success: function(data, status) {
							var obj = jQuery.parseJSON( data );
							if(obj.length>0) {
								$("#set_mapel").empty();
								$("#set_mapel").append("<option value=''>-- Pilih Mata Pelajaran --</option>");
								for(var c=0; c < obj.length; c++) {
									$("#set_mapel").append("<option alt='"+obj[c].id+"' value='"+obj[c].id_pelajaran+"'>"+obj[c].mapel+"</option>");
								}
							}
						}
					});
				});
				
				$("#set_mapel").change(function() {
					var almTujuan = "index.php/mainmenu/cari_kelas_dari_mapel/"+$('option:selected', this).attr('alt');
					$("#div_set_kelas").load(almTujuan, function() {
						
						$("#set_kelas").change(function() {
							$(".filter_semester").show();
							$("#set_semester").change(function() {
								
								$("#detail_report").load("index.php/mainmenu/tampil_lap_kkm/"+$("#set_mapel").val()+"/"+$("#set_kelas").val()+"/"+$("#set_semester").val(), function() {
									
									$("#btnPDF_kkm").click(function() {
										window.open("index.php/mainmenu/tampil_pdf_kkm/"+$("#set_mapel").val()+"/"+$("#set_kelas").val()+"/"+$("#set_semester").val(),"_blank");
									});
										
								});
							});
							
							
						});
						
					});
				});
				
			});
		}
		//END REPORT KKM
		
		
		
		//REPORT RPP
		$("#rptRPP").click(show_report_rpp);
		function show_report_rpp() {
			$( ".panel_setting_subjudul" ).removeClass( "mn_active" );
			$("#rptRPP").addClass("mn_active");
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/show_rpt_rpp/", function() {
				$(".filter_semester").hide();
				
				$("#lblSKKD_username").hide();
				$("#setSKKD_username").change(function() {
					$("#setSKKD_name").val($('option:selected', this).attr('alt'));
					$("#lblSKKD_username").html($('option:selected', this).attr('nim'));
					$("#setSKKD_username").hide();
					$("#lblSKKD_username").show();
					
					var dataStr = "txtId=" + $('option:selected', this).val();
					
					$.ajax({
						type: "POST",
						url: "index.php/mainmenu/cariulang_mapel_guru/",
						data: dataStr,
						success: function(data, status) {
							var obj = jQuery.parseJSON( data );
							if(obj.length>0) {
								$("#set_mapel").empty();
								$("#set_mapel").append("<option value=''>-- Pilih Mata Pelajaran --</option>");
								for(var c=0; c < obj.length; c++) {
									$("#set_mapel").append("<option alt='"+obj[c].id+"' value='"+obj[c].id_pelajaran+"'>"+obj[c].mapel+"</option>");
								}
							}
						}
					});
				});
				
				
				$("#set_mapel").change(function() {
					var almTujuan = "index.php/mainmenu/cari_kelas_dari_mapel/"+$('option:selected', this).attr('alt');
					$("#div_set_kelas").load(almTujuan, function() {
						
						$("#set_kelas").change(function() {
							$(".filter_semester").show();
							$("#set_semester").change(function() {
								
								$.post("index.php/mainmenu/cari_sk/", {
									mapel:$("#set_mapel").val(),
									kelas:$("#set_kelas").val(),
									smstr:$("#set_semester").val(),
								}, function(data, status) {
									//alert(data);
									var obj = jQuery.parseJSON( data );
												
									if(obj.length>0) {
										$("#set_sk").empty();
										$("#set_sk").append("<option value=''>== Pilih SK ==</option>");
										for(var c=0; c < obj.length; c++) {
											$("#set_sk").append("<option value='"+obj[c].id+"'>"+obj[c].sk_no+"</option>");
										}
									}
									
								});
								
								$("#set_sk").change(function() {
									$("#detail_report").load("index.php/mainmenu/tampil_lap_rpp/"+$("#set_mapel").val()+"/"+$("#set_kelas").val()+"/"+$("#set_semester").val()+"/"+$("#set_sk").val()+"/"+$("#set_sk option:selected").text(), function() {
										
										$("#btnPDF_rpp").click(function() {
											//alert("rpp report pdf");
											window.open("index.php/mainmenu/tampil_pdf_rpp/"+$("#set_mapel").val()+"/"+$("#set_kelas").val()+"/"+$("#set_semester").val()+"/"+$("#set_sk").val()+"/"+$("#set_sk option:selected").text(),"_blank");
										});
										
									});									
								});
								
								
							});
							
							
						});
						
					});
				});
				
			});
		}
		//END REPORT RPP
		
		
		
		//REPORT REKAP ADM
		$("#rptRekapAdm").click(show_report_rekap);
		function show_report_rekap() {
			$( ".panel_setting_subjudul" ).removeClass( "mn_active" );
			$("#rptRekapAdm").addClass("mn_active");
			
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/show_rpt_rekap/", function() {
				
				$("#txtJenjang").change(function() {
					$("#conRekap").load("<?php echo base_url(); ?>index.php/mainmenu/show_rpt_rekap_view/"+$("#txtJenjang").val(), function() {
						
					});
				});
				
			});
		}
		//END REPORT REKAP ADM
		
		
		$("#rptRekapKKM").click(show_rekap_kkm);
		function show_rekap_kkm() {
			$( ".panel_setting_subjudul" ).removeClass( "mn_active" );
			$("#rptRekapKKM").addClass("mn_active");
			
			$("#content_adm").load("<?php echo base_url(); ?>index.php/mainmenu/show_rpt_rekap/", function() {
				
				$("#txtJenjang").change(function() {
					$("#conRekap").load("<?php echo base_url(); ?>index.php/mainmenu/show_rekap_kkm_view/"+$("#txtJenjang").val(), function() {
						
					});
				});
				
			});
		}
		
		
				
		$( "#dialog_content" ).dialog({
			autoOpen: false,
			width: 400,
			modal: true,
			resizable: true,
			width: 700,
			buttons: [
				{
					text: "Ok",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
		});
	});
	
	</script>
	
</head>

<body>
<div class="container-fluid">
	<div class="row topmenu-header" >
		<div class="col-md-4" style='padding:3px;' >
			<span class="header-text" style="font-size:25px;text-align:left;padding-left:10px;vertical-align:bottom;" >
				<img src='<?php echo base_url(); ?>image/p_logo5.png' width='30' height='30'>
				PAHOA Elearning system
			</span>
			<!--<span class="header-text header-desc" >&nbsp; - PAHOA Elearning</span>-->
		</div>
		
		
		<div class="col-md-8" align='right' style='padding:3px;padding-right:10px;' >
			<!--<div >
				<img style="height:37px;float:right;padding-left:10px;cursor:pointer" src="<?php echo base_url(); ?>image/mail.png" title='Message' >
				<span class='message_count' >99</span>
			</div>-->
			
			<img style="height:37px;float:right;;cursor:pointer" src="<?php echo base_url(); ?>photo/thumb/<?php echo $data_profile->row(0)->pic; ?>"   >
			
			<span class="header-username" style="cursor:pointer;">
				<div class="dropdown"  style="z-index:10;" >
					<div class="dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
						<?php 
						echo " (" . $this->session->userdata('login_username') . ") ";
						echo $this->session->userdata('login_nama'); 
						?>
					<span class="caret"></span></div>
					<ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style="right:0px;top:30px;">
					  <li role="presentation"><a role="menuitem" tabindex="-1" id="idChangePass" >Change Pass</a></li>
					  <li role="presentation"><a role="menuitem" tabindex="-1" id="idChangePic">Profile</a></li>
					  <li role="presentation"><a role="menuitem" tabindex="-1" id="idFeedInfo">Feed Info</a></li>
					  <li role="presentation" class="divider"></li>
					  <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php/mainmenu/logout">Logout</a></li>
					</ul>
				</div>
			</span>
			
			
		</div>
		
	</div>
	
	
	<div class="row" >
		<div class="col-md-2 panel_setting_awal" style="padding:3px;background-color:#8C3635;" >
			<div class="leftmenu_hiasan" id="leftmenu_top" >
			<?php
				echo "<marquee behavior='slide' >";
				echo "Active : " . $this->session->userdata('tahunAjr_active') . " (smst: ". $this->session->userdata('semester_active') .")";
				echo "</marquee>";
			?>
			</div>
			
			
			<!-- ############################################ MASTER ############################################ -->
			<?php if($this->session->userdata('login_id_jabatan')==2 || 
			$this->session->userdata('login_id_jabatan')==3 ||
			$this->session->userdata('login_id_jabatan')==6) { ?>
			<div class="panel panel-default">
				<div class="panel-heading panel_setting_judul" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
					<h4 class="panel-title" >
						Master
					</h4>
				</div>
				<div id="collapse1" class="panel-collapse collapse in">
					<div class="panel-body panel_setting_subjudul" id="msTahunAjaran" title="Tambahkan dan active kan tahun ajaran disini" >Tahun Ajaran</div>
					<div class="panel-body panel_setting_subjudul" id="msKelas"  title="Buat atau edit kelas baru disini" >Kelas</div>
					<div class="panel-body panel_setting_subjudul" id="msPelajaran" title="Buat atau edit mata pelajaran disini" >Pelajaran</div>
					<div class="panel-body panel_setting_subjudul" id="msUser" title="Buat user baru atau...
active dan non-active kan user" >User</div>
					<div class="panel-body panel_setting_subjudul" id="trxSettingGuruMapel" title="Pembagian tugas guru mata pelajaran" >Setting Guru Mapel</div>
				</div>
			</div>
			<?php } ?>
		
		
			<!-- ############################################ TEACHER ADMINISTRATION ############################################ -->
			<?php if($this->session->userdata('login_id_jabatan')==1 ||
			$this->session->userdata('login_id_jabatan')==6) { ?>
			<div class="panel panel-default">
				<div class="panel-heading panel_setting_judul" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
					<h4 class="panel-title" title="Menu Administrasi Guru" >
						Teacher Administration
					</h4>
				</div>
				<div id="collapse2" class="panel-collapse collapse in">
					<div class="panel-body panel_setting_subjudul" id="trxSettingSkKd" title="Analisis Pemetaan SK-KD" >Pemetaan SK-KD</div>
					<div class="panel-body panel_setting_subjudul" id="trxSettingProta" title="Program Tahunan" >Prota</div>
					<div class="panel-body panel_setting_subjudul" id="trxSettingProsem" title="Program Semester" >Prosem</div>
					<div class="panel-body panel_setting_subjudul" id="trxSettingSilabus" title="Silabus">Silabus</div>
					<div class="panel-body panel_setting_subjudul" id="trxSettingKKM" title="Kriteria Ketuntasan Minimum" >KKM</div>
					<div class="panel-body panel_setting_subjudul" id="trxSettingRPP"  title="Rencana Pelaksanaan Pembelajaran" >RPP</div>
					<!--<div class="panel-body panel_setting_subjudul" id="trxSettingKisi" title="Kisi-kisi Ujian Sekolah" >Kisi-kisi</div>-->
				</div>
			</div>
			<?php } ?>
			
			
			
			<!-- ############################################ REPORT ############################################ -->
			<div class="panel panel-default">
				<div class="panel-heading panel_setting_judul" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
					<h4 class="panel-title" title="Laporan adm guru pada kumpul disini" >
						Report
					</h4>
				</div>
				<div id="collapse3" class="panel-collapse collapse in">
					<?php if($this->session->userdata('login_id_jabatan')==1 ||
					$this->session->userdata('login_id_jabatan')==2 ||
					$this->session->userdata('login_id_jabatan')==3 ||
					$this->session->userdata('login_id_jabatan')==4 ||
					$this->session->userdata('login_id_jabatan')==5 ||
					$this->session->userdata('login_id_jabatan')==6) { ?>
						<div class="panel-body panel_setting_subjudul" id="rptMetaSKKD" >Pemetaan SKKD</div>
						<div class="panel-body panel_setting_subjudul" id="rptProta">Report Prota</div>
						<div class="panel-body panel_setting_subjudul" id="rptProsem">Report Prosem</div>
						<div class="panel-body panel_setting_subjudul" id="rptSilabus">Report Silabus</div>
						<div class="panel-body panel_setting_subjudul" id="rptKKM">Report KKM</div>
						<div class="panel-body panel_setting_subjudul" id="rptRPP">Report RPP</div>
					<?php } ?>
					
					<?php if($this->session->userdata('login_id_jabatan')==2 ||
					$this->session->userdata('login_id_jabatan')==3 ||
					$this->session->userdata('login_id_jabatan')==4 ||
					$this->session->userdata('login_id_jabatan')==5 ||
					$this->session->userdata('login_id_jabatan')==6) { ?>
						<div class="panel-body panel_setting_subjudul" id="rptRekapKKM">Rekap KKM</div>
						<div class="panel-body panel_setting_subjudul" id="rptRekapAdm">Rekap Administrasi</div>
					<?php } ?>
				</div>
			</div>
			
			<div class="leftmenu_hiasan" >
			</div>
		</div>
		
		<div id="load_menu_jquery" ></div>
		<div class="col-md-10" style="padding:0px;text-align:center;" id="content_adm" >
			
		</div>
	</div>

	<span id='infoMsgBox' class='alert_msg_box' > Update Success </span>
	
	<div id="dialog_content" title="Detail" ></div>
		
</div>

		

</body>

</html>