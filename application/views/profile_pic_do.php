<?php
//print_r($txtId);
//print_r($txtImg);
$target_dir = "photo/";
$namafile = $txtId . "_" . random_string(30) . "." . pathinfo($txtImg['name'],PATHINFO_EXTENSION);
$target_file = $target_dir . $namafile;

if (move_uploaded_file($txtImg["tmp_name"], $target_file)) {
	
	createThumbs("photo/","photo/thumb/",100,$namafile);
	
	$updatePic = $this->db->query("UPDATE ms_user SET pic='".$namafile."' WHERE id='".$txtId."'");
	
	redirect('mainmenu/', 'refresh');
	//$this->profile_change_pic();
} else {
	//echo "Sorry, there was an error uploading your file.";
}

function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}

function createThumbs( $pathToImages, $pathToThumbs, $thumbWidth, $fname ) 
{
	$img = imagecreatefromjpeg( "{$pathToImages}{$fname}" );
	$width = imagesx( $img );
	$height = imagesy( $img );

	$new_width = $thumbWidth;
	$new_height = floor( $height * ( $thumbWidth / $width ) );

	$tmp_img = imagecreatetruecolor( $new_width, $new_height );
	imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
	imagejpeg( $tmp_img, "{$pathToThumbs}{$fname}" );
}

?>