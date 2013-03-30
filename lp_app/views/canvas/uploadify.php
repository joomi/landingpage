<?php
/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/

include(ABSPATH . DS .'includes' . DS . 'lib' . DS . 'class.upload.php');

if (!empty($_FILES)) {
	$width = $_POST['width'];
	$reflection = $_POST['reflection'];
	$folder = $_POST['folder'];
	$handle = new upload($_FILES['image_field']);
	if ($handle->uploaded) {
      $handle->file_new_name_body   = 'image_resized';
      $handle->image_resize         = true;
      $handle->image_x              = $width;
      $handle->image_ratio_y        = true;
	  $handle->image_convert        = 'jpg';
	  $handle->jpeg_quality = 95;
//	  if($reflection){
//		  $handle->image_reflection_height = '25%';
//		  $handle->image_default_color = '#ffffff';
//		  $handle->image_reflection_opacity = 60;
//		  $handle->image_reflection_space = 0;
//	  }
      $handle->process(ABSPATH . DS .'uploads' . DS .'users' . DS .$folder. DS . 'images');
      if ($handle->processed) {
          echo base_url().'/uploads/users/'.$folder.'/images/'.$handle->file_dst_name ;
          $handle->clean();
      } else {
          echo 'error : ' . $handle->error;
      }
	}	
}
?>