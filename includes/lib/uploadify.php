<?php
/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/

// Define a destination
$targetFolder = ''; // Relative to the root
include('class.upload.php');

//$verifyToken = md5('unique_salt' . $_POST['timestamp']);

if (!empty($_FILES)) {
	
  $handle = new upload($_FILES['image_field']);
  if ($handle->uploaded) {
      $handle->file_new_name_body   = 'image_resized';
      $handle->image_resize         = true;
      $handle->image_x              = 100;
      $handle->image_ratio_y        = true;
	  $handle->image_convert        = 'jpg';
	  $handle->jpeg_quality = 95;
//	  $handle->image_reflection_height = '25%';
//	  $handle->image_default_color = '#000000';
//	  $handle->image_reflection_opacity = 60;
      $handle->process('/home/user/files/');
      if ($handle->processed) {
          echo 'image resized';
          $handle->clean();
      } else {
          echo 'error : ' . $handle->error;
      }
  }	
}
?>