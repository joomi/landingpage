<?php
/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/

include('class.upload.php');

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
//	  $handle->image_default_color = '#ffffff';
//	  $handle->image_reflection_opacity = 60;
      $handle->process(dirname(__FILE__).'/uploads/');
      if ($handle->processed) {
          echo 'image resized';
          $handle->clean();
      } else {
          echo 'error : ' . $handle->error;
      }
  }	
}
?>