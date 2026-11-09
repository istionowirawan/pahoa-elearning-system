<div class="header-popup">
	<b>Elearning Information (
	<?php echo $this->session->userdata('tahunAjr_active'); ?>
	)</b>
</div>

<div class="isi-popup" style='background-color:#eeeee;' >
	
	<form action='' method='POST' id='frmFeed' name='frmFeed' >
	<table class="table table-condensed" style='background-color:#F5F5F5;box-shadow: 2px 2px 2px #888888;' >
		<tr>
			<td colspan='2' align='left' style='font-size:11px;color:#286090;' >
			<span class="glyphicon glyphicon glyphicon-info-sign" aria-hidden="true"></span> 
				Give Information for everyone
			</td>
		</tr>
		
		<tr >
			<td width='70'>
				<?php
				$imgHead="";
				if($data_profile->row(0)->pic=="") {
					$imgHead = "guest.png";
				} else {
					$imgHead = $data_profile->row(0)->pic;
				}
				?>
				<img width='70' height='80' align='left' src="<?php echo base_url(); ?>photo/thumb/<?php echo $imgHead; ?>"   >
				<input type='hidden' name='txtIdUser' id='txtIdUser' value='<?php echo $this->session->userdata('login_userid'); ?>' >
			</td>
			<td align='right'>
				<textarea name='txtFeed' id='txtFeed' class='form-control' style='height:80px;' maxlength="500" required placeholder='Berikan informasi untuk semua...' ></textarea>
				<label id='lblCharLeft' style='margin:5px;color:#C64848;font-size:11px;' >Characters left: 500</label> 
				<input type='submit' value='Post' class="btn btn-primary" style='width:100px;height:30px;margin-top:5px;padding:0px;' title='Post your info' >
			</td>
			
		</tr>
	</table>
	</form>
	
	<div id='feed_content' >
		<?php
		$idActive=-1;
		$newFeed=false;
		$hitungReply=0;
		foreach($feed_data->result() as $obj) {
			if($idActive!=$obj->id) {
				$imgIsi = "";
				if($obj->pic=="") {
					$imgIsi = "guest.png";
				} else {
					$imgIsi = $obj->pic;
				}
				echo "<form action='' method='POST' id='frmDescFeed".$obj->id."'  name='frmDescFeed' class='frmFeedReply' alt='".$obj->id."' >";
				echo "<table border='0' class='table bordered' style='background-color:#F5F5F5;box-shadow: 1px 1px 1px #888888;' >";
				echo "<tr align='left' >
					<td width='40' colspan='2' style='border-top:0px;border-bottom:0px' ><img align='left' width='40' height='40' src='".base_url() . "photo/thumb/" . $imgIsi."' style='margin-right:10px;' >";
						
					if($obj->user_id==$this->session->userdata('login_userid')) {
						echo "<div class='delete_post' alt='".$obj->id."' title='hapus' >x</div>";
					}
						
				echo "<label style='color:#337AB7'>".$obj->nama."</label><hr style='height:1px;visibility:hidden;margin-bottom:-33px;' />
						<label style='color:#bcb7b7;font-size:10px;' >".date('d F Y, H:i:s', strtotime($obj->date))."</label>
						<input type='hidden' name='txtIDfeed' value='".$obj->id."' >
					</td>
				</tr>";
				
				/* ISI POSTINGAN FEED */
				echo "<tr>
				<td colspan='2' align='left' >".nl2br($obj->feed)."</td>
				</tr>";
				
				$idActive=$obj->id;
				$newFeed=true;
				$hitungReply=0;
			} else {
				$newFeed=false;
			}
			
			if(!empty($obj->nama_reply)) {
				/* SHOW BALASAN FEED */
				$imgIsi = "";
				if($obj->pic_reply=="") {
					$imgIsi = "guest.png";
				} else {
					$imgIsi = $obj->pic_reply;
				}
				
				echo "<tr class='feed_row_reply'>";
				echo "
				<td align='left' width='30' >
					<img width='30' height='30'  src='".base_url() . "photo/thumb/" . $imgIsi."' align='left' >
				</td>
				
				<td align='left'>";
				if($obj->user_post==$this->session->userdata('login_userid')) {
					echo "<div class='delete_reply' alt='".$obj->id_reply."' title='hapus' >x</div>";
				}
				echo "<span style='color:#337AB7' >".$obj->nama_reply."</span>
					<span>".nl2br($obj->isi)."</span>
					<div style='color:#bcb7b7;font-size:10px;'>".date('d F Y, H:i:s', strtotime($obj->date_reply))."</div>
				</td>";
				
				echo "</tr>";
				$hitungReply++;
			}
			
			if($hitungReply==$obj->jml_reply || $obj->jml_reply==NULL) {
				/* TEXTBOX & TOMBOL REPLY FEED */
				$imgRply = "";
				if($data_profile->row(0)->pic=="") {
					$imgRply = "guest.png";
				} else {
					$imgRply = $data_profile->row(0)->pic;
				}
				echo "<tr align='left'>
					<td width='30'><img src='".base_url() ."photo/thumb/". $imgRply ."' width='30' height='30'></td>
					<td align='right'>
						<textarea maxlength='500' class='form-control txtReply' name='txtReply' id='txtReply' placeholder='Tuliskan balasan kamu...' required ></textarea>
						<input type='submit' value='Post' title='post your reply' class='btn btn-primary' style='width:70px;height:30px;margin-top:5px;padding:0px;' >
					</td>
				</tr>";
				
				echo "</table>";
				echo "</form>";
				
				echo "<hr style='height:1px;margin-top:-16px;margin-bottom:5px;visibility:hidden;' />";
			}
		}
 		?>
	</div>
	
	
</div>

